<?php

require '../../vendor/dompdf/autoload.inc.php';

$dataForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$visa_type_form = $dataForm['visa_type'];
$nome_completo_user_form = $dataForm['nome_completo_user'];
$estado_civil_user_form = $dataForm['estado_civil_user'];
$sexo_user_user = $dataForm['sexo_user'];
$data_nascimento_user_form = $dataForm['data_nascimento_user'];
$local_nascimento_user_form = $dataForm['local_nascimento_user'];
$pais_ascimento_user_form = $dataForm['pais_ascimento_user'];
$nacionalidade_origem_user_form = $dataForm['nacionalidade_origem_user'];
$nacionalidade_actual_user_form = $dataForm['nacionalidade_actual_user'];
$passaporte_n_user_form = $dataForm['passaporte_n_user'];
$local_emissao_user_form = $dataForm['local_emissao_user'];
$data_emissao_user_form = $dataForm['data_emissao_user'];
$valido_ate_user_form = $dataForm['valido_ate_user'];
$profissao_user_form = $dataForm['profissao_user'];
$cargo_user_form = $dataForm['cargo_user'];
$local_trabalho_user_form = $dataForm['local_trabalho_user'];
$morada_user_form = $dataForm['morada_user'];
$cidade_user_form = $dataForm['cidade_user'];
$rua_user_form = $dataForm['rua_user'];
$postal_code_user_form = $dataForm['postal_code_user'];
$email_user_form = $dataForm['email_user'];
$phone_number_user_form = $dataForm['phone_number_user'];
$father_name_user_form = $dataForm['father_name_user'];
$father_nationality_user_form = $dataForm['father_nationality_user'];
$mother_name_user_form = $dataForm['mother_name_user'];
$mother_nationality_user_form = $dataForm['mother_nationality_user'];
$reason_travel_user_form = $dataForm['reason_travel_user'];
$hosting_place_user_form = $dataForm['hosting_place_user'];
$city_hosting_user_form = $dataForm['city_hosting_user'];
$road_hosting_user_form = $dataForm['road_hosting_user'];
$house_number_user_form = $dataForm['house_number_user'];
$name_person_responsible_stay_user_form = $dataForm['name_person_responsible_stay_user'];
$person_contact_angola_user_form = $dataForm['person_contact_angola_user'];
$full_address_angola_user_form = $dataForm['full_address_angola_user'];
$entrance_date_angola_user_form = $dataForm['entrance_date_angola_user'];
$border_post_be_used_user_form = $dataForm['border_post_be_used_user'];
$exit_date_angola_user_form = $dataForm['exit_date_angola_user'];
$signature_user_form = $dataForm['signature_user'];
$date_signature_user_form = $dataForm['date_signature_user'];

$ja_realizou_viagens_para_angola_users_form = $dataForm['ja_realizou_viagens_para_angola_users'];
$ja_obteve_cartao_residência_users_form = $dataForm['ja_obteve_cartao_residência_users'];
$ja_obteve_visto_trabalho_users_form = $dataForm['ja_obteve_visto_trabalho_users'];
$ja_lhe_foi_recusado_entrada_angola_users_form = $dataForm['ja_lhe_foi_recusado_entrada_angola_users'];
$ja_foi_expulso_angola_users_form = $dataForm['ja_foi_expulso_angola_users'];

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
      font-size: 0.85rem;
    }
</style>
</head>
<body>
  <!-- Container do Papel -->
  <section class="folha"
   style="
   width: 700px;
   height: auto;
   margin: 0 0 0 2rem;
   position: relative;
   ">
  <!-- IMG da insignia -->
   <img src="https://d1yjjnpx0p53s8.cloudfront.net/styles/logo-thumbnail/s3/082016/untitled-1_104.jpg?itok=U_9hZTK0" alt="" 
    style="
    width: 7rem;
    display: block;
    margin: auto; 
    margin-left: 22rem;
   ">
   <h1 
   style="
   font-weight: bold;
   text-transform: uppercase;
   text-align: center;
   font-size:1.2rem;
   margin-bottom:0.5rem;
   ">
    república de angola
    <br>
    consultado geral em ponta negra
   </h1>
   <hr>
   <p style="text-align: center; font-size:1rem; margin-top:0.5rem; text-transform: uppercase; font-weight: bold;">
    Pedido de <br>
    visto <br>
    (demande de visa)
   </p>

   <div style="position: relative; width: 100%; height: 120px;">
    <div style="display: flex; justify-content: space-between; position: absolute; top: 1rem; left: .5rem;">
      <p>
      <table style="width: 100%; margin-top: 1rem;">
        <tr>
          <td>
            <div style="width: 30px; height: 20px; border: 1px solid black; position: relative;">
              <div style="position: absolute; top: 50%; left: 10%; transform: translate(-50%,-50%); transform: rotate(30deg); width: 25px; height: 1px; background-color: black;">
              </div>
              <div style="position: absolute; top: 50%; left: 10%; transform: translate(-50%,-50%); transform: rotate(-30deg); width: 25px; height: 1px; background-color: black;">
              </div>
            </div>
          </td>
          <td>
            <p style="text-transform: uppercase;">
              ' . $visa_type_form . '
            </p>
          </td>
        </tr>
      </table>
      </p>
     </div>
     <div style="width: 140px; height: 100px; border: 1px solid black; text-transform: uppercase; position:relative; float: right; top: .5rem; right: 1rem;">
      <p style=" text-align: center; position: absolute; top:2.5rem; left:2.5rem">
         fotografia <br> foto  
      </p>
      <img src="" alt="" style=" width:140px; height: 100px; ">
     </div>
   </div>

   <div style="margin-top: 2rem; border: 1px solid black; padding: 1rem;">

    <table style="width: 100%; margin-top: 1rem;">
      <tr>
        <td>
          <strong>Nome(nom, prénom):</strong>  <ins>' . $nome_completo_user_form . '</ins>
        </td>
      </tr>
    </table>

    <table style="width: 100%; margin-top: 1rem;">
      <tr>
        <td>
          <strong>Estado civíl (état civil):</strong> <ins>' . $estado_civil_user_form . '</ins>
        </td>
        <td style="text-align: right;">
          <strong>Sexo (sexe):</strong> <ins>' . $sexo_user_user . '</ins>
        </td>
      </tr>  
    </table>

    <table style="width: 100%; margin-top: 1rem;">
      <tr>
        <td>
            <strong>Data de Nascimento (date de naissance):</strong> <ins>' . $data_nascimento_user_form . '<ins>
          </p>
        </td>
        <td  style="text-align: right;">
            <strong>Local de Nascimento (lieu de naissance):</strong> <ins>' . $local_nascimento_user_form . '</ins>
        </td>
      </tr> 
    </table>

    <table style="width: 100%; margin-top: 1rem;">
      <tr>
        <td>
          <strong>País de Nascimento (pays de naissance):</strong> <ins>' . $pais_ascimento_user_form . '</ins>
        </td>
        <td style="text-align: right;">
          <strong>Nacionalidade de origem (Nationalité d` origine):</strong> <ins>' . $nacionalidade_origem_user_form . '</ins>
        </td>
      </tr>
    </table>

    <table style="width: 100%; margin-top: 1.5rem;">
        <tr>
          <td>
            <strong>Nacionalidade actual (Nationalité actuelle):</strong> <ins>' . $nacionalidade_actual_user_form . '</ins>
          </td>
          <td style="text-align: right;">
            <strong>Passaporte (passeporte) N:</strong> <ins>' . $passaporte_n_user_form . '</ins>
          </td>
        </tr>
    </table>

    <table style="width: 100%; margin-top: 1.5rem;">
      <tr>
        <td>
          <strong>Emitido em (délivre à):</strong> <ins>' . $local_emissao_user_form . '</ins> aos(le)<ins>' . $data_emissao_user_form . '</ins> 
        </td>
        <td>
          <strong>Válido até (expire le):</strong> <ins>' . $valido_ate_user_form . '</ins>
        </td>
      </tr>
    </table>

    <table style="width: 100%; margin-top: 1.5rem;">
      <tr>
        <td>
          <strong>Profissão (Profession):</strong> <ins>' . $profissao_user_form . '</ins> 
        </td>
        <td style="text-align: right;">
          <strong>Cargo que ocupa (Fonction):</strong> <ins>' . $cargo_user_form . '</ins>
        </td>
      </tr>
    </table>

    <table style="width: 100%; margin-top: 1.5rem;">
      <tr>
        <td>
          <strong>Local de Trabalho (Lieu de travail):</strong> <ins>' . $local_trabalho_user_form . '</ins> 
        </td>
      </tr>
      
    </table>

    <table style="width: 100%; margin-top: 1.5rem;">
      <tr>
        <td>
          <strong>Morada (adresse):</strong> <ins>' . $morada_user_form . '</ins> 
        </td>
        <td style="text-align: right;">
          <strong>Cidade (ville):</strong> <ins>' . $cidade_user_form . '</ins>
        </td>
      </tr>
    </table>

    <table style="width: 100%; margin-top: 1.5rem;">
      <tr>
        <td>
          <strong>Rua (rue):</strong> <ins>' . $rua_user_form . '</ins> 
        </td>
        <td style="text-align: right;">
          <strong>Codigo Postal (code postal):</strong> <ins>' . $postal_code_user_form . '</ins>
        </td>
      </tr>
    </table>

    <table style="width: 100%; margin-top: 1.5rem;">
      <tr>
        <td>
          <strong>N de téléfone (telephone):</strong> <ins>' . $email_user_form . '</ins> 
        </td>
        <td style="text-align: right;">
          <strong>Email:</strong> <ins>' . $phone_number_user_form . '</ins>
        </td>
      </tr>   
    </table>

    <table style=" width: 100%; margin-top: 1.5rem;">
      <tr>
        <td>
          <strong>Nome do pai (nom du père):</strong> <ins>' . $father_name_user_form . '</ins> 
        </td>
        <td style="text-align: right;">
          <strong>Nacionalidade do pai (Nationalité du père):</strong> <ins>' . $father_nationality_user_form . '</ins>
        </td>
      </tr>  
    </table>

    <table style="width: 100%; margin-top: 1.5rem; ">
      <tr>
        <td>
          <strong>Nome da mãe (nom de la mère):</strong> <ins>' . $mother_name_user_form . '</ins> 
        </td>
        <td style="text-align: right;">
          <strong>Nacionalidade da mãe (Nationalité de la mère):</strong> <ins>' . $mother_nationality_user_form . '</ins>
        </td>
      </tr>
    </table>

    <table style="width: 100%; margin-top: 1.5rem; ">
      <tr>
        <td>
          <strong>Motivo de origem (motif de voyage):</strong> <ins>' . $reason_travel_user_form . '</ins>
        </td>
      </tr>
    </table>
    <table style="width: 100%; margin-top: 1.5rem; ">
      <tr>
        <td>
          <strong>Local de Hospedagem (lieu de résidence):</strong> <ins>' . $hosting_place_user_form . '</ins>
        </td>
      </tr>
    </table>

    <table style=" width: 100%; margin-top: 1.5rem;">
      <tr>
        <td>
          <strong>Cidade(ville):</strong> <ins>' . $city_hosting_user_form . '</ins> 
        </td>
        <td>
          <strong>Rua(rue):</strong> <ins>' . $road_hosting_user_form . '</ins>
        </td>
        <td style="text-align: right;">
          <strong>Case(case) N:</strong> <ins>' . $house_number_user_form . '</ins>
        </td>
      </tr>
    </table>
    <p style="margin-top: 0.6rem;">
      <strong>
        Nome da pessoa ou organismo que resposibiliará pela sua estadia
        (nom de la personne ou de l`organisme qui prendra la charge de votre séjour):
      </strong> 
      <ins>
        ' . $name_person_responsible_stay_user_form . '
      </ins>
    </p>
  </section>

  <br/>
  <br/>
  <br/>

  <!-- Container do Papel -->
  <section class="folha"
   style="
   width: 700px;
   height: auto;
   margin: auto;
   margin-top: 2rem;
   position: relative;
   margin-top: 8rem;
   ">
   <p style="text-transform: uppercase; border: 1px solid black; text-align: center; padding: 1rem .5rem;"><strong>a preencher pelo solicitante de visto</strong> <br> 
    <span style="text-transform: capitalize;">
      À remplir par le demandeur de visa
    </span> 
   </p>
   <p>
    <strong>
      Nome da pessoa ou organismo a contactar em Angola (nom de la personne ou de l`organisme à contacter em Angola):
    </strong> 
    <ins>
      ' . $person_contact_angola_user_form . ' 
    </ins>
   </p>
   <p>
    <strong>Endereço completo em Angola (adresse complète en Angola): </strong>
    <ins> 
      ' . $full_address_angola_user_form . ' 
    </ins>
   </p>
   <p>
    <strong>Data de entrada em Angola(date d` entrée en Angola):</strong> <ins>' . $entrance_date_angola_user_form . '</ins>
    &nbsp;
    <strong>
      Posto de fronteira a utilizar(poste de frontière d` entrée):
    </strong> 
    <ins>
      ' . $border_post_be_used_user_form . '
    </ins> 
   </p>

   <table style="width: 100%; margin-top: 1rem;">
      <tr>
        <td>
          <strong>
            Data de saída de Angola(date de sortie en Angola):
          </strong> 
          <ins>' . $exit_date_angola_user_form . '</ins>
        </td>
      </tr>
   </table>

   <table style="width: 100%; margin-top: 1rem;">
      <tr>
        <td>
          <strong>
            Assinatura do requerente (signature du demandeur):
          </strong> 
          <ins>' . $signature_user_form . '</ins>
          &nbsp;
          <strong>
            Data(date):
          </strong> 
          <ins>' . $date_signature_user_form . '</ins>
        </td>
      </tr>
   </table>

   <div style="border: 2px solid black; padding: 1.5rem; margin-top: .5rem;">
    <table style="width:100%; ">
      <thead>
        <tr style="text-align: center;">
          <td>
            <strong>
              Insformações Complementares (informations complémentaires)
            </strong>
          </td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <strong>
              Já realizou viagens para Angola
            </strong> 
            <br> 
            (Etes-vous déjà allé en Angola)
          </td>
          <td>
              ' . $ja_realizou_viagens_para_angola_users_form . ' 
              <div style="width: 30px; height: 20px; border: 1px solid black; position:relative;">
                <div style="position: absolute; top: 50%; left: 10%; transform: translate(-50%,-50%); transform: rotate(30deg); width: 25px; height: 1px; background-color: black;">
                </div>
                <div style="position: absolute; top: 50%; left: 10%; transform: translate(-50%,-50%); transform: rotate(-30deg); width: 25px; height: 1px; background-color: black;">
                </div>
              </div>
          </td>
          
        </tr>
        <tr>
          <td>
            <strong>
              Já obteve Cartão de Residência
            </strong> 
            <br> 
            (Avez-vous déjà été détenteur d`un tire de sójour)
          </td>
          <td>
            ' . $ja_obteve_cartao_residência_users_form . ' &nbsp; 
            <div style="width: 30px; height: 20px; border: 1px solid black; position:relative;">
              <div style="position: absolute; top: 50%; left: 10%; transform: translate(-50%,-50%); transform: rotate(30deg); width: 25px; height: 1px; background-color: black;">
              </div>
              <div style="position: absolute; top: 50%; left: 10%; transform: translate(-50%,-50%); transform: rotate(-30deg); width: 25px; height: 1px; background-color: black;">
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <strong>
              Já obteve visto de trabalho
            </strong>
            <br> 
            (Avez-vous déjà obtenu un visa de travail)</td>
          <td>
            ' . $ja_obteve_visto_trabalho_users_form . ' &nbsp; 
            <div style="width: 30px; height: 20px; border: 1px solid black; position:relative;">
              <div style="position: absolute; top: 50%; left: 10%; transform: translate(-50%,-50%); transform: rotate(30deg); width: 25px; height: 1px; background-color: black;">
              </div>
              <div style="position: absolute; top: 50%; left: 10%; transform: translate(-50%,-50%); transform: rotate(-30deg); width: 25px; height: 1px; background-color: black;">
              </div>
            </div>
          </td>
        </tr>
        <tr>
        <tr>
          <td>
            <strong>
              Já lhe foi recusada a entrada em Angola
            </strong> 
            <br> 
            (Avez-vous déjà eu un refus d` entrée en Angola)
          </td>
          <td>
            ' . $ja_lhe_foi_recusado_entrada_angola_users_form . ' &nbsp; 
            <div style="width: 30px; height: 20px; border: 1px solid black; position:relative;">
              <div style="position: absolute; top: 50%; left: 10%; transform: translate(-50%,-50%); transform: rotate(30deg); width: 25px; height: 1px; background-color: black;">
              </div>
              <div style="position: absolute; top: 50%; left: 10%; transform: translate(-50%,-50%); transform: rotate(-30deg); width: 25px; height: 1px; background-color: black;">
              </div>
            </div>
          </td>
        </tr>
          <td>
            <strong>
              Já foi expulso de Angola
            </strong>
            <br> 
            (Avez-vous déjà été expulsé(e) de l` Angola)
          </td>
          <td>
            ' . $ja_foi_expulso_angola_users_form . ' &nbsp; 
            <div style="width: 30px; height: 20px; border: 1px solid black; position:relative;">
              <div style="position: absolute; top: 50%; left: 10%; transform: translate(-50%,-50%); transform: rotate(30deg); width: 25px; height: 1px; background-color: black;">
              </div>
              <div style="position: absolute; top: 50%; left: 10%; transform: translate(-50%,-50%); transform: rotate(-30deg); width: 25px; height: 1px; background-color: black;">
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
    
   </div>   
   <p style="text-transform: uppercase; border: 1px solid black; text-align: center; padding: 1rem .5rem; margin: 2rem 0">
    <strong>
      a preencher pelo sector consular
    </strong> 
    <br> 
    <span style="text-transform: capitalize;">
      À remplir par le secteur Consulaire
    </span> 
   </p>
   <div style=" border: 1px solid black; text-align: center; padding: 1rem .5rem;">
    <p style="text-align: center; margin-bottom: 5rem;">
      <strong>
        Do Responsável do Sector Consular (Décision du responsable du secteur Consulaire)
      </strong>
    </p>
    <table style="width: 100%;">
      <tr style="text-align: left;">
        <td>
          <strong>Date</strong> 
          <br> 
          (date) 
          <br> <br> 
          <ins>_____</ins>/<ins>_____</ins>/<ins>__________</ins>
        </td>
        <td style="text-align: right;">
          <strong>
            O(A) Responsável
          </strong>
          <br> 
          Le (la) Responsable 
          <br> <br>
          <ins>_______________________________</ins>
        </td>
      </tr>
    </table> 
   </div>
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