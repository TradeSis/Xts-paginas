<?php
//echo "-ENTRADA->".json_encode($jsonEntrada)."\n";
// helio 01/11/2023 - banco *_site, empresa 0
$conexao = conectaMysql(0);

//LOG
$LOG_CAMINHO = defineCaminhoLog();
if (isset($LOG_CAMINHO)) {
  $LOG_NIVEL = defineNivelLog();
  $identificacao = date("dmYHis") . "-PID" . getmypid() . "-" . "eventos";
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


$eventos = array();

$sql = "SELECT * FROM eventos  ";

if (isset($jsonEntrada["idEvento"])) {
  $sql = $sql . " where eventos.idEvento = " . $jsonEntrada["idEvento"];
} elseif (isset($jsonEntrada["tipoEvento"]) && isset($jsonEntrada["qtdEvento"])) {
  $where = " where ";
  $sql = $sql . $where . " eventos.tipoEvento = " . "'" . $jsonEntrada["tipoEvento"] . "'";
  $sql = $sql . " ORDER BY dataEvento ASC LIMIT " . $jsonEntrada["qtdEvento"];
  $where = " and ";
} elseif (isset($jsonEntrada["tipoEvento"])) {
  $where = " where ";
  $sql = $sql . $where . " eventos.tipoEvento = " . "'" . $jsonEntrada["tipoEvento"] . "'";
  $sql = $sql . " ORDER BY dataEvento ASC ";
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
  array_push($eventos, $row);
  $rows = $rows + 1;
}

if (isset($jsonEntrada["idEvento"]) && $rows == 1) {
  $eventos = $eventos[0];
}
$jsonSaida = $eventos;

//echo "-SAIDA->".json_encode(jsonSaida)."\n";


//LOG
if (isset($LOG_NIVEL)) {
  if ($LOG_NIVEL >= 2) {
    fwrite($arquivo, $identificacao . "-SAIDA->" . json_encode($jsonSaida) . "\n\n");
  }
}
//LOG
