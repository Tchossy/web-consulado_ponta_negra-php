<?php $this->layout('_theme') ?>

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
    <a href="#" class="btn-download">
      <i class="bx bxs-cloud-download"></i>
      <span class="text">Download PDF</span>
    </a>
  </div>
  <ul class="box-info">
    <li>
      <i class="bx bxs-group"></i>
      <span class="text">
        <h3>2834</h3>
        <p>Usuários</p>
      </span>
    </li>
    <li>
      <i class="bx bxs-news"></i>
      <span class="text">
        <h3>50</h3>
        <p>Total de Posts</p>
      </span>
    </li>
    <li>
      <i class="bx bxs-calendar-event"></i>
      <span class="text">
        <h3>30</h3>
        <p>Eventos</p>
      </span>
    </li>
  </ul>

  <div class="table-data">
    <div class="order">
      <div class="head">
        <h3>Usuários recentes</h3>
        <i class="bx bx-search"></i>
        <i class="bx bx-filter"></i>
      </div>
      <table>
        <thead>
          <tr>
            <th>Utilizador</th>
            <th>Ordem de Data</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <img src="img/people.png" />
              <p>Rafael</p>
            </td>
            <td>01-10-2021</td>
            <td><span class="status completed">Concluído</span></td>
          </tr>
          <tr>
            <td>
              <img src="img/people.png" />
              <p>Rafael</p>
            </td>
            <td>01-10-2021</td>
            <td><span class="status pending">Pendente</span></td>
          </tr>
          <tr>
            <td>
              <img src="img/people.png" />
              <p>Rafael</p>
            </td>
            <td>01-10-2021</td>
            <td><span class="status process">Processo</span></td>
          </tr>
          <tr>
            <td>
              <img src="img/people.png" />
              <p>Rafael</p>
            </td>
            <td>01-10-2021</td>
            <td><span class="status pending">Pendente</span></td>
          </tr>
          <tr>
            <td>
              <img src="img/people.png" />
              <p>Rafael</p>
            </td>
            <td>01-10-2021</td>
            <td><span class="status completed">Concluído</span></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="todo">
      <div class="head">
        <h3>Todos</h3>
        <i class="bx bx-plus"></i>
        <i class="bx bx-filter"></i>
      </div>
      <ul class="todo-list">
        <li class="completed">
          <p>Lista de afazeres</p>
          <i class="bx bx-dots-vertical-rounded"></i>
        </li>
        <li class="completed">
          <p>Lista de afazeres</p>
          <i class="bx bx-dots-vertical-rounded"></i>
        </li>
        <li class="not-completed">
          <p>Lista de afazeres</p>
          <i class="bx bx-dots-vertical-rounded"></i>
        </li>
        <li class="completed">
          <p>Lista de afazeres</p>
          <i class="bx bx-dots-vertical-rounded"></i>
        </li>
        <li class="not-completed">
          <p>Lista de afazeres</p>
          <i class="bx bx-dots-vertical-rounded"></i>
        </li>
      </ul>
    </div>
  </div>
</div>