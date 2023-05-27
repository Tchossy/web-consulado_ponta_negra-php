<?php

namespace App\controllers;

use League\Plates\Engine;

class Base
{

  private $templates;

  public function __construct()
  {
    $viewsPath = __DIR__ . BASE_VIEWS;
    $this->templates = new Engine($viewsPath);
  }

  // HOME
  public function home(): void
  {
    $page_name = "home";
    echo $this->templates->render($page_name, []);
  }

  // about US
  public function about(): void
  {
    $page_name = "about";
    echo $this->templates->render($page_name, []);
  }

  // eventsList US
  public function eventsList(): void
  {
    $page_name = "eventsList";
    echo $this->templates->render($page_name, []);
  }

  // news
  public function news(): void
  {
    $page_name = "news";
    echo $this->templates->render($page_name, []);
  }
  public function detailsNews(): void
  {
    $page_name = "newsSingle";
    echo $this->templates->render($page_name, []);
  }
  public function categoryNews(): void
  {
    $page_name = "page";
    echo $this->templates->render($page_name, []);
  }

  // scheduling
  public function scheduling(): void
  {
    $page_name = "scheduling";
    echo $this->templates->render($page_name, []);
  }

  // myDocs
  public function myDocs(): void
  {
    $page_name = "myDocs";
    echo $this->templates->render($page_name, []);
  }

  // login
  public function login(): void
  {
    $page_name = "login";
    echo $this->templates->render($page_name, []);
  }

  // register
  public function register(): void
  {
    $page_name = "register";
    echo $this->templates->render($page_name, []);
  }

  // contact
  public function contact(): void
  {
    $page_name = "contact";
    echo $this->templates->render($page_name, []);
  }

  // SetorMigratorio
  public function SetorMigratorio(): void
  {
    $page_name = "setor_migratorio";
    echo $this->templates->render($page_name, []);
  }
  // setorNotarial
  public function setorNotarial(): void
  {
    $page_name = "setor_notarial";
    echo $this->templates->render($page_name, []);
  }
  // SetorApoioComunidade
  public function SetorApoioComunidade(): void
  {
    $page_name = "setor_apoio_comunidade";
    echo $this->templates->render($page_name, []);
  }
  // SetorComercial
  public function SetorComercial(): void
  {
    $page_name = "setor_comercial";
    echo $this->templates->render($page_name, []);
  }
  // SetorIdentificacao
  public function SetorIdentificacao(): void
  {
    $page_name = "setor_identificacao";
    echo $this->templates->render($page_name, []);
  }

  // formNotorio
  public function formNotorio(): void
  {
    $page_name = "form_notorio";
    echo $this->templates->render($page_name, []);
  }
  // formMigratorioSalvoConduto
  public function formMigratorioSalvoConduto(): void
  {
    $page_name = "form_migratorio_salvo_conduto";
    echo $this->templates->render($page_name, []);
  }
  // form_migratorioVistos
  public function formMigratorioVistos(): void
  {
    $page_name = "form_migratorio_vistos";
    echo $this->templates->render($page_name, []);
  }
  // formApoioComunidadeRegistroConsular
  public function formApoioComunidadeRegistroConsular(): void
  {
    $page_name = "form_apoio_comunidade_registro_consular";
    echo $this->templates->render($page_name, []);
  }

  // CONTACTS
  public function contacts(): void
  {
    $page_name = "page";
    echo $this->templates->render($page_name, []);
  }

  // ERROS
  public function error(array $data): void
  {
    $page_name = "notFound";

    echo $this->templates->render($page_name, [
      "error" => $data["errocode"]
    ]);
  }
}
