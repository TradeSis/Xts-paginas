<?php
//Lucas 11102023 padrao novo
include_once(__DIR__ . '/../header.php');
include_once(__DIR__ . '/../database/receitas.php');
$receitas = buscaReceitas();
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
        <div class="row align-items-center"> <!-- LINHA SUPERIOR A TABLE -->
            <div class="col-3 text-start">
                <!-- TITULO -->
                <h2 class="ts-tituloPrincipal">Receitas</h2>
            </div>
            <div class="col-7">
                <!-- FILTROS -->
            </div>

            <div class="col-2 text-end">
                <a href="receitas_inserir.php" role="button" class="btn btn-success"><i class="bi bi-plus-square"></i>&nbsp Novo</a>
            </div>
        </div>

        <div class="table mt-2 ts-divTabela">
            <table class="table table-hover table-sm align-middle">
                <thead class="ts-headertabelafixo">
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
                        <td><img src="<?php echo $noticia['imgReceita'] ?>" width="60px" height="60px" alt=""></td>
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

    <!-- LOCAL PARA COLOCAR OS JS -->

    <?php include_once ROOT . "/vendor/footer_js.php"; ?>

    <!-- LOCAL PARA COLOCAR OS JS -FIM -->

</body>

</html>