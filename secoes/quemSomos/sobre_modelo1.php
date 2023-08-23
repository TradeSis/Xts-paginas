<?php
$parametro = json_decode($secaoPagina["parametros"], true);
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

<!-- ======= Features Section ======= -->
<section class="p-0">
  <div class="container-fluid">
    <div class="row titulo">
      <h2><?php echo $parametro["titulo"] ?></h2>
    </div>
    <hr>
    <div class="row" style="margin-top:50px">
          <div class="col-md-4">
            <div>
              <img src="<?php echo URLROOT ?>/imgCopia/comcacau/imgSobre.jpg">
            </div>
          </div>
          <div class="col-md-7 p-0">
            <p>
            <?php echo $parametro["descricao"] ?>
            </p>
          </div>

        </div>
  

  </div>
</section>