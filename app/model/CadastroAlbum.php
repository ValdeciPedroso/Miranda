<?php
/** 
* @author Andre Matos <andre_matos13@hotmail.com> 
* @access public 
*/ 
	class CadastroAlbum{
 
		public $id;
		public $nome;
		public $legenda;
		public $categoria;
		public $imagens;
		
		public function insertAlbum(){
		
			$stmt = DBConn::getInstance()->prepare(
						"INSERT INTO album
							(nome,legenda,id_categoria,id_imagens) 
							VALUES 
							(:nome, :legenda,:categoria,:imagens)"
					);
				
			$arr[':nome'] = $this->nome;
			$arr[':legenda'] = $this->legenda;
			$arr[':categoria'] = $this->categoria;
			$arr[':imagens'] = 1;// **** CORRIGIR **** (Ver como INSERE fotos no banco de dados)
			
			return ($stmt->execute($arr)) ? DBConn::getInstance()->lastInsertId() : false;
		
		}

		
	
	}