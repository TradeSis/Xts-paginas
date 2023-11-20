<?php
$parametro = json_decode($secaoPagina["parametros"], true);
?>
<div class="ts-footer">
    <div class="ts-textoCentro mt-2">
        <p><?php echo $parametro["direitos"] ?? 'Default' ?></p> 
        <p><?php echo $parametro["nomeEmpresa"] ?? 'Default' ?></p> 
        <p>CNPJ: <?php echo $parametro["cnpj"] ?? 'Default' ?></p>
        <div class="ts-socialParametro">
            <a href="<?php echo $perfil["facebook"] ?? null ?>" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="<?php echo $perfil["linkedin"] ?? null ?>" class="linkedin"><i class="bi bi-linkedin"></i></a>
            <a href="<?php echo $perfil["instagram"] ?? null ?>" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>
    </div>
</div>