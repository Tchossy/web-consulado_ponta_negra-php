<?php
session_start();
$this->layout('_theme');
?>


<main>
  <header class="pageMainHead d-flex position-relative bgCover w-100 text-white" style="background-image: url(<?= urlProject(FOLDER_BASE . "/src/images/img190.jpg") ?>)">
    <div class="alignHolder d-flex w-100 align-items-center">
      <div class="align w-100 position-relative">
        <div class="container">
          <h1 class="text-white mb-2">Formulário do Sector Notorial</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrWhite rounded-0 border-0 p-0 fontAlter mb-0">
              <li class="breadcrumb-item">
                <a href="home.html">Inicio</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                <a href="home.html">Serviços</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                <a href="home.html">Sector Notorial</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Formúlario
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
        <div class="widget bg-white shadow contactFormWidget w-100">
          <div class="pt-8 pb-10 px-4 px-md-6 px-xl-8">
            <form id="card-user-form">
              <h2 class="fwSemiBold h3Medium mb-4">
                Formulário para: <span class="text-danger fsSmall">*</span>
                <select name="type_formulario" id="" class="form-control d-block w-100 px-2 col-lg-3">
                  <option value="Registo de nascimento">Registo de nascimento</option>
                  <option value="Registo de casamento">Registo de casamento</option>
                  <option value="Registo de óbito">Registo de óbito</option>
                  <option value="Transcrição de assentos">Transcrição de assentos</option>
                  <option value="Autenticação de documentos">Autenticação de documentos</option>
                  <option value="Reconhecimento de assinaturas">Reconhecimento de assinaturas</option>
                </select>
              </h2>
              <div class="row mx-n2">
                <div class="col-12 px-2">
                  <div class="form-group">
                    <label for="">Nome completo
                      <span class="text-danger fsSmall">*</span></label>
                    <input name="nome_completo_user" type="text" class="form-control d-block w-100" placeholder="Nome completo" />
                  </div>
                </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-6 px-2">
                  <div class="form-group">
                    <label for="">Filho (a) de (nome do pai):
                      <span class="text-danger fsSmall">*</span></label>
                    <input name="nome_pai_user" type="text" class="form-control d-block w-100" placeholder="Filho (a) de (nome do pai):" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-6 px-2">
                  <div class="form-group">
                    <label for="">Natural de (nacionalidade do pai)
                      <span class="text-danger fsSmall">*</span></label>
                    <input name="nacionalidade_pai_user" type="text" class="form-control d-block w-100" placeholder="Natural de (nacionalidade do pai)" />
                  </div>
                </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-6 px-2">
                  <div class="form-group">
                    <label for="">Filho (a) de (nome do mãe):
                      <span class="text-danger fsSmall">*</span></label>
                    <input name="nome_mae_user" type="text" class="form-control d-block w-100" placeholder="Filho (a) de (nome do mãe):" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-6 px-2">
                  <div class="form-group">
                    <label for="">Natural de (nacionalidade do mãe)
                      <span class="text-danger fsSmall">*</span></label>
                    <input name="nacionalidade_mae_user" type="text" class="form-control d-block w-100" placeholder="Natural de (nacionalidade do mãe)" />
                  </div>
                </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">Data de nascimento
                      <span class="text-danger fsSmall">*</span></label>
                    <input name="data_nascimento_user" type="date" class="form-control d-block w-100" placeholder="Data de nascimento" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">Local de nascimento
                      <span class="text-danger fsSmall">*</span></label>
                    <input name="local_nascimento_user" type="text" class="form-control d-block w-100" placeholder="Local de nascimento" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">Comuna
                      <span class="text-danger fsSmall">*</span></label>
                    <input name="comuna_user" type="text" class="form-control d-block w-100" placeholder="Comuna" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">Município
                      <span class="text-danger fsSmall">*</span></label>
                    <input name="municipio_user" type="text" class="form-control d-block w-100" placeholder="Município" />
                  </div>
                </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">Província
                      <span class="text-danger fsSmall">*</span></label>
                    <input name="provincia_user" type="text" class="form-control d-block w-100" placeholder="Província" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-2 px-2">
                  <div class="form-group">
                    <label for="">País
                      <span class="text-danger fsSmall">*</span></label>
                    <input name="pais_user" type="text" class="form-control d-block w-100" placeholder="País" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-2 px-2">
                  <div class="form-group">
                    <label for="">Estado civil
                      <span class="text-danger fsSmall">*</span></label>
                    <input name="estado_civil_user" type="text" class="form-control d-block w-100" placeholder="Estado civil" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-5 px-2">
                  <div class="form-group">
                    <label for="">Profissão
                      <span class="text-danger fsSmall">*</span></label>
                    <input name="profissao_user" type="text" class="form-control d-block w-100" placeholder="Profissão" />
                  </div>
                </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-4 px-2">
                  <div class="form-group">
                    <label for="">Portador(a) de
                      <span class="text-danger fsSmall">*</span></label>
                    <input name="portador_user" type="text" class="form-control d-block w-100" placeholder="Portador(a) de" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-4 px-2">
                  <div class="form-group">
                    <label for="">nº
                      <span class="text-danger fsSmall">*</span></label>
                    <input name="n_documento_user" type="text" class="form-control d-block w-100" placeholder="Nº" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-4 px-2">
                  <div class="form-group">
                    <label for="">Emitido pelo
                      <span class="text-danger fsSmall">*</span></label>
                    <input name="emitido_pelo_user" type="text" class="form-control d-block w-100" placeholder="Emitido pelo" />
                  </div>
                </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">Residência
                      <span class="text-danger fsSmall">*</span></label>
                    <input name="residencia_user" type="text" class="form-control d-block w-100" placeholder="Residência" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">Bairro:
                      <span class="text-danger fsSmall">*</span></label>
                    <input name="bairro_user" type="text" class="form-control d-block w-100" placeholder="Bairro" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">Rua:
                      <span class="text-danger fsSmall">*</span></label>
                    <input name="rua_user" type="text" class="form-control d-block w-100" placeholder="Rua" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">Casa nº:
                      <span class="text-danger fsSmall">*</span></label>
                    <input name="casa_n_user" type="text" class="form-control d-block w-100" placeholder="Casa nº" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">Sexo:
                      <span class="text-danger fsSmall">*</span></label>
                    <select name="sexo_user" id="" class="form-control d-block w-100">
                      <option value="">Masculino</option>
                      <option value="">Fenenino</option>
                    </select>
                  </div>
                </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-6 px-2">
                  <div class="form-group">
                    <label for="">Cuja referencia
                      <span class="text-danger fsSmall">*</span></label>
                    <input name="cuja_referencia_user" type="text" class="form-control d-block w-100" placeholder="Cuja referencia" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-6 px-2">
                  <div class="form-group">
                    <label for="">Telefone
                      <span class="text-danger fsSmall">*</span></label>
                    <input name="telefone_user" type="number" class="form-control d-block w-100" placeholder="Telefone" />
                  </div>
                </div>
              </div>
              <button type="button" id="get-pdf-btn" class="btn btnTheme d-flex font-weight-bold text-capitalize position-relative border-0 p-0 mt-2 btnWidthSmall" data-hover="Enviar formulario">
                <span class="d-block btnText">Enviar formulario</span>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<script src="<?= urlProject(FOLDER_BASE . BASE_JS . "/ficha_notarial.js") ?>"></script>