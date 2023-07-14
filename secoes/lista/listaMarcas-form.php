<?php
include_once('../head.php');
include_once('../database/secaoPagina.php');

$parametros = json_decode($secoesPagina['parametros'], true);
?>


<div class="container" style="margin-top: 10px">

    <div class="row form-group" style="margin-bottom: 60px">
        <div class="col-sm-9">
            <label class='control-label' for='inputNormal' style="margin-top: -10px;">Titulo</label>
            <input type="text" name="titulo" class="form-control" value="<?php echo $parametros["titulo"] ?>">
        </div>

        <div class="col-sm-3" style="margin-top: -7px">
            <div class="select-form-group">
                <label class="labelForm">Apenas lojas Especializadas</label>
                <select class="select form-control" name="lojasEspecializadas">
                    <option value="<?php echo $parametros["lojasEspecializadas"] ?>"><?php echo $parametros["lojasEspecializadas"] ?></option>
                    <option value="1">Sim</option>
                    <option value="null">Não</option>
                </select>
            </div>
        </div>
    </div>

</div>