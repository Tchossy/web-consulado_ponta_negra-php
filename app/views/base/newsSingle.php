<?php $this->layout("_theme");

require "src/db/config.php";

$currentURL = $_SERVER['REQUEST_URI'];

// // Obtém a última parte da URI
$parts = explode('/', $currentURL);
$lastPart = end($parts);

$result_news = $pdo->prepare("SELECT * FROM news WHERE id = ? ORDER BY id LIMIT 1");
$result_news->execute(array($lastPart));
$num_team = $result_news->rowCount();

if ($num_team < 1) {
  header("Location: " . URL_BASE . "/news");
}

while ($row_news = $result_news->fetch(PDO::FETCH_ASSOC)) {
  extract($row_news);

  $decode_images_news = json_decode($images_news);

  $url_image = "";

  if ($decode_images_news) {
    $url_image = $decode_images_news[0];
  } else {
    $url_image = "https://img.freepik.com/free-vector/realistic-news-studio-background_23-2149985606.jpg";
  }

  $decode_images_news = json_decode($images_news);

  $texWithParagraphs = nl2br($description_news);

  $firstString = substr($texWithParagraphs, 0, 1);

?>

<main>
  <header class="pageMainHead d-flex position-relative bgCover w-100 text-white"
    style="background-image: url(https://t4.ftcdn.net/jpg/04/92/39/11/360_F_492391117_bsAteaWt7I9gCAJY1Mt3QXXxdLXE2Nzq.jpg)">
    <div class="alignHolder d-flex w-100 align-items-center">
      <div class="align w-100 position-relative">
        <div class="container">
          <h1 class="text-white mb-2"><?php echo $title_news ?></h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrWhite rounded-0 border-0 p-0 fontAlter mb-0">
              <li class="breadcrumb-item">
                <a href="home.html">Inicio</a>
              </li>
              <li class="breadcrumb-item">
                <a href="newsClassic.html">Noticias</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                <?php echo $title_news ?>
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <article class="newsSingleWrap pt-7 pb-2 pt-md-9 pb-md-4 pt-lg-14 pb-lg-8 pt-xl-22 pb-xl-13">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-8 col-xl-9 mb-6">
          <div class="pr-xl-14">
            <div class="imgHolder mb-4 mb-md-8 position-relative">
              <div class="nrcImageSlider">
                <?php foreach ($decode_images_news as $data) :  ?>
                <div>
                  <div class="imgWrap" style="height: 20rem; position: relative;">
                    <img src="<?php echo $data; ?>" class="img-fluid w-100" style="margin: 0 auto;"
                      alt="image description" />
                  </div>
                </div>
                <?php endforeach ?>
              </div>
            </div>
            <header class="nrcHead">
              <strong class="d-block fwMedium title mb-1">
                <i class="icnTheme fwMedium icomoon-clock"><span class="sr-only">icon</span></i>
                <time datetime="2011-01-12"><?php echo $date_news; ?></time>
                - <a href="javascript:void(0);" class="text-lDark"><?php echo $category_news; ?></a> -
                Autor:
                <a href="javascript:void(0);" class="text-lDark"><?php echo $author_news; ?></a>
                &nbsp;&nbsp;
              </strong>
              <h2 class="h2vii fwSemiBold mb-5">
                <?php echo $title_news; ?>
              </h2>
            </header>
            <p>
              <span class="dropCap"><?php echo $firstString; ?></span>
              <?php echo $texWithParagraphs; ?>
            </p>
            <blockquote class="meetQuote fontAlter text-lDark mt-9 mb-7 py-1 pl-4 pl-lg-8 pr-md-12 pr-lg-20 pr-xl-28">
              <q class="d-block mb-4"><?php echo $epigraph_news; ?></q>
              <cite class="d-block fsNormal"><?php echo $author_epigraph_news; ?>
                <span class="fontBase ctSubtitleText"> </span></cite>
            </blockquote>
            </li>

            </ol>
          </div>
        </div>
        <div class="col-12 col-lg-4 col-xl-3 mb-6">
          <aside class="dscSidebar pt-1 ml-xl-n5">
            <aside class="sidebar">
              <section class="widget widgetSearch mb-6 mb-lg-10">
                <form action="#" class="searchForm">
                  <div class="input-group">
                    <input type="search" class="form-control" placeholder="Pesquise aqui…" />
                    <div class="input-group-append">
                      <button class="btn btnTheme btnNoOver d-flex align-items-center justify-content-center"
                        type="button">
                        <i class="icomoon-search"><span class="sr-only">Pesquisar</span></i>
                      </button>
                    </div>
                  </div>
                </form>
              </section>

              <!-- Recent News -->
              <!-- 
                <nav class="widget widgetUpcoming mb-6 mb-lg-10">
                  <h3 class="fwMedium mb-5">Recent News</h3>
                  <ul class="list-unstyled pl-0 mb-7">
                    <li>
                      <div class="imgHolder flex-shrink-0 mr-4 mt-1">
                        <img src="images/img92.jpg" class="img-fluid" alt="image description" />
                      </div>
                      <div class="descrWrap">
                        <h4 class="fwMedium mb-1">
                          <a href="newsSingle.html">Globol Covid-19 Situation Dashboard</a>
                        </h4>
                        <time datetime="2011-01-12" class="d-block"><i class="icomoon-clock icn mr-1"><span class="sr-only">icon</span></i>Dec 11, 2020</time>
                      </div>
                    </li>
                    <li>
                      <div class="imgHolder flex-shrink-0 mr-4 mt-1">
                        <img src="images/img93.jpg" class="img-fluid" alt="image description" />
                      </div>
                      <div class="descrWrap">
                        <h4 class="fwMedium mb-1">
                          <a href="newsSingle.html">New Australian Economic Culture</a>
                        </h4>
                        <time datetime="2011-01-12" class="d-block"><i class="icomoon-clock icn mr-1"><span class="sr-only">icon</span></i>Dec 05, 2020</time>
                      </div>
                    </li>
                    <li>
                      <div class="imgHolder flex-shrink-0 mr-4 mt-1">
                        <img src="images/img94.jpg" class="img-fluid" alt="image description" />
                      </div>
                      <div class="descrWrap">
                        <h4 class="fwMedium mb-1">
                          <a href="newsSingle.html">Summer Nights at the Library</a>
                        </h4>
                        <time datetime="2011-01-12" class="d-block"><i class="icomoon-clock icn mr-1"><span class="sr-only">icon</span></i>Nov 23, 2020</time>
                      </div>
                    </li>
                  </ul>
                </nav>
              -->
            </aside>
          </aside>
        </div>
      </div>
    </div>
  </article>
</main>

<?php

};
?>