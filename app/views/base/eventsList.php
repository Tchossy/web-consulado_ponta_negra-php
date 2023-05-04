<?php
session_start();
$this->layout('_theme');
?>


<main>
  <header class="pageMainHead d-flex position-relative bgCover w-100 text-white"
    style="background-image: url(<?= urlProject(FOLDER_BASE . "/src/images/img50.jpg") ?>)">
    <div class="alignHolder d-flex w-100 align-items-center">
      <div class="align w-100 position-relative">
        <div class="container">
          <h1 class="text-white mb-2">Eventos</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrWhite rounded-0 border-0 p-0 fontAlter mb-0">
              <li class="breadcrumb-item">
                <a href="home.html">Inicio</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Lista de Eventos
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <section class="ItemfullBlock pt-7 pb-7 pt-md-10 pb-md-9 pt-lg-14 pb-lg-13 pt-xl-22 pb-xl-19">
    <div class="container">
      <header class="ifbFilterHead bg-light px-4 pt-4 pb-3 px-lg-8 pt-lg-7 pb-lg-6">
        <div class="form-row mx-n3 align-items-end">
          <div class="formCol px-3">
            <div class="form-group">
              <label class="d-block fwMedium fontAlter text-lDark mb-2">Data de início</label>
              <input type="date" class="form-control inputHeightMedium inputBdrTransparent d-block w- shadow" />
            </div>
          </div>
          <div class="formCol px-3">
            <div class="form-group">
              <label class="d-block fwMedium fontAlter text-lDark mb-2">Tipo de evento</label>
              <select class="custom-select inputHeightMedium inputBdrTransparent shadow">
                <option selected>Tipo de evento</option>
                <option value="1">Um</option>
                <option value="2">Dois</option>
                <option value="3">Três</option>
              </select>
            </div>
          </div>
          <button type="button"
            class="btn btnTheme ml-lg-3 mt-4 mt-lg-0 ml-auto mr-auto mr-lg-0 font-weight-bold btnMinSm text-capitalize position-relative border-0 p-0"
            data-hover="Encontrar eventos">
            <span class="d-block btnText">Encontrar eventos</span>
          </button>
        </div>
      </header>

      <div class="pt-7 pb-6 pt-lg-11 pb-lg-9 pt-xl-14 pb-xl-12">
        <!-- SEM EVENTOS -->
        <div class="col-12 col-md-12">
          <article class="ueEveColumn position-relative shadow bg-white mb-6">
            <div class="ueDescriptionWrap pt-5 pb-8 px-5">
              <strong style="color: red" class="d-block mb-2">Sem eventos</strong>
              <h3 class="h3Small fwMedium mb-3">
                <a href="eventSingle.html">Não foram encontrados eventos no momento</a>
              </h3>
              <address>
                <ul class="list-unstyled ueScheduleList">
                  <li>
                    <i class="icomoon-clock icn position-absolute"><span class="sr-only">icon</span></i>
                    xx:xxh - xx:xxh
                  </li>
                  <li>
                    <i class="icomoon-location icn position-absolute"><span class="sr-only">icon</span></i>
                    xxxxx xxx xxxxxxx xx xxx
                  </li>
                </ul>
              </address>
            </div>
          </article>
        </div>

        <!-- 
              <article
                class="ueEveColumn__list position-relative px-4 py-3 px-lg-8 py-lg-6"
              >
                <div class="d-lg-flex align-items-md-center">
                  <time
                    datetime="2011-01-12"
                    class="uecTime text-lDark fontAlter text-uppercase flex-shrink-0 mr-4 mr-lg-6 d-block mb-2 mb-lg-0"
                  >
                    <span class="textLarge">01</span> Outubro
                    <span class="d-block textDay fwMedium pt-1"
                      >QUARTA-FEIRA</span
                    >
                  </time>
                  <div class="d-md-flex align-items-md-center flex-grow-1">
                    <div
                      class="imgHolder rounded-circle overflow-hidden flex-shrink-0 mr-4 mr-lg-10 mb-1 mb-md-0"
                    >
                      <img
                        src="images/img67.jpg"
                        class="img-fluid rounded-circle"
                        alt="image description"
                      />
                    </div>
                    <div class="descrWrap flex-grow-1">
                      <strong
                        class="tagTitle d-block text-secondary fwSemiBold mb-2"
                        >Entretenimento</strong
                      >
                      <h3 class="fwMedium">
                        <a href="eventSingle.html"
                          >Organização do Concurso de Fotografia da
                          Cidade-2023</a
                        >
                      </h3>
                      <ul class="list-unstyled ueScheduleList mb-0">
                        <li>
                          <i class="icomoon-clock icn position-absolute"
                            ><span class="sr-only">icon</span></i
                          >
                          9:30am - 1:00pm
                        </li>
                        <li>
                          <i class="icomoon-location icn position-absolute"
                            ><span class="sr-only">icon</span></i
                          >
                          Congo Central
                        </li>
                      </ul>
                    </div>
                    <a
                      href="eventSingle.html"
                      class="btn btnCustomLightOutline bdrWidthAlter btn-sm text-capitalize position-relative border-0 p-0 flex-shrink-0 ml-md-4"
                      data-hover="Mais detalhes"
                    >
                      <span class="d-block btnText">Mais detalhes</span>
                    </a>
                  </div>
                </div>
              </article>
               -->
      </div>
      <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center pt-2">
          <li class="page-item disabled">
            <a class="page-link" href="javascript:void(0);">Anterior</a>
          </li>
          <li class="page-item active" aria-current="page">
            <a class="page-link" href="javascript:void(0);">1 <span class="sr-only">(current)</span></a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0);">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0);">Próximo
              <i class="fas fa-chevron-right icn"><span class="sr-only">icon</span></i></a>
          </li>
        </ul>
      </nav>
    </div>
  </section>
</main>