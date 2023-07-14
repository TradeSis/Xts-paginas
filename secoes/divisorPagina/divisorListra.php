<?php

$parametro = json_decode($secaoPagina["parametros"],true);

?>
<section id="cta" class="cta">
      <div class="container-fluid" data-aos="zoom-out" style="background-color: var(--color-fundo-primary);">

        <div class="row g-0 d-flex justify-content-center">
          <h2><?php echo $parametro["titulo"] ?></h2>
        </div>

      </div>
    </section>