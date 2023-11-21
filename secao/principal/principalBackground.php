<?php
$parametro = json_decode($secaoPagina['parametros'], true);
?>
<div class="ts-background" style="background-image: url('<?php echo $parametro["principalBackground"] ?? null ?>');">
    <div class="container">
        <div class="row mb-3">
            <div class="col-6 mt-4">
                <div>
                    <h1 class="ts-titulo"><?php echo $parametro["titulo"] ?? 'Default' ?></h1>
                    <p class="ts-subTitulo"><?php echo $parametro["subTitulo"] ?? 'Default' ?></p>
                    <a class="ts-botaoTitulo" href="/contato"><span><?php echo $parametro["textoBotao"] ?? 'Default' ?></span></a>
                </div>
            </div>

            <div class="col-6 ts-alinhaVertical">
                <div>
                    <img class="ts-principalIMG" src="<?php echo $parametro["principalIMG"] ?? null ?>">
                </div>
            </div>
        </div>
    </div>
</div>