<?php
include_once('../head.php');
include_once('../database/secaoPagina.php');

$parametros = json_decode($secoesPagina['parametros'], true);
?>

<div class="row form-group">
    <div class="col-sm-6" style="margin-top: 10px">
        <label class='control-label' for='inputNormal' style="margin-top: -20px;">Titulo</label>
        <input type="text" name="titulo" class="form-control" value="<?php echo $parametros["titulo"] ?>">
    </div>
    <div class="col-sm-6" style="margin-top: 10px">
        <label class='control-label' for='inputNormal' style="margin-top: -20px;">Descrição</label>
        <input type="text" name="descricao" class="form-control" value="<?php echo $parametros["descricao"] ?>">
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-4" style="margin-top: 10px">
        <label class='control-label' for='inputNormal' style="margin-top: -20px;">Pasta Imagem</label>
        <input type="text" name="pastaImg" class="form-control" value="<?php echo $parametros["pastaImg"] ?>">
    </div>
    <div class="col-sm-4" style="margin-top: 10px">
        <label class='control-label' for='inputNormal' style="margin-top: -20px;">texto Botão</label>
        <input type="text" name="textoBotao" class="form-control" value="<?php echo $parametros["textoBotao"] ?>">
    </div>
</div>