<?php
$parametro = json_decode($secaoPagina["parametros"], true);
?>
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-7 ts-textoCentro">
            <p class="ts-textoTitulo"><?php echo $parametro["titulo1"] ?? 'Default' ?></p>
            <p class="ts-descricao"><?php echo $parametro["descricao1"] ?? 'Default' ?></p>
            <p class="ts-textoTitulo"><?php echo $parametro["titulo2"] ?? 'Default' ?></p>
            <p class="ts-descricao"><?php echo $parametro["descricao2"] ?? 'Default' ?></p>
        </div>
        <div class="col-md-5">
            <img src="<?php echo $parametro["textoIMG"] ?? 'http://localhost/img/default.png' ?>" class="ts-textoIcon" role="img">
        </div>
    </div>
</div>