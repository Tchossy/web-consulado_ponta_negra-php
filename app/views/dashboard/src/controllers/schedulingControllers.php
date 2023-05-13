<?php

session_start();
include_once "../db/config.php";

$dataForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$type_form = $_GET['typeForm'];

function getWeek(string $fWeek = null): string
{
  if ($fWeek == 'Sunday') {
    return 'Domingo';
  } elseif ($fWeek == 'Monday') {
    return 'Segunda-Feira';
  } elseif ($fWeek == 'Tuesday') {
    return 'Terca-Feira';
  } elseif ($fWeek == 'Wednesday') {
    return 'Quarta-Feira';
  } elseif ($fWeek == 'Thursday') {
    return 'Quinta-Feira';
  } elseif ($fWeek == 'Friday') {
    return 'Sexta-Feira';
  } elseif ($fWeek == 'Saturday') {
    return 'Sábado';
  }
}
function getMonth(string $fMonth = null): string
{
  if ($fMonth == 'January') {
    return 'Janeiro';
  } elseif ($fMonth == 'February') {
    return 'Fevereiro';
  } elseif ($fMonth == 'March') {
    return 'Marco';
  } elseif ($fMonth == 'April') {
    return 'Abril';
  } elseif ($fMonth == 'May') {
    return 'Maio';
  } elseif ($fMonth == 'June') {
    return 'Junho';
  } elseif ($fMonth == 'July') {
    return 'Julho';
  } elseif ($fMonth == 'August') {
    return 'Agosto';
  } elseif ($fMonth == 'September') {
    return 'Novembro';
  } elseif ($fMonth == 'October') {
    return 'Setembro';
  } elseif ($fMonth == 'November') {
    return 'Outubro';
  } elseif ($fMonth == 'December ') {
    return 'Dezembro';
  }
}

if ($type_form == 'create_scheduling') {
  $data = date('D');
  $mes = date('M');
  $dia = date('d');
  $ano = date('Y');

  $semana = array(
    'Sun' => 'Domingo',
    'Mon' => 'Segunda-Feira',
    'Tue' => 'Terca-Feira',
    'Wed' => 'Quarta-Feira',
    'Thu' => 'Quinta-Feira',
    'Fri' => 'Sexta-Feira',
    'Sat' => 'Sábado'
  );

  $mes_extenso = array(
    'Jan' => 'Janeiro',
    'Feb' => 'Fevereiro',
    'Mar' => 'Marco',
    'Apr' => 'Abril',
    'May' => 'Maio',
    'Jun' => 'Junho',
    'Jul' => 'Julho',
    'Aug' => 'Agosto',
    'Nov' => 'Novembro',
    'Sep' => 'Setembro',
    'Oct' => 'Outubro',
    'Dec' => 'Dezembro'
  );

  $completeDate =  $semana["$data"] . ", {$dia} de " . $mes_extenso["$mes"] . " de {$ano}";

  $data_form = $dataForm['data_scheduling'];
  setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');
  $timestamp = strtotime($data_form);
  $dayOfWeek = date('l', $timestamp);
  $day = date('d', $timestamp);
  $month = date('F', $timestamp);
  $year = date('Y', $timestamp);
  $ptWeek = getWeek($dayOfWeek);
  $ptMonth = getMonth($month);
  $data_complete = "$ptWeek, $day de $ptMonth de $year  ";

  $name_user_form = $dataForm['name_utente'];
  $email_user_form = $dataForm['email_utente'];
  $real_email_user_form = $dataForm['email_utente'];
  $phone_user_form = $dataForm['phone_utente'];
  $secto_scheduling_form = $dataForm['secto_scheduling'];
  $scheduling_state_form = "Pendente";
  $data_scheduling_form = $data_complete;
  $date_create_form = $completeDate;

  if (empty($name_user_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O campo nome está vazio </div>"];
  } elseif (empty($email_user_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O campo email está vazio </div>"];
  } elseif (empty($phone_user_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O campo nº de telefone está vazio </div>"];
  } elseif (empty($secto_scheduling_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O campo sector está vazio </div>"];
  } elseif (empty($data_scheduling_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O campo data do agendamento está vazio </div>"];
  } else {

    $sql = $pdo->prepare("INSERT INTO scheduling values(null,?,?,?,?,?,?,?,?)");

    if ($sql->execute(array(
      $name_user_form,
      $email_user_form,
      $real_email_user_form,
      $phone_user_form,
      $secto_scheduling_form,
      $scheduling_state_form,
      $data_scheduling_form,
      $date_create_form
    ))) {
      $return = ['error' => false, 'msg' =>  "<div class='alert alert-success' role='alert' id='msgAlerta'> Seu agendamento foi marcado com sucesso </div>"];
    } else {
      $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Ouve um erro ao fazer o seu agendamento </div>"];
    };
  }

  echo json_encode($return);
}

if ($type_form == 'get_all_scheduling') {

  $result_scheduling = $pdo->prepare("SELECT * FROM scheduling ORDER BY id DESC ");
  $result_scheduling->execute();
  $num_scheduling = $result_scheduling->rowCount();

  if ($num_scheduling <= 0) {
    echo $return = "<div class='alert alert-danger' role='alert' id='msgAlerta'> Não tem nenhum agendamentos feitos no momento </div>";
  } else {
    $return = "";

    while ($row_scheduling = $result_scheduling->fetch(PDO::FETCH_ASSOC)) {

      extract($row_scheduling);

      $state_is = '';
      if ($scheduling_state == 'Pendente') {
        $state_is = 'pending';
      } else {
        $state_is = 'completed';
      }

      $return .= "
                  <tr>
                      <td>
                        <p>$id</p>
                      </td>
                      <td>
                        <p>$name_user</p>
                      </td>
                      <td>
                        <p>$email_user</p>
                      </td>
                      <td>
                        <p>$phone_user</p>
                      </td>
                      <td>
                        <p>$secto_scheduling</p>
                      </td>
                      <td><p>$data_scheduling</p></td>
                      <td>
                        <div class='status $state_is'>$scheduling_state</div>
                      </td>
                      <td class='row'>
                        <button onclick='editeScheduling($id)' class='status edite'>Editar</button>
                        <button onclick='deleteScheduling($id)' class='status delete'>Apagar</button>
                      </td>
                    </tr>
                ";
    }

    echo $return;
  }
}

if ($type_form == 'delete_scheduling') {
  $id_scheduling = $_GET['idScheduling'];

  $result_scheduling = $pdo->prepare("DELETE FROM scheduling WHERE id=?");

  if ($result_scheduling->execute(array($id_scheduling))) {
    $return = ['error' => false, 'msg' => "Ouve algum erro ao excluir o agendamento"];
  } else {
    $return = ['error' => true, 'msg' =>  "O agendamento não foi excluído :)"];
  }
}

if ($type_form == 'get_scheduling') {
  $id_scheduling = $_GET['idScheduling'];

  $result_scheduling = $pdo->prepare("SELECT * FROM scheduling WHERE id = ? ORDER BY id LIMIT 1");
  $result_scheduling->execute(array($id_scheduling));
  $num_scheduling = $result_scheduling->rowCount();

  if ($num_scheduling >= 1) {
    $row_scheduling = $result_scheduling->fetch(PDO::FETCH_ASSOC);

    $return = ['error' => false, 'dados' => $row_scheduling];

    echo json_encode($return);
  } else {
    $return = ['error' => true, 'msg' => "Nenhum agendamento com esse id foi encontrado"];

    echo json_encode($return);
  }
}

if ($type_form == 'edite_scheduling') {
  $data_form = $dataForm['data_scheduling'];
  setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');
  $timestamp = strtotime($data_form);
  $dayOfWeek = date('l', $timestamp);
  $day = date('d', $timestamp);
  $month = date('F', $timestamp);
  $year = date('Y', $timestamp);
  $ptWeek = getWeek($dayOfWeek);
  $ptMonth = getMonth($month);
  $data_complete = "$ptWeek, $day de $ptMonth de $year  ";

  $id_scheduling = $dataForm['id_Scheduling'];
  $name_user_form = $dataForm['name_utente'];
  $email_user_form = $dataForm['email_utente'];
  $number_phone_user_form = $dataForm['phone_utente'];
  $secto_document_edit_form = $dataForm['secto_document'];
  $scheduling_state_edit_form = $dataForm['scheduling_state'];
  $data_scheduling_form = $data_complete;

  $return = "";

  if (empty($name_user_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> O campo nome está vazio </div>"];
  } elseif (empty($email_user_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O campo email está vazio </div>"];
  } elseif (empty($number_phone_user_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O campo nº de telefone está vazio </div>"];
  } elseif (empty($secto_document_edit_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O campo sector responsável está vazio </div>"];
  } elseif (empty($scheduling_state_edit_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O estado do agendamento não foi selecionado </div>"];
  } elseif (empty($data_scheduling_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: A data para entrega de documentos está vazio </div>"];
  } else {
    $sql = $pdo->prepare("UPDATE scheduling SET name_user=?, real_email_user=?, phone_user=?, secto_scheduling=?, scheduling_state=?, data_scheduling=? WHERE id=? ");

    if ($sql->execute(array(
      $name_user_form,
      $email_user_form,
      $number_phone_user_form,
      $secto_document_edit_form,
      $scheduling_state_edit_form,
      $data_scheduling_form,
      $id_scheduling
    ))) {
      $return = ['error' => false, 'msg' =>  "<div class='alert alert-success' role='alert' id='msgAlerta'> Dados do agendamento actualizados com sucesso </div>"];
    } else {
      $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Ouve um erro ao actualizar os dados do agendamento </div>"];
    };
  }
  echo json_encode($return);
}
