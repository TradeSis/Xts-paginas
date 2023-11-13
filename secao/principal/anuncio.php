<?php
$parametro = json_decode($secaoPagina['parametros'], true);
?>
<div class="container mt-2">
    <div class="ts-textoCentro">
        <h1 class="ts-titulo"><?php echo $parametro["titulo"] ?? 'Default' ?></h1>
        <a href="/contato" class="ts-botaoTitulo"><?php echo $parametro["textoBotao"] ?? 'Default' ?></a>
    </div>
</div>