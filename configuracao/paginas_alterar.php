<?php
//Lucas 13102023 padrao novo
include_once('../header.php');
include_once('../database/paginas.php');
include_once('../database/secaoPagina.php');
include_once(ROOT . '/paginas/database/marcas.php');
include_once(ROOT . '/paginas/database/eventos.php');
include_once(ROOT . '/paginas/database/temas.php');
include_once(ROOT . '/paginas/database/servicos.php');
include_once(ROOT . '/cadastros/database/pessoas.php');
include_once(ROOT . '/sistema/database/empresa.php');



$idPagina = $_GET['idPagina'];
$pagina = buscaPaginas($idPagina);
$secoesPaginas = buscaSecaoPagina($idPagina);
$tema = buscatema();
$empresa = buscaEmpresas($_SESSION['idEmpresa']);
$perfil = buscarPessoa($empresa['idPessoa']);
$eventos = buscaEventos();

?>
<!doctype html>
<html lang="pt-BR">

<head>

    <?php include_once ROOT . "/vendor/head_css.php"; ?>
    <link href="<?php echo URLROOT ?>/paginas/css/<?php echo $tema["css"]; ?>" rel="stylesheet">
    <link href="<?php echo URLROOT ?>/paginas/css/main.css" rel="stylesheet"> <!--Estilo da pg principal -->
    
</head>

<body>

    <div class="container-fluid">

        <div class="row">
            <!-- MENSAGENS/ALERTAS -->
        </div>
        <div class="row">
            <!-- BOTOES AUXILIARES -->
        </div>
        <div class="row"> <!-- LINHA SUPERIOR A TABLE -->
            <div class="col-3">
                <!-- TITULO -->
                <h2 class="ts-tituloPrincipal">Paginas</h2>
            </div>
            <div class="col-7">
                <!-- FILTROS -->
            </div>

            <div class="col-2 text-end">
                <a href="paginas.php" role="button" class="btn btn-primary"><i
                        class="bi bi-arrow-left-square"></i></i>&#32;Voltar</a>
            </div>
        </div>


        <form action="../database/paginas.php?operacao=alterar" method="post">

            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label class="labelForm">Slug</label>
                        <input type="text" name="slug" class="form-control" value="<?php echo $pagina['slug'] ?>"
                            disabled>
                        <input type="hidden" class="form-control" name="idPagina"
                            value="<?php echo $pagina['idPagina'] ?>">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label class="labelForm">Titulo</label>
                        <input type="text" name="tituloPagina" class="form-control"
                            value="<?php echo $pagina['tituloPagina'] ?>">
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label class="labelForm">Arquivo Fonte</label>
                        <input type="text" name="arquivoFonte" class="form-control"
                            value="<?php echo $pagina['arquivoFonte'] ?>">
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label class="labelForm">Arquivo Single</label>
                        <input type="text" name="arquivoSingle" class="form-control"
                            value="<?php echo $pagina['arquivoSingle'] ?>">
                    </div>
                </div>
            </div>

            <div class="text-end ">

                <button type="submit" class="btn  btn-success"><i class="bi bi-sd-card-fill"></i>&#32;Salvar</button>
            </div>
        </form>

        <div class="table  mt-2 ts-divTabela">
            <table class="table table-hover table-sm align-middle">
                <thead class="ts-headertabelafixo">
                    <tr>
                      
                        <th>Secão</th>
                        <th>Ordem</th>
                        <th>Ação</th>
                       
                    </tr>
                </thead>
                <?php
                foreach ($secoesPaginas as $secaoPagina) { ?>

                    <tr>

                       
                        <td>
                            <?php echo $secaoPagina['tituloSecao'] ?>
                        </td>
                        <td>
                            <?php echo $secaoPagina['ordem'] ?>
                        </td>
                        <td>
                            <a class="btn btn-warning btn-sm"
                                href="secoesPaginas_alterar.php?idSecaoPagina=<?php echo $secaoPagina['idSecaoPagina'] ?>"
                                role="button"><i class="bi bi-pencil-square"></i></a>
                            <a class="btn btn-danger btn-sm"
                                href="secoesPaginas_excluir.php?idSecaoPagina=<?php echo $secaoPagina['idSecaoPagina'] ?>"
                                role="button"><i class="bi bi-trash3"></i></a>
                        </td>
                        
                    </tr>
                    <TR >
                        <TD colspan="3"><div class="container">
                            <?php
                            include '../secao/' . $secaoPagina["tipoSecao"] . "/" . $secaoPagina["arquivoFonte"];
                            ?>
                        </div></TD>
                       
                    </TR>

                <?php } ?>

            </table>
            <div class="text-end mt-4">
                <a href="secoesPaginas_inserir.php?idPagina=<?php echo $idPagina ?>" role="button"
                    class="btn btn-success"><i class="bi bi-plus-square"></i>&nbsp Novo</a>

            </div>
        </div>

    </div>

    <!-- LOCAL PARA COLOCAR OS JS -->

    <?php include_once ROOT . "/vendor/footer_js.php"; ?>

    <!-- LOCAL PARA COLOCAR OS JS -FIM -->

</body>

</html>