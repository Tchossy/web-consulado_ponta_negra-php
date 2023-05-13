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
    <h1>Noticia</h1>
    <ul class="breadcrumb">
      <li>
        <a href="#">Painel</a>
      </li>
      <li><i class="bx bx-chevron-right"></i></li>
      <li>
        <a class="active" href="#">Noticia</a>
      </li>
    </ul>
  </div>
  <button class="btn-download" data-toggle="modal" data-target="#newsModal">
    <i class="bx bxs-file-plus"></i>
    <span class="text">Nova noticia</span>
  </button>
</div>

<!-- MODAL -->
<div id="newsModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="container-modal">
      <h2>Criar nova de noticia</h2>
    </div>

    <form id="formNews" class="modalForm">
      <span id="msgAlertaErroCad"></span>

      <input name="author_news" id="author_news" type="text" hidden>

      <input name="images_news[]" class="form-control" type="file" id="inputImagens" multiple>
      <div id="containerImagens"></div>

      <div>
        <label for="">
          Categoria da noticia <span class="text-danger">*</span>
        </label>
        <input name="category_news" class="form-control" type="text" placeholder="Categoria da noticia">
      </div>
      <div>
        <label for="">
          Titulo da noticia <span class="text-danger">*</span>
        </label>
        <input name="title_news" class="form-control" type="text" placeholder="Titulo da noticia">
      </div>
      <div>
        <label for="">
          Descrição da noticia <span class="text-danger">*</span>
        </label>
        <input name="description_news" class="form-control" type="text" placeholder="Descrição da noticia">
      </div>
      <div>
        <label for="">
          Epígrafe da noticia <span class="text-danger">*</span>
        </label>
        <input name="epigraph_news" class="form-control" type="text" placeholder="Epígrafe da noticia">
      </div>
      <div>
        <label for="">
          Autor da epígrafe <span class="text-danger">*</span>
        </label>
        <input name="author_epigraph_news" class="form-control" type="text" placeholder="Autor da epígrafe">
      </div>
      <div>
        <label for="">
          Data da noticia <span class="text-danger">*</span>
        </label>
        <input name="date_news" class="form-control" type="date">
      </div>

      <button class="base-btn" type="submit">
        Dar entrada
      </button>
    </form>
  </div>
</div>

<div id="newsEditeModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="container-modal">
      <h2>Editar noticia</h2>
    </div>

    <form id="newsEditForm" class="modalForm">
      <span id="msgAlertaErroCad"></span>

      <input class="form-control" type="file" id="inputEditeImagens" multiple>
      <div id="containerImagens"></div>

      <div>
        <label for="">
          Categoria da noticia <span class="text-danger">*</span>
        </label>
        <input name="category_news" class="form-control" type="text" placeholder="Categoria da noticia">
      </div>
      <div>
        <label for="">
          Titulo da noticia <span class="text-danger">*</span>
        </label>
        <input name="title_news" class="form-control" type="text" placeholder="Titulo da noticia">
      </div>
      <div>
        <label for="">
          Descrição da noticia <span class="text-danger">*</span>
        </label>
        <input name="description_news" class="form-control" type="text" placeholder="Descrição da noticia">
      </div>
      <div>
        <label for="">
          Epígrafe da noticia <span class="text-danger">*</span>
        </label>
        <input name="epigraph_news" class="form-control" type="text" placeholder="Epígrafe da noticia">
      </div>
      <div>
        <label for="">
          Autor da epígrafe <span class="text-danger">*</span>
        </label>
        <input name="author_epigraph_news" class="form-control" type="text" placeholder="Autor da epígrafe">
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
      <h3>Todos os posts</h3>
      <i class="bx bx-search"></i>
      <i class="bx bx-filter"></i>
    </div>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Capa</th>
          <th>Categoria</th>
          <th>Titulo</th>
          <th>Descrição</th>
          <th>Data</th>
          <th>Local</th>
          <th>Ação</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <p>1</p>
          </td>
          <td>
            <img src="img/people.png" />
          </td>
          <td>
            <p>Conferência</p>
          </td>
          <td>
            <p>Novo Ministro</p>
          </td>
          <td>
            <p>Organização do Concurso de Fotografia da Cidade-2023</p>
          </td>
          <td>
            <p>01 Outubro, Quarta-feira</p>
          </td>
          <td>
            <p>Congo Central</p>
          </td>
          <td style="display: flex; gap: 0.6rem;">
            <button class="status edite">Editar</button>
            <button class="status delete">Apagar</button>
          </td>
        </tr>
        <tr>
          <td>
            <p>2</p>
          </td>
          <td>
            <img src="img/people.png" />
          </td>
          <td>
            <p>Reunião</p>
          </td>
          <td>
            <p>Novo Ministro</p>
          </td>
          <td>
            <p>Reunião do Comitê Municipal de Inovação e Tecnologia</p>
          </td>
          <td>
            <p>03 Dezembro, Quinta-feira</p>
          </td>
          <td>
            <p>Cassai Central</p>
          </td>
          <td style="display: flex; gap: 0.6rem;">
            <button class="status edite">Editar</button>
            <button class="status delete">Apagar</button>
          </td>
        </tr>
        <tr>
          <td>
            <p>1</p>
          </td>
          <td>
            <img src="img/people.png" />
          </td>
          <td>
            <p>Entretenimento</p>
          </td>
          <td>
            <p>Novo Ministro</p>
          </td>
          <td>
            <p>Organização do Concurso de Fotografia da Cidade-2023</p>
          </td>
          <td>
            <p>01 Outubro, Quarta-feira</p>
          </td>
          <td>
            <p>Congo Central</p>
          </td>
          <td style="display: flex; gap: 0.6rem;">
            <button class="status edite">Editar</button>
            <button class="status delete">Apagar</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<script src="<?= urlProject(FOLDER_DASHBOARD . BASE_JS . "/actions_news_rend.js") ?>"></script>