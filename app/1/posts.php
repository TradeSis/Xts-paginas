<?php
//echo "-ENTRADA->".json_encode($jsonEntrada)."\n";
// helio 01/11/2023 - banco *_site, empresa 0
$conexao = conectaMysql(0);

//LOG
$LOG_CAMINHO = defineCaminhoLog();
if (isset($LOG_CAMINHO)) {
  $LOG_NIVEL = defineNivelLog();
  $identificacao = date("dmYHis") . "-PID" . getmypid() . "-" . "posts";
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

$posts = array();

$sql = "SELECT posts.*, autor.*, categoria.* FROM posts 
        LEFT JOIN autor on autor.idAutor = posts.idAutor
        LEFT JOIN categoria on categoria.idCategoria = posts.idCategoria ";
if (isset($jsonEntrada["idPost"])) {
  $sql = $sql . " where posts.idPost = " . $jsonEntrada["idPost"];
}
$where = " where ";
if (isset($jsonEntrada["idCategoria"]) && isset($jsonEntrada["qtdPosts"])) {
  $sql = $sql . $where . " posts.idCategoria = " . $jsonEntrada["idCategoria"];
  $sql = $sql . " ORDER BY idPost DESC LIMIT " . $jsonEntrada["qtdPosts"];
  $where = " and ";
} elseif (isset($jsonEntrada["qtdPosts"])) {
  $sql = $sql . " ORDER BY idPost DESC LIMIT " . $jsonEntrada["qtdPosts"];
  $where = " and ";
} elseif (isset($jsonEntrada["idCategoria"])) {
  $sql = $sql . $where . " posts.idCategoria = " . $jsonEntrada["idCategoria"] . " ORDER BY idPost DESC  ";
}


//LOG
if (isset($LOG_NIVEL)) {
  if ($LOG_NIVEL >= 3) {
    fwrite($arquivo, $identificacao . "-SQL->" . $sql . "\n");
  }
}
//LOG


//echo $sql;
$rows = 0;
$buscar = mysqli_query($conexao, $sql);
while ($row = mysqli_fetch_array($buscar, MYSQLI_ASSOC)) {
  array_push($posts, $row);
  $rows = $rows + 1;
}

if (isset($jsonEntrada["idPost"]) && $rows == 1) {
  $posts = $posts[0];
}
$jsonSaida = $posts;

//echo "-SAIDA->".json_encode(jsonSaida)."\n";
//LOG
if (isset($LOG_NIVEL)) {
  if ($LOG_NIVEL >= 2) {
    fwrite($arquivo, $identificacao . "-SAIDA->" . json_encode($jsonSaida) . "\n\n");
  }
}
//LOG