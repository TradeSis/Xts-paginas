<?php
$parametro = json_decode($secaoPagina["parametros"],true);

?>
<style>
    .btn{
        background-color: var(--color-btn-primary);
        color: var(--color-btn-text);
    }
</style>
<section id="contato" class="contact">

    <div class="container p-4" data-aos="fade-up" style="border-radius: 10px; background-color: #FFFFFF">

        <div class="section-header">
            <h2><?php echo $parametro['titulo'] ?></h2>
        </div>

        <div class="row gy-4">

            <div class="col-lg-12">
                <form action="#" method="post">
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Nome Completo">
                        </div>

                        <div class="col-md-6 ">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="subject" placeholder="Telefone">
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control" name="mensagem" rows="6" placeholder="Mensagem"></textarea>
                        </div>

                        <div class="col-md-12 text-center mt-3">

                            <button class="btn" type="submit"><?php echo $parametro['textoBotao'] ?></button>

                        </div>

                    </div>
                </form>

            </div>

        </div>

    </div>

</section>