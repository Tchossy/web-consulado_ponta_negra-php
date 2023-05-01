<?php $this->layout('_theme') ?>

<main>
  <header class="pageMainHead d-flex position-relative bgCover w-100 text-white"
    style="background-image: url(<?= urlProject(FOLDER_BASE . "/src/images/SectorComunitario.jpg") ?>)">
    <div class="alignHolder d-flex w-100 align-items-center">
      <div class="align w-100 position-relative">
        <div class="container">
          <h1 class="text-white mb-2">Sector de Apoio à Comunidade</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrWhite rounded-0 border-0 p-0 fontAlter mb-0">
              <li class="breadcrumb-item">
                <a href="home.html">Inicio</a>
              </li>

              <li class="breadcrumb-item">
                <a href="services.html">Serviços</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Sector de Apoio à Comunidade
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <article class="dsSingleContent pt-7 pb-2 pt-md-10 pb-md-1 pt-lg-16 pb-lg-10 pt-xl-21 pb-xl-16">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-8 col-xl-9 mb-6">
          <div class="pr-xl-14">
            <header class="fzMedium mb-6">
              <h2 class="fwSemiBold h2vii">Sector de Apoio à Comunidade</h2>
            </header>
            <p>
              O Sector de Apoio à Comunidade é a área do Consulado, responsável
              por fornecer serviços e assistência social aos cidadãos nacionais
              que residem em Ponta Negra e em Kouilou. O objetivo é ajudar a
              tornar a experiência de viver no exterior o mais fácil e tranquila
              possível.
            </p>

            <p>
              Nesta página, você encontrará informações úteis sobre os serviços
              disponíveis para a comunidade, bem como sobre como entrar em
              contacto connosco em caso de necessidade. Também fornecemos
              respostas a perguntas frequentes para ajudá-lo a entender melhor
              os nossos serviços.
            </p>

            <h3 class="fwSemiBold mb-4">Como solicitar os serviços</h3>
            <p>
              Para solicitar os serviços notariais oferecidos pela embaixada, é
              necessário seguir os seguintes passos:
            </p>
            <ul class="list-unstyled text-lDark">
              <li class="mb-4">
                1. <strong>Verifique os requisitos:</strong> Antes de solicitar
                qualquer tipo de assistência social, assegure-se que possui
                todos os documentos necessários e que reune os requisitos
                exigidos pelo Consulado.
              </li>
              <li class="mb-4">
                2. <strong>Agende um horário:</strong>Para solicitar os serviços
                de assitência social, é necessário agendar um horário com
                antecedência. Faça login aqui no website e será disponibilizado
                uma página de agendamento.
              </li>
              <li class="mb-4">
                3. <strong>Preparo dos documentos:</strong> Reúna todos os
                documentos necessários apresentado nos requisitos e garanta que
                todos eles estejam em conformidade.
              </li>
              <li class="mb-4">
                4. <strong>Compareça ao atendimento:</strong> No dia e horário
                agendado, compareça ao atendimento no Consulado, com pelo menos
                5 minutos antes da hora marcada. Lembre-se de levar todos os
                documentos originais necessários e o comprovante de pagamento,
                se aplicável.
              </li>
              <li class="mb-4">
                5. <strong>Retire o serviço solicitado:</strong> Após o
                processamento dos documentos e cumprimento das formalidades
                legais, você poderá rcepcionar o documento solicitado no
                Consulado dentro do prazo estipulado.
              </li>
            </ul>

            <h3 class="fwSemiBold mb-4">
              Serviços do Sector de Apoio à Comunidade
            </h3>
            <p>
              Para cada serviço disponível, fornecemos informações detalhadas
              sobre como solicitar assistência e os documentos necessários.
            </p>
            <ul class="list-unstyled coDefaultList text-lDark">
              <li style="cursor: pointer; color: #0b0035" onMouseOver="this.style.color='#ff0000'"
                onMouseOut="this.style.color='#0b0035'" data-toggle="modal" data-target="#registoConsularModal">
                Registo Consular
              </li>
              <li style="cursor: pointer; color: #0b0035" onMouseOver="this.style.color='#ff0000'"
                onMouseOut="this.style.color='#0b0035'" data-toggle="modal"
                data-target="#segundaViaCartaoConsularModal">
                Pedido de segunda via do cartão consular
              </li>
              <li style="cursor: pointer; color: #0b0035" onMouseOver="this.style.color='#ff0000'"
                onMouseOut="this.style.color='#0b0035'" data-toggle="modal" data-target="#servicoTraducaoModal">
                Serviços de Tradução
              </li>
            </ul>

            <div>
              <!-- Modal Registo Consular   -->
              <div class="modal fade bd-example-modal-lg" id="registoConsularModal" tabindex="-1" role="dialog"
                aria-labelledby="registoConsularModal" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="registoConsularModal">
                        Registo Consular
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="modal-body">
                        <h6>
                          Para fazer o Registo Consular, necessita dos seguintes
                          documentos:
                        </h6>

                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">
                            • Cópia do Bilhete de Identidade
                          </li>
                          <li class="list-group-item">
                            • 3 Foto tipo passa fundo branco
                          </li>
                        </ul>

                        <a href="<?= urlProject("setor/setor_apoio_comunidade/form/form_apoio_comunidade_registro_consular") ?>"
                          class="btn btnTheme btn-sm mt-4 font-weight-bold text-capitalize position-relative border-0 p-0"
                          data-hover="Preencher formulario">
                          <span class="d-block btnText">Preencher formulário</span>
                        </a>
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
              <!-- Modal Pedido de segunda via do cartão consular   -->
              <div class="modal fade bd-example-modal-lg" id="segundaViaCartaoConsularModal" tabindex="-1" role="dialog"
                aria-labelledby="segundaViaCartaoConsularModal" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="segundaViaCartaoConsularModal">
                        Pedido de segunda via do cartão consular
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="modal-body">
                        <h6>
                          Para fazer o Registo Consular, necessita dos seguintes
                          documentos:
                        </h6>

                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">
                            • Original ou copia do cartão e do bilhete de
                            identidade
                          </li>
                          <li class="list-group-item">
                            • 2 Foto tipo passa fundo branco
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
              <!-- Modal Serviços de Tradução   -->
              <div class="modal fade bd-example-modal-lg" id="servicoTraducaoModal" tabindex="-1" role="dialog"
                aria-labelledby="servicoTraducaoModal" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="servicoTraducaoModal">
                        Serviços de Tradução
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="modal-body">
                        <h6>
                          Para fazer o serviços de tradução, necessita dos
                          seguintes documentos:
                        </h6>

                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Serviços de Tradução</li>
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
            </div>

            <h3 class="fwSemiBold mb-4 mt-8">Como Solicitar Assistência:</h3>
            <p>
              Para solicitar assistência, entre em contacto connosco por esta
              via, por telefone ou por e-mail. Por favor, forneça informações
              detalhadas sobre a sua situação para que possamos fornecer a ajuda
              necessária.
            </p>
          </div>
        </div>

        <div class="col-12 col-lg-4 col-xl-3 mb-6">
          <aside class="dscSidebar pt-1 ml-xl-n5">
            <div class="widget mb-6 mb-lg-10 widgetHelp bg-lDark pt-5 px-6 pb-8 position-relative">
              <i class="icnWrap icomoon-chatq text-white d-block mb-3"><span class="sr-only">icon</span></i>
              <h3 class="h3Medium text-white mb-2">Precisa de ajuda?</h3>
              <p>
                Aqui você pode obter a resposta perfeita para o seu problema.
              </p>
              <a href="contact-1.html"
                class="btn btnTheme btn-sm font-weight-bold text-capitalize position-relative border-0 p-0"
                data-hover="Contact now">
                <span class="d-block btnText">Contate agora</span>
              </a>
              <i class="whWatermarkIcn icomoon-helpc position-absolute"><span class="sr-only">icon</span></i>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </article>
</main>