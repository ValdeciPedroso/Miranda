<?php
/** 
* @author Andre Matos <andre_matos13@hotmail.com> 
* @access public 
*/ 
	class AlbumHelper {
		
		public static function recebeAlbum(){
	           	$id = (isset($_POST['id']))?($_POST['id']):null;
				$nome = (isset($_POST['nome']))?($_POST['nome']):null;
				$legenda = (isset($_POST['legenda']))?($_POST['legenda']):null;
				$id_categoria = (isset($_POST['categoria']))?($_POST['categoria']):null;
				$i = 0;// sera o contador de cada imagem do foreach

				$cpc = new CadastroAlbumController();//instanciando objeto CadastroAlbumController
				$id_album = $cpc->inserirAlbum();// Insere album no banco e pega o id para inserir as imagens

				$cadImg = new CadastroImagem();// instancia objeto CadastroImagem
				//Cria um diretorio para salvar as imagens do album
				if(!mkdir("assets/img/album-img/$nome", 0700)){
					echo 'Atenção, Já existe um album com esse nome<br />';
					return;
				}
				// percorre o array de imagens
				foreach ($_FILES["imagens"]["error"] as $key => $error) {
					// Definir o diretório onde salvar os arquivos.
				    $destino = "assets/img/album-img/$nome/" . $_FILES["imagens"]["name"][$i];
				   	
				    // Move o arquivo para o diretório de destino
				    move_uploaded_file($_FILES["imagens"]["tmp_name"][$i], $destino );
				 	// echo "Imagem: ".$destino.'<br />';
				    
				    // Insere no BD cada imagem para o album adicionado
				    $cadImg->id_album = $id_album;
				    $cadImg->endereco = $_FILES["imagens"]["name"][$i];
				    $cadImg->insertImagem();
				    
				    // Próximo arquivo a ser analisado
				    $i++;
				}
				echo $i.' imagens adicionadas<br />';
				
				
				
					
		}
 
	
}