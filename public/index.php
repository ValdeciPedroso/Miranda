<?php

	session_start();
	define("APPDIR", "../app/");
	define("CONTROLLERDIR", APPDIR . "controller/");
	define("MODELDIR", APPDIR . "model/");
	define("CLASSEDIR", APPDIR . "classes/");
	define("HELPERDIR", APPDIR . "view/helper/");
	define("BASEURL", "http://aula/");
	
	
	// autoload tenta carregar automaticamente uma classe 
	function __autoload($classname) {
	
		if(file_exists(CONTROLLERDIR . "$classname.php"))
			require_once CONTROLLERDIR . "$classname.php";
		if(file_exists(MODELDIR . "$classname.php"))
			require_once MODELDIR . "$classname.php";
		if(file_exists(CLASSEDIR . "$classname.php"))
			require_once CLASSEDIR . "$classname.php";
		if(file_exists(HELPERDIR . "$classname.php"))
			require_once HELPERDIR . "$classname.php";
	
	}
	
	
	//Se acessou a raiz, define como inicio a VIEW inicio
	$file = (isset($_GET['module'])) ? $_GET['module'] : 'inicio';
	
	
	//Se é uma chamada a alguma AÇÃO DA CONTROLLER
	// exemplo
	// login/verificaLogin?control=1
	
	// control=1 - define uma chamada a um método de uma classe - AJAX
	if(isset($_GET['control'])){
	
		// explode "login/verificaLogin"
		$arr = explode('/', $_GET['module']);
		
		$class = ucfirst($arr[0]); // login -> Login
		$method = $arr[1]; // verificaLogin

		//Ex:. Login::verificaLogin();
		//Faz chamada estática ao método da classe
		
		//Login::verificaLogin();
		$class::$method();
		
		
	}//Chamada a VIEW( Interface )
	else{

		header("Content-Type:text/html; charset:utf-8");
	
		//Se VIEW existe
		if(file_exists(APPDIR . "view/$file.php"))
			require APPDIR . "view/$file.php";
		else
			require APPDIR . "view/404.php";
		
	}
	