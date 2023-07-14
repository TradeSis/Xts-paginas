<?php
$parametro = json_decode($secaoPagina["parametros"], true);
$perfil = json_decode($temas['perfil'],true);
?>
<style>
  .copyright{
    color:var(--color-btn-secondary);
  }
  h5{
    color:var(--color-h1-primary);
  }
  i{
    color:var(--color-sociaisIcons-primary);
  }
</style>
<footer id="footer" class="footer">

  <div class="footer-legal text-center" style="height: 200px;">
    <div class="pt-4 container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

      <div class="d-flex flex-column align-items-center align-items-lg-start">
        <div class="copyright">
          <h5><?php echo $parametro["texto1"] ?><br></h5>
          <br>
          <i class="bi bi-whatsapp"></i>&nbsp;<?php echo $perfil["whatsapp"] ?><br>
          <?php echo $perfil["email"] ?><br>
        </div>

      </div>

      <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <h5><?php echo $parametro["texto2"] ?><br></h5>
        <br>
        <a href="<?php echo $perfil["facebook"] ?>" class="mt-4 facebook"><i class="bi bi-facebook"></i></a>
        <a href="<?php echo $perfil["instagram"] ?>" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="<?php echo $perfil["instagram"] ?>" class="email"><i class="bi bi-envelope-fill"></i></a>
        <a href="<?php echo $perfil["twitter"] ?>" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
        <a href="<?php echo $perfil["instagram"] ?>" class="youtube"><i class="bi bi-youtube"></i></a>

      </div>

    </div>
  </div>

</footer>