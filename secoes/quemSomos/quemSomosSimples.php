<?php
$parametro = json_decode($secaoPagina["parametros"], true);
?>
<style>
  p {
    color: var(--color-btn-text);
  }

  h1 {
    color: var(--color-h1-secondary);
    font-weight: 900
  }

  #quem_somos {
    background-color: var(--color-fundo-secondary);
  }
</style>
<!-- ======= Features Section ======= -->
<section id="quem_somos" class="features">
  <div class="container" data-aos="fade-up">
    <div class="about row g-0">

      <div class="col-lg-6  position-relative">
        <div class="content d-flex flex-column justify-content-center h-100">
          <img src="<?php echo URLROOT ?>/img/<?php echo $parametro['img'] ?>" alt="">

        </div>
      </div>

      <div class="col-lg-6 ">
        <div class="content d-flex flex-column justify-content-center h-100">
          <h1><?php echo $parametro['titulo'] ?></h1>
          <p class="fst-italic">
            <br>
            <br>
            <br>
          </p>

          <p><?php echo $parametro['descricao'] ?></p>
          <br>



        </div>
      </div>


    </div>

  </div>
</section>