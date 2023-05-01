<?php

require '../../vendor/dompdf/autoload.inc.php';

$dataForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$nome_completo_user_form = $dataForm['nome_completo_user'];
$apelido_user_form = $dataForm['apelido_user'];
$dia_user_form = $dataForm['dia_user'];
$mes_user_form = $dataForm['mes_user'];
$ano_user_form = $dataForm['ano_user'];
$local_nascimento_user_form = $dataForm['local_nascimento_user'];
$municipio_user_form = $dataForm['municipio_user'];
$provincia_user_form = $dataForm['provincia_user'];
$pais_user_form = $dataForm['pais_user'];
$estado_civil_user_form = $dataForm['estado_civil_user'];
$profissão_user_form = $dataForm['profissão_user'];
$habilitacoees_literais_user_form = $dataForm['habilitacoees_literais_user'];
$habilitacoees_concluídas_user_form = $dataForm['habilitacoees_concluídas_user'];
$habilitacoees_ano_conclusao_user_form = $dataForm['habilitacoees_ano_conclusao_user'];
$habilitacoees_pais_user_form = $dataForm['habilitacoees_pais_user'];
$residênciaactual_user_form = $dataForm['residênciaactual_user'];
$bairro_user_form = $dataForm['bairro_user'];
$cidade_user_form = $dataForm['cidade_user'];
$regiao_user_form = $dataForm['regiao_user'];
$email_user_form = $dataForm['email_user'];
$telefone_user_form = $dataForm['telefone_user'];
$nome_pai_user_form = $dataForm['nome_pai_user'];
$nacionalidade_pai_user_form = $dataForm['nacionalidade_pai_user'];
$localizacao_pai_user_form = $dataForm['localizacao_pai_user'];
$nome_pai_avo_homem_user_form = $dataForm['nome_pai_avo_homem_user'];
$nome_pai_avo_mulher_user_form = $dataForm['nome_pai_avo_mulher_user'];
$nome_mae_user_form = $dataForm['nome_mae_user'];
$nacionalidade_mae_user_form = $dataForm['nacionalidade_mae_user'];
$localizacao_mae_user_form = $dataForm['localizacao_mae_user'];
$nome_mae_avo_homem_user_form = $dataForm['nome_mae_avo_homem_user'];
$nome_mae_avo_mulher_user_form = $dataForm['nome_mae_avo_mulher_user'];

$data_saida_angola_user_form = $dataForm['data_saida_angola_user'];
$pais_onde_emigrou_user_form = $dataForm['pais_onde_emigrou_user'];
$com_quem_emigrou_user_form = $dataForm['com_quem_emigrou_user'];
$localidade_onde_partiu_form = $dataForm['localidade_onde_partiu'];
$outras_localidade_onde_viveu_form = $dataForm['outras_localidade_onde_viveu'];
$pais_localidade_user_form = $dataForm['pais_localidade_user'];
$ano_localidade_user_form = $dataForm['ano_localidade_user'];
$motivo_saida_angola_user_form = $dataForm['motivo_saida_angola_user'];

$nome_completo_conjuge_form = $dataForm['nome_completo_conjuge'];
$local_nascimento_conjuge_form = $dataForm['local_nascimento_conjuge'];
$dia_conjuge_form = $dataForm['dia_conjuge'];
$mes_conjuge_form = $dataForm['mes_conjuge'];
$ano_conjuge_form = $dataForm['ano_conjuge'];
$profissao_conjuge_form = $dataForm['profissao_conjuge'];
$funcao_conjuge_form = $dataForm['funcao_conjuge'];
$otros_dadosu_uteis_conjuge_form = $dataForm['otros_dadosu_uteis_conjuge'];
$ano_conclusao_conjuge_form = $dataForm['ano_conclusao_conjuge'];

$name_complete_filho1_form = $dataForm['name_complete_filho1'];
$data_nascimento_filho1_form = $dataForm['data_nascimento_filho1'];
$local_nascimento_filho1_form = $dataForm['local_nascimento_filho1'];
$sexo_filho1_form = $dataForm['sexo_filho1'];
$residencia_actual_filho1_form = $dataForm['residencia_actual_filho1'];

$name_complete_filho2_form = $dataForm['name_complete_filho2'];
$data_nascimento_filho2_form = $dataForm['data_nascimento_filho2'];
$local_nascimento_filho2_form = $dataForm['local_nascimento_filho2'];
$sexo_filho2_form = $dataForm['sexo_filho2'];
$residencia_actual_filho2_form = $dataForm['residencia_actual_filho2'];

$name_complete_filho3_form = $dataForm['name_complete_filho3'];
$data_nascimento_filho3_form = $dataForm['data_nascimento_filho3'];
$local_nascimento_filho3_form = $dataForm['local_nascimento_filho3'];
$sexo_filho3_form = $dataForm['sexo_filho3'];
$residencia_actual_filho3_form = $dataForm['residencia_actual_filho3'];

$name_complete_filho4_form = $dataForm['name_complete_filho4'];
$data_nascimento_filho4_form = $dataForm['data_nascimento_filho4'];
$local_nascimento_filho4_form = $dataForm['local_nascimento_filho4'];
$sexo_filho4_form = $dataForm['sexo_filho4'];
$residencia_actual_filho4_form = $dataForm['residencia_actual_filho4'];

$name_complete_filho5_form = $dataForm['name_complete_filho5'];
$data_nascimento_filho5_form = $dataForm['data_nascimento_filho5'];
$local_nascimento_filho5_form = $dataForm['local_nascimento_filho5'];
$sexo_filho5_form = $dataForm['sexo_filho5'];
$residencia_actual_filho5_form = $dataForm['residencia_actual_filho5'];

$name_complete_filho6_form = $dataForm['name_complete_filho6'];
$data_nascimento_filho6_form = $dataForm['data_nascimento_filho6'];
$local_nascimento_filho6_form = $dataForm['local_nascimento_filho6'];
$sexo_filho6_form = $dataForm['sexo_filho6'];
$residencia_actual_filho6_form = $dataForm['residencia_actual_filho6'];

$name_complete_filho7_form = $dataForm['name_complete_filho7'];
$data_nascimento_filho7_form = $dataForm['data_nascimento_filho7'];
$local_nascimento_filho7_form = $dataForm['local_nascimento_filho7'];
$sexo_filho7_form = $dataForm['sexo_filho7'];
$residencia_actual_filho7_form = $dataForm['residencia_actual_filho7'];

$observacao_user_form = $dataForm['observacao_user'];

$nome_testemunha1_form = $dataForm['nome_testemunha1'];
$n_bi_testemunha1_form = $dataForm['n_bi_testemunha1'];
$data_emissão_testemunha1_form = $dataForm['data_emissão_testemunha1'];
$valido_ate_testemunha1_form = $dataForm['valido_ate_testemunha1'];
$nome_testemunha2_form = $dataForm['nome_testemunha2'];
$n_bi_testemunha2_form = $dataForm['n_bi_testemunha2'];
$data_emissão_testemunha2_form = $dataForm['data_emissão_testemunha2'];
$valido_ate_testemunha2_form = $dataForm['valido_ate_testemunha2'];


// referencie o namespace Dompdf 
use Dompdf\Dompdf;
use Dompdf\Options;

// instancia e usa a classe dompdf 
$options = new Options();
$options->set('isRemoteEnabled', true); // temp folder with write permission

$dompdf = new Dompdf();
$dompdf->setOptions($options);


$trTable = '
<div
class="folha"
style="
  width: 700px;
  height: auto;
  margin: auto;
  position: relative;
"
>
<img
  src="https://d1yjjnpx0p53s8.cloudfront.net/styles/logo-thumbnail/s3/082016/untitled-1_104.jpg?itok=U_9hZTK0"
  alt=""
  style="width: 9rem; display: block; margin-left: 17rem;"
/>
<h3
  style="
    font-weight: bold;
    text-transform: uppercase;
    text-align: center;
    margin: 0 4rem 5rem 0;
  "
>
  república de angola
  <br />
  consultado geral em ponta negra
</h3>
<div
  style="
    width: 140px;
    height: 140px;
    border: 1px solid black;
    position: absolute;
    top: 7rem;
    right: 2rem;
  "
>
  <img
    src=""
    alt=""
    style="width: 100%; height: 100%; position: relative"
  />
</div>
<p
  style="
    text-transform: uppercase;
    font-weight: bolder;
    font-size: 1.2rem;
  "
>
  ficha de inscrição consular m* <ins>_________</ins>/20___
</p>
<p
  style="
    text-transform: uppercase;
    font-weight: bolder;
    text-decoration: underline;
    font-size: 1.2rem;
  "
>
  (a) identificação
</p>
<table style="width: 100%">
  <tr>
    <td>
      <strong>Nome Completo </strong>
      <ins>  ' . $nome_completo_user_form . '  </ins>
    </td>
    <td style="text-align: right">
      <strong>Apelido</strong> <ins> ' . $apelido_user_form . ' </ins>
    </td>
  </tr>
</table>

<table style="width: 100%; margin-top: 1rem">
  <tr>
    <td>
      <strong>Data de Nascimento</strong> <ins> ' . $dia_user_form . ' </ins> de
      <ins> ' . $mes_user_form . ' </ins> de <ins> ' . $ano_user_form . ' </ins>
    </td>
    <td style="text-align: right">
      <strong>Local</strong> <ins> ' . $local_nascimento_user_form . ' </ins>
    </td>
  </tr>
</table>

<table style="width: 100%; margin-top: 1rem">
  <tr>
    <td><strong>Município</strong> <ins> ' . $municipio_user_form . ' </ins></td>
    <td><strong>Provincia</strong> <ins> ' . $provincia_user_form . ' </ins></td>
    <td style="text-align: right">
      <strong>País</strong> <ins> ' . $pais_user_form . ' </ins>
    </td>
  </tr>
</table>
<table style="width: 100%; margin-top: 1rem">
  <tr>
    <td><strong>Estado Civil</strong> <ins> ' . $estado_civil_user_form . ' </ins></td>
    <td style="text-align: center">
      <strong>Profissão</strong> <ins> ' . $profissão_user_form . ' </ins>
    </td>
    <td style="text-align: right">
      <strong>Habilitações Literarias</strong>
      <ins> ' . $habilitacoees_literais_user_form . ' </ins>
    </td>
  </tr>
</table>

<table style="width: 100%; margin-top: 1rem">
  <tr>
    <td><strong>Concluidas em</strong> <ins> ' . $habilitacoees_concluídas_user_form . ' </ins></td>
    <td><strong>Ano de </strong><ins> ' . $habilitacoees_ano_conclusao_user_form . ' </ins></td>
    <td style="text-align: right">
      <strong>País </strong><ins> ' . $habilitacoees_pais_user_form . ' </ins> Residência Actual
     ' . $residênciaactual_user_form . ' </td>
  </tr>
</table>

<table style="width: 100%; margin-top: 1rem">
  <tr>
    <td><strong>Bairro</strong> <ins> ' . $bairro_user_form . ' </ins></td>
    <td><strong>Cidade</strong> <ins> ' . $cidade_user_form . ' </ins></td>
    <td style="text-align: right">
      <strong>Região</strong> <ins> ' . $regiao_user_form . ' </ins>
    </td>
  </tr>
</table>

<table style="width: 100%; margin-top: 1rem">
  <tr>
    <td><strong>Telefone N</strong> <ins> ' . $telefone_user_form . ' </ins></td>
    <td style="text-align: right">
      <strong>Email</strong> <ins> ' . $email_user_form  . ' </ins>
    </td>
  </tr>
</table>

<table style="width: 100%; margin-top: 1rem">
  <tr>
    <td>
      <strong>Nome do pai</strong> <ins> ' . $nome_pai_user_form . ' </ins>
    </td>
    <td style="text-align: right">
      <strong>Nacionalidade</strong> <ins> ' . $nacionalidade_pai_user_form . ' </ins>
    </td>
  </tr>
</table>

<table style="width: 100%; margin-top: 1rem">
  <tr>
    <td>
      <strong>Sua localização </strong>
      <ins> ' . $localizacao_pai_user_form . ' </ins>
    </td>
  </tr>
</table>

<table style="width: 100%; margin-top: 1rem">
  <tr>
    <td>
      <strong>Nomes dos avôs </strong><ins> ' . $nome_pai_avo_homem_user_form . ' </ins> E
      <ins> ' . $nome_pai_avo_mulher_user_form . ' </ins>
    </td>
  </tr>
</table>

<table style="width: 100%; margin-top: 1rem">
  <tr>
    <td>
      <strong>Nome da mãe</strong> <ins> ' . $nome_mae_user_form . ' </ins>
    </td>
    <td><strong>Nacionalidade</strong> <ins> ' . $nacionalidade_mae_user_form . ' </ins></td>
  </tr>
</table>

<table style="width: 100%; margin-top: 1rem">
  <tr>
    <td>
      <strong>Sua localização</strong>
      <ins> ' . $localizacao_mae_user_form . ' </ins>
    </td>
  </tr>
</table>

<table style="width: 100%; margin-top: 1rem">
  <tr>
    <td>
      <strong>Nome dos avôs</strong> <ins> ' . $nome_mae_avo_homem_user_form . ' </ins> E
      <ins> ' . $nome_mae_avo_mulher_user_form . ' </ins>
    </td>
  </tr>
</table>

<h3
  style="
    text-transform: uppercase;
    font-weight: bolder;
    text-decoration: underline;
  "
>
  (b) trajectória
</h3>

<table style="width: 100%; margin-top: 1rem">
  <tr>
    <td>
      <strong>Data de saida de Angola</strong>
      <ins> ' . $data_saida_angola_user_form . ' </ins>
    </td>
    <td style="text-align: right">
      <strong>País onde emigrou</strong> <ins> ' . $pais_onde_emigrou_user_form . ' </ins>
    </td>
  </tr>
</table>

<table style="width: 100%; margin-top: 1rem">
  <tr>
    <td>
      <strong>Sozinho ou em grupo</strong> <ins> ' . $com_quem_emigrou_user_form . ' </ins>
      <strong>Localidade de onde partiu</strong>
      <ins> ' . $localidade_onde_partiu_form . ' </ins>
      <strong>outras localidades onde viveu</strong>
      <ins> ' . $outras_localidade_onde_viveu_form . ' </ins> <strong>País(es)</strong>
      <ins> ' . $pais_localidade_user_form . ' </ins>
    </td>
  </tr>
</table>

<table style="width: 100%; margin-top: 1rem">
  <tr>
    <td><strong>Ano(s)</strong><ins> ' . $ano_localidade_user_form . ' </ins></td>
  </tr>
</table>

<table style="width: 100%; margin-top: 1rem">
  <tr>
    <td>
      <strong>Motivo de saída de Angola</strong>
      <ins> ' . $motivo_saida_angola_user_form . ' </ins>
    </td>
  </tr>
</table>

<h3
  style="
    text-transform: uppercase;
    font-weight: bolder;
    text-decoration: underline;
  "
>
  (c) identificação do conjugue
</h3>

<table style="width: 100%; margin-top: 1rem">
  <tr>
    <td><strong>Nome</strong><ins> ' . $nome_completo_conjuge_form . ' </ins></td>
    <td style="text-align: right">
      <strong>Local e data de Nascimento</strong>
      <ins> ' . $local_nascimento_conjuge_form . ' </ins> <strong>Aos</strong> <ins> ' . $dia_conjuge_form . ' </ins> de
      <ins> ' . $mes_conjuge_form . ' </ins> de <ins> ' . $ano_conjuge_form . ' </ins>
    </td>
  </tr>
</table>

<span
  style="
    position: absolute;
    bottom: 2rem;
    right: 3rem;
    font-weight: bolder;
  "
  >1</span
>
</div>

<div
class="folha"
style="
  width: 700px;
  height: auto;
  margin: auto;
  margin-top: 1rem;
  position: relative;
"
>
<table style="width: 100%; margin-top: 1rem">
  <tr>
    <td><strong>Profissão</strong> <ins> ' . $profissao_conjuge_form . ' </ins></td>
    <td style="text-align: right">
      <strong>Local de Trabalho</strong> <ins> ' . $funcao_conjuge_form . ' </ins>
    </td>
  </tr>
</table>

<table style="width: 100%; margin-top: 1rem">
  <td>
    <strong>Função/Catégoria</strong>
    <ins> ' . $otros_dadosu_uteis_conjuge_form . ' </ins>
  </td>
</table>

<table style="width: 100%; margin-top: 1rem">
  <td>
    <strong>Outros dados Uteis</strong> <ins> ' . $ano_conclusao_conjuge_form . ' </ins>
  </td>
</table>

<p
  style="
    text-transform: uppercase;
    font-weight: bolder;
    text-decoration: underline;
    font-size: 1.2rem;
  "
>
  (d) identificação dos Filhos
</p>

<table
  style="
    font-weight: 540;
    margin-top: 0.6rem;
    margin-bottom: 0.6rem;
    text-align: justify;
    width: 100%;
    text-align: center;
  "
>
  <thead style="text-align: center">
    <tr>
      <td><strong>Nome</strong></td>
      <td><strong>Data de Nascimento, Local, Sexo</strong></td>
      <td><strong>Onde encontra</strong></td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><ins> ' . $name_complete_filho1_form . ' </ins></td>
      <td><ins> ' . $data_nascimento_filho1_form . ' </ins>,<ins> ' . $local_nascimento_filho1_form . ' </ins>,<ins> ' . $sexo_filho1_form . ' </ins></td>
      <td><ins> ' . $residencia_actual_filho1_form . ' </ins></td>
    </tr>
    <tr>
      <td><ins> ' . $name_complete_filho2_form . ' </ins></td>
      <td><ins> ' . $data_nascimento_filho2_form . ' </ins>,<ins> ' . $local_nascimento_filho2_form . ' </ins>,<ins> ' . $sexo_filho2_form . ' </ins></td>
      <td><ins> ' . $residencia_actual_filho2_form . ' </ins></td>
    </tr>
    <tr>
      <td><ins> ' . $name_complete_filho3_form . ' </ins></td>
      <td><ins> ' . $data_nascimento_filho3_form . ' </ins>,<ins> ' . $local_nascimento_filho3_form . ' </ins>,<ins> ' . $sexo_filho3_form . ' </ins></td>
      <td><ins> ' . $residencia_actual_filho3_form . ' </ins></td>
    </tr>
    <tr>
      <td><ins> ' . $name_complete_filho4_form . ' </ins></td>
      <td><ins> ' . $data_nascimento_filho4_form . ' </ins>,<ins> ' . $local_nascimento_filho4_form . ' </ins>,<ins> ' . $sexo_filho4_form . ' </ins></td>
      <td><ins> ' . $residencia_actual_filho4_form . ' </ins></td>
    </tr>
    <tr>
      <td><ins> ' . $name_complete_filho5_form . ' </ins></td>
      <td><ins> ' . $data_nascimento_filho5_form . ' </ins>,<ins> ' . $local_nascimento_filho5_form . ' </ins>,<ins> ' . $sexo_filho5_form . ' </ins></td>
      <td><ins> ' . $residencia_actual_filho5_form . ' </ins></td>
    </tr>
    <tr>
      <td><ins> ' . $name_complete_filho6_form . ' </ins></td>
      <td><ins> ' . $data_nascimento_filho6_form . ' </ins>,<ins> ' . $local_nascimento_filho6_form . ' </ins>,<ins> ' . $sexo_filho6_form . ' </ins></td>
      <td><ins> ' . $residencia_actual_filho6_form . ' </ins></td>
    </tr>
    <tr>
      <td><ins> ' . $name_complete_filho7_form . ' </ins></td>
      <td><ins> ' . $data_nascimento_filho7_form . ' </ins>,<ins> ' . $local_nascimento_filho7_form . ' </ins>,<ins> ' . $sexo_filho7_form . ' </ins></td>
      <td><ins> ' . $residencia_actual_filho7_form . ' </ins></td>
    </tr>
  </tbody>
</table>

<p
  style="
    text-transform: uppercase;
    font-weight: bolder;
    text-decoration: underline;
    font-size: 1.2rem;
  "
>
  (e) observações
</p>
<p>
  <ins
    > ' . $observacao_user_form . ' </ins
  >
</p>

<p
  style="
    text-transform: uppercase;
    font-weight: bolder;
    text-decoration: underline;
    font-size: 1.2rem;
  "
>
  (f) testemunhas
</p>

<p>
  <strong>
    Nós abaixos assinados, testemunhamos que o (a) referido (a)senhor(a) é
    Angolano(a) <br />
    por ser verdade anexamos os fotocópias dos nossos bilhetes de
    identidades.
  </strong>
</p>
<table>
  <tr>
    <td>
      <strong>1</strong> <ins> ' . $nome_testemunha1_form . '  </ins>
      <strong>B.IN</strong> <ins> ' . $n_bi_testemunha1_form . ' </ins>
      <strong>Data de Emissão</strong> <ins> ' . $data_emissão_testemunha1_form . ' </ins
      >
      <strong>Valido até</strong> <ins> ' . $valido_ate_testemunha1_form . ' </ins
      >
      <strong>Assinatura</strong> <ins>_________________________________</ins>
    </td>
  </tr>
</table>

<table>
  <tr>
    <td>
      <strong>2</strong> <ins> ' . $nome_testemunha2_form . ' </ins>
      <strong>B.IN</strong> <ins> ' . $n_bi_testemunha2_form . ' </ins>
      <strong>Data de Emissão</strong> <ins> ' . $data_emissão_testemunha2_form . ' </ins
      >
      <strong>Valido até</strong> <ins> ' . $valido_ate_testemunha2_form . ' </ins
      >
      <strong>Assinatura</strong> <ins>_________________________________</ins>
    </td>
  </tr>
</table>

<table>
  <tr>
    <td>
      <strong>Feito em Ponta Negra, aos</strong>
      <ins>_____</ins>/<ins>____________________</ins>/<ins>_____</ins>
    </td>
  </tr>
</table>

<table style="width: 100%; margin-top: 1rem">
  <tr>
    <td>
      <strong>O(A) Utente</strong><br />
      <br/>
      <span>___________________________</span>
    </td>
    <td style="text-align: right">
      <strong>O CHEFE DO SECTOR DA COMUNIDADE</strong><br />
      <br/>
      <span>___________________________</span>
    </td>
  </tr>
</table>

<!-- Número do Rodapé -->
<span
  style="
    position: absolute;
    bottom: 2rem;
    right: 3rem;
    font-weight: bolder;
  "
  >2</span
>
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