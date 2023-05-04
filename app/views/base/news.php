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
          <h1 class="text-white mb-2">Noticias</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrWhite rounded-0 border-0 p-0 fontAlter mb-0">
              <li class="breadcrumb-item">
                <a href="home.html">Inicio</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Noticias
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <section class="ItemfullBlock pt-7 pb-7 pt-md-10 pb-md-9 pt-lg-14 pb-lg-13 pt-xl-22 pb-xl-19">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-9 mb-6">
          <div class="pr-lg-5 pr-xl-15">
            <div class="row">
              <!-- SEM NOTICIAS -->
              <div class="col-12 col-md-12">
                <article class="ueEveColumn position-relative shadow bg-white mb-6">
                  <div class="ueDescriptionWrap pt-5 pb-8 px-5">
                    <strong style="color: red" class="d-block mb-2">Sem noticias</strong>
                    <h3 class="h3Small fwMedium mb-3">
                      <a href="eventSingle.html">Não foram encontradas noticias no momento</a>
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

              <!-- NOTICIAS -->
              <!-- 
                    <div class="col-12 col-md-6">
                      <article class="npbColumn shadow bg-white mb-6 mb-xl-12">
                        <div class="imgHolder position-relative">
                          <a href="newsSingle.html">
                            <img
                              src="images/img11.jpg"
                              class="img-fluid w-100 d-block"
                              alt="image description"
                            />
                          </a>
                          <time
                            datetime="2011-01-12"
                            class="npbTimeTag font-weight-bold fontAlter position-absolute text-white px-2 py-1"
                            >15 Out 2023</time
                          >
                        </div>
                        <div class="npbDescriptionWrap px-5 pt-8 pb-5">
                          <strong
                            class="d-block npbcmWrap font-weight-normal mb-1"
                          >
                            <span class="mr-5">Governo</span>
                            <i class="icomoon-chat"
                              ><span class="sr-only">icon</span></i
                            >
                            0
                          </strong>
                          <h3 class="fwSemiBold mb-5">
                            <a href="newsSingle.html"
                              >List of City Weekend Celebrations</a
                            >
                          </h3>
                          <a
                            href="newsSingle.html"
                            class="btnCr d-inline-block align-top fontAlter"
                            >Continuar lendo
                            <i
                              class="icomoon-arrowRight bcIcn ml-2 align-middle"
                              ><span class="sr-only">icon</span></i
                            ></a
                          >
                        </div>
                      </article>
                    </div>
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
        </div>
        <div class="col-12 col-lg-3 mb-6">
          <div class="ml-lg-n5">
            <aside class="sidebar">
              <section class="widget widgetSearch mb-6 mb-lg-10">
                <form action="#" class="searchForm">
                  <div class="input-group">
                    <input type="search" class="form-control" placeholder="Procure aqui…" />
                    <div class="input-group-append">
                      <button class="btn btnTheme btnNoOver d-flex align-items-center justify-content-center"
                        type="button">
                        <i class="icomoon-search"><span class="sr-only">procurar</span></i>
                      </button>
                    </div>
                  </div>
                </form>
              </section>
              <nav class="widget widgetArchiveList mb-6 mb-lg-10">
                <h3 class="fwMedium mb-5">Categorias</h3>
                <ul class="list-unstyled pl-0">
                  <li>
                    <a href="javascript:void(0);">Conferência</a>
                  </li>
                  <li>
                    <a href="javascript:void(0);">Entretenimento</a>
                  </li>
                  <li>
                    <a href="javascript:void(0);">Saúde &amp; Exportes</a>
                  </li>
                  <li>
                    <a href="javascript:void(0);">Reunião</a>
                  </li>
                  <li>
                    <a href="javascript:void(0);">Oficina</a>
                  </li>
                </ul>
              </nav>
              <nav class="widget widgetUpcoming mb-6 mb-lg-10">
                <h3 class="fwMedium mb-5">Notícias recentes</h3>
                <ul class="list-unstyled pl-0 mb-7">
                  <!--                         
                        <li>
                          <div class="imgHolder flex-shrink-0 mr-4 mt-1">
                            <img
                              src="images/img93.jpg"
                              class="img-fluid"
                              alt="image description"
                            />
                          </div>
                          <div class="descrWrap">
                            <h4 class="fwMedium mb-1">
                              <a href="newsSingle.html"
                                >Nova cultura economica Congolesa</a
                              >
                            </h4>
                            <time datetime="2011-01-12" class="d-block"
                              ><i class="icomoon-clock icn mr-1"
                                ><span class="sr-only">icon</span></i
                              >Dez 05, 2023</time
                            >
                          </div>
                        </li>
                     -->
                </ul>
              </nav>
              <section class="widget widgetTags mb-6 mb-lg-10">
                <h3 class="fwMedium mb-5">Tags</h3>
                <ul class="list-unstyled pl-0 d-flex flex-wrap fontAlter">
                  <li>
                    <a href="javascript:void(0);">Cidade</a>
                  </li>
                  <li>
                    <a href="javascript:void(0);">desenvolvimento</a>
                  </li>
                  <li>
                    <a href="javascript:void(0);">Estrada</a>
                  </li>
                  <li>
                    <a href="javascript:void(0);">Projeto</a>
                  </li>
                  <li>
                    <a href="javascript:void(0);">Cidade inteligente</a>
                  </li>
                  <li>
                    <a href="javascript:void(0);">governo</a>
                  </li>
                  <li>
                    <a href="javascript:void(0);">Anúncio</a>
                  </li>
                  <li>
                    <a href="javascript:void(0);">Reunião</a>
                  </li>
                </ul>
              </section>
            </aside>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>