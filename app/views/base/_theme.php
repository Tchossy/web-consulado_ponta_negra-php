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

  <link rel="stylesheet" href="<?= urlProject(FOLDER_BASE . "/src/public/styles/globalStyles.css") ?>">

  <!-- inlcude google nunito sans font cdn link -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
    rel="stylesheet" />

  <!-- inlcude google cabin font cdn link -->
  <link
    href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <!-- include the site bootstrap 4.1 stylesheet -->
  <link rel="stylesheet" href="<?= urlProject(FOLDER_BASE . "/src/css/bootstrap.css") ?>" />

  <!-- include the site stylesheet -->
  <link rel="stylesheet" href="<?= urlProject(FOLDER_BASE . "/src/css/style.css") ?>" />
  <link rel="stylesheet" href="<?= urlProject(FOLDER_BASE . "/src/css/table.css") ?>" />

  <!-- include theme color setting stylesheet -->
  <link rel="stylesheet" href="<?= urlProject(FOLDER_BASE . "/src/css/colors.css") ?>" />

  <!-- include the site responsive stylesheet -->
  <link rel="stylesheet" href="<?= urlProject(FOLDER_BASE . "/src/css/responsive.css") ?>" />

  <!-- Icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
</head>


<body>
  <!-- pageWrapper -->
  <div id="pageWrapper">
    <?php
    if ($this->section('removeHeader')) :
      echo $this->section('removeHeader');
    else :
      require 'src/components/Header/index.php';
    endif;
    ?>

    <?= $this->section('content') ?>

    <?php
    if ($this->section('removeFooter')) :
      echo $this->section('removeFooter');
    else :
      require 'src/components/Footer/index.php';
    endif;
    ?>

  </div>

  <script type="text/javascript" src="<?= urlProject(FOLDER_BASE . BASE_JS . "/custom.js") ?>"></script>
  <!-- include jQuery library -->
  <script src="<?= urlProject(FOLDER_BASE . BASE_JS . "/jquery-3.4.1.min.js") ?>"></script>
  <!-- include custom JavaScript -->
  <script src="<?= urlProject(FOLDER_BASE . BASE_JS . "/jqueryCustom.js") ?>"></script>
  <!-- include plugins JavaScript -->
  <script src="<?= urlProject(FOLDER_BASE . BASE_JS . "/plugins.js") ?>"></script>
  <!-- include fontAwesome -->
  <script src="https://kit.fontawesome.com/391f644c42.js"></script>

  </script>



</body>

</html>