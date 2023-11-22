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
                <h2 class="ts-tituloPrincipal">Adicionar Seção</h2>
            </div>
            <div class="col-7">
                <!-- FILTROS -->
            </div>

            <div class="col-2 text-end">
                <a href="../configuracao/?tab=configuracao&stab=secao" role="button" class="btn btn-primary"><i class="bi bi-arrow-left-square"></i></i>&#32;Voltar</a>
            </div>
        </div>

        <form class="mb-4" action="../database/secao.php?operacao=inserir" method="post">
            <div class="row mt-3">
                <div class="col-sm-6">
                    <label class='form-label ts-label'>Titulo</label>
                    <input type="text" name="tituloSecao" class="form-control ts-input" required autocomplete="off">
                </div>
                <div class="col-sm-3">
                    <label class='form-label ts-label'>Arquivo Fonte</label>
                    <input type="text" name="arquivoFonte" class="form-control ts-input" required autocomplete="off">
                </div>

                <div class="col-sm-3">
                    <label class="form-label ts-label">Tipo</label>
                    <select class="form-select ts-input" name="tipoSecao">
                        <option value="html">Header</option>    
                        <option value="html">Html</option>
                        <option value="principal">Principal</option>
                        <option value="secao">Seção</option>
                        <option value="slider">Slider</option>
                        <option value="texto">Texto</option>
                    </select>
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