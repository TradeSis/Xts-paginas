<?php
//echo "-ENTRADA->".json_encode($jsonEntrada)."\n";
$idEmpresa = null;
	if (isset($jsonEntrada["idEmpresa"])) {
    	$idEmpresa = $jsonEntrada["idEmpresa"];
	}
$conexao = conectaMysql($idEmpresa);
if (isset($jsonEntrada['idEvento'])) {

    $idEvento = $jsonEntrada['idEvento'];
    $nomeEvento = $jsonEntrada['nomeEvento'];
    $descricaoEvento = $jsonEntrada['descricaoEvento'];
    $dataEvento = $jsonEntrada['dataEvento'];
    $cidadeEvento = $jsonEntrada['cidadeEvento'];
    $localEvento = $jsonEntrada['localEvento'];
    $capaEvento = $jsonEntrada['capaEvento'];
    $esconderEvento = $jsonEntrada['esconderEvento'];
    $tipoEvento = $jsonEntrada['tipoEvento'];
    $linkEvento = $jsonEntrada['linkEvento'];
    $bannerEvento = $jsonEntrada['bannerEvento'];

    if(($capaEvento == '') && ($bannerEvento == '')){
        $sql = "UPDATE  eventos  SET nomeEvento ='$nomeEvento', descricaoEvento ='$descricaoEvento', dataEvento ='$dataEvento', cidadeEvento ='$cidadeEvento', localEvento ='$localEvento', esconderEvento ='$esconderEvento', tipoEvento ='$tipoEvento', linkEvento ='$linkEvento' WHERE idEvento = $idEvento ";
    }
    elseif($capaEvento == ''){
        $sql = "UPDATE  eventos  SET nomeEvento ='$nomeEvento', descricaoEvento ='$descricaoEvento', dataEvento ='$dataEvento', cidadeEvento ='$cidadeEvento', localEvento ='$localEvento', esconderEvento ='$esconderEvento', tipoEvento ='$tipoEvento', linkEvento ='$linkEvento', bannerEvento ='$bannerEvento' WHERE idEvento = $idEvento ";
    }
    elseif($bannerEvento == ''){
        $sql = "UPDATE  eventos  SET nomeEvento ='$nomeEvento', descricaoEvento ='$descricaoEvento', dataEvento ='$dataEvento', cidadeEvento ='$cidadeEvento', localEvento ='$localEvento', capaEvento ='$capaEvento', esconderEvento ='$esconderEvento', tipoEvento ='$tipoEvento', linkEvento ='$linkEvento' WHERE idEvento = $idEvento ";
    }else{
        $sql = "UPDATE  eventos  SET nomeEvento ='$nomeEvento', descricaoEvento ='$descricaoEvento', dataEvento ='$dataEvento', cidadeEvento ='$cidadeEvento', localEvento ='$localEvento', capaEvento ='$capaEvento', esconderEvento ='$esconderEvento', tipoEvento ='$tipoEvento', linkEvento ='$linkEvento', bannerEvento ='$bannerEvento' WHERE idEvento = $idEvento ";
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
} else {
    $jsonSaida = array(
        "status" => 400,
        "retorno" => "Faltaram parametros"
    );

}

?>