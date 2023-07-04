<?php
    include_once(ROOT . '/sistema/database/noticias.php');
    $noticias = buscaNoticiasCuriosidades();
    //echo json_encode($noticias);
?>
<style>
  p {
    color: #1B4D60;
    /* var(--color-btn-text) */
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
</style>
<section>
  <div class="container-fluid">
  <div class="row titulo" style="margin-top: -50px;">
      <h2>notícias sobre chocolate</h2>
    </div>
    <hr>
    <div class="row p-0" >
        
        <?php foreach($noticias as $noticia) {  ?>
            <div class="col-sm-6 mt-2">
            <div class="card" style="width: 450px;">
                <img class="card-img-top" src="<?php echo URLROOT ?>/img/<?php echo $noticia['imgNoticia'] ?>" alt="Card image cap">
                <div class="card-body">
                  <a href="noticias/<?php echo $noticia['tituloNoticia'] ?>"><?php echo $noticia['tituloNoticia'] ?></a>
                </div>
            </div>
        
        </div>
        <?php } ?>
      
    </div>
  </div>

</section>