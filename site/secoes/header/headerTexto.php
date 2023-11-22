<?php
$parametro = json_decode($secaoPagina["parametros"], true);
?>
<div class="ts-headerTexto">
    <div class="ts-textoCentro">
        <p><?php echo $parametro["titulo"] ?? 'Default' ?> <?php echo $parametro["whatsapp"] ?? 'Default' ?> | <?php echo $parametro["email"] ?? 'Default' ?></p>
    </div>
</div>