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
				return $id;	
			else
				return 'Erro no Cadastrar Álbum!';
	       
		
		}

		public static function getUltimosAlbuns($ultimos_qtd){

		
			$cadAlbum = new CadastroAlbum();

			$lista = $cadAlbum->getUltimosAlbuns($ultimos_qtd);

			return $lista;
		
		}

		public static function getAlbuns($ordenar){

		
			$cadAlbum = new CadastroAlbum();

			$lista = $cadAlbum->getAlbuns($ordenar);

			return $lista;
		
		}
		
	
}