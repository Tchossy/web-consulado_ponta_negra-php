<?php
session_start();
$this->layout('_theme');
?>


<main>
  <header class="pageMainHead d-flex position-relative bgCover w-100 text-white" style="background-image: url(<?= urlProject(FOLDER_BASE . "/src/images/img190.jpg") ?>)">
    <div class="alignHolder d-flex w-100 align-items-center">
      <div class="align w-100 position-relative">
        <div class="container">
          <h1 class="text-white mb-2">Contacto</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrWhite rounded-0 border-0 p-0 fontAlter mb-0">
              <li class="breadcrumb-item">
                <a href="home.html">Inicio</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Contacto
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <div class="contactSectionWrap pt-7 pb-2 pt-md-10 pb-md-1 pt-lg-16 pb-lg-10 pt-xl-21 pb-xl-16">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 col-xl-5 mb-6">
          <div class="pr-lg-10 pr-xl-20">
            <header class="mb-8">
              <h2 class="fwSemiBold h2Medium mb-4">Entrar em contacto</h2>
              <p>
                Nós realmente apreciamos que você reserve um tempo para
                entrar em contato. Por favor preencha o formulário abaixo.
              </p>
            </header>
            <h4 class="fwSemiBold mb-3">Consulado</h4>
            <ul class="list-unstyled contactInfoList mb-6">
              <li>
                <i class="fas fa-map-marker-alt icn position-absolute"><span class="sr-only">icon</span></i>
                <strong class="text-lDark title">Endereço: </strong>Rue de
                Mbounda, Ponta Negra, República do Congo
              </li>
              <li>
                <i class="fas fa-phone-alt icn position-absolute"><span class="sr-only">icon</span></i>
                <strong class="text-lDark title">Chamar: </strong> (+242)
                05 052 32 88 <br />
                ou <br />
                <strong class="text-lDark title">Chamar: </strong>: (+242)
                06 553 01 66 <br />
              </li>
              <li>
                <i class="fas fa-envelope icn position-absolute"><span class="sr-only">icon</span></i>
                <strong class="text-lDark title">Correspondência: </strong>consulado.pontanegra@mirex.gov.ao
              </li>
            </ul>
            <h4 class="fwSemiBold mb-3">Horário de Funcionamento</h4>
            <strong class="font-weight-normal d-block"> 09h30 - 13h30, Segunda a Quinta.</strong>
          </div>
        </div>
        <div class="col-12 col-md-6 col-xl-7">
          <div class="widget bg-white shadow contactFormWidget ml-xl-n5 mb-7 mb-md-5">
            <div class="pt-8 pb-10 px-4 px-md-6 px-xl-8">
              <h2 class="fwSemiBold h3Medium mb-4">Deixe a sua mensagem</h2>

              <div id="msgAlertaErroCad"></div>

              <form id="messageForm" class="commentForm" method="post">
                <div class="row mx-n2">
                  <div class="col-12 col-sm-6 col-md-12 col-lg-6 px-2">
                    <div class="form-group">
                      <input name="name_user" type="text" class="form-control d-block w-100" placeholder="Nome" />
                    </div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-12 col-lg-6 px-2">
                    <div class="form-group">
                      <input name="email_user" type="email" class="form-control d-block w-100" placeholder="Email" />
                    </div>
                  </div>
                  <div class="col-12 px-2">
                    <div class="form-group">
                      <input name="summary" type="text" class="form-control d-block w-100" placeholder="Assunto" />
                    </div>
                  </div>
                  <div class="col-12 px-2">
                    <div class="form-group">
                      <textarea name="message" class="form-control w-100 d-block" placeholder="Escreva sua mensagem&hellip;"></textarea>
                    </div>
                  </div>
                </div>
                <button class="btn btnTheme d-flex font-weight-bold text-capitalize position-relative border-0 p-0 mt-2 btnWidthSmall" type="submit" data-hover="Enviar mensagem">
                  <span class="d-block btnText">Enviar mensagem</span>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="ctMapWrap position-relative w-100">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d993.9670003342771!2d11.8506404284708!3d-4.792694675376167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a60a5facddcfc09%3A0xcb0c0057a58eed06!2sEasy%20business%20center!5e0!3m2!1spt-BR!2sao!4v1682783396876!5m2!1spt-BR!2sao" width="100%" height="594" allowfullscreen="" loading="lazy"></iframe>
  </div>


</main>

<script src="<?= urlProject(FOLDER_BASE . BASE_JS . "/contact-message.js") ?>"></script>