<?php
$parametro = json_decode($secaoPagina['parametros'], true);
?>
<div class="container mt-2">
    <div class="ts-textoCentro">
        <h1 class="ts-titulo"><?php echo $parametro["titulo"] ?? 'Default' ?></h1>
        <p class="ts-subTitulo"><?php echo $parametro["subTitulo"] ?? 'Default' ?></p>
        <video autoplay="" muted="true" loop="" data-wf-ignore="true" data-object-fit="contain" class="ts-video">
            <source src="<?php echo $parametro["video"] ?? 'http://localhost/img/teste.mp4' ?>" type="video/mp4" data-wf-ignore="true">
        </video>
    </div>
</div>