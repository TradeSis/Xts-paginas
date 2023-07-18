<?php
include_once(ROOT . '/paginas/database/autor.php');
$autores = buscaAutorCard();
?>

<style>
  .circle {
    background-color: #aaa;
    border-radius: 50%;
    width: 150px;
    height: 150px;
    overflow: hidden;
    position: relative;
  }

  .card-body img {
    width: 120px;
    border-radius: 50%;
    border: 2px solid #6EC1E4;
  }
</style>


<?php foreach ($autores as $autor) {  ?>
<div class="card text-center mt-3 shadow" style="height: 165px ;border-radius: 15px;">
  <div class="card-body">
    <img src="<?php echo URLROOT ?>/img/<?php echo $autor['fotoAutor'] ?>" alt="">
    <h5 class="card-title"><?php echo $autor['nomeAutor'] ?></h5>
  </div>
</div>
<?php } ?>