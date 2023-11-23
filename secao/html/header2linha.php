<?php
$menus = json_decode($temas['menu'], true);
$perfil = json_decode($temas['perfil'], true);
?>

<style>
  .navbar-brand img {
    max-width: 120px;

  }

  #div_data {
    margin-left: 200px;
    color: #1B4D60;
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
    font-weight: 500;
  }

  .containerFaixaDeCima {
    width: 95vw;
  }

  .typed-text {
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
</style>


<nav class="navbar navbar-expand-lg">
  <div class="container">

    <a class="navbar-brand" href="../<?php echo URLROOT ?>"><img class="logo"
        src="<?php echo URLROOT ?>/img/<?php echo $perfil['imgPerfil'] ?>" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 120px">
      <ul class="navbar-nav mr-auto  ">
        <?php
        foreach ($menus as $menu) {
          ?>
          <li class="nav-item mr-4 ">
            <a href="<?php echo URLROOT . $menu['href'] ?>" class="nav-link">
              <?php echo $menu['menu'] ?>
            </a>
          </li>
        <?php } ?>

      </ul>

    </div>
  </div>

</nav>

 
<div class="container-flex mobile-conteudo" style="text-align:center; background-color: #0C2D4C; ">
    <div>
        <?php 
          foreach($menus as $menu){
        ?>
          <li><a href="<?php echo $menu['href']?>" class="active"><?php echo $menu['menu']?></a></li>
        <?php } ?>
   </div>

</div>


<script>

  $('.mobile-menu').click(function () {
    $('.mobile-conteudo').toggleClass('mostra');

  });
</script>