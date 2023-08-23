<?php

$servicos = buscaServicos();
$parametro = json_decode($secaoPagina["parametros"],true);


?>
<style>
    .card:hover{
    transition: 0.3s;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 2px 5px;
  }
  .card-body .card-text{
    color: #485664;
  }

  .card-body .btnCardServico{
    color: var(--color-btn-primary);
    font-weight: 700;
  }

  .card-body .btn:hover{
    color: #16448F;
  }


</style>
<section id="servicos" class="values">

  <div class="container" data-aos="fade-up" style="align-items: center;">

    <div class="section-header ">
      <h5><?php echo $parametro['titulo'] ?></h5>
      <h2><?php echo $parametro['descricao'] ?></h2>
    </div>

    <div class="row">
        <?php foreach($servicos as $servico){  ?>

      <div class="col-sm-6 mt-4">
        <div class="card">
          <div class="row">
            <div class="col-sm-2 text-center d-flex align-items-center align-self-center">
                <img src="<?php echo URLROOT ?>/img/<?php echo $servico['imgServico'] ?>" class="img-fluid ml-4" alt="">
            </div>
            <div class="col-sm-10">
              <div class="card-body">
                <h5 class="card-title"><?php echo $servico['nomeServico'] ?></h5>
                <p class="card-text"><?php echo $servico['descricaoServico'] ?>.</p>
                <a href="<?php echo $servico['linkServico'] ?>" class="btnCardServico"><?php echo $parametro['textoBotao'] ?><i class="bi bi-caret-right-fill"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php } ?>

  </div>

</section>