<?php
// helio 01022023 altereado para include_once
// helio 26012023 16:16
include_once(__DIR__ . '/../head.php');
include_once(__DIR__ . '/../database/temas.php');

$temas = buscaTemas();


?>

<body class="bg-transparent">
    <div class="container" style="margin-top:30px">

        <div class="row mt-4">
            <div class="col-sm-8">
                <h2 class="tituloTabela">Temas</h2>
            </div>

            <div class="col-sm-4" style="text-align:right">
                <a href="temas_inserir.php" role="button" class="btn btn-success"><i class="bi bi-plus-square"></i>&nbsp Novo</a>
            </div>

        </div>
        <div class="card mt-2 text-center">
            <div class="table scrollbar-tabela">
                <table class="table">
                    <thead class="cabecalhoTabela">
                        <tr>
                            <th>Tema</th>
                            <th>Css</th>
                            <th>Ativo</th>
                            <th>Ação</th>

                        </tr>
                    </thead>

                    <?php
                    foreach ($temas as $tema) {
                    ?>
                        <tr>

                            <td><?php echo $tema['nomeTema'] ?></td>
                            <td><?php echo $tema['css'] ?></td>
                            <td><?php echo $tema['ativo'] ?></td>
                            <td>
                                <a class="btn btn-warning btn-sm" href="temas_alterar.php?idTema=<?php echo $tema['idTema'] ?>" role="button"><i class="bi bi-pencil-square"></i></a>
                                <a class="btn btn-danger btn-sm" href="temas_excluir.php?idTema=<?php echo $tema['idTema'] ?>" role="button"><i class="bi bi-trash3"></i></a>
                            </td>
                        </tr>
                    <?php } ?>

                </table>
            </div>
        </div>
    </div>


</body>

</html>