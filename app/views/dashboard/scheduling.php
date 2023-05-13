<?php $this->layout('_theme') ?>
<?php
require 'src/db/config.php';
session_start();

if ((!isset($_SESSION['adm_email']))) {
  header('Location: http://localhost/web-consulado_ponta_negra-php/dashboard');
}

?>

<!-- head-title -->
<div class="head-title">
  <div class="left">
    <h1>Agendamento</h1>
    <ul class="breadcrumb">
      <li>
        <a href="#">Painel</a>
      </li>
      <li><i class="bx bx-chevron-right"></i></li>
      <li>
        <a class="active" href="#">Agendamento</a>
      </li>
    </ul>
  </div>
  <button class="btn-download" data-toggle="modal" data-target="#userModal">
    <i class="bx bxs-file-plus"></i>
    <span class="text">Nova Agendamento</span>
  </button>
</div>

<!-- MODAL -->
<div id="userModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="container-modal">
      <h2>Agendamento</h2>
    </div>


    <form class="modalForm" id="schedulingForm">
      <span id="msgAlertaErroCad"></span>

      <div>
        <label for="">
          Nome do utente <span class="text-danger">*</span>
        </label>
        <input name="name_utente" class="form-control" type="text" placeholder="Nome do utente">
      </div>
      <div>
        <label for="">
          E-mail do utente <span class="text-danger">*</span>
        </label>
        <input name="email_utente" class="form-control" type="text" placeholder="E-mail do utente">
      </div>
      <div>
        <label for="">
          Nº de telefone do utente <span class="text-danger">*</span>
        </label>
        <input name="phone_utente" class="form-control" type="text" placeholder="Nº de telefone">
      </div>
      <div>
        <label for="">
          Sector responsável <span class="text-danger">*</span>
        </label>
        <select name="secto_scheduling" class="form-control">
          <option value="">--------------------</option>
          <option value="Sector Notarial">Sector Notarial</option>
          <option value="Sector Migratório">Sector Migratório</option>
          <option value="Sector Identificação">Sector Identificação</option>
          <option value="Sector de Apoio à Comunidade">Sector de Apoio à Comunidade</option>
          <option value="Sector Comercial">Sector Comercial</option>
        </select>
      </div>
      <div>
        <label for="">
          Data para entrega de documentos <span class="text-danger">*</span>
        </label>
        <input id="myDateInput" name="data_scheduling" class="form-control" type="date">
      </div>

      <button class="base-btn" type="submit">
        Dar entrada
      </button>
    </form>
  </div>
</div>

<div id="schedulingEditeModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="container-modal">
      <h2>Editar agendamento</h2>
    </div>

    <div class="container-modal">
      <span id="msgAlertaErroEditCad"></span>
    </div>

    <form id="schedulingEditForm" class="modalForm">
      <input id="id_edit" name="id_Scheduling" hidden>
      <span id="msgAlertaErroEditCard"></span>

      <div>
        <label for="">
          Nome do utente <span class="text-danger">*</span>
        </label>
        <input id="name_utente_edit" name="name_utente" class="form-control" type="text" placeholder="Nome do utente">
      </div>
      <div>
        <label for="">
          E-mail do utente <span class="text-danger">*</span>
        </label>
        <input id="email_utente_edit" name="email_utente" class="form-control" type="text" placeholder="E-mail do utente">
      </div>
      <div>
        <label for="">
          Nº de telefone do utente <span class="text-danger">*</span>
        </label>
        <input id="phone_utente_edit" name="phone_utente" class="form-control" type="text" placeholder="Nº de telefone">
      </div>
      <div>
        <label for="">
          Sector responsável <span class="text-danger">*</span>
        </label>
        <select id="secto_document_edit" name="secto_document" class="form-control" id="">
          <option value="">--------------------</option>
          <option value="Sector Notarial">Sector Notarial</option>
          <option value="Sector Migratório">Sector Migratório</option>
          <option value="Sector Identificação">Sector Identificação</option>
          <option value="Sector de Apoio à Comunidade">Sector de Apoio à Comunidade</option>
          <option value="Sector Comercial">Sector Comercial</option>
        </select>
      </div>
      <div>
        <label for="">
          Estado do agendamento <span class="text-danger">*</span>
        </label>
        <select id="scheduling_state_edit" name="scheduling_state" class="form-control" id="">
          <option value="">--------------------</option>
          <option value="Pendente">Pendente</option>
          <option value="Finalizado">Finalizado</option>
        </select>
      </div>
      <div>
        <label for="">
          Data de agendamento <span class="text-danger">*</span>
        </label>
        <input id="myDateInput" name="data_scheduling" class="form-control" type="date">
      </div>

      <button class="base-btn" type="submit">
        Actualizar dados do utente
      </button>
    </form>
  </div>
</div>

<!-- TABLE -->
<div class="table-data">
  <div class="order">
    <div class="head">
      <h3>Todos os usuários</h3>
      <i class="bx bx-search"></i>
      <i class="bx bx-filter"></i>
    </div>
    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Utilizador</th>
          <th>E-mail</th>
          <th>Nº de telefone</th>
          <th>Sector</th>
          <th>Ordem de Data</th>
          <th>Status</th>
          <th>Ação</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
</div>

<script>
  var today = new Date().toISOString().split('T')[0];
  document.getElementById("myDateInput").setAttribute("min", today);
</script>

<script src="<?= urlProject(FOLDER_DASHBOARD . BASE_JS . "/actions_scheduling.js") ?>"></script>