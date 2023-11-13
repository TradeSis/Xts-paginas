<?php
$parametros = json_decode($secoesPagina['parametros'], true);
?>

<div class="row">
    <div class="col-sm-4">
        <label class='form-label ts-label'>Imagem</label>
        <label class="picture" for="logo" >
            <img src="<?php echo $parametros["logo"] ?>">
        </label>
        <input type="file" name="logo" id="logo">
    </div>
</div>
<hr>
<div class="row">
    <div class="col-sm-6">
        <label class='form-label ts-label'>tituloContato</label>
        <input type="text" name="tituloContato" class="form-control ts-input" value="<?php echo $parametros["tituloContato"] ?? null ?>">
    </div>
    <div class="col-sm-3">
        <label class='form-label ts-label'>textoWhatsapp</label>
        <input type="text" name="textoWhatsapp" class="form-control ts-input" value="<?php echo $parametros["textoWhatsapp"] ?? null ?>">
    </div>
    <div class="col-sm-3">
        <label class='form-label ts-label'>textoEmail</label>
        <input type="text" name="textoEmail" class="form-control ts-input" value="<?php echo $parametros["textoEmail"] ?? null ?>">
    </div>
</div>
<hr>
<div class="row">
    <div class="col-sm-4">
        <label class='form-label ts-label'>tituloEndereco</label>
        <input type="text" name="tituloEndereco" class="form-control ts-input" value="<?php echo $parametros["tituloEndereco"] ?? null ?>">
    </div>
    <div class="col-sm-2">
        <label class='form-label ts-label'>textoEndereco</label>
        <input type="text" name="textoEndereco" class="form-control ts-input" value="<?php echo $parametros["textoEndereco"] ?? null ?>">
    </div>
    <div class="col-sm-2">
        <label class='form-label ts-label'>textoBairro</label>
        <input type="text" name="textoBairro" class="form-control ts-input" value="<?php echo $parametros["textoBairro"] ?? null ?>">
    </div>
    <div class="col-sm-2">
        <label class='form-label ts-label'>textoCep</label>
        <input type="text" name="textoCep" class="form-control ts-input" value="<?php echo $parametros["textoCep"] ?? null ?>">
    </div>
    <div class="col-sm-2">
        <label class='form-label ts-label'>textoCidade</label>
        <input type="text" name="textoCidade" class="form-control ts-input" value="<?php echo $parametros["textoCidade"] ?? null ?>">
    </div>
</div>
<div class="row">
    <div class="col-sm-4">
        <label class='form-label ts-label'>textoRedesSociais</label>
        <input type="text" name="textoRedesSociais" class="form-control ts-input" value="<?php echo $parametros["textoRedesSociais"] ?? null ?>">
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