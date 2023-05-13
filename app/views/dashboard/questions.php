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
    <h1>Questões</h1>
    <ul class="breadcrumb">
      <li>
        <a href="#">Painel</a>
      </li>
      <li><i class="bx bx-chevron-right"></i></li>
      <li>
        <a class="active" href="#"> Questões</a>
      </li>
    </ul>
  </div>
  <button class="btn-download" data-toggle="modal" data-target="#userModal">
    <i class="bx bxs-file-plus"></i>
    <span class="text">Nova questão</span>
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
      <h3>Todas as questões</h3>
      <i class="bx bx-search"></i>
      <i class="bx bx-filter"></i>
    </div>
    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Questão</th>
          <th>Resposta</th>
          <th>Ação</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <p>1</p>
          </td>
          <td>
            <p>
              Estou recebendo multas de estacionamento em meu nome. O que posso
              fazer?
            </p>
          </td>
          <td>
            <p>
              Uma das adições mais comuns que as pessoas fazem seus carros, a
              fim de manter o calor do lado de fora é um viseira do pára-brisa.
              Os carros ficam quentes no verão porque a luz solar direta entra
              através do janelas. É por isso que estacionamos na sombra sempre
              que pudermos. Desde o maior para-brisa.Na verdade, o vento está se
              tornando barato o suficiente em muitos lugares nos EUA e em todo o
              mundo para competir de forma eficaz com combustíveis fósseis.
            </p>
          </td>
          <td>
            <button class="status edite">Editar</button>
            <button class="status delete">Apagar</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>