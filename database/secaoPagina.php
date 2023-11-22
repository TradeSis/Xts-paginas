<?php
include_once __DIR__ . "/../conexao.php";

function buscaSecaoPagina($idPagina)
{

	$secoesPagina = array();

	$apiEntrada = array(
		'idPagina' => $idPagina,
	);
	$secoesPagina = chamaAPI(null, '/paginas/secoesPagina_individual', json_encode($apiEntrada), 'GET');
	return $secoesPagina;
}

function buscaSecaoPaginas($idSecaoPagina = null, $idPagina = null)
{

	$secoesPagina = array();

	$apiEntrada = array(
		'idSecaoPagina' => $idSecaoPagina,
		'idPagina' => $idPagina,
	);

	$secoesPagina = chamaAPI(null, '/paginas/secoesPagina', json_encode($apiEntrada), 'GET');
	return $secoesPagina;
}


if (isset($_GET['operacao'])) {

	$operacao = $_GET['operacao'];

	if ($operacao == "inserir") {

		$apiEntrada = array(

			'idPagina' => $_POST['idPagina'],
			'idSecao' => $_POST['idSecao'],
			'ordem' => $_POST['ordem']

		);

		$secoesPagina = chamaAPI(null, '/paginas/secoesPagina', json_encode($apiEntrada), 'PUT');
		header('Location: ../configuracao/paginas_alterar.php?idPagina=' . $_POST['idPagina']);

	}

	if ($operacao == "excluir") {
		$apiEntrada = array(
		
			'idSecaoPagina' => $_POST['idSecaoPagina'],
		);

		$secoesPagina = chamaAPI(null, '/paginas/secoesPagina', json_encode($apiEntrada), 'DELETE');
		header('Location: ../configuracao/paginas_alterar.php?idPagina=' . $_POST['idPagina']);


	}

	if ($operacao == "alterar") {

		// Todo o POST vai para apiEntrada
		$apiEntrada = $_POST;

		$arquivos = array();
		$imagens  = array();

		// Rotina que Salva em img, e devolve FILES em Arquivo e URL
		$arquivos = salvaimagemurl($_FILES);
		
		foreach ($arquivos as $imagens) {
			foreach ($imagens as $nomeCampo => $nomeArquivo) {
				// Coloca no nome dos arquivos de imagens, o nome URL
				$apiEntrada[$nomeCampo] = $nomeArquivo;
			}
		}

		$secoesPagina = chamaAPI(null, '/paginas/secoesPagina', json_encode($apiEntrada), 'POST');
		header('Location: ../configuracao/paginas_alterar.php?idPagina=' . $_POST['idPagina']);
	}


	//header("Location: ../perfil/paginas.php");

}
