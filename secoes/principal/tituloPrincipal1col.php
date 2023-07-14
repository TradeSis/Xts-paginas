<?php
$parametro = json_decode($secaoPagina["parametros"],true);
?>

<section id="home" class="onfocus mt-4" ><!--  style=" height:70vh" -->
      <div class="container-fluid p-0" data-aos="fade-up">

        <div class="row g-0"> <!-- filter: opacity(25%); -->
          <div class="col-lg-12 " style="text-align: center;">
            <div class="textoCentro content d-flex flex-column justify-content-center h-100 pl-4 pr-4" >
              <h4><?php echo $parametro['titulo'] ?></h4>
              <h1 class="fst-italic">
              <?php echo $parametro['subTitulo'] ?>
            
              </h1>
              
              <a href="#contato" class="read-more align-self-center mt-4"><span><?php echo $parametro['textoBotao'] ?></span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

      
        </div>


      </div>
    </section>