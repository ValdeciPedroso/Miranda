<?php
/**  
* @author Andre Matos <andre_matos13@hotmail.com> 
* @access public 
*/ 
	class CadastroAlbumController {
		
		public static function inserirAlbum(){

			$cadAlbum = new CadastroAlbum();
			
			foreach($cadAlbum as $k => $v){
				if($k == "foto_principal"){// foto principal deve ser pego via $_FILE[] e não via $_POST[]
					$cadAlbum->$k = (isset($_FILES["foto_principal"]["name"])) ? $_FILES["foto_principal"]["name"] : null;
				}else if($k == "destaque"){// necessario um if que retorna 0 ou 1
					$cadAlbum->$k = (isset($_POST[$k])) ? 1 : 0;
				}else{
					$cadAlbum->$k = (isset($_POST[$k])) ? $_POST[$k] : null;
				}
				
			}
			
			//Adiciona os valores no banco
			$id = $cadAlbum->insertAlbum();
			//se ($id) == sucesso
			if($id)
				return $id;	
			else
				return 'Erro no Cadastrar Álbum!';
	       
		
		}
		public static function atualizaAlbum(){
			$cadAlbum = new CadastroAlbum();
			
			foreach($cadAlbum as $k => $v){
				// echo $k.": ".$_POST[$k];
				$cadAlbum->$k = (isset($_POST[$k])) ? $_POST[$k] : null;
				
			}
			
			//Adiciona os valores no banco
			$id = $cadAlbum->atualizaAlbum();
			
			//se ($id) == sucesso
			if($id)
				return $id;	
			else
				return 'Erro ao Atualizar Álbum!';
		}

		public static function getUltimosAlbuns($ultimos_qtd){

		
			$cadAlbum = new CadastroAlbum();

			$lista = $cadAlbum->getUltimosAlbuns($ultimos_qtd);

			return $lista;
		
		}
		public function getAlbunsDestaque(){

		
			$cadAlbum = new CadastroAlbum();

			$lista = $cadAlbum->getAlbunsDestaque();

			return $lista;
		
		}

		public function getBuscarFotos($id){

		
			$cadAlbum = new CadastroAlbum();

			$lista = $cadAlbum->getAlbumId($id);

			return $lista;
		
		}
		public static function getAlbuns($ordenar){

			$cadAlbum = new CadastroAlbum();

			$lista = $cadAlbum->getAlbuns($ordenar);

			return $lista;
		
		}

		public static function getAlbunsPaginacao($pagina){
            $cadAlbum = new CadastroAlbum();

			$lista = $cadAlbum->getAlbunsPaginacao($pagina);

			return $lista;
		}
		public static function getTotalPaginacao(){
			$cadAlbum = new CadastroAlbum();

			$totalPaginas = $cadAlbum->getTotalPaginacao();

			return $totalPaginas;
		}
		public static function delete($id){
			
			$cadAlbum = new CadastroAlbum();

			$sucesso = $cadAlbum->delete($id);

			return $sucesso;
		}

}