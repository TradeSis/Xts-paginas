<?php

$servicos = buscaServicos();
// busca parametros da secao
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
        <div class="col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <div class="box">
            <img src="<?php echo URLROOT ?>/img/<?php echo $servico['imgServico'] ?>" class="img-fluid" alt="">
            <h3><?php echo $servico['nomeServico'] ?></h3>
            <p><?php echo $servico['descricaoServico'] ?></p>
            <div class="read-more mt-auto align-self-end">
              <a href="<?php echo $servico['linkServico'] ?>"><?php echo $parametro['textoBotao'] ?></a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>

  </div>
  

</section>