<?php
$parametro = json_decode($secaoPagina["parametros"], true);
?>

<div class="ts-background" style="background-image: url('<?php echo $parametro["backgroundIMG"] ?? null ?>');">
    <div class="container">
        <div class="row mt-2">
            <div class="col">
                <img class="ts-footerIMG" src="<?php echo $parametro["logo"] ?? 'http://localhost/img/tradesis.png' ?>" role="img">
                <div class="ts-socialParametro">
                    <div><?php echo $parametro["textoRedesSociais"] ?? 'Default' ?></div>
                    <a href="<?php echo $perfil["twitter"] ?>" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="<?php echo $perfil["facebook"] ?>" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="<?php echo $perfil["instagram"] ?>" class="instagram"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
            <div class="col ts-inputParametro">
                <p class="ts-tituloParametro"><?php echo $parametro["tituloContato"] ?? 'Default' ?></p>
                <p><?php echo $parametro["textoWhatsapp"] ?? 'Default' ?></p>
                &nbsp;<?php echo $perfil["telefone"] ?>
                <br>
                <p><?php echo $parametro["textoEmail"] ?? 'Default' ?></p>
                &nbsp;<?php echo $perfil["email"] ?>
                <br>
            </div>
            <div class="col">
                <p class="ts-tituloParametro"><?php echo $parametro["tituloEndereco"] ?? 'Default' ?></p>
                <div class="row ts-inputParametro">
                    <div class="col">
                        <p><?php echo $parametro["textoEndereco"] ?? 'Default' ?></p>
                        <?php echo $perfil["endereco"] ?>&nbsp;-&nbsp;<?php echo $perfil["endNumero"] ?><br> 
                        <p><?php echo $parametro["textoBairro"] ?? 'Default' ?></p>
                        <?php echo $perfil["bairro"] ?>
                        <br>
                    </div>
                    <div class="col">
                        <p><?php echo $parametro["textoCep"] ?? 'Default' ?></p>
                        <?php echo $perfil["cep"] ?><br>
                        <p><?php echo $parametro["textoCidade"] ?? 'Default' ?></p>
                        <?php echo $perfil["municipio"] ?>&nbsp;-&nbsp;<?php echo $perfil["UF"] ?>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>