<?php
$recentes = buscaPostsRecentes();

if (isset($_GET['titulo'])) {
  $titulo = $_GET['titulo'];
} else {
  $titulo = null;
}

if (isset($_GET['categoria'])) {
  $categoria = $_GET['categoria'];
} else {
  $categoria = null;
}
$posts = buscaPosts(null, $titulo, $categoria);
//echo json_encode($posts);

?>


<?php foreach ($posts as $post) { ?>

<div class="col-lg-6 mt-4">
  <article class="d-flex flex-column">
    <div class="post-img">
      <img src="<?php echo URLROOT ?>/img/<?php echo $post["imgDestaque"] ?>" alt="" class="img-fluid">
    </div>

    <h2 class="title">
      <a href="<?php echo $post['slug'] ?>"><?php echo $post["titulo"] ?></a>
    </h2>

    <div class="meta-top">
      <ul>
        <div class="row">
          <div class="col">
            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href=""><?php echo $post["autor"] ?></a></li>
            <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href=""><?php echo $post["comentarios"] ?></a></li>
          </div>
          <div class="col">
            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href=""><time><?php echo date('d/m/Y', strtotime($post['data'])) ?></time></a></li>
            <li class="d-flex align-items-center"><i class="bi bi-tag"></i> <a href=""><?php echo $post["categoria"] ?></a></li>
          </div>
        </div>
      </ul>
    </div>

    <div class="content">
      <p><?php echo $post["textoIntro"] ?>.</p>
    </div>

    <div class="read-more mt-auto align-self-end">
      <a href="<?php echo $post['slug'] ?>">Ler mais</a>
    </div>
  </article>
</div>

<?php } ?>