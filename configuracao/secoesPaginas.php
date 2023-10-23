<?php
//Lucas 13102023 padrao novo
include_once(__DIR__ . '/../header.php');
include_once(__DIR__ . '/../database/secaoPagina.php');
$secoesPaginas = buscaSecaoPaginas();
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
                <h2 class="ts-tituloPrincipal">Seções das Paginas</h2>
            </div>
            <div class="col-7">
                <!-- FILTROS -->
            </div>

            <div class="col-2 text-end">
                <a href="secoesPaginas_inserir.php" role="button" class="btn btn-success"><i class="bi bi-plus-square"></i>&nbsp Novo</a>
            </div>
        </div>

        <div class="table mt-2 ts-divTabela">
            <table class="table table-hover table-sm align-middle">
                <thead class="ts-headertabelafixo">
                    <tr>
                        <th>Pagina</th>
                        <th>Secão</th>
                        <th>Ordem</th>
                        <th>Ação</th>

                    </tr>
                </thead>

                <?php
                foreach ($secoesPaginas as $secoesPagina) {
                ?>
                    <tr>

                        <td><?php echo $secoesPagina['tituloPagina'] ?></td>
                        <td><?php echo $secoesPagina['tituloSecao'] ?></td>
                        <td><?php echo $secoesPagina['ordem'] ?></td>

                        <td>
                            <a class="btn btn-primary btn-sm" href="secoesPaginas_alterar.php?idSecaoPagina=<?php echo $secoesPagina['idSecaoPagina'] ?>" role="button">Editar</a>
                            <a class="btn btn-danger btn-sm" href="secoesPaginas_excluir.php?idSecaoPagina=<?php echo $secoesPagina['idSecaoPagina'] ?>" role="button">Excluir</a>
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