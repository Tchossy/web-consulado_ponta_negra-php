<?php

require '../../vendor/dompdf/autoload.inc.php';

$dataForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$type_formulario_form = $dataForm['type_formulario'];
$nome_completo_user_form = $dataForm['nome_completo_user'];
$nome_pai_user_form = $dataForm['nome_pai_user'];
$nacionalidade_pai_user_form = $dataForm['nacionalidade_pai_user'];
$nome_mae_user_form = $dataForm['nome_mae_user'];
$nacionalidade_mae_user_form = $dataForm['nacionalidade_mae_user'];

$data_nascimento_user_form = $dataForm['data_nascimento_user'];
$local_nascimento_user_form = $dataForm['local_nascimento_user'];

$comuna_user_form = $dataForm['comuna_user'];
$municipio_user_form = $dataForm['municipio_user'];
$provincia_user_form = $dataForm['provincia_user'];
$pais_user_form = $dataForm['pais_user'];

$estado_civil_user_form = $dataForm['estado_civil_user'];
$sexo_user_form = $dataForm['sexo_user'];
$profissao_user_form = $dataForm['profissao_user'];

$portador_user_form = $dataForm['portador_user'];
$n_documento_user_form = $dataForm['n_documento_user'];
$emitido_pelo_user_form = $dataForm['emitido_pelo_user'];

$residencia_user_form = $dataForm['residencia_user'];
$bairro_user_form = $dataForm['bairro_user'];
$rua_user_form = $dataForm['rua_user'];
$casa_n_user_form = $dataForm['casa_n_user'];
$cuja_referencia_user_form = $dataForm['cuja_referencia_user'];
$telefone_user_form = $dataForm['telefone_user'];


// referencie o namespace Dompdf 
use Dompdf\Dompdf;
use Dompdf\Options;

// instancia e usa a classe dompdf 
$options = new Options();
$options->set('isRemoteEnabled', true); // temp folder with write permission

$dompdf = new Dompdf();
$dompdf->setOptions($options);

$trTable = '
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
  * {
    margin: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 0.94rem;
  }
</style>
</head>
<body>
<section style="     
    max-width: 700px;
    height: auto;
    margin: auto;
    margin-top: 0.8rem;
    position: relative;
    padding-bottom: 1rem;">
   <p 
    style="
    text-align: justify;
    text-transform:uppercase;
    font-weight: bold;
    margin-top: 4rem;
    margin-left: 13rem;
    margin-bottom: 3rem;">
      à <br> sua excelência geral sr consul geral <br> 
      da república de angola em ponta negra <br>
      república do Congo
   </p>

   <p style="text-transform: uppercase;">
      <strong>
        Assunto: Pedido de ' . $type_formulario_form . '
      </strong>
   </p>
   <p style="margin-bottom:1rem; text-transform: uppercase;">
      Object: &nbsp;&nbsp;&nbsp; Demande de transcription d´acte de mariage
   </p> 
   <p>
      <strong>
        Respeitosos cumprimentos
      </strong>
   </p>
   <p style="margin-bottom:1rem;">
      Meilleurs respectueux compliments
   </p>

   <!-- Preenchimentos dos dados -->
   <table style="width: 100%; margin-top: 0.2rem;">
      <tr>
        <td>
          <strong>Eu:</strong> <ins>' . $nome_completo_user_form . '</ins>
          <br>
          Moi
        </td>
      </tr>
   </table>

   <table style="width: 100%; margin-top: 0.2rem;">
      <tr>
        <td>
          <strong>
            Filho (a) de: 
          </strong>
          <ins>' . $nome_pai_user_form . '</ins>
          <br>
          Fils de
        </td>
        <td style="text-align: right;">
          <strong>
            Nacionalidade
          </strong> 
          <ins>' . $nacionalidade_pai_user_form . '</ins>
          <br> 
          Nationalité
        </td>
      </tr>
   </table>

   <table style="width: 100%; margin-top: 0.2rem;">
      <tr>
        <td>
          <strong>
            E de: 
          </strong>
          <ins>' . $nome_mae_user_form . '</ins>
          <br>
          Et de
        </td>
        <td style="text-align: right;">
          <strong>
            Nacionalidade: 
          </strong>
          <ins>' . $nacionalidade_mae_user_form . '</ins>
          <br>
          Nationalité
        </td>  
      </tr>     
   </table>

   <table style="width: 100%; margin-top: 0.2rem;">
      <tr>
        <td>
          <strong>
            Data e Local de Nascimento: 
          </strong>
          <ins>' . $data_nascimento_user_form . '</ins>
          <br>
          Date at Lieu de Naissance le
        </td>
        <td style="text-align: right;">
          <strong>
            em: 
          </strong>
          <ins>' . $local_nascimento_user_form . '</ins>
          <br>
          à
        </td>
      </tr>
   </table>

   <table style="width:100%; margin-top: 0.2rem;">
      <tr>
        <td>
          <strong>
            Comuna de: 
          </strong>
          <ins>' . $comuna_user_form . '</ins>
          <br>
          Commune de
        </td>
        <!-- Melhor não colocar text-align: center nesse td, esta estragar a view, teste! -->
        <td>
            <strong>
              Municipio de: 
            </strong>
            <ins>' . $municipio_user_form . '</ins> 
            <br>
            Municipalité de
        </td>
        <td style="text-align: right;">
          <strong>
          Província de 
          </strong>
          <ins>' . $provincia_user_form . '</ins>
          <br>
          Province de
        </td>
      </tr>
   </table>

   <table style="width: 100%; margin-top: 0.2rem;">
      <tr>
        <td>
          <strong>
            País 
          </strong>
          <ins>' . $pais_user_form . '</ins>
          <br>Pays
        </td>
        <td>
          <strong>
            Estado Civíl 
          </strong>
          <ins>' . $estado_civil_user_form . '</ins>
          <br>
          Etat civil
        </td>
        <td> 
          <strong>
            Sexo 
          </strong>
          <ins>' . $sexo_user_form . '</ins>
          <br>
          Sexe
        </td>
        <td style="text-align: right;">
          <strong>
            Profissão de: 
          </strong>
          <ins>' . $profissao_user_form . '</ins>
          <br>
          Profession
        </td>
      </tr>
   </table>


   <table style="width: 100%; margin-top: 0.2rem;">
      <tr>
        <td>
          <strong>
            Portador(a) de: 
          </strong>
          <ins>' . $portador_user_form . '</ins>
          <br>
          Porteur de
        </td>
        <td>
          <strong>
            N 
          </strong>
          <ins>' . $n_documento_user_form . '</ins>
          <br>
          N
        </td>
        <td style="text-align: right;">
          <strong>
            Emitido pelo  
          </strong>
          <ins>' . $emitido_pelo_user_form . '</ins>
          <br>
          Émis par
        </td>
      </tr>
    </table>


   <table style=" width: 100%; margin-top: 0.2rem;">
      <tr>
        <td>
          <strong>
            Residente em: 
          </strong>
          <ins>' . $residencia_user_form . ',</ins>
          <br>
          Résidente à
        </td>
        <td>
          <strong>
            Bairro 
          </strong>
          <ins>' . $bairro_user_form . ',</ins>
          <br>
          Quartier
        </td>
        <td style="text-align: right;">
          <strong>
            Rua 
          </strong>
          <ins>' . $rua_user_form . '</ins>
          <br>
          Rue
        </td>
      </tr>
   </table>

   <table style="width: 100%; margin-top: 0.2rem;">
      <tr>
        <td>
          <strong>
            Casa n: 
          </strong>
          <ins>' . $casa_n_user_form . '</ins>
          <br>
          maison
        </td>
        <td style="text-align: right;">
          <strong>
            Cuja referência 
          </strong>
          <ins>' . $cuja_referencia_user_form . '</ins>
          <br>
          dont la référence
        </td>
      </tr>
   </table>

   <table style="width: 100%; margin-top: 0.2rem;">
      <tr>
        <td>
          <strong>
            Tel: 
          </strong>
          <ins>' . $telefone_user_form . '</ins>
          <strong>
            República do Congo
          </strong>
        </td>
      </tr>
   </table>

   <p style="margin-top:1rem;">
      <strong>
        Vem respeitosamente solicitar a S.Excelência Sr Cônsul Geral, se digne autorizar a transcrição do <br> 
      Assento de Casamento, conforme documentos em anexo.
      </strong>
   </p>
   <p>
    Je viens très respectuesement solliciter à Son Excellente Monsieur le consul Général, s´il convient d´autoriser la 
    <br>
    Transcription d´Acte de mariage conformément aux documents ci-joints.
   </p>
   <p style="margin-top:1rem;">
      <strong>
        Agradeço desde já a melhor atenção que será prestada ao assunto, e aproveito o ensejo para reiterar 
        <br> 
        os protestos da minha elevada consideração.
      </strong>
   </p>
   <p>
      Vous remercie par avance de l"attention qui sera prêtée à cette demande et je reitère ma plus haute considerération.
   </p>
   <table style="margin-top:1rem; text-transform: uppercase;">
      <tr>
        <td>
          <strong>
            ponta negra, aos 
          </strong>
          <ins>______</ins> de <ins>______________________</ins> de <ins>_________</ins> 
          <br>
          <p style="text-transform: lowercase;">Pointe-Noire, le</p>
        </td>
      </tr>
   </table>
   

   <table style="width: 100%; text-align: center; margin: 1rem 0;">
      <tr>
        <td>
          <strong>
            O(a) Peticionário(a) 
          </strong>
          <br> 
          Le (la) Pétitionnaire
        </td>
      </tr>
   </table>
   <table style="width: 100%; text-align: center;">
      <tr>
        <td>
          <ins>
            ______________________________________
          </ins>
        </td>
      </tr>
   </table>
</section>
</body>
</html>
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