<?php

use CoffeeCode\Router\Router;

function router()
{

  $router = new Router(URL_BASE);

  $router->namespace("App\controllers");

  // ROTA DE BASE
  $router->group(null);
  // 1º parâmetro: Rota | 2º parâmetro: controller (o que será executado)
  // No controller: 1º parâmetro: o arquivo (onde tem a função) (ex.: Base) |  2º parâmetro: função (ex.: home)
  $router->get("/", "Base:home");
  $router->get("/about", "Base:about");
  $router->get("/eventsList", "Base:eventsList");
  $router->get("/news", "Base:news");
  $router->get("/scheduling", "Base:scheduling");
  $router->get("/myDocs", "Base:myDocs");
  $router->get("/login", "Base:login");
  $router->get("/register", "Base:register");
  $router->get("/contact", "Base:contact");
  $router->get("/contacts", "Base:contacts");

  // ROTA DA SECTOR
  $router->group("/setor");
  $router->get("/setor_notarial", "Base:setorNotarial");
  $router->get("/setor_migratorio", "Base:setorMigratorio");
  $router->get("/setor_identificacao", "Base:setorIdentificacao");
  $router->get("/setor_apoio_comunidade", "Base:setorApoioComunidade");
  $router->get("/setor_comercial", "Base:setorComercial");

  $router->get("/setor_notarial/form/form_notorio", "Base:formNotorio");

  $router->get("/setor_migratorio/form/form_migratorio_salvo_conduto", "Base:formMigratorioSalvoConduto");
  $router->get("/setor_migratorio/form/form_migratorio_vistos", "Base:formMigratorioVistos");

  $router->get("/setor_apoio_comunidade/form/form_apoio_comunidade_registro_consular", "Base:formApoioComunidadeRegistroConsular");

  // ROTA DA DASHBOARD
  $router->group("/dashboard");
  $router->get("/", "Dash:home");


  // ROTA DE ERROS
  $router->group("/ops");
  $router->get("/{errocode}", "Base:error");


  $router->dispatch();

  if ($router->error()) {
    $router->redirect("/ops/{$router->error()}");
  }
}