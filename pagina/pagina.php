<!DOCTYPE html>
<html>
<?php
include_once ROOT . "/vendor/vendor.php";
include_once(ROOT . '/paginas/database/temas.php');
include_once(ROOT . '/paginas/database/paginas.php');
include_once(ROOT . '/paginas/database/secaoPagina.php');
include_once(ROOT . '/paginas/database/posts.php');
include_once(ROOT . '/paginas/database/produtos.php');
include_once(ROOT . '/paginas/database/servicos.php');
include_once(ROOT . '/paginas/database/marcas.php');
include_once(ROOT . '/paginas/database/receitas.php');
include_once(ROOT . '/paginas/database/eventos.php');
$tema = buscatema();

?>
<body>
  <link href="<?php echo URLROOT ?>/paginas/css/<?php echo $tema["css"]; ?>" rel="stylesheet">
  <link href="<?php echo URLROOT ?>/paginas/css/main.css" rel="stylesheet"> <!--Estilo da pg principal -->
  <script src="<?php echo URLROOT ?>/paginas/js/main.js"></script>
  <link href="<?php echo URLROOT ?>/paginas/css/paginaError.css" rel="stylesheet">

  <?php

  $pagina = 'home';
  $slugSingle = null;

  if (isset($_GET['parametros'])) {

    $paginas = explode('/', $_GET['parametros']);


    $pagina = $paginas[0];

    if (isset($paginas[1])) {
      $slugSingle = $paginas[1];
    }

  }

echo "PAGINA=".$pagina."<HR>";
  
  $paginaDados = buscaPagina($pagina);
//echo json_encode($paginaDados) . "<HR>";

  if ($paginaDados == null) {
    echo "
  <div id='notfound'>
		<div class='notfound'>
			<div class='notfound-404'>
				<h3>Oops!! PÁGINA NÃO ENCONTRADA</h3>
				<h1><span>4</span><span>0</span><span>4</span></h1>
			</div>
		</div>
	</div>
";
    die();
  }
  
  $temas = buscaTemas($paginaDados['idTema']);

  $secoesPaginas = buscaSecaoPagina($paginaDados['idPagina']);
  // Secoes antes da pagina
  $ordem = 0;
  foreach ($secoesPaginas as $secaoPagina) {
    if ($secaoPagina["coluna"] == "") {
      include 'paginas/secoes/' . $secaoPagina["tipoSecao"] . "/" . $secaoPagina["arquivoFonte"];
      $ordem = $secaoPagina["ordem"];
    }
    if ($secaoPagina["arquivoFonte"] == "pagina") {
      break;
    }
  
  }
  

  if ($paginaDados['arquivoFonte'] !== 'index.php') {

    if (isset($paginaDados['arquivoSingle']) && !$slugSingle == null) {
      $paginaSlug = buscaPagina($paginaDados['arquivoSingle']);
      include 'paginas/pagina/' . $paginaSlug['arquivoFonte'];
    } else {
      include 'paginas/pagina/' . $paginaDados['arquivoFonte'];
    }

  } 

  // Secoes depois da pagina
foreach ($secoesPaginas as $secaoPagina) {
  if ($secaoPagina["coluna"] == "") {
    if ($secaoPagina["ordem"] <= $ordem) {
      continue;
    }

    if ($secaoPagina["arquivoFonte"] == "pagina") {
      continue;
    }

    include 'paginas/secoes/' . $secaoPagina["tipoSecao"] . "/" . $secaoPagina["arquivoFonte"];
  }
}

  ?>
  






</body>

</html>