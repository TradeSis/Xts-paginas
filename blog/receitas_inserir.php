<?php
//Lucas 11102023 padrao novo
include_once('../header.php');
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
                <h2 class="ts-tituloPrincipal">Adicionar Receita</h2>
            </div>
            <div class="col-7">
                <!-- FILTROS -->
            </div>

            <div class="col-2 text-end">
                <a href="receitas.php" role="button" class="btn btn-primary"><i
                        class="bi bi-arrow-left-square"></i></i>&#32;Voltar</a>
            </div>
        </div>


        <form class="mb-4" action="../database/receitas.php?operacao=inserir" method="post" enctype="multipart/form-data">

            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label class='control-label' for='inputNormal'>Slug*</label>
                        <input type="text" name="slug" class="form-control" required autocomplete="off">
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="form-group">
                        <label class='control-label' for='inputNormal'>Receita*</label>
                        <input type="text" name="nomeReceita" class="form-control" required autocomplete="off">
                    </div>
                </div>
            </div>

            <div class="container-fluid p-0">
                <div class="col">
                    <span class="tituloEditor">Descrição</span>
                </div>
                <div class="quill-textarea"></div>
                <textarea style="display: none;" id="detail" name="conteudoReceita"></textarea>
            </div>


            <div class="row mt-3">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class='control-label' for='inputNormal'>Autor</label>
                        <input type="text" name="autorReceita" class="form-control" autocomplete="off">
                    </div>
                </div>
                <div class="col-sm-6" style="margin-top: 50px">
                    <div class="col-sm-6" style="margin-top: -20px">
                        <label class='control-label' for='inputNormal' style="margin-top: -50px;">Imagem</label>
                        <label class="picture" for="foto" tabIndex="0">
                            <span class="picture__image"></span>
                        </label>
                        <input type="file" name="imgReceita" id="foto">
                    </div>
                </div>
            </div>


            <div class="text-end mt-4">
                <button type="submit" class="btn  btn-success"><i class="bi bi-sd-card-fill"></i>&#32;Cadastrar</button>
            </div>
        </form>
    </div>

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