<?php
//Lucas 13102023 padrao novo
include_once('../header.php');
include_once('../database/secaoPagina.php');

$secaoPagina = buscaSecaoPaginas($_GET['idSecaoPagina']);
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
                <h2 class="tituloTabela">Remover seção da pagina</h2>
            </div>
            <div class="col-7">
                <!-- FILTROS -->
            </div>

            <div class="col-2 text-end">
                <a href="paginas.php" role="button" class="btn btn-primary"><i class="bi bi-arrow-left-square"></i></i>&#32;Voltar</a>
            </div>
        </div>

        <form action="../database/secaoPagina.php?operacao=excluir" method="post" enctype="multipart/form-data">

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class='control-label' for='inputNormal'>Seção</label>
                        <input type="text" name="tituloSecao" class="form-control" value="<?php echo $secaoPagina['tituloSecao'] ?>">
                        <input type="hidden" class="form-control" name="idSecaoPagina" value="<?php echo $secaoPagina['idSecaoPagina'] ?>">
                    </div>
                </div>
            </div>

            <div class="text-end mt-4">
                <button type="submit" id="botao" class="btn btn-sm btn-danger"><i class="bi bi-x-octagon"></i>&#32;Remover</button>
            </div>
        </form>

    </div>


    <!-- LOCAL PARA COLOCAR OS JS -->

    <?php include_once ROOT . "/vendor/footer_js.php"; ?>

    <!-- LOCAL PARA COLOCAR OS JS -FIM -->


</body>

</html>