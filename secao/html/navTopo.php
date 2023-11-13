<?php
$parametro = json_decode($secaoPagina["parametros"], true);
?>
<div class="row ts-header">
    <div class="col-8">
        <a href="home"><img src="<?php echo $parametro["logo"] ?? 'http://localhost/img/tradesis.png' ?>" width="100vh 100vw"></a>
    </div>

    <div class="col-1">
        <a class="ts-botaoHeader" href="sobre"><span>Sobre</span></a>
    </div>
    <div class="col-1">
        <a class="ts-botaoHeader" href="produtos"><span>Produtos</span></a>
    </div>
    <div class="col-1">
        <a class="ts-botaoHeader" href="servicos"><span>Serviços</span></a>
    </div>
    <div class="col-1">
        <a class="ts-botaoHeader" href="contato"><span>Contato</span></a>
    </div>
</div>