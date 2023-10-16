<?php
//Lucas 13102023 padrao novo
include_once('../header.php');
include_once('../database/temas.php');
$temas = buscaTemas();
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
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label class='control-label' for='inputNormal'>Slug</label>
                        <input type="text" name="slug" class="form-control" required autocomplete="off">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label class='control-label' for='inputNormal'>Titulo</label>
                        <input type="text" name="tituloPagina" class="form-control" required autocomplete="off">
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label class='control-label' for='inputNormal'>Arquivo Fonte</label>
                        <input type="text" name="arquivoFonte" class="form-control" autocomplete="off">
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label class='control-label' for='inputNormal'>Arquivo Single</label>
                        <input type="text" name="arquivoSingle" class="form-control" autocomplete="off">
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="select-form-group">

                        <label class="labelForm">Tema</label>
                        <select class="select form-control" name="idTema">
                            <?php
                            foreach ($temas as $tema) {
                            ?>
                                <option value="<?php echo $tema['idTema'] ?>"><?php echo $tema['nomeTema']  ?></option>
                            <?php  } ?>
                        </select>

                    </div>
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