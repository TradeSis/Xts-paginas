<?php
include_once('../head.php');
include_once('../database/secaoPagina.php');
$parametros = json_decode($secoesPagina['parametros'], true);


?>

<div class="container" style="margin-top: 10px">
    <div class="row form-group">
        <div class="col-sm-4" style="margin-top: -20px">
            <label class='control-label' for='inputNormal' style="margin-top: -45px;">Logo</label>
            <label class="picture" for="logo" tabIndex="0">
                <img src="<?php echo URLROOT ?>/img/<?php echo $parametros["logo"] ?>" height="80%" width="80%" alt="">
            </label>
            <input type="file" name="logo" id="logo">
        </div>
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