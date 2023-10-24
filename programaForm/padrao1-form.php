<?php
include_once('../head.php');
include_once('../database/temas.php');
$tema = buscaTemas($_GET['idTema']);
//echo json_encode($tema);
$perfil = json_decode($tema['perfil'], true);
//echo json_encode($perfil);
?>

<div class="contaner-fluid">
    <div class="container-fluid p-0">
        <div class="col">
            <span class="tituloEditor">Menu</span>
        </div>
        <div class="quill-textarea"><?php echo $tema['menu'] ?></div>
        <textarea style="display: none" id="detail" name="menu"><?php echo $tema['menu'] ?></textarea>
    </div>
    <br>
    <h5>Perfil</h5>
    <hr>
    <br>
    <div class="row mt-3">
        <div class="col-sm-4">
            <label class='form-label ts-label' style="margin-top: -20px;">Foto Perfil</label>
            <label class="picture" for="imgPerfil" tabIndex="0">
                <img src="<?php echo URLROOT ?>/img/<?php echo $perfil["imgPerfil"] ?>" height="80%" width="80%" alt="">
            </label>
            <input type="file" name="imgPerfil" id="imgPerfil">
        </div>
        <div class="col-sm-8">
            <label class='form-label ts-label'>Nome</label>
            <input type="text" name="nome" class="form-control ts-input" value="<?php echo $perfil["nome"] ?>">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <label class='form-label ts-label'>Endereço</label>
            <input type="text" name="endereco" class="form-control ts-input" value="<?php echo $perfil["endereco"] ?>">
        </div>
        <div class="col-sm-3">
            <label class='form-label ts-label'>Numero</label>
            <input type="text" name="numero" class="form-control ts-input" value="<?php echo $perfil["numero"] ?>">
        </div>

        <div class="col-sm-3">
            <label class='form-label ts-label'>Bairro</label>
            <input type="text" name="bairro" class="form-control ts-input" value="<?php echo $perfil["bairro"] ?>">
        </div>
        <div class="col-sm-3">
            <label class='form-label ts-label'>CEP</label>
            <input type="text" name="cep" class="form-control ts-input" value="<?php echo $perfil["cep"] ?>">
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-sm-3">
            <label class='form-label ts-label'>Cidade</label>
            <input type="text" name="cidade" class="form-control ts-input" value="<?php echo $perfil["cidade"] ?>">
        </div>
        <div class="col-sm-3">
            <label class='form-label ts-label'>Estado</label>
            <input type="text" name="estado" class="form-control ts-input" value="<?php echo $perfil["estado"] ?>">
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-sm-6">
            <label class='form-label ts-label'>Email</label>
            <input type="text" name="email" class="form-control ts-input" value="<?php echo $perfil["email"] ?>">
        </div>
        <div class="col-sm-6">
            <label class='form-label ts-label'>Whatsapp</label>
            <input type="text" name="whatsapp" class="form-control ts-input" value="<?php echo $perfil["whatsapp"] ?>">
        </div>
    </div>
    <div class="row mt-3 mb-4">
        <div class="col-sm-4">
            <label class='form-label ts-label'>twitter</label>
            <input type="text" name="twitter" class="form-control ts-input" value="<?php echo $perfil["twitter"] ?>">
        </div>
        <div class="col-sm-4">
            <label class='form-label ts-label'>facebook</label>
            <input type="text" name="facebook" class="form-control ts-input" value="<?php echo $perfil["facebook"] ?>">
        </div>
        <div class="col-sm-4">
            <label class='form-label ts-label'>instagram</label>
            <input type="text" name="instagram" class="form-control ts-input" value="<?php echo $perfil["instagram"] ?>">
        </div>
    </div>
    
    </div>



<script src="<?php echo URLROOT ?>/sistema/js/quilljs.js"></script>
<script>
    //Carregar a imagem na tela
    const inputFile = document.querySelector("#imgPerfil");
    const pictureImage = document.querySelector(".picture__image");
    const pictureImageTxt = "Carregar Imagem";
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