<?php
include_once('../head.php');
include_once('../database/secaoPagina.php');

$parametros = json_decode($secoesPagina['parametros'], true);
?>

<div class="row form-group">
    <div class="col-sm-4" style="margin-top: 10px">
        <label class='control-label' for='inputNormal' style="margin-top: -20px;">Titulo</label>
        <input type="text" name="titulo" class="form-control" value="<?php echo $parametros["titulo"] ?>">
    </div>
    <div class="col-sm-4" style="margin-top: 10px">
        <label class='control-label' for='inputNormal' style="margin-top: -20px;">Sub-Titulo</label>
        <input type="text" name="subTitulo" class="form-control" value="<?php echo $parametros["subTitulo"] ?>">
    </div>
    <div class="col-sm-4" style="margin-top: 10px">
        <label class='control-label' for='inputNormal' style="margin-top: -20px;">Texto Botão</label>
        <input type="text" name="textoBotao" class="form-control" value="<?php echo $parametros["textoBotao"] ?>">
    </div>
</div>
<div class="row form-group" style="margin-top: 50px;">
    <div class="col-sm-4" style="margin-top: -20px">
            <label class='control-label' for='inputNormal' style="margin-top: -20px;">Imagem</label>
            <label class="picture" for="img" tabIndex="0">
                <img src="<?php echo URLROOT ?>/img/<?php echo $parametros["img"] ?>" height="80%" width="80%" alt="">
            </label>
            <input type="file" name="img" id="img">
        </div>
<!--     <div class="col-sm-4" style="margin-top: 10px">
        <label class='control-label' for='inputNormal' style="margin-top: -20px;">Nome Imagem</label>
        <input type="text" name="nomeImg" class="form-control" value="<?php echo $parametros["nomeImg"] ?>">
    </div> -->
    
</div>

<script>
    //Carregar a imagem na tela
    const inputFile = document.querySelector("#img");
    const pictureImage = document.querySelector(".picture__image");
    const pictureImageTxt = "Carregar Imagem";
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