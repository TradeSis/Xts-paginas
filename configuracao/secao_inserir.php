<?php
include_once('../head.php');
?>



<body class="bg-transparent">

    <div class="container p-4" style="margin-top:10px">

        <div class="row">
            <div class="col-sm-8">
                <h2 class="ts-tituloPrincipal">Adicionar Seção</h2>
            </div>
            <div class="col-sm-4" style="text-align:right">
                <a href="../configuracao/?tab=configuracao&stab=secao" role="button" class="btn btn-primary"><i class="bi bi-arrow-left-square"></i></i>&#32;Voltar</a>
            </div>
        </div>

        <form class="mb-4" action="../database/secao.php?operacao=inserir" method="post">
            <div class="row mt-3">
                <div class="col-sm-6">
                    <label class='form-label ts-label'>Titulo</label>
                    <input type="text" name="tituloSecao" class="form-control ts-input" required autocomplete="off">
                </div>
                <div class="col-sm-3">
                    <label class='form-label ts-label'>Arquivo Fonte</label>
                    <input type="text" name="arquivoFonte" class="form-control ts-input" required autocomplete="off">
                </div>

                <div class="col-sm-3">
                    <label class="form-label ts-label">Tipo</label>
                    <select class="form-select ts-input" name="tipoSecao">
                        <option value="header">Header</option>
                        <option value="footer">Footer</option>
                        <option value="html">Html</option>
                        <option value="card">Card</option>
                        <option value="form">Form</option>
                        <option value="quemSomos">Quem Somos</option>
                        <option value="principal">Principal</option>
                        <option value="divisorPagina">Divisor de Pagina</option>
                        <option value="lista">Lista</option>
                        <option value="slides">Slides</option>
                        <option value="blog">Blog</option>
                    </select>
                </div>
            </div>

            <div class="text-end mt-4">
                <button type="submit" class="btn  btn-success"><i class="bi bi-sd-card-fill"></i>&#32;Cadastrar</button>
            </div>
        </form>

    </div>


</body>

</html>