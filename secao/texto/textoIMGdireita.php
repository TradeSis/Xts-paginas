<?php
$parametro = json_decode($secaoPagina["parametros"], true);
?>
<hr>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-7">
            <p class="ts-textoTitulo"><?php echo $parametro["textoTitulo"] ?? 'Default' ?></p>
            <p class="ts-textoDescricao"><?php echo $parametro["textoDescricao"] ?? 'Default' ?></p>
        </div>
        <div class="col-md-5">
            <img src="<?php echo $parametro["textoIMG"] ?? 'http://localhost/img/default.png' ?>" class="ts-textoIcon" role="img">
        </div>
    </div>
</div>