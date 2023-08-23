<?php
include_once('../head.php');
include_once('../database/categorias.php');
$idCategoria = $_GET['idCategoria'];
$categoria = buscaCategorias($idCategoria);
?>


<body class="bg-transparent">

    <div class="container formContainer">

        <div class="row">
            <div class="col-sm-8">
                <h2 class="tituloTabela">Editar Categoria</h2>
            </div>
            <div class="col-sm-4" style="text-align:right">
                <a href="../configuracao/?tab=configuracao&stab=categorias" role="button" class="btn btn-primary"><i class="bi bi-arrow-left-square"></i></i>&#32;Voltar</a>
            </div>
        </div>

        <form action="../database/categorias.php?operacao=alterar" method="post" enctype="multipart/form-data">

            <div class="row">
                <div class="col-sm-12" style="margin-top: 10px">
                    <div class="form-group">
                        <label class='control-label' for='inputNormal' style="margin-top: -20px;">Nome da Categoria</label>
                        <input type="text" name="nomeCategoria" class="form-control" value="<?php echo $categoria['nomeCategoria'] ?>">
                        <input type="text" class="form-control" name="idCategoria" value="<?php echo $categoria['idCategoria'] ?>" style="display: none">
                    </div>
                </div>
            </div>

            <div style="text-align:right; margin-top:20px">
                <button type="submit" class="btn  btn-success"><i class="bi bi-sd-card-fill"></i>&#32;Salvar</button>
            </div>
        </form>
    </div>

    </div>

</body>

</html>