<?php
session_start();
$this->layout('_theme');
?>


<main>
  <header class="pageMainHead d-flex position-relative bgCover w-100 text-white"
    style="background-image: url(<?= urlProject(FOLDER_BASE . "/src/images/img190.jpg") ?>)">
    <div class="alignHolder d-flex w-100 align-items-center">
      <div class="align w-100 position-relative">
        <div class="container">
          <h1 class="text-white mb-2">
            Formulário do Sector de Apoio á Comunidade
          </h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrWhite rounded-0 border-0 p-0 fontAlter mb-0">
              <li class="breadcrumb-item">
                <a href="home.html">Inicio</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                <a href="home.html">Serviços</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                <a href="home.html">Sector de Apoio á Comunidade</a>
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
            <h2 class="fwSemiBold h3Medium mb-4">
              Formulário para Inscrição Consular
            </h2>
            <form id="card-user-form" class="commentForm">
              <h4 class="fwSemiBold mb-4 ml-2">
                (A) IDENTIFICAÇÃO
              </h4>

              <div class="row mx-n2">
                <div class="col-8 px-2">
                  <div class="form-group">
                    <label for="">Nome completo
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="text" name="nome_completo_user" class="form-control d-block w-100"
                      placeholder="Nome completo" />
                  </div>
                </div>
                <div class="col-4 px-2">
                  <div class="form-group">
                    <label for="">Apelido
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="text" name="apelido_user" class="form-control d-block w-100" placeholder="Apelido" />
                  </div>
                </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-1 px-2">
                  <div class="form-group">
                    <label for="">Dia
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="number" name="dia_user" class="form-control d-block w-100" placeholder="Dia" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-2 px-2">
                  <div class="form-group">
                    <label for="">Mês
                      <span class="text-danger fsSmall">*</span></label>
                    <select id="sex_user" name="mes_user" id="" class="form-control d-block w-100">
                      <option value="Janeiro">Janeiro</option>
                      <option value="Fevereiro">Fevereiro</option>
                      <option value="Março">Março</option>
                      <option value="Abril">Abril</option>
                      <option value="Maio">Maio</option>
                      <option value="Junho">Junho</option>
                      <option value="Julho">Julho</option>
                      <option value="Agosto">Agosto</option>
                      <option value="Setembro">Setembro</option>
                      <option value="Outubro">Outubro</option>
                      <option value="Novembro">Novembro</option>
                      <option value="Dezembro">Dezembro</option>
                    </select>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-1 px-2">
                  <div class="form-group">
                    <label for="">Ano
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="number" name="ano_user" class="form-control d-block w-100" placeholder="Ano" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-8 px-2">
                  <div class="form-group">
                    <label for="">Local de nascimento
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="text" name="local_nascimento_user" value="rafa" class="form-control d-block w-100"
                      placeholder="Local de nascimento" />
                  </div>
                </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-4 px-2">
                  <div class="form-group">
                    <label for="">Município
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="text" name="municipio_user" class="form-control d-block w-100"
                      placeholder="Município" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-4 px-2">
                  <div class="form-group">
                    <label for="">Província
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="text" name="provincia_user" class="form-control d-block w-100"
                      placeholder="Província" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-4 px-2">
                  <div class="form-group">
                    <label for="">País
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="text" name="pais_user" class="form-control d-block w-100" placeholder="País" />
                  </div>
                </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">Estado civil
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="text" name="estado_civil_user" class="form-control d-block w-100"
                      placeholder="Estado civil" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">Profissão
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="text" name="profissão_user" class="form-control d-block w-100"
                      placeholder="Profissão" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-6 px-2">
                  <div class="form-group">
                    <label for="">Habilitações Literais
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="text" name="habilitacoees_literais_user" class="form-control d-block w-100"
                      placeholder="habilitacoes_literais" />
                  </div>
                </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-6 px-2">
                  <div class="form-group">
                    <label for="">Concluídas em:
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="text" name="habilitacoees_concluídas_user" class="form-control d-block w-100"
                      placeholder="Concluídas em " />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">Ano de conclusão
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="number" name="habilitacoees_ano_conclusao_user" class="form-control d-block w-100"
                      placeholder="Ano de conclusão" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">País
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="text" name="habilitacoees_pais_user" class="form-control d-block w-100"
                      placeholder="País" />
                  </div>
                </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-12 px-2">
                  <div class="form-group">
                    <label for="">Residência actual:
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="text" name="residênciaactual_user" class="form-control d-block w-100"
                      placeholder="Residencia atual" />
                  </div>
                </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-4 px-2">
                  <div class="form-group">
                    <label for="">Bairro:
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="text" name="bairro_user" class="form-control d-block w-100" placeholder="Bairro" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-4 px-2">
                  <div class="form-group">
                    <label for="">Cidade:
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="text" name="cidade_user" class="form-control d-block w-100" placeholder="Cidade" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-4 px-2">
                  <div class="form-group">
                    <label for="">Região:
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="text" name="regiao_user" class="form-control d-block w-100" placeholder="Região" />
                  </div>
                </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-6 px-2">
                  <div class="form-group">
                    <label for="">E-mail
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="text" name="email_user" class="form-control d-block w-100" placeholder="E-mail" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-6 px-2">
                  <div class="form-group">
                    <label for="">Telefone
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="number" name="telefone_user" class="form-control d-block w-100"
                      placeholder="Telefone" />
                  </div>
                </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-6 px-2">
                  <div class="form-group">
                    <label for="">Nome do pai
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="text" id="father_name_user" name="nome_pai_user" class="form-control d-block w-100"
                      placeholder="Nome do pai" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">Nacionalidade do pai
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="text" name="nacionalidade_pai_user" class="form-control d-block w-100"
                      placeholder="Nacionalidade do pai" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">Localização do pai
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="text" name="localizacao_pai_user" class="form-control d-block w-100"
                      placeholder="Localização do pai" />
                  </div>
                </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-6 px-2">
                  <div class="form-group">
                    <label for="">Nome do avô
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="text" id="father_name_user" name="nome_pai_avo_homem_user"
                      class="form-control d-block w-100" placeholder="Nome do avô" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-6 px-2">
                  <div class="form-group">
                    <label for="">Nome da avó
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="text" id="father_name_user" name="nome_pai_avo_mulher_user"
                      class="form-control d-block w-100" placeholder="Nome da avó" />
                  </div>
                </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-6 px-2">
                  <div class="form-group">
                    <label for="">Nome do mãe
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="text" id="mother_name_user" name="nome_mae_user" class="form-control d-block w-100"
                      placeholder="Nome do mãe" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">Nacionalidade da mãe
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="text" id="mother_nationality_user" name="nacionalidade_mae_user"
                      class="form-control d-block w-100" placeholder="Nacionalidade da mãe" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">Localização do mãe
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="text" name="localizacao_mae_user" class="form-control d-block w-100"
                      placeholder="Localização do mãe" />
                  </div>
                </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-6 px-2">
                  <div class="form-group">
                    <label for="">Nome do avô
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="text" id="father_name_user" name="nome_mae_avo_homem_user"
                      class="form-control d-block w-100" placeholder="Nome do avô" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-6 px-2">
                  <div class="form-group">
                    <label for="">Nome da avó
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="text" id="father_name_user" name="nome_mae_avo_mulher_user"
                      class="form-control d-block w-100" placeholder="Nome da avó" />
                  </div>
                </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-12 px-2">
                  <h4 class="fwSemiBold mb-4 ml-2">
                    (B) TRAJETÓRIA
                  </h4>
                </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">Data de saída de Angola
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="date" name="data_saida_angola_user" class="form-control d-block w-100"
                      placeholder="Data de nascimento" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">País onde emigrou
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="text" name="pais_onde_emigrou_user" class="form-control d-block w-100"
                      placeholder="País onde emigrou" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">Com quem emigrou?
                      <span class="text-danger fsSmall">*</span></label>
                    <select id="sex_user" name="com_quem_emigrou_user" id="" class="form-control d-block w-100">
                      <option value="Masculino">sozinho</option>
                      <option value="Feminino">em grupo</option>
                    </select>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">Localidade de onde partiu
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="text" name="localidade_onde_partiu" class="form-control d-block w-100"
                      placeholder="Localidade de onde partiu" />
                  </div>
                </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-6 px-2">
                  <div class="form-group">
                    <label for="">Outras localidade onde viveu
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="text" name="outras_localidade_onde_viveu" class="form-control d-block w-100"
                      placeholder="Outras localidade onde viveu" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">País(es)
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="text" name="pais_localidade_user" class="form-control d-block w-100"
                      placeholder="País(es)" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">Ano(s)
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="text" name="ano_localidade_user" class="form-control d-block w-100"
                      placeholder="Ano(s)" />
                  </div>
                </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-12 px-2">
                  <div class="form-group">
                    <label for="">Motivo de saída de Angola
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="text" name="motivo_saida_angola_user" class="form-control d-block w-100"
                      placeholder="Motivo de saída de Angola" />
                  </div>
                </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-12 px-2">
                  <h4 class="fwSemiBold mb-4 ml-2">
                    (C) IDENTIFICAÇÃO DO CONJUGE
                  </h4>
                </div>

                <div class="col-12 px-2">
                  <div class="form-group">
                    <label for="">Nome completo
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="text" name="nome_completo_conjuge" class="form-control d-block w-100"
                      placeholder="Nome completo" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-4 px-2">
                  <div class="form-group">
                    <label for="">Local de nascimento
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="text" name="local_nascimento_conjuge" class="form-control d-block w-100"
                      placeholder="Local de nascimento" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-1 px-2">
                  <div class="form-group">
                    <label for="">Dia
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="number" name="dia_conjuge" class="form-control d-block w-100" placeholder="Dia" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-2 px-2">
                  <div class="form-group">
                    <label for="">Mês
                      <span class="text-danger fsSmall">*</span></label>
                    <select id="_conjuge" name="mes_conjuge" id="" class="form-control d-block w-100">
                      <option value="Janeiro">Janeiro</option>
                      <option value="Fevereiro">Fevereiro</option>
                      <option value="Março">Março</option>
                      <option value="Abril">Abril</option>
                      <option value="Maio">Maio</option>
                      <option value="Junho">Junho</option>
                      <option value="Julho">Julho</option>
                      <option value="Agosto">Agosto</option>
                      <option value="Setembro">Setembro</option>
                      <option value="Outubro">Outubro</option>
                      <option value="Novembro">Novembro</option>
                      <option value="Dezembro">Dezembro</option>
                    </select>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-1 px-2">
                  <div class="form-group">
                    <label for="">Ano
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="number" name="ano_conjuge" class="form-control d-block w-100" placeholder="Ano" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-4 px-2">
                  <div class="form-group">
                    <label for="">Profissão
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="text" name="profissao_conjuge" class="form-control d-block w-100"
                      placeholder="Profissão" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-4 px-2">
                  <div class="form-group">
                    <label for="">Função/Categoria
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="text" name="funcao_conjuge" class="form-control d-block w-100"
                      placeholder="Função/Categoria" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-8 px-2">
                  <div class="form-group">
                    <label for="">Outros dados úteis:
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="text" name="otros_dadosu_uteis_conjuge" class="form-control d-block w-100"
                      placeholder="Outros dados uteis " />
                  </div>
                </div>
                <div class="col-12 col-sm-8 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">Ano de conclusão
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="number" name="ano_conclusao_conjuge" class="form-control d-block w-100"
                      placeholder="Ano de conclusão" />
                  </div>
                </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-12 px-2">
                  <h4 class="fwSemiBold mb-4 ml-2">
                    (I) IDENTIFICAÇÃO DOS FILHOS
                  </h4>
                </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-5 px-2">
                  <div class="form-group">
                    <label for="">
                      Nome (filho 1)
                    </label>
                    <input type="text" name="name_complete_filho1" class="form-control d-block w-100"
                      placeholder="Nome Completo" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-2 px-2">
                  <div class="form-group">
                    <label for="">
                      Data de nascimento
                    </label>
                    <input type="date" name="data_nascimento_filho1" class="form-control d-block w-100"
                      placeholder="Data de nascimento" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">
                      Local
                    </label>
                    <input type="text" name="local_nascimento_filho1" class="form-control d-block w-100"
                      placeholder="Local de nascimento" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-2 px-2">
                  <div class="form-group">
                    <label for="">
                      Sexo
                    </label>
                    <select name="sexo_filho1" id="" class="form-control d-block w-100">
                      <option value="">-------</option>
                      <option value="Masculino">Masculino</option>
                      <option value="Feminino">Feminino</option>
                    </select>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">
                      Residência actual
                    </label>
                    <input type="text" name="residencia_actual_filho1" class="form-control d-block w-100"
                      placeholder="Residência actual" />
                  </div>
                </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-12 px-2"> </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-5 px-2">
                  <div class="form-group">
                    <label for="">
                      Nome (filho 2)
                    </label>
                    <input type="text" name="name_complete_filho2" class="form-control d-block w-100"
                      placeholder="Nome Completo" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-2 px-2">
                  <div class="form-group">
                    <label for="">
                      Data de nascimento
                    </label>
                    <input type="date" name="data_nascimento_filho2" class="form-control d-block w-100"
                      placeholder="Data de nascimento" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">
                      Local
                    </label>
                    <input type="text" name="local_nascimento_filho2" class="form-control d-block w-100"
                      placeholder="Local de nascimento" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-2 px-2">
                  <div class="form-group">
                    <label for="">
                      Sexo
                    </label>
                    <select name="sexo_filho2" id="" class="form-control d-block w-100">
                      <option value="">-------</option>
                      <option value="Masculino">Masculino</option>
                      <option value="Feminino">Feminino</option>
                    </select>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">
                      Residência actual
                    </label>
                    <input type="text" name="residencia_actual_filho2" class="form-control d-block w-100"
                      placeholder="Residência actual" />
                  </div>
                </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-12 px-2"> </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-5 px-2">
                  <div class="form-group">
                    <label for="">
                      Nome (filho 3)
                    </label>
                    <input type="text" name="name_complete_filho3" class="form-control d-block w-100"
                      placeholder="Nome Completo" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-2 px-2">
                  <div class="form-group">
                    <label for="">
                      Data de nascimento
                    </label>
                    <input type="date" name="data_nascimento_filho3" class="form-control d-block w-100"
                      placeholder="Data de nascimento" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">
                      Local
                    </label>
                    <input type="text" name="local_nascimento_filho3" class="form-control d-block w-100"
                      placeholder="Local de nascimento" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-2 px-2">
                  <div class="form-group">
                    <label for="">
                      Sexo
                    </label>
                    <select name="sexo_filho3" id="" class="form-control d-block w-100">
                      <option value="">-------</option>
                      <option value="Masculino">Masculino</option>
                      <option value="Feminino">Feminino</option>
                    </select>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">
                      Residência actual
                    </label>
                    <input type="text" name="residencia_actual_filho3" class="form-control d-block w-100"
                      placeholder="Residência actual" />
                  </div>
                </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-12 px-2"> </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-5 px-2">
                  <div class="form-group">
                    <label for="">
                      Nome (filho 4)
                    </label>
                    <input type="text" name="name_complete_filho4" class="form-control d-block w-100"
                      placeholder="Nome Completo" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-2 px-2">
                  <div class="form-group">
                    <label for="">
                      Data de nascimento
                    </label>
                    <input type="date" name="data_nascimento_filho4" class="form-control d-block w-100"
                      placeholder="Data de nascimento" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">
                      Local
                    </label>
                    <input type="text" name="local_nascimento_filho4" class="form-control d-block w-100"
                      placeholder="Local de nascimento" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-2 px-2">
                  <div class="form-group">
                    <label for="">
                      Sexo
                    </label>
                    <select name="sexo_filho4" id="" class="form-control d-block w-100">
                      <option value="">-------</option>
                      <option value="Masculino">Masculino</option>
                      <option value="Feminino">Feminino</option>
                    </select>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">
                      Residência actual
                    </label>
                    <input type="text" name="residencia_actual_filho4" class="form-control d-block w-100"
                      placeholder="Residência actual" />
                  </div>
                </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-12 px-2"> </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-5 px-2">
                  <div class="form-group">
                    <label for="">
                      Nome (filho 5)
                    </label>
                    <input type="text" name="name_complete_filho5" class="form-control d-block w-100"
                      placeholder="Nome Completo" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-2 px-2">
                  <div class="form-group">
                    <label for="">
                      Data de nascimento
                    </label>
                    <input type="date" name="data_nascimento_filho5" class="form-control d-block w-100"
                      placeholder="Data de nascimento" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">
                      Local
                    </label>
                    <input type="text" name="local_nascimento_filho5" class="form-control d-block w-100"
                      placeholder="Local de nascimento" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-2 px-2">
                  <div class="form-group">
                    <label for="">
                      Sexo
                    </label>
                    <select name="sexo_filho5" id="" class="form-control d-block w-100">
                      <option value="">-------</option>
                      <option value="Masculino">Masculino</option>
                      <option value="Feminino">Feminino</option>
                    </select>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">
                      Residência actual
                    </label>
                    <input type="text" name="residencia_actual_filho5" class="form-control d-block w-100"
                      placeholder="Residência actual" />
                  </div>
                </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-12 px-2"> </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-5 px-2">
                  <div class="form-group">
                    <label for="">
                      Nome (filho 6)
                    </label>
                    <input type="text" name="name_complete_filho6" class="form-control d-block w-100"
                      placeholder="Nome Completo" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-2 px-2">
                  <div class="form-group">
                    <label for="">
                      Data de nascimento
                    </label>
                    <input type="date" name="data_nascimento_filho6" class="form-control d-block w-100"
                      placeholder="Data de nascimento" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">
                      Local
                    </label>
                    <input type="text" name="local_nascimento_filho6" class="form-control d-block w-100"
                      placeholder="Local de nascimento" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-2 px-2">
                  <div class="form-group">
                    <label for="">
                      Sexo
                    </label>
                    <select name="sexo_filho6" id="" class="form-control d-block w-100">
                      <option value="">-------</option>
                      <option value="Masculino">Masculino</option>
                      <option value="Feminino">Feminino</option>
                    </select>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">
                      Residência actual
                    </label>
                    <input type="text" name="residencia_actual_filho6" class="form-control d-block w-100"
                      placeholder="Residência actual" />
                  </div>
                </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-12 px-2"> </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-5 px-2">
                  <div class="form-group">
                    <label for="">
                      Nome (filho 7)
                    </label>
                    <input type="text" name="name_complete_filho7" class="form-control d-block w-100"
                      placeholder="Nome Completo" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-2 px-2">
                  <div class="form-group">
                    <label for="">
                      Data de nascimento
                    </label>
                    <input type="date" name="data_nascimento_filho7" class="form-control d-block w-100"
                      placeholder="Data de nascimento" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">
                      Local
                    </label>
                    <input type="text" name="local_nascimento_filho7" class="form-control d-block w-100"
                      placeholder="Local de nascimento" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-2 px-2">
                  <div class="form-group">
                    <label for="">
                      Sexo
                    </label>
                    <select name="sexo_filho7" id="" class="form-control d-block w-100">
                      <option value="">-------</option>
                      <option value="Masculino">Masculino</option>
                      <option value="Feminino">Feminino</option>
                    </select>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">
                      Residência actual
                    </label>
                    <input type="text" name="residencia_actual_filho7" class="form-control d-block w-100"
                      placeholder="Residência actual" />
                  </div>
                </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-12 px-2"> </div>


                <div class="col-12 col-sm-6 col-md-12 col-lg-12 px-2">
                  <h4 class="fwSemiBold mb-4 ml-2">
                    (E) OBSERVAÇÕES
                  </h4>
                </div>
                <div class="col-12 px-2">
                  <div class="form-group">
                    <label for="">
                      Observação
                      <span class="text-danger fsSmall">*</span></label>
                    <textarea id="Observacao" name="observacao_user" class="form-control w-100 d-block"
                      placeholder="Escreva aqui&hellip;"></textarea>
                  </div>
                </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-12 px-2">
                  <h4 class="fwSemiBold mb-4 ml-2">
                    (F) TESTEMUNHAS
                  </h4>
                </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-5 px-2">
                  <div class="form-group">
                    <label for="">
                      Nome Testemunha (1)
                    </label>
                    <input type="text" name="nome_testemunha1" class="form-control d-block w-100"
                      placeholder="Nome Completo" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-2 px-2">
                  <div class="form-group">
                    <label for="">
                      Nº B.I.
                    </label>
                    <input type="text" name="n_bi_testemunha1" class="form-control d-block w-100"
                      placeholder="Nº B.I." />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">Data de Emissão
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="date" name="data_emissão_testemunha1" class="form-control d-block w-100"
                      placeholder="Data de Emissão" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">Valido até
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="date" name="valido_ate_testemunha1" class="form-control d-block w-100"
                      placeholder="Valido até" />
                  </div>
                </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-12 px-2"> </div>

                <div class="col-12 col-sm-6 col-md-12 col-lg-5 px-2">
                  <div class="form-group">
                    <label for="">
                      Nome Testemunha (2)
                    </label>
                    <input type="text" name="nome_testemunha2" class="form-control d-block w-100"
                      placeholder="Nome Completo" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-2 px-2">
                  <div class="form-group">
                    <label for="">
                      Nº B.I.
                    </label>
                    <input type="text" name="n_bi_testemunha2" class="form-control d-block w-100"
                      placeholder="Nº B.I." />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">Data de Emissão
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="date" name="data_emissão_testemunha2" class="form-control d-block w-100"
                      placeholder="Data de Emissão" />
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-3 px-2">
                  <div class="form-group">
                    <label for="">Valido até
                      <span class="text-danger fsSmall">*</span></label>
                    <input type="date" name="valido_ate_testemunha2" class="form-control d-block w-100"
                      placeholder="Valido até" />
                  </div>
                </div>

              </div>

              <button type="button" id="get-pdf-btn"
                class="btn btnTheme d-flex font-weight-bold text-capitalize position-relative border-0 p-0 mt-2 btnWidthSmall"
                data-hover="Enviar formulario">
                <span class="d-block btnText">Enviar formulário</span>
              </button>

          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
</main>

<script src="<?= urlProject(FOLDER_BASE . BASE_JS . "/ficha_inscricao_consular.js") ?>"></script>