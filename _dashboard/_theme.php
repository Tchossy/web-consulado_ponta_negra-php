<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title> <?= SITE ?> </title>

  <!-- Favicons -->
  <link href="<?= urlProject(FOLDER_BASE . "/src/images/icon.jpg") ?>" rel="icon" />
  <link href="<?= urlProject(FOLDER_BASE . "/src/images/icon.jpg") ?>" rel="apple-touch-icon" />

  <!-- CEO -->
  <link as="image" rel="preload" href="<?= urlProject(FOLDER_BASE . "/src/images/cover.png") ?>" fetchpriority="high" />
  <meta property="og:url" content="<?= urlProject(FOLDER_BASE . "/src/images/cover.png") ?>" />
  <meta property="og:site_name" content="Grace Minds" />
  <meta property="og:title" content="Grace Minds" />
  <meta property="og:image" content="<?= urlProject(FOLDER_BASE . "/src/images/cover.png") ?>" />
  <meta property="og:description" content="Grace Minds - Academia de relacionamento" />
  <meta name="author" content="https://www.tchossy.com/" />
  <meta property="og:type" content="article" />
  <meta property="article:tag" content="Grace" />
  <meta property="article:tag" content="Minds" />
  <meta property="article:tag" content="Grace Minds" />
  <meta property="article:tag" content="Consultório" />
  <meta property="article:tag" content="Relacionamento" />
  <meta property="article:tag" content="Luanda" />
  <meta property="article:tag" content="Terapia" />
  <meta property="article:tag" content="Consulta" />
  <meta property="article:tag" content="Psicologia" />
  <meta property="article:tag" content="Psicóloga" />
  <meta property="article:tag" content="Tchossy" />
  <meta property="article:tag" content="Tchossy" />
  <meta property="article:tag" content="Tchossy Solution" />

  <!-- Boxicons -->
  <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
  <!-- STYLES -->
  <link rel="stylesheet" type="text/css" href="<?= urlProject(FOLDER_DASHBOARD . "/src/css/style.css") ?> " />

</head>


<body>

  <!-- SIDEBAR -->
  <section id="sidebar">
    <a href="index.html" class="brand">
      <img src="img/logo.png" class="logo" alt="" />
    </a>
    <ul class="side-menu top">
      <li>
        <a href="index.html">
          <i class="bx bxs-dashboard"></i>
          <span class="text">Painel</span>
        </a>
      </li>
      <li>
        <a href="users.html">
          <i class="bx bxs-group"></i>
          <span class="text">Usuários</span>
        </a>
      </li>
      <li>
        <a href="services.html">
          <i class="bx bx-windows"></i>
          <span class="text">Serviços</span>
        </a>
      </li>
      <li>
        <a href="questions.html">
          <i class="bx bx-question-mark"></i>
          <span class="text">Questões</span>
        </a>
      </li>
      <li>
        <a href="events.html">
          <i class="bx bx-calendar-event"></i>
          <span class="text">Eventos</span>
        </a>
      </li>
      <li>
        <a href="blog.html">
          <i class="bx bx-news"></i>
          <span class="text">Blog</span>
        </a>
      </li>
    </ul>
    <ul class="side-menu">
      <!-- <li>
          <a href="#">
            <i class="bx bxs-cog"></i>
            <span class="text">Configurações</span>
          </a>
        </li> -->
      <li>
        <a href="#" class="logout">
          <i class="bx bxs-log-out-circle"></i>
          <span class="text">Sair</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- SIDEBAR -->

  <!-- CONTENT -->
  <section id="content">
    <!-- NAVBAR -->
    <nav>
      <i class="bx bx-menu"></i>
      <form action="#">
        <div class="form-input">
          <input type="search" placeholder="Procurar..." />
          <button type="submit" class="search-btn">
            <i class="bx bx-search"></i>
          </button>
        </div>
      </form>
      <input type="checkbox" id="switch-mode" hidden />
      <label for="switch-mode" class="switch-mode"></label>

      <a href="#" class="profile">
        <img src="img/people.png" />
      </a>
    </nav>
    <!-- NAVBAR -->

    <!-- MAIN -->
    <main>

      <?= $this->section('content') ?>

    </main>
    <!-- MAIN -->
  </section>
  <!-- CONTENT -->

  <!-- Custom scripts for all pages-->
  <script src="<?= urlProject(FOLDER_DASHBOARD . "/src/js/script.js") ?> "></script>
  <script src="<?= urlProject(FOLDER_DASHBOARD . "/src/vendor/bootstrap/bootstrap.min.js") ?> "></script>

</body>

</html>