<?php
$parametro = json_decode($secaoPagina["parametros"], true);
?>
<hr>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-6">
            <h2 class="ts-sobreTitulo"><?php echo $parametro["titulo"] ?? 'Default' ?></h2>
            <p class="ts-sobreSubTitulo"><?php echo $parametro["subTitulo"] ?? null ?></p>
            <p class="ts-sobreDescricao"><?php echo $parametro["descricao"] ?? 'Default' ?></p>
        </div>
        <div class="col-md-6">
            <img src="<?php echo $parametro["textoIMG"] ?? 'http://localhost/img/default.png' ?>" role="img">
        </div>
    </div>
</div>