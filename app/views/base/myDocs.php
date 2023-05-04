<?php
session_start();
$this->layout('_theme');
?>


<main>
  <header class="pageMainHead d-flex position-relative bgCover w-100 text-white"
    style="background-image: url(<?= urlProject(FOLDER_BASE . "/src/images/img189.jpg") ?>)">
    <div class="alignHolder d-flex w-100 align-items-center">
      <div class="align w-100 position-relative">
        <div class="container">
          <h1 class="text-white mb-2">Status dos documentos</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrWhite rounded-0 border-0 p-0 fontAlter mb-0">
              <li class="breadcrumb-item">
                <a href="home.html">Inicio</a>
              </li>

              <li class="breadcrumb-item active" aria-current="page">
                Status dos documentos
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <div class="container table-data">
    <div class="order" style="background: none;">
      <table>
        <tr>
          <td> <button class="status completed">Pronto</button> - O seu processo está pronto</td>
        </tr>
        <tr>
          <td> <button class="status pending">Pendente</button> - Ouve algum erro com o seu processo, por favor
            contacte-nos </td>
        </tr>
        <tr>
          <td> <button class="status delete">Recusado</button> - O seu processo não foi aceite</td>
        </tr>
        <tr>
          <td> <button class="status" style="background-color: #007ccf">Em tratamento</button> - Aguarde </td>
        </tr>
      </table>
    </div>
  </div>

  <div class="mb-20">
    <div class="container">
      <div class="row">
        <h2 class="mb-4 fwMedium">Status dos seus documentos</h2>
        <!-- <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Corporis, quidem recusandae, nostrum modi libero amet autem iure
                quibusdam cupiditate explicabo debitis saepe beatae quasi
                repudiandae maiores cumque aliquid impedit facere.
              </p> -->
      </div>
      <!-- TABLE -->
      <div class="table-data">
        <div class="order">
          <div class="head">
            <h3>Seus documentos</h3>
            <i class="bx bx-search"></i>
            <i class="bx bx-filter"></i>
          </div>
          <table>
            <thead>
              <tr>
                <th>ID</th>
                <th>Sector</th>
                <th>Descrição</th>
                <th>Data de entrada</th>
                <th>Data de entrega</th>
                <th>Status</th>
              </tr>
            </thead>
            <?php
            if ((isset($_SESSION['utente_email']))) {
              echo "
                <tbody id='tbody'>
                </tbody>
              ";
            } else {
              echo "<div class='alert alert-danger' role='alert' id='msgAlerta'> Faça o login ou registre-se para fazer o agendamento </div>";
            }
            ?>
          </table>
        </div>
      </div>
    </div>
  </div>
</main>

<script src="<?= urlProject(FOLDER_BASE . BASE_JS . "/myDocs_user.js") ?>"></script>