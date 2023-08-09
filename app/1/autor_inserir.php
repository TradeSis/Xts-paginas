<?php
//echo "-ENTRADA->".json_encode($jsonEntrada)."\n";
$idEmpresa = null;
$conexao = conectaMysql($idEmpresa);
if (isset($jsonEntrada['nomeAutor'])) {

    $nomeAutor = $jsonEntrada['nomeAutor'];
    $fotoAutor = $jsonEntrada['fotoAutor'];
    $bannerAutor = $jsonEntrada['bannerAutor'];
    $sobreMimAutor = $jsonEntrada['sobreMimAutor'];
    
    $sql = "INSERT INTO `autor`(`nomeAutor`, `fotoAutor`, `bannerAutor`, `sobreMimAutor`) VALUES ('$nomeAutor','$fotoAutor','$bannerAutor ','$sobreMimAutor')";
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