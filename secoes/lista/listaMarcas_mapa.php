<?php

include_once(ROOT . '/paginas/database/marcas.php');
$parametros = json_decode($secaoPagina["parametros"], true);

$lojasEspecializadas = null;
if ($lojasEspecializadas == "null") {
    $lojasEspecializadas = null;
}
if (isset($_GET['estado'])) {
    $estado = $_GET['estado'];
} else {
    $estado = null;
}
$marcas = buscaMarcasAtiva($estado,$lojasEspecializadas);


?>
<style>
    a {
        color: #1B4D60;
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        font-weight: 500;
    }

    hr {
        background-color: #3B3D42;
        margin-top: -10px;
        font-size: 14px;
    }

    h2 {
        color: #060944;
        font-size: 36px;
    }

    h5 {
        color: #060944;
        font-size: 20px;
    }

    .titulo {
        margin-left: 5px;
    }

    .card-deck .card {
        border: none;
    }

    .card-deck .cardPodcast {
        align-items: center;
    }

    .card-deck .cardPodcast img {

        width: 150px;
        height: 150px;
    }

    [class="1"] {
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

    @media only screen and (max-width: 600px) {
        .listaMapaDesktop {
            display: none;
        }
    }

    @media only screen and (min-width: 600px) {
        .listaMapaMobile {
            display: none;
        }
    }
</style>

<!--Conteudo desktop -->
<div class="container-fluid listaMapaDesktop" style="margin-top: 10px;">
    <div class="row titulo">
        <h2><?php echo count($marcas);  ?> - marcas encontradas </h2>
    </div>
    <hr>

    <div class="row">
        <?php foreach ($marcas as $marca) {  ?>
            <div class="col-sm-2" data-aos="fade-up" data-aos-delay="100">
                <div class="box text-center">
                    <a href="marcas/<?php echo $marca['slug'] ?>"><img class="<?php echo $marca['catalogo'] ?>" src="<?php echo URLROOT ?>/img/<?php echo $marca['imgMarca'] ?>" alt=""></a>

                    <a href="marcas/<?php echo $marca['slug'] ?>">
                        <p class="mt-3"><?php echo $marca['nomeMarca'] ?></p>
                    </a>

                </div>
            </div>
        <?php } ?>
    </div>

</div> 


<!--Conteudo mobile -->
<div class="container-fluid listaMapaMobile" style="margin-top: 10px;">
    <div class="row titulo">
        <h5><?php echo count($marcas);  ?> - marcas encontradas </h5>
    </div>
    <hr>
    <div class="row  d-flex justify-content-center text-center">
        <?php foreach ($marcas as $marca) {  ?>
            <div class="mr-3">
                <a href="marcas/<?php echo $marca['slug'] ?>"><img class="<?php echo $marca['catalogo'] ?>" src="<?php echo URLROOT ?>/img/<?php echo $marca['imgMarca'] ?>" alt=""></a>

                <a href="marcas/<?php echo $marca['slug'] ?>">
                    <p class="mt-3"><?php echo $marca['nomeMarca'] ?></p>
                </a>
            </div>

        <?php } ?>
    </div>
</div> 