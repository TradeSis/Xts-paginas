<?php
//Lucas 13102023 novo padrao
include_once(__DIR__ . '/../header.php');
include_once(__DIR__ . '/../database/secao.php');

$secoes = buscaSecao();
?>
<!doctype html>
<html lang="pt-BR">

<head>

    <?php include_once ROOT . "/vendor/head_css.php"; ?>

</head>


<body>
    <div class="container-fluid">

        <div class="row">
            <BR> <!-- MENSAGENS/ALERTAS -->
        </div>
        <div class="row">
            <BR> <!-- BOTOES AUXILIARES -->
        </div>
        <div class="row align-items-center"> <!-- LINHA SUPERIOR A TABLE -->
            <div class="col-3 text-start">
                <!-- TITULO -->
                <h2 class="ts-tituloPrincipal">Seções</h2>
            </div>
            <div class="col-7">
                <!-- FILTROS -->
              
            </div>

            <div class="col-2 text-end">
                <a href="secao_inserir.php" role="button" class="btn btn-success"><i class="bi bi-plus-square"></i>&nbsp Novo</a>
            </div>
        </div>

        <!--=== Conteudo ===-->
        <ul class="nav nav-tabs" id="iframeMenu">
            <li class="nav-item">
                <a class="nav-link" style="color: #000!important;" src="secao_todos.php">Todas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab1" src="secao_tipoSecao.php?tipoSecao=html" style="color: #000!important;">Html</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab2" src="secao_tipoSecao.php?tipoSecao=principal" style="color: #000!important;">Principal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" src="secao_tipoSecao.php?tipoSecao=secao" style="color: #000!important;">Seção</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" src="secao_tipoSecao.php?tipoSecao=slider" style="color: #000!important;">Slider</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" src="secao_tipoSecao.php?tipoSecao=texto" style="color: #000!important;">Texto</a>
            </li>
        </ul>



        <div class="diviFrame" style="overflow:hidden; height:850px">
            <iframe class="iFrame container-fluid " id="myIframe" src="secao_todos.php" height="850px"></iframe>
        </div>

    </div>


    <!-- LOCAL PARA COLOCAR OS JS -->

    <?php include_once ROOT . "/vendor/footer_js.php"; ?>

    <script>
        $(document).ready(function() {

            // IFRAMA
            $("#iframeMenu a").click(function() {

                var value = $(this).text();
                value = $(this).attr('src');
                /* alert (value); */

                //IFRAME TAG
                if (value) {
                    $("#myIframe").attr('src', value);

                }
            })

        });
    </script>
    <!-- LOCAL PARA COLOCAR OS JS -FIM -->

</body>

</html>