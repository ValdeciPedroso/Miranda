<?php
/** 
* Esta classe carrega os links do framework boostrap da pagina de login
* @version 0.1 
* @author Valdeci Pedroso <valdecipti@gmail.com> 
* @access public 
*/ 
	class BootstrapHelper{
	    /** 
		* Função que retorna os links do stilo da pagina
		* @access static 
		* @return string, com o links a ser inserido na pagina HTML
		*/ 
		public static function getStyle(){
			$link = "<meta charset=\"utf-8\">
	        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
	        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

	        <!-- CSS -->
	        <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:400italic,400\">
	        <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Droid+Sans\">
	        <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Lobster\">
	        <link rel=\"stylesheet\" href=\"assets/bootstrap/css/bootstrap.min.css\">
	        <link rel=\"stylesheet\" href=\"assets/font-awesome/css/font-awesome.min.css\">
	        <link rel=\"stylesheet\" href=\"assets/css/animate.css\">
	        <link rel=\"stylesheet\" href=\"assets/css/magnific-popup.css\">
	        <link rel=\"stylesheet\" href=\"assets/flexslider/flexslider.css\">
	        <link rel=\"stylesheet\" href=\"assets/css/form-elements.css\">
	        <link rel=\"stylesheet\" href=\"assets/css/style.css\">
	        <link rel=\"stylesheet\" href=\"assets/css/media-queries.css\">

	        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	        <!--[if lt IE 9]>
	            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
	            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
	        <![endif]-->
	       ";
			return $link;
		}
	
		
	
	}