<?php $this->layout('_theme') ?>
<?php
require 'src/db/config.php';
session_start();

if ((!isset($_SESSION['adm_email']))) {
  header('Location: http://localhost/web-consulado_ponta_negra-php/dashboard');
}
?>

<div class="head-title">
  <div class="left">
    <h1>Evento</h1>
    <ul class="breadcrumb">
      <li>
        <a href="#">Painel</a>
      </li>
      <li><i class="bx bx-chevron-right"></i></li>
      <li>
        <a class="active" href="#">Evento</a>
      </li>
    </ul>
  </div>
  <button class="btn-download" data-toggle="modal" data-target="#newsModal">
    <i class="bx bxs-file-plus"></i>
    <span class="text">Novo evento</span>
  </button>
</div>

<!-- MODAL -->
<div id="newsModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="container-modal">
      <h2>Criar novo evento</h2>
    </div>

    <form id="formEvent" class="modalForm">
      <span id="msgAlertaErroCad"></span>

      <input name="author_events" id="author_events" type="text" hidden>

      <input name="images_event[]" class="form-control" type="file" id="inputImagens" multiple>
      <div id="containerImagens"></div>

      <div>
        <label for="">
          Tipo de evento <span class="text-danger">*</span>
        </label>
        <input name="type_event" class="form-control" type="text" placeholder="Tipo de evento">
      </div>
      <div>
        <label for="">
          Descrição do evento <span class="text-danger">*</span>
        </label>
        <input name="description_event" class="form-control" type="text" placeholder="Descrição do evento">
      </div>
      <div>
        <label for="">
          Data do evento <span class="text-danger">*</span>
        </label>
        <input name="date_events" class="form-control" type="date">
      </div>
      <div>
        <label for="">
          Inicio do evento <span class="text-danger">*</span>
        </label>
        <input name="hours_start_event" class="form-control" type="time">
      </div>
      <div>
        <label for="">
          Encerramento do evento <span class="text-danger">*</span>
        </label>
        <input name="hours_end_event" class="form-control" type="time">
      </div>
      <div>
        <label for="">
          Local do evento <span class="text-danger">*</span>
        </label>
        <input name="local_event" class="form-control" type="text" placeholder="Local do evento">
      </div>

      <button class="base-btn" type="submit">
        Salvar
      </button>
    </form>
  </div>
</div>

<div id="eventEditModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="container-modal">
      <h2>Editar evento</h2>
    </div>

    <form id="eventEditForm" class="modalForm">
      <span id="msgAlertaErroEditCard"></span>

      <input id="id_edit" name="id_event" hidden>

      <input name="images_event[]" class="form-control" type="file" id="inputImagensEdit" multiple>
      <div id="containerImagensEdit"></div>

      <div>
        <label for="">
          Tipo de evento <span class="text-danger">*</span>
        </label>
        <input name="type_event" id="type_event_edit" class="form-control" type="text" placeholder="Tipo de evento">
      </div>
      <div>
        <label for="">
          Descrição do evento <span class="text-danger">*</span>
        </label>
        <input name="description_event" id="description_event_edit" class="form-control" type="text"
          placeholder="Descrição do evento">
      </div>
      <div>
        <label for="">
          Data do evento <span class="text-danger">*</span>
        </label>
        <input name="date_events" id="date_events_edit" class="form-control" type="date">
      </div>
      <div>
        <label for="">
          Inicio do evento <span class="text-danger">*</span>
        </label>
        <input name="hours_start_event" id="hours_start_event_edit" class="form-control" type="time">
      </div>
      <div>
        <label for="">
          Encerramento do evento <span class="text-danger">*</span>
        </label>
        <input name="hours_end_event" id="hours_end_event_edit" class="form-control" type="time">
      </div>
      <div>
        <label for="">
          Local do evento <span class="text-danger">*</span>
        </label>
        <input name="local_event" id="local_event_edit" class="form-control" type="text" placeholder="Local do evento">
      </div>

      <button class="base-btn" type="submit">
        Salvar
      </button>
    </form>
  </div>
</div>

<!-- TABLE -->
<div class="table-data">
  <div class="order">
    <div class="head">
      <h3>Todos os eventos</h3>
      <i class="bx bx-search"></i>
      <i class="bx bx-filter"></i>
    </div>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Capa</th>
          <th>Tipo</th>
          <th>Descrição</th>
          <th>Data</th>
          <th>Horário</th>
          <th>Local</th>
          <th>Ação</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
</div>

<script src="<?= urlProject(FOLDER_DASHBOARD . BASE_JS . "/actions_events_r.js") ?>"></script>