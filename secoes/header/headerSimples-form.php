<?php 
$parametro = json_decode($secaoPagina["parametros"],true);
$menus = $parametro['menu'];
?>
 <!-- ======= Header ======= -->
  <header id="header" class="header" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="<?php echo URLROOT;?>"><img src="<?php echo URLROOT . $parametro["pastaImg"] . $parametro["nomeImg"] ?>" alt="" width="200px" height="80px">
             
        
      </a>

      <nav id="navbar" class="navbarPrincipal">
        <ul>

        <?php 
          foreach($menus as $menu){
        ?>
          <li><a href="<?php echo $menu['href']?>" class="active"><?php echo $menu['menu']?></a></li>
        <?php } ?>
          
        </ul>
        
      </nav>

    </div>
  </header>