<?php
//echo "-ENTRADA->".json_encode($jsonEntrada)."\n";

//LOG
$LOG_CAMINHO = defineCaminhoLog();
if (isset($LOG_CAMINHO)) {
  $LOG_NIVEL = defineNivelLog();
  $identificacao = date("dmYHis") . "-PID" . getmypid() . "-" . "secoes";
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
$secoes = array();

$sql = "SELECT * FROM secoes ";

if (isset($jsonEntrada["idSecao"])) {
  $sql = $sql . " where secoes.idSecao = " . $jsonEntrada["idSecao"];
} else {
  $sql = $sql . " ORDER BY tipoSecao";
}

//LOG
if (isset($LOG_NIVEL)) {
  if ($LOG_NIVEL >= 3) {
    fwrite($arquivo, $identificacao . "-SQL->" . $sql . "\n");
  }
}
//LOG

$rows = 0;
$buscar = mysqli_query($conexao, $sql);
while ($row = mysqli_fetch_array($buscar, MYSQLI_ASSOC)) {
  array_push($secoes, $row);
  $rows = $rows + 1;
}

if (isset($jsonEntrada["idSecao"]) && $rows == 1) {
  $secoes = $secoes[0];
}
$jsonSaida = $secoes;

//echo "-SAIDA->".json_encode(jsonSaida)."\n";

//LOG
if (isset($LOG_NIVEL)) {
  if ($LOG_NIVEL >= 2) {
    fwrite($arquivo, $identificacao . "-SAIDA->" . json_encode($jsonSaida) . "\n\n");
  }
}
//LOG
