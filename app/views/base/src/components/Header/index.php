<?php

$btn_login = '';
$value_exit = 'logout_user';

if ((!isset($_SESSION['utente_email']))) {
  $btn_login = '
          <a href=" ' . urlProject("login") . ' " class="ml-6" style="color: red">
            <i class="fa-solid fa-user"></i>
            Login
          </a>
';
} else {
  $btn_login = "
          <button style='background: none; color: red' onclick='exitLogin(123)' class='ml-6'>
            <i class='fa-solid fa-arrow-right-from-bracket'></i>
            Sair
          </button>
";
}

?>

<!-- phStickyWrap -->
<div class="phStickyWrap">
  <!-- pageHeader -->
  <header id="pageHeader" class="bg-white">
    <div class="hdTopBar py-2 py-xl-3 bg-black d-none d-md-block">
      <div class="container">
        <div class="row">
          <div class="col-8">
            <ul class="list-unstyled hdScheduleList mb-0 d-flex flex-wrap align-items-center">
              <li>
                <a href="tel:18001234567">
                  <i class="icomoon-telRcv align-middle icn"><span class="sr-only">icon</span></i>
                  Ligar: (+242) 05 052 32 88
                </a>
              </li>
              <li>
                <time datetime="2023-01-12">
                  <i class="icomoon-clock align-middle icn"><span class="sr-only">icon</span></i>
                  Horário de atendimento: Seg - Qui 09h30 - 13h30
                </time>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="hdFixerWrap py-2 py-md-3 py-xl-5 sSticky bg-white">
      <div class="container">
        <nav class="navbar navbar-expand-md navbar-light p-0">
          <!-- LOGO -->
          <div class="logo flex-shrink-0 mr-3 mr-xl-8 mr-xlwd-16">
            <a href="<?= urlProject("") ?>">
              <img src="<?= urlProject(FOLDER_BASE . "/src/images/logo.png") ?>" class="img-fluid" alt="Consulado Ponta Negra" />
            </a>
          </div>

          <!-- LINK -->
          <div class="hdNavWrap flex-grow-1 d-flex align-items-center justify-content-end justify-content-lg-start">
            <div class="collapse navbar-collapse pageMainNavCollapse mt-2 mt-md-0" id="pageMainNavCollapse">
              <ul class="navbar-nav mainNavigation">
                <li class="nav-item">
                  <a class="nav-link" href="<?= urlProject("") ?>">Inicio</a>
                </li>

                <li class="nav-item dropdown ddohOpener">
                  <a class="nav-link dropdown-toggle dropIcn" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Consulado</a>
                  <div class="dropdown-menu hdMainDropdown desktopDropOnHover">
                    <ul class="list-unstyled mb-0 hdDropdownList">
                      <li>
                        <a class="dropdown-item" href="<?= urlProject("about") ?>">Sobre</a>
                      </li>
                    </ul>
                  </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="<?= urlProject("eventsList") ?>">Eventos</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="<?= urlProject("news") ?>">Notícias</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="<?= urlProject("scheduling") ?>">Agendamento</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="<?= urlProject("myDocs") ?>">Status</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="<?= urlProject("contact") ?>">Contacto</a>
                </li>
              </ul>
            </div>

            <div class="hdRighterWrap d-flex align-items-center justify-content-end">
              <button class="navbar-toggler pgNavOpener ml-2 bdrWidthAlter position-relative collapsed" type="button" data-toggle="collapse" data-target="#pageMainNavCollapse" aria-controls="pageMainNavCollapse" aria-expanded="false" aria-label="Alternar de navegação">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>

            <!-- 
            <form action="#" class="hdSearchForm ml-3 ml-xl-6">
              <a
                class="hdSearchOpener"
                data-toggle="collapse"
                href="#hdSearchCollapse"
                role="button"
                aria-expanded="false"
                aria-controls="hdSearchCollapse"
              >
                <i class="icomoon-search"
                  ><span class="sr-only">procurar</span></i
                >
              </a>
              <div
                class="collapse hdSearchCollapse d-block position-fixed"
                id="hdSearchCollapse"
              >
                <div
                  class="d-flex w-100 h-100 align-items-center jusity-content-center"
                >
                  <div class="container d-block text-center text-light">
                    <div class="row">
                      <div class="col-12 col-md-8 offset-md-2">
                        <div class="input-group mb-3">
                          <input
                            type="search"
                            class="form-control text-left"
                            placeholder="Search&hellip;"
                          />
                          <div class="input-group-append">
                            <button
                              class="btn btn-secondary"
                              type="button"
                            >
                              Procurar
                            </button>
                          </div>
                        </div>
                        <p class="mb-0">
                          Pesquisas populares: <br class="d-md-none" /><a
                            href="javascript:void(0);"
                            >PSD moderno</a
                          >,
                          <a href="javascript:void(0);"
                            >Projeto de portfólio</a
                          >
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <a
                  class="position-absolute rounded-circle bg-danger text-white btnClose d-flex align-items-center justify-content-center"
                  data-toggle="collapse"
                  href="#hdSearchCollapse"
                  role="button"
                  aria-expanded="true"
                  aria-controls="hdSearchCollapse"
                >
                  <i class="fas fa-times"
                    ><span class="sr-only">procurar</span></i
                  >
                </a>
              </div>
            </form>
            -->
          </div>

          <!-- LOGIN -->
          <?= $btn_login ?>

          <div class="dropdown hdLangDropdown ddohOpener d-lg-block show ml-6">
            <a style="background-color: white" class="d-inline-block align-top dropdown-toggle dropIcn" href="javascript:void(0);" role="button" id="hdLanguagedropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Pt</a>
            <div class="dropdown-menu dropdown-menu-right rounded-lg overflow-hidden desktopDropOnHover p-0 show" aria-labelledby="hdLanguagedropdown">
              <a class="dropdown-item text-center active" href="javascript:void(0);">Pt</a>
              <a class="dropdown-item text-center" href="javascript:void(0);">Fre</a>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>
</div>

<script src="<?= urlProject(FOLDER_BASE . BASE_JS . "/logout_user.js") ?>"></script>