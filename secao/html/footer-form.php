<?php
$parametros = json_decode($secoesPagina['parametros'], true);
?>

<div class="row">
    <div class="col-sm-4">
        <label class='form-label ts-label'>Direitos</label>
        <input type="text" name="direitos" class="form-control ts-input" value="<?php echo $parametros["direitos"] ?? null ?>">
    </div>
    <div class="col-sm-4">
        <label class='form-label ts-label'>Empresa</label>
        <input type="text" name="nomeEmpresa" class="form-control ts-input" value="<?php echo $parametros["nomeEmpresa"] ?? null ?>">
    </div>
    <div class="col-sm-4">
        <label class='form-label ts-label'>CNPJ</label>
        <input type="text" name="cnpj" class="form-control ts-input" value="<?php echo $parametros["cnpj"] ?? null ?>">
    </div>
</div>
<div class="row">
    <div class="col-sm-4">
        <label class='form-label ts-label'>Facebook</label>
        <input type="text" name="facebook" class="form-control ts-input" value="<?php echo $parametros["facebook"] ?? null ?>">
    </div>
    <div class="col-sm-4">
        <label class='form-label ts-label'>Linkedin</label>
        <input type="text" name="linkedin" class="form-control ts-input" value="<?php echo $parametros["linkedin"] ?? null ?>">
    </div>
    <div class="col-sm-4">
        <label class='form-label ts-label'>Instagram</label>
        <input type="text" name="instagram" class="form-control ts-input" value="<?php echo $parametros["instagram"] ?? null ?>">
    </div>
</div>