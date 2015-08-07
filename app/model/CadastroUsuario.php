<?php
/** 
* Esta classe manipulacao da tabela usuario
* @version 0.1 
* @author Valdeci Pedroso <valdecipti@gmail.com> 
* @access public 
*/ 
	class CadastroUsuario{
		/** 
		* Variaveis da classe cadastroUsuario(). 
		* @access static
		* @name $instance 
		* @name $email
		* @name $telefone
		* @name $senha
		* @name $tipo
		*/ 
		public $id;
		public $nome;
		public $email;
		public $telefone;
		public $senha;
		
		/** 
		* Função que insere os registros na tabela usuario
		* @access public 
		* @return verdadeiro caso o registro ter sido inserido
		*/
		public function insertUsuario(){
		
			$stmt = DBConn::getInstance()->prepare(
						"INSERT INTO usuario
							(nome,email,telefone,senha) 
							VALUES 
							(:nome, :email,:telefone,:senha)"
					);
				
			$arr[':nome'] = $this->nome;
			$arr[':email'] = $this->email;
			$arr[':telefone'] = $this->telefone;
			$this->senha = base64_encode($this->senha);
			$arr[':senha'] = $this->senha;
			
			return ($stmt->execute($arr)) ? DBConn::getInstance()->lastInsertId() : false;
		
		}
	
		
		
		/** 
		* Função que busca os registros na tabela usuario
		* @access public 
		* @return lista  com os usuarios encontrados
		*/
		public static function findAllUsuario(){
		
			$stmt = DBConn::getInstance()->prepare("SELECT * FROM usuario");
			
			$stmt->execute();
			
			$lista = array();
			
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

				$u = new CadastroUsuario();
				
				foreach($row as $k => $v)
					$u->$k = $v;
			
				$lista[] = $u;

			}
			
			return $lista;
		
		}
		/** 
		* Função para buscar o registro encontrado na tabela usuario
		* @access static  
		* @param $id, id para pesquisa de usuario
		* @return  instancia do usuario
		*/
		public function findusuario($id){
		       
		        $st = DBConn::getInstance()->prepare("SELECT * FROM usuario WHERE id = :id");
				$st->bindParam(":id", $id,PDO::PARAM_INT);
				$st->execute();
				
				
				//Obtém o registro encontrado
				$row = $st->fetch(PDO::FETCH_ASSOC);
				
				//Atribui nos atributos os valores encontrados
				
		        $this->id = $row['id'];
				$this->nome =$row['nome'];
				$this->email = $row['email'];
				$this->telefone = $row['telefone'];
				$this->senha= $row['senha'];
			return $this;
				
		}
		/** 
		* Função para alterar o registro cadastrados na tabela usuario
		* @access static  
		* @return  verdadeiro caso o registro tenha sido alterado
		*/
		public  function updateUsuario(){
		    $st = DBConn::getInstance()->prepare("UPDATE usuario SET nome = :nome , email = :email , telefone = :telefone , senha = :senha WHERE id = :id");
			 $st->bindParam(":id", $this->id,PDO::PARAM_INT);
			 $st->bindParam(":nome", $this->nome,PDO::PARAM_STR);
			 $st->bindParam(":email", $this->email,PDO::PARAM_STR);
			 $st->bindParam(":telefone", $this->telefone,PDO::PARAM_STR);
			 $this->senha = base64_encode($this->senha);
			 $st->bindParam(":senha", $this->senha,PDO::PARAM_STR);
			
		     return $st->execute();
		}
		/** 
		* Função para deletar o registro na tabela usuario
		* @param $id, id para indicar o produto
		* @return booleano, se o registro foi deletado
		*/
		public function deleteUsuario($id){

		$st = DBConn::getInstance()->prepare("DELETE FROM  usuario WHERE id = :id");
		$st->bindParam(":id", $id,PDO::PARAM_INT);
		
		return $st->execute();
		}
		/** 
		* Função para buscar o login  na tabela usuario
		* @access static  
		* @param $id, id para pesquisa de usuario
		* @return  instancia do usuario
		*/
		public function verificaUsuario($email='', $senha=''){
		        
				$st = DBConn::getInstance()->prepare("SELECT * FROM usuario WHERE email = :email ");
				$st->bindParam(":email", $email, PDO::PARAM_STR);
				$st->execute();
				$row = $st->fetch(PDO::FETCH_ASSOC);
				if( base64_decode($row['senha']) == $senha){ 
					
					if( $row['id']){
						// a sessão já foi iniciada em outra pagina
						// session_start();
						$_SESSION["id"]= $row['id'];
						$_SESSION["nome"]= $row['nome'];
						// verificar utilização do session_register();
						// session_register($row['nome']);
				      	return true;
					}
			    }else
				return false;
				
		}
		/** 
		* Função para buscar se existe o email cadastrado
		* @access static  
		* @param $id, id para pesquisa de usuario
		* @return  instancia do usuario
		*/
		public function findEmailUsuario($email){
		       
		        $st = DBConn::getInstance()->prepare("SELECT * FROM usuario WHERE email = :email");
				$st->bindParam(":email", $email,PDO::PARAM_INT);
				$st->execute();
				
				
				//Obtém o registro encontrado
				$row = $st->fetch(PDO::FETCH_ASSOC);
			return $row;
				
		}
		
		
	
	}