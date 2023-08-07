<?php
include_once __DIR__ . "/../conexao.php";

function buscaMarcasSlug($slug)
{
	
	$marcas = array();
	
	$idEmpresa = null;
	if (isset($_SESSION['idEmpresa'])) {
    	$idEmpresa = $_SESSION['idEmpresa'];
	}

	$apiEntrada = array(
		'slug' => $slug,
		'idEmpresa' => $idEmpresa
	);

	$marcas = chamaAPI(null,  URLROOT.'/cadastros/marcas', json_encode($apiEntrada), 'GET');

	return $marcas;
}

function buscaMarcas($idMarca=null)
{
	
	$marcas = array();
	
	$idEmpresa = null;
	if (isset($_SESSION['idEmpresa'])) {
    	$idEmpresa = $_SESSION['idEmpresa'];
	}
	
	$apiEntrada = array(
		'idMarca' => $idMarca,
		'idEmpresa' => $idEmpresa
	);

	$marcas = chamaAPI(null, URLROOT.'/cadastros/marcas', json_encode($apiEntrada), 'GET');

	return $marcas;
}

function buscaMarcasAtiva($estado=null, $lojasEspecializadas=null)
{
	
	$marcas = array();

	$idEmpresa = null;
	if (isset($_SESSION['idEmpresa'])) {
    	$idEmpresa = $_SESSION['idEmpresa'];
	}
	
	$apiEntrada = array(
		'estado' => $estado,
		'lojasEspecializadas' => $lojasEspecializadas,
		'idEmpresa' => $idEmpresa
	);

	$marcas = chamaAPI(null, URLROOT.'/cadastros/marcas', json_encode($apiEntrada), 'GET');
	return $marcas;
}


if (isset($_GET['operacao'])) {

	$operacao = $_GET['operacao'];

    if ($operacao=="inserir") {

		$imgMarca = $_FILES['imgMarca'];

		if($imgMarca !== null) {
			preg_match("/\.(png|jpg|jpeg|svg){1}$/i", $imgMarca["name"],$ext);
		
			if($ext == true) {
				$pasta = ROOT . "/img/";
				$novoNomeImg = $_POST['nomeMarca']. "_" .$imgMarca["name"];
				
				move_uploaded_file($imgMarca['tmp_name'], $pasta.$novoNomeImg);
		
			}else{
				$novoNomeImg = "Sem_imagem";
			}
	
		}

		$bannerMarca = $_FILES['bannerMarca'];

		if($bannerMarca !== null) {
			preg_match("/\.(png|jpg|jpeg|svg){1}$/i", $bannerMarca["name"],$ext);
		
			if($ext == true) {
				$pasta = ROOT . "/img/";
				$novoNomeBanner = $_POST['nomeMarca']. "_" .$bannerMarca["name"];
				
				move_uploaded_file($bannerMarca['tmp_name'], $pasta.$novoNomeBanner);
		
			}else{
				$novoNomeBanner = "Sem_imagem";
			}
	
		}

		$apiEntrada = array(
			'idEmpresa' =>  $_SESSION['idEmpresa'],
			'slug' => $_POST['slug'],
			'nomeMarca' => $_POST['nomeMarca'],
            'imgMarca' => $novoNomeImg,
            'bannerMarca' => $novoNomeBanner,
			'descricaoMarca' => $_POST['descricaoMarca'],
			'cidadeMarca' => $_POST['cidadeMarca'],
			'estado' => $_POST['estado'],
			'urlMarca' => $_POST['urlMarca'],
			'ativoMarca' => $_POST['ativoMarca'],
			'catalogo' => $_POST['catalogo'],
			'lojasEspecializadas' => $_POST['lojasEspecializadas'],
			
		);/* 
		echo json_encode($apiEntrada);
		return; */
		$marca = chamaAPI(null, '/paginas/marcas', json_encode($apiEntrada), 'PUT');
		
	}

	$operacao = $_GET['operacao'];

    if ($operacao=="alterar") {

		$imgMarca = $_FILES['imgMarca'];

		if($imgMarca !== null) {
			preg_match("/\.(png|jpg|jpeg|svg){1}$/i", $imgMarca["name"],$ext);
		
			if($ext == true) {
				$pasta = ROOT . "/img/";
				$novoNomeImg = $_POST['nomeMarca']. "_" .$imgMarca["name"];
				
				move_uploaded_file($imgMarca['tmp_name'], $pasta.$novoNomeImg);
		
			}
			$apiEntrada = array(
				'idEmpresa' =>  $_SESSION['idEmpresa'],
				'idMarca' => $_POST['idMarca'],
				'nomeMarca' => $_POST['nomeMarca'],
				'imgMarca' => $novoNomeImg,
				'descricaoMarca' => $_POST['descricaoMarca'],
				'cidadeMarca' => $_POST['cidadeMarca'],
				'estado' => $_POST['estado'],
				'urlMarca' => $_POST['urlMarca'],
				'ativoMarca' => $_POST['ativoMarca'],
				'catalogo' => $_POST['catalogo'],
				'lojasEspecializadas' => $_POST['lojasEspecializadas'],
				
			);
	
		}else{
			$apiEntrada = array(
				'idEmpresa' =>  $_SESSION['idEmpresa'],
				'idMarca' => $_POST['idMarca'],
				'nomeMarca' => $_POST['nomeMarca'],
				'descricaoMarca' => $_POST['descricaoMarca'],
				'cidadeMarca' => $_POST['cidadeMarca'],
				'estado' => $_POST['estado'],
				'urlMarca' => $_POST['urlMarca'],
				'ativoMarca' => $_POST['ativoMarca'],
				'catalogo' => $_POST['catalogo'],
				'lojasEspecializadas' => $_POST['lojasEspecializadas'],
				
			);
		}

		$marca = chamaAPI(null, '/paginas/marcas', json_encode($apiEntrada), 'POST');
		
	}

	

	
	if ($operacao=="excluir") {

		$apiEntrada = array(
			'idEmpresa' =>  $_SESSION['idEmpresa'],
			'idMarca' => $_POST['idMarca'],
		);

		if(!empty($_POST['imgMarca'])){
			$pasta = ROOT . "/img/";
			$imagem = $pasta . $_POST['imgMarca'];
			
			if(file_exists($imagem)){
				unlink($imagem);
			}

		}

		if(!empty($_POST['bannerMarca'])){
			$pasta = ROOT . "/img/";
			$imagem2 = $pasta . $_POST['bannerMarca'];
			
			if(file_exists($imagem2)){
				unlink($imagem2);
			}

		}

		$marca = chamaAPI(null, '/paginas/marcas', json_encode($apiEntrada), 'DELETE');
	}


	header('Location: ../blog/marcas.php');	
	
}

?>