<?php

include_once(__DIR__ . '/../database/secao.php');
include_once(__DIR__ . '/../head.php');
$secoes = buscaSecao();
/* echo json_encode($secoes); */

?>

<body class="bg-transparent">
    <div class="container" style="margin-top:30px"> 
        
            <div class="row mt-4">
                <div class="col-sm-8">
                    <h2 class="tituloTabela">Todas</h2>
                </div>
            </div>
        <div class="card mt-2 text-center">
            <table class="table">
                <thead class="cabecalhoTabela">
                    <tr>
                        <th>Tipo Seção</th>
                        <th>Titulo</th>
                        <th>Arquivo Fonte</th>
                        <th>Ação</th>

                    </tr>
                </thead>

                <?php
                foreach ($secoes as $secao) {
                ?>
                    <tr>
                        <td><?php echo $secao['tipoSecao'] ?></td>
                        <td><?php echo $secao['tituloSecao'] ?></td>
                        <td><?php echo $secao['arquivoFonte'] ?></td>
                        
                        <td>
                            <a class="btn btn-warning btn-sm" href="secao_alterar.php?idSecao=<?php echo $secao['idSecao'] ?>" role="button"><i class="bi bi-pencil-square"></i></a>
                            <a class="btn btn-danger btn-sm" href="secao_excluir.php?idSecao=<?php echo $secao['idSecao'] ?>" role="button"><i class="bi bi-trash3"></i></a>
                        </td>
                    </tr>
                <?php } ?>

            </table>
        </div>
    </div>


</body>

</html>