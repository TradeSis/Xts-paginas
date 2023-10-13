<?php
//Lucas 11102023 padrao novo
include_once('../header.php');
include_once('../database/categorias.php');

$categorias = buscaCategorias();
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
                <h2 class="tituloTabela">Adicionar Evento</h2>
            </div>
            <div class="col-7">
                <!-- FILTROS -->
            </div>

            <div class="col-2 text-end">
                <a href="eventos.php" role="button" class="btn btn-primary"><i
                        class="bi bi-arrow-left-square"></i></i>&#32;Voltar</a>
            </div>
        </div>

        <form class="mb-4" action="../database/eventos.php?operacao=inserir" method="post" enctype="multipart/form-data">

            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label class='control-label' for='inputNormal'>Slug*</label>
                        <input type="text" name="slug" class="form-control" required autocomplete="off">
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="form-group">
                        <label class='control-label' for='inputNormal'>Nome do Evento*</label>
                        <input type="text" name="nomeEvento" class="form-control" required autocomplete="off">
                    </div>
                </div>
            </div>

            <div class="container-fluid p-0">
                <div class="col">
                    <span class="tituloEditor">Descrição do Evento</span>
                </div>
                <div class="quill-textarea"></div>
                <textarea style="display: none" id="detail" name="descricaoEvento"></textarea>
            </div>

            <div class="row mt-3">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class='control-label' for='inputNormal' style="margin-top: -40px;">Data do Evento</label>
                        <input type="date" name="dataEvento" class="form-control" autocomplete="off">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class='control-label' for='inputNormal'>Cidade</label>
                        <input type="text" name="cidadeEvento" class="form-control" autocomplete="off">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class='control-label' for='inputNormal'>Local</label>
                        <input type="text" name="localEvento" class="form-control" autocomplete="off">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="row">
                    <div class="col-sm-6" style="margin-top: 50px">
                        <div class="col-sm-6" style="margin-top: -20px">
                            <label class='control-label' for='inputNormal' style="margin-top: -50px;">Capa Evento</label>
                            <label class="picture" for="foto" tabIndex="0">
                                <span class="picture__image"></span>
                            </label>
                            <input type="file" name="capaEvento" id="foto">
                        </div>
                    </div>

                    <div class="col-sm-6" style="margin-top: 50px">
                        <div class="col-sm-6" style="margin-top: -20px">
                            <label class='control-label' for='inputNormal' style="margin-top: -50px;">Banner Evento</label>
                            <label class="picture" for="banner" tabIndex="0">
                                <span class="picture__image2"></span>
                            </label>
                            <input type="file" name="bannerEvento" id="banner">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4 ml-4" style="margin-top: 40px">
                    <div class="select-form-group">
                        <label class='control-label' for='inputNormal' style="margin-top: -45px;">Esconder</label>
                        <label for="esconderEvento">esconder</label>
                        <input type="range" id="esconderEvento" name="esconderEvento" min="0" max="1" style="width: 15%;">
                        <label for="esconderEvento">aparecer</label>
                    </div>
                </div>

                <div class="col-sm-6" style="margin-top: 10px">
                    <div class="select-form-group">

                        <label class="labelForm">Tipo Evento*</label>
                        <select class="select form-control" name="tipoEvento">
                            <option value="evento">Evento</option>
                            <option value="visitacao">Visitação</option>
                            <option value="cursos">Cursos</option>
                            <option value="podcast">Podcast</option>
                        </select>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12" style="margin-top: 10px">
                    <div class="form-group">
                        <label class='control-label' for='inputNormal'>link do Evento</label>
                        <input type="text" name="linkEvento" class="form-control" autocomplete="off">
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

     <?php include_once ROOT. "/vendor/footer_js.php";?>

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

        //Carregar a BANNER na tela
        const inputFile2 = document.querySelector("#banner");
        const pictureImage2 = document.querySelector(".picture__image2");
        const pictureImageTxt2 = "Carregar imagem2";
        pictureImage2.innerHTML = pictureImageTxt2;

        inputFile.addEventListener("change", function(e) {
            const inputTarget2 = e.target;
            const file2 = inputTarget2.files2[0];

            if (file2) {
                const reader2 = new FileReader2();

                reader2.addEventListener("load", function(e) {
                    const readerTarget2 = e.target;

                    const img2 = document.createElement("img2");
                    img2.src = readerTarget.result;
                    img2.classList.add("picture__img2");

                    pictureImage2.innerHTML = "";
                    pictureImage2.appendChild(img2);
                });

                reader2.readAsDataURL(file2);
            } else {
                pictureImage2.innerHTML = pictureImageTxt2;
            }
        });
    </script>

<!-- LOCAL PARA COLOCAR OS JS -FIM -->

</body>

</html>