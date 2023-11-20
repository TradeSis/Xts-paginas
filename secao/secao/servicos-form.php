<?php
$parametros = json_decode($secoesPagina['parametros'], true);
?>

<div class="row">
    <div class="col-sm-4">
        <label class='form-label ts-label'>direitos</label>
        <input type="text" name="direitos" class="form-control ts-input" value="<?php echo $parametros["direitos"] ?? null ?>">
    </div>
    <div class="col-sm-4">
        <label class='form-label ts-label'>Descrição</label>
        <input type="text" name="nomeEmpresa" class="form-control ts-input" value="<?php echo $parametros["nomeEmpresa"] ?? null ?>">
    </div>
    <div class="col-sm-4">
        <label class='form-label ts-label'>Botão</label>
        <input type="text" name="textoBotao" class="form-control ts-input" value="<?php echo $parametros["textoBotao"] ?? null ?>">
    </div>
</div>
<hr>
<div class="row">
    <div class="col-sm-4">
        <label class='form-label ts-label'>tab1</label>
        <input type="text" name="tab1" class="form-control ts-input" value="<?php echo $parametros["tab1"] ?? null ?>">
    </div>
    <div class="col-sm-4">
        <label class='form-label ts-label'>tab2</label>
        <input type="text" name="tab2" class="form-control ts-input" value="<?php echo $parametros["tab2"] ?? null ?>">
    </div>
    <div class="col-sm-4">
        <label class='form-label ts-label'>tab3</label>
        <input type="text" name="tab3" class="form-control ts-input" value="<?php echo $parametros["tab3"] ?? null ?>">
    </div>
</div>
