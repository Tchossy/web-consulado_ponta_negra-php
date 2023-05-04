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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" type="text/css" />

  <!-- Stylesheet
========================= -->
  <link rel="stylesheet" type="text/css" href="<?= urlProject(FOLDER_BASE . "/src/css/bootstrap.min.css") ?>" />
  <link rel="stylesheet" type="text/css" href="<?= urlProject(FOLDER_BASE . "/src/vendor/font-awesome/css/all.min.css") ?>" />
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
            <div class="hero-bg hero-bg-scroll" style="background-image: url('<?= urlProject(FOLDER_BASE . "/src/images/login-bg.jpg") ?>')"></div>
            <div class="hero-content w-100 min-vh-100 d-flex flex-column">
              <div class="row g-0">
                <div class="col-10 col-lg-9 mx-auto">
                  <div class="logo mt-5 mb-5 mb-md-0">
                    <a class="d-flex" href="<?= urlProject() ?>" title="Oxyy"><img src="<?= urlProject(FOLDER_BASE . "/src/images/logoWhite.png") ?>" alt="Consulado" /></a>
                  </div>
                </div>
              </div>
              <div class="row g-0 my-auto">
                <div class="col-10 col-lg-9 mx-auto">
                  <h1 class="text-11 text-white mb-4">
                    Parece que você é novo aqui!
                  </h1>
                  <p class="text-4 text-white lh-base mb-5">
                    Conencte-se ao consulado em poucos minutos! Inscreva-se
                    com seus dados para começar
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Welcome Text End -->

        <!-- Register Form
      ========================= -->
        <div class="col-md-6 d-flex">
          <div class="container my-auto py-5">
            <div class="row g-0">
              <div class="col-10 col-lg-9 col-xl-8 mx-auto">
                <h3 class="fw-600 mb-4">Inscrever-se</h3>

                <div id="msgAlertaErroCad"></div>

                <form id="registerForm" method="post">
                  <input name="type_form" value="create_author" type="text" hidden>

                  <div class="mb-3">
                    <label for="full_name_user" class="form-label">Nome completo</label>
                    <input type="text" name="full_name_user" class="form-control" required placeholder="Digite seu nome" />
                  </div>
                  <div class="mb-3">
                    <label for="email_address_user" class="form-label">Endereço de email</label>
                    <input type="email" name="email_address_user" class="form-control" required placeholder="Digite seu e-mail" />
                  </div>
                  <div class="mb-3">
                    <label for="number_phone_user" class="form-label">Nº de telefone</label>
                    <input type="number" class="form-control" name="number_phone_user" required placeholder="Digite seu e-mail" />
                  </div>
                  <div class="mb-3">
                    <label for="login_password_user" class="form-label">Senha</label>
                    <input type="password" name="login_password_user" class="form-control" required placeholder="Digite a senha" />
                  </div>
                  <div class="mb-3">
                    <label for="login_password_user" class="form-label">Confirme a senha</label>
                    <input type="password" name="login_confirm_password_user" class="form-control" required placeholder="Digite a senha" />
                  </div>
                  <div class="d-grid my-4">
                    <button id="register-user-btn" class="btn btn-primary" type="submit">
                      Inscrever-se
                    </button>
                  </div>
                </form>
                <p class="text-center text-muted mb-0">
                  já tem uma conta? <a href="<?= urlProject("login") ?>">Conecte-se</a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- Register Form End -->
      </div>
    </div>
  </div>

  <script src="<?= urlProject(FOLDER_BASE . BASE_JS . "/login_user.js") ?>"></script>

</body>

</html>