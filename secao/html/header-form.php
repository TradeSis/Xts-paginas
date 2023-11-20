<?php
include_once('../head.php');
include_once('../database/secaoPagina.php');

$parametros = json_decode($secoesPagina['parametros'], true);
?>

<div class="col-sm-4">
    <label class='form-label ts-label'>Imagem</label>
    <label class="picture" for="logo">
        <img src="<?php echo $parametros["logo"] ?>">
    </label>
    <input type="file" name="logo" id="logo">
    <input type="hidden" name="img" value="<?php echo $parametros["logo"] ?? null ?>">
</div>

<script>
    //Carregar a imagem na tela
    const inputFile = document.querySelector("#logo");
    const pictureImage = document.querySelector(".picture__image");
    const pictureImageTxt = "Carregar Logo";
    pictureImage.innerHTML = pictureImageTxt;

    inputFile.addEventListener("change", function (e) {
        const inputTarget = e.target;
        const file = inputTarget.files[0];

        if (file) {
            const reader = new FileReader();

            reader.addEventListener("load", function (e) {
                const readerTarget = e.target;

                const logo = document.createElement("img");
                logo.src = readerTarget.result;
                logo.classList.add("picture__img");

                pictureImage.innerHTML = "";
                pictureImage.appendChild(img);
            });

            reader.readAsDataURL(file);
        } else {
            pictureImage.innerHTML = pictureImageTxt;
        }
    });
</script>