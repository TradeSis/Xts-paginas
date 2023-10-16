<?php
//Lucas 13102023 padrao novo
include_once('../header.php');
include_once('../database/temas.php');
$tema = buscaTemas($_GET['idTema']);

$programaForm = $tema['programaForm'];
$temporaria = explode('.', $programaForm);
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
                <h2 class="ts-tituloPrincipal">Editar Tema</h2>
            </div>
            <div class="col-7">
                <!-- FILTROS -->
            </div>

            <div class="col-2 text-end">
                <a href="../configuracao/?tab=configuracao&stab=temas" role="button" class="btn btn-primary"><i
                        class="bi bi-arrow-left-square"></i></i>&#32;Voltar</a>
            </div>
        </div>

            <form action="../database/temas.php?operacao=<?php echo $temporaria[0] ?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class='control-label' for='inputNormal'>Nome</label>
                            <input type="text" name="nomeTema" class="form-control" value="<?php echo $tema['nomeTema'] ?>">
                            <input type="hidden" class="form-control" name="idTema" value="<?php echo $tema['idTema'] ?>">
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class='control-label' for='inputNormal'>Arquivo Css</label>
                            <input type="text" name="css" class="form-control" value="<?php echo $tema['css'] ?>">
                        </div>
                    </div>
                    <div class="col-sm-3" style="margin-top: 40px">
                        <div class="select-form-group">
                            <label for="ativo">Não ativo</label>
                            <input type="range" id="ativo" name="ativo" min="0" max="1" value="<?php echo $tema['ativo'] ?>" style="width: 25%;">
                            <label for="ativo">Ativo</label>
                        </div>
                    </div>
                </div>
<!-- 
                <div class="row form-group">
                    <div class="col-sm-6">
                        <label class='control-label' for='inputNormal' style="margin-top: -50px;">Menu</label>
                        <textarea name="menu" id="" cols="130" rows="5"><?php echo $tema['menu'] ?></textarea>
                    </div>
                </div> -->

                <div class="row mt-3">
                    <div class="col-sm-12">

                        <div class="form-group">
                            <?php
                            $programaForm = $tema['programaForm'];
                            $temporaria = explode('.', $programaForm);
                            //echo json_encode($temporaria[0]);
                            //return;
                            $programaForm = $temporaria[0] . '-form.' . $temporaria[1];
                            include ROOT . '/paginas/programaForm/' . $programaForm;
                            ?>

                        </div>
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