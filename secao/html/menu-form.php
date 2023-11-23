<?php
$parametros = json_decode($secoesPagina['parametros'], true);
?>

<div class="row">
    <div class="col-sm-2">
        <label class='form-label ts-label'>menu1</label>
        <input type="text" name="menu1" class="form-control ts-input" value="<?php echo $parametros["menu1"] ?? null ?>">
    </div>
    <div class="col-sm-2">
        <label class='form-label ts-label'>menu2</label>
        <input type="text" name="menu2" class="form-control ts-input" value="<?php echo $parametros["menu2"] ?? null ?>">
    </div>
    <div class="col-sm-2">
        <label class='form-label ts-label'>menu3</label>
        <input type="text" name="menu3" class="form-control ts-input" value="<?php echo $parametros["menu3"] ?? null ?>">
    </div>
    <div class="col-sm-2">
        <label class='form-label ts-label'>menu4</label>
        <input type="text" name="menu4" class="form-control ts-input" value="<?php echo $parametros["menu4"] ?? null ?>">
    </div>
    <div class="col-sm-2">
        <label class='form-label ts-label'>textoBotao</label>
        <input type="text" name="textoBotao" class="form-control ts-input" value="<?php echo $parametros["textoBotao"] ?? null ?>">
    </div>
</div>
<hr>
<div class="row">
    <div class="col-sm-2">
        <label class='form-label ts-label'>menu1 href</label>
        <input type="text" name="menu1Href" class="form-control ts-input" value="<?php echo $parametros["menu1Href"] ?? null ?>">
    </div>
    <div class="col-sm-2">
        <label class='form-label ts-label'>menu2 href</label>
        <input type="text" name="menu2Href" class="form-control ts-input" value="<?php echo $parametros["menu2Href"] ?? null ?>">
    </div>
    <div class="col-sm-2">
        <label class='form-label ts-label'>menu3 href</label>
        <input type="text" name="menu3Href" class="form-control ts-input" value="<?php echo $parametros["menu3Href"] ?? null ?>">
    </div>
    <div class="col-sm-2">
        <label class='form-label ts-label'>menu4 href</label>
        <input type="text" name="menu4Href" class="form-control ts-input" value="<?php echo $parametros["menu4Href"] ?? null ?>">
    </div>
    <div class="col-sm-2">
        <label class='form-label ts-label'>textoBotao href</label>
        <input type="text" name="textoBotaoHref" class="form-control ts-input" value="<?php echo $parametros["textoBotaoHref"] ?? null ?>">
    </div>
</div>
<hr>
<div class="row">
    <div class="col-sm-4">
        <label class='form-label ts-label'>Imagem</label>
        <label class="picture" for="logo" >
            <img src="<?php echo $parametros["logo"] ?>">
        </label>
        <input type="file" name="logo" id="logo">
        <input type="hidden" name="img" value="<?php echo $parametros["logo"] ?? null ?>">
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