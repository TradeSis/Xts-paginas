<?php
//echo "-ENTRADA->".json_encode($jsonEntrada)."\n";

//LOG
$LOG_CAMINHO = defineCaminhoLog();
if (isset($LOG_CAMINHO)) {
    $LOG_NIVEL = defineNivelLog();
    $identificacao = date("dmYHis") . "-PID" . getmypid() . "-" . "posts_inserir";
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

$idEmpresa = null;
if (isset($jsonEntrada["idEmpresa"])) {
    $idEmpresa = $jsonEntrada["idEmpresa"];
}
$conexao = conectaMysql($idEmpresa);
if (isset($jsonEntrada['slug'])) {

    $slug = $jsonEntrada['slug'];
    $titulo = $jsonEntrada['titulo'];
    $imgDestaque = $jsonEntrada['imgDestaque'];
    $idAutor = $jsonEntrada['idAutor'];
    $data = $jsonEntrada['data'];
    $txtConteudo = $jsonEntrada['txtConteudo'];
    $idCategoria = $jsonEntrada['idCategoria'];
    $idCategoria = $jsonEntrada['idCategoria'];
    $comentarios = 'null'; //sem uso no momento
    $textoIntro = 'null'; //sem uso no momento

    $sql = "INSERT INTO `posts`(`slug`, `titulo`, `imgDestaque`, `idAutor`, `data`, `txtConteudo`, `idCategoria`, `comentarios`, `textoIntro`) VALUES ('$slug','$titulo', '$imgDestaque' ,'$idAutor','$data','$txtConteudo','$idCategoria','$comentarios','$textoIntro')";

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
