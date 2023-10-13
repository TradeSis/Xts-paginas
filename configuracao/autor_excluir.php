<?php
//Lucas 13102023 novo padrao
include_once('../header.php');
include_once('../database/autor.php');

$idAutor = $_GET['idAutor'];
$autor = buscaAutor($idAutor);
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
                <h2 class="tituloTabela">Excluir Autor</h2>
            </div>
            <div class="col-7">
                <!-- FILTROS -->
            </div>

            <div class="col-2 text-end">
                <a href="../configuracao/?tab=configuracao&stab=autor" role="button" class="btn btn-primary"><i class="bi bi-arrow-left-square"></i></i>&#32;Voltar</a>
            </div>
        </div>

        <form action="../database/autor.php?operacao=excluir" method="post">

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="labelForm">Nome</label>
                        <input type="text" name="nomeAutor" class="form-control" value="<?php echo $autor['nomeAutor'] ?>" disabled>
                        <input type="hidden" class="form-control" name="idAutor" value="<?php echo $autor['idAutor'] ?>">
                        <input type="hidden" class="form-control" name="fotoAutor" value="<?php echo $autor['fotoAutor'] ?>">
                        <input type="hidden" class="form-control" name="bannerAutor" value="<?php echo $autor['bannerAutor'] ?>">
                    </div>
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