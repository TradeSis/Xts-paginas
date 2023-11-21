<?php
$parametros = json_decode($secoesPagina['parametros'], true);
?>

<div class="row">
    <div class="col-sm-4">
        <label class='form-label ts-label'>Titulo</label>
        <input type="text" name="titulo" class="form-control ts-input" value="<?php echo $parametros["titulo"] ?? null ?>">
    </div>
    <div class="col-sm-4">
        <label class='form-label ts-label'>Sub-Titulo</label>
        <input type="text" name="subTitulo" class="form-control ts-input" value="<?php echo $parametros["subTitulo"] ?? null ?>">
    </div>
    <div class="col-sm-4">
        <label class='form-label ts-label'>Texto Botão</label>
        <input type="text" name="textoBotao" class="form-control ts-input" value="<?php echo $parametros["textoBotao"] ?? null ?>">
    </div>
</div>
<div class="row">
    <div class="col-sm-4">
        <label class='form-label ts-label'>Imagem</label>
        <label class="picture" for="principalIMG" >
            <img src="<?php echo $parametros["principalIMG"] ?? null ?>">
        </label>
        <input type="file" name="principalIMG" id="principalIMG">
        <input type="hidden" name="img" value="<?php echo $parametros["principalIMG"] ?? null ?>">
    </div>
    <div class="col-sm-4">
        <label class='form-label ts-label'>Background</label>
        <label class="picture" for="principalBackground" >
            <img src="<?php echo $parametros["principalBackground"] ?>">
        </label>
        <input type="file" name="principalBackground" id="principalBackground">
        <input type="hidden" name="img2" value="<?php echo $parametros["principalBackground"] ?? null ?>">
    </div>
</div>


<script>
    //Carregar a imagem na tela
    const inputFile = document.querySelector("#principalIMG");
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

                const principalIMG = document.createElement("img");
                principalIMG.src = readerTarget.result;
                principalIMG.classList.add("picture__img");

                pictureImage.innerHTML = "";
                pictureImage.appendChild(img);
            });

            reader.readAsDataURL(file);
        } else {
            pictureImage.innerHTML = pictureImageTxt;
        }
    });

    //Carregar a imagem na tela
    const inputFile = document.querySelector("#principalBackground");
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

                const principalBackground = document.createElement("img");
                principalBackground.src = readerTarget.result;
                principalBackground.classList.add("picture__img");

                pictureImage.innerHTML = "";
                pictureImage.appendChild(img);
            });

            reader.readAsDataURL(file);
        } else {
            pictureImage.innerHTML = pictureImageTxt;
        }
    });
</script>