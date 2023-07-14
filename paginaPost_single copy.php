<?php //paginaPostSingle
$post = buscaPostSlug($slugSingle); //buscaPost_slug
//echo json_encode($post);
$paginaSlug = buscaPagina($paginaDados['arquivoSingle']);

$secoesPaginas= buscaSecaoPagina($paginaSlug['idPagina']);
//echo json_encode($paginaDados['idPagina']);
$recentes = buscaPostsRecentes();
// Secoes antes da pagina
$ordem = 0;
foreach ($secoesPaginas as $secaoPagina){
      
   if($secaoPagina["arquivoFonte"]=="pagina") {
      break;
    }

    include 'secoes/' . $secaoPagina["tipoSecao"] . "/" . $secaoPagina["arquivoFonte"];
    $ordem = $secaoPagina["ordem"];

}



?>
<link href="<?php echo URLROOT ?>/paginas/css/<?php echo $paginaDados["css"]; ?>" rel="stylesheet"> 
<body>

 
<main id="main">

<!-- ======= Blog Section ======= -->
<section style="margin-top: -30px;">
  <div class="container-fluid" data-aos="fade-up">

    <div class="row">

      <div class="col-lg-9"> <!-- parte 1 -->

        <div class="row p-0">
        <div class="container shadow ml-3 p-3 float-left" data-aos="fade-up">
    <div class="post-img">
      <img src="<?php echo URLROOT ?>/img/<?php echo $post['imgDestaque'] ?>" alt="" class="img-fluid">
    </div>

    <h2 class="title text-center"><?php echo $post['titulo'] ?></h2>

    <div class="content">
            

            <p>
              <?php echo $post['txtConteudo'] ?>.
            </p>

          

          </div>
    

  </div>
        </div>

      </div>

      <div class="col-lg-3"> <!-- parte 2 -->
        <div class="sidebar">

          <?php
          foreach ($secoesPaginas as $secaoPagina) {
            if ($secaoPagina["coluna"] == 2) {
              include 'secoes/' . $secaoPagina["tipoSecao"] . "/" . $secaoPagina["arquivoFonte"];
            }

            if ($secaoPagina["ordem"] <= $ordem) {
              continue;
            }

            if ($secaoPagina["arquivoFonte"] == "pagina") {
              continue;
            }
          }
          ?>

        </div>
      </div>

    </div>

  </div>
</section>
</main>











<?php
// Secoes depois da pagina
foreach ($secoesPaginas as $secaoPagina){
    
  if($secaoPagina["ordem"]<=$ordem) {
    continue;
  }
 
    if($secaoPagina["arquivoFonte"]=="pagina") {
      continue;
    }

    include 'secoes/' . $secaoPagina["tipoSecao"] . "/" . $secaoPagina["arquivoFonte"];
  }
?>