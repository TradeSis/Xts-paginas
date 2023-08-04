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
//echo json_encode(URLROOT);

?>


<div class="sidebar-item search-form" >
  <h3 class="sidebar-title">Pesquisar titulo do Post</h3>
  <form action="" method="get" class="mt-3">
    <input type="text" name="titulo" >
    <button type="submit"><i class="bi bi-search"></i></button>
  </form>
</div>

<div class="sidebar-item categories">
  <h3 class="sidebar-title">Categorias</h3>
  <select name="categoria" id="categoria">
    <option onclick="searchData()">Categorias</option>
    <option value="tecnologia">Tecnologia</option>
    <option value="informacao">Informacão</option>
    <option value="novidade">Novidade</option>
  </select>
</div>

<div style="text-align: right;">
  <a href="blog" role="button" class="btn btn-sm mt-2" style="background-color: #3EB5CA;color: #fff">Limpar</a>
</div>
