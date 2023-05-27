<?php $this->layout('_theme') ?>
<?php
require 'src/db/config.php';
session_start();

if ((!isset($_SESSION['adm_email']))) {
  header('Location: http://localhost/web-consulado_ponta_negra-php/dashboard');
}

?>

<div>
  <div class="head-title">
    <div class="left">
      <h1>Painel</h1>
      <ul class="breadcrumb">
        <li>
          <a href="#">Painel</a>
        </li>
        <li><i class="bx bx-chevron-right"></i></li>
        <li>
          <a class="active" href="#">Casa</a>
        </li>
      </ul>
    </div>
  </div>
  <ul class="box-info">
    <li>
      <i class="bx bxs-group"></i>
      <span class="text">
        <h3 id="num_utentes">0</h3>
        <p>Total de Utentes</p>
      </span>
    </li>
    <li>
      <i class="bx bxs-calendar-event"></i>
      <span class="text">
        <h3 id="num_scheduling">0</h3>
        <p>Total de Agendamentos</p>
      </span>
    </li>
    <li>
      <i class="bx bxs-news"></i>
      <span class="text">
        <h3 id="num_documents_state">0</h3>
        <p>Total de Documentos em em espera</p>
      </span>
    </li>
  </ul>

  <div class="table-data">
    <div class="order">
      <div class="head">
        <h3>Utentes recentes</h3>
      </div>
      <table>
        <thead>
          <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Ordem de Data</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
    <div class="todo">
      <div class="head">
        <h3>Mensagens recentes</h3>
      </div>
      <ul id="todo-list" class="todo-list">
        <li class="completed">
          <p><strong>Assunto</strong> <br> Mensagem</p>
          <i class="bx bx-dots-vertical-rounded"></i>
        </li>
        <li class="not-completed">
          <p><strong>Assunto</strong> <br> Mensagem</p>
          <i class="bx bx-dots-vertical-rounded"></i>
        </li>
      </ul>
    </div>
  </div>
</div>

<script src="<?= urlProject(FOLDER_DASHBOARD . BASE_JS . "/actions_home.js") ?>"></script>