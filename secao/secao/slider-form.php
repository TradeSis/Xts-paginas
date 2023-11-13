<?php
include_once('../head.php');
include_once('../database/secaoPagina.php');

$parametros = json_decode($secoesPagina['parametros'], true);

?>

<div class="row">
    <div class="col-sm-4">
        <label class='form-label ts-label'>Imagem padrão</label>
        <label class="picture" tabIndex="0">
            <span class="picture__image" id="inserir"></span>
        </label>
        <input type="file" name="logo" class="fotoInput" hidden>
    </div>
</div>
<hr>
<script>
    //Carregar a FOTO na tela
    const fotoInputs = document.querySelectorAll(".fotoInput");

    fotoInputs.forEach((input, index) => {
        const pictureImage = document.querySelectorAll(".picture__image")[index];
        const pictureImageTxt = "Carregar imagem";
        pictureImage.innerHTML = pictureImageTxt;

        input.addEventListener("change", function (e) {
            const inputTarget = e.target;
            const file = inputTarget.files[0];

            if (file) {
                const reader = new FileReader();

                reader.addEventListener("load", function (e) {
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
    });
</script>