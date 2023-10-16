<?php
//Lucas 11102023 padrao novo
include_once(__DIR__ . '/../header.php');
include_once(__DIR__ . '/../database/eventos.php');
$eventos = buscaEventos();
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
                <h2 class="ts-tituloPrincipal">Eventos</h2>
            </div>
            <div class="col-7">
                <!-- FILTROS -->
                <div class="input-group">
                    <input type="text" class="form-control" id="buscaDemanda" placeholder="Buscar por id ou titulo">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" id="buscar" type="button">
                            <span style="font-size: 20px;font-family: 'Material Symbols Outlined'!important;" class="material-symbols-outlined">search</span>
                        </button>
                    </span>
                </div>
            </div>

            <div class="col-2 text-end">
                <a href="eventos_inserir.php" role="button" class="btn btn-success"><i class="bi bi-plus-square"></i>&nbsp Novo</a>
            </div>
        </div>

        <div class="table mt-2 ts-divTabela">
            <table class="table table-hover table-sm align-middle">
                <thead class="ts-headertabelafixo">
                    <tr>
                        <th>Foto</th>
                        <th>Titulo</th>
                        <th>Data</th>
                        <th>Local</th>
                        <th>Tipo</th>
                        <th colspan="2">Ação</th>

                    </tr>
                </thead>

                <?php
                foreach ($eventos as $evento) {
                ?>
                    <tr>
                        <td><img src="<?php echo $evento['capaEvento'] ?>" width="60px" height="60px" alt=""></td>
                        <td><?php echo $evento['nomeEvento'] ?></td>
                        <td><?php echo date('d/m/Y', strtotime($evento['dataEvento'])) ?></td>
                        <td><?php echo $evento['localEvento'] ?></td>
                        <td><?php echo $evento['tipoEvento'] ?></td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="eventos_alterar.php?idEvento=<?php echo $evento['idEvento'] ?>" role="button"><i class="bi bi-pencil-square"></i></a>

                            <a class="btn btn-danger btn-sm" href="eventos_excluir.php?idEvento=<?php echo $evento['idEvento'] ?>" role="button"><i class="bi bi-trash3"></i></a>
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