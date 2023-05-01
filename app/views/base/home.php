<?php $this->layout('_theme') ?>

<main>
  <!-- ====== SLIDE SHOW ====== -->
  <!-- ====== SLIDE SHOW ====== -->
  <div class="introBlock ibSlider">
    <div>
      <article class="d-flex w-100 position-relative ibColumn text-white overflow-hidden">
        <div class="alignHolder d-flex align-items-center w-100">
          <div class="align w-100 pt-20 pb-20 pt-md-40 pb-md-30 px-md-17">
            <div class="container position-relative">
              <div class="row">
                <div class="col-12 col-md-9 col-xl-7 fzMedium">
                  <h1 class="text-white mb-4 h1Large">
                    Bem-vindo ao Consulado de Angola em Ponta Negra
                  </h1>
                  <!-- 
                          <p>
                          The Most Exciting guide to living, working, visiting
                          and investing business.
                        </p> 
                      -->
                  <!-- 
                        <a
                          href="eventsList"
                          class="btn btnTheme font-weight-bold btnMinSm text-capitalize position-relative border-0 p-0 mt-6"
                          data-hover="Discover More"
                        >
                          <span class="d-block btnText">Discover More</span>
                        </a>
                         -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <span class="ibBgImage bgCover position-absolute"
          style="background-image: url(<?= urlProject(FOLDER_BASE . "/src/images/img01.jpg") ?>)"></span>
      </article>
    </div>
  </div>

  <!-- ====== FEATURES ASIDE ====== -->
  <aside class="featuresAsideBlock position-relative text-white">
    <div class="container">
      <div class="flatpWrap position-relative mt-n8 mt-md-n18">
        <ul class="list-unstyled fabFeaturesList mb-0 d-flex overflow-hidden flex-wrap">
          <li>
            <a href="<?= urlProject("setor/setor_notarial") ?>"
              class="fflColumn d-block w-100 text-center px-2 pt-4 pb-10">
              <span class="icnWrap d-flex align-items-center justify-content-center mx-auto mb-4 rounded-circle"><i
                  class="fa-regular fa-note-sticky"><span class="sr-only">icon</span></i>
              </span>
              <h2 class="mb-0">Sector Notarial</h2>
            </a>
          </li>
          <li>
            <a href="setor/setor_migratorio" class="fflColumn d-block w-100 text-center px-2 pt-4 pb-10">
              <span class="icnWrap d-flex align-items-center justify-content-center mx-auto mb-4 rounded-circle"><i
                  class="fa-solid fa-check-double"><span class="sr-only">icon</span></i>
              </span>
              <h2 class="mb-0">Sector Migratorio</h2>
            </a>
          </li>
          <li>
            <a href="setor/setor_identificacao" class="fflColumn d-block w-100 text-center px-2 pt-4 pb-10">
              <span class="icnWrap d-flex align-items-center justify-content-center mx-auto mb-4 rounded-circle"><i
                  class="fa-solid fa-id-card"><span class="sr-only">icon</span></i>
              </span>
              <h2 class="mb-0">Sector Identificação</h2>
            </a>
          </li>
          <li>
            <a href="setor/setor_apoio_comunidade" class="fflColumn d-block w-100 text-center px-2 pt-4 pb-10">
              <span class="icnWrap d-flex align-items-center justify-content-center mx-auto mb-4 rounded-circle"><i
                  class="fas fa-users"><span class="sr-only">icon</span></i>
              </span>
              <h2 class="mb-0">Sector de Apoio à Comunidade</h2>
            </a>
          </li>
          <li>
            <a href="setor/setor_comercial" class="fflColumn d-block w-100 text-center px-2 pt-4 pb-10">
              <span class="icnWrap d-flex align-items-center justify-content-center mx-auto mb-4 rounded-circle"><i
                  class="fas fa-briefcase"><span class="sr-only">icon</span></i>
              </span>
              <h2 class="mb-0">Sector Comercial</h2>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="fabBtNoteTextWrap text-center fontAlter fzMedium pt-6 pt-md-10 pb-6 pb-md-10 pb-lg-14">
      <div class="container">
        <div class="d-lg-flex justify-content-center align-items-center">
          <p class="mb-lg-0"></p>
        </div>
      </div>
    </div>
  </aside>

  <!-- ====== SERVICES ONLINE ====== -->
  <section class="exploreResourceBlock position-relative pt-7 pt-md-10 pt-lg-16 pt-xl-22 pb-7 pb-md-10">
    <div class="container">
      <div class="row">
        <div class="col-12 col-xl-4 pt-xl-2">
          <header class="erHeadingHead mb-7 mb-lg-11 mb-xl-0">
            <h2 class="text-white">Sector Migratório <br /></h2>
            <p>
              Ao sector Migratório e Estrangeiro compete a emissão dos
              seguintes tipos de visto.
            </p>
          </header>
        </div>
        <div class="col-12 col-xl-8">
          <div class="pl-xl-9">
            <div class="row no-gutters shadow">
              <div class="col-12 col-md-6 d-md-flex">
                <ul class="list-unstyled erLinksList px-7 py-7 px-lg-10 py-lg-10 bg-white w-100 mb-0">
                  <li>
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#vistoTurismoModal">Visto de
                      turismo</a>
                  </li>
                  <li>
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#vistoCurtaDuracaoModal">Visto de
                      Curta Duração</a>
                  </li>
                  <li>
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#vistoTransitoModal">Visto de
                      Trânsito
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#vistoTrabalhoModal">Visto de
                      Trabalho</a>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-6 d-md-flex">
                <ul class="list-unstyled erLinksList px-7 py-7 px-lg-10 py-lg-10 bgTheme w-100 mb-0">
                  <li>
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#vistoEstudoModal">Visto de
                      Estudo</a>
                  </li>
                  <li>
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#vistoTemporarioModal">Visto de
                      Permanência temporária</a>
                  </li>
                  <li>
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#vistoResidenciaModal">Visto de
                      Fixação de Residência
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#vistoTratamentoMedicoModal">Visto de
                      Tratamento Médio</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal Visto de Turismo -->
  <div class="modal fade bd-example-modal-lg" id="vistoTurismoModal" tabindex="-1" role="dialog"
    aria-labelledby="vistoTurismoModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            Requisitos para obtenção do visto de turismo
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="modal-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <strong>1.</strong> Possuir Passaporte com validade igual
                ou superior a seis (6) meses;
              </li>
              <li class="list-group-item">
                <strong>2.</strong> Formulário que deverá ser preenchido
                sem rasura, com letra de imprensa (maiúscula), tinta preta
                e assinada pelo utente ou solicitante;
              </li>
              <li class="list-group-item">
                <strong>3.</strong> Uma (1) fotografia tipo passe,
                colorida, com fundo branco atualizada e sem óculos
                escuros, salvo orientação médica;
              </li>
              <li class="list-group-item">
                <strong>4.</strong> Origem da carta de chamada de entidade
                privada-pública ou com residência na República de Angola,
                reconhecida por notário e MIREX (Ministério das Relações
                Exteriores);
              </li>
              <li class="list-group-item">
                <strong>5.</strong> Fotocópia do Bilhete de Identidade e
                original da declaração de serviço da pessoa que assina a
                carta de chamada (reconhecido por notário e MIREX),
                extrato da conta bancaria, assinados e carimbados pelo
                banco emissor;
              </li>
              <li class="list-group-item">
                <strong>6.</strong> Fotocópia do passaporte e de todas as
                páginas que contem movimentos migratórios na república;
              </li>
              <li class="list-group-item">
                <strong>7.</strong> Para os cidadãos estrangeiro
                apresentar a fotocópia do visto ou cartão de residência;
              </li>
              <li class="list-group-item">
                <strong>8.</strong> Fotocópia do cartão de vacina
                internacional;
              </li>
              <li class="list-group-item">
                <strong>9.</strong> Fotocópia de ida e volta e reserva do
                hotel;
              </li>
              <li class="list-group-item">
                <strong>10.</strong> Os menores de idade, devem apresentar
                o original da autorização expressa dos progenitores,
                representante legal ou de quem exerça a autorização
                paternal (traduzido em português) e autenticado pelo
                Ministério Dos Negócios Estrangeiros (MNE), fotocópia do
                passaporte e bilhete de ida e volta do acompanhante.
              </li>
              <li class="list-group-item">
                <strong>11.</strong> Fotocópia do assento de nascimento,
                reconhecidos por notário e MNE;
              </li>
              <li class="list-group-item">
                <strong>12.</strong> Pagamento de 97.500 Fcfa (não
                reembolsáveis independentemente da concessão ou não do
                visto).
              </li>
            </ul>
          </div>
        </div>
        <div class="modal-footer">
          <button
            class="btn btn-dark btnSwitchDark fwMedium position-relative border-0 p-0 btnCustomSmall mt-md-1 mt-lg-0 ml-lg-4"
            data-hover="Entendido" data-dismiss="modal">
            <span class="d-block btnText fwMedium">Entendido</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Visto de Curta Duração -->
  <div class="modal fade bd-example-modal-lg" id="vistoCurtaDuracaoModal" tabindex="-1" role="dialog"
    aria-labelledby="vistoCurtaDuracaoModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            Requisitos para obtenção de visto de curta duração
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="modal-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <strong>1.</strong> Possuir Passaporte com validade igual
                ou superior a seis (6) meses;
              </li>
              <li class="list-group-item">
                <strong>2.</strong> Formulário que deverá ser preenchido
                sem rasura, com letra de imprensa (maiúscula), tinta preta
                e assinada pelo utente ou solicitante;
              </li>
              <li class="list-group-item">
                <strong>3.</strong> Uma (1) fotografia tipo passe,
                colorida, com fundo branco atualizada e sem óculos
                escuros, salvo orientação médica;
              </li>
              <li class="list-group-item">
                <strong>4.</strong> Documento fundamentando os objetivos
                pretendido com a entrada em território nacional. Caso o
                documento seja subscrito por terceiros, anexar a fotocópia
                do Bilhete de Identidade angolano, cópia do cartão de
                residência válido, ou o documento da empresa;
              </li>
              <li class="list-group-item">
                <strong>5.</strong> Fotocópia do passaporte e de todas as
                páginas que contem movimentos migratórios na república
                Angola;
              </li>
              <li class="list-group-item">
                <strong>6.</strong> Para os cidadãos estrangeiro
                apresentar a fotocópia do visto ou cartão de residência;
              </li>
              <li class="list-group-item">
                <strong>7.</strong> Fotocópia do cartão de vacina
                internacional;
              </li>
              <li class="list-group-item">
                <strong>8.</strong> Fotocópia de ida e volta;
              </li>
              <li class="list-group-item">
                <strong>9.</strong> Os menores de idade, devem apresentar
                o original da autorização expressa dos progenitores,
                representante legal ou de quem exerça a autorização
                paternal (traduzido em português) e autenticado pelo
                Ministério Dos Negócios Estrangeiros (MNE), fotocópia do
                passaporte e bilhete de ida e volta do acompanhante.
              </li>
              <li class="list-group-item">
                <strong>10.</strong> Fotocópia do assento de nascimento,
                reconhecidos por notário e MNE;
              </li>
              <li class="list-group-item">
                <strong>11.</strong> Pagamento de 65.000 Fcfa (não
                reembolsáveis independentemente da concessão ou não do
                visto).
              </li>
            </ul>
          </div>
        </div>
        <div class="modal-footer">
          <button
            class="btn btn-dark btnSwitchDark fwMedium position-relative border-0 p-0 btnCustomSmall mt-md-1 mt-lg-0 ml-lg-4"
            data-hover="Entendido" data-dismiss="modal">
            <span class="d-block btnText fwMedium">Entendido</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Visto de Trânsito -->
  <div class="modal fade bd-example-modal-lg" id="vistoTransitoModal" tabindex="-1" role="dialog"
    aria-labelledby="vistoTransitoModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            Requisitos para obtenção do visto de trânsito
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="modal-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <strong>1.</strong> Possuir Passaporte com validade igual
                ou superior a seis (6) messes;
              </li>
              <li class="list-group-item">
                <strong>2.</strong> Formulário que deverá ser preenchido
                sem rasura, com letra de imprensa (maiúscula), tinta preta
                e assinada pelo utente ou solicitante;
              </li>
              <li class="list-group-item">
                <strong>3.</strong> Uma (1) fotografia tipo passe,
                colorida, com fundo branco atualizada e sem óculos
                escuros, salvo orientação médica;
              </li>
              <li class="list-group-item">
                <strong>4.</strong> Fotocópia do Bilhete de Identidade
                Congolês. Para os cidadãos estrangeiros apresentar a
                fotocópia do visto ou cartão de residência;
              </li>
              <li class="list-group-item">
                <strong>5.</strong> Fotocópia do passaporte e de todas as
                páginas que contem movimentos migratórios na república
                Angola;
              </li>
              <li class="list-group-item">
                <strong>6.</strong> Fotocópia do Bilhete de Passagem para
                República de Angola, com retorno;
              </li>
              <li class="list-group-item">
                <strong>7.</strong> Comprovativo de ser titular de visto
                de entrada para o país de destino ou se está isento deste;
              </li>
              <li class="list-group-item">
                <strong>8.</strong> Comprovativo de meio de subsistência
                (equivalente a USD 200 por cada dia de permanência em
                território angolano) e condições de alojamento
                (confirmação de reserva de hotel ou outro tipo de
                alojamento;
              </li>
              <li class="list-group-item">
                <strong>9.</strong> Fotocópia do cartão de vacina
                internacional;
              </li>
              <li class="list-group-item">
                <strong>10.</strong> Os menores de idade, devem apresentar
                o original da autorização expressa dos progenitores,
                representante legal ou de quem exerça a autorização
                paternal (traduzido em português) e autenticado pelo
                Ministério Dos Negócios Estrangeiros (MNE), fotocópia do
                passaporte e bilhete de ida e volta do acompanhante.
              </li>
              <li class="list-group-item">
                <strong>11.</strong> Fotocópia do assento de nascimento,
                reconhecidos por notário e MNE;
              </li>
              <li class="list-group-item">
                <strong>1.</strong> Pagamento de 65.000 Fcfa (não
                reembolsáveis independentemente da concessão ou não do
                visto).
              </li>
            </ul>
          </div>
        </div>
        <div class="modal-footer">
          <button
            class="btn btn-dark btnSwitchDark fwMedium position-relative border-0 p-0 btnCustomSmall mt-md-1 mt-lg-0 ml-lg-4"
            data-hover="Entendido" data-dismiss="modal">
            <span class="d-block btnText fwMedium">Entendido</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Visto de Trabalho -->
  <div class="modal fade bd-example-modal-lg" id="vistoTrabalhoModal" tabindex="-1" role="dialog"
    aria-labelledby="vistoTrabalhoModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            Requisitos para obtenção do visto de trabalho
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="modal-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <strong>1.</strong> Possuir Passaporte com validade igual
                ou superior a seis (6) messes;
              </li>
              <li class="list-group-item">
                <strong>2.</strong> Formulário que deverá ser preenchido
                sem rasura, com letra de imprensa (maiúscula), tinta preta
                e assinada pelo utente ou solicitante;
              </li>
              <li class="list-group-item">
                <strong>3.</strong> Uma (1) fotografia tipo passe,
                colorida, com fundo branco atualizada e sem óculos
                escuros, salvo orientação médica;
              </li>
              <li class="list-group-item">
                <strong>4.</strong> Carta da entidade contratante em
                Angola, dirigida ao Consulado Geral da República de Angola
                em Ponta Negra a solicitar o visto de trabalho, contendo
                contacto telefónico e endereço eletrônico;
              </li>
              <li class="list-group-item">
                <strong>5.</strong> Contrato de trabalho ou contrato
                promessa de trabalho reconhecido por notário em Angola e
                pelo MIREX (Ministério das Relações Exteriores);
              </li>
              <li class="list-group-item">
                <strong>6.</strong> Parecer favorável do Ministério de
                tutela
              </li>
              <li class="list-group-item">
                <strong>7.</strong> Fotocópia do passaporte e de todas as
                páginas que contem movimentos migratórios na república
                Angola;
              </li>
              <li class="list-group-item">
                <strong>8.</strong> Original do atestado médico do pais de
                residência (traduzido do português) e reconhecido pelo MNE
                (Ministério de Negócio Estrangeiros);
              </li>
              <li class="list-group-item">
                <strong>9.</strong> Para os cidadãos estrangeiro
                apresentar a fotocópia do visto ou cartão de residência
                congolês;
              </li>
              <li class="list-group-item">
                <strong>10.</strong> Original do Registo Criminal emitido
                pelo país de residência traduzido em português e
                reconhecido pelo MNE;
              </li>
              <li class="list-group-item">
                <strong>11.</strong> Fotocópia do certificado de
                habilitações literárias e profissionais traduzido em
                português e reconhecido pelo MNE;
              </li>
              <li class="list-group-item">
                <strong>12.</strong> Declaração comprometendo-se a
                respeitar as leis vigentes em Angola, com assinatura
                autenticada pelo MNE;
              </li>
              <li class="list-group-item">
                <strong>13.</strong> Curriculum vitae, com assinatura
                reconhecida ´pelo notário MNE;
              </li>
              <li class="list-group-item">
                <strong>14.</strong> Alvará atualizado da empresa –
                imposto atualizado (DAR), capa e publicação da empresa no
                Diário da República e o documento da constituição da
                empresa, autenticada pelo Ministério da Justiça e pelo
                MIREX;
              </li>
              <li class="list-group-item">
                <strong>15.</strong> Fotocópia do cartão de vacina
                internacional;
              </li>
              <li class="list-group-item">
                <strong>16.</strong> Pagamento de 28.000 Fcfa (não
                reembolsáveis independentemente da concessão ou não do
                visto).
              </li>
            </ul>
          </div>
        </div>
        <div class="modal-footer">
          <button
            class="btn btn-dark btnSwitchDark fwMedium position-relative border-0 p-0 btnCustomSmall mt-md-1 mt-lg-0 ml-lg-4"
            data-hover="Entendido" data-dismiss="modal">
            <span class="d-block btnText fwMedium">Entendido</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Visto de Estudo  -->
  <div class="modal fade bd-example-modal-lg" id="vistoEstudoModal" tabindex="-1" role="dialog"
    aria-labelledby="vistoEstudoModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            Requisitos para obtenção do visto de estudo
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="modal-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <strong>1.</strong> Possuir Passaporte com validade igual
                ou superior a seis (6) messes;
              </li>
              <li class="list-group-item">
                <strong>2.</strong> Formulário que deverá ser preenchido
                sem rasura, com letra de imprensa (maiúscula), tinta preta
                e assinada pelo utente ou solicitante;
              </li>
              <li class="list-group-item">
                <strong>3.</strong> Uma (1) fotografia tipo passe,
                colorida, com fundo branco atualizada e sem óculos
                escuros, salvo orientação médica;
              </li>
              <li class="list-group-item">
                <strong>4.</strong> Carta de requerente, devidamente
                fundamentada, dirigida à Missão Consular de Angola, a
                solicitar o Visto de Estudo, com assinatura reconhecida
                pelo Notário (Maire), visado pelo Ministério dos Negócios
                Estrangeiros e visado por este Consulado;
              </li>
              <li class="list-group-item">
                <strong>5.</strong> Para os cidadãos estrangeiro
                apresentar a fotocópia do visto ou cartão de residência;
              </li>
              <li class="list-group-item">
                <strong>6.</strong> Fotocópia do passaporte;
              </li>
              <li class="list-group-item">
                <strong>7.</strong> Comprovativo de matricula em
                estabelecimento de ensino oficialmente reconhecido ou
                garantia de frequência no referido estabelecimento com
                indicação das condições de estudos e da duração do ensino;
              </li>
              <li class="list-group-item">
                <strong>8.</strong> Comprovativo emitido pela instituição
                competente para atribuição do grau acadêmico ou
                profissional ou ainda o reconhecimento do intercâmbio
                cientifico do trabalho de investigação, Programa de
                Estágio ou Contrato de Formação, se for o caso;
              </li>
              <li class="list-group-item">
                <strong>9.</strong> Original do atestado médico do pais de
                residência (traduzido do português) e reconhecido pelo MNE
                (Ministério de Negócio Estrangeiros);
              </li>
              <li class="list-group-item">
                <strong>10.</strong> Original do Registo Criminal emitido
                pelo país de residência traduzido em português e
                reconhecido pelo MNE;
              </li>
              <li class="list-group-item">
                <strong>11.</strong> Comprovativo de meios de subsistência
                de alojamento (confirmação de reserva de hotel ou outro
                tipo de alojamento);
              </li>
              <li class="list-group-item">
                <strong>12.</strong> Declaração comprometendo-se a
                respeitar as leis vigentes em Angola, com assinatura
                autenticada pelo MNE;
              </li>
              <li class="list-group-item">
                <strong>13.</strong> Os menores de idade, devem apresentar
                o original da autorização expressa dos progenitores,
                representante legal ou de quem exerça a autorização
                paternal (traduzido em português) e autenticado pelo
                Ministério Dos Negócios Estrangeiros (MNE), fotocópia do
                passaporte e bilhete de ida e volta do acompanhante.
              </li>
              <li class="list-group-item">
                <strong>14.</strong> Fotocópia do assento de nascimento,
                reconhecidos por notário e MNE;
              </li>
              <li class="list-group-item">
                <strong>15.</strong> Pagamento de 280.000 Fcfa (não
                reembolsáveis independentemente da concessão ou não do
                visto).
              </li>
            </ul>
          </div>
        </div>
        <div class="modal-footer">
          <button
            class="btn btn-dark btnSwitchDark fwMedium position-relative border-0 p-0 btnCustomSmall mt-md-1 mt-lg-0 ml-lg-4"
            data-hover="Entendido" data-dismiss="modal">
            <span class="d-block btnText fwMedium">Entendido</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Visto de Permanência temporária -->
  <div class="modal fade bd-example-modal-lg" id="vistoTemporarioModal" tabindex="-1" role="dialog"
    aria-labelledby="vistoTemporarioModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            Requisitos para obtenção do visto de permanência temporária
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="modal-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <strong>1.</strong> Ser titular de passaporte com validade
                igual ou superior a 6 meses;
              </li>
              <li class="list-group-item">
                <strong>2.</strong> Formulário, que deve ser preenchido
                sem letras maiúsculas (maiúsculas), tinta preta e assinado
                pelo interessado ou requerente;
              </li>
              <li class="list-group-item">
                <strong>3.</strong> Uma fotocópia do seu passaporte, em
                fundo branco atualizado e sem óculos escuros, salvo
                indicação médica;
              </li>
              <li class="list-group-item">
                <strong>4.</strong> Documento autêntico atestando
                parentesco, missão religiosa e organização não
                governamental;
              </li>
              <li class="list-group-item">
                <strong>5.</strong> Cópia do contrato de trabalho ou
                contrato de trabalho legalizado pela Câmara Municipal de
                Angola e MIREX (Ministério das Relações Exteriores) e
                extrato bancário de quem assume a responsabilidade;
              </li>
              <li class="list-group-item">
                <strong>6.</strong> Atestado médico original do país de
                residência (traduzido para o português) e legalizado pelo
                Ministério das Relações Exteriores;
              </li>
              <li class="list-group-item">
                <strong>7.</strong> Fotocópia do cartão internacional de
                vacinação;
              </li>
              <li class="list-group-item">
                <strong>8.</strong> Fotocópia do passaporte e de todas as
                páginas que contenham o movimento migratório na República
                de Angola;
              </li>
              <li class="list-group-item">
                <strong>9.</strong> Para estrangeiros apresentar o visto
                ou cartão de residência;
              </li>
              <li class="list-group-item">
                <strong>10.</strong> Registo criminal original do país de
                residência, traduzido para a língua portuguesa e
                legalizado pelo Ministério dos Negócios Estrangeiros;
              </li>
              <li class="list-group-item">
                <strong>11.</strong> Declaração de compromisso de respeito
                pelas leis em vigor em Angola, com assinatura reconhecida
                e legalizada pelos Ministérios dos Negócios Estrangeiros;
              </li>
              <li class="list-group-item">
                <strong>12.</strong> Para menores, trazer a autorização
                parental original (traduzida para o português) e
                autenticada pelo Ministério das Relações Exteriores;
              </li>
              <li class="list-group-item">
                <strong>13.</strong> Pagamento de 280.000 FCFA (não
                reembolsável independentemente da concessão ou não do
                visto).
              </li>
            </ul>
          </div>
        </div>
        <div class="modal-footer">
          <button
            class="btn btn-dark btnSwitchDark fwMedium position-relative border-0 p-0 btnCustomSmall mt-md-1 mt-lg-0 ml-lg-4"
            data-hover="Entendido" data-dismiss="modal">
            <span class="d-block btnText fwMedium">Entendido</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Visto de Fixação de Residência -->
  <div class="modal fade bd-example-modal-lg" id="vistoResidenciaModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            Requisitos para obtenção do visto de fixação de residência
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="modal-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <strong></strong> Lamentamos mas essa informação está
                indisponível no momento...
              </li>
            </ul>
          </div>
        </div>
        <div class="modal-footer">
          <button
            class="btn btn-dark btnSwitchDark fwMedium position-relative border-0 p-0 btnCustomSmall mt-md-1 mt-lg-0 ml-lg-4"
            data-hover="Entendido" data-dismiss="modal">
            <span class="d-block btnText fwMedium">Entendido</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Visto de Tratamento Médio  -->
  <div class="modal fade bd-example-modal-lg" id="vistoTratamentoMedicoModal" tabindex="-1" role="dialog"
    aria-labelledby="vistoTratamentoMedicoModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="vistoTratamentoMedicoModal">
            Requisitos para obtenção do visto de tratamento médio
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="modal-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <strong></strong> Lamentamos mas essa informação está
                indisponível no momento...
              </li>
            </ul>
          </div>
        </div>
        <div class="modal-footer">
          <button
            class="btn btn-dark btnSwitchDark fwMedium position-relative border-0 p-0 btnCustomSmall mt-md-1 mt-lg-0 ml-lg-4"
            data-hover="Entendido" data-dismiss="modal">
            <span class="d-block btnText fwMedium">Entendido</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- ====== EXPLORE SERVICES ====== -->
  <section section
    class="exploreServicesBlock position-relative pt-7 pt-md-12 pt-lg-16 pt-xl-20 pb-0 pb-md-4 pb-lg-8 pb-xl-12">
    <div class="container">
      <header class="headingHead mb-7 md-md-9 mb-lg-13">
        <div class="row align-items-end">
          <div class="col-12 col-sm-7 col-xl-5">
            <h2 class="mb-0">Serviços Consulares</h2>
          </div>
          <div class="col-12 col-sm-5 col-xl-7 d-sm-flex justify-content-sm-end">
            <a href="services"
              class="btn btn-dark text-capitalize position-relative border-0 p-0 mt-4 mt-sm-0 mb-sm-1 minWidthMedium"
              data-hover="Explore Services">
              <span class="d-block btnText">Explore Services</span>
            </a>
          </div>
        </div>
      </header>

      <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-4">
          <article style="cursor: pointer" data-toggle="modal" data-target="#sectorNotoriaModal"
            class="esColumn position-relative text-center mb-13">
            <span class="imgHolder d-block w-100 bgCover"
              style="background-image: url(<?= urlProject(FOLDER_BASE . "/src/images/sector1.jpg") ?>)"></span>
            <div class="escCaption bg-white shadow position-absolute pt-4 px-2 pb-5">
              <h3 class="fwMedium mb-0">Sector Notarial</h3>
              <a href="javascript:void(0);" class="btnLink fontAlter">Saber mais
                <i class="fas fa-chevron-right blIcn"><span class="sr-only">icon</span></i></a>
            </div>
          </article>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
          <article style="cursor: pointer" class="esColumn position-relative text-center mb-13" data-toggle="modal"
            data-target="#sectorIdentificacao">
            <span class="imgHolder d-block w-100 bgCover"
              style="background-image: url(<?= urlProject(FOLDER_BASE . "/src/images/sector2.jpg") ?>)"></span>
            <div class="escCaption bg-white shadow position-absolute pt-4 px-2 pb-5">
              <h3 class="fwMedium mb-0">Sector de Identificação</h3>
              <a href="javascript:void(0);" class="btnLink fontAlter">Saber mais
                <i class="fas fa-chevron-right blIcn"><span class="sr-only">icon</span></i></a>
            </div>
          </article>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
          <article style="cursor: pointer" data-toggle="modal" data-target="#sectorMigratorioModal"
            class="esColumn position-relative text-center mb-13">
            <span class="imgHolder d-block w-100 bgCover"
              style="background-image: url(<?= urlProject(FOLDER_BASE . "/src/images/sector3.jpg") ?>)"></span>
            <div class="escCaption bg-white shadow position-absolute pt-4 px-2 pb-5">
              <h3 class="fwMedium mb-0">Sector Migratorio</h3>
              <a href="javascript:void(0);" class="btnLink fontAlter">Saber mais
                <i class="fas fa-chevron-right blIcn"><span class="sr-only">icon</span></i></a>
            </div>
          </article>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-4">
          <article style="cursor: pointer" data-toggle="modal" data-target="#sectorComercialModal"
            class="esColumn position-relative text-center mb-13">
            <span class="imgHolder d-block w-100 bgCover"
              style="background-image: url(<?= urlProject(FOLDER_BASE . "/src/images/sector4.jpg") ?>)"></span>
            <div class="escCaption bg-white shadow position-absolute pt-4 px-2 pb-5">
              <h3 class="fwMedium mb-0">Sector Comercial</h3>
              <a href="javascript:void(0);" class="btnLink fontAlter">Saber mais
                <i class="fas fa-chevron-right blIcn"><span class="sr-only">icon</span></i></a>
            </div>
          </article>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
          <article style="cursor: pointer" data-toggle="modal" data-target="#sectorMigratorioModal"
            class="esColumn position-relative text-center mb-13">
            <span class="imgHolder d-block w-100 bgCover"
              style="background-image: url(<?= urlProject(FOLDER_BASE . "/src/images/sector5.jpg") ?>)"></span>
            <div class="escCaption bg-white shadow position-absolute pt-4 px-2 pb-5">
              <h3 class="fwMedium mb-0">Sector de Apoio à Comunidade</h3>
              <a href="javascript:void(0);" class="btnLink fontAlter">Saber mais
                <i class="fas fa-chevron-right blIcn"><span class="sr-only">icon</span></i></a>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal Sector Notarial   -->
  <div class="modal fade bd-example-modal-lg" id="sectorNotoriaModal" tabindex="-1" role="dialog"
    aria-labelledby="sectorNotoriaModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="sectorNotoriaModal">
            Sector Notarial
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="modal-body">
            <h6>Temos disponível para si os seguintes serviços:</h6>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">- Registo de nascimento</li>
              <li class="list-group-item">- Registo de casamento</li>
              <li class="list-group-item">- Registo de óbito</li>
              <li class="list-group-item">- Transcrição de assentos</li>
              <li class="list-group-item">
                - Autenticação de documentos
              </li>
              <li class="list-group-item">
                - Reconhecimento de assinaturas.
              </li>
            </ul>
          </div>
        </div>
        <div class="modal-footer">
          <button
            class="btn btn-dark btnSwitchDark fwMedium position-relative border-0 p-0 btnCustomSmall mt-md-1 mt-lg-0 ml-lg-4"
            data-hover="Entendido" data-dismiss="modal">
            <span class="d-block btnText fwMedium">Entendido</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Sector de identificação   -->
  <div class="modal fade bd-example-modal-lg" id="sectorIdentificacao" tabindex="-1" role="dialog"
    aria-labelledby="sectorIdentificacao" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="sectorIdentificacao">
            Sector de identificação
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="modal-body">
            <h6>Temos disponível para si os seguintes serviços:</h6>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                - Emissão de Bilhete de Identidade
              </li>
              <li class="list-group-item">
                - Renovação do Bilhete de identidade
              </li>
              <li class="list-group-item">
                - 2 Via do Bilhete de Identidade
              </li>
              <li class="list-group-item">- Averbamento</li>
              <li class="list-group-item">
                - Emissão do certificado do resgistro criminal
              </li>
            </ul>
          </div>
        </div>
        <div class="modal-footer">
          <button
            class="btn btn-dark btnSwitchDark fwMedium position-relative border-0 p-0 btnCustomSmall mt-md-1 mt-lg-0 ml-lg-4"
            data-hover="Entendido" data-dismiss="modal">
            <span class="d-block btnText fwMedium">Entendido</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Sector Migratorio   -->
  <div class="modal fade bd-example-modal-lg" id="sectorMigratorioModal" tabindex="-1" role="dialog"
    aria-labelledby="sectorMigratorioModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="sectorMigratorioModal">
            Sector Migratorio
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="modal-body">
            <h6>Temos disponível para si os seguintes serviços:</h6>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">- Emissão de passaporte</li>
              <li class="list-group-item">- Emissão de salvo conduto</li>
              <li class="list-group-item">
                - Emissão de visto de turismo
              </li>
              <li class="list-group-item">
                - Emissão de visto de Curta Duração
              </li>
              <li class="list-group-item">
                - Emissão de visto de Trânsito
              </li>
              <li class="list-group-item">
                - Emissão de visto de Trabalho
              </li>
              <li class="list-group-item">
                - Emissão de visto de Estudo
              </li>
              <li class="list-group-item">
                - Emissão de visto de Permanência temporária
              </li>
              <li class="list-group-item">
                - Emissão de visto de Fixação de Residência
              </li>
              <li class="list-group-item">
                - Emissão de visto de Tratamento Médio
              </li>
            </ul>
          </div>
        </div>
        <div class="modal-footer">
          <button
            class="btn btn-dark btnSwitchDark fwMedium position-relative border-0 p-0 btnCustomSmall mt-md-1 mt-lg-0 ml-lg-4"
            data-hover="Entendido" data-dismiss="modal">
            <span class="d-block btnText fwMedium">Entendido</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Sector Comercial   -->
  <div class="modal fade bd-example-modal-lg" id="sectorComercialModal" tabindex="-1" role="dialog"
    aria-labelledby="sectorComercialModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="sectorComercialModal">
            Sector Comercial
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="modal-body">
            <h6>Temos disponível para si os seguintes serviços:</h6>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                - Promover o investimento em Angola
              </li>
              <li class="list-group-item">
                - Promover a economia Angolana
              </li>
              <li class="list-group-item">
                - Promover a oportunidade de negocio nos seguintes
                sectores:
                <p>Agricultura</p>
                <p>Turismo</p>
                <p>Industria extractiva</p>
                <p>Industria ligeira</p>
                <p>Transportes terrestre, marítimo e aereo</p>
                <p>Pescas</p>
              </li>
            </ul>
          </div>
        </div>
        <div class="modal-footer">
          <button
            class="btn btn-dark btnSwitchDark fwMedium position-relative border-0 p-0 btnCustomSmall mt-md-1 mt-lg-0 ml-lg-4"
            data-hover="Entendido" data-dismiss="modal">
            <span class="d-block btnText fwMedium">Entendido</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Sector Migratorio   -->
  <div class="modal fade bd-example-modal-lg" id="sectorMigratorioModal" tabindex="-1" role="dialog"
    aria-labelledby="sectorMigratorioModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="sectorMigratorioModal">
            Sector Migratorio
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="modal-body">
            <h6>Temos disponível para si os seguintes serviços:</h6>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">- Registo de nascimento</li>
              <li class="list-group-item">- Registo de casamento</li>
              <li class="list-group-item">- Registo de óbito</li>
              <li class="list-group-item">- Transcrição de assentos</li>
            </ul>
          </div>
        </div>
        <div class="modal-footer">
          <button
            class="btn btn-dark btnSwitchDark fwMedium position-relative border-0 p-0 btnCustomSmall mt-md-1 mt-lg-0 ml-lg-4"
            data-hover="Entendido" data-dismiss="modal">
            <span class="d-block btnText fwMedium">Entendido</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- ====== ABOUT LEADER ====== -->
  <article class="aboutMayorBlock pt-md-7 pt-xl-11 pb-7 pb-md-13 pb-lg-20 pb-xl-28">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 pt-4">
          <h2 class="lh44 mb-6">Mensagem do Cônsul Geral</h2>
          <p>
            Estou satisfeito, não apenas pela vossa existência, mas também
            por vocês atribuírem a este Consulado a importância que ele
            tem nas vossas vidas, depositando confiança na solução das
            preocupações que nos trazem sempre que nos visitam.
          </p>
          <p>
            Estamos conscientes, que por vezes, os estimados utentes não
            recebem as respostas às vossas solicitações com a celeridade
            desejada ou até mesmo positiva,mas garantimos-vos que,
            incansável e humildemente, todos os diplomatas e funcionários
            de recrutamento local, trabalham diariamente para melhorar o
            desempenho do Consulado e individualmente de cada um.
          </p>
          <blockquote class="meetQuote fontAlter text-lDark mt-6 py-1 pl-4 pl-lg-8 pr-md-12 pr-lg-20 pr-xl-28">
            <!-- <q class="d-block mb-4"
                    >Reiteramos os nossos cumprimentos e formulamos votos de boa
                    saúde e bem-estar pessoal a todos os membros da nossa
                    comunidade e aos amigos de todos os dias.</q
                  > -->
            <cite class="d-block fsNormal">Sr Samuel Andrade Da Cunha,
              <span class="fontBase ctSubtitleText">Cônsul Geral</span></cite>
          </blockquote>
        </div>
        <div class="col-12 col-md-6">
          <div class="imgTwoImageHolder position-relative mt-7 mt-md-0 mb-20 mb-md-0">
            <span class="img img1 position-relative d-block">
              <img src="<?= urlProject(FOLDER_BASE . "/src/images/img07.jpg") ?>" class="img-fluid"
                alt="image description" />
            </span>
          </div>
        </div>
      </div>
    </div>
  </article>

  <!-- ====== COUNTER ====== -->
  <aside class="counterftAsideBlock position-relative text-center text-white d-flex bg-dark">
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
      style="background-image: url(<?= urlProject(FOLDER_BASE . "/src/images/bg01.png") ?>)"></span>
  </aside>

  <!-- ====== EVENTS ====== -->
  <section class="upcomeventsBlock position-relative pt-7 pb-3 pt-md-12 pb-md-12 pt-lg-14 pb-lg-11 pt-xl-20 pb-xl-16">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-12">
          <div class="pr-lg-8">
            <header class="headingHead mb-6 mb-lg-8 mb-xl-12">
              <div class="row align-items-end">
                <div class="col-12 col-sm-6 col-md-7">
                  <h2 class="mb-sm-0 fwSemiBold h2Small">
                    Próximos eventos
                  </h2>
                </div>
                <div class="col-12 col-sm-6 col-md-5 d-sm-flex justify-content-sm-end">
                  <a href="eventsGridSidebar" class="btn-link fontAlter">Ver todos eventos
                    <i class="fas fa-chevron-right blIcn"><span class="sr-only">icon</span></i></a>
                </div>
              </div>
            </header>
            <div class="row">
              <!-- SEM EVENTOS -->
              <div class="col-12 col-md-7">
                <article class="ueEveColumn position-relative shadow bg-white mb-6">
                  <div class="ueDescriptionWrap pt-5 pb-8 px-5">
                    <strong style="color: red" class="d-block mb-2">Sem eventos</strong>
                    <h3 class="h3Small fwMedium mb-3">
                      <a href="eventSingle">Não foram encontrados eventos no momento</a>
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
                    <div class="col-12 col-md-4">
                      <article
                        class="ueEveColumn position-relative shadow bg-white mb-6"
                      >
                        <div class="imgHolder position-relative">
                          <a href="eventSingle">
                            <img
                              src="<?= urlProject(FOLDER_BASE . "/src/images/img10.jpg") ?>"
                              class="img-fluid d-block w-100"
                              alt="image description"
                            />
                          </a>
                          <time
                            class="ueTimeTag position-absolute text-center d-flex bg-white fontAlter fwSemiBold text-lDark text-uppercase"
                            datetime="2011-01-12"
                          >
                            <span
                              class="d-block text-white textDay flex-shrink-0 font-weight-bold"
                              >15</span
                            >
                            <span class="d-block py-2 px-3">OUTUBRO 2023</span>
                          </time>
                        </div>
                        <div class="ueDescriptionWrap pt-5 pb-8 px-5">
                          <strong
                            class="d-block ueCatTitle fwSemiBold text-secondary mb-2"
                            >Categoria</strong
                          >
                          <h3 class="h3Small fwMedium mb-3">
                            <a href="eventSingle"
                              >xxxxx xxxx xxxxx xxxx x xxxx</a
                            >
                          </h3>
                          <address>
                            <ul class="list-unstyled ueScheduleList">
                              <li>
                                <i class="icomoon-clock icn position-absolute"
                                  ><span class="sr-only">icon</span></i
                                >
                                xx:xxh - xx:xxh
                              </li>
                              <li>
                                <i
                                  class="icomoon-location icn position-absolute"
                                  ><span class="sr-only">icon</span></i
                                >
                                xxxxx xxx xxxxxxx xx xxx
                              </li>
                            </ul>
                          </address>
                          <a
                            href="eventSingle"
                            class="btn btnCustomLightOutline bdrWidthAlter btn-sm text-capitalize position-relative border-0 p-0 mt-3 align-top"
                            data-hover="More Details"
                          >
                            <span class="d-block btnText">Mais detalhes</span>
                          </a>
                        </div>
                      </article>
                    </div>
                     -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ====== NEWS ====== -->
  <section
    class="newsPulicationsBlock position-relative bg-light overflow-hidden pt-7 pb-4 pt-md-10 pb-md-4 pt-lg-16 pb-lg-10 pt-xl-22 pb-xl-16">
    <div class="container position-relative npbHolder">
      <div class="row">
        <div class="col-12 col-lg-3">
          <header class="headingHead pt-2 mb-7 mb-lg-0">
            <h2 class="fwSemiBold mb-2">Notícias e Publicações</h2>
            <p>
              As notícias sobre atividades recentes para pessoas
              necessitadas.
            </p>
            <a href="newsSingle"
              class="btn btn-outline-secondary bdrWidthAlter text-capitalize position-relative border-0 p-0 mt-5 btnXsMinWidth"
              data-hover="More News">
              <span class="d-block btnText">Mais notícias</span>
            </a>
          </header>
        </div>

        <div class="col-12 col-lg-9">
          <div class="row">
            <!-- SEM NOTICIAS -->
            <div class="col-12 col-md-7">
              <article class="ueEveColumn position-relative shadow bg-white mb-6">
                <div class="ueDescriptionWrap pt-5 pb-8 px-5">
                  <strong style="color: red" class="d-block mb-2">Sem noticias</strong>
                  <h3 class="h3Small fwMedium mb-3">
                    <a href="eventSingle">Não foram encontradas noticias no momento</a>
                  </h3>
                  <address>
                    <ul class="list-unstyled ueScheduleList">
                      <li>
                        <i class="icomoon-clock icn position-absolute"><span class="sr-only">icon</span></i>
                        xx:xxh - xx:xxh
                      </li>
                    </ul>
                  </address>
                </div>
              </article>
            </div>
            <!-- 
                  <div class="col-12 col-md-6 col-xl-4">
                    <article class="npbColumn shadow bg-white mb-6">
                      <div class="imgHolder position-relative">
                        <a href="javascript:void(0);">
                          <img
                            src="<?= urlProject(FOLDER_BASE . "/src/images/img13.jpg") ?>"
                            class="img-fluid w-100 d-block"
                            alt="image description"
                          />
                        </a>
                        <time
                          datetime="2011-01-12"
                          class="npbTimeTag font-weight-bold fontAlter position-absolute text-white px-2 py-1"
                          >08 Out 2023</time
                        >
                      </div>
                      <div class="npbDescriptionWrap px-5 pt-8 pb-5">
                        <strong
                          class="d-block npbcmWrap font-weight-normal mb-1"
                        >
                          <span class="mr-5">xxxx xxx xxx</span>
                          <i class="icomoon-chat"
                            ><span class="sr-only">icon</span></i
                          >
                          3
                        </strong>
                        <h3 class="fwSemiBold mb-6">
                          <a href="newsSingle"
                            >xxxxx xxxxx xxx xxxxxxxx xxx</a
                          >
                        </h3>
                        <a
                          href="newsSingle"
                          class="btnCr d-inline-block align-top fontAlter"
                          >Continue lendo
                          <i class="icomoon-arrowRight bcIcn ml-2 align-middle"
                            ><span class="sr-only">icon</span></i
                          ></a
                        >
                      </div>
                    </article>
                  </div>
                   -->
          </div>
        </div>
      </div>
    </div>
    <span class="npbBgPattern w-100 h-100 bgCover position-absolute inaccessible"
      style="background-image: url(<?= urlProject(FOLDER_BASE . "/src/images/bgPattern2.jpg") ?>)"></span>
  </section>

  <!-- ====== ÊNFASE ====== -->
  <section class="exploreHeightsBlock pt-4 pb-6 pb-md-9 pt-lg-7 pb-lg-14 pt-xl-11 pb-xl-20">
    <div class="container">
      <header class="headingHead text-center mb-12">
        <h2 class="fwSemiBold">Explore os Destaques de Angola</h2>
      </header>
    </div>
    <div class="row">
      <div class="echSliderWrap overflow-hidden w-100">
        <div class="echSlider mx-auto w-100">
          <!-- Monumento da Paz -->
          <div>
            <div class="col-12">
              <div class="echColumn d-block w-100 bgCover position-relative"
                style="background-image: url(<?= urlProject(FOLDER_BASE . "/src/images/img15.jpg") ?>)">
                <a href="images/img15.jpg"
                  class="echCountTag position-absolute fwSemiBold text-white px-3 py-1 lightbox" data-fancybox="true">
                  <i class="far fa-image icn"><span class="sr-only">icon</span></i>
                  6
                </a>
                <div class="echcCaptionWrap position-absolute w-100 text-white px-3 py-2 px-sm-5 py-sm-4">
                  <h3 class="mb-0 text-white">
                    <strong class="d-block font-weight-normal fontBase echCatTitle mb-1">Moxico</strong>
                    <span class="d-block">Monumento da Paz</span>
                  </h3>
                  <a href="images/img15.jpg" data-fancybox="true" class="d-inline-block"><i
                      class="rounded-circle icomoon-arrowRight d-flex align-items-center justify-content-center bg-white text-dark spanLinkGo"><span
                        class="sr-only">icon</span></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- Museu da Moeda -->
          <div>
            <div class="col-12">
              <div class="echColumn d-block w-100 bgCover position-relative"
                style="background-image: url(<?= urlProject(FOLDER_BASE . "/src/images/img17.jpg") ?>)">
                <a href="images/img17.jpg"
                  class="echCountTag position-absolute fwSemiBold text-white px-3 py-1 lightbox" data-fancybox="true">
                  <i class="far fa-image icn"><span class="sr-only">icon</span></i>
                  6
                </a>
                <div class="echcCaptionWrap position-absolute w-100 text-white px-3 py-2 px-sm-5 py-sm-4">
                  <h3 class="mb-0 text-white">
                    <strong class="d-block font-weight-normal fontBase echCatTitle mb-1">Luanda</strong>
                    <span class="d-block">Museu da Moeda</span>
                  </h3>
                  <a href="images/img17.jpg" data-fancybox="true" class="d-inline-block"><i
                      class="rounded-circle icomoon-arrowRight d-flex align-items-center justify-content-center bg-white text-dark spanLinkGo"><span
                        class="sr-only">icon</span></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- Baía de Luanda -->
          <div>
            <div class="col-12">
              <div class="echColumn d-block w-100 bgCover position-relative"
                style="background-image: url(<?= urlProject(FOLDER_BASE . "/src/images/img14.jpg") ?>)">
                <a href="images/img14.jpg"
                  class="echCountTag position-absolute fwSemiBold text-white px-3 py-1 lightbox" data-fancybox="true">
                  <i class="far fa-image icn"><span class="sr-only">icon</span></i>
                  6
                </a>
                <div class="echcCaptionWrap position-absolute w-100 text-white px-3 py-2 px-sm-5 py-sm-4">
                  <h3 class="mb-0 text-white">
                    <strong class="d-block font-weight-normal fontBase echCatTitle mb-1">Luanda</strong>
                    <span class="d-block">Baía de Luanda</span>
                  </h3>
                  <a href="images/img15.jpg" data-fancybox="true" class="d-inline-block"><i
                      class="rounded-circle icomoon-arrowRight d-flex align-items-center justify-content-center bg-white text-dark spanLinkGo"><span
                        class="sr-only">icon</span></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- Ilha de Luanda -->
          <div>
            <div class="col-12">
              <div class="echColumn d-block w-100 bgCover position-relative"
                style="background-image: url(<?= urlProject(FOLDER_BASE . "/src/images/img16.jpg") ?>)">
                <a href="images/img16.jpg"
                  class="echCountTag position-absolute fwSemiBold text-white px-3 py-1 lightbox" data-fancybox="true">
                  <i class="far fa-image icn"><span class="sr-only">icon</span></i>
                  6
                </a>
                <div class="echcCaptionWrap position-absolute w-100 text-white px-3 py-2 px-sm-5 py-sm-4">
                  <h3 class="mb-0 text-white">
                    <strong class="d-block font-weight-normal fontBase echCatTitle mb-1">Luanda</strong>
                    <span class="d-block">Ilha de Luanda</span>
                  </h3>
                  <a href="images/img16.jpg" data-fancybox="true" class="d-inline-block"><i
                      class="rounded-circle icomoon-arrowRight d-flex align-items-center justify-content-center bg-white text-dark spanLinkGo"><span
                        class="sr-only">icon</span></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- Serra da Leba -->
          <div>
            <div class="col-12">
              <div class="echColumn d-block w-100 bgCover position-relative"
                style="background-image: url(<?= urlProject(FOLDER_BASE . "/src/images/img18.jpg") ?>)">
                <a href="images/img18.jpg"
                  class="echCountTag position-absolute fwSemiBold text-white px-3 py-1 lightbox" data-fancybox="true">
                  <i class="far fa-image icn"><span class="sr-only">icon</span></i>
                  6
                </a>
                <div class="echcCaptionWrap position-absolute w-100 text-white px-3 py-2 px-sm-5 py-sm-4">
                  <h3 class="mb-0 text-white">
                    <strong class="d-block font-weight-normal fontBase echCatTitle mb-1">Huíla</strong>
                    <span class="d-block">Serra da Leba</span>
                  </h3>
                  <a href="images/img18.jpg" data-fancybox="true" class="d-inline-block"><i
                      class="rounded-circle icomoon-arrowRight d-flex align-items-center justify-content-center bg-white text-dark spanLinkGo"><span
                        class="sr-only">icon</span></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ====== EXPLORE SERVICES ====== -->
  <section class="meetCouncilBlock position-relative pt-7 pt-md-9 pt-lg-14 pt-xl-20 pb-6">
    <div class="container">
      <header class="headingHead text-center cdTitle mb-7 mb-md-13">
        <h2 class="fwSemiBold mb-4">Conheça a Equipe Consular</h2>
        <p>
          A equipe consular do consulado tem super poderes reais como
          administrador para liderar o mesmo.
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
                Vice Cônsul para o sector Migratório
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
                Vice Cônsul para o setor Comercial
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
                Vice Cônsul para o setor de apoio às Comunidades
              </h4>
              <hr class="mccSeprator mx-0 mt-4 mb-3" />
            </div>
          </article>
        </div>
      </div>

      <div class="col-12 col-sm-5 col-xl-7 d-sm-flex justify-content-sm-end">
        <a href="about"
          class="btn btn-dark text-capitalize position-relative border-0 p-0 mt-4 mt-sm-0 mb-sm-1 minWidthMedium"
          data-hover="Conhecer todos">
          <span class="d-block btnText">Conhecer todos</span>
        </a>
      </div>
    </div>
  </section>

  <!-- ====== Location ====== -->
  <div class="mapHolder position-relative py-10 py-md-15 py-xl-23">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="contactCard shadow position-relative bg-white px-3 py-5 px-sm-5 py-sm-10 px-md-10">
            <h2 class="fwSemiBold mb-8 h2vii">Ligue ou visite-nos.</h2>
            <h3 class="text-danger mb-6">Ligue: (+242) 05 052 32 88</h3>
            <address class="mb-0">
              <span class="mb-1 h5">Consulado Geral:</span>
              <p class="mb-6">
                <strong class="font-weight-normal">Rue de Bunda, Ponta Negra, República do Congo</strong>
              </p>
              <span class="mb-1 h5">Horário de Atendimento:</span>
              <time datetime="2011-01-12">09h30 - 13h30</time>
            </address>
          </div>
        </div>
      </div>
    </div>
    <div class="ctMapWrap cmwBg position-absolute w-100 h-100">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d993.9670003342771!2d11.8506404284708!3d-4.792694675376167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a60a5facddcfc09%3A0xcb0c0057a58eed06!2sEasy%20business%20center!5e0!3m2!1spt-BR!2sao!4v1682783396876!5m2!1spt-BR!2sao"
        width="100%" height="450" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
</main>