<?php $this->layout('_theme') ?>

<div class="head-title">
  <div class="left">
    <h1>Blog</h1>
    <ul class="breadcrumb">
      <li>
        <a href="#">Painel</a>
      </li>
      <li><i class="bx bx-chevron-right"></i></li>
      <li>
        <a class="active" href="#">Blog</a>
      </li>
    </ul>
  </div>
  <a href="#" class="btn-download">
    <i class="bx bxs-file-plus"></i>
    <span class="text">Nova postagem</span>
  </a>
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