<?php
include_once __DIR__ . "/../conexao.php";

function buscaTemas($idTema = null)
{
	$temas = array();

	$apiEntrada = array(
		'idTema' => $idTema
	);

	$temas = chamaAPI(null, '/paginas/temas', json_encode($apiEntrada), 'GET');
	return $temas;
}

function buscaTema()
{

	$tema = array();

	$conexao = conectaMysql(0);

	$sql = "SELECT * FROM temas WHERE ativo = 1 LIMIT 1";


	$rows = 0;

	$buscar = mysqli_query($conexao, $sql);

	while ($row = mysqli_fetch_array($buscar, MYSQLI_ASSOC)) {
		array_push($tema, $row);
		$rows = $rows + 1;
	}

	if ($rows == 1) {
		$tema = $tema[0];
	}

	return $tema;
}

if (isset($_GET['operacao'])) {

	$operacao = $_GET['operacao'];

	if ($operacao == "padrao1") {
		$apiEntrada = array(
			'idTema' => $_POST['idTema'],
			'nomeTema' => $_POST['nomeTema'],
			'css' => $_POST['css'],
			'ativo' => $_POST['ativo'],
		);
		$tema = chamaAPI(null, '/paginas/temas', json_encode($apiEntrada), 'POST');
	}


	if ($operacao == "padrao2") {

		$apiEntrada = array(
			'idTema' => $_POST['idTema'],
			'nomeTema' => $_POST['nomeTema'],
			'css' => $_POST['css'],
			'ativo' => $_POST['ativo']
		);
		$tema = chamaAPI(null, '/paginas/temas', json_encode($apiEntrada), 'POST');
	}


	if ($operacao == "padrao3") {

		$apiEntrada = array(
			'idTema' => $_POST['idTema'],
			'nomeTema' => $_POST['nomeTema'],
			'css' => $_POST['css'],
			'ativo' => $_POST['ativo'],
		);
		$tema = chamaAPI(null, '/paginas/temas', json_encode($apiEntrada), 'POST');
	}

	if ($operacao == "inserir") {

		$apiEntrada = array(
			'nomeTema' => $_POST['nomeTema'],
			'css' => $_POST['css'],
			'ativo' => $_POST['ativo'],

		);
		$tema = chamaAPI(null, '/paginas/temas', json_encode($apiEntrada), 'PUT');
	}

	if ($operacao == "alterar") {
		$apiEntrada = array(
			'idTema' => $_POST['idTema'],
			'nomeTema' => $_POST['nomeTema'],
			'css' => $_POST['css'],
			'ativo' => $_POST['ativo'],
		);
		/* echo json_encode($apiEntrada);
		return; */
		$tema = chamaAPI(null, '/paginas/temas', json_encode($apiEntrada), 'POST');
	}



	if ($operacao == "excluir") {
		$apiEntrada = array(
			'idTema' => $_POST['idTema'],
		);
		$tema = chamaAPI(null, '/paginas/temas', json_encode($apiEntrada), 'DELETE');
	}


	//header('Location: ../paginas/configuracao/temas.php');
	header('Location: ../configuracao?stab=temas');
}
