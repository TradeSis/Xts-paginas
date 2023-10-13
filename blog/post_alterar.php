<?php
//Lucas 11102023 padrao novo
include_once('../header.php');
include_once('../database/autor.php');
include_once('../database/categorias.php');
include_once('../database/posts.php');
$idPost = $_GET['idPost'];
$post = buscaPosts($idPost);
$autores = buscaAutor();
$categorias = buscaCategorias();
?>
<!doctype html>
<html lang="pt-BR">
<head>
    
    <?php include_once ROOT. "/vendor/head_css.php";?>

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
                <h2 class="tituloTabela">Editar Post</h2>
            </div>
            <div class="col-7">
                <!-- FILTROS -->
            </div>

            <div class="col-2 text-end">
                <a href="posts.php" role="button" class="btn btn-primary"><i
                        class="bi bi-arrow-left-square"></i></i>&#32;Voltar</a>
            </div>
        </div>


        <form action="../database/posts.php?operacao=alterar" method="post" enctype="multipart/form-data">

            <div class="row">
                <div class="col-sm-3" style="margin-top: 50px">
                    <div class="col-sm-6" style="margin-top: -20px">
                        <label>Imagem</label>
                        <label class="picture" for="foto" tabIndex="0">
                            <img src="<?php echo $post["imgDestaque"] ?>" width="100%" height="100%" alt="">
                        </label>
                        <input type="file" name="imgDestaque" id="foto">
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label class='control-label' for='inputNormal'>Slug</label>
                        <input type="text" name="slug" class="form-control" value="<?php echo $post['slug'] ?>" disabled>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="form-group">
                        <label class='control-label' for='inputNormal'>Titulo</label>
                        <input type="text" name="titulo" class="form-control" value="<?php echo $post['titulo'] ?>">
                        <input type="hidden" class="form-control" name="idPost" value="<?php echo $post['idPost'] ?>">
                    </div>
                </div>

            </div>

            <div class="row mt-3">
                <div class="col-sm-3">
                    <div class="select-form-group">

                        <label class="labelForm">Categorias*</label>
                        <select class="select form-control" name="idCategoria">
                            <option value="<?php echo $post['idCategoria'] ?>"><?php echo $post['nomeCategoria']  ?></option>
                            <?php
                            foreach ($categorias as $categoria) {
                            ?>
                                <option value="<?php echo $categoria['idCategoria'] ?>"><?php echo $categoria['nomeCategoria']  ?></option>
                            <?php  } ?>
                        </select>

                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="select-form-group">

                        <label class="labelForm">Colunista/Autor*</label>
                        <select class="select form-control" name="idAutor">
                            <option value="<?php echo $post['idAutor'] ?>"><?php echo $post['nomeAutor']  ?></option>
                            <?php
                            foreach ($autores as $autor) {
                            ?>
                                <option value="<?php echo $autor['idAutor'] ?>"><?php echo $autor['nomeAutor']  ?></option>
                            <?php  } ?>
                        </select>

                    </div>
                </div>
                <div class="col-md-3" style="margin-top: 5px;">
                    <label class="labelForm">Data</label>
                    <input type="text" class="data select form-control" name="data" value="<?php echo date('d/m/Y H:i', strtotime($post['data'])) ?>" disabled>
                </div>

            </div>

            <div class="container-fluid p-0">
                <div class="col">
                    <span class="tituloEditor">Descrição do Post</span>
                </div>
                <div class="quill-textarea"><?php echo $post['txtConteudo'] ?></div>
                <textarea style="display: none" id="detail" name="txtConteudo"><?php echo $post['txtConteudo'] ?></textarea>
            </div>

            <div class="text-end mt-4">
                <button type="submit" class="btn  btn-success"><i class="bi bi-sd-card-fill"></i>&#32;Salvar</button>
            </div>
        </form>

    </div>

<!-- LOCAL PARA COLOCAR OS JS -->

<?php include_once ROOT. "/vendor/footer_js.php";?>

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
    </script>

<!-- LOCAL PARA COLOCAR OS JS -FIM -->

</body>

</html>