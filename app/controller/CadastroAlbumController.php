<?php
/** 
* @author Andre Matos <andre_matos13@hotmail.com> 
* @access public 
*/ 
	class CadastroAlbumController {
		
		public static function inserirAlbum(){

			$cadAlbum = new CadastroAlbum();
			
			foreach($cadAlbum as $k => $v){
				// echo $k.": ".$_POST[$k];
				$cadAlbum->$k = (isset($_POST[$k])) ? $_POST[$k] : null;
			}
			
			//Adiciona os valores no banco
			$id = $cadAlbum->insertAlbum();
			
			//se ($id) == sucesso
			if($id)
				return "Álbum ".$cadAlbum->nome." inserido com sucesso ";	
			else
				return 'Erro no Cadastrar Álbum!';
	       
		
	}
	
}