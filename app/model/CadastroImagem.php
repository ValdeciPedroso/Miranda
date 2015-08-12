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

		
	
	}