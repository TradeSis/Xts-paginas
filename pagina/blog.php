<?php

$secoesPaginas = buscaSecaoPagina($paginaDados['idPagina']);

?>
<link href="<?php echo URLROOT ?>/paginas/css/<?php echo $paginaDados["css"]; ?>" rel="stylesheet">

<body>


  <main id="main">

    <!-- ======= Blog Section ======= -->
    <section style="margin-top: -30px;">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-9"> <!-- parte 1 -->

            <div class="row p-0">
              <?php

              foreach ($secoesPaginas as $secaoPagina) {
                if ($secaoPagina["coluna"] == 1) {
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

</body>
