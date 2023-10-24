<?php
//Lucas 13102023 padrao novo
include_once('../header.php');
include_once('../database/secao.php');
$secao = buscaSecao($_GET['idSecao']);
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
                <h2 class="ts-tituloPrincipal">Editar Seção</h2>
            </div>
            <div class="col-7">
                <!-- FILTROS -->
            </div>

            <div class="col-2 text-end">
                <a href="../configuracao/?tab=configuracao&stab=secao" role="button" class="btn btn-primary"><i class="bi bi-arrow-left-square"></i></i>&#32;Voltar</a>
            </div>
        </div>

        <form class="mb-4" action="../database/secao.php?operacao=alterar" method="post">
            <div class="row mt-3">
                <div class="col-sm-6">
                    <label class='form-label ts-label'>Titulo</label>
                    <input type="text" name="tituloSecao" class="form-control ts-input" value="<?php echo $secao['tituloSecao'] ?>">
                    <input type="hidden" class="form-control ts-input" name="idSecao" value="<?php echo $secao['idSecao'] ?>">
                </div>

                <div class="col-sm-3">
                    <label class='form-label ts-label'>Arquivo Fonte</label>
                    <input type="text" name="arquivoFonte" class="form-control ts-input" value="<?php echo $secao['arquivoFonte'] ?>">
                </div>

                <div class="col-sm-3">
                    <label class="form-label ts-label">Tipo</label>
                    <select class="form-select ts-input" name="tipoSecao">
                        <option value="<?php echo $secao['tipoSecao'] ?>"><?php echo $secao['tipoSecao'] ?></option>
                        <option value="header">Header</option>
                        <option value="footer">Footer</option>
                        <option value="html">Html</option>
                        <option value="card">Card</option>
                        <option value="form">Form</option>
                        <option value="quemSomos">Quem Somos</option>
                        <option value="principal">Principal</option>
                        <option value="divisorPagina">Divisor de Pagina</option>
                        <option value="lista">Lista</option>
                        <option value="slides">Slides</option>
                        <option value="blog">Blog</option>
                    </select>
                </div>
            </div>

            <div class="text-end mt-4">
                <button type="submit" class="btn  btn-success"><i class="bi bi-sd-card-fill"></i>&#32;Salvar</button>
            </div>
        </form>

    </div>

    <!-- LOCAL PARA COLOCAR OS JS -->

    <?php include_once ROOT . "/vendor/footer_js.php"; ?>

    <!-- LOCAL PARA COLOCAR OS JS -FIM -->

</body>

</html>