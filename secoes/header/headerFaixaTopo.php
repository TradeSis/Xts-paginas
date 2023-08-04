<?php 
$parametro = json_decode($secaoPagina["parametros"],true);
$temas = buscaTemas($paginaDados['idTema']);
$menus = json_decode($temas['menu'],true);
$perfil = json_decode($temas['perfil'],true);
?>
<div class="container-fluid" id="faixaDeCima">
  <div class="row">
    <div class="col-sm-10 mt-2">
      <a href="https://wa.me/55<?php echo $perfil['whatsapp']?>"><?php echo $parametro['textoWhatsapp']?> <?php echo $perfil['whatsapp']?></a>
      <a><?php echo $parametro['textoEmail']?><?php echo $perfil['email']?></a>
      
    </div>
    <div class="col-sm-2 mt-2">
      <a href="https://www.instagram.com/<?php echo $perfil['instagram']?>"><i class="bi bi-instagram"></i></a>
      <a href="https://www.facebook.com/<?php echo $perfil['facebook']?>"><i class="bi bi-facebook"></i></a>
      
    </div>
  </div>
   
   
</div>
<div class="root">
  <header>
    <div class="container-header">
    
      <a href="<?php echo URLROOT?>"><img class="logo" src="<?php echo URLROOT ?>/img/<?php echo $parametro['logo']?>" alt="" ></a>
      <nav>
        <?php 
          foreach($menus as $menu){
        ?>
          <li><a href="<?php echo $menu['href']?>" class="active"><?php echo $menu['menu']?></a></li>
        <?php } ?>
        
        
      </nav>


      <div class="mobile-menu">
      <span class="material-symbols-outlined">
menu
</span>
      </div>
    </div>

    
  </header>

</div>
 
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
  $('.mobile-menu').click(function(){
    $('.mobile-conteudo').toggleClass('mostra');
    
});
</script>