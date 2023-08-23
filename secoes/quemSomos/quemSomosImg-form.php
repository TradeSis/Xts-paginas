<?php
include_once('../head.php');
include_once('../database/secaoPagina.php');

$parametros = json_decode($secoesPagina['parametros'], true);
?>

<div class="row">
    <div class="col-sm-4" style="margin-top: 20px">
        <label class='control-label' for='inputNormal' style="margin-top: -20px;">Titulo</label>
        <input type="text" name="titulo" class="form-control" value="<?php echo $parametros["titulo"] ?>">
    </div>

    <div class="col-sm-4" style="margin-top: 20px">
        <label class='control-label' for='inputNormal' style="margin-top: -20px;">Imagem</label>
        <label class="picture" for="img" tabIndex="0">
            <!-- <span class="picture__image"></span> -->
            <img src="<?php echo URLROOT ?>/img/<?php echo $parametros["img"] ?>" height="80%" width="80%" alt="" style=" border-radius: 50%">
        </label>
        <input type="file" name="img" id="img">
    </div>

    <div class="col-sm-4" style="margin-top: 20px">
        <label class='control-label' for='inputNormal' style="margin-top: -20px;">Imagem Fundo</label>
        <label class="picture" for="imgFundo" tabIndex="0">
            <!-- <span class="picture__image2"></span> -->
            <img src="<?php echo URLROOT ?>/img/<?php echo $parametros["imgFundo"] ?>" height="80%" width="80%" alt="" style=" border-radius: 50%">
        </label>
        <input type="file" name="imgFundo" id="imgFundo">
    </div>
</div>

<div class="row  mt-2">
    <div class="col-sm-3">
        <label class='control-label' for='inputNormal' style="margin-top: -20px;">Descrição</label>
        <textarea name="descricao" id="" cols="140" rows="15"><?php echo $parametros["descricao"] ?></textarea>
    </div>
</div>


<script>
    //Carregar a imagem na tela
    const inputFile = document.querySelector("#img");
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

    //Carregar a imagem na tela
    const inputFile2 = document.querySelector("#imgFundo");
    const pictureImage2 = document.querySelector(".picture__image2");
    const pictureImageTxt2 = "Carregar Logo 2";
    pictureImage2.innerHTML = pictureImageTxt2;

    inputFile2.addEventListener("change2", function(e) {
        const inputTarget2 = e.target;
        const file2 = inputTarget2.files[0];

        if (file2) {
            const reader2 = new FileReader();

            reader2.addEventListener("load", function(e) {
                const readerTarget2 = e.target;

                const img2 = document.createElement("img");
                img2.src = readerTarget2.result;
                img2.classList.add("picture__img2");

                pictureImage2.innerHTML = "";
                pictureImage2.appendChild(img);
            });

            reader2.readAsDataURL(file2);
        } else {
            pictureImage2.innerHTML = pictureImageTxt2;
        }
    });
</script>