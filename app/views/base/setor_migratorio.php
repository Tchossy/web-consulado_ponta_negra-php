<?php
session_start();
$this->layout('_theme');
?>


<main>
  <header class="pageMainHead d-flex position-relative bgCover w-100 text-white" style="background-image: url(<?= urlProject(FOLDER_BASE . "/src/images/img50.jpg") ?>)">
    <div class="alignHolder d-flex w-100 align-items-center">
      <div class="align w-100 position-relative">
        <div class="container">
          <h1 class="text-white mb-2">Sector Migratorio</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrWhite rounded-0 border-0 p-0 fontAlter mb-0">
              <li class="breadcrumb-item">
                <a href="home.html">Inicio</a>
              </li>

              <li class="breadcrumb-item">
                <a href="services.html">Serviços</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Sector Migratorio
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
              <h2 class="fwSemiBold h2vii">Sector Migratorio</h2>
            </header>
            <p>
              O Sector Migratório do Consulado é responsável pela recepçao e
              tratamento das solicitações de vistos para os cidadaos
              estrangeiros que desejam visitar ou residir legalmente no país. A
              nossa equipa de profissionais altamente qualificada, trabalha para
              garantir que todas as solicitações sejam respondidas de forma
              eficiente e de acordo com a legislação migratória angolana
              vigente.
            </p>

            <p>
              Entendemos que o processo migratório pode ser complexo e
              estressante, especialmente em um país estrangeiro. É por isso que
              estamos aqui para ajudar e orientar você em cada etapa do
              processo. Nós nos esforçamos para fornecer um serviço rápido e
              eficiente, ajudando a tornar a experiência de imigração o mais
              suave possível.
            </p>

            <p>
              Em nossa página do sector migratório, você encontrará informações
              úteis sobre os tipos de vistos e autorizações de residência
              disponíveis, bem como os requisitos, documentos necessários e
              processos de solicitação. Também fornecemos respostas a perguntas
              frequentes para ajudá-lo a entender melhor o processo migratório.
            </p>

            <p>
              Nós, do sector migratório do Consulado, estamos à disposição para
              ajudá-lo em todo o processo de imigração e garantir que sua
              experiência no país seja agradável e bem-sucedida.
            </p>

            <h3 class="fwSemiBold mb-4">Como solicitar os serviços</h3>
            <p>
              Para solicitar os serviços notariais oferecidos pelo Consulado, é
              necessário seguir os seguintes passos:
            </p>
            <ul class="list-unstyled text-lDark">
              <li class="mb-4">
                1. <strong>Verifique os requisitos:</strong> Antes de solicitar
                qualquer serviço notarial, verifique se você possui todos os
                documentos necessários e se cumpre os requisitos exigidos pelo
                Consulado
              </li>
              <li class="mb-4">
                2. <strong>Agende um horário:</strong> Para solicitar os
                serviços notariais, é necessário agendar um horário com
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
                agendado, compareça ao atendimento no Consulado. Lembre-se de
                levar todos os documentos originais necessários e comprovante de
                pagamento, se aplicável.
              </li>
              <li class="mb-4">
                5. <strong>Retire o serviço solicitado:</strong> Após o
                processamento dos documentos e cumprimento das formalidades
                legais, você poderá retirar o serviço solicitado no Consulado
                dentro do prazo estipulado.
              </li>
            </ul>

            <h3 class="fwSemiBold mb-4">Serviços do Sector Migratorio</h3>
            <p>
              Nosso Consulado emite os seguintes tipos de vistos e documentos,
              click para ver os documentos necessários para emissão dos mesmos:
            </p>
            <ul class="list-unstyled coDefaultList text-lDark">
              <li style="cursor: pointer; color: #0b0035" onMouseOver="this.style.color='#ff0000'" onMouseOut="this.style.color='#0b0035'" data-toggle="modal" data-target="#passaporteOrdinarioModal">
                Emissão de passaporte Ordinário
              </li>
              <li style="cursor: pointer; color: #0b0035" onMouseOver="this.style.color='#ff0000'" onMouseOut="this.style.color='#0b0035'" data-toggle="modal" data-target="#salvoCondutoModal">
                Emissão de salvo conduto
              </li>
              <li style="cursor: pointer; color: #0b0035" onMouseOver="this.style.color='#ff0000'" onMouseOut="this.style.color='#0b0035'" data-toggle="modal" data-target="#vistoTurismoModal">
                Emissão de visto de turismo
              </li>
              <li style="cursor: pointer; color: #0b0035" onMouseOver="this.style.color='#ff0000'" onMouseOut="this.style.color='#0b0035'" data-toggle="modal" data-target="#vistoCurtaDuracaoModal">
                Emissão de visto de Curta Duração
              </li>
              <li style="cursor: pointer; color: #0b0035" onMouseOver="this.style.color='#ff0000'" onMouseOut="this.style.color='#0b0035'" data-toggle="modal" data-target="#vistoTransitoModal">
                Emissão de visto de Trânsito
              </li>
              <li style="cursor: pointer; color: #0b0035" onMouseOver="this.style.color='#ff0000'" onMouseOut="this.style.color='#0b0035'" data-toggle="modal" data-target="#vistoTrabalhoModal">
                Emissão de visto de Trabalho.
              </li>
              <li style="cursor: pointer; color: #0b0035" onMouseOver="this.style.color='#ff0000'" onMouseOut="this.style.color='#0b0035'" data-toggle="modal" data-target="#vistoEstudoModal">
                Emissão de visto de Estudo.
              </li>
              <li style="cursor: pointer; color: #0b0035" onMouseOver="this.style.color='#ff0000'" onMouseOut="this.style.color='#0b0035'" data-toggle="modal" data-target="#vistoTemporarioModal">
                Emissão de visto de Permanência temporária.
              </li>
              <li style="cursor: pointer; color: #0b0035" onMouseOver="this.style.color='#ff0000'" onMouseOut="this.style.color='#0b0035'" data-toggle="modal" data-target="#vistoResidenciaModal">
                Emissão de visto de Fixação de Residência.
              </li>
              <li style="cursor: pointer; color: #0b0035" onMouseOver="this.style.color='#ff0000'" onMouseOut="this.style.color='#0b0035'" data-toggle="modal" data-target="#vistoTratamentoMedicoModal">
                Emissão de visto de Tratamento Médio.
              </li>
            </ul>

            <!-- MODALS -->
            <div>
              <!-- Modal Visto de Turismo -->
              <div class="modal fade bd-example-modal-lg" id="vistoTurismoModal" tabindex="-1" role="dialog" aria-labelledby="vistoTurismoModal" aria-hidden="true">
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
                            <strong>1.</strong> Possuir Passaporte com validade
                            igual ou superior a seis (6) meses;
                          </li>
                          <li class="list-group-item">
                            <strong>2.</strong> Formulário que deverá ser
                            preenchido sem rasura, com letra de imprensa
                            (maiúscula), tinta preta e assinada pelo utente ou
                            solicitante;
                          </li>
                          <li class="list-group-item">
                            <strong>3.</strong> Uma (1) fotografia tipo passe,
                            colorida, com fundo branco atualizada e sem óculos
                            escuros, salvo orientação médica;
                          </li>
                          <li class="list-group-item">
                            <strong>4.</strong> Origem da carta de chamada de
                            entidade privada-pública ou com residência na
                            República de Angola, reconhecida por notário e MIREX
                            (Ministério das Relações Exteriores);
                          </li>
                          <li class="list-group-item">
                            <strong>5.</strong> Fotocópia do Bilhete de
                            Identidade e original da declaração de serviço da
                            pessoa que assina a carta de chamada (reconhecido
                            por notário e MIREX), extrato da conta bancaria,
                            assinados e carimbados pelo banco emissor;
                          </li>
                          <li class="list-group-item">
                            <strong>6.</strong> Fotocópia do passaporte e de
                            todas as páginas que contem movimentos migratórios
                            na república;
                          </li>
                          <li class="list-group-item">
                            <strong>7.</strong> Para os cidadãos estrangeiro
                            apresentar a fotocópia do visto ou cartão de
                            residência;
                          </li>
                          <li class="list-group-item">
                            <strong>8.</strong> Fotocópia do cartão de vacina
                            internacional;
                          </li>
                          <li class="list-group-item">
                            <strong>9.</strong> Fotocópia de ida e volta e
                            reserva do hotel;
                          </li>
                          <li class="list-group-item">
                            <strong>10.</strong> Os menores de idade, devem
                            apresentar o original da autorização expressa dos
                            progenitores, representante legal ou de quem exerça
                            a autorização paternal (traduzido em português) e
                            autenticado pelo Ministério Dos Negócios
                            Estrangeiros (MNE), fotocópia do passaporte e
                            bilhete de ida e volta do acompanhante.
                          </li>
                          <li class="list-group-item">
                            <strong>11.</strong> Fotocópia do assento de
                            nascimento, reconhecidos por notário e MNE;
                          </li>
                          <li class="list-group-item">
                            <strong>12.</strong> Pagamento de 97.500 Fcfa (não
                            reembolsáveis independentemente da concessão ou não
                            do visto).
                          </li>
                        </ul>

                        <a href="<?= urlProject("setor/setor_migratorio/form/form_migratorio_vistos") ?>" class="btn btnTheme btn-sm mt-4 font-weight-bold text-capitalize position-relative border-0 p-0" data-hover="Preencher formulario">
                          <span class="d-block btnText">Preencher formulário</span>
                        </a>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-dark btnSwitchDark fwMedium position-relative border-0 p-0 btnCustomSmall mt-md-1 mt-lg-0 ml-lg-4" data-hover="Entendido" data-dismiss="modal">
                        <span class="d-block btnText fwMedium">Entendido</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Modal Visto de Curta Duração -->
              <div class="modal fade bd-example-modal-lg" id="vistoCurtaDuracaoModal" tabindex="-1" role="dialog" aria-labelledby="vistoCurtaDuracaoModal" aria-hidden="true">
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
                            <strong>1.</strong> Possuir Passaporte com validade
                            igual ou superior a seis (6) meses;
                          </li>
                          <li class="list-group-item">
                            <strong>2.</strong> Formulário que deverá ser
                            preenchido sem rasura, com letra de imprensa
                            (maiúscula), tinta preta e assinada pelo utente ou
                            solicitante;
                          </li>
                          <li class="list-group-item">
                            <strong>3.</strong> Uma (1) fotografia tipo passe,
                            colorida, com fundo branco atualizada e sem óculos
                            escuros, salvo orientação médica;
                          </li>
                          <li class="list-group-item">
                            <strong>4.</strong> Documento fundamentando os
                            objetivos pretendido com a entrada em território
                            nacional. Caso o documento seja subscrito por
                            terceiros, anexar a fotocópia do Bilhete de
                            Identidade angolano, cópia do cartão de residência
                            válido, ou o documento da empresa;
                          </li>
                          <li class="list-group-item">
                            <strong>5.</strong> Fotocópia do passaporte e de
                            todas as páginas que contem movimentos migratórios
                            na república Angola;
                          </li>
                          <li class="list-group-item">
                            <strong>6.</strong> Para os cidadãos estrangeiro
                            apresentar a fotocópia do visto ou cartão de
                            residência;
                          </li>
                          <li class="list-group-item">
                            <strong>7.</strong> Fotocópia do cartão de vacina
                            internacional;
                          </li>
                          <li class="list-group-item">
                            <strong>8.</strong> Fotocópia de ida e volta;
                          </li>
                          <li class="list-group-item">
                            <strong>9.</strong> Os menores de idade, devem
                            apresentar o original da autorização expressa dos
                            progenitores, representante legal ou de quem exerça
                            a autorização paternal (traduzido em português) e
                            autenticado pelo Ministério Dos Negócios
                            Estrangeiros (MNE), fotocópia do passaporte e
                            bilhete de ida e volta do acompanhante.
                          </li>
                          <li class="list-group-item">
                            <strong>10.</strong> Fotocópia do assento de
                            nascimento, reconhecidos por notário e MNE;
                          </li>
                          <li class="list-group-item">
                            <strong>11.</strong> Pagamento de 65.000 Fcfa (não
                            reembolsáveis independentemente da concessão ou não
                            do visto).
                          </li>
                        </ul>

                        <a href="<?= urlProject("setor/setor_migratorio/form/form_migratorio_vistos") ?>" class="btn btnTheme btn-sm mt-4 font-weight-bold text-capitalize position-relative border-0 p-0" data-hover="Preencher formulario">
                          <span class="d-block btnText">Preencher formulário</span>
                        </a>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-dark btnSwitchDark fwMedium position-relative border-0 p-0 btnCustomSmall mt-md-1 mt-lg-0 ml-lg-4" data-hover="Entendido" data-dismiss="modal">
                        <span class="d-block btnText fwMedium">Entendido</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Modal Visto de Trânsito -->
              <div class="modal fade bd-example-modal-lg" id="vistoTransitoModal" tabindex="-1" role="dialog" aria-labelledby="vistoTransitoModal" aria-hidden="true">
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
                            <strong>1.</strong> Possuir Passaporte com validade
                            igual ou superior a seis (6) messes;
                          </li>
                          <li class="list-group-item">
                            <strong>2.</strong> Formulário que deverá ser
                            preenchido sem rasura, com letra de imprensa
                            (maiúscula), tinta preta e assinada pelo utente ou
                            solicitante;
                          </li>
                          <li class="list-group-item">
                            <strong>3.</strong> Uma (1) fotografia tipo passe,
                            colorida, com fundo branco atualizada e sem óculos
                            escuros, salvo orientação médica;
                          </li>
                          <li class="list-group-item">
                            <strong>4.</strong> Fotocópia do Bilhete de
                            Identidade Congolês. Para os cidadãos estrangeiros
                            apresentar a fotocópia do visto ou cartão de
                            residência;
                          </li>
                          <li class="list-group-item">
                            <strong>5.</strong> Fotocópia do passaporte e de
                            todas as páginas que contem movimentos migratórios
                            na república Angola;
                          </li>
                          <li class="list-group-item">
                            <strong>6.</strong> Fotocópia do Bilhete de Passagem
                            para República de Angola, com retorno;
                          </li>
                          <li class="list-group-item">
                            <strong>7.</strong> Comprovativo de ser titular de
                            visto de entrada para o país de destino ou se está
                            isento deste;
                          </li>
                          <li class="list-group-item">
                            <strong>8.</strong> Comprovativo de meio de
                            subsistência (equivalente a USD 200 por cada dia de
                            permanência em território angolano) e condições de
                            alojamento (confirmação de reserva de hotel ou outro
                            tipo de alojamento;
                          </li>
                          <li class="list-group-item">
                            <strong>9.</strong> Fotocópia do cartão de vacina
                            internacional;
                          </li>
                          <li class="list-group-item">
                            <strong>10.</strong> Os menores de idade, devem
                            apresentar o original da autorização expressa dos
                            progenitores, representante legal ou de quem exerça
                            a autorização paternal (traduzido em português) e
                            autenticado pelo Ministério Dos Negócios
                            Estrangeiros (MNE), fotocópia do passaporte e
                            bilhete de ida e volta do acompanhante.
                          </li>
                          <li class="list-group-item">
                            <strong>11.</strong> Fotocópia do assento de
                            nascimento, reconhecidos por notário e MNE;
                          </li>
                          <li class="list-group-item">
                            <strong>1.</strong> Pagamento de 65.000 Fcfa (não
                            reembolsáveis independentemente da concessão ou não
                            do visto).
                          </li>
                        </ul>

                        <a href="<?= urlProject("setor/setor_migratorio/form/form_migratorio_vistos") ?>" class="btn btnTheme btn-sm mt-4 font-weight-bold text-capitalize position-relative border-0 p-0" data-hover="Preencher formulario">
                          <span class="d-block btnText">Preencher formulário</span>
                        </a>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-dark btnSwitchDark fwMedium position-relative border-0 p-0 btnCustomSmall mt-md-1 mt-lg-0 ml-lg-4" data-hover="Entendido" data-dismiss="modal">
                        <span class="d-block btnText fwMedium">Entendido</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Modal Visto de Trabalho -->
              <div class="modal fade bd-example-modal-lg" id="vistoTrabalhoModal" tabindex="-1" role="dialog" aria-labelledby="vistoTrabalhoModal" aria-hidden="true">
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
                            <strong>1.</strong> Possuir Passaporte com validade
                            igual ou superior a seis (6) messes;
                          </li>
                          <li class="list-group-item">
                            <strong>2.</strong> Formulário que deverá ser
                            preenchido sem rasura, com letra de imprensa
                            (maiúscula), tinta preta e assinada pelo utente ou
                            solicitante;
                          </li>
                          <li class="list-group-item">
                            <strong>3.</strong> Uma (1) fotografia tipo passe,
                            colorida, com fundo branco atualizada e sem óculos
                            escuros, salvo orientação médica;
                          </li>
                          <li class="list-group-item">
                            <strong>4.</strong> Carta da entidade contratante em
                            Angola, dirigida ao Consulado Geral da República de
                            Angola em Ponta Negra a solicitar o visto de
                            trabalho, contendo contacto telefónico e endereço
                            eletrônico;
                          </li>
                          <li class="list-group-item">
                            <strong>5.</strong> Contrato de trabalho ou contrato
                            promessa de trabalho reconhecido por notário em
                            Angola e pelo MIREX (Ministério das Relações
                            Exteriores);
                          </li>
                          <li class="list-group-item">
                            <strong>6.</strong> Parecer favorável do Ministério
                            de tutela
                          </li>
                          <li class="list-group-item">
                            <strong>7.</strong> Fotocópia do passaporte e de
                            todas as páginas que contem movimentos migratórios
                            na república Angola;
                          </li>
                          <li class="list-group-item">
                            <strong>8.</strong> Original do atestado médico do
                            pais de residência (traduzido do português) e
                            reconhecido pelo MNE (Ministério de Negócio
                            Estrangeiros);
                          </li>
                          <li class="list-group-item">
                            <strong>9.</strong> Para os cidadãos estrangeiro
                            apresentar a fotocópia do visto ou cartão de
                            residência congolês;
                          </li>
                          <li class="list-group-item">
                            <strong>10.</strong> Original do Registo Criminal
                            emitido pelo país de residência traduzido em
                            português e reconhecido pelo MNE;
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
                            <strong>13.</strong> Curriculum vitae, com
                            assinatura reconhecida ´pelo notário MNE;
                          </li>
                          <li class="list-group-item">
                            <strong>14.</strong> Alvará atualizado da empresa –
                            imposto atualizado (DAR), capa e publicação da
                            empresa no Diário da República e o documento da
                            constituição da empresa, autenticada pelo Ministério
                            da Justiça e pelo MIREX;
                          </li>
                          <li class="list-group-item">
                            <strong>15.</strong> Fotocópia do cartão de vacina
                            internacional;
                          </li>
                          <li class="list-group-item">
                            <strong>16.</strong> Pagamento de 28.000 Fcfa (não
                            reembolsáveis independentemente da concessão ou não
                            do visto).
                          </li>
                        </ul>

                        <a href="<?= urlProject("setor/setor_migratorio/form/form_migratorio_vistos") ?>" class="btn btnTheme btn-sm mt-4 font-weight-bold text-capitalize position-relative border-0 p-0" data-hover="Preencher formulario">
                          <span class="d-block btnText">Preencher formulário</span>
                        </a>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-dark btnSwitchDark fwMedium position-relative border-0 p-0 btnCustomSmall mt-md-1 mt-lg-0 ml-lg-4" data-hover="Entendido" data-dismiss="modal">
                        <span class="d-block btnText fwMedium">Entendido</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Modal Visto de Estudo  -->
              <div class="modal fade bd-example-modal-lg" id="vistoEstudoModal" tabindex="-1" role="dialog" aria-labelledby="vistoEstudoModal" aria-hidden="true">
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
                            <strong>1.</strong> Possuir Passaporte com validade
                            igual ou superior a seis (6) messes;
                          </li>
                          <li class="list-group-item">
                            <strong>2.</strong> Formulário que deverá ser
                            preenchido sem rasura, com letra de imprensa
                            (maiúscula), tinta preta e assinada pelo utente ou
                            solicitante;
                          </li>
                          <li class="list-group-item">
                            <strong>3.</strong> Uma (1) fotografia tipo passe,
                            colorida, com fundo branco atualizada e sem óculos
                            escuros, salvo orientação médica;
                          </li>
                          <li class="list-group-item">
                            <strong>4.</strong> Carta de requerente, devidamente
                            fundamentada, dirigida à Missão Consular de Angola,
                            a solicitar o Visto de Estudo, com assinatura
                            reconhecida pelo Notário (Maire), visado pelo
                            Ministério dos Negócios Estrangeiros e visado por
                            este Consulado;
                          </li>
                          <li class="list-group-item">
                            <strong>5.</strong> Para os cidadãos estrangeiro
                            apresentar a fotocópia do visto ou cartão de
                            residência;
                          </li>
                          <li class="list-group-item">
                            <strong>6.</strong> Fotocópia do passaporte;
                          </li>
                          <li class="list-group-item">
                            <strong>7.</strong> Comprovativo de matricula em
                            estabelecimento de ensino oficialmente reconhecido
                            ou garantia de frequência no referido
                            estabelecimento com indicação das condições de
                            estudos e da duração do ensino;
                          </li>
                          <li class="list-group-item">
                            <strong>8.</strong> Comprovativo emitido pela
                            instituição competente para atribuição do grau
                            acadêmico ou profissional ou ainda o reconhecimento
                            do intercâmbio cientifico do trabalho de
                            investigação, Programa de Estágio ou Contrato de
                            Formação, se for o caso;
                          </li>
                          <li class="list-group-item">
                            <strong>9.</strong> Original do atestado médico do
                            pais de residência (traduzido do português) e
                            reconhecido pelo MNE (Ministério de Negócio
                            Estrangeiros);
                          </li>
                          <li class="list-group-item">
                            <strong>10.</strong> Original do Registo Criminal
                            emitido pelo país de residência traduzido em
                            português e reconhecido pelo MNE;
                          </li>
                          <li class="list-group-item">
                            <strong>11.</strong> Comprovativo de meios de
                            subsistência de alojamento (confirmação de reserva
                            de hotel ou outro tipo de alojamento);
                          </li>
                          <li class="list-group-item">
                            <strong>12.</strong> Declaração comprometendo-se a
                            respeitar as leis vigentes em Angola, com assinatura
                            autenticada pelo MNE;
                          </li>
                          <li class="list-group-item">
                            <strong>13.</strong> Os menores de idade, devem
                            apresentar o original da autorização expressa dos
                            progenitores, representante legal ou de quem exerça
                            a autorização paternal (traduzido em português) e
                            autenticado pelo Ministério Dos Negócios
                            Estrangeiros (MNE), fotocópia do passaporte e
                            bilhete de ida e volta do acompanhante.
                          </li>
                          <li class="list-group-item">
                            <strong>14.</strong> Fotocópia do assento de
                            nascimento, reconhecidos por notário e MNE;
                          </li>
                          <li class="list-group-item">
                            <strong>15.</strong> Pagamento de 280.000 Fcfa (não
                            reembolsáveis independentemente da concessão ou não
                            do visto).
                          </li>
                        </ul>

                        <a href="<?= urlProject("setor/setor_migratorio/form/form_migratorio_vistos") ?>" class="btn btnTheme btn-sm mt-4 font-weight-bold text-capitalize position-relative border-0 p-0" data-hover="Preencher formulario">
                          <span class="d-block btnText">Preencher formulário</span>
                        </a>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-dark btnSwitchDark fwMedium position-relative border-0 p-0 btnCustomSmall mt-md-1 mt-lg-0 ml-lg-4" data-hover="Entendido" data-dismiss="modal">
                        <span class="d-block btnText fwMedium">Entendido</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Modal Visto de Permanência temporária -->
              <div class="modal fade bd-example-modal-lg" id="vistoTemporarioModal" tabindex="-1" role="dialog" aria-labelledby="vistoTemporarioModal" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">
                        Requisitos para obtenção do visto de permanência
                        temporária
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="modal-body">
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">
                            <strong>1.</strong> Ser titular de passaporte com
                            validade igual ou superior a 6 meses;
                          </li>
                          <li class="list-group-item">
                            <strong>2.</strong> Formulário, que deve ser
                            preenchido sem letras maiúsculas (maiúsculas), tinta
                            preta e assinado pelo interessado ou requerente;
                          </li>
                          <li class="list-group-item">
                            <strong>3.</strong> Uma fotocópia do seu passaporte,
                            em fundo branco atualizado e sem óculos escuros,
                            salvo indicação médica;
                          </li>
                          <li class="list-group-item">
                            <strong>4.</strong> Documento autêntico atestando
                            parentesco, missão religiosa e organização não
                            governamental;
                          </li>
                          <li class="list-group-item">
                            <strong>5.</strong> Cópia do contrato de trabalho ou
                            contrato de trabalho legalizado pela Câmara
                            Municipal de Angola e MIREX (Ministério das Relações
                            Exteriores) e extrato bancário de quem assume a
                            responsabilidade;
                          </li>
                          <li class="list-group-item">
                            <strong>6.</strong> Atestado médico original do país
                            de residência (traduzido para o português) e
                            legalizado pelo Ministério das Relações Exteriores;
                          </li>
                          <li class="list-group-item">
                            <strong>7.</strong> Fotocópia do cartão
                            internacional de vacinação;
                          </li>
                          <li class="list-group-item">
                            <strong>8.</strong> Fotocópia do passaporte e de
                            todas as páginas que contenham o movimento
                            migratório na República de Angola;
                          </li>
                          <li class="list-group-item">
                            <strong>9.</strong> Para estrangeiros apresentar o
                            visto ou cartão de residência;
                          </li>
                          <li class="list-group-item">
                            <strong>10.</strong> Registo criminal original do
                            país de residência, traduzido para a língua
                            portuguesa e legalizado pelo Ministério dos Negócios
                            Estrangeiros;
                          </li>
                          <li class="list-group-item">
                            <strong>11.</strong> Declaração de compromisso de
                            respeito pelas leis em vigor em Angola, com
                            assinatura reconhecida e legalizada pelos
                            Ministérios dos Negócios Estrangeiros;
                          </li>
                          <li class="list-group-item">
                            <strong>12.</strong> Para menores, trazer a
                            autorização parental original (traduzida para o
                            português) e autenticada pelo Ministério das
                            Relações Exteriores;
                          </li>
                          <li class="list-group-item">
                            <strong>13.</strong> Pagamento de 280.000 FCFA (não
                            reembolsável independentemente da concessão ou não
                            do visto).
                          </li>
                        </ul>

                        <a href="<?= urlProject("setor/setor_migratorio/form/form_migratorio_vistos") ?>" class="btn btnTheme btn-sm mt-4 font-weight-bold text-capitalize position-relative border-0 p-0" data-hover="Preencher formulario">
                          <span class="d-block btnText">Preencher formulário</span>
                        </a>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-dark btnSwitchDark fwMedium position-relative border-0 p-0 btnCustomSmall mt-md-1 mt-lg-0 ml-lg-4" data-hover="Entendido" data-dismiss="modal">
                        <span class="d-block btnText fwMedium">Entendido</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Modal Visto de Fixação de Residência -->
              <div class="modal fade bd-example-modal-lg" id="vistoResidenciaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">
                        Requisitos para obtenção do visto de fixação de
                        residência
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="modal-body">
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">
                            <strong></strong> Lamentamos mas essa informação
                            está indisponível no momento...
                          </li>
                        </ul>

                        <a href="<?= urlProject("setor/setor_migratorio/form/form_migratorio_vistos") ?>" class="btn btnTheme btn-sm mt-4 font-weight-bold text-capitalize position-relative border-0 p-0" data-hover="Preencher formulario">
                          <span class="d-block btnText">Preencher formulário</span>
                        </a>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-dark btnSwitchDark fwMedium position-relative border-0 p-0 btnCustomSmall mt-md-1 mt-lg-0 ml-lg-4" data-hover="Entendido" data-dismiss="modal">
                        <span class="d-block btnText fwMedium">Entendido</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Modal Visto de Tratamento Médio  -->
              <div class="modal fade bd-example-modal-lg" id="vistoTratamentoMedicoModal" tabindex="-1" role="dialog" aria-labelledby="vistoTratamentoMedicoModal" aria-hidden="true">
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
                            <strong></strong> Lamentamos mas essa informação
                            está indisponível no momento...
                          </li>
                        </ul>

                        <a href="<?= urlProject("setor/setor_migratorio/form/form_migratorio_vistos") ?>" class="btn btnTheme btn-sm mt-4 font-weight-bold text-capitalize position-relative border-0 p-0" data-hover="Preencher formulario">
                          <span class="d-block btnText">Preencher formulário</span>
                        </a>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-dark btnSwitchDark fwMedium position-relative border-0 p-0 btnCustomSmall mt-md-1 mt-lg-0 ml-lg-4" data-hover="Entendido" data-dismiss="modal">
                        <span class="d-block btnText fwMedium">Entendido</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div>
              <!-- Modal Emissão do Passaporte Ordinário   -->
              <div class="modal fade bd-example-modal-lg" id="passaporteOrdinarioModal" tabindex="-1" role="dialog" aria-labelledby="passaporteOrdinarioModal" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="passaporteOrdinarioModal">
                        Emissão do Passaporte Ordinário
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="modal-body">
                        <h6>
                          Para fazer a emissão do passaporte ordinário,
                          necessita dos seguintes documentos:
                        </h6>

                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">
                            • Cópia colorida do bilhete de Identidade válido
                          </li>
                          <li class="list-group-item">
                            • Declaração de serviço ou de escola
                          </li>
                          <li class="list-group-item">
                            • Atestado de residência
                          </li>
                          <li class="list-group-item">
                            • 3 Foto tipo passa fundo branco
                          </li>
                          <li class="list-group-item">
                            • Formulário de pedido do passaporte devidamente
                            preenchido
                          </li>
                          <li class="list-group-item">
                            • Comprovativo de pagamento bancário
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-dark btnSwitchDark fwMedium position-relative border-0 p-0 btnCustomSmall mt-md-1 mt-lg-0 ml-lg-4" data-hover="Entendido" data-dismiss="modal">
                        <span class="d-block btnText fwMedium">Entendido</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal Emissão de salvo conduto   -->
              <div class="modal fade bd-example-modal-lg" id="salvoCondutoModal" tabindex="-1" role="dialog" aria-labelledby="salvoCondutoModal" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="salvoCondutoModal">
                        Emissão de salvo conduto
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="modal-body">
                        <h6>
                          Para fazer a emissão de salvo conduto, necessita dos
                          seguintes documentos:
                        </h6>

                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">
                            • Formulário para pedido de emissão de salvo Conduto
                          </li>
                          <li class="list-group-item">
                            • 2 Foto tipo passa fundo branco
                          </li>
                        </ul>

                        <a href="<?= urlProject("setor/setor_migratorio/form/form_migratorio_salvo_conduto") ?>" class="btn btnTheme btn-sm mt-4 font-weight-bold text-capitalize position-relative border-0 p-0" data-hover="Preencher formulario">
                          <span class="d-block btnText">Preencher formulário</span>
                        </a>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-dark btnSwitchDark fwMedium position-relative border-0 p-0 btnCustomSmall mt-md-1 mt-lg-0 ml-lg-4" data-hover="Entendido" data-dismiss="modal">
                        <span class="d-block btnText fwMedium">Entendido</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal Registo de nascimento   -->
              <div class="modal fade bd-example-modal-lg" id="sectorNotoriaModal" tabindex="-1" role="dialog" aria-labelledby="sectorNotoriaModal" aria-hidden="true">
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
                            • Registo de nascimento
                          </li>
                          <li class="list-group-item">
                            • Registo de casamento
                          </li>
                          <li class="list-group-item">• Registo de óbito</li>
                          <li class="list-group-item">
                            • Transcrição de assentos
                          </li>
                          <li class="list-group-item">
                            • Autenticação de documentos
                          </li>
                          <li class="list-group-item">
                            • Reconhecimento de assinaturas.
                          </li>
                        </ul>

                        <a href="<?= urlProject("setor/setor_migratorio/form/form_migratorio_vistos") ?>" class="btn btnTheme btn-sm mt-4 font-weight-bold text-capitalize position-relative border-0 p-0" data-hover="Preencher formulario">
                          <span class="d-block btnText">Preencher formulário</span>
                        </a>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-dark btnSwitchDark fwMedium position-relative border-0 p-0 btnCustomSmall mt-md-1 mt-lg-0 ml-lg-4" data-hover="Entendido" data-dismiss="modal">
                        <span class="d-block btnText fwMedium">Entendido</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <h3 class="fwSemiBold mb-4 mt-8">Preços do Actos Migratorios</h3>

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
                      <td>Visto de Trânsito</td>
                      <td>54.000</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Visto de Curta Duração</td>
                      <td>65.000</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Visto de Turismo</td>
                      <td>97.000</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <!-- DOCS -->
            <!--             
                  <h3 class="fwSemiBold mb-5 mt-8">Baixar Documentos</h3>
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
              <a href="contact-1.html" class="btn btnTheme btn-sm font-weight-bold text-capitalize position-relative border-0 p-0" data-hover="Contact now">
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