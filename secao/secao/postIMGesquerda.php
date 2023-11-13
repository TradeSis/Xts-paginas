<?php
$parametro = json_decode($secaoPagina["parametros"], true);
?>
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-7 order-2">
            <p class="ts-postTitulo"><?php echo $parametro["postTitulo"] ?? 'Default' ?></p>
            <p class="ts-postDescricao"><?php echo $parametro["postDescricao"] ?? 'Default' ?></p>
        </div>
        <div class="col-md-5 order-1">
            <img src="<?php echo $parametro["postIMG"] ?? 'http://localhost/img/default.png' ?>" class="ts-postIcon" role="img">
        </div>
    </div>
</div>