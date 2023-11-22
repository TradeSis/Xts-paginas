<?php
$parametros = json_decode($secoesPagina['parametros'], true);

?>

<h5>Parametros</h5>
<hr>

<div class="row">
    <div class="col-sm-4">
        <label class='form-label ts-label'>Titulo</label>
        <input type="text" name="titulo" class="form-control ts-input" value="<?php echo $parametros["titulo"] ?? null ?>">
    </div>
    <div class="col-sm-4">
        <label class='form-label ts-label'>Sub-Titulo</label>
        <input type="text" name="subTitulo" class="form-control ts-input" value="<?php echo $parametros["subTitulo"] ?? null ?>">
    </div>
    <div class="col-sm-4">
        <label class='form-label ts-label'>Texto Botão</label>
        <input type="text" name="textoBotao" class="form-control ts-input" value="<?php echo $parametros["textoBotao"] ?? null ?>">
    </div>
</div>
<div class="row">
    <div class="col-sm-4">
        <label class='form-label ts-label'>Imagem</label>
        <label  for="principalIMG" >
            <img class="mt-4 img-fluid img-thumbnail" src="<?php echo $parametros["principalIMG"] ?? null ?>">
        </label>
        <input type="file"   name="principalIMG" id="principalIMG">
        <input type="hidden" name="principalIMG" value="<?php echo $parametros["principalIMG"] ?? null ?>">
        
        <label class='form-label ts-label'>posicaoIMG</label>
        <input type="text" name="posicaoIMG" class="form-control ts-input" value="<?php echo $parametros["posicaoIMG"] ?? null ?>">

        <label class='form-label ts-label'>max-heightIMG</label>
        <input type="text" name="max-heightIMG" class="form-control ts-input" value="<?php echo $parametros["max-heightIMG"] ?? null ?>">

    </div>
    <div class="col-sm-4">
        <label class='form-label ts-label'>Background</label>
        <label for="principalBackground" >
            <img class="mt-4 img-fluid img-thumbnail" src="<?php echo $parametros["principalBackground"] ?>">
        </label>
        <input type="file"   name="principalBackground" id="principalBackground">
        <input type="hidden" name="principalBackground" value="<?php echo $parametros["principalIMG"] ?? null ?>">
    </div>
</div>


