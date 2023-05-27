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
    <h1>Documentos</h1>
    <ul class="breadcrumb">
      <li>
        <a href="#">Painel</a>
      </li>
      <li><i class="bx bx-chevron-right"></i></li>
      <li>
        <a class="active" href="#">Documentos</a>
      </li>
    </ul>
  </div>
  <button class="btn-download" data-toggle="modal" data-target="#userModal">
    <i class="bx bxs-file-plus"></i>
    <span class="text">Nova Documento</span>
  </button>
</div>

<!-- MODAL -->
<div id="userModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="container-modal">
      <h2>Entrada de documento</h2>
    </div>

    <form id="documentsForm" class="modalForm">
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
        <select name="sector_document" class="form-control">
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
          Descrição do documento <span class="text-danger">*</span>
        </label>
        <input name="description_document" class="form-control" type="text" placeholder="Descrição do documento">
      </div>
      <div>
        <label for="">
          Estado do documento <span class="text-danger">*</span>
        </label>
        <select name="state_document" class="form-control">
          <option value="Em tratamento">Em tratamento</option>
          <option value="Pendente">Pendente</option>
          <option value="Recusado">Recusado</option>
          <option value="Pronto">Pronto</option>
        </select>
      </div>

      <button class="base-btn" type="submit">
        Dar entrada
      </button>
    </form>
  </div>
</div>

<div id="documentEditeModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="container-modal">
      <h2>Editar documento</h2>
    </div>

    <form id="documentsEditForm" class="modalForm">
      <span id="msgAlertaErroEditCard"></span>

      <input id="id_edit" name="id_document" hidden>
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
        <select id="sector_document_edit" name="sector_document" class="form-control">
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
          Motivo <span class="text-danger">*</span>
        </label>
        <input id="reason_document_edit" name="reason_document" value="" class="form-control" type="text" placeholder="Motivo">
      </div>
      <div>
        <label for="">
          Descrição do documento <span class="text-danger">*</span>
        </label>
        <input id="description_document_edit" name="description_document" value="" class="form-control" type="text" placeholder="Descrição do documento">
      </div>
      <div>
        <label for="">
          Estado do documento <span class="text-danger">*</span>
        </label>
        <select id="state_document_edit" name="state_document" class="form-control">
          <option value="Em tratamento">Em tratamento</option>
          <option value="Pendente">Pendente</option>
          <option value="Recusado">Recusado</option>
          <option value="Pronto">Pronto</option>
        </select>
      </div>
      <div>
        <label for="">
          Data para entrega de documentos <span class="text-danger">*</span>
        </label>
        <input id="myDateInput" name="date_delivery_document" class="form-control" type="date">
      </div>

      <button class="base-btn" type="submit">
        Dar entrada
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
          <th>Nome</th>
          <th>E-mail</th>
          <th>Telemovel</th>
          <th>Sector</th>
          <th>Descrição</th>
          <th>Estado</th>
          <th>Data de entrada</th>
          <th>Data de entrega</th>
          <th>Motivo</th>
          <th>Acção</th>
        </tr>
      </thead>
      <tbody>


      </tbody>
    </table>
  </div>
</div>

<script src="<?= urlProject(FOLDER_DASHBOARD . BASE_JS . "/actions_documents.js") ?>"></script>