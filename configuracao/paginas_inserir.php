<?php
//Lucas 13102023 padrao novo
include_once('../header.php');
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
        <div class="row"> <!-- LINHA SUPERIOR A TABLE -->
            <div class="col-3">
                <!-- TITULO -->
                <h2 class="ts-tituloPrincipal">Adicionar Paginas</h2>
            </div>
            <div class="col-7">
                <!-- FILTROS -->
            </div>

            <div class="col-2 text-end">
                <a href="../configuracao/?tab=configuracao&stab=paginas" role="button" class="btn btn-primary"><i class="bi bi-arrow-left-square"></i></i>&#32;Voltar</a>
            </div>
        </div>


        <form action="../database/paginas.php?operacao=inserir" method="post">
            <div class="row mt-3">
                <div class="col-sm-3">
                    <label class='form-label ts-label'>Slug</label>
                    <input type="text" name="slug" class="form-control ts-input" required autocomplete="off">
                </div>
                <div class="col-sm-3">
                    <label class='form-label ts-label'>Titulo</label>
                    <input type="text" name="tituloPagina" class="form-control ts-input" required autocomplete="off">
                </div>

                <div class="col-sm-3">
                    <label class='form-label ts-label'>Arquivo Fonte</label>
                    <input type="text" name="arquivoFonte" class="form-control ts-input" autocomplete="off">
                </div>

                <div class="col-sm-3">
                    <label class='form-label ts-label'>Arquivo Single</label>
                    <input type="text" name="arquivoSingle" class="form-control ts-input" autocomplete="off">
                </div>

            </div>

            <div class="text-end mt-4">
                <button type="submit" class="btn  btn-success"><i class="bi bi-sd-card-fill"></i>&#32;Cadastrar</button>
            </div>
        </form>

    </div>

    <!-- LOCAL PARA COLOCAR OS JS -->

    <?php include_once ROOT . "/vendor/footer_js.php"; ?>

    <!-- LOCAL PARA COLOCAR OS JS -FIM -->

</body>

</html>