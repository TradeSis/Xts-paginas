<?php
include_once(ROOT . '/paginas/database/receitas.php');
$parametro = json_decode($secaoPagina["parametros"], true);
$receitas = buscaReceitas();
?>
<style>
  a {
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
<div class="container-fluid">
  <div class="row titulo">
    <h2>
      <?php echo $parametro['titulo'] ?>
    </h2>
  </div>
  <hr>
  <div class="row">
    <?php foreach ($receitas as $receita) { ?>
      <div class="card-deck col-sm-4 mt-4">

        <div class="card shadow">
          <img class="card-img-top p-2" src="<?php echo $receita['imgReceita'] ?>"
            alt="Card image cap">
          <div class="card-body">
            <a class="card-title" href="receitas/<?php echo $receita['slug'] ?>">
              <?php echo $receita['nomeReceita'] ?>
            </a>
          </div>
          <footer class="text-right" style="margin-top: -20px;">
            <samp class="mr-3">
              <?php echo $receita['autorReceita'] ?>
            </samp>
          </footer>

        </div>
      </div>
    <?php } ?>

  </div>

</div>