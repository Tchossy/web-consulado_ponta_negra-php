<?php $this->layout('_theme') ?>

<!-- head-title -->
<div class="head-title">
  <div class="left">
    <h1>Eventos</h1>
    <ul class="breadcrumb">
      <li>
        <a href="#">Painel</a>
      </li>
      <li><i class="bx bx-chevron-right"></i></li>
      <li>
        <a class="active" href="#"> Eventos</a>
      </li>
    </ul>
  </div>
  <button class="btn-download" data-toggle="modal" data-target="#userModal">
    <i class="bx bxs-file-plus"></i>
    <span class="text">Novo evento</span>
  </button>
</div>

<!-- MODAL -->
<div id="userModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Título do modal</h2>
    <p>Conteúdo do modal</p>
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
            <p>Organização do Concurso de Fotografia da Cidade-2023</p>
          </td>
          <td>
            <p>01 Outubro, Quarta-feira</p>
          </td>
          <td>
            <p>9:30am - 1:00pm</p>
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
            <p>Reunião do Comitê Municipal de Inovação e Tecnologia</p>
          </td>
          <td>
            <p>03 Dezembro, Quinta-feira</p>
          </td>
          <td>
            <p>3:00pm - 7:00pm</p>
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
            <p>Organização do Concurso de Fotografia da Cidade-2023</p>
          </td>
          <td>
            <p>01 Outubro, Quarta-feira</p>
          </td>
          <td>
            <p>9:30am - 1:00pm</p>
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