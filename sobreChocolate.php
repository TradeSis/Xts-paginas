<?php
    include_once(ROOT . '/sistema/database/posts.php');
    /* $parametro = json_decode($secaoPagina["parametros"], true); */
    $posts = buscaPostChocolate();
    //echo json_encode($posts);
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
      <h2>sobre Chocolate - teste</h2>
    </div>
    <hr>

    <div class="card-deck" style="margin-top: 30px;">
    <?php foreach($posts as $post) {  ?>
            <div class="card shadow">
                <img class="card-img-top" src="<?php echo URLROOT ?>/img/<?php echo $post['imgDestaque'] ?>" alt="Card image cap">
                <div class="card-body">
                  <a href="noticias/<?php echo $post['slug'] ?>"><?php echo $post['titulo'] ?></a>
                </div>

            </div>
        <?php } ?>
    </div>

  </div>

</section>