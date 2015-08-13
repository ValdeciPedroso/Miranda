<?php
/** 
* @author Andre Matos <andre_matos13@hotmail.com> 
* @access public 
*/ 
	class CadastroImagemController {
		

		public static function getImagensAlbum($id_album){

		
			$cadImagem = new CadastroImagem();

			$lista = $cadImagem->getImagensAlbum($id_album);

			return $lista;
		
		}
	
}