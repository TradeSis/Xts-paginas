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
                <h2 class="tituloTabela">Editar Autor</h2>
            </div>
            <div class="col-7">
                <!-- FILTROS -->
            </div>

            <div class="col-2 text-end">
                <a href="../configuracao/?tab=configuracao&stab=autor" role="button" class="btn btn-primary"><i class="bi bi-arrow-left-square"></i></i>&#32;Voltar</a>
            </div>
        </div>

        <form action="../database/autor.php?operacao=alterar" method="post" enctype="multipart/form-data">

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="labelForm">Nome</label>
                        <input type="text" name="nomeAutor" class="form-control" value="<?php echo $autor['nomeAutor'] ?>">
                        <input type="hidden" class="form-control" name="idAutor" value="<?php echo $autor['idAutor'] ?>">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6" style="margin-top: 50px">
                    <div class="col-sm-6" style="margin-top: -20px">
                        <label>Foto</label>
                        <label class="picture" for="foto" tabIndex="0">
                            <img src="<?php echo $autor["fotoAutor"] ?>" width="100%" height="100%" alt="">
                        </label>
                        <input type="file" name="fotoAutor" id="foto">
                    </div>
                </div>

                <div class="col-sm-6" style="margin-top: 50px">
                    <div class="col-sm-6" style="margin-top: -20px">
                        <label>Banner</label>
                        <label class="picture" for="banner" tabIndex="0">
                            <img src="<?php echo $autor["bannerAutor"] ?>" width="100%" height="100%" alt="">
                        </label>
                        <input type="file" name="bannerAutor" id="banner" value="<?php echo $autor['bannerAutor'] ?>">
                    </div>
                </div>
            </div>

            <div class="container-fluid p-0">
                <div class="col">
                    <span class="tituloEditor">Sobre Mim</span>
                </div>
                <div class="quill-textarea"><?php echo $autor['sobreMimAutor'] ?></div>
                <textarea style="display: none" id="detail" name="sobreMimAutor"><?php echo $autor['sobreMimAutor'] ?></textarea>
            </div>

            <div class="text-end mt-4">
                <button type="submit" class="btn  btn-success"><i class="bi bi-sd-card-fill"></i>&#32;Salvar</button>
            </div>
        </form>


    </div>

    <!-- LOCAL PARA COLOCAR OS JS -->

    <?php include_once ROOT . "/vendor/footer_js.php"; ?>

    <script src="<?php echo URLROOT ?>/sistema/js/quilljs.js"></script>

    <!-- LOCAL PARA COLOCAR OS JS -FIM -->
</body>

</html>