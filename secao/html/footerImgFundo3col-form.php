<?php
include_once('../head.php');
include_once('../database/secaoPagina.php');

$parametros = json_decode($secoesPagina['parametros'], true);

?>

<div class="row form-group">
    <div class="col-sm-4" style="margin-top: -10px">
        <label class='control-label' for='inputNormal' style="margin-top: -20px;">Imagem</label>
        <label class="picture" for="img" tabIndex="0">
            <img src="<?php echo URLROOT ?>/img/<?php echo $parametros["img"] ?>" height="80%" width="80%" alt="">
        </label>
        <input type="file" name="img" id="img">
    </div>

    <div class="col-sm-6">
        <label class='control-label' for='inputNormal' style="margin-top: -20px;">Titulo</label>
        <input type="text" name="titulo" class="form-control" value="<?php echo $parametros["titulo"] ?>">
    </div>
</div>
<hr>
<div class="row form-group mt-2">
    <div class="col-sm-3">
        <label class='control-label' for='inputNormal' style="margin-top: -5px;">tituloLinks</label>
        <input type="text" name="tituloLinks" class="form-control" value="<?php echo $parametros["tituloLinks"] ?>">
    </div>
    <div class="col-sm-3">
        <label class='control-label' for='inputNormal' style="margin-top: -5px;">nome link 1</label>
        <input type="text" name="nome1" class="form-control" value="<?php echo $parametros["nome1"] ?>">
        <label class='control-label' for='inputNormal' style="margin-top: -1px;">lik 1</label>
        <input type="text" name="href1" class="form-control" value="<?php echo $parametros["href1"] ?>">
    </div>
    <div class="col-sm-3">
        <label class='control-label' for='inputNormal' style="margin-top: -5px;">nome lik 2</label>
        <input type="text" name="nome2" class="form-control" value="<?php echo $parametros["nome2"] ?>">
        <label class='control-label' for='inputNormal' style="margin-top: -1px;">lik 2</label>
        <input type="text" name="href2" class="form-control" value="<?php echo $parametros["href2"] ?>">
    </div>
    <div class="col-sm-3">
        <label class='control-label' for='inputNormal' style="margin-top: -5px;">nome lik 3</label>
        <input type="text" name="nome3" class="form-control" value="<?php echo $parametros["nome3"] ?>">
        <label class='control-label' for='inputNormal' style="margin-top: -1px;">lik 3</label>
        <input type="text" name="href3" class="form-control" value="<?php echo $parametros["href3"] ?>">
    </div>
</div>
<hr>
<div class="row form-group" style="margin-top: 30px;">
    <div class="col-sm-3">
        <label class='control-label' for='inputNormal' style="margin-top: -5px;">tituloContato</label>
        <input type="text" name="tituloContato" class="form-control" value="<?php echo $parametros["tituloContato"] ?>">
    </div>
    <div class="col-sm-3">
        <label class='control-label' for='inputNormal' style="margin-top: -5px;">textoEndereco</label>
        <input type="text" name="textoEndereco" class="form-control" value="<?php echo $parametros["textoEndereco"] ?>">
    </div>
    <div class="col-sm-3">
        <label class='control-label' for='inputNormal' style="margin-top: -5px;">textoWhatsapp</label>
        <input type="text" name="textoWhatsapp" class="form-control" value="<?php echo $parametros["textoWhatsapp"] ?>">
    </div>
    <div class="col-sm-3">
        <label class='control-label' for='inputNormal' style="margin-top: -5px;">textoEmail</label>
        <input type="text" name="textoEmail" class="form-control" value="<?php echo $parametros["textoEmail"] ?>">
    </div>
</div>
<div class="row form-group mt-2">
    <div class="col-sm-12">
        <label class='control-label' for='inputNormal' style="margin-top: -5px;">textoFinal</label>
        <input type="text" name="textoFinal" class="form-control" value="<?php echo $parametros["textoFinal"] ?>">
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
</script>