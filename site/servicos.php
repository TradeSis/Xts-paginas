<?php

foreach ($secoesPaginas as $secaoPagina) {
  if ($secaoPagina["coluna"] == 1) {
    include 'paginas/secao/' . $secaoPagina["tipoSecao"] . "/" . $secaoPagina["arquivoFonte"];
  }

  if ($secaoPagina["ordem"] <= $ordem) {
    continue;
  }

  if ($secaoPagina["arquivoFonte"] == "servicos") {
    continue;
  }
}
?>

<div class="col">
  <?php
  foreach ($secoesPaginas as $secaoPagina) {
    if ($secaoPagina["coluna"] == 2) {
      include 'paginas/secao/' . $secaoPagina["tipoSecao"] . "/" . $secaoPagina["arquivoFonte"];
    }

    if ($secaoPagina["ordem"] <= $ordem) {
      continue;
    }

    if ($secaoPagina["arquivoFonte"] == "servicos") {
      continue;
    }
  }
  ?>