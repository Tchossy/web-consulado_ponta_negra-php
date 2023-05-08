<?php $this->layout('_theme') ?>

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

    <form class="modalForm">
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
        <select name="secto_document" class="form-control" name="" id="">
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
        <input class="form-control" type="text" placeholder="Descrição do documento">
      </div>
      <div>
        <label for="">
          Estado do documento <span class="text-danger">*</span>
        </label>
        <select class="form-control" name="" id="">
          <option value="Pronto">Pronto</option>
          <option value="Pendente">Pendente</option>
          <option value="Recusado">Recusado</option>
          <option value="Em tratamento">Em tratamento</option>
        </select>
      </div>

      <button class="base-btn" type="submit">
        Dar entrada
      </button>
      <button class="cancel-btn" data-toggle="modal" data-target="#userModal">
        Cancelar
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
          <th>Nome</th>
          <th>E-mail</th>
          <th>Telemovel</th>
          <th>Sector</th>
          <th>Descrição</th>
          <th>Estado</th>
          <th>Data de entrada</th>
          <th>Data de entrega</th>
          <th>Acção</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <p>Rafael Pilartes</p>
          </td>
          <td>
            <p>rafaelpilartes@gmail.com</p>
          </td>
          <td>
            <p>923414621</p>
          </td>
          <td>
            <p>Sábado, 27 de agosto de 2022</p>
          </td>
          <td>
            <p>Sábado, 27 de agosto de 2022</p>
          </td>
          <td>
            <p>Sábado, 27 de agosto de 2022</p>
          </td>
          <td>
            <p>Sábado, 27 de agosto de 2022</p>
          </td>
          <td>
            <p>Sábado, 27 de agosto de 2022</p>
          </td>
          <td style="display: flex;  gap: 0.4rem;">
            <button class="status edite">Editar</button>
            <button class="status delete">Apagar</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>