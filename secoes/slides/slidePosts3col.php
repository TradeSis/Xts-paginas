<?php
include_once(ROOT . '/paginas/database/posts.php');
$parametros = json_decode($secaoPagina["parametros"], true);
$noticias = buscaPosts();
?>
<style>
    .swiper-slide {
        text-align: center;
    }
    .swiper-slide p{
        text-align: center;
        align-items: center;
        color: #1B4D60;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
    }
    .section-header{
        margin-top: 50px;
        margin-bottom: -70px;
    }
    .section-header h2{
 
        color: #1B4D60;
        font-family: 'Poppins', sans-serif;
    }
</style>

   

      <div class="container" data-aos="zoom-out">
      <div class="section-header">
      <h2><?php echo $parametros["titulo"] ?></h2>
      <h2 style="margin-top: -30px;"><?php echo $parametros["subTitulo"] ?></h2>
    </div>
        <div class="posts-slider swiper p-4 mt-4">
        <div class="swiper-wrapper align-items-center">

          <?php 
          foreach ($noticias as $noticia) { 
          ?>
    
            <div class="col-sm-4 swiper-slide shadow p-2" style="height: 250px; border-radius: 10px;">
            <a href="blog/<?php echo $noticia["slug"] ?>"><img src="<?php echo URLROOT ?>/img/<?php echo $noticia["imgDestaque"] ?>" class="img-fluid d-block w-100" style="border-radius: 10px; " alt=""></a>
              <p class="mt-4"><?php echo $noticia["titulo"] ?></p>
            </div>

          <?php } ?>
          </div>
        </div>

      </div>