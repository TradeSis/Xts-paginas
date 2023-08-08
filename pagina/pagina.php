
<!DOCTYPE html>
<html>

<?php
include_once ROOT. "/vendor/vendor.php";

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

<link href="<?php echo URLROOT ?>/paginas/css/main.css" rel="stylesheet"> <!--Estilo da pg principal -->
<script src="<?php echo URLROOT ?>/paginas/js/main.js"></script>


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

$paginaDados = buscaPagina($pagina);
if ($paginaDados['arquivoFonte'] !== 'index.php') {

  if (isset($paginaDados['arquivoSingle']) && !$slugSingle == null) {
    $paginaSlug = buscaPagina($paginaDados['arquivoSingle']);
    include 'paginas/pagina/' . $paginaSlug['arquivoFonte'];
  } else {
    include 'paginas/pagina/' . $paginaDados['arquivoFonte'];
  }
  return;
}

$secoesPaginas = buscaSecaoPagina($paginaDados['idPagina']);

foreach ($secoesPaginas as $secaoPagina) {
    
    include 'paginas/secoes/' . $secaoPagina["tipoSecao"] . "/" . $secaoPagina["arquivoFonte"];
}


?>
<link href="<?php echo URLROOT ?>/paginas/css/<?php echo $paginaDados["css"]; ?>" rel="stylesheet">






</body>

</html>