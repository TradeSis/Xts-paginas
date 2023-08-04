<?php
include_once __DIR__ . "/../conexao.php";


function buscaCategorias($idCategoria=null)
{
	
	$categorias = array();
	
	$idEmpresa = null;
	if (isset($_SESSION['idEmpresa'])) {
    	$idEmpresa = $_SESSION['idEmpresa'];
	}

	$apiEntrada = array(
		'idCategoria' => $idCategoria,
		'idEmpresa' => $idEmpresa,
	);

	$categorias = chamaAPI(null, '/paginas/categorias', json_encode($apiEntrada), 'GET');
	return $categorias;
}

if (isset($_GET['operacao'])) {

	$operacao = $_GET['operacao'];

    if ($operacao=="inserir") {

		$apiEntrada = array(
			'idEmpresa' =>  $_POST['idEmpresa'],
			'nomeCategoria' => $_POST['nomeCategoria'],	
		);
		$categorias = chamaAPI(null, '/paginas/categorias', json_encode($apiEntrada), 'PUT');
		
	}

	$operacao = $_GET['operacao'];

    if ($operacao=="alterar") {

		$apiEntrada = array(
			'idEmpresa' =>  $_POST['idEmpresa'],
			'idCategoria' => $_POST['idCategoria'],
			'nomeCategoria' => $_POST['nomeCategoria'],
			
		);
		$categorias = chamaAPI(null, '/paginas/categorias', json_encode($apiEntrada), 'POST');
		
	}
	
	if ($operacao=="excluir") {

		$apiEntrada = array(
			'idEmpresa' =>  $_POST['idEmpresa'],
			'idCategoria' => $_POST['idCategoria'],
		);

		$categorias = chamaAPI(null, '/paginas/categorias', json_encode($apiEntrada), 'DELETE');
	}


	
	header('Location: ../configuracao?stab=categorias');
}

?>