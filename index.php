<?php
include_once __DIR__ . "/../config.php";
include_once ROOT . "/sistema/painel.php";
include_once ROOT . "/sistema/database/loginAplicativo.php";

$nivelMenuLogin =  buscaLoginAplicativo($_SESSION['idLogin'],'Paginas');

$configuracao = 1;

$nivelMenu   =   $nivelMenuLogin['nivelMenu'];

?>


<div class="container-fluid mt-1">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <ul class="nav a" id="myTabs">


                <?php
                    $tab = 'posts';

                    if (isset($_GET['tab'])) {$tab = $_GET['tab'];}
               
                ?>    


            <?php if ($nivelMenu>=3) { ?>
                <li class="nav-item mr-1 ">
                    <a class="nav-link1 nav-link <?php if ($tab=="posts") {echo " active ";} ?>" 
                        href="?tab=posts" 
                        role="tab"                        
                        >Posts</a>
                </li>
            <?php } if ($nivelMenu>=3) { ?>
                <li class="nav-item mr-1 ">
                    <a class="nav-link1 nav-link <?php if ($tab=="receitas") {echo " active ";} ?>" 
                        href="?tab=receitas" 
                        role="tab"                        
                        >Receitas</a>
                </li>
            <?php } if ($nivelMenu>=3) { ?>
                <li class="nav-item mr-1 ">
                    <a class="nav-link1 nav-link <?php if ($tab=="eventos") {echo " active ";} ?>" 
                        href="?tab=eventos" 
                        role="tab"                        
                        >Eventos</a>
                </li>
            <?php } if ($nivelMenu>=4) { ?>
                <li class="nav-item mr-1 ">
                    <a class="nav-link1 nav-link <?php if ($tab=="configuracao") {echo " active ";} ?>" 
                        href="?tab=configuracao" 
                        role="tab"                        
                        data-toggle="tooltip" data-placement="top" title="Configurações"                   
                        ><i class="bi bi-gear"></i></a>
                </li>
            <?php } ?>

                           
            </ul>


        </div>

    </div>

</div>

<?php
    $src="";

    if ($tab=="posts") {$src="blog/posts.php";}
    if ($tab=="receitas") {$src="blog/receitas.php";}
    if ($tab=="eventos") {$src="blog/eventos.php";}
    if ($tab=="configuracao") {
            $src="configuracao/";
            if (isset($_GET['stab'])) {
                $src = $src . "?stab=".$_GET['stab'];
            }

            
    }
    
if ($src!=="") {
    //echo URLROOT ."/paginas/". $src;
?>
    <div class="diviFrame">
        <iframe class="iFrame container-fluid " id="iFrameTab" src="<?php echo URLROOT ?>/paginas/<?php echo $src ?>"></iframe>
    </div>
<?php
}
?>

</body>

</html>