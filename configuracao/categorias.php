<?php
include_once(__DIR__ . '/../head.php');
include_once(__DIR__ . '/../database/categorias.php');

$categorias = buscaCategorias();
?>

<body class="bg-transparent">
    <div class="container" style="margin-top:30px">

        <div class="row mt-4">
            <div class="col-sm-8">
                <h2 class="tituloTabela">Categorias</h2>

            </div>

            <div class="col-sm-4" style="text-align:right">
                <a href="categorias_inserir.php" role="button" class="btn btn-success"><i class="bi bi-plus-square"></i>&nbsp Novo</a>
            </div>

        </div>
        <div class="card mt-2 text-center">
            <div class="table scrollbar-tabela">
                <table class="table">
                    <thead class="cabecalhoTabela">
                        <tr>
                            <th>Nome</th>
                            <th>Ação</th>

                        </tr>
                    </thead>

                    <?php
                    foreach ($categorias as $categoria) {
                    ?>
                        <tr>
                            <td><?php echo $categoria['nomeCategoria'] ?></td>
                            <td>
                                <a class="btn btn-warning btn-sm" href="categorias_alterar.php?idCategoria=<?php echo $categoria['idCategoria'] ?>" role="button"><i class="bi bi-pencil-square"></i></a>
                                <a class="btn btn-danger btn-sm" href="categorias_excluir.php?idCategoria=<?php echo $categoria['idCategoria'] ?>" role="button"><i class="bi bi-trash3"></i></a>
                            </td>
                        </tr>
                    <?php } ?>

                </table>
            </div>
        </div>
    </div>


</body>

</html>