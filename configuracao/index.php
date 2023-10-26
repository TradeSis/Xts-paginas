<?php
//Lucas 17102023 novo padrao
include_once(__DIR__ . '/../header.php');
?>
<!doctype html>
<html lang="pt-BR">

<head>

  <?php include_once ROOT . "/vendor/head_css.php"; ?>

</head>

<body>

  <div class="container-fluid">
    <div class="row pt-4">
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
            <a class="nav-link ts-tabConfig <?php if ($stab == "temas") {
                                              echo " active ";
                                            } ?>" href="?tab=configuracao&stab=temas" role="tab">Tema</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link ts-tabConfig <?php if ($stab == "secao") {
                                              echo " active ";
                                            } ?>" href="?tab=configuracao&stab=secao" role="tab">Seções</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link ts-tabConfig <?php if ($stab == "categorias") {
                                              echo " active ";
                                            } ?>" href="?tab=configuracao&stab=categorias" role="tab">Categoria</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link ts-tabConfig <?php if ($stab == "autor") {
                                              echo " active ";
                                            } ?>" href="?tab=configuracao&stab=autor" role="tab">Autor</a>
          </li>

        </ul>
      </div>
      <div class="col-md-10">
        <?php
        $ssrc = "";

        if ($stab == "temas") {
          $ssrc = "temas.php";
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
        <li class="nav-item ">
          <a class="nav-link ts-tabConfig <?php if ($stab == "temas") {
            echo " active ";
          } ?>"
            href="?tab=configuracao&stab=temas" role="tab">Tema</a>
        </li>
        
        <li class="nav-item ">
          <a class="nav-link ts-tabConfig <?php if ($stab == "secao") {
            echo " active ";
          } ?>"
            href="?tab=configuracao&stab=secao" role="tab">Seções</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link ts-tabConfig <?php if ($stab == "categorias") {
            echo " active ";
          } ?>"
            href="?tab=configuracao&stab=categorias" role="tab">Categoria</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link ts-tabConfig <?php if ($stab == "autor") {
            echo " active ";
          } ?>"
            href="?tab=configuracao&stab=autor" role="tab">Autor</a>
        </li>

      </div>
    </div>
    <?php
        $ssrc = "";

        if ($stab == "temas") {
          $ssrc = "temas.php";
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

  <!-- LOCAL PARA COLOCAR OS JS -->

  <?php include_once ROOT . "/vendor/footer_js.php"; ?>

  <!-- LOCAL PARA COLOCAR OS JS -FIM -->
</body>

</html>