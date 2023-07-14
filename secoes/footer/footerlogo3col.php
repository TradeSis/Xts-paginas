<?php
$parametro = json_decode($secaoPagina["parametros"], true);
$perfil = json_decode($temas['perfil'],true);

?>

<footer id="footer" class="footer">

  <div class="footer-content">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-4">
          <div class="footer-info">
            <img src="<?php echo URLROOT ?>/img/<?php echo $parametro["logo"] ?>" alt="" width="300" height="120">

            <br>
            <br>
            <br>

          </div>
        </div>


        <div class="col-lg-4 col-md-4 footer-newsletter">
          <h4><?php echo $parametro["tituloContato"] ?></h4>
          <strong><?php echo $parametro["textoWhatsapp"] ?></strong>&nbsp;<?php echo $perfil["whatsapp"] ?><br>
          <br>
          <strong><?php echo $parametro["textoEmail"] ?></strong>&nbsp;<?php echo $perfil["email"] ?><br>


        </div>

        <div class="col-lg-4 col-md-4 footer-links">
          <h4><?php echo $parametro["tituloEndereco"] ?></h4>

          <strong><?php echo $parametro["textoEndereco"] ?></strong> <?php echo $perfil["endereco"] ?>&nbsp;-&nbsp;<strong>numero:</strong> <?php echo $perfil["numero"] ?><br>
          <strong><?php echo $parametro["textoBairro"] ?></strong> <?php echo $perfil["bairro"] ?>
          <br>
          <strong><?php echo $parametro["textoCep"] ?></strong> <?php echo $perfil["cep"] ?><br>
          <strong><?php echo $parametro["textoCidade"] ?></strong> <?php echo $perfil["cidade"] ?>&nbsp;-&nbsp;<strong>estado:</strong> <?php echo $perfil["estado"] ?>
          <br>

        </div>

      </div>
    </div>
  </div>

  <div class="footer-legal text-center">
    <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

      <div class="d-flex flex-column align-items-center align-items-lg-start">
        <div class="copyright">
          <?php echo $parametro["textoRedesSociais"] ?>
        </div>

      </div>

      <div class="social-links order-first order-lg-last mb-3 mb-lg-0">

        <a href="<?php echo $perfil["twitter"] ?>" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="<?php echo $perfil["facebook"] ?>" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="<?php echo $perfil["instagram"] ?>" class="instagram"><i class="bi bi-instagram"></i></a>

      </div>

    </div>
  </div>

</footer>