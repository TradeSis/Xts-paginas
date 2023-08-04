<?php

include_once(ROOT . '/paginas/database/marcas.php');
$parametros = json_decode($secaoPagina["parametros"], true);

$lojasEspecializadas = $parametros["lojasEspecializadas"];
if ($lojasEspecializadas == "null") {
    $lojasEspecializadas = null;
}
$estado = null;

$marcas = buscaMarcasAtiva($estado,$lojasEspecializadas);
?>
<style>
    a {
        color: #1B4D60;
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        font-weight: 500;
    }

    hr {
        background-color: #3B3D42;
        margin-top: -10px;
        font-size: 14px;
    }

    h2 {
        color: #060944;
        font-size: 36px;
    }

    .titulo {
        margin-left: 5px;
    }

    .card-deck .card{
        border: none;
    }
    .card-deck .cardPodcast{
        align-items: center;
    }
    .card-deck .cardPodcast img{
       
        width: 150px;
        height: 150px;
    }

    [class="1"] {
    
    /* border: 2px solid #b7b3b3; */
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;

  }
</style>


<div class="container-fluid" style="margin-top: 10px;">
    <div class="row titulo">
            <h2><?php echo $parametros['titulo'] ?></h2>
        </div>
        <hr>
    


    <div class="row">

    <?php foreach ($marcas as $marcas) {  ?>
  <div class="col-sm-2" data-aos="fade-up" data-aos-delay="200">
    <div class="box text-center">
    <a href="marcas/<?php echo $marcas['slug'] ?>"><img class="<?php echo $marcas['catalogo'] ?>" src="<?php echo URLROOT ?>/img/<?php echo $marcas['imgMarca'] ?>" class="img-fluid" alt=""></a>
      
      <a href="marcas/<?php echo $marcas['slug'] ?>"><p class="mt-3"><?php echo $marcas['nomeMarca'] ?></p></a>
      
    </div>
  </div>
<?php } ?>
</div>

</div>
