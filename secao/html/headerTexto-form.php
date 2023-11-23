<?php
$parametros = json_decode($secoesPagina['parametros'], true);
?>

<div class="row">
    <div class="col-sm-4">
        <label class='form-label ts-label'>Titulo</label>
        <input type="text" name="titulo" class="form-control ts-input" value="<?php echo $parametros["titulo"] ?? null ?>">
    </div>
    <div class="col-sm-4">
        <label class='form-label ts-label'>Whatsapp</label>
        <input type="text" name="whatsapp" class="form-control ts-input" value="<?php echo $parametros["whatsapp"] ?? null ?>">
    </div>
    <div class="col-sm-4">
        <label class='form-label ts-label'>Email</label>
        <input type="text" name="email" class="form-control ts-input" value="<?php echo $parametros["email"] ?? null ?>">
    </div>
</div>