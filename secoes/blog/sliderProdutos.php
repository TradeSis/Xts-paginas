<?php
include_once(ROOT . '/paginas/database/produtos.php');
$produtos = buscaCardProdutos();
//echo json_encode($produtos);
?>

<style>
  .carousel-control-prev{
    margin-left: 30px;
  }
  .carousel-control-next{
    margin-right: 30px;
  }

  p{
    color: #1B4D60;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
  }
</style>


<div class="sidebar-item mt-2 shadow" style="border-radius: 15px;"> 
  <div id="carouselExampleIndicators" class="carousel" data-ride="carousel" style="margin-left: -50px; margin-right: -50px">
    <div class="carousel-inner pt-2">
    <center>
      <div class="carousel-item active" >
        <img class="d-block w-50" height="200px" style="border-radius: 15px" src="<?php echo URLROOT ?>/img/prod1_prod1.jpg" alt="First slide">
        <center>
          <br>
          <hr style="width: 20vw;">
          <p class="mt-1">Destaques</p>
        </center>
      </div>
      <?php foreach ($produtos as $produto) { ?>
        <div class="carousel-item">
          <img class="d-block w-50" height="200px" style="border-radius: 15px" src="<?php echo URLROOT ?>/img/<?php echo $produto['imgProduto'] ?>" alt="Second slide">
          <center>
            <br>
            <hr style="width: 20vw;">
            <p class="mt-1"><?php echo $produto['nomeProduto'] ?></p>
          </center>
        </div>
      <?php } ?>
      </center>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>