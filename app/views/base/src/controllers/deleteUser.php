<?php

include_once "../db/config.php";


$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if (!empty($id)) {

  $query_delete_user = "DELETE FROM users WHERE id=:id";
  $result_user = $pdo->prepare($query_delete_user);
  $result_user->bindParam(':id', $id);


  if ($result_user->execute()) {
    $return = ['error' => false, 'msg' => "<div class='alert alert-primary' role='alert' id='msgAlerta'> Sucesso: O usuário foi eliminado </div>"];
  } else {
    $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: Não foi possível eliminar usuário </div>"];
  }
} else {
  $return = ['error' => true, 'msg' => "<div class='alert alert-danger' role='alert' id='msgAlerta'> Erro: Nenhum usuário usuário </div>"];
}

echo json_encode($return);
