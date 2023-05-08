<?php

session_start();
include_once "../db/config.php";

$dataForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$type_form = $_GET['typeForm'];

if ($type_form == 'create_utente') {
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

  $full_name_user_form = $dataForm['full_name_user'];
  $email_address_user_form = $dataForm['email_address_user'];
  $number_phone_user_form = $dataForm['number_phone_user'];
  $login_password_user_form = $dataForm['login_password_user'];
  $login_confirm_password_user_form = $dataForm['login_confirm_password_user'];
  $new_password = md5($login_password_user_form);

  $date_create_user_form = $completeDate;

  $result_utente = $pdo->prepare("SELECT * FROM utentes WHERE email_address_user = ? ORDER BY id ");
  $result_utente->execute(array($email_address_user_form));
  $num_utente = $result_utente->rowCount();

  if ($num_utente >= 1) {
    $return = ['error' => false, 'msg' =>  "<div class='alert alert-danger' role='alert' id='msgAlerta'> Este email já encontra-se cadastrado </div>"];
  } else {
    if (empty($full_name_user_form)) {
      $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> O campo nome está vazio </div>"];
    } elseif (empty($email_address_user_form)) {
      $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O campo email está vazio </div>"];
    } elseif (empty($number_phone_user_form)) {
      $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O campo nº de telefone está vazio </div>"];
    } elseif (empty($login_password_user_form)) {
      $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O campo senha está vazio </div>"];
    } elseif ($login_password_user_form != $login_confirm_password_user_form) {
      $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: As senhas não coincidem </div>"];
    } else {

      $sql = $pdo->prepare("INSERT INTO utentes values(null,?,?,?,?,?)");

      if ($sql->execute(array(
        $full_name_user_form,
        $email_address_user_form,
        $number_phone_user_form,
        $new_password,
        $date_create_user_form
      ))) {
        $return = ['error' => false, 'msg' =>  "<div class='alert alert-success' role='alert' id='msgAlerta'> Utente cadastrado com sucesso </div>"];
      } else {
        $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Ouve um erro ao cadastrar usuário </div>"];
      };
    }

    echo json_encode($return);
  }
}

if ($type_form == 'get_utentes') {

  $result_utentes = $pdo->prepare("SELECT * FROM utentes ORDER BY id DESC");
  $result_utentes->execute();
  $num_utentes = $result_utentes->rowCount();

  if ($num_utentes <= 0) {
    echo $return = "<div class='alert alert-danger' role='alert' id='msgAlerta'> Não tem nenhum utente cadastrado no momento </div>";
  } else {
    $return = "";

    while ($row_utentes = $result_utentes->fetch(PDO::FETCH_ASSOC)) {
      extract($row_utentes);

      $return .= "
                  <tr>
                    <td>
                      <p>$id</p>
                    </td>
                    <td>
                      <p>$full_name_user</p>
                    </td>
                    <td>
                      <p>$email_address_user</p>
                    </td>
                    <td>
                      <p>$number_phone_user</p>
                    </td>
                    <td>$date_create_user</td>
                    <td>
                      <button class='status edite' onclick='editeUtente($id)'>Editar</button>
                      <button class='status delete' onclick='deleteUtente($id)'>Apagar</button>
                    </td>
                  </tr>
      ";
    }

    echo $return;
  }
}

if ($type_form == 'delete_utentes') {
  $id_utente = $_GET['idUtente'];

  $result_utente = $pdo->prepare("DELETE FROM utentes WHERE id=?");

  if ($result_utente->execute(array($id_utente))) {
    $return = ['error' => false, 'msg' => "Ouve algum erro ao excluir o utente"];
  } else {
    $return = ['error' => true, 'msg' =>  "O utente não foi excluído :)"];
  }
}

if ($type_form == 'get_utente') {
  $id_utente = $_GET['idUtente'];

  $result_utente = $pdo->prepare("SELECT * FROM utentes WHERE id = ? ORDER BY id LIMIT 1");
  $result_utente->execute(array($id_utente));
  $num_utente = $result_utente->rowCount();

  if ($num_utente >= 1) {
    $row_utente = $result_utente->fetch(PDO::FETCH_ASSOC);

    $return = ['error' => false, 'dados' => $row_utente];

    echo json_encode($return);
  } else {
    $return = ['error' => true, 'msg' => "Nenhum utente com esse id foi encontrado"];

    echo json_encode($return);
  }
}

if ($type_form == 'edite_utente') {
  $id_utente = $dataForm['id_utente'];
  $full_name_user_form = $dataForm['full_name_user'];
  $email_address_user_form = $dataForm['email_address_user'];
  $number_phone_user_form = $dataForm['number_phone_user'];

  $return = "";

  if (empty($full_name_user_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> O campo nome está vazio </div>"];
  } elseif (empty($email_address_user_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O campo email está vazio </div>"];
  } elseif (empty($number_phone_user_form)) {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O campo nº de telefone está vazio </div>"];
  } else {
    $sql = $pdo->prepare("UPDATE utentes SET full_name_user=?, email_address_user=?, number_phone_user=? WHERE id=? ");

    if ($sql->execute(array(
      $full_name_user_form,
      $email_address_user_form,
      $number_phone_user_form,
      $id_utente
    ))) {
      $return = ['error' => false, 'msg' =>  "<div class='alert alert-success' role='alert' id='msgAlerta'> Dados do utente actualizados com sucesso </div>"];
    } else {
      $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Ouve um erro ao actualizar os dados do utente </div>"];
    };
  }
  echo json_encode($return);
}
