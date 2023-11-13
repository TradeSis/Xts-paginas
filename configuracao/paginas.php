<?php
//Lucas 13102023 padrao novo
// helio 01022023 altereado para include_once
// helio 26012023 16:16
include_once(__DIR__ . '/../header.php');
include_once(__DIR__ . '/../database/paginas.php');


$paginas = buscaPaginas();

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
                <h2 class="ts-tituloPrincipal">Posts</h2>
            </div>
            <div class="col-7">
                <!-- FILTROS -->
            </div>

            <div class="col-2 text-end">
                <a href="paginas_inserir.php" role="button" class="btn btn-success"><i class="bi bi-plus-square"></i>&nbsp Novo</a>
            </div>
        </div>

        <div class="table mt-2 ts-divTabela">
            <table class="table table-hover table-sm align-middle">
                <thead class="ts-headertabelafixo">
                    <tr>
                        <th>Slug</th>
                        <th>Titulo</th>
                        <th>Arquivo Fonte</th>
                        <th>Ação</th>

                    </tr>
                </thead>

                <?php
                foreach ($paginas as $pagina) {
                ?>
                    <tr>
                        <td><?php echo $pagina['slug'] ?></td>
                        <td><?php echo $pagina['tituloPagina'] ?></td>
                        <td><?php echo $pagina['arquivoFonte'] ?></td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="paginas_alterar.php?idPagina=<?php echo $pagina['idPagina'] ?>" role="button"><i class="bi bi-pencil-square"></i></a>
                            <a class="btn btn-danger btn-sm" href="paginas_excluir.php?idPagina=<?php echo $pagina['idPagina'] ?>" role="button"><i class="bi bi-trash3"></i></a>
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