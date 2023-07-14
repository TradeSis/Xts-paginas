<?php
$produtos = buscaListaProdutosSemCatalogo();

?>

<style>
    h4 {
        color: #1B4D60;
        font-family: 'Poppins', sans-serif;
        font-size: 20px;
    }
</style>


<div class="row" style="text-align: center;">
    <h4>Ainda não temos catálogo desta marca, mas você pode se interessar por estes:</h4>
    <?php foreach ($produtos as $produto) { ?>

        <div class="col-lg-4 shadow mt-4" data-aos="fade-up" data-aos-delay="200" style="border-radius: 10px;">
            <div>
                <a href="#"><img src="<?php echo URLROOT ?>/img/<?php echo $produto['imgProduto'] ?>" style="border-radius: 10px;" class="img-fluid shadow mt-2" alt=""></a>
                <center>
                    <hr style="width: 10vw; background-color:#000">
                    <p><?php echo $produto['nomeProduto'] ?></p>
                </center>
            </div>
        </div>
    <?php } ?>

</div>