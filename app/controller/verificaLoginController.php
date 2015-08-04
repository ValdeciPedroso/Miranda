<?php

/** 
* Esta verifica o login, responsavel por controlar o acesso ao sistema
* @version 0.1 
* @author Valdeci Pedroso <valdecipti@gmail.com> 
* @access public 
*/ 
	class VerificaLoginController {
		
		/** 
		* Função que verifica se o usuario informou os dados correto
		* @access static 
		* @return string, indicando se os registros foram inseridos na tabela 
		*/ 
		public static function verificaUsuario($email,$senha){
		    /** 
			* Variavel recebe a instancia da classe cadastrousuario ();
			* @name $c
			*/
			$c = new CadastroUsuario();
		
			
			/** 
			* Variavel recebe o tipo de redirecionamento de pagina
			* @name $url
			*/
			$url ='';
			
				//se as variaveis informadas pelo usuario for igual aos do cadastro do banco, o usuario inicia uma nova sessao
				if($c->verificaUsuario($email,$senha)){
					//redirecionamento para a pagina home
					$url = 'administrador';
				}
			// se a url for igua a null  indica que nao encontrou os dados na tabela, passa como parametro o 0 para indicar que deu erro
			if($url==null)
				$url ='adminMiranda?id=error';
			
			return $url;
		}
	}