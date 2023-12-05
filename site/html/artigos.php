<?php
include_once(ROOT . '/paginas/database/produtos.php');

$produtos = buscaProdutos();
$parametro = json_decode($secaoPagina["parametros"], true);
?>
<div class="container">
    <div class="ts-textoCentro mt-3 mb-3">
        <p class="ts-titulo"><?php echo $parametro["titulo"] ?? 'Default' ?></p>
    </div>
    <div class="row ts-produtosCards">
        <?php $counter = 0;
        foreach ($produtos as $produto) {
            if ($counter < 4) { ?>
                <div class="col">
                    <img src="<?php echo $produto['imgProduto'] ?>" class="ts-produtoIcon" role="img">
                    <h3><?php echo $produto['nomeProduto'] ?></h3>
                    <p><a class="ts-botaoTitulo" href="produtos">Ler artigo &raquo;</a></p>
                </div>
            <?php $counter++;}
            else { break; }
        } ?>
    </div>
</div>