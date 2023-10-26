      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-9"> <!-- parte 1 -->

            <div class="row">
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
  

  <script>
    var select = document.getElementById('categoria')

    select.addEventListener('change', function() {
      /*  console.log(select.value) */
      window.location = 'blog?categoria=' + select.value;
    })

    function searchData() {
      window.location = 'blog';
    }
  </script>
