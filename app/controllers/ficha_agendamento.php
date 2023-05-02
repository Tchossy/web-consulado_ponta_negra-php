<?php

require '../../vendor/dompdf/autoload.inc.php';

$dataForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$nome_completo_user_form = $dataForm['nome_completo_user'];
$email_user_form = $dataForm['email_user'];
$telefone_user_form = $dataForm['telefone_user'];
$data_entrega_user_form = $dataForm['data_entrega_user'];
$sector_user_form = $dataForm['sector_user'];

// referencie o namespace Dompdf 
use Dompdf\Dompdf;
use Dompdf\Options;

// instancia e usa a classe dompdf 
$options = new Options();
$options->set('isRemoteEnabled', true); // temp folder with write permission

$dompdf = new Dompdf();
$dompdf->setOptions($options);

$trTable = '
'.$nome_completo_user_form.'
<br/>
'.$email_user_form.'
<br/>
'.$telefone_user_form.'
<br/>
'.$data_entrega_user_form.'
<br/>
'.$sector_user_form.'
';


$test = 'Rafael';

$dompdf->loadHtml($trTable);

// (Opcional) Configure o tamanho e a orientação do papel 
$dompdf->setPaper('A4', 'portrait');

// Renderiza o HTML como PDF 
$dompdf->render();


// Define o cabeçalho da resposta para indicar que é um arquivo PDF e define o nome do arquivo
header('Content-Type: application/pdf');
header('Content-Disposition: attachment;filename="ficha_inscricao_consular.pdf"');

// Envia a resposta para o navegador
echo $dompdf->output();

// Saída do PDF gerado para o navegador 
// $dompdf->stream(
//   "Fatura_profoma.pdf",
// );