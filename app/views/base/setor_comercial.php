<?php $this->layout('_theme') ?>

<main>
  <header class="pageMainHead d-flex position-relative bgCover w-100 text-white"
    style="background-image: url(<?= urlProject(FOLDER_BASE . "/src/images/SectorComercial.jpg") ?>)">
    <div class="alignHolder d-flex w-100 align-items-center">
      <div class="align w-100 position-relative">
        <div class="container">
          <h1 class="text-white mb-2">Sector Comercial</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrWhite rounded-0 border-0 p-0 fontAlter mb-0">
              <li class="breadcrumb-item">
                <a href="home.html">Inicio</a>
              </li>

              <li class="breadcrumb-item">
                <a href="services.html">Serviços</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Sector Comercial
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
              <h2 class="fwSemiBold h2vii">Sector Comercial</h2>
            </header>
            <!-- <p>
              O setor notarial é uma área do direito que se dedica à prática de
              atos e procedimentos relacionados a documentos legais. Os serviços
              notariais desempenham um papel importante na garantia da segurança
              jurídica e na proteção dos direitos dos cidadãos.
            </p> -->

            <h3 class="fwSemiBold mb-4">Como solicitar os serviços</h3>
            <p>
              Para solicitar os serviços notariais oferecidos pela embaixada, é
              necessário seguir os seguintes passos:
            </p>
            <ul class="list-unstyled text-lDark">
              <li class="mb-4">
                1. <strong>Verifique os requisitos:</strong> Antes de solicitar
                qualquer serviço notarial, verifique se você possui todos os
                documentos necessários e se cumpre os requisitos exigidos pela
                embaixada.
              </li>
              <li class="mb-4">
                2. <strong>Agende um horário:</strong> Para solicitar os
                serviços notariais, é necessário agendar um horário com
                antecedência. Faça login aqui no website e será disponibilizado
                uma paguina de agendamento.
              </li>
              <li class="mb-4">
                3. <strong>Envie os documentos:</strong> Envie os documentos
                necessários para a embaixada antes do seu atendimento, para que
                o setor notarial possa verificar a documentação e preparar o
                serviço solicitado.
              </li>
              <li class="mb-4">
                4. <strong>Compareça ao atendimento:</strong> No dia e horário
                agendado, compareça ao atendimento na embaixada. Lembre-se de
                levar todos os documentos originais necessários e comprovante de
                pagamento, se aplicável.
              </li>
              <li class="mb-4">
                5. <strong>Retire o serviço solicitado:</strong> Após o
                processamento dos documentos e cumprimento das formalidades
                legais, você poderá retirar o serviço solicitado na embaixada
                dentro do prazo estipulado.
              </li>
            </ul>

            <h3 class="fwSemiBold mb-4">Serviços do Sector Comercial</h3>
            <p>
              O setor notarial é responsável por uma série de serviços
              essenciais relacionados a documentos legais. Os serviços notariais
              oferecidos pela embaixada proporcionam a segurança jurídica
              necessária para o cumprimento das formalidades legais. Com ampla
              experiência e profissionalismo, a equipe do setor notarial da
              embaixada está sempre pronta para oferecer um atendimento de
              excelência e garantir a satisfação dos seus clientes
            </p>
            <!--             
            <ul class="list-unstyled coDefaultList text-lDark">
              <li style="cursor: pointer; color: #0b0035" onMouseOver="this.style.color='#ff0000'"
                onMouseOut="this.style.color='#0b0035'" data-toggle="modal" data-target="#sectorNotoriaModal">
                Registo de nascimento
              </li>
              <li style="cursor: pointer; color: #0b0035" onMouseOver="this.style.color='#ff0000'"
                onMouseOut="this.style.color='#0b0035'" data-toggle="modal" data-target="#sectorNotoriaModal">
                Registo de casamento
              </li>
              <li style="cursor: pointer; color: #0b0035" onMouseOver="this.style.color='#ff0000'"
                onMouseOut="this.style.color='#0b0035'" data-toggle="modal" data-target="#sectorNotoriaModal">
                Registo de óbito
              </li>
              <li style="cursor: pointer; color: #0b0035" onMouseOver="this.style.color='#ff0000'"
                onMouseOut="this.style.color='#0b0035'" data-toggle="modal" data-target="#sectorNotoriaModal">
                Transcrição de assentos
              </li>
              <li style="cursor: pointer; color: #0b0035" onMouseOver="this.style.color='#ff0000'"
                onMouseOut="this.style.color='#0b0035'" data-toggle="modal" data-target="#sectorNotoriaModal">
                Autenticação de documentos
              </li>
              <li style="cursor: pointer; color: #0b0035" onMouseOver="this.style.color='#ff0000'"
                onMouseOut="this.style.color='#0b0035'" data-toggle="modal" data-target="#sectorNotoriaModal">
                Reconhecimento de assinaturas.
              </li>
            </ul> -->

            <div>
              <!-- Modal Registo de nascimento   -->
              <div class="modal fade bd-example-modal-lg" id="sectorNotoriaModal" tabindex="-1" role="dialog"
                aria-labelledby="sectorNotoriaModal" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="sectorNotoriaModal">
                        Registo de nascimento
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="modal-body">
                        <h6>
                          Para fazer o registo de nascimento, necessita dos
                          seguintes documentos:
                        </h6>

                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">
                            - Registo de nascimento
                          </li>
                          <li class="list-group-item">
                            - Registo de casamento
                          </li>
                          <li class="list-group-item">- Registo de óbito</li>
                          <li class="list-group-item">
                            - Transcrição de assentos
                          </li>
                          <li class="list-group-item">
                            - Autenticação de documentos
                          </li>
                          <li class="list-group-item">
                            - Reconhecimento de assinaturas.
                          </li>
                        </ul>

                        <a href="formNotorio.html"
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
            </div>
            <!-- 
            <h3 class="fwSemiBold mb-4 mt-8">
              Empréstimos comerciais e informações sobre taxas de juros:
            </h3>
            <p>
              Thomas Edison pode ter estado por trás da invenção do lâmpada
              elétrica, mas ele não trabalhava sozinho. Edison trabalhou ao lado
              de parceiros, tanto financeiros como comerciais, para tirar suas
              invenções do chão.
            </p>
            <ul class="listDefault list-unstyled">
              <li>
                Uma relação de três partes - a parte responsável que prepara a
                informação a assegurar; o Independente profissional que assegura
                a informação.
              </li>
              <li>
                Objeto acordado - no caso de uma auditoria, este seriam as
                contas anuais de uma empresa. No entanto poderia ser quase
                qualquer coisa na prática - os sistemas operado por uma loteria
                estadual, uma empresa de gases de efeito estufa emissões,
                controles sobre uma cadeia de suprimentos, etc.
              </li>
              <li>
                Sistemas operados por uma loteria estadual, uma empresa emissões
                de gases de efeito estufa, controles.
              </li>
            </ul>
            <div class="my-6 my-md-9 my-lg-11">
              <ul class="nav nav-tabs dcsTabset fontAlter" id="dcsTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="identified-tab" data-toggle="tab" href="#identified" role="tab" aria-selected="true">Identificado</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="consulting-tab" data-toggle="tab" href="#consulting" role="tab" aria-selected="false">Consultando</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="produce-tab" data-toggle="tab" href="#produce" role="tab" aria-selected="false">Produzir</a>
                </li>
              </ul>
              <div class="tab-content dcsTabContent" id="dcsTabContent">
                <div class="tab-pane fade show active" id="identified" role="tabpanel" aria-labelledby="identified-tab">
                  <div class="overflow-hidden px-3 px-md-6 pt-5 pb-1">
                    <p>
                      Para ajudar os clientes a bloquear ainda mais o sol,
                      considere oferecer serviços de tingimento de janelas.
                      Desde as janelas coloridas são um pouco mais escuras do
                      que o normal janelas, elas permitem a entrada de menos luz
                      solar. Eles também fazem é mais difícil ver dentro do
                      carro do lado de fora, dando aos motoristas alguma
                      privacidade. Tenha em mente que alguns áreas têm leis
                      contra - como as janelas escuras rotina de fazenda sábio
                      todos os trabalhos de rendimento feitos a qualquer metro
                      ressoar pode ser, então você deve verificar as leis em seu
                      área antes de prosseguir.
                    </p>
                  </div>
                </div>
                <div class="tab-pane fade" id="consulting" role="tabpanel" aria-labelledby="consulting-tab">
                  <div class="overflow-hidden px-3 px-md-6 pt-5 pb-1">
                    <p>
                      Para ajudar os clientes a bloquear ainda mais o sol,
                      considere oferecer serviços de tingimento de janelas.
                      Desde as janelas coloridas são um pouco mais escuras do
                      que o normal janelas, elas permitem a entrada de menos luz
                      solar. Eles também fazem é mais difícil ver dentro do
                      carro do lado de fora, dando aos motoristas alguma
                      privacidade. Tenha em mente que alguns áreas têm leis
                      contra - como as janelas escuras rotina de fazenda sábio
                      todos os trabalhos de rendimento feitos a qualquer metro
                      ressoar pode ser, então você deve verificar as leis em seu
                      área antes de prosseguir.
                    </p>
                  </div>
                </div>
                <div class="tab-pane fade" id="produce" role="tabpanel" aria-labelledby="produce-tab">
                  <div class="overflow-hidden px-3 px-md-6 pt-5 pb-1">
                    <p>
                      Para ajudar os clientes a bloquear ainda mais o sol,
                      considere oferecer serviços de tingimento de janelas.
                      Desde as janelas coloridas são um pouco mais escuras do
                      que o normal janelas, elas permitem a entrada de menos luz
                      solar. Eles também fazem é mais difícil ver dentro do
                      carro do lado de fora, dando aos motoristas alguma
                      privacidade. Tenha em mente que alguns áreas têm leis
                      contra - como as janelas escuras rotina de fazenda sábio
                      todos os trabalhos de rendimento feitos a qualquer metro
                      ressoar pode ser, então você deve verificar as leis em seu
                      área antes de prosseguir.
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
                <div class="drItemRow position-relative d-flex px-3 px-md-6 py-3 mb-6">
                  <span class="icnWrap flex-shrink-0 pt-1 mr-3">
                    <img src="images/icopdf.png" class="img-fluid" alt="icon" />
                  </span>
                  <div class="descrWrap">
                    <h4 class="fontBase font-weight-normal mb-1">
                      <a href="pdf/Formulários pedidos de trancrições- Sect. Notarial.pdf">Atualização do briefing de
                        transporte para o ano</a>
                    </h4>
                    <strong class="d-block fileSize font-weight-normal">PDF
                    </strong>
                  </div>
                </div>
              </div>

              <div class="col-12 col-sm-6">
                <div class="drItemRow position-relative d-flex px-3 px-md-6 py-3 mb-6">
                  <span class="icnWrap flex-shrink-0 pt-1 mr-3">
                    <img src="images/icopdf.png" class="img-fluid" alt="icon" />
                  </span>
                  <div class="descrWrap">
                    <h4 class="fontBase font-weight-normal mb-1">
                      <a href="pdf/Formulários pedidos de trancrições- Sect. Notarial.pdf">Atualização do briefing de
                        transporte para o ano</a>
                    </h4>
                    <strong class="d-block fileSize font-weight-normal">PDF
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
        <div class="accordion faqAccordion mb-8 mb-md-12" id="ctdepartsAccordion">
          <div class="ctaccRow mb-4">
            <div class="collapse ctaccSlide" id="ctr1" data-parent="#ctdepartsAccordion">
              <div class="overflow-hidden px-5 pb-1">
                <p>
                  Uma das adições mais comuns que as pessoas fazem seus carros,
                  a fim de manter o calor do lado de fora é um viseira do
                  pára-brisa. Os carros ficam quentes no verão porque a luz
                  solar direta entra através do janelas. É por isso que
                  estacionamos na sombra sempre que pudermos. Desde o maior
                  para-brisa.Na verdade, o vento está se tornando barato o
                  suficiente em muitos lugares nos EUA e em todo o mundo para
                  competir de forma eficaz com combustíveis fósseis.
                </p>
              </div>
            </div>
          </div>

          <div class="ctaccRow mb-4">
            <div class="ctaccOpener">
              <a class="fontAlter fwMedium" href="#ctr2" data-toggle="collapse" aria-expanded="true"
                aria-controls="ctr2">Como posso entrar em contato com os inspetores de
                construção?</a>
            </div>
            <div class="collapse show ctaccSlide" id="ctr2" data-parent="#ctdepartsAccordion">
              <div class="overflow-hidden px-5 pb-1">
                <p>
                  Bolsa tote vibrante perfeita Ásia-Pacífico o melhor
                  apartamento pintxos de soft power intrincados brancos sob
                  medida conversa Marylebone bonito icônico suíço. Sofisticado
                  premium soft power Gaggenau Marylebone. Escritórios de alegria
                  Premium Helsinki. Boutique Ettinger aconchegante e artesanal
                  da Lufthansa internacional Cingapura Marylebone Tsutaya
                  Helsinque. Pintxos impecáveis icônicos inteligentes.
                </p>
                <p>
                  Fast Lane Shinkansen premium artesanal global. Washlet sob
                  medida boletim de conversa. Comme des Garçons Ásia-Pacífico
                  vibrante, boutique perfeita guarda-roupa bonito.
                </p>
              </div>
            </div>
          </div>

          <div class="ctaccRow mb-4">
            <div class="ctaccOpener">
              <a class="fontAlter fwMedium" href="#ctr3" data-toggle="collapse" aria-expanded="false"
                aria-controls="ctr3">Estou recebendo multas de estacionamento em meu nome. O que
                posso fazer?</a>
            </div>
            <div class="collapse ctaccSlide" id="ctr3" data-parent="#ctdepartsAccordion">
              <div class="overflow-hidden px-5 pb-1">
                <p>
                  Uma das adições mais comuns que as pessoas fazem seus carros,
                  a fim de manter o calor do lado de fora é um viseira do
                  pára-brisa. Os carros ficam quentes no verão porque a luz
                  solar direta entra através do janelas. É por isso que
                  estacionamos na sombra sempre que pudermos. Desde o maior
                  para-brisa.Na verdade, o vento está se tornando barato o
                  suficiente em muitos lugares nos EUA e em todo o mundo para
                  competir de forma eficaz com combustíveis fósseis.
                </p>
              </div>
            </div>
          </div>

          <div class="ctaccRow mb-4">
            <div class="ctaccOpener">
              <a class="fontAlter fwMedium" href="#ctr4" data-toggle="collapse" aria-expanded="false"
                aria-controls="ctr4">Por que alguém pode culpar ou evitar indivíduos e grupos?</a>
            </div>
            <div class="collapse ctaccSlide" id="ctr4" data-parent="#ctdepartsAccordion">
              <div class="overflow-hidden px-5 pb-1">
                <p>
                  Uma das adições mais comuns que as pessoas fazem seus carros,
                  a fim de manter o calor do lado de fora é um viseira do
                  pára-brisa. Os carros ficam quentes no verão porque a luz
                  solar direta entra através do janelas. É por isso que
                  estacionamos na sombra sempre que pudermos. Desde o maior
                  para-brisa.Na verdade, o vento está se tornando barato o
                  suficiente em muitos lugares nos EUA e em todo o mundo para
                  competir de forma eficaz com combustíveis fósseis.
                </p>
              </div>
            </div>
          </div>

          <div class="ctaccRow mb-4">
            <div class="ctaccOpener">
              <a class="fontAlter fwMedium" href="#ctr5" data-toggle="collapse" aria-expanded="false"
                aria-controls="ctr5">Quanto tempo tenho para pagar uma multa de estacionamento antes
                que ela duplique?</a>
            </div>
            <div class="collapse ctaccSlide" id="ctr5" data-parent="#ctdepartsAccordion">
              <div class="overflow-hidden px-5 pb-1">
                <p>
                  Uma das adições mais comuns que as pessoas fazem seus carros,
                  a fim de manter o calor do lado de fora é um viseira do
                  pára-brisa. Os carros ficam quentes no verão porque a luz
                  solar direta entra através do janelas. É por isso que
                  estacionamos na sombra sempre que pudermos. Desde o maior
                  para-brisa.Na verdade, o vento está se tornando barato o
                  suficiente em muitos lugares nos EUA e em todo o mundo para
                  competir de forma eficaz com combustíveis fósseis.
                </p>
              </div>
            </div>
          </div>

          <div class="ctaccRow mb-4">
            <div class="ctaccOpener">
              <a class="fontAlter fwMedium" href="#ctr6" data-toggle="collapse" aria-expanded="false"
                aria-controls="ctr6">Recebi um aviso de cobrança, mas paguei o boleto
                antecipadamente. Por que eu recebi?</a>
            </div>
            <div class="collapse ctaccSlide" id="ctr6" data-parent="#ctdepartsAccordion">
              <div class="overflow-hidden px-5 pb-1">
                <p>
                  Uma das adições mais comuns que as pessoas fazem seus carros,
                  a fim de manter o calor do lado de fora é um viseira do
                  pára-brisa. Os carros ficam quentes no verão porque a luz
                  solar direta entra através do janelas. É por isso que
                  estacionamos na sombra sempre que pudermos. Desde o maior
                  para-brisa.Na verdade, o vento está se tornando barato o
                  suficiente em muitos lugares nos EUA e em todo o mundo para
                  competir de forma eficaz com combustíveis fósseis.
                </p>
              </div>
            </div>
          </div>

          <div class="ctaccRow mb-4">
            <div class="ctaccOpener">
              <a class="fontAlter fwMedium" href="#ctr7" data-toggle="collapse" aria-expanded="false"
                aria-controls="ctr7">Meu carro ainda está no depósito de automóveis. Eu tenho que
                solicitar uma audiência?
              </a>
            </div>
            <div class="collapse ctaccSlide" id="ctr7" data-parent="#ctdepartsAccordion">
              <div class="overflow-hidden px-5 pb-1">
                <p>
                  Uma das adições mais comuns que as pessoas fazem seus carros,
                  a fim de manter o calor do lado de fora é um viseira do
                  pára-brisa. Os carros ficam quentes no verão porque a luz
                  solar direta entra através do janelas. É por isso que
                  estacionamos na sombra sempre que pudermos. Desde o maior
                  para-brisa.Na verdade, o vento está se tornando barato o
                  suficiente em muitos lugares nos EUA e em todo o mundo para
                  competir de forma eficaz com combustíveis fósseis.
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