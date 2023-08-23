<?php
include_once('../head.php');
include_once('../database/secaoPagina.php');

$parametros = json_decode($secoesPagina['parametros'], true);
?>

<div class="row form-group">
    <div class="col-sm-4" style="margin-top: 10px">
        <label class='control-label' for='inputNormal' style="margin-top: -20px;">Titulo</label>
        <input type="text" name="titulo" class="form-control" value="<?php echo $parametros["titulo"] ?>">
    </div>
    <div class="col-sm-4" style="margin-top: 10px">
        <label class='control-label' for='inputNormal' style="margin-top: -20px;">Sub-Titulo</label>
        <input type="text" name="subTitulo" class="form-control" value="<?php echo $parametros["subTitulo"] ?>">
    </div>
    <div class="col-sm-4" style="margin-top: 10px">
        <label class='control-label' for='inputNormal' style="margin-top: -20px;">Texto Botão</label>
        <input type="text" name="textoBotao" class="form-control" value="<?php echo $parametros["textoBotao"] ?>">
    </div>
</div>