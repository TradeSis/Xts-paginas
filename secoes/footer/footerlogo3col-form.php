<?php
include_once('../head.php');
include_once('../database/secaoPagina.php');

$parametros = json_decode($secoesPagina['parametros'], true);

?>

<div class="row form-group">
    <div class="col-sm-4" style="margin-top: -20px">
        <label class='control-label' for='inputNormal' style="margin-top: -5px;">Logo</label>
        <label class="picture" for="logo" tabIndex="0">
            <img src="<?php echo URLROOT ?>/img/<?php echo $parametros["logo"] ?>" height="80%" width="80%" alt="">
        </label>
        <input type="file" name="logo" id="logo">
    </div>
</div>
<hr>
<div class="row form-group mt-2">
    <div class="col-sm-6">
        <label class='control-label' for='inputNormal' style="margin-top: -5px;">tituloContato</label>
        <input type="text" name="tituloContato" class="form-control" value="<?php echo $parametros["tituloContato"] ?>">
    </div>
    <div class="col-sm-3">
        <label class='control-label' for='inputNormal' style="margin-top: -5px;">textoWhatsapp</label>
        <input type="text" name="textoWhatsapp" class="form-control" value="<?php echo $parametros["textoWhatsapp"] ?>">
    </div>
    <div class="col-sm-3">
        <label class='control-label' for='inputNormal' style="margin-top: -5px;">textoEmail</label>
        <input type="text" name="textoEmail" class="form-control" value="<?php echo $parametros["textoEmail"] ?>">
    </div>
</div>
<hr>
<div class="row form-group mt-2">
    <div class="col-sm-4">
        <label class='control-label' for='inputNormal' style="margin-top: -5px;">tituloEndereco</label>
        <input type="text" name="tituloEndereco" class="form-control" value="<?php echo $parametros["tituloEndereco"] ?>">
    </div>
    <div class="col-sm-2">
        <label class='control-label' for='inputNormal' style="margin-top: -5px;">textoEndereco</label>
        <input type="text" name="textoEndereco" class="form-control" value="<?php echo $parametros["textoEndereco"] ?>">
    </div>
    <div class="col-sm-2">
        <label class='control-label' for='inputNormal' style="margin-top: -5px;">textoBairro</label>
        <input type="text" name="textoBairro" class="form-control" value="<?php echo $parametros["textoBairro"] ?>">
    </div>
    <div class="col-sm-2">
        <label class='control-label' for='inputNormal' style="margin-top: -5px;">textoCep</label>
        <input type="text" name="textoCep" class="form-control" value="<?php echo $parametros["textoCep"] ?>">
    </div>
    <div class="col-sm-2">
        <label class='control-label' for='inputNormal' style="margin-top: -5px;">textoCidade</label>
        <input type="text" name="textoCidade" class="form-control" value="<?php echo $parametros["textoCidade"] ?>">
    </div>
</div>
<div class="row form-group mt-2">
    <div class="col-sm-4">
        <label class='control-label' for='inputNormal' style="margin-top: -5px;">textoRedesSociais</label>
        <input type="text" name="textoRedesSociais" class="form-control" value="<?php echo $parametros["textoRedesSociais"] ?>">
    </div>

</div>

<script>
    //Carregar a imagem na tela
    const inputFile = document.querySelector("#logo");
    const pictureImage = document.querySelector(".picture__image");
    const pictureImageTxt = "Carregar Logo";
    pictureImage.innerHTML = pictureImageTxt;

    inputFile.addEventListener("change", function(e) {
        const inputTarget = e.target;
        const file = inputTarget.files[0];

        if (file) {
            const reader = new FileReader();

            reader.addEventListener("load", function(e) {
                const readerTarget = e.target;

                const img = document.createElement("img");
                img.src = readerTarget.result;
                img.classList.add("picture__img");

                pictureImage.innerHTML = "";
                pictureImage.appendChild(img);
            });

            reader.readAsDataURL(file);
        } else {
            pictureImage.innerHTML = pictureImageTxt;
        }
    });
</script>