<?php

require '../../vendor/dompdf/autoload.inc.php';

$dataForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$nome_completo_user = $dataForm['nome_completo_user'];
$apelido_user = $dataForm['apelido_user'];
$nome_pai_user = $dataForm['nome_pai_user'];
$nome_mae_user = $dataForm['nome_mae_user'];
$data_nascimento_user = $dataForm['data_nascimento_user'];
$local_nascimento_user = $dataForm['local_nascimento_user'];
$local_trabalho_user = $dataForm['local_trabalho_user'];
$local_residencia_user = $dataForm['local_residencia_user'];
$n_documento_user = $dataForm['n_documento_user'];
$data_emissao_documento_user = $dataForm['data_emissao_documento_user'];
$local_emissao_documento_user = $dataForm['local_emissao_documento_user'];
$motivo_pedido_salvo_conduto = $dataForm['motivo_pedido_salvo_conduto'];


// referencie o namespace Dompdf 
use Dompdf\Dompdf;
use Dompdf\Options;

// instancia e usa a classe dompdf 
$options = new Options();
$options->set('isRemoteEnabled', true); // temp folder with write permission

$dompdf = new Dompdf();
$dompdf->setOptions($options);


$trTable = '
<div class="folha"
style="
width: 700px;
height: auto;
margin: auto;
position: relative;
">
<img src="https://d1yjjnpx0p53s8.cloudfront.net/styles/logo-thumbnail/s3/082016/untitled-1_104.jpg?itok=U_9hZTK0" alt="" 
 style="
 width: 6rem; 
 display: block;
 margin: auto;
 margin-left: 17rem;
">
<h3 
 style="
 font-weight: bold;
 text-transform: uppercase;
 text-align: center;
">
 república de angola
 <br>
 consultado geral em ponta negra
</h3>

<div style="display: flex; justify-content: space-between; align-items: center; gap: 1rem; margin: auto;">
 <h3 style="text-transform: uppercase; font-weight: bold;">
   Formulário para emissão de salvo-conduto
 </h3>
 <div style="width: 140px; height: 140px; border: 1px solid black; position: relative; position: absolute; right: 0; top: 8rem">
   <img src="" alt="" style=" height: 100%;"width="100%;"> 
 </div>
</div>
<p style="text-transform: uppercase; margin-bottom: .5rem;">
 <strong>
   n do processo
 </strong> 
 <ins>__________</ins>
 <strong>
   /cgra/pn/
 </strong> 
 <ins>__________</ins>
</p>
<p>
 <strong>
   Nome
 </strong> 
 <ins> ' . $nome_completo_user . ' </ins>
</p>
<p>
 <strong>
   Apelido
 </strong> 
 <ins> ' . $apelido_user . ' </ins>
</p>
<p>
 <strong>
   Filho de
 </strong> 
 <ins> ' . $nome_pai_user . ' </ins>
</p>
<p>
 <strong>
   E de
 </strong> 
 <ins> ' . $nome_mae_user . ' </ins>
</p>
<table style="width: 100%;">
 <td>
   <strong>
     Data de Nascimento
   </strong> 
   <ins> ' . $data_nascimento_user . ' </ins>
 </td>
 <td style="text-align: right;">
   <strong>
     Local de Nascimento
   </strong> 
   <ins> ' . $local_nascimento_user . ' </ins>
 </td>
</table>
  <p>
 <strong>
   Local de Trabalho
 </strong> 
 <ins>Morro- ' . $local_trabalho_user . ' </ins>
</p>
<p>
 <strong>
   Local de Residência
 </strong> 
 <ins> ' . $local_residencia_user . ' </ins>
</p>
<p>
 <strong>
   N do Documento Pessoal, (B.I., Cédula pessoal, Assento de Nascimento ou cartão de inscrição consular)
 </strong>
 <ins> ' . $n_documento_user . ' </ins>
</p>
<table style="width: 100%;">
 <td>
   <strong>
     Data de emissão
   </strong> 
   <ins> ' . $data_emissao_documento_user . ' </ins>
 </td>
 <td style="text-align: right;">
   <strong>
     Local de emissão
   </strong> <ins> ' . $local_emissao_documento_user . ' </ins>
 </td>
</table>
<div style="position: relative; width: 100%;height: 330px; margin-top: 1rem">
   <div style="width: 350px; border: 2px solid black; padding: 0 .5rem; position: absolute; top: 1rem; left: 1rem;">
     <p style="text-transform: uppercase; text-align: center;">
       <strong>
         Recepção <br> termo de entrega
       </strong>
     </p>
     <p>
       <strong>
         Este processo deu entrada na Missão Consular de
       </strong>
       <br>
       ________________________________________ 
       </ins> 
       <br> 
       <strong style="margin-top: 0.4rem">
         Aos
       </strong> 
       <ins>____</ins>/<ins>____</ins>/<ins>_________</ins>
       <strong>
         e foi lhe atribuído o nº do Registo
       </strong> 
       <ins>______________________________</ins>
     </p>
     <span>
       <strong>
         Data
       </strong> 
       <ins>_____</ins>/<ins>_____</ins>/<ins>__________</ins>
     </span>
     <p>
       <strong>
         Assinatura do funcionário de Serviço Consular
       </strong>
       <br>
       <ins>______________________________</ins>
     </p>
   </div>
   <div style="width: 260px; text-align: justify; position: absolute; top: 1rem; right: 1rem;">
     <strong>
        Motivo do Pedido de Salvo-Conduto
     </strong>
     <ins>
        ' . $motivo_pedido_salvo_conduto . ' 
     </ins>
   </div>
</div>
</div>
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