<?php
require 'src/db/config.php';
session_start();

if ((isset($_SESSION['utente_email']))) {
  header('Location: http://localhost/web-consulado_ponta_negra-php/');
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- set the encoding of your site -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="keywords" content="Consulado Ponta Negra, Tchossy, Tchossy Solution, Consulado, Ponta, Negra" />
  <meta name="description" content="Consulado Geral de Angola em Ponta Negra" />
  <meta name="author" content="https://www.tchossy.com/" />

  <link rel="shortcut icon" href="<?= urlProject(FOLDER_BASE . "/src/images/favicon.png") ?>" />

  <!-- CEO -->
  <meta property="og:url" content="<?= urlProject(FOLDER_BASE . "/src/images/apresentation.png") ?>" />
  <meta property=" og:site_name" content="Consulado Geral de Angola em Ponta Negra" />
  <meta property="og:title" content="Consulado Geral de Angola em Ponta Negra" />
  <meta property="og:image" content="<?= urlProject(FOLDER_BASE . "/src/images/apresentation.png") ?>" />
  <meta property=" og:description" content="Consulado Geral de Angola Ponta Negra" />
  <meta property="og:type" content="article" />
  <meta property="article:tag" content="Consulado Ponta Negra" />
  <meta property="article:tag" content="Ponta Negra" />
  <meta property="article:tag" content="Consulado" />
  <meta property="article:tag" content="Angola" />
  <meta property="article:tag" content="Tchossy" />
  <meta property="article:tag" content="Tchossy Solution" />

  <!-- set the page title -->
  <title> <?= SITE ?> </title>

  <!-- Web Fonts
========================= -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900"
    type="text/css" />

  <!-- Stylesheet
========================= -->
  <link rel="stylesheet" type="text/css" href="<?= urlProject(FOLDER_BASE . "/src/css/bootstrap.min.css") ?>" />
  <link rel="stylesheet" type="text/css"
    href="<?= urlProject(FOLDER_BASE . "/src/vendor/font-awesome/css/all.min.css") ?>" />
  <link rel="stylesheet" type="text/css" href="<?= urlProject(FOLDER_BASE . "/src/css/login.css") ?>" />
</head>

<body>
  <div id="main-wrapper" class="oxyy-login-register">
    <div class="container-fluid px-0">
      <div class="row g-0 min-vh-100">
        <!-- Welcome Text
      ========================= -->
        <div class="col-md-6">
          <div class="hero-wrap d-flex align-items-center h-100">
            <div class="hero-mask opacity-8 bg-primary"></div>
            <div class="hero-bg hero-bg-scroll"
              style="background-image: url(<?= urlProject(FOLDER_BASE . "/src/images/login-bg.jpg") ?>)"></div>
            <div class="hero-content w-100 min-vh-100 d-flex flex-column">
              <div class="row g-0">
                <div class="col-10 col-lg-9 mx-auto">
                  <div class="logo mt-5 mb-5 mb-md-0">
                    <a class="d-flex" href="<?= urlProject() ?>" title="Consulado"><img
                        src="<?= urlProject(FOLDER_BASE . "/src/images/logoWhite.png") ?>" alt="Consulado" /></a>
                  </div>
                </div>
              </div>
              <div class="row g-0 my-auto">
                <div class="col-10 col-lg-9 mx-auto">
                  <h1 class="text-11 text-white mb-4">Bem vindo de volta!</h1>
                  <p class="text-4 text-white lh-base mb-5">
                    Estamos felizes em vê-lo novamente! Tenha acesso aos seus
                    Pedidos, Documento, Actualizações e recomendações.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Welcome Text End -->

        <!-- Login Form
      ========================= -->
        <div class="col-md-6 d-flex">
          <div class="container my-auto py-5">
            <div class="row g-0">
              <div class="col-10 col-lg-9 col-xl-8 mx-auto">
                <h3 class="fw-600 mb-4">Conecte-se </h3>

                <div id="msgAlertaErroCad"></div>

                <form id="registerForm" method="post">
                  <input name="type_form" value="login_user" type="text" hidden>

                  <div class="mb-3">
                    <label for="emailAddress" class="form-label">Endereço de email</label>
                    <input type="email" name="email_address_user" class="form-control" id="emailAddress"
                      placeholder="Digite seu e-mail" />
                  </div>
                  <div class="mb-3">
                    <label for="loginPassword" class="form-label">Senha</label>
                    <input type="password" name="login_password_user" class="form-control" id="loginPassword" required
                      placeholder="Digite a senha" />
                  </div>

                  <div class="d-grid my-4">
                    <button class="btn btn-primary" type="submit">
                      Conecte-se
                    </button>
                  </div>
                </form>
                <p class="text-center text-muted mb-0">
                  Não tem uma conta?
                  <a class="link-primary" href="<?= urlProject("register") ?>">Inscrever-se</a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- Login Form End -->
      </div>
    </div>
  </div>

  <script src="<?= urlProject(FOLDER_BASE . BASE_JS . "/login_user.js") ?>"></script>

</body>

</html>