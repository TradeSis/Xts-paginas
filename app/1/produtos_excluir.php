<?php
//echo "-ENTRADA->".json_encode($jsonEntrada)."\n";
$idEmpresa = $jsonEntrada["idEmpresa"];
$conexao = conectaMysql($idEmpresa);
if (isset($jsonEntrada['idProduto'])) {

    $idProduto = $jsonEntrada['idProduto'];

    $sql = "DELETE FROM  produtos  WHERE idProduto = $idProduto ";

    if ($atualizar = mysqli_query($conexao, $sql)) {
        $jsonSaida = array(
            "status" => 200,
            "retorno" => "ok"
        );
    } else {
        $jsonSaida = array(
            "status" => 500,
            "retorno" => "erro no mysql"
        );
    }
} else {
    $jsonSaida = array(
        "status" => 400,
        "retorno" => "Faltaram parametros"
    );

}

?>