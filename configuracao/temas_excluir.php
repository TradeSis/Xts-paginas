<?php

include_once('../head.php');
include_once('../database/temas.php');
$tema = buscaTemas($_GET['idTema']);
?>

<body class="bg-transparent">

    <div class="container formContainer">

        <div class="row">
            <div class="col-sm-8">
                <h2 class="tituloTabela">Excluir Tema</h2>
            </div>
            <div class="col-sm-4" style="text-align:right">
                <a href="../configuracao/?tab=configuracao&stab=temas" role="button" class="btn btn-primary"><i class="bi bi-arrow-left-square"></i></i>&#32;Voltar</a>
            </div>
        </div>

            <form action="../database/temas.php?operacao=excluir" method="post">
                <div class="row">
                    <div class="col-sm-12" style="margin-top: 10px">
                        <div class="form-group">
                            <label class='control-label' for='inputNormal' style="margin-top: -40px;">Nome</label>
                            <input type="text" name="nomeTema" class="form-control" value="<?php echo $tema['nomeTema'] ?>">
                            <input type="text" class="form-control" name="idTema" value="<?php echo $tema['idTema'] ?>" style="display: none">
                        </div>
                    </div>
                </div>
        

                <div style="text-align:right; margin-top:20px">
                <button type="submit" id="botao" class="btn btn-sm btn-danger"><i class="bi bi-x-octagon"></i>&#32;Excluir</button>
            </div>
            </form>
    </div>


    </div>


</body>

</html>