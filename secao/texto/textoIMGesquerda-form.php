<?php
$parametros = json_decode($secoesPagina['parametros'], true);
?>

<div class="row">
    <div class="col-sm-4">
        <label class='form-label ts-label'>Imagem</label>
        <label class="picture" for="textoIMG" >
            <img src="<?php echo $parametros["textoIMG"] ?>">
        </label>
        <input type="file" name="textoIMG" id="textoIMG">
        <input type="hidden" name="img" value="<?php echo $parametros["textoIMG"] ?? null ?>">
    </div>
    <div class="col-sm-4">
        <label class='form-label ts-label'>Titulo</label>
        <input type="text" name="titulo" class="form-control ts-input" value="<?php echo $parametros["titulo"] ?? null ?>">
    </div>
    <div class="col-sm-4">
        <label class='form-label ts-label'>Descrição</label>
        <input type="text" name="descricao" class="form-control ts-input" value="<?php echo $parametros["descricao"] ?? null ?>">
    </div>
</div>

<script>
    //Carregar a imagem na tela
    const inputFile = document.querySelector("#textoIMG");
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

                const textoIMG = document.createElement("img");
                textoIMG.src = readerTarget.result;
                textoIMG.classList.add("picture__img");

                pictureImage.innerHTML = "";
                pictureImage.appendChild(img);
            });

            reader.readAsDataURL(file);
        } else {
            pictureImage.innerHTML = pictureImageTxt;
        }
    });
</script>