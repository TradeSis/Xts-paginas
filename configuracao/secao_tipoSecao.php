<?php
//Lucas 13102023 novo padrao
include_once(__DIR__ . '/../header.php');
include_once(__DIR__ . '/../database/secao.php');
$secoes = buscaTipoSecao($_GET['tipoSecao']);

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
                <h2 class="ts-tituloPrincipal"><?php echo $_GET['tipoSecao'] ?></h2>
            </div>

        </div>

        <div class="table mt-2 ts-divTabela">
            <table class="table table-hover table-sm align-middle">
                <thead class="ts-headertabelafixo">
                    <tr>

                        <th>Titulo</th>
                        <th>Arquivo Fonte</th>
                        <th>Ação</th>

                    </tr>
                </thead>

                <?php
                foreach ($secoes as $secao) {
                ?>
                    <tr>
                        <td><?php echo $secao['tituloSecao'] ?></td>
                        <td><?php echo $secao['arquivoFonte'] ?></td>

                        <td>
                            <a class="btn btn-warning btn-sm" href="secao_alterar.php?idSecao=<?php echo $secao['idSecao'] ?>&&tipoSecao=<?php echo $_GET['tipoSecao'] ?>" role="button"><i class="bi bi-pencil-square"></i></a>
                            <a class="btn btn-danger btn-sm" href="secao_excluir.php?idSecao=<?php echo $secao['idSecao'] ?>&&tipoSecao=<?php echo $_GET['tipoSecao'] ?>" role="button"><i class="bi bi-trash3"></i></a>
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