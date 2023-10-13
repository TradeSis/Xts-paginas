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

<style>
    .nav-item {
        cursor: pointer;
    }
</style>

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
                <h2 class="tituloTabela">Seções</h2>
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
                <a class="nav-link" style="color: #000;" src="secao_todos.php">Todas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab1" src="secao_tipoSecao.php?tipoSecao=header" style="color: #000;">Header</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab2" src="secao_tipoSecao.php?tipoSecao=footer" style="color: #000;">Footer</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" src="secao_tipoSecao.php?tipoSecao=principal" style="color: #000;">Principal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" src="secao_tipoSecao.php?tipoSecao=card" style="color: #000;">Card</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" src="secao_tipoSecao.php?tipoSecao=lista" style="color: #000;">Lista</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" src="secao_tipoSecao.php?tipoSecao=form" style="color: #000;">Form</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" src="secao_tipoSecao.php?tipoSecao=divisorPagina" style="color: #000;">Divisor</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" src="secao_tipoSecao.php?tipoSecao=quemSomos" style="color: #000;">Quem Somos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" src="secao_tipoSecao.php?tipoSecao=slides" style="color: #000;">Slides</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" src="secao_tipoSecao.php?tipoSecao=blog" style="color: #000;">Blog</a>
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