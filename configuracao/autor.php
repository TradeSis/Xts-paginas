<?php
include_once(__DIR__ . '/../head.php');
include_once(__DIR__ . '/../database/autor.php');
$autores = buscaAutor();
?>

<body class="bg-transparent">
    <div class="container" style="margin-top:30px"> 
        
            <div class="row mt-4">
                <div class="col-sm-8">
                        <h2 class="tituloTabela">Autor</h2>
                        
                    </div>

                <div class="col-sm-4" style="text-align:right">
                        <a href="autor_inserir.php" role="button" class="btn btn-success"><i class="bi bi-plus-square"></i>&nbsp Novo</a>
                    </div>
          
            </div>
        <div class="card mt-2 text-center">
            <table class="table">
                <thead class="cabecalhoTabela">
                    <tr>
                        <th>Foto</th>
                        <th>Nome</th>
                        <th>Ação</th>
                    </tr>
                </thead>

                <?php
                foreach ($autores as $autor) {
                ?>
                    <tr>
                        <td><img src="<?php echo URLROOT ?>/img/<?php echo $autor['fotoAutor'] ?>" width="60px" height="60px" alt=""></td>
                        <td><?php echo $autor['nomeAutor'] ?></td>
                        <td>
                            <a class="btn btn-info btn-sm" href="#" role="button"><i class="bi bi-eye"></i></a>
                            <a class="btn btn-warning btn-sm" href="autor_alterar.php?idAutor=<?php echo $autor['idAutor'] ?>" role="button"><i class="bi bi-pencil-square"></i></a>
                            <a class="btn btn-danger btn-sm" href="autor_excluir.php?idAutor=<?php echo $autor['idAutor'] ?>" role="button"><i class="bi bi-trash3"></i></a>
                        </td>
                    </tr>
                <?php } ?>

            </table>
        </div>
    </div>


</body>

</html>