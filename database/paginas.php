<?php
include_once __DIR__ . "/../conexao.php";


function buscaPagina($slug)
{

	$pagina = array();

	$idEmpresa = null;
	if (isset($_SESSION['idEmpresa'])) {
    	$idEmpresa = $_SESSION['idEmpresa'];
	}

	$apiEntrada = array(
		'slug' => $slug,
		'idEmpresa' => $idEmpresa,
	);
	$pagina = chamaAPI(null, '/paginas/paginas_slug', json_encode($apiEntrada), 'GET');

	return $pagina;
}

function buscaPaginas($idPagina = null, $idTema = null)
{
	$pagina = array();

	$idEmpresa = null;
	if (isset($_SESSION['idEmpresa'])) {
    	$idEmpresa = $_SESSION['idEmpresa'];
	}

	$apiEntrada = array(
		'idPagina' => $idPagina,
		'idTema' => $idTema,
		'idEmpresa' => $idEmpresa,
	);
	$pagina = chamaAPI(null, '/paginas/paginas', json_encode($apiEntrada), 'GET');

	return $pagina;
}

if (isset($_GET['operacao'])) {

	$operacao = $_GET['operacao'];

	if ($operacao == "inserir") {

		$apiEntrada = array(
			'idEmpresa' =>  $_SESSION['idEmpresa'],
			'slug' => $_POST['slug'],
			'tituloPagina' => $_POST['tituloPagina'],
			'arquivoFonte' => $_POST['arquivoFonte'],
			'arquivoSingle' => $_POST['arquivoSingle'],
			'idTema' => $_POST['idTema'],
		);
		$pagina = chamaAPI(null, '/paginas/paginas', json_encode($apiEntrada), 'PUT');
	}

	if ($operacao == "alterar") {

		$apiEntrada = array(
			'idEmpresa' =>  $_SESSION['idEmpresa'],
			'idPagina' => $_POST['idPagina'],
			'tituloPagina' => $_POST['tituloPagina'],
			'arquivoFonte' => $_POST['arquivoFonte'],
			'arquivoSingle' => $_POST['arquivoSingle'],
		);

		$pagina = chamaAPI(null, '/paginas/paginas', json_encode($apiEntrada), 'POST');
	}

	if ($operacao == "excluir") {
		$apiEntrada = array(
			'idEmpresa' =>  $_SESSION['idEmpresa'],
			'idPagina' => $_POST['idPagina']
		);

		$pagina = chamaAPI(null, '/paginas/paginas', json_encode($apiEntrada), 'DELETE');
	}



	header('Location: ../configuracao?stab=paginas');
}
