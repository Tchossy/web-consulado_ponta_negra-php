<?php $this->layout('_theme') ?>

<main>
  <header class="pageMainHead d-flex position-relative bgCover w-100 text-white" style="background-image: url(<?= urlProject(FOLDER_BASE . "/src/images/img189.jpg") ?>)">
    <div class="alignHolder d-flex w-100 align-items-center">
      <div class="align w-100 position-relative">
        <div class="container">
          <h1 class="text-white mb-2">Status dos documentos</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrWhite rounded-0 border-0 p-0 fontAlter mb-0">
              <li class="breadcrumb-item">
                <a href="home.html">Inicio</a>
              </li>

              <li class="breadcrumb-item active" aria-current="page">
                Status dos documentos
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <div class="pt-2 pb-2 pt-md-10 pb-md-1 pt-lg-16 pb-lg-10 pt-xl-21 pb-xl-16">
    <div class="container">
      <div class="row">
        <h2 class="mb-4 fwMedium">Status dos seus documentos</h2>
        <!-- <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Corporis, quidem recusandae, nostrum modi libero amet autem iure
                quibusdam cupiditate explicabo debitis saepe beatae quasi
                repudiandae maiores cumque aliquid impedit facere.
              </p> -->
      </div>
      <!-- TABLE -->
      <div class="table-data">
        <div class="order">
          <div class="head">
            <h3>Seus documentos</h3>
            <i class="bx bx-search"></i>
            <i class="bx bx-filter"></i>
          </div>
          <table>
            <thead>
              <tr>
                <th>ID</th>
                <th>Sector</th>
                <th>Descrição</th>
                <th>Data de entrada</th>
                <th>Data de entrega</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <p>1</p>
                </td>
                <td>
                  <p>Sector Notarial</p>
                </td>
                <td>
                  <p>Reconhecimento de assinaturas.</p>
                </td>
                <td>
                  <p>11 Novembro, Segunda-feira</p>
                </td>
                <td>
                  <p>24 Novembro, Quinta-feira</p>
                </td>

                <td>
                  <button class="status completed">Pronto</button>
                </td>
              </tr>
              <tr>
                <td>
                  <p>2</p>
                </td>
                <td>
                  <p>Sector Migratorio</p>
                </td>
                <td>
                  <p>Visto de Permanência temporária</p>
                </td>
                <td>
                  <p>03 Dezembro, Quinta-feira</p>
                </td>
                <td>
                  <p>-------------------------</p>
                </td>

                <td>
                  <button class="status pending">Pendente</button>
                </td>
              </tr>
              <tr>
                <td>
                  <p>3</p>
                </td>
                <td>
                  <p>Sector de Identificação</p>
                </td>
                <td>
                  <p>Emissão de Bilhete de Identidade</p>
                </td>
                <td>
                  <p>26 Dezembro, Quinta-feira</p>
                </td>
                <td>
                  <p>-------------------------</p>
                </td>

                <td>
                  <button class="status delete">Recusado</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</main>