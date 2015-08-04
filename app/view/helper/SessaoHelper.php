<?php

/** 
* Esta responsável por enviar dados da sessão do usuario
* @version 0.1 
* @author Valdeci Pedroso <valdecipti@gmail.com> 
* @access public 
*/ 
	class SessaoHelper {
		/** 
		* Função que envia o id da sessao
		* @access static  
		*/ 
		public static function getSessao(){
		        $sessao =  session_id();
				return  $sessao;
		
		}
		/** 
		* Função que envia o nome da sessao
		* @access static  
		*/ 
		public static function getNome(){
		
			$nome =  $_SESSION["nome"];
			return  $nome;
		
		}
		/** 
		* Função que envia o id registrada na sessao
		* @access static  
		*/ 
		public static function getId(){
		
			 $id = $_SESSION["id"];
			return  $id;
		
		}
		/** 
		* Função que destroy a sessao
		* @access static  
		*/ 
		public static function destruir(){
		session_destroy();
	    }

	}