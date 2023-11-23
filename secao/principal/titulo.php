<?php
$parametro = json_decode($secaoPagina['parametros'], true);

/*
{   "titulo":"Tradesis",
    "posicaoTitulo": "direita",
    "corTitulo" : ""
    "subTitulo":"Conhe&ccedil;a nossa empresa",
    "textoBotao":"Teste Gr&aacute;tis",
    "principalIMG":"http://localhost/img/tradesis.png",
    "principalBackground":"http://localhost/img/bg1.jpg"}

*/
$principalIMG = isset($parametro["principalIMG"]) && $parametro["principalIMG"] !== ""    ?  $parametro["principalIMG"]  : null; 
$principalBackground = isset($parametro["principalBackground"]) && $parametro["principalBackground"] !== ""    ?  $parametro["principalBackground"]  : null; 

$posicaoIMG = "";
if (isset($parametro["posicaoIMG"])) {
    $posicaoIMG = $parametro["posicaoIMG"];
}


?>

    <div  <?php if (isset($principalBackground)) { echo "class=\"ts-background mt-2 \" style=\"background-image: url('" . $principalBackground . "');\" "; } else { echo "class=\"container-fluid mt-2\" "; } ?> > 
        <div class="row mb-5 ts-textoCentro">
            <div class="col<?php if ($posicaoIMG == 'direita') { echo '-6'; }  ?> "
                <?php if ($posicaoIMG == 'direita') { echo 'order-1'; } else { echo 'order-2';} ?> " >
                <?php if (isset($parametro["titulo"])) { ?>
                    <h1 class="ts-titulo" <?php if (isset($parametro["corTitulo"])) { echo " style=\"color:" . $parametro["corTitulo"] . "\""; }  ?> >
                        <?php echo $parametro["titulo"]?></h1>
                <?php } ?>
                <?php if (isset($parametro["subTitulo"])) { ?>
                    <p class="ts-subTitulo"><?php echo $parametro["subTitulo"] ?></p>
                <?php } ?>
                <?php if (isset($parametro["textoBotao"])) { ?>
                    <a class="ts-botaoTitulo" href="/contato"><span><?php echo $parametro["textoBotao"] ?></span></a>
                <?php } ?>
                
            </div>
            <?php if (isset($principalIMG)) { ?>
                
                <div class="col-6 <?php if ($posicaoIMG == 'direita') { echo 'order-2'; } else { echo 'order-1';} ?> " >
                <div>
                        <img  class="ts-principalIMG" src="<?php echo $principalIMG ?>" ]
                        <?php if (isset($parametro["max-heightIMG"])) { echo " style=\"max-height:" . $parametro["max-heightIMG"] . "\""; }  ?>>
            </div>
                </div>
            
            <?php } ?>

        </div>
    </div>
