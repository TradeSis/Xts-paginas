<?php
include_once(__DIR__ . '/../head.php');
?>

<style>
  .temp {
    color: black
  }
</style>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-2 mb-3">
      <ul class="nav nav-pills flex-column" id="myTab" role="tablist">
        <?php
        $stab = 'temas';
        if (isset($_GET['stab'])) {
          $stab = $_GET['stab'];
        }
        //echo "<HR>stab=" . $stab;
        ?>
        <li class="nav-item ">
          <a class="nav-link <?php if ($stab == "temas") {
            echo " active ";
          } ?>"
            href="?tab=configuracao&stab=temas" role="tab" style="color:black">Tema</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link <?php if ($stab == "paginas") {
            echo " active ";
          } ?>"
            href="?tab=configuracao&stab=paginas" role="tab" style="color:black">Paginas</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link <?php if ($stab == "secao") {
            echo " active ";
          } ?>"
            href="?tab=configuracao&stab=secao" role="tab" style="color:black">Seções</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link <?php if ($stab == "categorias") {
            echo " active ";
          } ?>"
            href="?tab=configuracao&stab=categorias" role="tab" style="color:black">Categoria</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link <?php if ($stab == "autor") {
            echo " active ";
          } ?>"
            href="?tab=configuracao&stab=autor" role="tab" style="color:black">Autor</a>
        </li>

      </ul>
    </div>
    <div class="col-md-10">
      <?php
          $ssrc = "";

          if ($stab == "temas") {
            $ssrc = "temas.php";
          }
          if ($stab == "paginas") {
            $ssrc = "paginas.php";
          }
          if ($stab == "secao") {
            $ssrc = "secao.php";
          }
          if ($stab == "categorias") {
            $ssrc = "categorias.php";
          }
          if ($stab == "autor") {
            $ssrc = "autor.php";
          }

          if ($ssrc !== "") {
            //echo $ssrc;
            include($ssrc);
          }

      ?>

    </div>
  </div>



</div>
<!-- /.container -->