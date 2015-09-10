<?php
/** 
* @author Andre Matos <andre_matos13@hotmail.com> 
* @access public 
*/ 
	class FotosHelper {
		
		public static function recebeFoto(){
			     
                $result = $_POST['album'];
                $result_explode = explode(':', $result);

                $id_album = $result_explode[0];
                $nome_album = $result_explode[1];
                $legenda = (isset($_POST['legenda']))?($_POST['legenda']):null;

				
				$i = 0;// sera o contador de cada imagem do foreach

				//$cpc = new CadastroAlbumController();//instanciando objeto CadastroAlbumController
				//$id_album = $cpc->inserirAlbum();// Insere album no banco e pega o id para inserir as imagens
                //Cria um diretorio para salvar as imagens do album
				/**if(!mkdir("assets/img/album-img/$nome_album", 0700)){
					echo 'Atenção, Já existe um album com esse nome<br />';
					return;
				}**/

				$cadImg = new CadastroImagem();// instancia objeto CadastroImagem
				
				// percorre o array de imagens
				foreach ($_FILES["imagens"]["error"] as $key => $error) {
					// Definir o diretório onde salvar os arquivos.
				    $destino = "assets/img/album-img/$id_album/" . $_FILES["imagens"]["name"][$i];
				   	
				    // Move o arquivo para o diretório de destino
				    move_uploaded_file($_FILES["imagens"]["tmp_name"][$i], $destino );
				 	echo "Imagem: ".$destino.'<br />';
				    
				    // Insere no BD cada imagem para o album adicionado
				    $cadImg->id_album = $id_album;
				    $cadImg->endereco = $_FILES["imagens"]["name"][$i];
				    $cadImg->legenda = $legenda;
				    $cadImg->insertImagem();
				    
				    // Próximo arquivo a ser analisado
				    $i++;
				}
				echo $i.' imagens adicionadas<br />';
		}
 
	
}