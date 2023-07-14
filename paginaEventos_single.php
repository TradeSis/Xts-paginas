<?php
$evento = buscaEventosSlug($slugSingle);

$paginaSlug = buscaPagina($paginaDados['arquivoSingle']);
$secoesPaginas = buscaSecaoPagina($paginaSlug['idPagina']);

// Secoes antes da pagina
$ordem = 0;
foreach ($secoesPaginas as $secaoPagina) {
  if ($secaoPagina["coluna"] == "") {
    include 'secoes/' . $secaoPagina["tipoSecao"] . "/" . $secaoPagina["arquivoFonte"];
    $ordem = $secaoPagina["ordem"];
  }
  if ($secaoPagina["arquivoFonte"] == "pagina") {
    break;
  }
}
?>

<style>
  h2 {
    color: #050A30;
    font-family: 'Poppins', sans-serif;
    font-size: 30px;
    font-weight: 900;
  }
</style>
<link href="<?php echo URLROOT ?>/paginas/css/<?php echo $paginaDados["css"]; ?>" rel="stylesheet">

<body>


  <div class="container text-center" style="width: 1000px;">
    <div class="row ml-4 mt-3"><a href="../eventos" style="font-size: 25px; color: #050A30">
        << Eventos </a>
    </div>
    <h2 class="title text-center" style="margin-top: 60px;"><?php echo $evento['nomeEvento'] ?></h2>
    <div class="mt-4">
      <p class="text-justify"><?php echo $evento['descricaoEvento'] ?></p>
    </div>

  </div>

  <?php
  // Secoes depois da pagina
  foreach ($secoesPaginas as $secaoPagina) {
    if ($secaoPagina["coluna"] == "") {
      if ($secaoPagina["ordem"] <= $ordem) {
        continue;
      }

      if ($secaoPagina["arquivoFonte"] == "pagina") {
        continue;
      }

      include 'secoes/' . $secaoPagina["tipoSecao"] . "/" . $secaoPagina["arquivoFonte"];
    }
  }
  ?>