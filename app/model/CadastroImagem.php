<?php
/** 
* @author Andre Matos <andre_matos13@hotmail.com> 
* @access public 
*/ 
	class CadastroImagem{
 
		public $id;
		public $id_album;
		public $endereco;//Endereço da imagem
		
		public function insertImagem(){
		
			$stmt = DBConn::getInstance()->prepare(
						"INSERT INTO imagens
							(id_album, endereco) 
							VALUES 
							(:id_album,:endereco)"
					);
				
			
			$arr[':id_album'] = $this->id_album;
			$arr[':endereco'] = $this->endereco;
			
			return ($stmt->execute($arr)) ? DBConn::getInstance()->lastInsertId() : false;
		
		}

		public static function getImagensAlbum($id_album){

		
			$stmt = DBConn::getInstance()->prepare("SELECT * FROM imagens WHERE id_album = $id_album");
			
			$stmt->execute();
			
			$lista = array();
			
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

				$u = new CadastroImagem();
				
				foreach($row as $k => $v)
					$u->$k = $v;
			
				$lista[] = $u;

			}
			
			return $lista;
		
		}

		
	
	}