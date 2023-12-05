<?php
$parametro = json_decode($secaoPagina["parametros"], true);
$menus = buscaPaginas(null,null);
$i = 0;
while($i < count($menus))
{
    if ($menus[$i]["slug"] == "home") {$menus[$i]["slug"] = "/";}
    if ($menus[$i]["menu"] == "0") {unset($menus[$i]);}
	$i++;
}

?>

<div class="container-fluid ts-header ">
    <div class="col-3 ts-textoCentro">
        <a class="logo" href="<?php echo URLROOT ?>"><img src="<?php echo $perfil["imgPerfil"] ?? '/img/tradesis.png' ?>"
                width="120vh "></a>
    </div>
    <div class="navbar navbar-expand col-7 ts-textoCentro">
        <ul class="navbar-nav mx-auto">
            <?php foreach ($menus as $menu) {  ?>
                <li><a href="<?php echo $menu['slug'] ?>" class=" ts-botaoHeader">
                        <?php echo $menu['tituloPagina'] ?>
                    </a></li>
            <?php } ?>
        </ul>
    </div>
    <div class="col-2">
    </div>
</div>

<div class="container-flex mobile-conteudo" style="text-align:center; background-color: #0C2D4C; ">
    <div>
        <?php 
          foreach($menus as $menu){
        ?>
          <li><a href="<?php echo $menu['slug'] ?>" class="active"><?php echo $menu['tituloPagina']?></a></li>
        <?php } ?>
   </div>

</div>


<script>

  $('.mobile-menu').click(function () {
    $('.mobile-conteudo').toggleClass('mostra');

  });
</script>
