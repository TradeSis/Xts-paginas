<?php
$secoesPaginas = buscaSecaoPagina($paginaDados['idPagina']);

// Secoes antes da pagina
$ordem = 0;
foreach ($secoesPaginas as $secaoPagina) {
    if ($secaoPagina["coluna"] == "") {
        include 'secoes/' . $secaoPagina["tipoSecao"] . "/" . $secaoPagina["arquivoFonte"];
        $ordem = $secaoPagina["ordem"];
    }
    if ($secaoPagina["arquivoFonte"] == "pagina") {
        break;
    }
}
?>

<style>
    .line {
        width: 100%;
        border-bottom: 1px solid #707070;
    }

    #tabs .tab {
        display: inline-block;
        padding: 5px 10px;
        cursor: pointer;
        position: relative;
        z-index: 5;
        /* background-color: lightgray; */
         color: #1B4D60;
    }

    #tabs .whiteborder {
       /*  border: 1px solid #707070; */
        border-bottom: 3px solid lightblue;
        border-radius: 3px 3px 0 0;
       /*  background-color: lightblue; */
         color: #1B4D60;
    }

    #tabs .tabContent {
        position: relative;
        top: -1px;
        z-index: 1;
        padding: 10px;
        border-radius: 0 0 3px 3px;
         color: #1B4D60;
    }

    #tabs .hide {
        display: none;
    }

    #tabs .show {
        display: block;
    }
</style>


<div id="tabs" class="mt-1 text-center">
    <div class="tab whiteborder">noticias</div>
    <div class="tab">sobre Chocolate</div>
    <div class="tab">sobre Cacau</div>
    <div class="tab">curiosidades</div>
   <!--  <div class="line"></div> -->

    <div class="tabContent">
        <?php
        $categoria = null;
        include 'blog.php'; ?>
    </div>
    <div class="tabContent">
        <?php
        $categoria = 3;
        $titulo = 'sobre Chocolate';
        include 'blogCategoria.php'; ?>
    </div>
    <div class="tabContent">
        <?php
        $categoria = 4;
        $titulo = 'sobre Cacau';
        include 'blogCategoria.php'; ?>
    </div>
    <div class="tabContent">
        <?php
        $categoria = 5;
        $titulo = 'curiosidades';
        include 'blogCategoria.php'; ?>
    </div>
</div>

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

        include 'secoes/' . $secaoPagina["tipoSecao"] . "/" . $secaoPagina["arquivoFonte"];
    }
}
?>


<script>
    var tab;
    var tabContent;

    window.onload = function() {
        tabContent = document.getElementsByClassName('tabContent');
        tab = document.getElementsByClassName('tab');
        hideTabsContent(1);
    }

    document.getElementById('tabs').onclick = function(event) {
        var target = event.target;
        if (target.className == 'tab') {
            for (var i = 0; i < tab.length; i++) {
                if (target == tab[i]) {
                    showTabsContent(i);
                    break;
                }
            }
        }
    }

    function hideTabsContent(a) {
        for (var i = a; i < tabContent.length; i++) {
            tabContent[i].classList.remove('show');
            tabContent[i].classList.add("hide");
            tab[i].classList.remove('whiteborder');
        }
    }

    function showTabsContent(b) {
        if (tabContent[b].classList.contains('hide')) {
            hideTabsContent(0);
            tab[b].classList.add('whiteborder');
            tabContent[b].classList.remove('hide');
            tabContent[b].classList.add('show');
        }
    }
</script>