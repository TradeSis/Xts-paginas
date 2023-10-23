<?php
//Lucas 11102023 padrao novo
include_once('../header.php');
include_once('../database/receitas.php');
$idReceita = $_GET['idReceita'];
$receita = buscaReceitas($idReceita);
?>
<!doctype html>
<html lang="pt-BR">

<head>

    <?php include_once ROOT . "/vendor/head_css.php"; ?>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <BR> <!-- MENSAGENS/ALERTAS -->
        </div>
        <div class="row">
            <BR> <!-- BOTOES AUXILIARES -->
        </div>
        <div class="row"> <!-- LINHA SUPERIOR A TABLE -->
            <div class="col-3">
                <!-- TITULO -->
                <h2 class="ts-tituloPrincipal">Editar Receita</h2>
            </div>
            <div class="col-7">
                <!-- FILTROS -->
            </div>

            <div class="col-2 text-end">
                <a href="receitas.php" role="button" class="btn btn-primary"><i class="bi bi-arrow-left-square"></i></i>&#32;Voltar</a>
            </div>
        </div>

        <form class="mb-4" action="../database/receitas.php?operacao=alterar" method="post" enctype="multipart/form-data">

            <div class="row mt-3">
                <div class="col-sm-12">
                    <label class='form-label ts-label'>Receita*</label>
                    <input type="text" name="nomeReceita" class="form-control ts-input" value="<?php echo $receita['nomeReceita'] ?>">
                    <input type="hidden" class="form-control ts-input" name="idReceita" value="<?php echo $receita['idReceita'] ?>">
                </div>
            </div>

            <div class="container-fluid p-0 mt-3">
                <div class="col">
                    <span class="tituloEditor">Descrição</span>
                </div>
                <div class="quill-textarea"><?php echo $receita['conteudoReceita'] ?></div>
                <textarea style="display: none" id="detail" name="conteudoReceita"><?php echo $receita['conteudoReceita'] ?></textarea>
            </div>

            <div class="row mt-3">
                <div class="col-sm-6">
                    <label class='form-label ts-label'>Autor</label>
                    <input type="text" name="autorReceita" class="form-control ts-input" value="<?php echo $receita['autorReceita'] ?>">
                </div>
                <div class="col-sm-6">
                    <label class='form-label ts-label'>Imagem</label>
                    <label class="picture" for="foto" tabIndex="0">
                        <img src="<?php echo $receita["imgReceita"] ?>" width="100%" height="100%" alt="">
                    </label>
                    <input type="file" name="imgReceita" id="foto">
                </div>
            </div>

            <div class="text-end mt-4">
                <button type="submit" class="btn  btn-success"><i class="bi bi-sd-card-fill"></i>&#32;Salvar</button>
            </div>
        </form>
    </div>


    <!-- LOCAL PARA COLOCAR OS JS -->

    <?php include_once ROOT . "/vendor/footer_js.php"; ?>

    <script src="<?php echo URLROOT ?>/sistema/js/quilljs.js"></script>

    <script>
        //Carregar a FOTO na tela
        const inputFile = document.querySelector("#foto");
        const pictureImage = document.querySelector(".picture__image");
        const pictureImageTxt = "Carregar imagem";
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

    <!-- LOCAL PARA COLOCAR OS JS -FIM -->

</body>

</html>