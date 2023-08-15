<?php
include_once(__DIR__ . '/../head.php');
include_once(__DIR__ . '/../database/posts.php');

$posts = buscaPosts();
?>

<body class="bg-transparent">
    <div class="container text-center" style="margin-top:30px">

        <div class="row mt-4">
            <div class="col-sm-8">
                <h2 class="tituloTabela">Posts</h2>

            </div>

            <div class="col-sm-4" style="text-align:right">
                <a href="post_inserir.php" role="button" class="btn btn-success"><i class="bi bi-plus-square"></i>&nbsp Novo</a>
            </div>

        </div>
        <div class="card mt-2 text-center">
            <div class="table scrollbar-tabela">
                <table class="table">
                    <thead class="cabecalhoTabela">
                        <tr>
                            <th>Imagem</th>
                            <th>Titulo</th>
                            <th>Autor</th>
                            <th>Categoria</th>
                            <th>Ação</th>

                        </tr>
                    </thead>

                    <?php
                    foreach ($posts as $post) {
                    ?>
                        <tr>

                            <td><img src="<?php echo URLROOT ?>/img/<?php echo $post['imgDestaque'] ?>" width="60px" height="60px" alt=""></td>
                            <td><?php echo $post['titulo'] ?></td>
                            <td><?php echo $post['nomeAutor'] ?></td>
                            <td><?php echo $post['nomeCategoria'] ?></td>

                            <td>
                                <a class="btn btn-info btn-sm" href="#" role="button"><i class="bi bi-eye"></i></a>
                                <a class="btn btn-warning btn-sm" href="post_alterar.php?idPost=<?php echo $post['idPost'] ?>" role="button"><i class="bi bi-pencil-square"></i></a>
                                <a class="btn btn-danger btn-sm" href="post_excluir.php?idPost=<?php echo $post['idPost'] ?>" role="button"><i class="bi bi-trash3"></i></a>
                            </td>
                        </tr>
                    <?php } ?>

                </table>
            </div>
        </div>
    </div>


</body>

</html>