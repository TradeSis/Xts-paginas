<?php
include_once __DIR__ . "/../conexao.php";

function buscaReceitasSlug($slug)
{

	$post = array();

	$apiEntrada = array(
		'slug' => $slug,
	);
	$post = chamaAPI(null, '/paginas/receitas_slug', json_encode($apiEntrada), 'GET');

	return $post;
}

function buscaReceitas($idReceita = null)
{

	$receitas = array();

	$apiEntrada = array(
		'idReceita' => $idReceita,
	);

	$receitas = chamaAPI(null, '/paginas/receitas', json_encode($apiEntrada), 'GET');
	return $receitas;
}

if (isset($_GET['operacao'])) {

	$operacao = $_GET['operacao'];

	if ($operacao == "inserir") {

		$imgReceita = $_FILES['imgReceita'];
		if ($imgReceita !== null) {
			preg_match("/\.(png|jpg|jpeg|svg){1}$/i", $imgReceita["name"], $ext);

			if ($ext == true) {
				$pasta = ROOT . "/img/";
				$novoNomeImg = $_POST['nomeReceita'] . "_" . $imgReceita["name"];
				$path = 'http://' . $_SERVER["HTTP_HOST"] . '/img/' . $novoNomeImg;
				move_uploaded_file($imgReceita['tmp_name'], $pasta . $novoNomeImg);
			} else {
				$novoNomeImg = "Sem_imagem";
			}
		}

		$apiEntrada = array(
			'slug' => $_POST['slug'],
			'nomeReceita' => $_POST['nomeReceita'],
			'conteudoReceita' => $_POST['conteudoReceita'],
			'autorReceita' => $_POST['autorReceita'],
			'imgReceita' => $path,

		);
		$receitas = chamaAPI(null, '/paginas/receitas', json_encode($apiEntrada), 'PUT');
	}

	$operacao = $_GET['operacao'];

	if ($operacao == "alterar") {

		$imgReceita = $_FILES['imgReceita'];
		if ($imgReceita !== null) {
			preg_match("/\.(png|jpg|jpeg|svg){1}$/i", $imgReceita["name"], $ext);

			if ($ext == true) {
				$pasta = ROOT . "/img/";
				$novoNomeImg = $_POST['nomeReceita'] . "_" . $imgReceita["name"];
				$path = 'http://' . $_SERVER["HTTP_HOST"] . '/img/' . $novoNomeImg;
				move_uploaded_file($imgReceita['tmp_name'], $pasta . $novoNomeImg);
			} else {
				$novoNomeBanner = "Sem_imagem";
			}
		}
		$apiEntrada = array(

			'idReceita' => $_POST['idReceita'],
			'nomeReceita' => $_POST['nomeReceita'],
			'conteudoReceita' => $_POST['conteudoReceita'],
			'autorReceita' => $_POST['autorReceita'],
			'imgReceita' => $path,
		);



		$receitas = chamaAPI(null, '/paginas/receitas', json_encode($apiEntrada), 'POST');
	}




	if ($operacao == "excluir") {

		$apiEntrada = array(
			'idReceita' => $_POST['idReceita'],
		);

		if (!empty($_POST['imgReceita'])) {
			$pasta = ROOT . "/img/";
			$imagem = $pasta . $_POST['imgReceita'];

			if (file_exists($imagem)) {
				unlink($imagem);
			}
		}

		$receitas = chamaAPI(null, '/paginas/receitas', json_encode($apiEntrada), 'DELETE');
	}


	header('Location: ../blog/receitas.php');
}
