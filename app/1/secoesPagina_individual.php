<?php
//echo "-ENTRADA->".json_encode($jsonEntrada)."\n";
// helio 01/11/2023 - banco *_site, empresa 0
$conexao = conectaMysql(0);

//LOG
$LOG_CAMINHO = defineCaminhoLog();
if (isset($LOG_CAMINHO)) {
  $LOG_NIVEL = defineNivelLog();
  $identificacao = date("dmYHis") . "-PID" . getmypid() . "-" . "secoesPagina_individual";
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
$secoespagina = array();

$sql = "SELECT secoespagina.*, secoes.* FROM secoespagina
INNER JOIN secoes on secoes.idSecao = secoespagina.idSecao ";

$sql = $sql . " where secoespagina.idPagina = " . $jsonEntrada["idPagina"];
$sql = $sql . " order by secoespagina.ordem ";

//echo $sql;

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
  if ($row["parametros"] == "") {
    $row["parametros"] = $row["parametrosPadrao"];
  }
  array_push($secoespagina, $row);
  $rows = $rows + 1;
}

/*
if ($rows==1) {
  $secoespagina = $secoespagina[0];
}
*/

$jsonSaida = $secoespagina;


//echo "-SAIDA->".json_encode(jsonSaida)."\n";

//LOG
if (isset($LOG_NIVEL)) {
  if ($LOG_NIVEL >= 2) {
    fwrite($arquivo, $identificacao . "-SAIDA->" . json_encode($jsonSaida) . "\n\n");
  }
}
//LOG
