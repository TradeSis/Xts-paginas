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
            <div class="row">
                <div class="col-sm-6" style="margin-top: 10px">
                    <div class="form-group">
                        <label class='control-label' for='inputNormal' style="margin-top: -20px;">Titulo</label>
                        <input type="text" name="tituloSecao" class="form-control" required autocomplete="off">
                    </div>
                </div>
                <div class="col-sm-3" style="margin-top: 10px">
                    <div class="form-group">
                        <label class='control-label' for='inputNormal' style="margin-top: -20px;">Arquivo Fonte</label>
                        <input type="text" name="arquivoFonte" class="form-control" required autocomplete="off">
                    </div>
                </div>

                <div class="col-sm-3" style="margin-top: 10px">
                    <div class="select-form-group">

                        <label class="labelForm">Tipo</label>
                        <select class="select form-control" name="tipoSecao">
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
            </div>

            <div style="text-align:right;margin-top:20px">
                <button type="submit" class="btn  btn-success"><i class="bi bi-sd-card-fill"></i>&#32;Cadastrar</button>
            </div>
        </form>

    </div>


</body>

</html>