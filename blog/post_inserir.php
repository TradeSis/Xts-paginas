<?php
include_once('../head.php');
include_once('../database/autor.php');
include_once('../database/categorias.php');
$autores = buscaAutor();
$categorias = buscaCategorias();
?>


<body class="bg-transparent">

    <div class="container formContainer">

        <div class="row">
            <div class="col-sm-8">
                <h2 class="tituloTabela">Adicionar Post</h2>
            </div>
            <div class="col-sm-4" style="text-align:right">
                <a href="posts.php" role="button" class="btn btn-primary"><i class="bi bi-arrow-left-square"></i></i>&#32;Voltar</a>
            </div>
        </div>

        <form class="mb-4" action="../database/posts.php?operacao=inserir" method="post" enctype="multipart/form-data">


            <div class="row">
                <div class="col-sm-3" style="margin-top: 50px">
                    <div class="col-sm-6" style="margin-top: -20px">
                        <label>Imagem</label>
                        <label class="picture" for="foto" tabIndex="0">
                            <span class="picture__image"></span>
                        </label>
                        <input type="file" name="imgDestaque" id="foto">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3" style="margin-top: 10px">
                    <div class="form-group">
                        <label class='control-label' for='inputNormal' style="margin-top: -20px;">Slug</label>
                        <input type="titulo" name="slug" class="form-control" required autocomplete="off">
                    </div>
                </div>
                <div class="col-sm-9" style="margin-top: 10px">
                    <div class="form-group">
                        <label class='control-label' for='inputNormal' style="margin-top: -20px;">Titulo</label>
                        <input type="titulo" name="titulo" class="form-control" required autocomplete="off">
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-3" style="margin-top: 10px">
                    <div class="select-form-group">

                        <label class="labelForm">Categorias*</label>
                        <select class="select form-control" name="idCategoria">
                            <?php
                            foreach ($categorias as $categoria) {
                            ?>
                                <option value="<?php echo $categoria['idCategoria'] ?>"><?php echo $categoria['nomeCategoria']  ?></option>
                            <?php  } ?>
                        </select>

                    </div>
                </div>

                <div class="col-sm-3" style="margin-top: 10px">
                    <div class="select-form-group">

                        <label class="labelForm">Colunista/Autor*</label>
                        <select class="select form-control" name="idAutor">
                            <?php
                            foreach ($autores as $autor) {
                            ?>
                                <option value="<?php echo $autor['idAutor'] ?>"><?php echo $autor['nomeAutor']  ?></option>
                            <?php  } ?>
                        </select>

                    </div>
                </div>
                <div class="col-sm-3" style="margin-top: -28px">
                    <div class="form-group">
                        <label class="labelForm">Data</label>
                        <input type="date" name="data" class="form-control" required autocomplete="off">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <span class="tituloEditor">Descrição do Post</span>
                </div>
                <div class="quill-textarea"></div>
                <textarea style="display: none;" id="detail" name="txtConteudo"></textarea>
            </div>


            <div style="text-align:right;margin-top:20px">
                <button type="submit" class="btn  btn-success"><i class="bi bi-sd-card-fill"></i>&#32;Cadastrar</button>
            </div>
        </form>

    </div>


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



</body>

</html>