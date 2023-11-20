<?php
$marca = buscaMarcasSlug($slugSingle);
$produtos = buscaProdutos(null, $marca['idMarca']);
$paginaSlug = buscaPaginas(null,$paginaDados['arquivoSingle']);
$secoesPaginas = buscaSecaoPagina($paginaSlug['idPagina']);

// Secoes antes da pagina
$ordem = 0;
foreach ($secoesPaginas as $secaoPagina) {

  if ($secaoPagina["arquivoFonte"] == "pagina") {
    break;
  }

  include 'paginas/secoes/' . $secaoPagina["tipoSecao"] . "/" . $secaoPagina["arquivoFonte"];
  $ordem = $secaoPagina["ordem"];
}

?>
<link href="<?php echo URLROOT ?>/paginas/css/<?php echo $paginaDados["css"]; ?>" rel="stylesheet">

<style>
  .container {
    display: block;
    z-index: 100;
  }

  .title {
    margin-top: 100px;
  }

  img {
    border-radius: 15px;
  }

  h4 {
    color: #1B4D60;
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
    margin-left: 70px;
  }
</style>

<body>
  <div class="container">
    <div class="row ml-4 mt-3"><a href="../marcas" style="font-size: 25px; color: #050A30">
        << marcas </a>
    </div>
  </div>

  <div class="container-fluid shadow" style="height:200px;background-color: #38a1b4 ;background-image: url('<?php echo URLROOT ?>/img/<?php echo $marca['bannerMarca'] ?>')">
  </div>

  <div class="container" style="margin-top: -90px;">
    <div class="row">
      <div class="col-sm-2">

        <img src="<?php echo URLROOT ?>/img/<?php echo $marca['imgMarca'] ?>" alt="" class="img-fluid shadow">

      </div>
      <div class="col-sm-9">
        <h2 class="title"><?php echo $marca['nomeMarca'] ?></h2>
      </div>
    </div>
  </div>
  <section style="margin-top: -30px;">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-4  mr-4"> <!-- parte 1 -->

          <div class="row p-3" style="border: 1px solid black; border-radius: 15px">
            <p><?php echo $marca['descricaoMarca'] ?></p>
          </div>

        </div>

        <div class="col-lg-7"> <!-- parte 2 -->
          <?php
          if ($marca['catalogo'] == 1) { ?>
            <div class="row" style="text-align: center;">
              <h4>veja o catálogo de alguns produtos desta marca:</h4>
              <?php foreach ($produtos as $produto) { ?>

                <div class="col-lg-4 shadow mt-4" data-aos="fade-up" data-aos-delay="200" style="border-radius: 10px;">
                  <div>
                    <a href="#"><img src="<?php echo URLROOT ?>/img/<?php echo $produto['imgProduto'] ?>" style="border-radius: 10px;" class="img-fluid shadow mt-2" alt=""></a>
                    <center>
                      <hr style="width: 10vw; background-color:#000">
                      <p><?php echo $produto['nomeProduto'] ?></p>
                    </center>
                  </div>
                </div>
              <?php } ?>

            </div>
          <?php } else {
            include 'paginas/secoes/lista/listaProdutos_semCatalogo.php';
          }
          ?>
        </div>

      </div>
    </div>
  </section>


  <?php
  // Secoes depois da pagina
  foreach ($secoesPaginas as $secaoPagina) {

    if ($secaoPagina["ordem"] <= $ordem) {
      continue;
    }

    if ($secaoPagina["arquivoFonte"] == "pagina") {
      continue;
    }

    include 'paginas/secoes/' . $secaoPagina["tipoSecao"] . "/" . $secaoPagina["arquivoFonte"];
  }
  ?>