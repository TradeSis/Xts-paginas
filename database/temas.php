<?php
include_once __DIR__ . "/../conexao.php";

function buscaTemas($idTema = null)
{
	$temas = array();

	$idEmpresa = null;
	if (isset($_SESSION['idEmpresa'])) {
		$idEmpresa = $_SESSION['idEmpresa'];
	}

	$apiEntrada = array(
		'idTema' => $idTema,
		'idEmpresa' => $idEmpresa,
	);

	$temas = chamaAPI(null, '/paginas/temas', json_encode($apiEntrada), 'GET');
	return $temas;
}

function buscaTema()
{

	$tema = array();

	$idEmpresa = null;
	if (isset($_SESSION['idEmpresa'])) {
		$idEmpresa = $_SESSION['idEmpresa'];
	}

	$conexao = conectaMysql(1);

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
		$imgPerfil = $_FILES['imgPerfil'];
		if ($imgPerfil !== null) {
			preg_match("/\.(png|jpg|jpeg){1}$/i", $imgPerfil["name"], $ext);
			if ($ext == true) {
				$pasta = ROOT . "/img/";
				$novoImgPerfil = $imgPerfil["name"];

				move_uploaded_file($imgPerfil['tmp_name'], $pasta . $novoImgPerfil);
			} else {
				$novoImgPerfil = "Sem_imagem";
			}
		}
		$perfil = array(
			'nome' => $_POST['nome'],
			'imgPerfil' => $novoImgPerfil,
			'endereco' => $_POST['endereco'],
			'numero' => $_POST['numero'],
			'bairro' => $_POST['bairro'],
			'cep' => $_POST['cep'],
			'cidade' => $_POST['cidade'],
			'estado' => $_POST['estado'],
			'email' => $_POST['email'],
			'whatsapp' => $_POST['whatsapp'],
			'twitter' => $_POST['twitter'],
			'facebook' => $_POST['facebook'],
			'instagram' => $_POST['instagram'],
		);

		$apiEntrada = array(
			'idEmpresa' =>  $_POST['idEmpresa'],
			'idTema' => $_POST['idTema'],
			'nomeTema' => $_POST['nomeTema'],
			'css' => $_POST['css'],
			'ativo' => $_POST['ativo'],
			'menu' => $_POST['menu'],
			'perfil' => json_encode($perfil),
		);
		$tema = chamaAPI(null, '/paginas/temas', json_encode($apiEntrada), 'POST');
	}


	if ($operacao == "padrao2") {
		$imgPerfil = $_FILES['imgPerfil'];
		if ($imgPerfil !== null) {
			preg_match("/\.(png|jpg|jpeg){1}$/i", $imgPerfil["name"], $ext);
			if ($ext == true) {
				$pasta = ROOT . "/img/";
				$novoImgPerfil = $imgPerfil["name"];

				move_uploaded_file($imgPerfil['tmp_name'], $pasta . $novoImgPerfil);
			} else {
				$novoImgPerfil = "Sem_imagem";
			}
		}
		$perfil = array(
			'nome' => $_POST['nome'],
			'imgPerfil' => $novoImgPerfil,
			'endereco' => $_POST['endereco'],
			'numero' => $_POST['numero'],
			'bairro' => $_POST['bairro'],
			'cep' => $_POST['cep'],
			'cidade' => $_POST['cidade'],
			'estado' => $_POST['estado'],
			'email' => $_POST['email'],
			'whatsapp' => $_POST['whatsapp'],
			'twitter' => $_POST['twitter'],
			'facebook' => $_POST['facebook'],
			'instagram' => $_POST['instagram'],
		);

		$apiEntrada = array(
			'idEmpresa' =>  $_POST['idEmpresa'],
			'idTema' => $_POST['idTema'],
			'nomeTema' => $_POST['nomeTema'],
			'css' => $_POST['css'],
			'ativo' => $_POST['ativo'],
			'menu' => $_POST['menu'],
			'perfil' => json_encode($perfil),
		);
		$tema = chamaAPI(null, '/paginas/temas', json_encode($apiEntrada), 'POST');
	}


	if ($operacao == "padrao3") {
		$imgPerfil = $_FILES['imgPerfil'];
		if ($imgPerfil !== null) {
			preg_match("/\.(png|jpg|jpeg){1}$/i", $imgPerfil["name"], $ext);
			if ($ext == true) {
				$pasta = ROOT . "/img/";
				$novoImgPerfil = $imgPerfil["name"];

				move_uploaded_file($imgPerfil['tmp_name'], $pasta . $novoImgPerfil);
			} else {
				$novoImgPerfil = "Sem_imagem";
			}
		}
		$perfil = array(
			'nome' => $_POST['nome'],
			'imgPerfil' => $novoImgPerfil,
			'endereco' => $_POST['endereco'],
			'numero' => $_POST['numero'],
			'bairro' => $_POST['bairro'],
			'cep' => $_POST['cep'],
			'cidade' => $_POST['cidade'],
			'estado' => $_POST['estado'],
			'email' => $_POST['email'],
			'whatsapp' => $_POST['whatsapp'],
			'twitter' => $_POST['twitter'],
			'facebook' => $_POST['facebook'],
			'instagram' => $_POST['instagram'],
		);

		$apiEntrada = array(
			'idEmpresa' =>  $_POST['idEmpresa'],
			'idTema' => $_POST['idTema'],
			'nomeTema' => $_POST['nomeTema'],
			'css' => $_POST['css'],
			'ativo' => $_POST['ativo'],
			'menu' => $_POST['menu'],
			'perfil' => json_encode($perfil),
		);
		$tema = chamaAPI(null, '/paginas/temas', json_encode($apiEntrada), 'POST');
	}

	if ($operacao == "inserir") {

		$apiEntrada = array(
			'idEmpresa' =>  $_POST['idEmpresa'],
			'nomeTema' => $_POST['nomeTema'],
			'css' => $_POST['css'],
			'ativo' => $_POST['ativo'],
			'menu' => $_POST['menu'],
			'perfil' => $_POST['perfil'],

		);
		$tema = chamaAPI(null, '/paginas/temas', json_encode($apiEntrada), 'PUT');
	}

	if ($operacao == "alterar") {
		$apiEntrada = array(
			'idEmpresa' =>  $_POST['idEmpresa'],
			'idTema' => $_POST['idTema'],
			'nomeTema' => $_POST['nomeTema'],
			'css' => $_POST['css'],
			'ativo' => $_POST['ativo'],
			'menu' => $_POST['menu'],
			'perfil' => $_POST['perfil'],
		);
		/* echo json_encode($apiEntrada);
		return; */
		$tema = chamaAPI(null, '/paginas/temas', json_encode($apiEntrada), 'POST');
	}



	if ($operacao == "excluir") {
		$apiEntrada = array(
			'idEmpresa' =>  $_POST['idEmpresa'],
			'idTema' => $_POST['idTema'],
		);
		$tema = chamaAPI(null, '/paginas/temas', json_encode($apiEntrada), 'DELETE');
	}


	//header('Location: ../paginas/configuracao/temas.php');
	header('Location: ../configuracao?stab=temas');
}
