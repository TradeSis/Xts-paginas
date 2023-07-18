<?php
include_once(ROOT . '/paginas/database/marcas.php');
$parametros = json_decode($secaoPagina["parametros"], true);
$marcas = buscaMarcas();

?>
<style>
    .swiper-slide {
        text-align: center;
    }
    .swiper-slide a{
        text-align: center;
        align-items: center;
        color: #1B4D60;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
    }
</style>
<div class="container" style="margin-bottom: 50px;">

<center>
  <h1>Marcas</h1>
</center>


    <!-- ======= Clients Section/MARCAS ======= -->

      <div class="container mt-3" data-aos="zoom-out">


        <div class="marcas-slider swiper">
        <div class="swiper-wrapper align-items-center">

          <?php 
          foreach ($marcas as $marca) { 
          ?>
    
            <div class="swiper-slide">
                <img src="<?php echo URLROOT ?>/img/<?php echo $marca["imgMarca"] ?>" class="img-fluid" alt="">
                <a href="marcas/<?php echo $marca['nomeMarca'] ?>"><?php echo $marca['nomeMarca'] ?></a>
            </div>

          <?php } ?>
          </div>
        </div>

      </div>
      </div>