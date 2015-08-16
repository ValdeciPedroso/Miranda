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
		public static function getFotos($ordenar){

		    if (isset($ordenar)!= null){
               $stmt = DBConn::getInstance()->prepare("SELECT * FROM imagens ORDER BY id $ordenar" );
		    }else{
			   $stmt = DBConn::getInstance()->prepare("SELECT * FROM imagens");

			}
			$stmt->execute();
			
			$lista = array();
			
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

				$u = new CadastroAlbum();
				
				foreach($row as $k => $v)
					$u->$k = $v;
			
				$lista[] = $u;

			}
			
			return $lista;
		
		}

		public static function getFotosAlbum($album){

            $stmt = DBConn::getInstance()->prepare("SELECT * FROM imagens WHERE id_album = $album" );
		  
			$stmt->execute();
			
			$lista = array();
			
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

				$u = new CadastroAlbum();
				
				foreach($row as $k => $v)
					$u->$k = $v;
			
				$lista[] = $u;

			}
			
			return $lista;
		
		}

	
}