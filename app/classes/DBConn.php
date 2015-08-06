<?php

/** 
* Esta classe de conexao com o banco de dados 
* @author Valdeci Pedroso <valdecipti@gmail.com> 
* @version 0.1  
* @access public   
*/ 
	class DBConn extends PDO {
	    /** 
		* Variaveis que recebem os parametros para conexao com o banco. 
		* @access public
		* @name $HOST indentificacao do host  
		* @name $ROOT usuario do banco
		* @name $PASS Password do banco
		* @name $DB Base de dados
		* @name $CHARSET tipo de codificacao de caracter
		*/ 
		const HOST = 'localhost';
		const USER = 'root';
		const PASS = '';
		const DB = 'Miranda';
		const CHARSET = 'utf8';
		
		/** 
		* Variavel recebe a instancia da conexao. 
		* @access static
		* @name $instance 
		*/ 
		private static $instance = NULL;
		
	    /** 
		* Funcao para retornar a instancia de conexao, caso exista uma conexao instanciada 
		* @access static
		* @return a instancia da conexao
		*/ 
		public static function getInstance(){
		    //se a instancia for igual a nulo, instancia a conexao
			if (self::$instance == NULL){
				self::$instance = new DBConn();
			}
			
			return self::$instance;
			
		}

	    /** 
		* Funcao construtor da conexao com o banco
		* @access static
		* @return a instancia da conexao
		*/ 
		public function __construct(){
			//cria a conexao se a instancia for nula
			if(is_null(self::$instance)){
			
				try {
					self::$instance = parent::__construct( 
						'mysql:host=' . self::HOST . ';dbname=' . self::DB . ';charset=' . self::CHARSET, 
						self::USER, 
						self::PASS,
						array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES " . self::CHARSET) 
					);
					
					parent::setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
					
				}
				
				catch (PDOException $e) {
				
					echo "Connection Error: " . $e->getMessage();
					exit;
					
				}
				
			}
			
			return self::$instance;
			
		}
        /** 
		* Funcao que fecha a  conexao com o banco
		* @return void
		*/ 
		private function __clone() {}
	
	}
