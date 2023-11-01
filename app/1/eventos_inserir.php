<?php
//echo "-ENTRADA->".json_encode($jsonEntrada)."\n";
// helio 01/11/2023 - banco *_site, empresa 0
$conexao = conectaMysql(0);

//LOG
$LOG_CAMINHO = defineCaminhoLog();
if (isset($LOG_CAMINHO)) {
    $LOG_NIVEL = defineNivelLog();
    $identificacao = date("dmYHis") . "-PID" . getmypid() . "-" . "eventos_inserir";
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

if (isset($jsonEntrada['nomeEvento'])) {

    $slug = $jsonEntrada['slug'];
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


    $sql = "INSERT INTO eventos (`slug`,`nomeEvento`,`descricaoEvento`,`dataEvento`,`cidadeEvento`,`localEvento`,`capaEvento`,`esconderEvento`,`tipoEvento`,`linkEvento`,`bannerEvento`) VALUES ('$slug','$nomeEvento','$descricaoEvento','$dataEvento','$cidadeEvento','$localEvento','$capaEvento','$esconderEvento','$tipoEvento','$linkEvento','$bannerEvento')";

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
