<?php
include_once('../head.php');
include_once('../database/secaoPagina.php');

$parametros = json_decode($secoesPagina['parametros'], true);

?>

<div class="row">
    <div class="col-sm-6" style="margin-top: 10px">
        <label>Titulo</label>
        <input type="text" name="titulo" class="form-control" value="<?php echo $parametros["titulo"] ?>">
    </div>
    <div class="col-sm-6" style="margin-top: 10px">
        <label>textoBotao</label>
        <input type="text" name="textoBotao" class="form-control" value="<?php echo $parametros["textoBotao"] ?>">
    </div>
</div>
<div class="row">
    <div class="col-sm-6" style="margin-top: 10px">
        <label>pastaImg</label>
        <input type="text" name="pastaImg" class="form-control" value="<?php echo $parametros["pastaImg"] ?>">
    </div>
    <div class="col-sm-6" style="margin-top: 10px">
        <label>nomeImg</label>
        <input type="text" name="nomeImg" class="form-control" value="<?php echo $parametros["nomeImg"] ?>">
    </div>
</div>