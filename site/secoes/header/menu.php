<?php
$parametro = json_decode($secaoPagina["parametros"], true);
?>
<div class="container">
    <div class="row mt-2 ts-textoCentro">
        <div class="col-6">
            <a href="home"><img src="<?php echo $parametro["logo"] ?? 'http://localhost/img/tradesis.png' ?>" class></a>
        </div>
        <div class="col-1">
            <a href="<?php echo $parametro["menu1Href"] ?? null ?>"><span><?php echo $parametro["menu1"] ?? 'Default' ?></span></a>
        </div>
        <div class="col-1">
            <a href="<?php echo $parametro["menu2Href"] ?? null ?>"><span><?php echo $parametro["menu2"] ?? 'Default' ?></span></a>
        </div>
        <div class="col-1">
            <a href="<?php echo $parametro["menu3Href"] ?? null ?>"><span><?php echo $parametro["menu3"] ?? 'Default' ?></span></a>
        </div>
        <div class="col-1">
            <a href="<?php echo $parametro["menu4Href"] ?? null ?>"><span><?php echo $parametro["menu4"] ?? 'Default' ?></span></a>
        </div>
        <div class="col-1">
            <a class="ts-botaoTitulo" href="<?php echo $parametro["textoBotaoHref"] ?? null ?>"><span><?php echo $parametro["textoBotao"] ?? 'Default' ?></span></a>
        </div>
    </div>
</div>
<hr>
