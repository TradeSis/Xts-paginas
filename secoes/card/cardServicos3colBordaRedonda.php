<?php

$servicos = buscaServicosCards();
$parametro = json_decode($secaoPagina["parametros"],true);
?>


<section id="servicos" class="values">

  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2><?php echo $parametro['titulo'] ?></h2>
      <p><?php echo $parametro['descricao'] ?></p>
    </div>

    <div class="row">

      <?php foreach ($servicos as $servico) { ?>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="box" style="border:solid 1px #566370; border-radius: 25px; background-color:<?php echo $parametro['corCard'] ?>">
            <img  src="<?php echo URLROOT ?>/img/<?php echo $servico['imgServico'] ?>" class="img-fluid" alt="">
            
            <a href="<?php echo $servico['linkServico'] ?>"><h3><?php echo $servico['nomeServico'] ?></h3></a>
            <p><?php echo $servico['descricaoServico'] ?></p>
          </div>
        </div>
      <?php } ?>
    </div>

  </div>

</section>