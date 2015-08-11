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
				$id_imagens = (isset($_POST['id_imagens']))?($_POST['id_imagens']):null;

				$cpc = new CadastroAlbumController(); 
				echo $cpc->inserirAlbum();
					
		}
 
	
}