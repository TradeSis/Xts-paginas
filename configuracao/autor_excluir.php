<?php

include_once('../head.php');
include_once('../database/autor.php');


$idAutor = $_GET['idAutor'];
$autor = buscaAutor($idAutor);
?>

<body class="bg-transparent">

    <div class="container p-4" style="margin-top:20px">

        <div class="row">
            <div class="col-sm-8">
                <h2 class="tituloTabela">Excluir Autor</h2>
            </div>
            <div class="col-sm-4" style="text-align:right">
                <a href="../configuracao/?tab=configuracao&stab=autor" role="button" class="btn btn-primary"><i class="bi bi-arrow-left-square"></i></i>&#32;Voltar</a>
            </div>

        </div>

        <form class="mb-4" action="../database/autor.php?operacao=excluir" method="post">

            <div class="row">
                <div class="col-sm-12" style="margin-top: 10px">
                    <div class="form-group">
                        <label class="labelForm">Nome</label>
                        <input type="text" name="nomeAutor" class="form-control" value="<?php echo $autor['nomeAutor'] ?>" disabled>
                        <input type="text" class="form-control" name="idAutor" value="<?php echo $autor['idAutor'] ?>" style="display: none">
                        <input type="text" class="form-control" name="fotoAutor" value="<?php echo $autor['fotoAutor'] ?>" style="display: none">
                        <input type="text" class="form-control" name="bannerAutor" value="<?php echo $autor['bannerAutor'] ?>" style="display: none">
                    </div>
                </div>
            </div>

            <div style="text-align:right; margin-top:20px">
                <button type="submit" id="botao" class="btn btn-sm btn-danger"><i class="bi bi-x-octagon"></i>&#32;Excluir</button>
            </div>
        </form>

    </div>


</body>

</html>