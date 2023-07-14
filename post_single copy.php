<?php 

$secoesPaginas= buscaSecaoPagina($paginaDados['idPagina']);
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

$post = buscaSlug($slugSingle);
echo json_encode($post);

?>

<body>

 

  <main id="main">
<?php echo $post['titulo'] ?>
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog Details</h2>
          <ol>
            <li><a href="<?php ROOT ?>/ts">Home</a></li>
            <li><a href="../blog">Blog</a></li>
            <li>Blog Details</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8">
            <article class="blog-details">

              <div class="post-img">
                <img src="../img/imgPosts/<?php echo $post['imgDestaque'] ?>" alt="" class="img-fluid">
              </div>

              <h2 class="title"><?php echo $post['titulo'] ?></h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html"><?php echo $post['autor'] ?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01"><?php echo date('d/m/Y', strtotime($post['data'])) ?></time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html"><?php echo $post['comentarios'] ?></a></li>
                </ul>
              </div>

              <div class="content">
                <p>
                  <?php echo $post['textoIntro'] ?>.
                </p>

                <p>
                  <?php echo $post['txtConteudo'] ?>.
                </p>
              </div>

              <div class="meta-bottom">
             
                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><a href="#"><?php echo $post['categoria'] ?></a></li>
                
                </ul>
              </div>

            </article>
          </div>

          <div class="col-lg-4">
            <div class="sidebar">

              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Posts Recentes</h3>
                <div class="mt-3">
                  <?php foreach ($recentes as $recente) { ?>
                    <div class="post-item mt-3">
                      <img src="../img/imgPosts/<?php echo $recente['imgDestaque'] ?>" alt="" class="flex-shrink-0" width="40px" height="60px">
                      <div>
                        <h4><a href="blog-post.html"><?php echo $recente['titulo'] ?></a></h4>
                        <time><?php echo date('d/m/Y', strtotime($recente['data'])) ?></time>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>

            </div>
          </div>


        </div>

      </div>
    </section>

  </main>


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  
</body>

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