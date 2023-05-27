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

if ($type_form == 'create_document') {
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

  $name_user_form = $dataForm['name_utente'];
  $email_user_form = $dataForm['email_utente'];
  $phone_user_form = $dataForm['phone_utente'];
  $sector_document_form = $dataForm['sector_document'];
  $description_document_form = $dataForm['description_document'];
  $state_document_state_form = $dataForm['state_document'];
  $date_entry_document_form = $completeDate;
  $date_delivery_document_form = "";

  if (empty($name_user_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O campo nome está vazio </div>"];
  } elseif (empty($email_user_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O campo email está vazio </div>"];
  } elseif (empty($phone_user_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O campo nº de telefone está vazio </div>"];
  } elseif (empty($sector_document_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O campo sector está vazio </div>"];
  } elseif (empty($description_document_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O campo descrição do documento está vazio </div>"];
  } elseif (empty($state_document_state_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O estado do documento não foi selecionado </div>"];
  } else {

    $sql = $pdo->prepare("INSERT INTO state_document values(null,?,?,?,?,?,?,?,?)");

    if ($sql->execute(array(
      $sector_document_form,
      $description_document_form,
      $date_entry_document_form,
      $date_delivery_document_form,
      $state_document_state_form,
      $email_user_form,
      $name_user_form,
      $phone_user_form,
    ))) {
      $return = ['error' => false, 'msg' =>  "<div class='alert alert-success' role='alert' id='msgAlerta'> Entrada de documento bem sucedida </div>"];
    } else {
      $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Entrada de documento mal sucedida </div>"];
    };
  }

  echo json_encode($return);
}

if ($type_form == 'get_all_documents') {
  $result_document = $pdo->prepare("SELECT * FROM state_document ORDER BY id DESC ");
  $result_document->execute();
  $num_document = $result_document->rowCount();

  if ($num_document <= 0) {
    echo $return = "<div class='alert alert-danger' role='alert' id='msgAlerta'> Não tem nenhum documento no momento </div>";
  } else {
    $return = "";

    while ($row_document = $result_document->fetch(PDO::FETCH_ASSOC)) {

      extract($row_document);

      $state_is = '';
      $date_delivery_document_is = '';
      $reason_document_is = '';

      if (empty($date_delivery_document)) {
        $date_delivery_document_is = '-------------------------';
      } else {
        $date_delivery_document_is = $date_delivery_document;
      }
      if (empty($reason_document)) {
        $reason_document_is = '-------------------------';
      } else {
        $reason_document_is = $reason_document;
      }

      if ($state_document == 'Pronto') {
        $state_is = 'completed';
      } elseif ($state_document == 'Pendente') {
        $state_is = 'pending';
      } elseif ($state_document == 'Recusado') {
        $state_is = 'delete';
      } elseif ($state_document == 'Em tratamento') {
        $state_is = 'process';
      }

      $return .= "
                <tr>
                  <td>
                    <p>$id</p>
                  </td>
                  <td>
                    <p>$name_utente</p>
                  </td>
                  <td>
                    <p>$email_utente</p>
                  </td>
                  <td>
                    <p>$phone_utente</p>
                  </td>
                  <td>
                    <p>$sector_document</p>
                  </td>
                  <td>
                    <p>$description_document</p>
                  </td>
                  <td>
                    <div class='status $state_is' style='text-align: center;'>$state_document</div>
                  </td>
                  <td>
                    <p>$date_entry_document</p>
                  </td>
                  <td>
                    <p>$date_delivery_document_is</p>
                  </td>
                  <td>
                    <p>$reason_document_is</p>
                  </td>
                  <td class='row'>
                    <button onclick='editeDocument($id)' class='status edite'>Editar</button>
                    <button onclick='deleteDocument($id)' class='status delete'>Apagar</button>
                  </td>
                </tr>
                ";
    }

    echo $return;
  }
}

if ($type_form == 'delete_document') {
  $id_document = $_GET['idDocument'];

  $result_document = $pdo->prepare("DELETE FROM state_document WHERE id=?");

  if ($result_document->execute(array($id_document))) {
    $return = ['error' => false, 'msg' => "Ouve algum erro ao excluir o documento"];
  } else {
    $return = ['error' => true, 'msg' =>  "O documento não foi excluído :)"];
  }
}

if ($type_form == 'get_document') {
  $id_document = $_GET['idDocument'];

  $result_document = $pdo->prepare("SELECT * FROM state_document WHERE id = ? ORDER BY id LIMIT 1");
  $result_document->execute(array($id_document));
  $num_document = $result_document->rowCount();

  if ($num_document >= 1) {
    $row_document = $result_document->fetch(PDO::FETCH_ASSOC);

    $return = ['error' => false, 'dados' => $row_document];

    echo json_encode($return);
  } else {
    $return = ['error' => true, 'msg' => "Nenhum agendamento com esse id foi encontrado"];

    echo json_encode($return);
  }
}

if ($type_form == 'edit_document') {
  $data_form = $dataForm['date_delivery_document'];
  setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');
  $timestamp = strtotime($data_form);
  $dayOfWeek = date('l', $timestamp);
  $day = date('d', $timestamp);
  $month = date('F', $timestamp);
  $year = date('Y', $timestamp);
  $ptWeek = getWeek($dayOfWeek);
  $ptMonth = getMonth($month);
  $data_complete = "$ptWeek, $day de $ptMonth de $year  ";

  $id_document = $dataForm['id_document'];
  $name_utente_form = $dataForm['name_utente'];
  $email_utente_form = $dataForm['email_utente'];
  $phone_utente_form = $dataForm['phone_utente'];
  $reason_document_form = $dataForm['reason_document'];
  $sector_document_form = $dataForm['sector_document'];
  $description_document_form = $dataForm['description_document'];
  $state_document_form = $dataForm['state_document'];
  $date_delivery_document_form = $data_complete;

  $return = "";

  if (empty($name_utente_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> O campo nome está vazio </div>"];
  } elseif (empty($email_utente_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O campo email está vazio </div>"];
  } elseif (empty($phone_utente_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O campo nº de telefone está vazio </div>"];
  } elseif (empty($sector_document_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O campo sector está vazio </div>"];
  } elseif (empty($description_document_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O campo descrição está vazio  </div>"];
  } elseif (empty($state_document_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O estado do agendamento não foi selecionado </div>"];
  } else {
    $sql = $pdo->prepare("UPDATE state_document SET name_utente=?, email_utente=?, phone_utente=?, sector_document=?, description_document=?, state_document=?, date_delivery_document=?, reason_document=? WHERE id=? ");

    if ($sql->execute(array(
      $name_utente_form,
      $email_utente_form,
      $phone_utente_form,
      $sector_document_form,
      $description_document_form,
      $state_document_form,
      $date_delivery_document_form,
      $reason_document_form,
      $id_document
    ))) {
      $return = ['error' => false, 'msg' =>  "<div class='alert alert-success' role='alert' id='msgAlerta'> O documento foi actualizado com sucesso </div>"];
    } else {
      $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Ouve um erro ao actualizar o documento </div>"];
    };
  }
  echo json_encode($return);
}
