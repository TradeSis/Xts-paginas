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
			'ordem' => $_POST['ordem'],
			'parametros' => $_POST['parametros'],

		);

		$secoesPagina = chamaAPI(null, '/paginas/secoesPagina', json_encode($apiEntrada), 'PUT');
		header('Location: ../configuracao/paginas_alterar.php?idPagina=' . $_POST['idPagina']);

	}

	if ($operacao == "excluir") {
		$apiEntrada = array(
			'idPagina' => $_POST['idPagina'],
			'idSecaoPagina' => $_POST['idSecaoPagina'],
		);

		$secoesPagina = chamaAPI(null, '/paginas/secoesPagina', json_encode($apiEntrada), 'DELETE');
		header('Location: ../configuracao/paginas_alterar.php?idPagina=' . $_POST['idPagina']);


	}

	if ($operacao == "alterar") {

		if (isset($_GET['acao'])) {

			$acao = $_GET['acao'];
			$parametros1 = null;
			// cardImg3col
			if ($acao == "cardImg3col") {
				$img1 = $_FILES['img1'];
				if ($img1 !== null) {
					preg_match("/\.(png|jpg|jpeg|svg){1}$/i", $img1["name"], $ext);

					if ($ext == true) {
						$pasta = ROOT . "/img/";
						$novoNomeImg1 = $img1["name"];

						move_uploaded_file($img1['tmp_name'], $pasta . $novoNomeImg1);
					} else {
						$novoNomeImg1 = "Sem_imagem";
					}
				}
				$img2 = $_FILES['img2'];
				if ($img2 !== null) {
					preg_match("/\.(png|jpg|jpeg|svg){1}$/i", $img2["name"], $ext);

					if ($ext == true) {
						$pasta = ROOT . "/img/";
						$novoNomeImg2 = $img2["name"];

						move_uploaded_file($img2['tmp_name'], $pasta . $novoNomeImg2);
					} else {
						$novoNomeImg2 = "Sem_imagem";
					}
				}
				$img3 = $_FILES['img3'];
				if ($img3 !== null) {
					preg_match("/\.(png|jpg|jpeg|svg){1}$/i", $img3["name"], $ext);

					if ($ext == true) {
						$pasta = ROOT . "/img/";
						$novoNomeImg3 = $img3["name"];

						move_uploaded_file($img3['tmp_name'], $pasta . $novoNomeImg3);
					} else {
						$novoNomeImg3 = "Sem_imagem";
					}
				}

				$parametros1 = array(
					'titulo' => $_POST['titulo'],
					'subTitulo' => $_POST['subTitulo'],
					'img1' => $novoNomeImg1,
					'link1' => $_POST['link1'],
					'img2' => $novoNomeImg2,
					'link2' => $_POST['link2'],
					'img3' => $novoNomeImg3,
					'link3' => $_POST['link3'],
				);
			}

			// cardImg5col
			if ($acao == "cardImg5col") {
				$img1 = $_FILES['img1'];
				if ($img1 !== null) {
					preg_match("/\.(png|jpg|jpeg|svg){1}$/i", $img1["name"], $ext);

					if ($ext == true) {
						$pasta = ROOT . "/img/";
						$novoNomeImg1 = $img1["name"];

						move_uploaded_file($img1['tmp_name'], $pasta . $novoNomeImg1);
					} else {
						$novoNomeImg1 = "Sem_imagem";
					}
				}
				$img2 = $_FILES['img2'];
				if ($img2 !== null) {
					preg_match("/\.(png|jpg|jpeg|svg){1}$/i", $img2["name"], $ext);

					if ($ext == true) {
						$pasta = ROOT . "/img/";
						$novoNomeImg2 = $img2["name"];

						move_uploaded_file($img2['tmp_name'], $pasta . $novoNomeImg2);
					} else {
						$novoNomeImg2 = "Sem_imagem";
					}
				}
				$img3 = $_FILES['img3'];
				if ($img3 !== null) {
					preg_match("/\.(png|jpg|jpeg|svg){1}$/i", $img3["name"], $ext);

					if ($ext == true) {
						$pasta = ROOT . "/img/";
						$novoNomeImg3 = $img3["name"];

						move_uploaded_file($img3['tmp_name'], $pasta . $novoNomeImg3);
					} else {
						$novoNomeImg3 = "Sem_imagem";
					}
				}

				$img4 = $_FILES['img4'];
				if ($img4 !== null) {
					preg_match("/\.(png|jpg|jpeg|svg){1}$/i", $img4["name"], $ext);

					if ($ext == true) {
						$pasta = ROOT . "/img/";
						$novoNomeImg4 = $img4["name"];

						move_uploaded_file($img4['tmp_name'], $pasta . $novoNomeImg4);
					} else {
						$novoNomeImg4 = "Sem_imagem";
					}
				}

				$img5 = $_FILES['img5'];
				if ($img5 !== null) {
					preg_match("/\.(png|jpg|jpeg|svg){1}$/i", $img5["name"], $ext);

					if ($ext == true) {
						$pasta = ROOT . "/img/";
						$novoNomeImg5 = $img5["name"];

						move_uploaded_file($img5['tmp_name'], $pasta . $novoNomeImg5);
					} else {
						$novoNomeImg5 = "Sem_imagem";
					}
				}

				$parametros1 = array(
					'titulo' => $_POST['titulo'],
					'img1' => $novoNomeImg1,
					'link1' => $_POST['link1'],
					'tituloCard1' => $_POST['tituloCard1'],
					'img2' => $novoNomeImg2,
					'link2' => $_POST['link2'],
					'tituloCard2' => $_POST['tituloCard2'],
					'img3' => $novoNomeImg3,
					'link3' => $_POST['link3'],
					'tituloCard3' => $_POST['tituloCard3'],
					'img4' => $novoNomeImg4,
					'link4' => $_POST['link4'],
					'tituloCard4' => $_POST['tituloCard4'],
					'img5' => $novoNomeImg5,
					'link5' => $_POST['link5'],
					'tituloCard5' => $_POST['tituloCard5'],
				);
			}

			// cardServicos2col
			if ($acao == "cardServicos2col") {
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
					'descricao' => $_POST['descricao'],
					'textoBotao' => $_POST['textoBotao'],
				);
			}

			// cardServicos3col
			if ($acao == "cardServicos3col") {
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
					'descricao' => $_POST['descricao'],
					'textoBotao' => $_POST['textoBotao'],
				);
			}

			// cardServicos3colBordaRedonda
			if ($acao == "cardServicos3colBordaRedonda") {
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
					'descricao' => $_POST['descricao'],
					'corCard' => $_POST['corCard'],
				);
			}

			// divisorListra
			if ($acao == "divisorListra") {
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
				);
			}

			// divisorListraComItens
			if ($acao == "divisorListraComItens") {
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
				);
			}

			// footer2col
			if ($acao == "footer2col") {
				$parametros1 = array(

					'texto1' => $_POST['texto1'],
					'texto2' => $_POST['texto2'],

				);
			}

			// footerImgFundo3col
			if ($acao == "footerImgFundo3col") {
				$img = $_FILES['img'];
				if ($img !== null) {
					preg_match("/\.(png|jpg|jpeg){1}$/i", $img["name"], $ext);

					if ($ext == true) {
						$pasta = ROOT . "/img/";
						$novoNomeImg = $img["name"];

						move_uploaded_file($img['tmp_name'], $pasta . $novoNomeImg);
					} else {
						$novoNomeImg = "Sem_imagem";
					}
				}
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
					'img' => $novoNomeImg,
					'tituloLinks' => $_POST['tituloLinks'],
					'nome1' => $_POST['nome1'],
					'href1' => $_POST['href1'],
					'nome2' => $_POST['nome2'],
					'href2' => $_POST['href2'],
					'nome3' => $_POST['nome3'],
					'href3' => $_POST['href3'],
					'tituloContato' => $_POST['tituloContato'],
					'textoEndereco' => $_POST['textoEndereco'],
					'textoWhatsapp' => $_POST['textoWhatsapp'],
					'textoEmail' => $_POST['textoEmail'],
					'textoFinal' => $_POST['textoFinal'],


				);
			}

			// footerlogo3col
			if ($acao == "footerlogo3col") {
				$logo = $_FILES['logo'];
				if ($logo !== null) {
					preg_match("/\.(png|jpg|jpeg){1}$/i", $logo["name"], $ext);

					if ($ext == true) {
						$pasta = ROOT . "/img/";
						$novoNomeLogo = $logo["name"];

						move_uploaded_file($logo['tmp_name'], $pasta . $novoNomeLogo);
					} else {
						$novoNomeLogo = "Sem_imagem";
					}
				}
				$parametros1 = array(
					'logo' => $novoNomeLogo,
					'tituloContato' => $_POST['tituloContato'],
					'textoWhatsapp' => $_POST['textoWhatsapp'],
					'textoEmail' => $_POST['textoEmail'],
					'tituloEndereco' => $_POST['tituloEndereco'],
					'textoEndereco' => $_POST['textoEndereco'],
					'textoBairro' => $_POST['textoBairro'],
					'textoCep' => $_POST['textoCep'],
					'textoCidade' => $_POST['textoCidade'],
					'textoRedesSociais' => $_POST['textoRedesSociais'],
				);
			}

			// listaProdutos5col
			if ($acao == "listaProdutos5col") {
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
				);
			}

			// listaServicos3col
			if ($acao == "listaServicos3col") {
				$parametros1 = array(

					'titulo' => $_POST['titulo'],
					'descricao' => $_POST['descricao'],
					'textoBotao' => $_POST['textoBotao'],

				);
			}

			// listaServicos4col
			if ($acao == "listaServicos4col") {
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
					'descricao' => $_POST['descricao'],
					'textoBotao' => $_POST['textoBotao'],
				);
			}

			// listaServicos4colHorizaontal
			if ($acao == "listaServicos4colHorizaontal") {
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
					'descricao' => $_POST['descricao'],
					'textoBotao' => $_POST['textoBotao'],
				);
			}

			// tituloPrincipal1col
			if ($acao == "tituloPrincipal1col") {
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
					'subTitulo' => $_POST['subTitulo'],
					'textoBotao' => $_POST['textoBotao'],
				);
			}

			// tituloPrincipal2col
			if ($acao == "tituloPrincipal2col") {
				$img = $_FILES['img'];
				if ($img !== null) {
					preg_match("/\.(png|jpg|jpeg){1}$/i", $img["name"], $ext);

					if ($ext == true) {
						$pasta = ROOT . "/img/";
						$novoNomeImg = $img["name"];

						move_uploaded_file($img['tmp_name'], $pasta . $novoNomeImg);
					} else {
						$novoNomeImg = "Sem_imagem";
					}
				}
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
					'subTitulo' => $_POST['subTitulo'],
					'textoBotao' => $_POST['textoBotao'],
					'img' => $novoNomeImg,
				);
			}

			// quemSomosSimples
			if ($acao == "quemSomosSimples") {
				$img = $_FILES['img'];
				if ($img !== null) {
					preg_match("/\.(png|jpg|jpeg){1}$/i", $img["name"], $ext);

					if ($ext == true) {
						$pasta = ROOT . "/img/";
						$novoNomeImg = $img["name"];

						move_uploaded_file($img['tmp_name'], $pasta . $novoNomeImg);
					} else {
						$novoNomeImg = "Sem_imagem";
					}
				}

				$parametros1 = array(
					'titulo' => $_POST['titulo'],
					'descricao' => $_POST['descricao'],
					'img' => $novoNomeImg,
				);
			}


			// quemSomosImg
			if ($acao == "quemSomosImg") {

				$img = $_FILES['img'];
				if ($img !== null) {
					preg_match("/\.(png|jpg|jpeg){1}$/i", $img["name"], $ext);

					if ($ext == true) {
						$pasta = ROOT . "/img/";
						$novoNomeImg = $img["name"];

						move_uploaded_file($img['tmp_name'], $pasta . $novoNomeImg);
					} else {
						$novoNomeImg = "Sem_imagem";
					}
				}

				$imgFundo = $_FILES['imgFundo'];
				if ($imgFundo !== null) {
					preg_match("/\.(png|jpg|jpeg){1}$/i", $imgFundo["name"], $ext);

					if ($ext == true) {
						$pasta = ROOT . "/img/";
						$novoNomeImgFundo = $imgFundo["name"];

						move_uploaded_file($imgFundo['tmp_name'], $pasta . $novoNomeImgFundo);
					} else {
						$novoNomeImgFundo = "Sem_imagem";
					}
				}

				$parametros1 = array(
					'titulo' => $_POST['titulo'],
					'descricao' => $_POST['descricao'],
					'imgFundo' => $novoNomeImgFundo,
					'img' => $novoNomeImg,
				);
			}

			// formContatoSimples
			if ($acao == "formContatoSimples") {
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
					'textoBotao' => $_POST['textoBotao'],
				);
			}


			// formContatoImg
			if ($acao == "formContatoImg") {
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
					'textoBotao' => $_POST['textoBotao'],
					'nomeImg' => $_POST['nomeImg'],
					'pastaImg' => $_POST['pastaImg'],
				);
			}

			// headerFaixaTopo
			if ($acao == "headerFaixaTopo") {

				$logo = $_FILES['logo'];
				if ($logo !== null) {
					preg_match("/\.(png|jpg|jpeg){1}$/i", $logo["name"], $ext);

					if ($ext == true) {
						$pasta = ROOT . "/img/";
						$novoNomeLogo = $logo["name"];

						move_uploaded_file($logo['tmp_name'], $pasta . $novoNomeLogo);
					} else {
						$novoNomeLogo = "Sem_imagem";
					}
				}

				$parametros1 = array(
					'textoWhatsapp' => $_POST['textoWhatsapp'],
					'textoEmail' => $_POST['textoEmail'],
					'logo' => $novoNomeLogo,
				);
			}

			// sobre_modelo1
			if ($acao == "sobre_modelo1") {

				$parametros1 = array(
					'titulo' => $_POST['titulo'],
					'descricao' => $_POST['descricao'],
				);
			}

			// header2linha
			if ($acao == "header2linha") {

				$logo = $_FILES['logo'];
				if ($logo !== null) {
					preg_match("/\.(png|jpg|jpeg){1}$/i", $logo["name"], $ext);

					if ($ext == true) {
						$pasta = ROOT . "/img/";
						$novoNomeLogo = $logo["name"];

						move_uploaded_file($logo['tmp_name'], $pasta . $novoNomeLogo);
					} else {
						$novoNomeLogo = "Sem_imagem";
					}
				}

				$parametros1 = array(
					'logo' => $novoNomeLogo,
				);
			}

			// slidePosts3col
			if ($acao == "slidePosts3col") {
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
					'subTitulo' => $_POST['subTitulo'],
				);
			}

			// listaReceitas
			if ($acao == "listaReceitas") {
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
				);
			}

			// cardEventos_modelo1
			if ($acao == "cardEventos_modelo1") {
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
					'tipoEvento' => $_POST['tipoEvento'],
					'qtdEvento' => $_POST['qtdEvento'],
				);
			}

			// cardEventos_modelo2
			if ($acao == "cardEventos_modelo2") {
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
					'tipoEvento' => $_POST['tipoEvento'],
					'qtdEvento' => $_POST['qtdEvento'],
				);
			}

			// cardEventos_modelo3
			if ($acao == "cardEventos_modelo3") {
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
					'tipoEvento' => $_POST['tipoEvento'],
					'qtdEvento' => $_POST['qtdEvento'],
				);
			}

			// listaMarcas
			if ($acao == "listaMarcas") {
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
					'lojasEspecializadas' => $_POST['lojasEspecializadas'],

				);
			}


			// cardNoticias
			if ($acao == "cardNoticias") {
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
					'categoria' => $_POST['categoria'],
					'qtdPosts' => $_POST['qtdPosts'],
				);
			}


			//PRINCIPAL
			if ($acao == "principal") {
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
					'subTitulo' => $_POST['subTitulo'],
					'textoBotao' => $_POST['textoBotao']
				);
			}

			//ANUNCIO
			if ($acao == "anuncio") {
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
					'textoBotao' => $_POST['textoBotao']
				);
			}


			//PRINCIPALIMG
			if ($acao == "principalIMG") {
				$img = $_FILES['principalIMG'];
				if ($img !== null) {
					preg_match("/\.(png|jpg|jpeg){1}$/i", $img["name"], $ext);

					if ($ext == true) {
						$pasta = ROOT . "/img/";
						$novoNomeImg = $img["name"];
						$path = 'http://' . $_SERVER["HTTP_HOST"] . '/img/' . $novoNomeImg;
						move_uploaded_file($img['tmp_name'], $pasta . $novoNomeImg);
					} else {
						$path = $_POST['img'];
					}
				}
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
					'subTitulo' => $_POST['subTitulo'],
					'textoBotao' => $_POST['textoBotao'],
					'principalIMG' => $path,
				);
			}


			//PRINCIPALBACKGROUND
			if ($acao == "principalBackground") {
				$img = $_FILES['principalIMG'];
				if ($img !== null) {
					preg_match("/\.(png|jpg|jpeg){1}$/i", $img["name"], $ext);

					if ($ext == true) {
						$pasta = ROOT . "/img/";
						$novoNomeImg = $img["name"];
						$path = 'http://' . $_SERVER["HTTP_HOST"] . '/img/' . $novoNomeImg;
						move_uploaded_file($img['tmp_name'], $pasta . $novoNomeImg);
					} else {
						$path = $_POST['img'];
					}
				}
				$bkg = $_FILES['principalBackground'];
				if ($bkg !== null) {
					preg_match("/\.(png|jpg|jpeg){1}$/i", $bkg["name"], $ext);

					if ($ext == true) {
						$pasta = ROOT . "/img/";
						$novoNomeBkg = $bkg["name"];
						$path2 = 'http://' . $_SERVER["HTTP_HOST"] . '/img/' . $novoNomeBkg;
						move_uploaded_file($bkg['tmp_name'], $pasta . $novoNomeBkg);
					} else {
						$path2 = $_POST['img2'];
					}
				}
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
					'subTitulo' => $_POST['subTitulo'],
					'textoBotao' => $_POST['textoBotao'],
					'principalIMG' => $path,
					'principalBackground' => $path2,
				);
			}


			//ANUNCIOBACKGROUND
			if ($acao == "anuncioBackground") {
				$img = $_FILES['anuncioIMG'];
				if ($img !== null) {
					preg_match("/\.(png|jpg|jpeg){1}$/i", $img["name"], $ext);

					if ($ext == true) {
						$pasta = ROOT . "/img/";
						$novoNomeImg = $img["name"];
						$path = 'http://' . $_SERVER["HTTP_HOST"] . '/img/' . $novoNomeImg;
						move_uploaded_file($img['tmp_name'], $pasta . $novoNomeImg);
					} else {
						$path = $_POST['img'];
					}
				}
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
					'subTitulo' => $_POST['subTitulo'],
					'textoBotao' => $_POST['textoBotao'],
					'anuncioIMG' => $path,
				);
			}


			//VIDEO
			if ($acao == "video") {
				$img = $_FILES['video'];
				if ($img !== null) {
					preg_match("/\.(png|jpg|mp4){1}$/i", $img["name"], $ext);

					if ($ext == true) {
						$pasta = ROOT . "/img/";
						$novoNomeImg = $img["name"];
						$path = 'http://' . $_SERVER["HTTP_HOST"] . '/img/' . $novoNomeImg;
						move_uploaded_file($img['tmp_name'], $pasta . $novoNomeImg);
					} else {
						$path = $_POST['img'];
					}
				}
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
					'subTitulo' => $_POST['subTitulo'],
					'video' => $path,
				);
			}


			//FOOTERIMG
			if ($acao == "footerIMG") {
				$img = $_FILES['logo'];
				if ($img !== null) {
					preg_match("/\.(png|jpg|jpeg){1}$/i", $img["name"], $ext);

					if ($ext == true) {
						$pasta = ROOT . "/img/";
						$novoNomeImg = $img["name"];
						$path = 'http://' . $_SERVER["HTTP_HOST"] . '/img/' . $novoNomeImg;
						move_uploaded_file($img['tmp_name'], $pasta . $novoNomeImg);
					} else {
						$path = $_POST['img'];
					}
				}
				$parametros1 = array(
					'tituloContato' => $_POST['tituloContato'],
					'textoWhatsapp' => $_POST['textoWhatsapp'],
					'textoEmail' => $_POST['textoEmail'],
					'tituloEndereco' => $_POST['tituloEndereco'],
					'textoEndereco' => $_POST['textoEndereco'],
					'textoBairro' => $_POST['textoBairro'],
					'textoCep' => $_POST['textoCep'],
					'textoCidade' => $_POST['textoCidade'],
					'textoRedesSociais' => $_POST['textoRedesSociais'],
					'logo' => $path,
				);
			}


			//header
			if ($acao == "header") {
				$img = $_FILES['logo'];
				if ($img !== null) {
					preg_match("/\.(png|jpg|jpeg){1}$/i", $img["name"], $ext);

					if ($ext == true) {
						$pasta = ROOT . "/img/";
						$novoNomeImg = $img["name"];
						$path = 'http://' . $_SERVER["HTTP_HOST"] . '/img/' . $novoNomeImg;
						move_uploaded_file($img['tmp_name'], $pasta . $novoNomeImg);
					} else {
						$path = $_POST['img'];
					}
				}
				$parametros1 = array(
					'logo' => $path,
				);
			}


			//TEXTOIMGDIREITA
			if ($acao == "textoIMGdireita") {
				$img = $_FILES['textoIMG'];
				if ($img !== null) {
					preg_match("/\.(png|jpg|jpeg){1}$/i", $img["name"], $ext);

					if ($ext == true) {
						$pasta = ROOT . "/img/";
						$novoNomeImg = $img["name"];
						$path = 'http://' . $_SERVER["HTTP_HOST"] . '/img/' . $novoNomeImg;
						move_uploaded_file($img['tmp_name'], $pasta . $novoNomeImg);
					} else {
						$path = $_POST['img'];
					}
				}
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
					'descricao' => $_POST['descricao'],
					'textoIMG' => $path,
				);
			}


			//TEXTOIMGESQUERDA
			if ($acao == "textoIMGesquerda") {
				$img = $_FILES['textoIMG'];
				if ($img !== null) {
					preg_match("/\.(png|jpg|jpeg){1}$/i", $img["name"], $ext);

					if ($ext == true) {
						$pasta = ROOT . "/img/";
						$novoNomeImg = $img["name"];
						$path = 'http://' . $_SERVER["HTTP_HOST"] . '/img/' . $novoNomeImg;
						move_uploaded_file($img['tmp_name'], $pasta . $novoNomeImg);
					} else {
						$path = $_POST['img'];
					}
				}
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
					'descricao' => $_POST['descricao'],
					'textoIMG' => $path,
				);
			}

			//sobre
			if ($acao == "sobre") {
				$img = $_FILES['textoIMG'];
				if ($img !== null) {
					preg_match("/\.(png|jpg|jpeg){1}$/i", $img["name"], $ext);

					if ($ext == true) {
						$pasta = ROOT . "/img/";
						$novoNomeImg = $img["name"];
						$path = 'http://' . $_SERVER["HTTP_HOST"] . '/img/' . $novoNomeImg;
						move_uploaded_file($img['tmp_name'], $pasta . $novoNomeImg);
					} else {
						$path = $_POST['img'];
					}
				}
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
					'subTitulo' => $_POST['subTitulo'],
					'descricao' => $_POST['descricao'],
					'textoIMG' => $path,
				);
			}


			//SLIDERPRODUTOS
			if ($acao == "sliderProdutos") {
				$img = $_FILES['logo'];
				if ($img !== null) {
					preg_match("/\.(png|jpg|jpeg){1}$/i", $img["name"], $ext);

					if ($ext == true) {
						$pasta = ROOT . "/img/";
						$novoNomeImg = $img["name"];
						$path = 'http://' . $_SERVER["HTTP_HOST"] . '/img/' . $novoNomeImg;
						move_uploaded_file($img['tmp_name'], $pasta . $novoNomeImg);
					} else {
						$path = $_POST['img'];
					}
				}
				$parametros1 = array(
					'logo' => $path,
				);
			}


			//CONTATO
			if ($acao == "contato") {
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
					'descricao' => $_POST['descricao'],
					'textoBotao' => $_POST['textoBotao']
				);
			}

			//servicos
			if ($acao == "servicos") {
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
					'descricao' => $_POST['descricao'],
					'textoBotao' => $_POST['textoBotao'],
					'tab1' => $_POST['tab1'],
					'tab2' => $_POST['tab2'],
					'tab3' => $_POST['tab3']
				);
			}

			//CONTATOIMG
			if ($acao == "contatoIMG") {
				$img = $_FILES['contatoIMG'];
				if ($img !== null) {
					preg_match("/\.(png|jpg|jpeg){1}$/i", $img["name"], $ext);

					if ($ext == true) {
						$pasta = ROOT . "/img/";
						$novoNomeImg = $img["name"];
						$path = 'http://' . $_SERVER["HTTP_HOST"] . '/img/' . $novoNomeImg;
						move_uploaded_file($img['tmp_name'], $pasta . $novoNomeImg);
					} else {
						$path = $_POST['img'];
					}
				}
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
					'textoBotao' => $_POST['textoBotao'],
					'contatoIMG' => $path,
				);
			}


			//CONTATOVIDEO
			if ($acao == "contatoVIDEO") {
				$img = $_FILES['video'];
				if ($img !== null) {
					preg_match("/\.(png|jpg|mp4){1}$/i", $img["name"], $ext);

					if ($ext == true) {
						$pasta = ROOT . "/img/";
						$novoNomeImg = $img["name"];
						$path = 'http://' . $_SERVER["HTTP_HOST"] . '/img/' . $novoNomeImg;
						move_uploaded_file($img['tmp_name'], $pasta . $novoNomeImg);
					} else {
						$path = $_POST['img'];
					}
				}
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
					'textoBotao' => $_POST['textoBotao'],
					'video' => $path,
				);
			}


			//CONTATOVIDEO
			if ($acao == "contatoVIDEO") {
				$img = $_FILES['video'];
				if ($img !== null) {
					preg_match("/\.(png|jpg|mp4){1}$/i", $img["name"], $ext);

					if ($ext == true) {
						$pasta = ROOT . "/img/";
						$novoNomeImg = $img["name"];
						$path = 'http://' . $_SERVER["HTTP_HOST"] . '/img/' . $novoNomeImg;
						move_uploaded_file($img['tmp_name'], $pasta . $novoNomeImg);
					} else {
						$path = $_POST['img'];
					}
				}
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
					'textoBotao' => $_POST['textoBotao'],
					'video' => $path,
				);
			}

			//menu
			if ($acao == "menu") {
				$img = $_FILES['logo'];
				if ($img !== null) {
					preg_match("/\.(png|jpg|jpeg){1}$/i", $img["name"], $ext);

					if ($ext == true) {
						$pasta = ROOT . "/img/";
						$novoNomeImg = $img["name"];
						$path = 'http://' . $_SERVER["HTTP_HOST"] . '/img/' . $novoNomeImg;
						move_uploaded_file($img['tmp_name'], $pasta . $novoNomeImg);
					} else {
						$path = $_POST['img'];
					}
				}
				$parametros1 = array(
					'menu1' => $_POST['menu1'],
					'menu2' => $_POST['menu2'],
					'menu3' => $_POST['menu3'],
					'menu4' => $_POST['menu4'],
					'textoBotao' => $_POST['textoBotao'],
					'menu1Href' => $_POST['menu1Href'],
					'menu2Href' => $_POST['menu2Href'],
					'menu3Href' => $_POST['menu3Href'],
					'menu4Href' => $_POST['menu4Href'],
					'textoBotaoHref' => $_POST['textoBotaoHref'],
					'logo' => $path,
				);
			}

			//headerTexto
			if ($acao == "headerTexto") {
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
					'whatsapp' => $_POST['whatsapp'],
					'email' => $_POST['email'],
				);
			}

			//footer
			if ($acao == "footer") {
				$parametros1 = array(
					'facebook' => $_POST['facebook'],
					'linkedin' => $_POST['linkedin'],
					'instagram' => $_POST['instagram'],
					'direitos' => $_POST['direitos'],
					'nomeEmpresa' => $_POST['nomeEmpresa'],
					'cnpj' => $_POST['cnpj'],
				);
			}

			//FORMCENTRALIZADO
			if ($acao == "formCentralizado") {
				$img = $_FILES['backgroundIMG'];
				if ($img !== null) {
					preg_match("/\.(png|jpg|jpeg){1}$/i", $img["name"], $ext);

					if ($ext == true) {
						$pasta = ROOT . "/img/";
						$novoNomeImg = $img["name"];
						$path = 'http://' . $_SERVER["HTTP_HOST"] . '/img/' . $novoNomeImg;
						move_uploaded_file($img['tmp_name'], $pasta . $novoNomeImg);
					} else {
						$path = $_POST['img'];
					}
				}
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
					'subTitulo' => $_POST['subTitulo'],
					'textoBotao' => $_POST['textoBotao'],
					'backgroundIMG' => $path
				);
			}

			//produtoCards
			if ($acao == "produtoCards") {
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
				);
			}

			//artigos
			if ($acao == "artigos") {
				$parametros1 = array(
					'titulo' => $_POST['titulo'],
				);
			}

			//textoDuploIMGesquerda
			if ($acao == "textoDuploIMGesquerda") {
				$img = $_FILES['textoIMG'];
				if ($img !== null) {
					preg_match("/\.(png|jpg|jpeg){1}$/i", $img["name"], $ext);

					if ($ext == true) {
						$pasta = ROOT . "/img/";
						$novoNomeImg = $img["name"];
						$path = 'http://' . $_SERVER["HTTP_HOST"] . '/img/' . $novoNomeImg;
						move_uploaded_file($img['tmp_name'], $pasta . $novoNomeImg);
					} else {
						$path = $_POST['img'];
					}
				}
				$parametros1 = array(
					'titulo1' => $_POST['titulo1'],
					'descricao1' => $_POST['descricao1'],
					'titulo2' => $_POST['titulo2'],
					'descricao2' => $_POST['descricao2'],
					'textoIMG' => $path
				);
			}

			//textoDuploIMGdireita
			if ($acao == "textoDuploIMGdireita") {
				$img = $_FILES['textoIMG'];
				if ($img !== null) {
					preg_match("/\.(png|jpg|jpeg){1}$/i", $img["name"], $ext);

					if ($ext == true) {
						$pasta = ROOT . "/img/";
						$novoNomeImg = $img["name"];
						$path = 'http://' . $_SERVER["HTTP_HOST"] . '/img/' . $novoNomeImg;
						move_uploaded_file($img['tmp_name'], $pasta . $novoNomeImg);
					} else {
						$path = $_POST['img'];
					}
				}
				$parametros1 = array(
					'titulo1' => $_POST['titulo1'],
					'descricao1' => $_POST['descricao1'],
					'titulo2' => $_POST['titulo2'],
					'descricao2' => $_POST['descricao2'],
					'textoIMG' => $path
				);
			}

			//footerBackground
			if ($acao == "footerBackground") {
				$img = $_FILES['logo'];
				if ($img !== null) {
					preg_match("/\.(png|jpg|jpeg){1}$/i", $img["name"], $ext);

					if ($ext == true) {
						$pasta = ROOT . "/img/";
						$novoNomeImg = $img["name"];
						$path = 'http://' . $_SERVER["HTTP_HOST"] . '/img/' . $novoNomeImg;
						move_uploaded_file($img['tmp_name'], $pasta . $novoNomeImg);
					} else {
						$path = $_POST['img'];
					}
				}
				$bkg = $_FILES['backgroundIMG'];
				if ($bkg !== null) {
					preg_match("/\.(png|jpg|jpeg){1}$/i", $bkg["name"], $ext);

					if ($ext == true) {
						$pasta = ROOT . "/img/";
						$novoNomeBkg = $bkg["name"];
						$path2 = 'http://' . $_SERVER["HTTP_HOST"] . '/img/' . $novoNomeBkg;
						move_uploaded_file($bkg['tmp_name'], $pasta . $novoNomeBkg);
					} else {
						$path2 = $_POST['img2'];
					}
				}
				$parametros1 = array(
					'tituloContato' => $_POST['tituloContato'],
					'textoWhatsapp' => $_POST['textoWhatsapp'],
					'textoEmail' => $_POST['textoEmail'],
					'tituloEndereco' => $_POST['tituloEndereco'],
					'textoEndereco' => $_POST['textoEndereco'],
					'textoBairro' => $_POST['textoBairro'],
					'textoCep' => $_POST['textoCep'],
					'textoCidade' => $_POST['textoCidade'],
					'textoRedesSociais' => $_POST['textoRedesSociais'],
					'logo' => $path,
					'backgroundIMG' => $path2
				);
			}
		}

		if (!empty($parametros1)) {
			$parametros = array_map('htmlentities', $parametros1);
		}
		$apiEntrada = array(
			'idSecaoPagina' => $_POST['idSecaoPagina'],
			'idPagina' => $_POST['idPagina'],
			'idSecao' => $_POST['idSecao'],
			'ordem' => $_POST['ordem'],
			'coluna' => $_POST['coluna'],
			'parametros' => json_encode($parametros),
		);
		$secoesPagina = chamaAPI(null, '/paginas/secoesPagina', json_encode($apiEntrada), 'POST');
		header('Location: ../configuracao/paginas_alterar.php?idPagina=' . $_POST['idPagina']);
	}


	//header("Location: ../perfil/paginas.php");

}
