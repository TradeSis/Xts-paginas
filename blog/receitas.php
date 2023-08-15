<?php
include_once(__DIR__ . '/../head.php');
include_once(__DIR__ . '/../database/receitas.php');
$receitas = buscaReceitas();
?>

<body class="bg-transparent">
    <div class="container text-center" style="margin-top:30px">

        <div class="row mt-4">
            <div class="col-sm-8">
                <h2 class="tituloTabela">Receitas</h2>

            </div>

            <div class="col-sm-4" style="text-align:right">
                <a href="receitas_inserir.php" role="button" class="btn btn-success"><i class="bi bi-plus-square"></i>&nbsp Novo</a>
            </div>

        </div>
        <div class="card mt-2 text-center">
            <div class="table scrollbar-tabela">
                <table class="table">
                    <thead class="cabecalhoTabela">
                        <tr>
                            <th>Foto</th>
                            <th>Titulo</th>
                            <th>Colunista</th>
                            <th>Ação</th>

                        </tr>
                    </thead>

                    <?php
                    foreach ($receitas as $noticia) {
                    ?>
                        <tr>
                            <td><img src="<?php echo URLROOT ?>/img/<?php echo $noticia['imgReceita'] ?>" width="60px" height="60px" alt=""></td>
                            <td><?php echo $noticia['nomeReceita'] ?></td>
                            <td><?php echo $noticia['autorReceita'] ?></td>
                            <td>
                                <a class="btn btn-info btn-sm" href="#" role="button"><i class="bi bi-eye"></i></a>
                                <a class="btn btn-warning btn-sm" href="receitas_alterar.php?idReceita=<?php echo $noticia['idReceita'] ?>" role="button"><i class="bi bi-pencil-square"></i></a>
                                <a class="btn btn-danger btn-sm" href="receitas_excluir.php?idReceita=<?php echo $noticia['idReceita'] ?>" role="button"><i class="bi bi-trash3"></i></a>
                            </td>
                        </tr>
                    <?php } ?>

                </table>
            </div>
        </div>
    </div>


</body>

</html>