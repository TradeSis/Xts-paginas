<?php
include_once(ROOT . '/paginas/database/marcas.php');
include_once(ROOT . '/paginas/database/posts.php');
$parametros = json_decode($secaoPagina["parametros"], true);
$marcas = buscaMarcas();
$noticias = buscaPosts();
?>
<style>
  .card{
    border: none;
  }
  h3 {
    color: #1B4D60;
        font-family: 'Poppins', sans-serif;
  }
</style>
<section>

  <div class="container-flex" data-aos="zoom-out">
  <center>
      <h3 style="margin-top: -60px;"><?php echo $parametros["titulo"] ?></h3>
    </center>
    <div class="row d-flex justify-content-center">

    <div class="card-group pl-4 pr-3 ">
  <div class="card">
  <a href="<?php echo $parametros["link1"] ?>"><img class="card-img-top w-75"  src="<?php echo URLROOT ?>/img/<?php echo $parametros["img1"] ?>" alt="Card image cap"></a>
    <div class="card-body">
      
      <p class="card-text"><?php echo $parametros["tituloCard1"] ?></p>
      
    </div>
  </div>
  <div class="card">
  <a href="<?php echo $parametros["link1"] ?>"><img class="card-img-top w-75"  src="<?php echo URLROOT ?>/img/<?php echo $parametros["img2"] ?>" alt="Card image cap"></a>
    <div class="card-body">
      
      <p class="card-text"><?php echo $parametros["tituloCard2"] ?></p>
      
    </div>
  </div>
  <div class="card">
  <a href="<?php echo $parametros["link1"] ?>"><img class="card-img-top w-75"  src="<?php echo URLROOT ?>/img/<?php echo $parametros["img3"] ?>" alt="Card image cap"></a>
    <div class="card-body">
      
      <p class="card-text"><?php echo $parametros["tituloCard3"] ?></p>
      
    </div>
  </div>
  <div class="card">
  <a href="<?php echo $parametros["link1"] ?>"><img class="card-img-top w-75"  src="<?php echo URLROOT ?>/img/<?php echo $parametros["img4"] ?>" alt="Card image cap"></a>
    <div class="card-body">
      
      <p class="card-text"><?php echo $parametros["tituloCard4"] ?></p>
      
    </div>
  </div>
  <div class="card">
  <a href="<?php echo $parametros["link1"] ?>"><img class="card-img-top w-75"  src="<?php echo URLROOT ?>/img/<?php echo $parametros["img5"] ?>" alt="Card image cap"></a>
    <div class="card-body">
      
      <p class="card-text"><?php echo $parametros["tituloCard5"] ?></p>
      
    </div>
  </div>
</div>

     
    </div>

  </div>
</section>