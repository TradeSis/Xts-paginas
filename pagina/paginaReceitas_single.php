<?php
$post = buscaReceitasSlug($slugSingle);
$paginaSlug = buscaPagina($paginaDados['arquivoSingle']);
$secoesPaginas = buscaSecaoPagina($paginaSlug['idPagina']);
//$recentes = buscaPostsRecentes();
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

<body>


  <main id="main">
    <div class="row ml-4 mt-3"><a href="../receitas" style="font-size: 25px; color: #050A30">
        << Receitas </a>
    </div>

    <section style="margin-top: -30px;">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-9"> <!-- parte 1 -->

            <div class="row p-0">
              <div class="container shadow ml-3 p-3 float-left" data-aos="fade-up">
                <h2 class="title text-center"><?php echo $post['nomeReceita'] ?></h2>
                <div class="post-img">
                  <img src="<?php echo URLROOT ?>/img/<?php echo $post['imgReceita'] ?>" alt="" class="img-fluid">
                </div>
                <br>
                <br>
                <div class="content">
                  <p>
                    <?php echo $post['conteudoReceita'] ?>.
                  </p>
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