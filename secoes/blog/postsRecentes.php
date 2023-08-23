
<?php
$recentes = buscaPostsRecentes();
//echo json_encode($recentes);
?>


<div class="sidebar-item recent-posts mt-2">
  <h3 class="sidebar-title">Posts Recentes2</h3>
  <div class="mt-3">
    <?php foreach ($recentes as $recente) { ?>
      <div class="post-item mt-3">
        <img src="<?php echo URLROOT ?>/img/<?php echo $post["imgDestaque"] ?>" alt="" class="flex-shrink-0" width="40px" height="60px">
        <div>
          <h4><a href="blog-post.html"><?php echo $recente['titulo'] ?></a></h4>
          <time><?php echo date('d/m/Y', strtotime($recente['data'])) ?></time>
        </div>
      </div>
    <?php } ?>
  </div>
</div>