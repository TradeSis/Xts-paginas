<?php
include_once __DIR__ . "/../conexao.php";

function buscaSecao($idSecao=null)
{
	
	$secao = array();
	
	$idCliente = null;
	if (isset($_SESSION['idCliente'])) {
    	$idCliente = $_SESSION['idCliente'];
	}

	$apiEntrada = array(
		'idSecao' => $idSecao,
		'idCliente' => $idCliente,
	);
	/* echo "-ENTRADA->".json_encode($apiEntrada)."\n";
	return; */
	$secao = chamaAPI(null, '/paginas/secoes', json_encode($apiEntrada), 'GET');
	//echo json_encode($secao);
	return $secao;
}

function buscaTipoSecao($tipoSecao=null)
{
	
	$secao = array();
	//echo json_encode($secao);
	//return;
	$apiEntrada = array(
		'tipoSecao' => $tipoSecao,
	);
	/* echo "-ENTRADA->".json_encode($apiEntrada)."\n";
	return; */
	$secao = chamaAPI(null, '/paginas/secoes_tipoSecao', json_encode($apiEntrada), 'GET');
	//echo json_encode($secao);
	return $secao;
}


if (isset($_GET['operacao'])) {

	$operacao = $_GET['operacao'];

    if ($operacao=="inserir") {
		$apiEntrada = array(
			'tituloSecao' => $_POST['tituloSecao'],
			'arquivoFonte' => $_POST['arquivoFonte'],
			'tipoSecao' => $_POST['tipoSecao'],
			
		);
		$secao = chamaAPI(null, '/paginas/secoes', json_encode($apiEntrada), 'PUT');
		
	}

	if ($operacao=="alterar") {
		$apiEntrada = array(
            'idSecao' => $_POST['idSecao'],
			'tituloSecao' => $_POST['tituloSecao'],
			'arquivoFonte' => $_POST['arquivoFonte'],
			'tipoSecao' => $_POST['tipoSecao'],
		);

		$secao = chamaAPI(null, '/paginas/secoes', json_encode($apiEntrada), 'POST');
		
	}

	
	
	if ($operacao=="excluir") {
		$apiEntrada = array(
			'idSecao' => $_POST['idSecao'],
		);
		/* echo json_encode($apiEntrada);
		return; */
		$secao = chamaAPI(null, '/paginas/secoes', json_encode($apiEntrada), 'DELETE');
	}

	
	header('Location: ../configuracao?stab=secao');
}

?>