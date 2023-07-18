<?php

//echo "metodo=".$metodo."\n";
//echo "funcao=".$funcao."\n";
//echo "parametro=".$parametro."\n";

if ($metodo == "GET") {

  switch ($funcao) {

    case "paginas_slug":
      include 'paginas_slug.php';
      break;

    case "paginas":
      include 'paginas.php';
      break;

    case "secoes":
      include 'secoes.php';
      break;

    case "secoesPagina":
      include 'secoesPagina.php';
      break;

    case "secoesPagina_individual":
      include 'secoesPagina_individual.php';
      break;

    case "secoes_tipoSecao":
      include 'secoes_tipoSecao.php';
      break;

    case "servicos_slug":
      include 'servicos_slug.php';
      break;

    case "temas":
      include 'temas.php';
      break;

    case "posts_slug":
      include 'posts_slug.php';
      break;

    case "posts":
      include 'posts.php';
      break;

    case "posts_recentes":
      include 'posts_recentes.php';
      break;

    case "autor":
      include 'autor.php';
      break;

    case "categorias":
      include 'categorias.php';
      break;

    case "receitas":
      include 'receitas.php';
      break;

    case "eventos":
      include 'eventos.php';
      break;

    case "autor_card";
      include 'autor_card.php';
      break;

    case "receitas_slug";
      include 'receitas_slug.php';
      break;

    case "eventos_slug";
      include 'eventos_slug.php';
      break;

    case "posts_categoria";
      include 'posts_categoria.php';
      break;

    case "marcas";
      include 'marcas.php';
      break;

    case "marcas_slug";
      include 'marcas_slug.php';
      break;

    case "produtos";
      include 'produtos.php';
      break;

    case "produtos_listaSemCatalogo";
      include 'produtos_listaSemCatalogo.php';
      break;

    case "produtos_card";
      include 'produtos_card.php';
      break;

    default:
      $jsonSaida = json_decode(json_encode(
        array(
          "status" => "400",
          "retorno" => "Aplicacao " . $aplicacao . " Versao " . $versao . " Funcao " . $funcao . " Invalida" . " Metodo " . $metodo . " Invalido "
        )
      ), TRUE);
      break;
  }
}

if ($metodo == "PUT") {
  switch ($funcao) {

    case "paginas":
      include 'paginas_inserir.php';
      break;

    case "secoes":
      include 'secoes_inserir.php';
      break;

    case "secoesPagina":
      include 'secoesPagina_inserir.php';
      break;

    case "temas":
      include 'temas_inserir.php';
      break;

    case "posts":
      include 'posts_inserir.php';
      break;

    case "autor":
      include 'autor_inserir.php';
      break;

    case "categorias":
      include 'categorias_inserir.php';
      break;

    case "receitas":
      include 'receitas_inserir.php';
      break;

    case "eventos":
      include 'eventos_inserir.php';
      break;

    case "marcas":
      include 'marcas_inserir.php';
      break;

    default:
      $jsonSaida = json_decode(json_encode(
        array(
          "status" => "400",
          "retorno" => "Aplicacao " . $aplicacao . " Versao " . $versao . " Funcao " . $funcao . " Invalida" . " Metodo " . $metodo . " Invalido "
        )
      ), TRUE);
      break;
  }
}

if ($metodo == "POST") {

  switch ($funcao) {

    case "paginas":
      include 'paginas_alterar.php';
      break;

    case "secoes":
      include 'secoes_alterar.php';
      break;

    case "secoesPagina":
      include 'secoesPagina_alterar.php';
      break;


    case "temas":
      include 'temas_alterar.php';
      break;

    case "autor":
      include 'autor_alterar.php';
      break;

    case "categorias":
      include 'categorias_alterar.php';
      break;

    case "receitas":
      include 'receitas_alterar.php';
      break;

    case "eventos":
      include 'eventos_alterar.php';
      break;

    case "posts":
      include 'posts_alterar.php';
      break;

    case "marcas":
      include 'marcas_alterar.php';
      break;


    default:
      $jsonSaida = json_decode(json_encode(
        array(
          "status" => "400",
          "retorno" => "Aplicacao " . $aplicacao . " Versao " . $versao . " Funcao " . $funcao . " Invalida" . " Metodo " . $metodo . " Invalido "
        )
      ), TRUE);
      break;
  }
}

if ($metodo == "DELETE") {
  switch ($funcao) {

    case "paginas":
      include 'paginas_excluir.php';
      break;

    case "secoes":
      include 'secoes_excluir.php';
      break;

    case "secoesPagina":
      include 'secoesPagina_excluir.php';
      break;

    case "temas":
      include 'temas_excluir.php';
      break;

    case "posts":
      include 'posts_excluir.php';
      break;

    case "autor":
      include 'autor_excluir.php';
      break;

    case "categorias":
      include 'categorias_excluir.php';
      break;

    case "receitas":
      include 'receitas_excluir.php';
      break;

    case "eventos":
      include 'eventos_excluir.php';
      break;

    case "marcas":
      include 'marcas_excluir.php';
      break;


    default:
      $jsonSaida = json_decode(json_encode(
        array(
          "status" => "400",
          "retorno" => "Aplicacao " . $aplicacao . " Versao " . $versao . " Funcao " . $funcao . " Invalida" . " Metodo " . $metodo . " Invalido "
        )
      ), TRUE);
      break;
  }
}
