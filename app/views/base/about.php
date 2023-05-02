<?php $this->layout('_theme') ?>

<main>
  <header class="pageMainHead d-flex position-relative bgCover w-100 text-white"
    style="background-image: url(<?= urlProject(FOLDER_BASE . "/src/images/img50.jpg") ?>">
    <div class="alignHolder d-flex w-100 align-items-center">
      <div class="align w-100 position-relative">
        <div class="container">
          <h1 class="text-white mb-2">Sobre</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrWhite rounded-0 border-0 p-0 fontAlter mb-0">
              <li class="breadcrumb-item">
                <a href="home.html">Inicio</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Sobre
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <article class="aboutWelcomeBlock pt-7 pb-7 pt-md-10 pb-md-10 pt-lg-16 pb-lg-16 pt-xl-22 pb-xl-22">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 d-md-flex align-items-md-center">
          <div class="w-100 pr-xl-12">
            <header class="awbHeadingHead text-lDark mb-4">
              <h2 class="mb-5">
                Bem-vindo ao Consulado de Angola em Ponta Negra
              </h2>
            </header>
            <p>
              No dia 1 de Maio de 2023, dia em que a maior parte dos
              países do Mundo comemora o Dia Internacional do Trabalhador,
              o Consulado Geral da República de Angola em Ponta Negra,
              inaugurou este Site, com o objectivo de aproximar-se dos
              cidadãos angolanos residentes em Ponta Negra e no Kouilou e
              dos demais utentes que procuram os seus serviço.
            </p>
            <p>
              A partir de agora, os utentes podem se deslocar ao Consulado
              sem saírem de casa e resolverem todos os seus problemas
              consulares apenas com clique.
            </p>
            <p><strong>Sejam todos bem-vindos!</strong></p>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="awbImgHolder text-md-right mt-5 mt-md-0">
            <img src="<?= urlProject(FOLDER_BASE . "/src/images/img38.jpg") ?>" class="img-fluid"
              alt="image description" />
          </div>
        </div>
      </div>
    </div>
  </article>

  <aside class="counterftAsideBlock counterftAsideBlockvii position-relative text-center text-white d-flex bg-dark">
    <div class="alignHolder d-flex align-items-center w-100 position-relative">
      <div class="align w-100 pt-9 pb-5">
        <div class="container">
          <ul class="list-unstyled cfbFeatList d-flex flex-wrap mb-0 justify-content-center">
            <li>
              <h3 class="fwSemiBold text-white textCount mb-3">
                <span class="dataCount">394</span>
              </h3>
              <h4 class="subtitle mb-0 font-weight-normal">
                Vistos emitidos
              </h4>
            </li>
            <li>
              <h3 class="fwSemiBold text-white textCount mb-3">
                <span class="dataCount">1.361</span>
              </h3>
              <h4 class="subtitle mb-0 font-weight-normal">
                Bilhetes de identidade<br />emitidos
              </h4>
            </li>
            <li>
              <h3 class="fwSemiBold text-white textCount mb-3">
                <span class="dataCount">11</span>
              </h3>
              <h4 class="subtitle mb-0 font-weight-normal">
                Salvo-conduto
              </h4>
            </li>
            <li>
              <h3 class="fwSemiBold text-white textCount mb-3">
                <span class="dataCount">108</span>
              </h3>
              <h4 class="subtitle mb-0 font-weight-normal">
                Renovações de <br />
                registos consulares
              </h4>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <span class="cfbBgWrap bgCover position-absolute h-100 w-100 inaccessible"
      style="background-image: url(images/bg01.png)"></span>
  </aside>

  <!-- ANY SECTION -->
  <!-- 
        <section
          class="prioritiesBlock bg-light pt-7 pb-4 pt-md-10 pb-md-7 pt-lg-16 pb-lg-10 pt-xl-22 pb-xl-16"
        >
          <div class="container">
            <div class="row">
              <div class="col-12 col-xl-4 pt-xl-3">
                <header
                  class="watermarkHeadingHead position-relative mb-7 mb-lg-10 mb-xl-0"
                  data-watermark="03"
                >
                  <h2 class="fwSemiBold h2Medium mb-4">
                    xxxxxxxx xxxxx <br />xxxxx xxxx
                  </h2>
                  <p>
                    xxxxxxxxxxxx xxxxxxxxxx xxxxxxxxxxxxxxxxx xxxxxxxxx xxxxxx
                    xxxxxxxxxxxx xxxxxxxxxxxxxxx xxxxxxxxxxxx xxxxxxxxxxxx
                    xxxxxxxx x xxxxxxxxx x x x
                  </p>
                </header>
              </div>
              <div class="col-12 col-xl-8">
                <div class="row justify-content-center">
                  <div class="col-12 col-sm-6 col-md-4 d-flex">
                    <article
                      class="prtColumn w-100 bg-white shadow d-flex text-center mb-6 pt-10 px-5 pb-7 hasOver"
                    >
                      <div class="alignHolder d-flex w-100">
                        <div class="align w-100">
                          <i
                            class="icnWrap d-flex align-items-center justify-content-center icomoon-ico20 mb-4"
                            ><span class="sr-only">icon</span></i
                          >
                          <h3 class="fwMedium pb-3 mb-5">xxxxxx xxxxxxxxxx</h3>
                          <p>
                            xxxxxxxxxxxx xxxxxxxxxx xxxxxxxxxxxxxxxxx xxxxxxxxx
                            xxxxxx xxxxxxxxxxxx xxxxxxxxxxxxxxx xxxxxxxxxxxx
                          </p>
                        </div>
                      </div>
                    </article>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 d-flex">
                    <article
                      class="prtColumn w-100 bg-white shadow d-flex text-center mb-6 pt-10 px-5 pb-7"
                    >
                      <div class="alignHolder d-flex w-100">
                        <div class="align w-100">
                          <i
                            class="icnWrap d-flex align-items-center justify-content-center icomoon-ico21 mb-4"
                            ><span class="sr-only">icon</span></i
                          >
                          <h3 class="fwMedium pb-3 mb-5">xxxxxx xxxxxxxxxx</h3>
                          <p>
                            xxxxxxxxxxxx xxxxxxxxxx xxxxxxxxxxxxxxxxx xxxxxxxxx
                            xxxxxx xxxxxxxxxxxx xxxxxxxxxxxxxxx xxxxxxxxxxxx
                          </p>
                        </div>
                      </div>
                    </article>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 d-flex">
                    <article
                      class="prtColumn w-100 bg-white shadow d-flex text-center mb-6 pt-10 px-5 pb-7"
                    >
                      <div class="alignHolder d-flex w-100">
                        <div class="align w-100">
                          <i
                            class="icnWrap d-flex align-items-center justify-content-center icomoon-ico22 mb-4"
                            ><span class="sr-only">icon</span></i
                          >
                          <h3 class="fwMedium pb-3 mb-5">xxxxxx xxxxxxxxxx</h3>
                          <p>
                            xxxxxxxxxxxx xxxxxxxxxx xxxxxxxxxxxxxxxxx xxxxxxxxx
                            xxxxxx xxxxxxxxxxxx xxxxxxxxxxxxxxx xxxxxxxxxxxx
                          </p>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        -->

  <!-- Conheça a Consulado -->
  <section
    class="meetCouncilBlock noOverlay position-relative pt-7 pt-md-9 pt-lg-14 pt-xl-20 pb-3 pb-md-8 pb-lg-11 pb-xl-16">
    <div class="container">
      <header class="headingHead text-center cdTitle mb-7 mb-md-13">
        <h2 class="fwSemiBold mb-4">Conheça o Consulado Geral</h2>
        <p>
          O conselho da cidade tem superpoderes reais como administrador
          para liderar o país.
        </p>
      </header>
      <div class="row justify-content-center">
        <!-- Samuel Andrade Da Cunha -->
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
          <article class="mccColumn bg-white shadow mb-6 mx-auto mx-sm-0">
            <div class="imgHolder position-relative">
              <img src="<?= urlProject(FOLDER_BASE . "/src/images/img19.jpg") ?>" class="img-fluid d-block w-100"
                alt="image description" />
              <div class="mcssHolder"></div>
            </div>
            <div class="mcCaptionWrap px-5 pt-5 pb-4 position-relative">
              <h3 class="fwMedium h3Small mb-1">
                Samuel Andrade Da Cunha
              </h3>
              <h4 class="fwSemiBold fontBase text-secondary">
                Cônsul Geral
              </h4>
              <hr class="mccSeprator mx-0 mt-4 mb-3" />
            </div>
          </article>
        </div>

        <!-- Maria Cezaltina Da Costa -->
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
          <article class="mccColumn bg-white shadow mb-6 mx-auto mx-sm-0">
            <div class="imgHolder position-relative">
              <img src="<?= urlProject(FOLDER_BASE . "/src/images/consul9.jpg") ?>" class="img-fluid d-block w-100"
                alt="image description" />
              <div class="mcssHolder"></div>
            </div>
            <div class="mcCaptionWrap px-5 pt-5 pb-4 position-relative">
              <h3 class="fwMedium h3Small mb-1">
                Maria Cezaltina Da Costa
              </h3>
              <h4 class="fwSemiBold fontBase text-secondary">
                Vice Cônsul para o Sector Migratório
              </h4>
              <hr class="mccSeprator mx-0 mt-4 mb-3" />
            </div>
          </article>
        </div>

        <!-- Paula Lemos -->
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
          <article class="mccColumn bg-white shadow mb-6 mx-auto mx-sm-0">
            <div class="imgHolder position-relative">
              <img src="<?= urlProject(FOLDER_BASE . "/src/images/img20.jpg") ?>" class="img-fluid d-block w-100"
                alt="image description" />
              <div class="mcssHolder"></div>
            </div>
            <div class="mcCaptionWrap px-5 pt-5 pb-4 position-relative">
              <h3 class="fwMedium h3Small mb-1">Paula Lemos</h3>
              <h4 class="fwSemiBold fontBase text-secondary">
                Vice Cônsul para o Sector Comercial
              </h4>
              <hr class="mccSeprator mx-0 mt-4 mb-3" />
            </div>
          </article>
        </div>

        <!-- Angelino Quissua -->
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
          <article class="mccColumn bg-white shadow mb-6 mx-auto mx-sm-0">
            <div class="imgHolder position-relative">
              <img src="<?= urlProject(FOLDER_BASE . "/src/images/img21.jpg") ?>" class="img-fluid d-block w-100"
                alt="image description" />
              <div class="mcssHolder"></div>
            </div>
            <div class="mcCaptionWrap px-5 pt-5 pb-4 position-relative">
              <h3 class="fwMedium h3Small mb-1">Angelino Quissua</h3>
              <h4 class="fwSemiBold fontBase text-secondary">
                Vice Cônsul para o Sector de Apoio às Comunidades
              </h4>
              <hr class="mccSeprator mx-0 mt-4 mb-3" />
            </div>
          </article>
        </div>

        <!-- Priscila Chaves -->
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
          <article class="mccColumn bg-white shadow mb-6 mx-auto mx-sm-0">
            <div class="imgHolder position-relative">
              <img src="<?= urlProject(FOLDER_BASE . "/src/images/img22.jpg") ?>" class="img-fluid d-block w-100"
                alt="image description" />
              <div class="mcssHolder"></div>
            </div>
            <div class="mcCaptionWrap px-5 pt-5 pb-4 position-relative">
              <h3 class="fwMedium h3Small mb-1">Priscila Chaves</h3>
              <h4 class="fwSemiBold fontBase text-secondary">
                Secretária do Cônsul Geral
              </h4>
              <hr class="mccSeprator mx-0 mt-4 mb-3" />
            </div>
          </article>
        </div>

        <!-- Fernando Luciano -->
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
          <article class="mccColumn bg-white shadow mb-6 mx-auto mx-sm-0">
            <div class="imgHolder position-relative">
              <img src="<?= urlProject(FOLDER_BASE . "/src/images/consul5.jpg") ?>" class="img-fluid d-block w-100"
                alt="image description" />
              <div class="mcssHolder"></div>
            </div>
            <div class="mcCaptionWrap px-5 pt-5 pb-4 position-relative">
              <h3 class="fwMedium h3Small mb-1">Fernando Luciano</h3>
              <h4 class="fwSemiBold fontBase text-secondary">
                Agente Consular para o Apoio às Comunidades
              </h4>
              <hr class="mccSeprator mx-0 mt-4 mb-3" />
            </div>
          </article>
        </div>

        <!-- Ana Tenente -->
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
          <article class="mccColumn bg-white shadow mb-6 mx-auto mx-sm-0">
            <div class="imgHolder position-relative">
              <img src="<?= urlProject(FOLDER_BASE . "/src/images/consul6.jpg") ?>" class="img-fluid d-block w-100"
                alt="image description" />
              <div class="mcssHolder"></div>
            </div>
            <div class="mcCaptionWrap px-5 pt-5 pb-4 position-relative">
              <h3 class="fwMedium h3Small mb-1">Ana Tenente</h3>
              <h4 class="fwSemiBold fontBase text-secondary">
                Agente Consular para o Sector Notarial
              </h4>
              <hr class="mccSeprator mx-0 mt-4 mb-3" />
            </div>
          </article>
        </div>

        <!-- Domingos Ferramenta -->
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
          <article class="mccColumn bg-white shadow mb-6 mx-auto mx-sm-0">
            <div class="imgHolder position-relative">
              <img src="<?= urlProject(FOLDER_BASE . "/src/images/consul7.jpg") ?>" class="img-fluid d-block w-100"
                alt="image description" />
              <div class="mcssHolder"></div>
            </div>
            <div class="mcCaptionWrap px-5 pt-5 pb-4 position-relative">
              <h3 class="fwMedium h3Small mb-1">Domingos Ferramenta</h3>
              <h4 class="fwSemiBold fontBase text-secondary">
                Escriturário
              </h4>
              <hr class="mccSeprator mx-0 mt-4 mb-3" />
            </div>
          </article>
        </div>

        <!-- Angelina Kissoca -->
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
          <article class="mccColumn bg-white shadow mb-6 mx-auto mx-sm-0">
            <div class="imgHolder position-relative">
              <img src="<?= urlProject(FOLDER_BASE . "/src/images/consul8.jpg") ?>" class="img-fluid d-block w-100"
                alt="image description" />
              <div class="mcssHolder"></div>
            </div>
            <div class="mcCaptionWrap px-5 pt-5 pb-4 position-relative">
              <h3 class="fwMedium h3Small mb-1">Angelina Kissoca</h3>
              <h4 class="fwSemiBold fontBase text-secondary">
                Adida Financeira
              </h4>
              <hr class="mccSeprator mx-0 mt-4 mb-3" />
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>

  <!-- ANY SECTION -->
  <!-- 
        <article class="briefHistoryBlock pt-7 pb-7 pt-md-10 pb-xl-22">
          <div class="container containerSmall">
            <header class="headingHead mb-14">
              <h2 class="fwSemiBold text-center mb-7">
                Uma Breve História da nossa Cidade
              </h2>
              <div class="text-lDark fzMedium">
                <p class="mb-6">
                  xxxxxxxxxx xxxxxxxxxxxxxxxxx xxxxxx xxxxxx xxxxxxxxxx
                  xxxxxxxxxxxxxxxxx xxxxxx xxxxxx xxxxxxxxxx xxxxxxxxxxxxxxxxx
                  xxxxxx xxxxxx xxxxxxxxxx xxxxxxxxxxxxxxxxx xxxxxx
                  xxxxxxxxxxxxxxxx xxxxxxxxxxxxxxxxx xxxxxx xxxxxx.
                </p>
              </div>
              <p>
                xxxxxxxxxx xxxxxxxxxxxxxxxxx xxxxxx xxxxxx xxxxxxxxxx
                xxxxxxxxxxxxxxxxx xxxxxx xxxxxx xxxxxxxxxx xxxxxxxxxxxxxxxxx
                xxxxxx xxxxxx xxxxxxxxxx xxxxxxxxxxxxxxxxx xxxxxx
                xxxxxxxxxxxxxxxx xxxxxxxxxxxxxxxxx xxxxxx xxxxxx.
              </p>
            </header>
          </div>
          <div class="container">
            <div class="simImagesWrap">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <div class="siwImgHolder mb-6">
                    <img
                      src="<?= urlProject(FOLDER_BASE . "/src/images/img190.jpg") ?>/img43.jpg"
                      class="w-100 img-fluid"
                      alt="image description"
                    />
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="siwImgHolder mb-6">
                    <img
                      src="<?= urlProject(FOLDER_BASE . "/src/images/img190.jpg") ?>/img44.jpg"
                      class="w-100 img-fluid"
                      alt="image description"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="timelineAreaWrap pt-6 pt-md-9 pt-lg-14">
            <div class="container containerMedium">
              <div class="row">
                <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                  <header class="text-center mb-8 mb-lg-12">
                    <h2 class="fwSemiBold mb-4">
                      Veja a linha do tempo do histórico
                    </h2>
                    <p>
                      xxxxxxxxxx xxxxxxxxxxxxxxxxx xxxxxx xxxxxx xxxxxxxxxx
                      xxxxxxxxxxxxxxxx xxxxxxxxxxxxxxxxx xxxxxx xxxxxx.
                    </p>
                  </header>
                </div>
              </div>
              <ul
                class="list-unstyled timelineList position-relative py-7 py-md-12 mb-0 mx-auto mx-sm-0"
              >
                <li>
                  <div class="imgHolder mt-2 mb-3 mb-sm-0">
                    <img
                      src="<?= urlProject(FOLDER_BASE . "/src/images/img190.jpg") ?>/img45.jpg"
                      class="img-fluid"
                      alt="image description"
                    />
                  </div>
                  <div class="tlDescriptionWrap position-relative mt-1">
                    <strong
                      class="tlTimeTitle fwSemiBold d-block fontAlter mb-1"
                    >
                      <time datetime="2011-01-12">1975</time>
                    </strong>
                    <h3 class="fwSemiBold mb-4">
                      xxxxxxxxxx xxxxxxxxxxxxxxxxx
                    </h3>
                    <p>
                      xxxxxxxxxx xxxxxxxxxxxxxxxxx xxxxxx xxxxxx xxxxxxxxxx
                      xxxxxxxxxxxxxxxxx xxxxxx xxxxxx xxxxxxxxxx
                      xxxxxxxxxxxxxxxxx xxxxxx xxxxxx xxxxxxxxxx
                      xxxxxxxxxxxxxxxxx xxxxxx xxxxxxxxxxxxxxxx
                      xxxxxxxxxxxxxxxxx xxxxxx xxxxxx.
                    </p>
                  </div>
                </li>
                <li>
                  <div class="imgHolder mt-2 mb-3 mb-sm-0">
                    <img
                      src="<?= urlProject(FOLDER_BASE . "/src/images/img190.jpg") ?>/img46.jpg"
                      class="img-fluid"
                      alt="image description"
                    />
                  </div>
                  <div class="tlDescriptionWrap position-relative mt-1">
                    <strong
                      class="tlTimeTitle fwSemiBold d-block fontAlter mb-1"
                    >
                      <time datetime="2011-01-12">2002</time>
                    </strong>
                    <h3 class="fwSemiBold mb-4">
                      xxxxxxxxxx xxxxxxxxxxxxxxxxx
                    </h3>
                    <p>
                      xxxxxxxxxx xxxxxxxxxxxxxxxxx xxxxxx xxxxxx xxxxxxxxxx
                      xxxxxxxxxxxxxxxxx xxxxxx xxxxxx xxxxxxxxxx
                      xxxxxxxxxxxxxxxxx xxxxxx xxxxxx xxxxxxxxxx
                      xxxxxxxxxxxxxxxxx xxxxxx xxxxxxxxxxxxxxxx
                      xxxxxxxxxxxxxxxxx xxxxxx xxxxxx.
                    </p>
                  </div>
                </li>
                <li>
                  <div class="imgHolder mt-2 mb-3 mb-sm-0">
                    <img
                      src="<?= urlProject(FOLDER_BASE . "/src/images/img190.jpg") ?>/img47.jpg"
                      class="img-fluid"
                      alt="image description"
                    />
                  </div>
                  <div class="tlDescriptionWrap position-relative mt-1">
                    <strong
                      class="tlTimeTitle fwSemiBold d-block fontAlter mb-1"
                    >
                      <time datetime="2011-01-12">1997</time>
                    </strong>
                    <h3 class="fwSemiBold mb-4">
                      xxxxxxxxxx xxxxxxxxxxxxxxxxx
                    </h3>
                    <p>
                      xxxxxxxxxx xxxxxxxxxxxxxxxxx xxxxxx xxxxxx xxxxxxxxxx
                      xxxxxxxxxxxxxxxxx xxxxxx xxxxxx xxxxxxxxxx
                      xxxxxxxxxxxxxxxxx xxxxxx xxxxxx xxxxxxxxxx
                      xxxxxxxxxxxxxxxxx xxxxxx xxxxxxxxxxxxxxxx
                      xxxxxxxxxxxxxxxxx xxxxxx xxxxxx.
                    </p>
                  </div>
                </li>
                <li>
                  <div class="imgHolder mt-2 mb-3 mb-sm-0">
                    <img
                      src="<?= urlProject(FOLDER_BASE . "/src/images/img190.jpg") ?>/img48.jpg"
                      class="img-fluid"
                      alt="image description"
                    />
                  </div>
                  <div class="tlDescriptionWrap position-relative mt-1">
                    <strong
                      class="tlTimeTitle fwSemiBold d-block fontAlter mb-1"
                    >
                      <time datetime="2011-01-12">2018</time>
                    </strong>
                    <h3 class="fwSemiBold mb-4">
                      xxxxxxxxxx xxxxxxxxxxxxxxxxx
                    </h3>
                    <p>
                      xxxxxxxxxx xxxxxxxxxxxxxxxxx xxxxxx xxxxxx xxxxxxxxxx
                      xxxxxxxxxxxxxxxxx xxxxxx xxxxxx xxxxxxxxxx
                      xxxxxxxxxxxxxxxxx xxxxxx xxxxxx xxxxxxxxxx
                      xxxxxxxxxxxxxxxxx xxxxxx xxxxxxxxxxxxxxxx
                      xxxxxxxxxxxxxxxxx xxxxxx xxxxxx.
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </article>
        -->
</main>