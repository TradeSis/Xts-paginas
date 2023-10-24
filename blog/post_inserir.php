<?php
//Lucas 11102023 criado
include_once('../header.php');
include_once('../database/autor.php');
include_once('../database/categorias.php');
$autores = buscaAutor();
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
                <h2 class="ts-tituloPrincipal">Adicionar Post</h2>
            </div>
            <div class="col-7">
                <!-- FILTROS -->
            </div>

            <div class="col-2 text-end">
                <a href="posts.php" role="button" class="btn btn-primary"><i class="bi bi-arrow-left-square"></i></i>&#32;Voltar</a>
            </div>
        </div>

        <form action="../database/posts.php?operacao=inserir" method="post" enctype="multipart/form-data">

            <div class="row mt-3">
                <div class="col-sm-3" style="margin-top: 50px">
                    <label class="form-label ts-label">Imagem</label>
                    <label class="picture" for="foto" tabIndex="0">
                        <span class="picture__image"></span>
                    </label>
                    <input type="file" name="imgDestaque" id="foto">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-sm-3">
                    <label class='form-label ts-label'>Slug</label>
                    <input type="titulo" name="slug" class="form-control ts-input" required autocomplete="off">
                </div>
                <div class="col-sm-9">
                    <label class='form-label ts-label'>Titulo</label>
                    <input type="titulo" name="titulo" class="form-control ts-input" required autocomplete="off">
                </div>

            </div>

            <div class="row mt-2">
                <div class="col-sm-3">
                    <label class="form-label ts-label">Categorias*</label>
                    <select class="form-select ts-input" name="idCategoria">
                        <?php
                        foreach ($categorias as $categoria) {
                        ?>
                            <option value="<?php echo $categoria['idCategoria'] ?>"><?php echo $categoria['nomeCategoria']  ?></option>
                        <?php  } ?>
                    </select>
                </div>

                <div class="col-sm-3">
                    <label class="form-label ts-label">Colunista/Autor*</label>
                    <select class="form-select ts-input" name="idAutor">
                        <?php
                        foreach ($autores as $autor) {
                        ?>
                            <option value="<?php echo $autor['idAutor'] ?>"><?php echo $autor['nomeAutor']  ?></option>
                        <?php  } ?>
                    </select>
                </div>

                <div class="col-sm-3">
                    <label class="form-label ts-label">Data</label>
                    <input type="date" name="data" class="form-control ts-input" required autocomplete="off" style="margin-top: -5px">
                </div>
            </div>

            <div class="container-fluid p-0 mt-3">
                <div class="col">
                    <span class="tituloEditor">Descrição do Post</span>
                </div>
                <div class="quill-textarea"></div>
                <textarea style="display: none;" id="detail" name="txtConteudo"></textarea>
            </div>


            <div class="text-end mt-4">
                <button type="submit" class="btn  btn-success"><i class="bi bi-sd-card-fill"></i>&#32;Cadastrar</button>
            </div>
        </form>

    </div>

    <!-- LOCAL PARA COLOCAR OS JS -->

    <?php include_once ROOT . "/vendor/footer_js.php"; ?>

    <script src="<?php echo URLROOT ?>/sistema/js/quilljs.js"></script>
    <script>
        //Carregar a imagem na tela
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
        // FIm
        ClassicEditor
            .create(document.querySelector('#txtConteudo'), {

                toolbar: {
                    items: [
                        'heading',
                        '|',
                        'undo',
                        'redo',
                        '|',
                        'bold',
                        'italic',
                        'fontSize',
                        'fontColor',
                        'fontBackgroundColor',
                        'fontFamily',
                        '|',
                        'link',
                        '|',
                        'bulletedList',
                        'numberedList',
                        'indent',
                        'outdent',
                        '|',
                        'imageUpload',
                        'blockQuote',
                        'insertTable',
                        'mediaEmbed',
                        '|',
                        'exportPdf',
                        'exportWord'
                    ]
                },
                language: 'pt-br',
                image: {
                    toolbar: [
                        'imageTextAlternative',
                        'imageStyle:full',
                        'imageStyle:side'
                    ]
                },
                table: {
                    contentToolbar: [
                        'tableColumn',
                        'tableRow',
                        'mergeTableCells'
                    ]
                },
                licenseKey: '',

            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(error => {
                console.error('Oops, something went wrong!');
                console.error('Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:');
                console.warn('Build id: 9vyad6gsfs8k-2evma7h1quav');
                console.error(error);
            });
    </script>

    <!-- LOCAL PARA COLOCAR OS JS -FIM -->

</body>

</html>