<?php
include_once('../head.php');
include_once('../database/secaoPagina.php');

$parametros = json_decode($secoesPagina['parametros'], true);

?>

<div class="row form-group">
  <div class="col-sm-8">
    <label class='control-label' for='inputNormal' style="margin-top: -20px;">titulo</label>
    <input type="text" name="titulo" class="form-control" value="<?php echo $parametros["titulo"] ?>">
  </div>
  
  <div class="col-sm-4" style="margin-top: -10x">
    <label class='control-label' for='inputNormal' style="margin-top: -20px;">Imagem</label>
    <label class="picture" for="img" tabIndex="0">
      <img src="<?php echo URLROOT ?>/img/<?php echo $parametros["img"] ?>" height="80%" width="80%" alt="">
    </label>
    <input type="file" name="img" id="img">
  </div>
</div>

<div class="row form-group  mt-2">
  <div class="col-sm-3">
    <label class='control-label' for='inputNormal' style="margin-top: -20px;">Descrição</label>
    <textarea name="descricao" id="" cols="140" rows="15"><?php echo $parametros["descricao"] ?></textarea>
  </div>
</div>

<script>
  //Carregar a imagem na tela
  const inputFile = document.querySelector("#img");
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