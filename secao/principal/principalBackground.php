<?php
$parametro = json_decode($secaoPagina['parametros'], true);
?>
<div class="ts-background mt-2" style="background-image: url('<?php echo $parametro["principalIMG"] ?>');">
    <div class="ts-textoCentro">
        <h1 class="ts-titulo"><?php echo $parametro["titulo"] ?? 'Default' ?></h1>
        <p class="ts-subTitulo"><?php echo $parametro["subTitulo"] ?? 'Default' ?></p>
    </div>
</div>