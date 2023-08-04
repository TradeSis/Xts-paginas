<?php 
$temas = buscaTemas($paginaDados['idTema']);
$perfil = json_decode($temas['perfil'],true);
//$perfil = buscaPerfil();
?>
<section id="cta" class="cta">
      <div class="containerDivisor container-fluid" data-aos="zoom-out">

        <div class="row g-0 d-flex justify-content-center">
          <div class="iconeDivisor col-sm-4 text-center">
            <a href="https://www.instagram.com/<?php echo $perfil['instagram']?>"><i class="bi bi-instagram"></i></a>
          </div>
          <div class="iconeDivisor col-sm-4 text-center">
            <a href="https://www.facebook.com/<?php echo $perfil['facebook']?>"><i class="bi bi-facebook"></i></a>
          </div>
          <div class="iconeDivisor col-sm-4 text-center">
            <a href="https://wa.me/55<?php echo $perfil['whatsapp']?>"><i class="bi bi-whatsapp"></i></a>
          </div>
        </div>

        <!-- Mobile -->
        <div class="row g-0 d-flex justify-content-center">
          <div class="iconeDivisor text-center">
            <a href="https://www.instagram.com/<?php echo $perfil['instagram']?>"><i class="bi bi-instagram"></i></a>
          </div>
          <div class="iconeDivisor text-center">
            <a href="https://www.facebook.com/<?php echo $perfil['facebook']?>"><i class="bi bi-facebook"></i></a>
          </div>
          <div class="iconeDivisor text-center">
            <a href="https://wa.me/55<?php echo $perfil['whatsapp']?>"><i class="bi bi-whatsapp"></i></a>
          </div>
        </div>

      </div>
    </section>