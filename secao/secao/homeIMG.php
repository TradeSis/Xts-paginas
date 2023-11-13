<?php
$parametro = json_decode($secaoPagina['parametros'], true);
?>
<div class="container">
    <div class="row">
        <div class="col-6">
            <div>
                <h1 class="ts-titulo"><?php echo $parametro["titulo"] ?? 'Default' ?></h1>
                <p class="ts-subTitulo"><?php echo $parametro["subTitulo"] ?? 'Default' ?></p>
                <a class="ts-botaoTitulo" href="#contato"><span><?php echo $parametro["textoBotao"] ?? 'Default' ?></span></a>
            </div>
        </div>

        <div class="col-6">
            <div>
                <img src="<?php echo $parametro["homeIMG"] ?? 'http://localhost/img/default.png' ?>">
            </div>
        </div>
    </div>
</div>