<?php
//echo "-ENTRADA->".json_encode($jsonEntrada)."\n";
$idEmpresa = null;
	if (isset($jsonEntrada["idEmpresa"])) {
    	$idEmpresa = $jsonEntrada["idEmpresa"];
	}
$conexao = conectaMysql($idEmpresa);
if (isset($jsonEntrada['idAutor'])) {

    $idAutor = $jsonEntrada['idAutor'];
    $nomeAutor = $jsonEntrada['nomeAutor'];
    $fotoAutor = $jsonEntrada['fotoAutor'];
    $bannerAutor = $jsonEntrada['bannerAutor'];
    $sobreMimAutor = $jsonEntrada['sobreMimAutor'];

    if(($fotoAutor == '') && ($bannerAutor == '')){
        $sql = "UPDATE autor SET nomeAutor='$nomeAutor', sobreMimAutor ='$sobreMimAutor' WHERE idAutor = $idAutor";
    }
    elseif($fotoAutor == ''){
        $sql = "UPDATE autor SET nomeAutor='$nomeAutor', bannerAutor ='$bannerAutor', sobreMimAutor ='$sobreMimAutor' WHERE idAutor = $idAutor";
    }
    elseif($bannerAutor == ''){
        $sql = "UPDATE autor SET nomeAutor='$nomeAutor', fotoAutor ='$fotoAutor', sobreMimAutor ='$sobreMimAutor' WHERE idAutor = $idAutor";
    }else{
        $sql = "UPDATE autor SET nomeAutor='$nomeAutor', fotoAutor ='$fotoAutor', bannerAutor ='$bannerAutor', sobreMimAutor ='$sobreMimAutor' WHERE idAutor = $idAutor";
    }
    

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
} 


?>