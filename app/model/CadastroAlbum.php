<?php
/**  
* @author Andre Matos <andre_matos13@hotmail.com> 
* @access public 
*/ 
	class CadastroAlbum{
 
		public $id;
		public $nome;
		public $categoria;
		public $legenda;
		public $destaque;
		public $foto_principal;
		
		public function insertAlbum(){
		
			$stmt = DBConn::getInstance()->prepare(
						"INSERT INTO album
							(nome,legenda,id_categoria, destaque, foto_principal) 
							VALUES 
							(:nome, :legenda,:categoria,:destaque,:foto_principal)"
					);
				
			$arr[':nome'] = $this->nome;
			$arr[':legenda'] = $this->legenda;
			$arr[':categoria'] = $this->categoria;
			$arr[':destaque'] = $this->destaque;
			$arr[':foto_principal'] = $this->foto_principal;

			
			return ($stmt->execute($arr)) ? DBConn::getInstance()->lastInsertId() : false;
		
		}
		public function atualizaAlbum(){
			$stmt = DBConn::getInstance()->prepare(
						"UPDATE album SET nome = :nome,legenda = :legenda, id_categoria = :categoria WHERE id = :id"
					);
			
			$arr['id'] = $this->id;
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
		public function getAlbunsDestaque(){
			$stmt = DBConn::getInstance()->prepare("SELECT * FROM album WHERE destaque = 1 ORDER BY id DESC LIMIT 4");
			
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
		public static function getAlbuns($ordenar){
			if($ordenar == "DEST"){
				$stmt = DBConn::getInstance()->prepare("SELECT * FROM album WHERE destaque = 1");
			}else{
			    if (isset($ordenar)!= null){
	               $stmt = DBConn::getInstance()->prepare("SELECT * FROM album ORDER BY id $ordenar" );
			    }else{
				   $stmt = DBConn::getInstance()->prepare("SELECT * FROM album");
				}
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
		public static function getBuscarAlbuns(){
		    $stmt = DBConn::getInstance()->prepare("SELECT * FROM album");
		
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

		public static function getAlbumId($id){
		    $stmt = DBConn::getInstance()->prepare("SELECT * FROM album WHERE id = $id");
		
			$stmt->execute();
			
			$lista = array();
			
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

				$u = new CadastroAlbum();
				
				foreach($row as $k => $v){
					$u->$k = $v;
				}
			
				$lista[] = $u;

			}
			
			return $lista;
		
		}
		public static function getAlbunsPaginacao($pagina){
            $quantidade =5;
            $inicio = ($quantidade * $pagina) - $quantidade; 

			$stmt = DBConn::getInstance()->prepare("SELECT * FROM album ORDER BY id ASC LIMIT $inicio, $quantidade");
		
			$stmt->execute();
			
			$lista = array();
			
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

				$u = new CadastroAlbum();
				
				foreach($row as $k => $v){
					$u->$k = $v;
				}
			
				$lista[] = $u;

			}
			
			return $lista;
		}


		public static function getTotalPaginacao(){

			$stmt = DBConn::getInstance()->prepare("SELECT * FROM album ");
		
			$stmt->execute();

			$totalRegistros = $stmt->rowCount();
			
			$totalPaginas =  ceil($totalRegistros/5);
			
			return $totalPaginas;
		}


		public static function delete($id){
			$cont = 0;
			$stmt = DBConn::getInstance()->prepare("DELETE FROM imagens WHERE id_album = $id");

			if(!$stmt->execute()){
				$cont++;	
			}

			$stmt = DBConn::getInstance()->prepare("DELETE FROM album WHERE id = $id");
			
			if(!$stmt->execute()){
				$cont++;		
			}
			
			if($cont == 0){
				return true;
			}else{
				return false;
			}
		}
		
	
	}