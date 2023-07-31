<?php
include_once __DIR__ . "/../conexao.php";


function buscaCategorias($idCategoria=null)
{
	
	$categorias = array();
	
	$idCliente = null;
	if (isset($_SESSION['idCliente'])) {
    	$idCliente = $_SESSION['idCliente'];
	}

	$apiEntrada = array(
		'idCategoria' => $idCategoria,
		'idCliente' => $idCliente,
	);

	$categorias = chamaAPI(null, '/paginas/categorias', json_encode($apiEntrada), 'GET');
	return $categorias;
}

if (isset($_GET['operacao'])) {

	$operacao = $_GET['operacao'];

    if ($operacao=="inserir") {

		$apiEntrada = array(
			'nomeCategoria' => $_POST['nomeCategoria'],	
		);
		$categorias = chamaAPI(null, '/paginas/categorias', json_encode($apiEntrada), 'PUT');
		
	}

	$operacao = $_GET['operacao'];

    if ($operacao=="alterar") {

		$apiEntrada = array(
			'idCategoria' => $_POST['idCategoria'],
			'nomeCategoria' => $_POST['nomeCategoria'],
			
		);
		$categorias = chamaAPI(null, '/paginas/categorias', json_encode($apiEntrada), 'POST');
		
	}
	
	if ($operacao=="excluir") {

		$apiEntrada = array(
			'idCategoria' => $_POST['idCategoria'],
		);

		$categorias = chamaAPI(null, '/paginas/categorias', json_encode($apiEntrada), 'DELETE');
	}


	
	header('Location: ../configuracao?stab=categorias');
}

?>