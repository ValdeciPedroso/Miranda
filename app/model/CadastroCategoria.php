<?php
/** 
* @author Andre Matos <andre_matos13@hotmail.com> 
* @access public 
*/ 
	class CadastroCategoria{
 
		public $id;
		public $nome;

		public static function getCategorias(){

		    
            $stmt = DBConn::getInstance()->prepare("SELECT * FROM categoria" );
		    
			$stmt->execute();
			
			$lista = array();
			
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

				$u = new CadastroCategoria();
				
				foreach($row as $k => $v)
					$u->$k = $v;
			
				$lista[] = $u;

			}
			
			return $lista;
		
		}
		

		
	
	}