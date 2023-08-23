<?php
include_once('../head.php');
include_once('../database/secaoPagina.php');

$parametros = json_decode($secoesPagina['parametros'], true);
?>
<style>
    .picture {
        border-radius: 0;
    }

    .picture img {
        width: 100%;
        height: 100%;
    }
</style>

<div class="container" style="margin-top: 10px">


    <div class="row form-group" style="margin-bottom: 60px">
        <div class="col-sm-12">
            <label class='control-label' for='inputNormal' style="margin-top: -10px;">Titulo</label>
            <input type="text" name="titulo" class="form-control" value="<?php echo $parametros["titulo"] ?>">
        </div>
    </div>

    <div class="row form-group">
        <div class="col-sm-4" style="margin-top: -20px">
            <label class='control-label' for='inputNormal' style="margin-top: -20px;">Imagem1</label>
            <label class="picture" for="img1" tabIndex="0">
                <img src="<?php echo URLROOT ?>/img/<?php echo $parametros["img1"] ?>" alt="">
            </label>
            <input type="file" name="img1" id="img1">
            <label class='control-label' for='inputNormal' style="margin-top: -20px;">tituloCard1</label>
            <input type="text" name="tituloCard1" class="form-control" value="<?php echo $parametros["tituloCard1"] ?>">
        </div>

        <div class="col-sm-4" style="margin-top: -20px">
            <label class='control-label' for='inputNormal' style="margin-top: -20px;">Imagem2</label>
            <label class="picture" for="img2" tabIndex="0">
                <img src="<?php echo URLROOT ?>/img/<?php echo $parametros["img2"] ?>" alt="">
            </label>
            <input type="file" name="img2" id="img2">
            <label class='control-label' for='inputNormal' style="margin-top: -20px;">tituloCard2</label>
            <input type="text" name="tituloCard2" class="form-control" value="<?php echo $parametros["tituloCard2"] ?>">
        </div>

        <div class="col-sm-4" style="margin-top: -20px">
            <label class='control-label' for='inputNormal' style="margin-top: -20px;">Imagem3</label>
            <label class="picture" for="img3" tabIndex="0">
                <img src="<?php echo URLROOT ?>/img/<?php echo $parametros["img3"] ?>" alt="">
            </label>
            <input type="file" name="img3" id="img3">
            <label class='control-label' for='inputNormal' style="margin-top: -20px;">tituloCard3</label>
            <input type="text" name="tituloCard3" class="form-control" value="<?php echo $parametros["tituloCard3"] ?>">
        </div>

        <div class="col-sm-4" style="margin-top: 40px">
            <label class='control-label' for='inputNormal' style="margin-top: -20px;">Imagem4</label>
            <label class="picture" for="img4" tabIndex="0">
                <img src="<?php echo URLROOT ?>/img/<?php echo $parametros["img4"] ?>" alt="">
            </label>
            <input type="file" name="img4" id="img4">
            <label class='control-label' for='inputNormal' style="margin-top: -20px;">tituloCard4</label>
            <input type="text" name="tituloCard4" class="form-control" value="<?php echo $parametros["tituloCard4"] ?>">
        </div>

        <div class="col-sm-4" style="margin-top: 40px">
            <label class='control-label' for='inputNormal' style="margin-top: -20px;">Imagem5</label>
            <label class="picture" for="img5" tabIndex="0">
                <img src="<?php echo URLROOT ?>/img/<?php echo $parametros["img5"] ?>" alt="">
            </label>
            <input type="file" name="img5" id="img5">
            <label class='control-label' for='inputNormal' style="margin-top: -20px;">tituloCard5</label>
            <input type="text" name="tituloCard5" class="form-control" value="<?php echo $parametros["tituloCard5"] ?>">
        </div>
    </div>

</div>


<script>
    //Carregar a imagem 1
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
    //Carregar a imagem 2
    const inputFile2 = document.querySelector("#img2");
    const pictureImage2 = document.querySelector(".picture__image2");
    const pictureImageTxt2 = "Carregar Logo";
    pictureImage2.innerHTML = pictureImageTxt2;

    inputFile2.addEventListener("change", function(e) {
        const inputTarget2 = e.target;
        const file2 = inputTarget2.files[0];

        if (file) {
            const reader2 = new FileReader();

            reader2.addEventListener("load", function(e) {
                const readerTarget2 = e.target;

                const img2 = document.createElement("img");
                img2.src = readerTarget.result;
                img2.classList.add("picture__img");

                pictureImage2.innerHTML = "";
                pictureImage2.appendChild(img);
            });

            reader2.readAsDataURL(file);
        } else {
            pictureImage2.innerHTML = pictureImageTxt2;
        }
    });

    //Carregar a imagem 3
    const inputFile3 = document.querySelector("#img3");
    const pictureImage3 = document.querySelector(".picture__image3");
    const pictureImageTxt3 = "Carregar Logo";
    pictureImage3.innerHTML = pictureImageTxt3;

    inputFile3.addEventListener("change", function(e) {
        const inputTarget3 = e.target;
        const file3 = inputTarget3.files[0];

        if (file) {
            const reader3 = new FileReader();

            reader3.addEventListener("load", function(e) {
                const readerTarget3 = e.target;

                const img3 = document.createElement("img");
                img3.src = readerTarget.result;
                img3.classList.add("picture__img");

                pictureImage3.innerHTML = "";
                pictureImage3.appendChild(img);
            });

            reader3.readAsDataURL(file);
        } else {
            pictureImage3.innerHTML = pictureImageTxt3;
        }
    });


    //Carregar a imagem 4
    const inputFile4 = document.querySelector("#img4");
    const pictureImage4 = document.querySelector(".picture__image4");
    const pictureImageTxt4 = "Carregar Logo";
    pictureImage4.innerHTML = pictureImageTxt4;

    inputFile4.addEventListener("change", function(e) {
        const inputTarget4 = e.target;
        const file4 = inputTarget4.files[0];

        if (file) {
            const reader4 = new FileReader();

            reader4.addEventListener("load", function(e) {
                const readerTarget4 = e.target;

                const img4 = document.createElement("img");
                img4.src = readerTarget.result;
                img4.classList.add("picture__img");

                pictureImage4.innerHTML = "";
                pictureImage4.appendChild(img);
            });

            reader4.readAsDataURL(file);
        } else {
            pictureImage4.innerHTML = pictureImageTxt4;
        }
    });


    //Carregar a imagem 5
    const inputFile5 = document.querySelector("#img5");
    const pictureImage5 = document.querySelector(".picture__image5");
    const pictureImageTxt5 = "Carregar Logo";
    pictureImage5.innerHTML = pictureImageTxt5;

    inputFile5.addEventListener("change", function(e) {
        const inputTarget5 = e.target;
        const file5 = inputTarget5.files[0];

        if (file) {
            const reader5 = new FileReader();

            reader5.addEventListener("load", function(e) {
                const readerTarget5 = e.target;

                const img5 = document.createElement("img");
                img5.src = readerTarget.result;
                img5.classList.add("picture__img");

                pictureImage5.innerHTML = "";
                pictureImage5.appendChild(img);
            });

            reader5.readAsDataURL(file);
        } else {
            pictureImage5.innerHTML = pictureImageTxt5;
        }
    });
</script>