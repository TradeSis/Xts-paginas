<?php 
$post = buscaPostSlug($slugSingle);
$paginaSlug = buscaPagina($paginaDados['arquivoSingle']);
$secoesPaginas = buscaSecaoPagina($paginaSlug['idPagina']);

// Secoes antes da pagina
$ordem = 0;
foreach ($secoesPaginas as $secaoPagina) {
  if ($secaoPagina["coluna"] == "") {
    include 'paginas/secoes/' . $secaoPagina["tipoSecao"] . "/" . $secaoPagina["arquivoFonte"];
    $ordem = $secaoPagina["ordem"];
  }
  if ($secaoPagina["arquivoFonte"] == "pagina") {
    break;
  }
}

?>
<link href="<?php echo URLROOT ?>/paginas/css/<?php echo $paginaDados["css"]; ?>" rel="stylesheet">


<style>
   h2 {
        color: #060944;
        font-size: 36px;
    }

    h3 {
        color: #060944;
        font-size: 20px;
        margin-top: 5px;
    }
</style>
<body>


  <main id="main">
    <div class="row ml-4 mt-3"><a href="../noticias" style="font-size: 25px; color: #050A30">
        << Noticias </a>
    </div>
    <!-- ======= Blog Section ======= -->
    <section style="margin-top: -30px;">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-9"> <!-- parte 1 -->

            <div class="row p-0">
              <div class="container text-center shadow ml-3 p-3 float-left" data-aos="fade-up">
                <div class="post-img">
                  <img src="<?php echo URLROOT ?>/img/<?php echo $post['imgDestaque'] ?>" alt="" class="img-fluid">
                </div>

                <h2><?php echo $post['titulo'] ?></h2>

                <div class="content">
                  <p>
                    <?php echo $post['txtConteudo'] ?>.
                  </p>
                  <div class="text-center" style="margin-top: 30px;">
                      <img src="<?php echo URLROOT ?>/img/<?php echo $post['fotoAutor'] ?>" alt="" width="150px" height="150px" class="img-fluid">
                      <h3><?php echo $post['nomeAutor'] ?></h3>
                  </div>
                </div>


              </div>
            </div>

          </div>

          <div class="col-lg-3"> <!-- parte 2 -->
            <div class="sidebar">

              <?php
              foreach ($secoesPaginas as $secaoPagina) {
                if ($secaoPagina["coluna"] == 2) {
                  include 'paginas/secoes/' . $secaoPagina["tipoSecao"] . "/" . $secaoPagina["arquivoFonte"];
                }

                if ($secaoPagina["ordem"] <= $ordem) {
                  continue;
                }

                if ($secaoPagina["arquivoFonte"] == "pagina") {
                  continue;
                }
              }
              ?>

            </div>
          </div>

        </div>

      </div>
    </section>
  </main>




  <?php
  // Secoes depois da pagina
  foreach ($secoesPaginas as $secaoPagina) {
    if ($secaoPagina["coluna"] == "") {
      if ($secaoPagina["ordem"] <= $ordem) {
        continue;
      }

      if ($secaoPagina["arquivoFonte"] == "pagina") {
        continue;
      }

      include 'paginas/secoes/' . $secaoPagina["tipoSecao"] . "/" . $secaoPagina["arquivoFonte"];
    }
  }
  ?>