<?php
$parametro = json_decode($secaoPagina["parametros"], true);
?>
<hr>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-7 order-2">
            <p class="ts-titulo"><?php echo $parametro["titulo"] ?? 'Default' ?></p>
            <p class="ts-descricao"><?php echo $parametro["descricao"] ?? 'Default' ?></p>
        </div>
        <div class="col-md-5 order-1">
            <img src="<?php echo $parametro["textoIMG"] ?? 'http://localhost/img/default.png' ?>" class="ts-textoIcon" role="img">
        </div>
    </div>
</div>