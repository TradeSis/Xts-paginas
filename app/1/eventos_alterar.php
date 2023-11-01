<?php
//echo "-ENTRADA->".json_encode($jsonEntrada)."\n";
// helio 01/11/2023 - banco *_site, empresa 0
$conexao = conectaMysql(0);

//LOG
$LOG_CAMINHO = defineCaminhoLog();
if (isset($LOG_CAMINHO)) {
    $LOG_NIVEL = defineNivelLog();
    $identificacao = date("dmYHis") . "-PID" . getmypid() . "-" . "eventos_alterar";
    if (isset($LOG_NIVEL)) {
        if ($LOG_NIVEL >= 1) {
            $arquivo = fopen(defineCaminhoLog() . "paginas_" . date("dmY") . ".log", "a");
        }
    }
}
if (isset($LOG_NIVEL)) {
    if ($LOG_NIVEL == 1) {
        fwrite($arquivo, $identificacao . "\n");
    }
    if ($LOG_NIVEL >= 2) {
        fwrite($arquivo, $identificacao . "-ENTRADA->" . json_encode($jsonEntrada) . "\n");
    }
}
//LOG

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

    if (($capaEvento == 'null') && ($bannerEvento == 'null')) {
        $sql = "UPDATE  eventos  SET nomeEvento ='$nomeEvento', descricaoEvento ='$descricaoEvento', dataEvento ='$dataEvento', cidadeEvento ='$cidadeEvento', localEvento ='$localEvento', esconderEvento ='$esconderEvento', tipoEvento ='$tipoEvento', linkEvento ='$linkEvento' WHERE idEvento = $idEvento ";
    } elseif ($capaEvento == 'null') {
        $sql = "UPDATE  eventos  SET nomeEvento ='$nomeEvento', descricaoEvento ='$descricaoEvento', dataEvento ='$dataEvento', cidadeEvento ='$cidadeEvento', localEvento ='$localEvento', esconderEvento ='$esconderEvento', tipoEvento ='$tipoEvento', linkEvento ='$linkEvento', bannerEvento ='$bannerEvento' WHERE idEvento = $idEvento ";
    } elseif ($bannerEvento == 'null') {
        $sql = "UPDATE  eventos  SET nomeEvento ='$nomeEvento', descricaoEvento ='$descricaoEvento', dataEvento ='$dataEvento', cidadeEvento ='$cidadeEvento', localEvento ='$localEvento', capaEvento ='$capaEvento', esconderEvento ='$esconderEvento', tipoEvento ='$tipoEvento', linkEvento ='$linkEvento' WHERE idEvento = $idEvento ";
    } else {
        $sql = "UPDATE  eventos  SET nomeEvento ='$nomeEvento', descricaoEvento ='$descricaoEvento', dataEvento ='$dataEvento', cidadeEvento ='$cidadeEvento', localEvento ='$localEvento', capaEvento ='$capaEvento', esconderEvento ='$esconderEvento', tipoEvento ='$tipoEvento', linkEvento ='$linkEvento', bannerEvento ='$bannerEvento' WHERE idEvento = $idEvento ";
    }


    //LOG
    if (isset($LOG_NIVEL)) {
        if ($LOG_NIVEL >= 3) {
            fwrite($arquivo, $identificacao . "-SQL->" . $sql . "\n");
        }
    }
    //LOG

    //TRY-CATCH
    try {

        $atualizar = mysqli_query($conexao, $sql);
        if (!$atualizar)
            throw new Exception(mysqli_error($conexao));

        $jsonSaida = array(
            "status" => 200,
            "retorno" => "ok"
        );
    } catch (Exception $e) {
        $jsonSaida = array(
            "status" => 500,
            "retorno" => $e->getMessage()
        );
        if ($LOG_NIVEL >= 1) {
            fwrite($arquivo, $identificacao . "-ERRO->" . $e->getMessage() . "\n");
        }
    } finally {
        // ACAO EM CASO DE ERRO (CATCH), que mesmo assim precise
    }
    //TRY-CATCH


} else {
    $jsonSaida = array(
        "status" => 400,
        "retorno" => "Faltaram parametros"
    );
}

//LOG
if (isset($LOG_NIVEL)) {
    if ($LOG_NIVEL >= 2) {
        fwrite($arquivo, $identificacao . "-SAIDA->" . json_encode($jsonSaida) . "\n\n");
    }
}
//LOG
