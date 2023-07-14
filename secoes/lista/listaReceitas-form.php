<?php
include_once('../head.php');
include_once('../database/secaoPagina.php');

$parametros = json_decode($secoesPagina['parametros'], true);
?>


<div class="container" style="margin-top: 10px">

    <div class="row form-group" style="margin-bottom: 60px">
        <div class="col-sm-12">
            <label class='control-label' for='inputNormal' style="margin-top: -10px;">Titulo</label>
            <input type="text" name="titulo" class="form-control" value="<?php echo $parametros["titulo"] ?>">
        </div>
    </div>

</div>