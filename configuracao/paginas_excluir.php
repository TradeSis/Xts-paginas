
<?php
include_once('../head.php');
include_once('../database/paginas.php');

$pagina = buscaPaginas($_GET['idPagina']);
/* echo json_encode($pagina); */
?>



<body class="bg-transparent">

    <div class="container p-4" style="margin-top:10px">

            <div class="row">
                    <div class="col-sm-8">
                        <h2 class="tituloTabela">Paginas Excluir</h2>
                    </div>
                    <div class="col-sm-4" style="text-align:right">
                        <a href="../configuracao/?tab=configuracao&stab=paginas" role="button" class="btn btn-primary"><i class="bi bi-arrow-left-square"></i></i>&#32;Voltar</a>
                    </div>
            </div>

                <form class="mb-4" action="../database/paginas.php?operacao=excluir" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-12" style="margin-top: 10px">
                            <div class="form-group">
                                <label class='control-label' for='inputNormal' style="margin-top: -40px;">Slug</label>
                                <input type="text" name="slug" class="form-control" value="<?php echo $pagina ['slug'] ?>" >
                                <input type="text" class="form-control" name="idPagina" value="<?php echo $pagina ['idPagina'] ?>" style="display: none">
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