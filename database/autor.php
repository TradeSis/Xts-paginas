<?php
include_once __DIR__ . "/../conexao.php";



function buscaAutor($idAutor=null)
{
	
	$autor = array();
	
	$apiEntrada = array(
		'idAutor' => $idAutor,
	);

	$autor = chamaAPI(null, '/paginas/autor', json_encode($apiEntrada), 'GET');
	return $autor;
}

function buscaAutorCard($idAutor=null)
{
	
	$autor = array();

	$apiEntrada = array(
		'idAutor' => $idAutor,
	);

	$autor = chamaAPI(null, '/paginas/autor_card', json_encode($apiEntrada), 'GET');
	return $autor;
}

if (isset($_GET['operacao'])) {

	$operacao = $_GET['operacao'];

    if ($operacao=="inserir") {

		$fotoAutor = $_FILES['fotoAutor'];

		if($fotoAutor !== null) {
			preg_match("/\.(png|jpg|jpeg|svg){1}$/i", $fotoAutor["name"],$ext);
		
			if($ext == true) {
				$pasta = ROOT . "/img/";
				$novoNomeFoto = $_POST['nomeAutor']. "_" .$fotoAutor["name"];
				$pathFoto = 'http://' . $_SERVER["HTTP_HOST"] .'/img/' . $novoNomeFoto;
				move_uploaded_file($fotoAutor['tmp_name'], $pasta.$novoNomeFoto);
		
			}else{
				$novoNomeFoto = "Sem_imagem";
			}
	
		}

		$bannerAutor = $_FILES['bannerAutor'];

		if($bannerAutor !== null) {
			preg_match("/\.(png|jpg|jpeg|svg){1}$/i", $bannerAutor["name"],$ext);
		
			if($ext == true) {
				$pasta = ROOT . "/img/";
				$novoNomeBanner = $_POST['nomeAutor']. "_" .$bannerAutor["name"];
				$pathBanner = 'http://' . $_SERVER["HTTP_HOST"] .'/img/' . $novoNomeBanner;
				move_uploaded_file($bannerAutor['tmp_name'], $pasta.$novoNomeBanner);
		
			}else{
				$novoNomeBanner = "Sem_imagem";
			}
	
		}

		$apiEntrada = array(
			'nomeAutor' => $_POST['nomeAutor'],
            'fotoAutor' => $pathFoto,
            'bannerAutor' => $pathBanner,
			'sobreMimAutor' => $_POST['sobreMimAutor'],
			
		);
	
		$autor = chamaAPI(null, '/paginas/autor', json_encode($apiEntrada), 'PUT');
		
	}

	if ($operacao=="alterar") {

		$fotoAutor = $_FILES['fotoAutor'];
			
		if($fotoAutor !== null) {
			preg_match("/\.(png|jpg|jpeg|svg){1}$/i", $fotoAutor["name"],$ext);
		
			if($ext == true) {
				$pasta = ROOT . "/img/";
				$novoNomeFoto = $_POST['nomeAutor']. "_" .$fotoAutor["name"];
				$pathFoto = 'http://' . $_SERVER["HTTP_HOST"] .'/img/' . $novoNomeFoto;
				move_uploaded_file($fotoAutor['tmp_name'], $pasta.$novoNomeFoto);
		
			}else{
				$novoNomeFoto = "Sem_imagem";
			}
	
		}

		$bannerAutor = $_FILES['bannerAutor'];

		if($bannerAutor !== null) {
			preg_match("/\.(png|jpg|jpeg|svg){1}$/i", $bannerAutor["name"],$ext);
		
			if($ext == true) {
				$pasta = ROOT . "/img/";
				$novoNomeBanner = $_POST['nomeEvento']. "_" .$bannerAutor["name"];
				$pathBanner = 'http://' . $_SERVER["HTTP_HOST"] .'/img/' . $novoNomeBanner;
				move_uploaded_file($bannerAutor['tmp_name'], $pasta.$novoNomeBanner);
		
			}else{
				$novoNomeBanner = "Sem_imagem";
			}
	
		}

		$apiEntrada = array(
			'idAutor' => $_POST['idAutor'],
			'nomeAutor' => $_POST['nomeAutor'],
            'fotoAutor' => $pathFoto,
            'bannerAutor' => $pathBanner,
			'sobreMimAutor' => $_POST['sobreMimAutor'],
		);
		$autor = chamaAPI(null, '/paginas/autor', json_encode($apiEntrada), 'POST');
		
	}

	
	if ($operacao=="excluir") {

		$apiEntrada = array(
			
			'idAutor' => $_POST['idAutor'],
		);

		if(!empty($_POST['fotoAutor'])){
			$pasta = ROOT . "/img/";
			$imagem = $pasta . $_POST['fotoAutor'];
			
			if(file_exists($imagem)){
				unlink($imagem);
			}

		}

		if(!empty($_POST['bannerAutor'])){
			$pasta = ROOT . "/img/";
			$imagem2 = $pasta . $_POST['bannerAutor'];
			
			if(file_exists($imagem2)){
				unlink($imagem2);
			}

		}

		$autor = chamaAPI(null, '/paginas/autor', json_encode($apiEntrada), 'DELETE');
	}


	//header('Location: ../cadastros/autor.php');	
	header('Location: ../configuracao?stab=autor');
	
}

?>