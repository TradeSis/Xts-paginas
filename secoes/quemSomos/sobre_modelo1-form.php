<?php
include_once('../head.php');
include_once('../database/secaoPagina.php');

$parametros = json_decode($secoesPagina['parametros'], true);

?>

<div class="row form-group">
  <div class="col-sm-8">
    <label class='control-label' for='inputNormal' style="margin-top: -20px;">titulo</label>
    <input type="text" name="titulo" class="form-control" value="<?php echo $parametros["titulo"] ?>">
  </div>
</div>

<div class="row form-group" style="margin-top: 50px;">
  <div class="col-sm-3">
    <label class='control-label' for='inputNormal' style="margin-top: -20px;">Descrição</label>
    <textarea name="descricao" id="" cols="140" rows="15"><?php echo $parametros["descricao"] ?></textarea>
  </div>
</div>
