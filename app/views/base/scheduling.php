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
          <h1 class="text-white mb-2">Agendamento</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrWhite rounded-0 border-0 p-0 fontAlter mb-0">
              <li class="breadcrumb-item">
                <a href="home.html">Inicio</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Agendamento
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <div class="container mb-16">
    <a class="btn btnTheme font-weight-bold btnMinSm text-capitalize position-relative border-0 p-0 mt-6"
      href="javascript:void(0);" data-toggle="modal" data-target="#vistoTurismoModal"
      data-hover="Fazer Agendamento"><span class="d-block btnText">Fazer agendamento</span></a>

    <!-- TABLE -->
    <div class="table-data">
      <div class="order">
        <div class="head">
          <h3>Seus Agendamentos</h3>
          <i class="bx bx-search"></i>
          <i class="bx bx-filter"></i>
        </div>
        <table>
          <thead>
            <tr>
              <th>Sector</th>
              <th>Data</th>
              <th>Status</th>
            </tr>
          </thead>

          <?php
          if ((isset($_SESSION['utente_email']))) {
            echo "
                <tbody>
                </tbody>
              ";
          } else {
            echo "<div class='alert alert-danger' role='alert' id='msgAlerta'> Faça o login ou registre-se para fazer o agendamento </div>";
          }
          ?>

        </table>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade bd-example-modal-lg" id="vistoTurismoModal" tabindex="-1" role="dialog"
    aria-labelledby="vistoTurismoModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="pt-8 pb-10 px-4 px-md-6 px-xl-8">
            <h2 class="fwSemiBold h3Medium mb-4">
              Formulário para Agendamento
            </h2>

            <div id="msgAlertaErroCad"></div>

            <form id="schedulingForm" class="commentForm">
              <input name="real_email_user" style="display: none;" value="<?php if ((isset($_SESSION['utente_email']))) {
                                                                            echo $_SESSION['utente_email'];
                                                                          } ?>" type="email" />
              <input name="scheduling_state" style="display: none;" value="Pendente" type="text" />
              <div class="row mx-n2">
                <div class="col-12 px-2">
                  <div class="form-group">
                    <label for="">Nome completo
                      <span class="text-danger fsSmall">*</span>
                    </label>
                    <input name="name_user" type="text" class="form-control d-block w-100"
                      placeholder="Nome completo" />
                  </div>
                </div>

                <div class="col-12 px-2">
                  <div class="form-group">
                    <label for="">E-mail
                      <span class="text-danger fsSmall">*</span></label>
                    <input name="email_user" type="email" class="form-control d-block w-100" placeholder="E-mail" />
                  </div>
                </div>
                <div class="col-12 px-2">
                  <div class="form-group">
                    <label for="">Telefone
                      <span class="text-danger fsSmall">*</span></label>
                    <input name="phone_user" type="number" class="form-control d-block w-100" placeholder="Telefone" />
                  </div>
                </div>

                <div class="col-lg-6 px-2">
                  <div class="form-group">
                    <label for="">Data para entrega de documentos
                      <span class="text-danger fsSmall">*</span></label>
                    <input name="data_scheduling" type="date" class="form-control d-block w-100" placeholder="Nome" />
                  </div>
                </div>
                <div class="col-lg-6 px-2">
                  <div class="form-group">
                    <label for="">Sector
                      <span class="text-danger fsSmall">*</span></label>
                    <select name="secto_scheduling" id="" class="form-control d-block w-100">
                      <option value="Sector Notarial">Sector Notarial</option>
                      <option value="Sector Migratório">Sector Migratório</option>
                      <option value="Sector Identificação">Sector Identificação</option>
                      <option value="Sector de Apoio à Comunidade">
                        Sector de Apoio à Comunidade
                      </option>
                    </select>
                  </div>
                </div>
              </div>
              <button id="get-pdf-btn" type="submit"
                class="btn btnTheme d-flex font-weight-bold text-capitalize position-relative border-0 p-0 mt-2 btnWidthSmall"
                data-hover="Enviar formulário">
                <span class="d-block btnText">Enviar formulário</span>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<script src="<?= urlProject(FOLDER_BASE . BASE_JS . "/scheduling_user.js") ?>"></script>