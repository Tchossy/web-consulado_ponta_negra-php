<?php
session_start();
$this->layout('_theme');
?>


<section class="py-8 py-md-15 py-xl-22 noFoundContentBlock">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-9 col-lg-6 col-xlwd-6 text-center">
        <h1 style="font-size: 9rem;" class="header-404 fontAlter d-flex align-items-center justify-content-center">4
          <img class="px-3" src="<?= urlProject(FOLDER_BASE . "/src/images/ico-stop.png") ?>" alt="image description"> 4
        </h1>
        <h2>Ohh! Página não encontrada</h2>
        <p>Parece que nada foi encontrado neste local. Clique no botão abaixo para voltar a pagina principal.</p>

        <a href="home.html" class="btn btn-dark fwSemiBold position-relative border-0 p-0 minWidthMedium"
          data-hover="Voltar para a pagina principal">
          <span class="d-block btnText">Voltar para a pagina principal</span>
        </a>
      </div>
    </div>
  </div>
</section>