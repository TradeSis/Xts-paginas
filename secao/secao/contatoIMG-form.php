<?php
$parametros = json_decode($secoesPagina['parametros'], true);
?>

<div class="row">
    <div class="col-sm-4">
        <label class='form-label ts-label'>Imagem</label>
        <label class="picture" for="contatoIMG" >
            <img src="<?php echo $parametros["contatoIMG"] ?>">
        </label>
        <input type="file" name="contatoIMG" id="contatoIMG">
        <input type="hidden" name="img" value="<?php echo $parametros["contatoIMG"] ?? null ?>">
    </div>
    <div class="col-sm-4">
        <label class='form-label ts-label'>Titulo</label>
        <input type="text" name="titulo" class="form-control ts-input"
            value="<?php echo $parametros["titulo"] ?? null ?>">
    </div>
    <div class="col-sm-4">
        <label class='form-label ts-label'>Botão</label>
        <input type="text" name="textoBotao" class="form-control ts-input"
            value="<?php echo $parametros["textoBotao"] ?? null ?>">
    </div>
</div>
<hr>


<script>
    //Carregar a imagem na tela
    const inputFile = document.querySelector("#contatoIMG");
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

                const contatoIMG = document.createElement("img");
                contatoIMG.src = readerTarget.result;
                contatoIMG.classList.add("picture__img");

                pictureImage.innerHTML = "";
                pictureImage.appendChild(img);
            });

            reader.readAsDataURL(file);
        } else {
            pictureImage.innerHTML = pictureImageTxt;
        }
    });
</script>