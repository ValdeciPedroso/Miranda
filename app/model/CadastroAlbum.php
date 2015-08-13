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
		
		public function insertAlbum(){
		
			$stmt = DBConn::getInstance()->prepare(
						"INSERT INTO album
							(nome,legenda,id_categoria) 
							VALUES 
							(:nome, :legenda,:categoria)"
					);
				
			$arr[':nome'] = $this->nome;
			$arr[':legenda'] = $this->legenda;
			$arr[':categoria'] = $this->categoria;

			
			return ($stmt->execute($arr)) ? DBConn::getInstance()->lastInsertId() : false;
		
		}

		public static function getUltimosAlbuns($ultimos_qtd){

		
			$stmt = DBConn::getInstance()->prepare("SELECT * FROM album ORDER BY id LIMIT $ultimos_qtd");
			
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