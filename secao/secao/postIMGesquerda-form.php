<?php
$parametros = json_decode($secoesPagina['parametros'], true);
?>

<div class="row">
    <div class="col-sm-4">
        <label class='form-label ts-label'>Imagem</label>
        <label class="picture__image" for="postIMG" tabIndex="0">
            <img src="<?php echo $parametros["postIMG"] ?? null ?>">
        </label>
        <input type="file" name="postIMG" id="postIMG">
    </div>
    <div class="col-sm-4">
        <label class='form-label ts-label'>Titulo</label>
        <input type="text" name="postTitulo" class="form-control ts-input" value="<?php echo $parametros["postTitulo"] ?? null ?>">
    </div>
    <div class="col-sm-4">
        <label class='form-label ts-label'>Descrição</label>
        <input type="text" name="postDescricao" class="form-control ts-input" value="<?php echo $parametros["postDescricao"] ?? null ?>">
    </div>
</div>

<script>
    //Carregar a imagem na tela
     const inputFile = document.querySelector("#postIMG");
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

                const img = document.createElement("postIMG");
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