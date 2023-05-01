<?php

include_once "../db/config.php";

$dataForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$name_user_form = $dataForm['name_user'];
$email_user_form = $dataForm['email_user'];


if (empty($name_user_form)) {
  $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> O campo nome está vazio </div>"];
} elseif (empty($email_user_form)) {
  $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: O campo email está vazio </div>"];
} else {
  $query_save_user = "INSERT INTO users (name_user, email_user) values(:name_user_value, :email_user_value)";
  $save_user = $pdo->prepare($query_save_user);
  $save_user->bindParam(':name_user_value', $name_user_form);
  $save_user->bindParam(':email_user_value', $email_user_form);
  $save_user->execute();

  if ($save_user->rowCount()) {
    $return = ['error' => false, 'msg' =>  "<div class='alert alert-success' role='alert' id='msgAlerta'> Usuário cadastrado com sucesso </div>"];
  } else {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Ouve um erro ao cadastrar usuário </div>"];
  };
}

echo json_encode($return);
