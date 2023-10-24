<?php
//Lucas 13102023 padrao novo
include_once('../header.php');
include_once('../database/secao.php');
include_once('../database/paginas.php');
include_once('../database/secaoPagina.php');

$secoes = buscaSecao();
$paginas = buscaPaginas($_GET["idPagina"]);
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
        <div class="row"> <!-- LINHA SUPERIOR A TABLE -->
            <div class="col-3">
                <!-- TITULO -->
                <h2 class="ts-tituloPrincipal">Seções das Paginas</h2>
            </div>
            <div class="col-7">
                <!-- FILTROS -->
            </div>

            <div class="col-2 text-end">
                <a href="../database/secaoPagina.php?operacao=inserir" role="button" class="btn btn-primary"><i class="bi bi-arrow-left-square"></i></i>&#32;Voltar</a>
            </div>
        </div>


        <form action="../database/secaoPagina.php?operacao=inserir" method="post">

            <div class="row mt-3">
                <div class="col-sm-3">
                    <label class='form-label ts-label'>Pagina</label>
                    <input type="text" class="form-control ts-input" name="tituloPagina" value="<?php echo $paginas['tituloPagina'] ?>" readonly>
                    <input type="hidden" class="form-control ts-input" name="idPagina" value="<?php echo $paginas['idPagina'] ?>">
                </div>

                <div class="col-sm-3">
                    <label class="form-label ts-label">Seção</label>
                    <select class="form-select ts-input" name="idSecao">
                        <?php
                        foreach ($secoes as $secao) {
                        ?>
                            <option value="<?php echo $secao['idSecao'] ?>"><?php echo $secao['tituloSecao']  ?></option>
                        <?php  } ?>
                    </select>
                </div>

                <div class="col-sm-3">
                    <label class="form-label ts-label">Ordem</label>
                    <select class="form-select ts-input" name="ordem">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                    </select>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-sm-12">

                    <div class="form-group">
                        <label>Parametros</label>
                        <textarea name="parametros" cols="120" rows="10"></textarea>

                    </div>
                </div>

            </div>


            <div class="text-end mt-4">
                <button type="submit" class="btn  btn-success"><i class="bi bi-sd-card-fill"></i>&#32;Cadastrar</button>
            </div>
        </form>
    </div>

    </div>

    <!-- LOCAL PARA COLOCAR OS JS -->

    <?php include_once ROOT . "/vendor/footer_js.php"; ?>

    <!-- LOCAL PARA COLOCAR OS JS -FIM -->


</body>

</html>