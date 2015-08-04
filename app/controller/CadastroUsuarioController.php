<?php
/** 
* Esta classe de controller de Usuario, responsavel por chamar a classe que manipula a tabela usuario
* @version 0.1 
* @author Valdeci Pedroso <valdecipti@gmail.com> 
* @access public 
*/ 

	class CadastroUsuarioController {
		
		/** 
		* Função que controla o cadastro de usuariuo
		* @access static 
		* @return string, indicando se os registros foram inseridos na tabela 
		*/ 
		public static function inserirUsuario(){
		    /** 
			* Variavel recebe a instancia da classe cadastroProduto ();
			* @name $c
			*/
			$c = new CadastroUsuario();
			
			if ($c->findEmailUsuario($_POST['email'])==NULL){
				//Seta atributos dinamicamente
				foreach($c as $k => $v)
					$c->$k = (isset($_POST[$k])) ? $_POST[$k] : null;
				
				//Insere no banco de dados
				$id = $c->insertUsuario();
				
				//se a variavel recebeu o retorno  indica que o registro foi inserido com sucesso
				if($id)
					return "Usuário ".$c->nome." inserido com sucesso ";	
				else
					return 'Erro no Cadastrar Usuário!';
	       }
	       return "Email '".$_POST['email']."'Já encontra-se cadastrado  em nossa base de dados";
		
		}
		
/** 
		* Função que busca os registros cadastrados na tabela usuario
		* @access static 
		* @return lista com os registros 
		*/ 
		public static function getCadastroUsuario(){
		/** 
			* Variavel recebe a instancia da classe cadastroProduto ();
			* @name $c
			*/
			$c = new CadastroUsuario();
		
			return $c->findAllUsuario();
		
		}
			/** 
		* Função que busca o registro cadastrados na tabela usuario 
		* @access static
		* @param  $id parametro para pesquisa do produto com a ID que for igual ao parametro  
		* @return Instancia da classe cadastrousuario();
		*/
		public static function find($id){
		    $c = new CadastroUsuario();
		    return $c->findUsuario($id);
		}
		/** 
		* Função que controla a alteracao de usuario
		* @access static 
		* @return string, indica se os registros foram alterados na tabela 
		*/ 
		public static function alterarUsuario(){
	/** 
			* Variavel recebe a instancia da classe cadastroProduto ();
			* @name $cp
			*/
		$cp = new CadastroUsuario();
		
			//Seta atributos dinamicamente
			foreach($cp as $k => $v)
				$cp->$k = (isset($_POST[$k])) ? $_POST[$k] : null;
			
			//Insere no banco de dados
			$id = $cp->updateUsuario();
			
			if($id)
				return "Usuário ".$cp->nome." alterado com sucesso! ";	
			else
				return 'Erro ao alterar Usuário!';
		
		}
		/** 
		* Função que deleta o  registro cadastrados na tabela usuario
		* @access static
		* @param  $id parametro para deletar o produto com a ID que for igual ao parametro  
		* @return String ,indicando o produto foi deletado
		*/
		public static function deletarUsuario($id){
		  /** 
			* Variavel recebe a instancia da classe cadastroProduto ();
			* @name $c
			*/
			$c = new CadastroUsuario();
			/** 
			* Variavel recebe o retorno da funcao deleteproduto ;
			* @name $i
			*/
			$i = $c->deleteUsuario($id);
			
			if($i)
				return "Usuário ".$c->nome." deletado com sucesso";	
			else
				return 'Erro ao excluir Usuário!';
			
		}
		 
	
	}