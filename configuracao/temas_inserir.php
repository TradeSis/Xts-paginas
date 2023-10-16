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
                <h2 class="ts-tituloPrincipal">Tema</h2>
            </div>
            <div class="col-7">
                <!-- FILTROS -->
            </div>

            <div class="col-2 text-end">
                <a href="../configuracao/?tab=configuracao&stab=temas" role="button" class="btn btn-primary"><i class="bi bi-arrow-left-square"></i></i>&#32;Voltar</a>
            </div>
        </div>


        <form action="../database/temas.php?operacao=inserir" method="post">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class='control-label' for='inputNormal'>Nome</label>
                        <input type="text" name="nomeTema" class="form-control">
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label class='control-label' for='inputNormal'>Arquivo Css</label>
                        <input type="text" name="css" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="select-form-group">

                        <label class="labelForm">Tipo</label>
                        <select class="select form-control" name="ativo">
                            <option value="1">Ativo</option>
                            <option value="0">Não Ativo</option>
                        </select>

                    </div>
                </div>

            </div>

            <div class="container-fluid p-0">
                <div class="col">
                    <span class="tituloEditor">Menu</span>
                </div>
                <div class="quill-textarea"></div>
                <textarea style="display: none" id="detail" name="menu"></textarea>
            </div>

            <div class="text-end mt-4">
                <button type="submit" class="btn  btn-success"><i class="bi bi-sd-card-fill"></i>&#32;Cadastrar</button>
            </div>
        </form>

    </div>

    <!-- LOCAL PARA COLOCAR OS JS -->

    <?php include_once ROOT . "/vendor/footer_js.php"; ?>

    <script src="<?php echo URLROOT ?>/sistema/js/quilljs.js"></script>

    <!-- LOCAL PARA COLOCAR OS JS -FIM -->

</body>

</html>