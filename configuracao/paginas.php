<?php
//Lucas 13102023 padrao novo
// helio 01022023 altereado para include_once
// helio 26012023 16:16
include_once(__DIR__ . '/../header.php');
include_once(__DIR__ . '/../database/paginas.php');
include_once(__DIR__ . '/../database/temas.php');

if (isset($_GET['idTema'])) {
    $idTema = $_GET['idTema'];
} else {
    $idTema = null;
}

$paginas = buscaPaginas(null, $idTema);
$temas = buscaTemas();

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
            <div class="col-2 text-start">
                <!-- TITULO -->
                <h2 class="tituloTabela">Paginas</h2>
            </div>
            <div class="col-2 pt-4">
                <div class="select-form-group pt-1">
                    <label class="labelForm">Selecionar Tema</label>
                    <select class="select form-control" name="idTema" id="idTema">
                        <option onclick="limparSearch()" value="5">Todos</option>
                        <?php
                        foreach ($temas as $tema) {
                        ?>
                            <option onclick="searchData()" value="<?php echo $tema['idTema'] ?>"><?php echo $tema['nomeTema']  ?></option>
                        <?php  } ?>
                    </select>
                </div>
            </div>
            <div class="col-sm-1" style="margin-top: -20px; margin-left:-20px; text-align:left">
                <button type="submit" class="btn btn-sm btn-secondary" onclick="limparSearch()"><i class="bi bi-x-lg"></i></button>
            </div>
            <div class="col-5">
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
                        <th>ID Tema</th>
                        <th>Nome Tema</th>
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
                        <td><?php echo $pagina['idTema'] ?></td>
                        <td><?php echo $pagina['nomeTema'] ?></td>
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

    <script>
        var select = document.getElementById('idTema')

        select.addEventListener('change', function() {
            /* console.log(select.value) */
            window.location = '?idTema=' + select.value;
        })

        function searchData() {
            window.location = 'paginas';
        }

        function limparSearch() {
            window.location = 'paginas.php';
        }
    </script>

    <!-- LOCAL PARA COLOCAR OS JS -FIM -->

</body>

</html>