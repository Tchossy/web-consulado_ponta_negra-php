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
          <h1 class="text-white mb-2">Sector de Identificação</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrWhite rounded-0 border-0 p-0 fontAlter mb-0">
              <li class="breadcrumb-item">
                <a href="home.html">Inicio</a>
              </li>

              <li class="breadcrumb-item">
                <a href="services.html">Serviços</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Sector de Identificação
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
              <h2 class="fwSemiBold h2vii">Sector de Identificação</h2>
            </header>
            <p>
              O Sector de Identificação do Consulado é o sector responsável pela
              recolha dos dados dos cidadãos nacionais para a emissao do bilhete
              de identidade. O sector esforça-se para fornecer um serviço rápido
              e eficiente, ajudando a tornar o processo de identificação o mais
              simples. Nesta pagina, você encontrará informações úteis sobre os
              serviço que este sector presta, bem como os seus requisitos.
              Também fornecemos respostas a perguntas frequentes para ajudá-lo a
              entender melhor o processo de identificação.
            </p>
            <h3 class="fwSemiBold mb-4">Como solicitar os serviços</h3>
            <p>
              Para acessar aos serviços de identificação, deve seguir os
              seguintes passos:
            </p>
            <ul class="list-unstyled text-lDark">
              <li class="mb-4">
                1. <strong>Verifique os requisitos:</strong> Antes de solicitar
                qualquer serviço de idebtificação, verifique se você possui
                todos os documentos necessários e se cumpre os requisitos
                exigidos pelo Consulado.
              </li>
              <li class="mb-4">
                2. <strong>Agende um horário:</strong> Para solicitar os
                serviços de identificação, deve agendar um horário com
                antecedência. Faça login aqui no website e será disponibilizado
                uma página de agendamento.
              </li>
              <li class="mb-4">
                3. <strong>Preparo dos documentos:</strong> Reuna todos os
                documetos necessarários apresentado nos requisitos e garanta que
                todos eles estejam em conformidade.
              </li>
              <li class="mb-4">
                4. <strong>Compareça ao atendimento:</strong> No dia e horário
                agendado, compareça ao atendimento no Consulado pelo menos 5
                minutos antes da hora marcada. Lembre-se de levar todos os
                documentos originais necessários e o comprovante de pagamento,
                se aplicável.
              </li>
              <li class="mb-4">
                5. <strong>Retire o serviço solicitado:</strong> Após o
                processamento dos documentos e cumprimento das formalidades
                legais, você poderá levantar o seu documento no Consulado dentro
                do prazo estipulado.
              </li>
            </ul>

            <h3 class="fwSemiBold mb-4">Serviços do Sector de Identificação</h3>
            <p>
              O Sector de Identificação éo sector responsável por uma série de
              serviços essenciais relacionados aos documentos de identificação,
              nomeadamente:
            </p>
            <ul class="list-unstyled coDefaultList text-lDark">
              <li style="cursor: pointer; color: #0b0035" onMouseOver="this.style.color='#ff0000'"
                onMouseOut="this.style.color='#0b0035'" data-toggle="modal" data-target="#sectorIdentificacaoBIModal">
                Emissão de Bilhete de Identidade
              </li>
              <li style="cursor: pointer; color: #0b0035" onMouseOver="this.style.color='#ff0000'"
                onMouseOut="this.style.color='#0b0035'" data-toggle="modal"
                data-target="#sectorIdentificacaoRenovacaoBIModal">
                Renovação do Bilhete de identidade
              </li>
              <li style="cursor: pointer; color: #0b0035" onMouseOver="this.style.color='#ff0000'"
                onMouseOut="this.style.color='#0b0035'" data-toggle="modal"
                data-target="#sectorIdentificacao2ViaBIModal">
                2ª via do Bilhete de Identidade
              </li>
              <li style="cursor: pointer; color: #0b0035" onMouseOver="this.style.color='#ff0000'"
                onMouseOut="this.style.color='#0b0035'" data-toggle="modal"
                data-target="#sectorIdentificacaoAverbamentoModal">
                Averbamento
              </li>
              <li style="cursor: pointer; color: #0b0035" onMouseOver="this.style.color='#ff0000'"
                onMouseOut="this.style.color='#0b0035'" data-toggle="modal"
                data-target="#sectorIdentificacaoCriminalModal">
                Emissão do certificado do resgistro criminal
              </li>
            </ul>

            <!-- MODAL -->
            <div>
              <!-- Modal Emissão de Bilhete de Identidade   -->
              <div class="modal fade bd-example-modal-lg" id="sectorIdentificacaoBIModal" tabindex="-1" role="dialog"
                aria-labelledby="sectorIdentificacaoBIModal" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="sectorIdentificacaoBIModal">
                        Emissão de Bilhete de Identidade
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="modal-body">
                        <h6>
                          Para fazer a emissão de bilhete de identidade,
                          necessita dos seguintes documentos:
                        </h6>

                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">
                            • Assento de nascimento
                          </li>
                          <li class="list-group-item">
                            • BI válido dos progenitores
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
              <!-- Modal Renovação do Bilhete de identidade   -->
              <div class="modal fade bd-example-modal-lg" id="sectorIdentificacaoRenovacaoBIModal" tabindex="-1"
                role="dialog" aria-labelledby="sectorIdentificacaoRenovacaoBIModal" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="sectorIdentificacaoRenovacaoBIModal">
                        Renovação do Bilhete de identidade
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="modal-body">
                        <h6>
                          Para fazer a renovação de bilhete de identidade,
                          necessita dos seguintes documentos:
                        </h6>

                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">
                            • Original ou cópia do bilhete de identidade
                            caducado
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
              <!-- Modal 2ª via do Bilhete de Identidade   -->
              <div class="modal fade bd-example-modal-lg" id="sectorIdentificacao2ViaBIModal" tabindex="-1"
                role="dialog" aria-labelledby="sectorIdentificacao2ViaBIModal" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="sectorIdentificacao2ViaBIModal">
                        2ª via do Bilhete de Identidade
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="modal-body">
                        <h6>
                          Para fazer a 2ª via do bilhete de identidade,
                          necessita dos seguintes documentos:
                        </h6>

                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">
                            • Cópia do Bilhete de Identidade extraviado
                          </li>
                          <li class="list-group-item">
                            • Formulário de pedido de segunda via do bilhete de
                            identidade
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
              <!-- Modal Averbamento   -->
              <div class="modal fade bd-example-modal-lg" id="sectorIdentificacaoAverbamentoModal" tabindex="-1"
                role="dialog" aria-labelledby="sectorIdentificacaoAverbamentoModal" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="sectorIdentificacaoAverbamentoModal">
                        Averbamento
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="modal-body">
                        <h6>
                          Para fazer o averbamento, necessita dos seguintes
                          documentos:
                        </h6>

                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">
                            • Original do Bilhete de Identidade válido
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
              <!-- Modal Emissão de Registo Criminal   -->
              <div class="modal fade bd-example-modal-lg" id="sectorIdentificacaoCriminalModal" tabindex="-1"
                role="dialog" aria-labelledby="sectorIdentificacaoCriminalModal" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="sectorIdentificacaoCriminalModal">
                        Emissão de Registo Criminal
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="modal-body">
                        <h6>
                          Para fazer o emissão de registo criminal, necessita
                          dos seguintes documentos:
                        </h6>

                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">
                            • Original do bilhete de identidade válido
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
            </div>

            <h3 class="fwSemiBold mb-4 mt-8">Preços Notarial</h3>

            <!-- TABLE -->
            <div class="table-data">
              <div class="order">
                <table>
                  <thead>
                    <tr>
                      <td><strong>Ord</strong></td>
                      <td><strong>Descrição</strong></td>
                      <td><strong>Montante FCFA</strong></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Bilhete de identidade pela primeira vez</td>
                      <td>Isento</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Bilhete de identidade renovação</td>
                      <td>1.520 </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Bilhete de identidade segunda vez</td>
                      <td>3.828 </td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Averbamento</td>
                      <td>1.520 </td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>
                        Averbamento requerido após 60 dias (estado civil)
                      </td>
                      <td>15.520 </td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>
                        Pedido de certificado de registo criminal (fins
                        públicos)
                      </td>
                      <td>1.550 </td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>
                        Pedido de certificado de registo criminal (fins
                        particulares)
                      </td>
                      <td>5.720 </td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td>
                        Certificado de registo criminal (fins públicos)
                      </td>
                      <td>7.480 </td>
                    </tr>
                    <tr>
                      <td>9</td>
                      <td>
                        Pedido de certificado de registo criminal (fins
                        particulares)
                      </td>
                      <td>8.489 </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <!-- 
                  <h3 class="fwSemiBold mb-4 mt-8">
                    Empréstimos comerciais e informações sobre taxas de juros:
                  </h3>
                  <p>
                    Thomas Edison pode ter estado por trás da invenção do
                    lâmpada elétrica, mas ele não trabalhava sozinho. Edison
                    trabalhou ao lado de parceiros, tanto financeiros como
                    comerciais, para tirar suas invenções do chão.
                  </p>
                  <ul class="listDefault list-unstyled">
                    <li>
                      Uma relação de três partes - a parte responsável que
                      prepara a informação a assegurar; o Independente
                      profissional que assegura a informação.
                    </li>
                    <li>
                      Objeto acordado - no caso de uma auditoria, este seriam as
                      contas anuais de uma empresa. No entanto poderia ser quase
                      qualquer coisa na prática - os sistemas operado por uma
                      loteria estadual, uma empresa de gases de efeito estufa
                      emissões, controles sobre uma cadeia de suprimentos, etc.
                    </li>
                    <li>
                      Sistemas operados por uma loteria estadual, uma empresa
                      emissões de gases de efeito estufa, controles.
                    </li>
                  </ul>
                  <div class="my-6 my-md-9 my-lg-11">
                    <ul
                      class="nav nav-tabs dcsTabset fontAlter"
                      id="dcsTab"
                      role="tablist"
                    >
                      <li class="nav-item">
                        <a
                          class="nav-link active"
                          id="identified-tab"
                          data-toggle="tab"
                          href="#identified"
                          role="tab"
                          aria-selected="true"
                          >Identificado</a
                        >
                      </li>
                      <li class="nav-item">
                        <a
                          class="nav-link"
                          id="consulting-tab"
                          data-toggle="tab"
                          href="#consulting"
                          role="tab"
                          aria-selected="false"
                          >Consultando</a
                        >
                      </li>
                      <li class="nav-item">
                        <a
                          class="nav-link"
                          id="produce-tab"
                          data-toggle="tab"
                          href="#produce"
                          role="tab"
                          aria-selected="false"
                          >Produzir</a
                        >
                      </li>
                    </ul>
                    <div class="tab-content dcsTabContent" id="dcsTabContent">
                      <div
                        class="tab-pane fade show active"
                        id="identified"
                        role="tabpanel"
                        aria-labelledby="identified-tab"
                      >
                        <div class="overflow-hidden px-3 px-md-6 pt-5 pb-1">
                          <p>
                            Para ajudar os clientes a bloquear ainda mais o sol,
                            considere oferecer serviços de tingimento de
                            janelas. Desde as janelas coloridas são um pouco
                            mais escuras do que o normal janelas, elas permitem
                            a entrada de menos luz solar. Eles também fazem é
                            mais difícil ver dentro do carro do lado de fora,
                            dando aos motoristas alguma privacidade. Tenha em
                            mente que alguns áreas têm leis contra - como as
                            janelas escuras rotina de fazenda sábio todos os
                            trabalhos de rendimento feitos a qualquer metro
                            ressoar pode ser, então você deve verificar as leis
                            em seu área antes de prosseguir.
                          </p>
                        </div>
                      </div>
                      <div
                        class="tab-pane fade"
                        id="consulting"
                        role="tabpanel"
                        aria-labelledby="consulting-tab"
                      >
                        <div class="overflow-hidden px-3 px-md-6 pt-5 pb-1">
                          <p>
                            Para ajudar os clientes a bloquear ainda mais o sol,
                            considere oferecer serviços de tingimento de
                            janelas. Desde as janelas coloridas são um pouco
                            mais escuras do que o normal janelas, elas permitem
                            a entrada de menos luz solar. Eles também fazem é
                            mais difícil ver dentro do carro do lado de fora,
                            dando aos motoristas alguma privacidade. Tenha em
                            mente que alguns áreas têm leis contra - como as
                            janelas escuras rotina de fazenda sábio todos os
                            trabalhos de rendimento feitos a qualquer metro
                            ressoar pode ser, então você deve verificar as leis
                            em seu área antes de prosseguir.
                          </p>
                        </div>
                      </div>
                      <div
                        class="tab-pane fade"
                        id="produce"
                        role="tabpanel"
                        aria-labelledby="produce-tab"
                      >
                        <div class="overflow-hidden px-3 px-md-6 pt-5 pb-1">
                          <p>
                            Para ajudar os clientes a bloquear ainda mais o sol,
                            considere oferecer serviços de tingimento de
                            janelas. Desde as janelas coloridas são um pouco
                            mais escuras do que o normal janelas, elas permitem
                            a entrada de menos luz solar. Eles também fazem é
                            mais difícil ver dentro do carro do lado de fora,
                            dando aos motoristas alguma privacidade. Tenha em
                            mente que alguns áreas têm leis contra - como as
                            janelas escuras rotina de fazenda sábio todos os
                            trabalhos de rendimento feitos a qualquer metro
                            ressoar pode ser, então você deve verificar as leis
                            em seu área antes de prosseguir.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div> 
                -->

            <!-- DOCS -->
            <!-- 
                  <h3 class="fwSemiBold mb-5">Baixar Documentos</h3>
                  <div class="row">
                    <div class="col-12 col-sm-6">
                      <div
                        class="drItemRow position-relative d-flex px-3 px-md-6 py-3 mb-6"
                      >
                        <span class="icnWrap flex-shrink-0 pt-1 mr-3">
                          <img
                            src="images/icopdf.png"
                            class="img-fluid"
                            alt="icon"
                          />
                        </span>
                        <div class="descrWrap">
                          <h4 class="fontBase font-weight-normal mb-1">
                            <a
                              href="pdf/Formulários pedidos de trancrições- Sect. Notarial.pdf"
                              >Atualização do briefing de transporte para o
                              ano</a
                            >
                          </h4>
                          <strong class="d-block fileSize font-weight-normal"
                            >PDF
                          </strong>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div
                        class="drItemRow position-relative d-flex px-3 px-md-6 py-3 mb-6"
                      >
                        <span class="icnWrap flex-shrink-0 pt-1 mr-3">
                          <img
                            src="images/icopdf.png"
                            class="img-fluid"
                            alt="icon"
                          />
                        </span>
                        <div class="descrWrap">
                          <h4 class="fontBase font-weight-normal mb-1">
                            <a
                              href="pdf/Formulários pedidos de trancrições- Sect. Notarial.pdf"
                              >Atualização do briefing de transporte para o
                              ano</a
                            >
                          </h4>
                          <strong class="d-block fileSize font-weight-normal"
                            >PDF
                          </strong>
                        </div>
                      </div>
                    </div>
                  </div>
                   -->
            <hr class="mt-12 mb-7" />
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

        <!-- FAQ -->
        <!-- 
              <div
                class="accordion faqAccordion mb-8 mb-md-12"
                id="ctdepartsAccordion"
              >
                <div class="ctaccRow mb-4">
                  <div
                    class="collapse ctaccSlide"
                    id="ctr1"
                    data-parent="#ctdepartsAccordion"
                  >
                    <div class="overflow-hidden px-5 pb-1">
                      <p>
                        Uma das adições mais comuns que as pessoas fazem seus
                        carros, a fim de manter o calor do lado de fora é um
                        viseira do pára-brisa. Os carros ficam quentes no verão
                        porque a luz solar direta entra através do janelas. É
                        por isso que estacionamos na sombra sempre que pudermos.
                        Desde o maior para-brisa.Na verdade, o vento está se
                        tornando barato o suficiente em muitos lugares nos EUA e
                        em todo o mundo para competir de forma eficaz com
                        combustíveis fósseis.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="ctaccRow mb-4">
                  <div class="ctaccOpener">
                    <a
                      class="fontAlter fwMedium"
                      href="#ctr2"
                      data-toggle="collapse"
                      aria-expanded="true"
                      aria-controls="ctr2"
                      >Como posso entrar em contato com os inspetores de
                      construção?</a
                    >
                  </div>
                  <div
                    class="collapse show ctaccSlide"
                    id="ctr2"
                    data-parent="#ctdepartsAccordion"
                  >
                    <div class="overflow-hidden px-5 pb-1">
                      <p>
                        Bolsa tote vibrante perfeita Ásia-Pacífico o melhor
                        apartamento pintxos de soft power intrincados brancos
                        sob medida conversa Marylebone bonito icônico suíço.
                        Sofisticado premium soft power Gaggenau Marylebone.
                        Escritórios de alegria Premium Helsinki. Boutique
                        Ettinger aconchegante e artesanal da Lufthansa
                        internacional Cingapura Marylebone Tsutaya Helsinque.
                        Pintxos impecáveis icônicos inteligentes.
                      </p>
                      <p>
                        Fast Lane Shinkansen premium artesanal global. Washlet
                        sob medida boletim de conversa. Comme des Garçons
                        Ásia-Pacífico vibrante, boutique perfeita guarda-roupa
                        bonito.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="ctaccRow mb-4">
                  <div class="ctaccOpener">
                    <a
                      class="fontAlter fwMedium"
                      href="#ctr3"
                      data-toggle="collapse"
                      aria-expanded="false"
                      aria-controls="ctr3"
                      >Estou recebendo multas de estacionamento em meu nome. O
                      que posso fazer?</a
                    >
                  </div>
                  <div
                    class="collapse ctaccSlide"
                    id="ctr3"
                    data-parent="#ctdepartsAccordion"
                  >
                    <div class="overflow-hidden px-5 pb-1">
                      <p>
                        Uma das adições mais comuns que as pessoas fazem seus
                        carros, a fim de manter o calor do lado de fora é um
                        viseira do pára-brisa. Os carros ficam quentes no verão
                        porque a luz solar direta entra através do janelas. É
                        por isso que estacionamos na sombra sempre que pudermos.
                        Desde o maior para-brisa.Na verdade, o vento está se
                        tornando barato o suficiente em muitos lugares nos EUA e
                        em todo o mundo para competir de forma eficaz com
                        combustíveis fósseis.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="ctaccRow mb-4">
                  <div class="ctaccOpener">
                    <a
                      class="fontAlter fwMedium"
                      href="#ctr4"
                      data-toggle="collapse"
                      aria-expanded="false"
                      aria-controls="ctr4"
                      >Por que alguém pode culpar ou evitar indivíduos e
                      grupos?</a
                    >
                  </div>
                  <div
                    class="collapse ctaccSlide"
                    id="ctr4"
                    data-parent="#ctdepartsAccordion"
                  >
                    <div class="overflow-hidden px-5 pb-1">
                      <p>
                        Uma das adições mais comuns que as pessoas fazem seus
                        carros, a fim de manter o calor do lado de fora é um
                        viseira do pára-brisa. Os carros ficam quentes no verão
                        porque a luz solar direta entra através do janelas. É
                        por isso que estacionamos na sombra sempre que pudermos.
                        Desde o maior para-brisa.Na verdade, o vento está se
                        tornando barato o suficiente em muitos lugares nos EUA e
                        em todo o mundo para competir de forma eficaz com
                        combustíveis fósseis.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="ctaccRow mb-4">
                  <div class="ctaccOpener">
                    <a
                      class="fontAlter fwMedium"
                      href="#ctr5"
                      data-toggle="collapse"
                      aria-expanded="false"
                      aria-controls="ctr5"
                      >Quanto tempo tenho para pagar uma multa de estacionamento
                      antes que ela duplique?</a
                    >
                  </div>
                  <div
                    class="collapse ctaccSlide"
                    id="ctr5"
                    data-parent="#ctdepartsAccordion"
                  >
                    <div class="overflow-hidden px-5 pb-1">
                      <p>
                        Uma das adições mais comuns que as pessoas fazem seus
                        carros, a fim de manter o calor do lado de fora é um
                        viseira do pára-brisa. Os carros ficam quentes no verão
                        porque a luz solar direta entra através do janelas. É
                        por isso que estacionamos na sombra sempre que pudermos.
                        Desde o maior para-brisa.Na verdade, o vento está se
                        tornando barato o suficiente em muitos lugares nos EUA e
                        em todo o mundo para competir de forma eficaz com
                        combustíveis fósseis.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="ctaccRow mb-4">
                  <div class="ctaccOpener">
                    <a
                      class="fontAlter fwMedium"
                      href="#ctr6"
                      data-toggle="collapse"
                      aria-expanded="false"
                      aria-controls="ctr6"
                      >Recebi um aviso de cobrança, mas paguei o boleto
                      antecipadamente. Por que eu recebi?</a
                    >
                  </div>
                  <div
                    class="collapse ctaccSlide"
                    id="ctr6"
                    data-parent="#ctdepartsAccordion"
                  >
                    <div class="overflow-hidden px-5 pb-1">
                      <p>
                        Uma das adições mais comuns que as pessoas fazem seus
                        carros, a fim de manter o calor do lado de fora é um
                        viseira do pára-brisa. Os carros ficam quentes no verão
                        porque a luz solar direta entra através do janelas. É
                        por isso que estacionamos na sombra sempre que pudermos.
                        Desde o maior para-brisa.Na verdade, o vento está se
                        tornando barato o suficiente em muitos lugares nos EUA e
                        em todo o mundo para competir de forma eficaz com
                        combustíveis fósseis.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="ctaccRow mb-4">
                  <div class="ctaccOpener">
                    <a
                      class="fontAlter fwMedium"
                      href="#ctr7"
                      data-toggle="collapse"
                      aria-expanded="false"
                      aria-controls="ctr7"
                      >Meu carro ainda está no depósito de automóveis. Eu tenho
                      que solicitar uma audiência?
                    </a>
                  </div>
                  <div
                    class="collapse ctaccSlide"
                    id="ctr7"
                    data-parent="#ctdepartsAccordion"
                  >
                    <div class="overflow-hidden px-5 pb-1">
                      <p>
                        Uma das adições mais comuns que as pessoas fazem seus
                        carros, a fim de manter o calor do lado de fora é um
                        viseira do pára-brisa. Os carros ficam quentes no verão
                        porque a luz solar direta entra através do janelas. É
                        por isso que estacionamos na sombra sempre que pudermos.
                        Desde o maior para-brisa.Na verdade, o vento está se
                        tornando barato o suficiente em muitos lugares nos EUA e
                        em todo o mundo para competir de forma eficaz com
                        combustíveis fósseis.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
               -->
      </div>
    </div>
  </article>
</main>