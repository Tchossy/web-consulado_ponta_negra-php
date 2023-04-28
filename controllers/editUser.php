<?php

include_once "../db/config.php";


$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if (!empty($id)) {

  $query_get_user = "SELECT id, name_user, email_user FROM users WHERE id=:id LIMIT 1";
  $result_user = $pdo->prepare($query_get_user);
  $result_user->bindParam(':id', $id);
  $result_user->execute();

  $row_user = $result_user->fetch(PDO::FETCH_ASSOC);

  $data = 'data ' . $id;

  $return = ['error' => false, 'msg' => "<div class='alert alert-primary' role='alert' id='msgAlerta'> Sucesso: O usuário foi eliminado </div>"];
} else {
  $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: Não foi possível eliminar usuário </div>"];
}

echo json_encode($return);