<?php
include_once(ROOT . '/paginas/database/produtos.php');

$produtos = buscaProdutos();
?>
<div class="ts-slider mt-2">
    <div id="carousel" class="carousel">
        <div class="carousel-item active">
            <img class="ts-sliderIcon" src="http://localhost/img/white.png">
            <br>
            <hr>
            <p class="ts-sliderP">Destaques</p>
        </div>
        <?php foreach ($produtos as $produto) { ?>
            <div class="carousel-item">
                <img class="ts-sliderIcon" src="<?php echo $produto['imgProduto'] ?>">
                <br>
                <hr>
                <p class="ts-sliderP">
                    <?php echo $produto['nomeProduto'] ?>
                </p>
            </div>
        <?php } ?>

        <a class="ts-prev" href="#carousel" data-slide="prev">
            <i class="bi bi-chevron-left"></i>
        </a>
        <a class="ts-next" href="#carousel" data-slide="next">
            <i class="bi bi-chevron-right"></i>
        </a>
    </div>
</div>