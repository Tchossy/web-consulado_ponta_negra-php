<?php

include_once "../db/config.php";

$numPag = filter_input(INPUT_GET, 'pag', FILTER_SANITIZE_NUMBER_INT);

if (!empty($numPag)) {

  // Calcular o inicio da visualização
  $qtd_result_pag = 10; //Quantidade de registros por pagina
  $init = ($numPag * $qtd_result_pag) - $qtd_result_pag; //Iniciar no registro numero ...


  $query_users = "SELECT id, name_user, email_user FROM users ORDER BY id DESC LIMIT $init, $qtd_result_pag";

  $result_users =  $pdo->prepare($query_users);
  $result_users->execute();

  $dados = "";

  while ($row_user = $result_users->fetch(PDO::FETCH_ASSOC)) {

    extract($row_user);

    $dados .= "<tr>
                <td> $id </td>
                <td> $name_user </td>
                <td> $email_user </td>
                <td> 
                  <button id='$id' class='btn btn-outline-primary btn-sm' onclick='seeDetails($id)'> Detalhes </button> 
                  <button id='$id' class='btn btn-outline-secondary btn-sm' onclick='editUser($id)'> Editar </button> 
                  <button id='$id' class='btn btn-outline-danger btn-sm' onclick='deleteUser($id)'> Eliminar </button> 
                </td>
              </tr>";

    // com o Extract
    // echo "<td>" . $id . "</td> ";

    // sem o Extract
    // echo "<td>" . $row_user['name_user'] . "</td> </br>";
  }

  // Paginação - somar a quantidade de usuários
  $query_pag = "SELECT COUNT(id) AS num_result from users";
  $result_pag = $pdo->prepare($query_pag);
  $result_pag->execute();
  $row_pag = $result_pag->fetch(PDO::FETCH_ASSOC);

  // quantidade de paginas
  $qtd_pag = ceil($row_pag['num_result'] / $qtd_result_pag); // ceil -> arredondar para cima
  $max_link = 2;

  $dados .= "<nav aria-label='Page navigation example'>
                <ul class='pagination'>
            ";
  // Primeira Pag
  $dados .= "<li class='page-item'>
                <a class='page-link' href='#' onclick='listUsers(1)' aria-label='Previous'>
                  <span aria-hidden='true'>&laquo;</span>
                </a>
              </li>";

  for ($pag_ant = $numPag - $max_link; $pag_ant <= $numPag - 1; $pag_ant++) {
    // Paginas anteriores

    if ($pag_ant > 1) {
      $dados .= "<li class='page-item'><a class='page-link' href='#' onclick='listUsers($pag_ant)'>$pag_ant</a></li>";
    }
  }

  // Pagina actual
  $dados .= "<li class='page-item active'><a class='page-link' href='#' onclick='listUsers($numPag)'>$numPag</a></li>";


  for ($pag_next = $numPag + 1; $pag_next <= $numPag + $max_link; $pag_next++) {
    // Paginas a seguir

    if ($pag_next <= $qtd_pag) {
      $dados .= "<li class='page-item'><a class='page-link' href='#' onclick='listUsers($pag_next)'>$pag_next</a></li>";
    }
  }

  // Ultima Pag
  $dados .= "<li class='page-item'>
              <a class='page-link' href='#' onclick='listUsers($qtd_pag)' aria-label='Next'>
                <span aria-hidden='true'> &raquo;</span>
              </a>
            </li>";

  $dados .= "</ul>
            </nav>";


  echo $dados;
} else {
  echo "<div class='alert alert-info' role='alert' id='msgAlerta'> Nenhum dado encontrado </div>";
}