<?php
//Lucas 13102023 padrao novo
include_once('../header.php');
include_once('../database/secao.php');

$secao = buscaSecao($_GET['idSecao']);
$href = isset($_GET['tipoSecao']) ? 'secao_tipoSecao.php?tipoSecao=' . $_GET['tipoSecao'] : 'secao_todos.php';
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
                <h2 class="ts-tituloPrincipal">Excluir Seção</h2>
            </div>
            <div class="col-7">
                <!-- FILTROS -->
            </div>

            <div class="col-2 text-end">
                <a href="<?php echo $href ?>" role="button" class="btn btn-primary"><i class="bi bi-arrow-left-square"></i></i>&#32;Voltar</a>
            </div>
        </div>


        <form class="mb-4" action="../database/secao.php?operacao=excluir" method="post">
            <div class="row mt-3">
                <div class="col-sm-12">
                    <label class='form-label ts-label'>Titulo</label>
                    <input type="text" name="tituloSecao" class="form-control ts-input" value="<?php echo $secao['tituloSecao'] ?>">
                    <input type="hidden" class="form-control ts-input" name="idSecao" value="<?php echo $secao['idSecao'] ?>">
                </div>
            </div>

            <div class="text-end mt-4">
                <button type="submit" id="botao" class="btn btn-sm btn-danger"><i class="bi bi-x-octagon"></i>&#32;Excluir</button>
            </div>
        </form>

    </div>

    <!-- LOCAL PARA COLOCAR OS JS -->

    <?php include_once ROOT . "/vendor/footer_js.php"; ?>

    <!-- LOCAL PARA COLOCAR OS JS -FIM -->

</body>

</html>