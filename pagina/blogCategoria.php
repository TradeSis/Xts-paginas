<?php
include_once(ROOT . '/paginas/database/posts.php');
/* $parametro = json_decode($secaoPagina["parametros"], true); */


$posts = buscaPostsCategoria($categoria, null);

?>
<style>
    p {
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

    .titulo {
        margin-left: 5px;
    }
</style>


<main id="main">

    <!-- ======= Blog Section ======= -->
    <section style="margin-top: 30px;">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-9"> <!-- parte 1 -->


                    <div class="row titulo" style="margin-top: -50px;">
                        <h2><?php echo $titulo ?></h2>
                    </div>
                    <hr>

                    <div class="row">
                        <?php foreach ($posts as $post) {  ?>
                            <div class="col-sm-4 ">
                                <div class="card-deck " style="margin-top: 30px;">
                                    <div class="card shadow">
                                        <img class="card-img-top" src="<?php echo URLROOT ?>/img/<?php echo $post['imgDestaque'] ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <a href="noticias/<?php echo $post['slug'] ?>"><?php echo $post['titulo'] ?></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>



                </div>

                <div class="col-lg-3"> <!-- parte 2 -->
                    <div class="sidebar-item mt-2 shadow" style="border-radius: 15px;">
                        <div id="carouselExampleIndicators" class="carousel" data-ride="carousel" style="margin-left: -50px; margin-right: -50px">
                            <div class="carousel-inner pt-2">
                                <center>
                                    <div class="carousel-item active">
                                        <img class="d-block w-50" height="200px" style="border-radius: 15px" src="<?php echo URLROOT ?>/img/prod1_prod1.jpg" alt="First slide">
                                        <center>
                                            <br>
                                            <hr style="width: 20vw;">
                                            <p class="mt-1">Destaques</p>
                                        </center>
                                    </div>
                                    <?php foreach ($produtos as $produto) { ?>
                                        <div class="carousel-item">
                                            <img class="d-block w-50" height="200px" style="border-radius: 15px" src="<?php echo URLROOT ?>/img/<?php echo $produto['imgProduto'] ?>" alt="Second slide">
                                            <center>
                                                <br>
                                                <hr style="width: 20vw;">
                                                <p class="mt-1"><?php echo $produto['nomeProduto'] ?></p>
                                            </center>
                                        </div>
                                    <?php } ?>
                                </center>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <?php foreach ($autores as $autor) {  ?>
                        <div class="card text-center mt-3 shadow" style="height: 165px ;border-radius: 15px;">
                            <div class="card-body">
                                <img src="<?php echo URLROOT ?>/img/<?php echo $autor['fotoAutor'] ?>" alt="">
                                <h5 class="card-title"><?php echo $autor['nomeAutor'] ?></h5>
                            </div>
                        </div>
                    <?php } ?>

                </div>

            </div>

        </div>
    </section>
</main>