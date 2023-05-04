<?php
session_start();
$this->layout('_theme');
?>


<header class="pageMainHead d-flex position-relative bgCover w-100 text-white" style="background-image: url(<?= urlProject(FOLDER_BASE . "/src/images/img190.jpg") ?>)">
  <div class="alignHolder d-flex w-100 align-items-center">
    <div class="align w-100 position-relative">
      <div class="container">
        <h1 class="text-white mb-2">Formulário do Sector Migratório</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrWhite rounded-0 border-0 p-0 fontAlter mb-0">
            <li class="breadcrumb-item">
              <a href="home.html">Inicio</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              <a href="home.html">Serviços</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              <a href="home.html">Sector Migratório</a>
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
          <form id="card-user-form" class="commentForm">
            <h2 class="fwSemiBold h3Medium w-100 mb-4">
              Formulário para:
              <select id="visa_type" name="visa_type" id="" class="form-control d-block w-100 px-2 col-lg-4">
                <option value="Emissão de visto de turismo">
                  Emissão de visto de turismo
                </option>
                <option value="Emissão de visto de Curta Duração">
                  Emissão de visto de Curta Duração
                </option>
                <option value="Emissão de visto de Trânsito">
                  Emissão de visto de Trânsito
                </option>
                <option value="Emissão de visto de Trabalho">
                  Emissão de visto de Trabalho
                </option>
                <option value="Emissão de visto de Estudo">
                  Emissão de visto de Estudo
                </option>
                <option value="Emissão de visto de Permanência temporária">
                  Emissão de visto de Permanência temporária
                </option>
                <option value="Emissão de visto de Fixação de Residência">
                  Emissão de visto de Fixação de Residência
                </option>
                <option value="Emissão de visto de Tratamento Médio">
                  Emissão de visto de Tratamento Médio
                </option>
              </select>
            </h2>
            <div class="row mx-n2">
              <!-- 
              <div class="ueEveColumn__list position-relative px-4 py-3 px-lg-8 py-lg-6 ml-2 mb-4">
                <div class="d-md-flex align-items-md-center flex-grow-1">

                  <div class="imgHolder rounded-circle overflow-hidden flex-shrink-0 mr-4 mr-lg-10 mb-1 mb-md-0">
                    <img src="https://digimedia.web.ua.pt/wp-content/uploads/2017/05/default-user-image.png"
                      class="img-fluid rounded-circle" id="photoUser" alt="image description" />
                  </div>

                  <label htmlFor="inputPhotoUser"
                    class="btn btnCustomLightOutline bdrWidthAlter btn-sm text-capitalize position-relative border-0 p-0 flex-shrink-0 ml-md-4"
                    data-hover="Selecione a sua fotografia">
                    <span class="d-block btnText">Selecione a sua fotografia</span>

                    <input hidden type="file" id="inputPhotoUser" accept="image" required />
                  </label>
                </div>
              </div>
   -->
              <div class="col-12 px-2">
                <div class="form-group">
                  <label for="">Nome completo
                    <span class="text-danger fsSmall">*</span></label>
                  <input type="text" id="name_user" name="nome_completo_user" class="form-control d-block w-100" placeholder="Nome completo" />
                </div>
              </div>

              <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                <div class="form-group">
                  <label for="">Estado civil
                    <span class="text-danger fsSmall">*</span></label>
                  <select id="marital_status_user" name="estado_civil_user" id="" class="form-control d-block w-100">
                    <option value="Solteiro">Solteiro</option>
                    <option value="Casado">Casado</option>
                  </select>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                <div class="form-group">
                  <label for="">Sexo
                    <span class="text-danger fsSmall">*</span></label>
                  <select id="sex_user" name="sexo_user" id="" class="form-control d-block w-100">
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                  </select>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                <div class="form-group">
                  <label for="">Data de nascimento
                    <span class="text-danger fsSmall">*</span></label>
                  <input type="date" id="date_birth_user" name="data_nascimento_user" class="form-control d-block w-100" placeholder="Nome" />
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                <div class="form-group">
                  <label for="">Local de nascimento
                    <span class="text-danger fsSmall">*</span></label>
                  <input type="text" id="birthplace_user" name="local_nascimento_user" class="form-control d-block w-100" placeholder="Local de nascimento" />
                </div>
              </div>

              <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                <div class="form-group">
                  <label for="">País de nascimento
                    <span class="text-danger fsSmall">*</span></label>
                  <input type="text" id="country_birth_user" name="pais_ascimento_user" class="form-control d-block w-100" placeholder="País de nascimento" />
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                <div class="form-group">
                  <label for="">Nacionalidade de origem
                    <span class="text-danger fsSmall">*</span></label>
                  <input type="text" id="nationality_origin_user" name="nacionalidade_origem_user" class="form-control d-block w-100" placeholder="Nacionalidade de origem" />
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                <div class="form-group">
                  <label for="">Nacionalidade actual
                    <span class="text-danger fsSmall">*</span></label>
                  <input type="text" id="current_nationality_user" name="nacionalidade_actual_user" class="form-control d-block w-100" placeholder="Nacionalidade actual" />
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                <div class="form-group">
                  <label for="">Passaporte nº
                    <span class="text-danger fsSmall">*</span></label>
                  <input type="text" id="passaport_user" name="passaporte_n_user" class="form-control d-block w-100" placeholder="Passaporte nº" />
                </div>
              </div>

              <div class="col-12 col-sm-6 col-md-12 col-lg-6 px-2">
                <div class="form-group">
                  <label for="">Local de emissão
                    <span class="text-danger fsSmall">*</span></label>
                  <input type="text" id="place_issue_user" name="local_emissao_user" class="form-control d-block w-100" placeholder="Local de emissão" />
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                <div class="form-group">
                  <label for="">Data de emissão
                    <span class="text-danger fsSmall">*</span></label>
                  <input type="date" id="date_issue_user" name="data_emissao_user" class="form-control d-block w-100" placeholder="Nome" />
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                <div class="form-group">
                  <label for="">Valido até
                    <span class="text-danger fsSmall">*</span></label>
                  <input type="date" id="valid_until_user" name="valido_ate_user" class="form-control d-block w-100" placeholder="Valido até" />
                </div>
              </div>

              <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                <div class="form-group">
                  <label for="">Profissão
                    <span class="text-danger fsSmall">*</span></label>
                  <input type="text" id="profession_user" name="profissao_user" class="form-control d-block w-100" placeholder="Profissão" />
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                <div class="form-group">
                  <label for="">Cargo que ocupa
                    <span class="text-danger fsSmall">*</span></label>
                  <input type="text" id="position_held_user" name="cargo_user" class="form-control d-block w-100" placeholder="Cargo que ocupa" />
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-12 col-lg-6 px-2">
                <div class="form-group">
                  <label for="">Local de trabalho
                    <span class="text-danger fsSmall">*</span></label>
                  <input type="text" id="workplace_user" name="local_trabalho_user" class="form-control d-block w-100" placeholder="Local de trabalho" />
                </div>
              </div>

              <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                <div class="form-group">
                  <label for="">Morada
                    <span class="text-danger fsSmall">*</span></label>
                  <input type="text" id="household_user" name="morada_user" class="form-control d-block w-100" placeholder="Morada" />
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                <div class="form-group">
                  <label for="">Cidade
                    <span class="text-danger fsSmall">*</span></label>
                  <input type="text" id="city_user" name="cidade_user" class="form-control d-block w-100" placeholder="Cidade" />
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                <div class="form-group">
                  <label for="">Rua <span class="text-danger fsSmall">*</span></label>
                  <input type="text" id="road_user" name="rua_user" class="form-control d-block w-100" placeholder="Rua" />
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                <div class="form-group">
                  <label for="">Codigo postal </label>
                  <input type="text" id="postal_Code_user" name="postal_code_user" class="form-control d-block w-100" placeholder="Codigo postal" />
                </div>
              </div>

              <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                <div class="form-group">
                  <label for="">Teléfax</label>
                  <input type="text" id="fax_user" name="fax_user" class="form-control d-block w-100" placeholder="Teléfax" />
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-12 col-lg-6 px-2">
                <div class="form-group">
                  <label for="">E-mail
                    <span class="text-danger fsSmall">*</span></label>
                  <input type="text" id="email_user" name="email_user" class="form-control d-block w-100" placeholder="E-mail" />
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                <div class="form-group">
                  <label for="">Nº de telefone
                    <span class="text-danger fsSmall">*</span></label>
                  <input type="text" id="phone_number_user" name="phone_number_user" class="form-control d-block w-100" placeholder="Nº de telefone" />
                </div>
              </div>

              <div class="col-12 col-sm-6 col-md-12 col-lg-6 px-2">
                <div class="form-group">
                  <label for="">Nome do pai:
                    <span class="text-danger fsSmall">*</span></label>
                  <input type="email" id="father_name_user" name="father_name_user" class="form-control d-block w-100" placeholder="Nome do pai:" />
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-12 col-lg-6 px-2">
                <div class="form-group">
                  <label for="">Nacionalidade do pai
                    <span class="text-danger fsSmall">*</span></label>
                  <input type="email" id="father_nationality_user" name="father_nationality_user" class="form-control d-block w-100" placeholder="Nacionalidade do pai" />
                </div>
              </div>

              <div class="col-12 col-sm-6 col-md-12 col-lg-6 px-2">
                <div class="form-group">
                  <label for="">Nome do mãe:
                    <span class="text-danger fsSmall">*</span></label>
                  <input type="email" id="mother_name_user" name="mother_name_user" class="form-control d-block w-100" placeholder="Nome do mãe:" />
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-12 col-lg-6 px-2">
                <div class="form-group">
                  <label for="">Nacionalidade da mãe
                    <span class="text-danger fsSmall">*</span></label>
                  <input type="email" id="mother_nationality_user" name="mother_nationality_user" class="form-control d-block w-100" placeholder="Nacionalidade da mãe" />
                </div>
              </div>

              <div class="col-12 col-sm-6 col-md-12 col-lg-12 px-2">
                <div class="form-group">
                  <label for="">Motivo de viagem
                    <span class="text-danger fsSmall">*</span></label>
                  <input type="email" id="reason_travel_user" name="reason_travel_user" class="form-control d-block w-100" placeholder="Motivo de viagem" />
                </div>
              </div>

              <div class="col-12 col-sm-6 col-md-12 col-lg-12 px-2">
                <div class="form-group">
                  <label for="">Local de hospedagem
                    <span class="text-danger fsSmall">*</span></label>
                  <input type="email" id="hosting_place_user" name="hosting_place_user" class="form-control d-block w-100" placeholder="Local de hospedagem" />
                </div>
              </div>

              <div class="col-12 col-sm-6 col-md-12 col-lg-5 px-2">
                <div class="form-group">
                  <label for="">Cidade de hospedagem
                    <span class="text-danger fsSmall">*</span></label>
                  <input type="text" id="city_hosting_user" name="city_hosting_user" class="form-control d-block w-100" placeholder="Cidade" />
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-12 col-lg-5 px-2">
                <div class="form-group">
                  <label for="">Rua de hospedagem
                    <span class="text-danger fsSmall">*</span></label>
                  <input type="text" id="road_hosting_user" name="road_hosting_user" class="form-control d-block w-100" placeholder="Rua" />
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-12 col-lg-2 px-2">
                <div class="form-group">
                  <label for="">Casa nº </label>
                  <input type="text" id="house_number_user" name="house_number_user" class="form-control d-block w-100" placeholder="Casa nº" />
                </div>
              </div>

              <div class="col-12 px-2">
                <div class="form-group">
                  <label for="">Nome da pessoa ou organismo que responsabilizará pela
                    sua estadia
                    <span class="text-danger fsSmall">*</span></label>
                  <textarea id="name_person_responsible_stay_user" name="name_person_responsible_stay_user" class="form-control w-100 d-block" placeholder="Escreva aqui&hellip;"></textarea>
                </div>
              </div>

              <h4 class="fwSemiBold mb-4 ml-2">
                A preencher pelo solicitante de visto
              </h4>

              <div class="col-12 px-2">
                <div class="form-group">
                  <label for="">Nome de pessoa ou organismo a contactar em Angola
                    <span class="text-danger fsSmall">*</span></label>
                  <input type="text" id="person_contact_angola_user" name="person_contact_angola_user" class="form-control d-block w-100" placeholder="Nome completo" />
                </div>
              </div>

              <div class="col-12 px-2">
                <div class="form-group">
                  <label for="">Endereço completo em Angola
                    <span class="text-danger fsSmall">*</span></label>
                  <input type="text" id="full_addres_angola_user" name="full_addres_angola_user" class="form-control d-block w-100" placeholder="Endereço completo" />
                </div>
              </div>

              <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                <div class="form-group">
                  <label for="">Data de entrada em Angola
                    <span class="text-danger fsSmall">*</span></label>
                  <input type="date" id="entrance_date_angola_user" name="entrance_date_angola_user" class="form-control d-block w-100" placeholder="Nome" />
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-12 col-lg-9 px-2">
                <div class="form-group">
                  <label for="">Posto de fronteira a utilizar
                    <span class="text-danger fsSmall">*</span></label>
                  <input type="text" id="border_post_be_used_user" name="border_post_be_used_user" class="form-control d-block w-100" placeholder="Posto de fronteira" />
                </div>
              </div>

              <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                <div class="form-group">
                  <label for="">Data de saída em Angola
                    <span class="text-danger fsSmall">*</span></label>
                  <input type="date" id="exit_date_angola_user" name="exit_date_angola_user" class="form-control d-block w-100" placeholder="Nome" />
                </div>
              </div>

              <div class="col-12 col-sm-6 col-md-12 col-lg-9 px-2">
                <div class="form-group"></div>
              </div>

              <div class="col-12 col-sm-6 col-md-12 col-lg-9 px-2">
                <div class="form-group">
                  <label for="">Assinatura do requerente
                    <span class="text-danger fsSmall">*</span></label>
                  <input type="text" id="signature_user" name="signature_user" class="form-control d-block w-100" placeholder="Assinatura" />
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                <div class="form-group">
                  <label for="">Data da assinatura
                    <span class="text-danger fsSmall">*</span></label>
                  <input type="date" id="date_signature_user" name="date_signature_user" class="form-control d-block w-100" placeholder="Nome" />
                </div>
              </div>

              <h4 class="fwSemiBold mb-4 ml-2">
                Informações complenenteres
              </h4>
              <div class="col-12 px-2"></div>

              <div class="col-12 col-sm-6 col-md-12 col-lg-4 px-2">
                <div class="form-group">
                  <label for="">Já realizou viagens para Angola?
                    <span class="text-danger fsSmall">*</span></label>
                  <select name="ja_realizou_viagens_para_angola_users" id="" class="form-control d-block w-100">
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                  </select>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-12 col-lg-4 px-2">
                <div class="form-group">
                  <label for="">Já obteve cartão de residência?
                    <span class="text-danger fsSmall">*</span></label>
                  <select name="ja_obteve_cartao_residência_users" id="" class="form-control d-block w-100">
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                  </select>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-12 col-lg-4 px-2">
                <div class="form-group">
                  <label for="">Já obteve visto de trabalho?
                    <span class="text-danger fsSmall">*</span></label>
                  <select name="ja_obteve_visto_trabalho_users" id="" class="form-control d-block w-100">
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                  </select>
                </div>
              </div>

              <div class="col-12 col-sm-6 col-md-12 col-lg-6 px-2">
                <div class="form-group">
                  <label for="">Já lhe foi recusado a entrada em Angola?
                    <span class="text-danger fsSmall">*</span></label>
                  <select name="ja_lhe_foi_recusado_entrada_angola_users" id="" class="form-control d-block w-100">
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                  </select>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-12 col-lg-6 px-2">
                <div class="form-group">
                  <label for="">Já foi expulso de Angola?
                    <span class="text-danger fsSmall">*</span></label>
                  <select name="ja_foi_expulso_angola_users" id="" class="form-control d-block w-100">
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                  </select>
                </div>
              </div>
            </div>

            <button type="button" id="get-pdf-btn" class="btn btnTheme d-flex col-lg-3 mb-6 font-weight-bold text-capitalize position-relative border-0 p-0 mt-2 btnWidthSmall" data-hover="Enviar formulario">
              <span class="d-block btnText">Enviar formulário </span>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="<?= urlProject(FOLDER_BASE . BASE_JS . "/ficha_vistos.js") ?>"></script>