<?php
include_once('../head.php');
include_once('../database/secaoPagina.php');
include_once('../database/secao.php');
include_once('../database/paginas.php');

$secoes = buscaSecao();
$paginas = buscaPaginas();
$idSecaoPagina = $_GET['idSecaoPagina'];
$secoesPagina = buscaSecaoPaginas($idSecaoPagina);
$arquivoFonte = $secoesPagina["arquivoFonte2"];
$temporaria = explode('.', $arquivoFonte);
?>

<body class="bg-transparent">

    <div class="container formContainer">
        <div class="row">
            <div class="col-sm-8">
                <h2 class="tituloTabela">Seções da Paginas</h2>
            </div>
            <div class="col-sm-4" style="text-align:right">
                <a href="paginas_alterar.php?idPagina=<?php echo $secoesPagina['idPagina'] ?>" role="button" class="btn btn-primary"><i class="bi bi-arrow-left-square"></i></i>&#32;Voltar</a>
            </div>
        </div>

            <form action="../database/secaoPagina.php?operacao=<?php echo $temporaria[0] ?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-6" style="margin-top: -5px">
                        <div class="select-form-group">
                            <label class="labelForm">Pagina</label>
                            <input type="text" name="slug" class="form-control" value="<?php echo $secoesPagina['tituloPagina'] ?>" disabled>
                            <input type="text" class="form-control" name="idPagina" value="<?php echo $secoesPagina['idPagina'] ?>" style="display: none">
                        </div>
                    </div>

                    <div class="col-sm-3" style="margin-top: 10px">
                        <div class="select-form-group">

                            <label class="labelForm">Seção</label>
                            <select class="select form-control" name="idSecao">
                                <option value="<?php echo $secoesPagina['idSecao'] ?>"><?php echo $secoesPagina['tituloSecao']  ?></option>
                                <?php
                                foreach ($secoes as $secao) {
                                ?>
                                    <option value="<?php echo $secao['idSecao'] ?>"><?php echo $secao['tituloSecao']  ?></option>
                                <?php  } ?>
                            </select>

                        </div>
                    </div>

                    <div class="col-sm-2" style="margin-top: 10px">
                        <div class="select-form-group">

                            <label class="labelForm">Ordem</label>
                            <select class="select form-control" name="ordem">
                                <option value="<?php echo $secoesPagina['ordem'] ?>"><?php echo $secoesPagina['ordem'] ?></option>
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
                            <input type="text" class="form-control" name="idSecaoPagina" value="<?php echo $secoesPagina['idSecaoPagina'] ?>" style="display: none">

                        </div>
                    </div>

                    <div class="col-sm-1" style="margin-top: 10px">
                        <div class="select-form-group">

                            <label class="labelForm">Colunas</label>
                            <select class="select form-control" name="coluna">
                                <option value="<?php echo $secoesPagina['coluna'] ?>"><?php echo $secoesPagina['coluna'] ?></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                            

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12" style="margin-top: 10px;">

                        <div class="form-group">
                            <h5>Parametros</h5>
                            <hr>
                            <br>
                            <?php
                            $arquivoFonte = $secoesPagina["arquivoFonte2"];
                            $temporaria = explode('.', $arquivoFonte);
                            $arquivoFonte = $temporaria[0] . '-form.' . $temporaria[1];
                            include ROOT . '/paginas/secoes/' . $secoesPagina["tipoSecao"] . "/" . $arquivoFonte;
                            ?>

                        </div>
                    </div>

                </div>

                <div style="text-align:right; margin-top:20px">
                    <button type="submit" class="btn  btn-success"><i class="bi bi-sd-card-fill"></i>&#32;Salvar</button>
                </div>
            </form>

    </div>

</body>

</html>