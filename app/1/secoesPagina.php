<?php
//echo "-ENTRADA->".json_encode($jsonEntrada)."\n";
// helio 01/11/2023 - banco *_site, empresa 0
$conexao = conectaMysql(0);

//LOG
$LOG_CAMINHO = defineCaminhoLog();
if (isset($LOG_CAMINHO)) {
  $LOG_NIVEL = defineNivelLog();
  $identificacao = date("dmYHis") . "-PID" . getmypid() . "-" . "secoesPagina";
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

$sql = "SELECT secoespagina.*, secoes.*, paginas.*, secoes.arquivoFonte AS arquivoFonte2 FROM secoespagina
        INNER JOIN secoes on secoes.idSecao = secoespagina.idSecao
        INNER JOIN paginas on paginas.idPagina = secoespagina.idPagina ";
$where = " WHERE ";
if (isset($jsonEntrada["idSecaoPagina"])) {
  $sql = $sql . " where secoespagina.idSecaoPagina = " . $jsonEntrada["idSecaoPagina"];
  $where = " AND ";
}
if (isset($jsonEntrada["idPagina"])) {
  $sql = $sql . $where . " secoespagina.idPagina = " . $jsonEntrada["idPagina"];
}

$sql = $sql . " order by secoespagina.idPagina, secoespagina.ordem; ";

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
  array_push($secoespagina, $row);
  $rows = $rows + 1;
}

if (isset($jsonEntrada["idSecaoPagina"]) && $rows == 1) {
  $secoespagina = $secoespagina[0];
}
$jsonSaida = $secoespagina;

//echo "-SAIDA->".json_encode($jsonSaida)."\n";
//LOG
if (isset($LOG_NIVEL)) {
  if ($LOG_NIVEL >= 2) {
    fwrite($arquivo, $identificacao . "-SAIDA->" . json_encode($jsonSaida) . "\n\n");
  }
}
//LOG