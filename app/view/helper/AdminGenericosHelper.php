<?php

	class AdminGenericosHelper {
       public static function getTopo($titulo =''){
           return '<!DOCTYPE html>
                      <html lang="pt-br">
					    <head>
					        <title'.$titulo.'</title>
					    </head>
					    <body> ';	
       }


      public static function getStyle(){
				return '
				        <meta charset="utf-8">
					    <meta name="viewport" content="width=device-width, initial-scale=1.0">
					    <meta name="description" content="">
					    <meta name="author" content="">
					    <!-- Bootstrap core CSS -->
					    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">

					    <!-- Add custom CSS here -->
					    <link href="assets/css/sb-admin.css" rel="stylesheet">
					    <link rel="stylesheet" href="assets/css/smoothbox.css">
					    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
					    <!-- Page Specific CSS -->
					    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">';
		}
		 public static function getRodape(){
	     	 	return ' <!-- JavaScript -->
					     <script src="assets/js/jquery-1.10.2.js"></script>
					     <script src="assets/js/bootstrap.js"></script>

					     <!-- Page Specific Plugins -->
					     <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
					     <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
					     <script src="assets/js/morris/chart-data-morris.js"></script>
					     <script src="assets/js/tablesorter/jquery.tablesorter.js"></script>
					     <script src="assets/js/tablesorter/tables.js"></script>
                         <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
	                     <script type="text/javascript" src="assets/js/smoothbox.js"></script>
				      </body>
                    </html>';  

		 }
		 public static function getMenu(){

			    if (sessaoHelper::getId() == NULL){
					return '<script language= "JavaScript"> location.href="404";</script>';
				}else{

	            return  '<!-- Sidebar -->
					      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
					        <!-- Brand and toggle get grouped for better mobile display -->
					        <div class="navbar-header">
					          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					            <span class="sr-only"> Miranda Fotográfia</span>
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
					          </button>
					          <a class="navbar-brand" href="administrador">Painel Administrativo |  Miranda Fotográfia</a>
					        </div>
					         <!-- Collect the nav links, forms, and other content for toggling -->
					        <div class="collapse navbar-collapse navbar-ex1-collapse">
					          <ul class="nav navbar-nav side-nav">
					            <li ><a href="administrador"><i class="fa fa-dashboard"></i> Dashboard </a></li>
					            <li ><a href="inicio"><i class="fa fa-home"></i> Ver a Home</a></li>
					            <li class="dropdown">
					              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Usuário<b class="caret"></b></a>
					              <ul class="dropdown-menu">
					                <li><a href="cadastrarUsuario">Novo</a></li>
					                <li><a href="listarAlterarUsuario">Editar</a></li>
					              </ul>
					            </li>
					            <li class="dropdown">
					              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Fotos<b class="caret"></b></a>
					              <ul class="dropdown-menu">
					                <li><a href="admin-fotos">Adicionar/Editar</a></li>
					                <li><a href="admin-categoria">Albuns</a></li>
					                <li><a href="admin-categoria">Categoria</a></li>
					              </ul>
					            </li>
					            <li class="dropdown">
					              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Album<b class="caret"></b></a>
					              <ul class="dropdown-menu">
					                <li><a href="admin-album">Adicionar/Editar</a></li>
					                <li><a href="admin-categoria">Albuns</a></li>
					                <li><a href="admin-categoria">Categoria</a></li>
					              </ul>
					            </li>
					            <li class="dropdown">
					              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Blog<b class="caret"></b></a>
					              <ul class="dropdown-menu">
					                <li><a href=""></a></li>
					                <li><a href=""></a></li>
					              </ul>
					            </li>
					            <li><a href="logout"><i class="fa fa-wrench"></i> Sair</a></li>
					          </ul>
					          <ul class="nav navbar-nav navbar-right navbar-user">
					                <li><a href="index.php"><i class="fa fa-power-off"></i> Log out / Sair</a></li>
					          </ul>
					        </div><!-- /.navbar-collapse -->
					      </nav>';
					  }
		 }

		 public static function getLoginTopo(){
             return '<!DOCTYPE html>
						<html lang="pt-br">
						    <head>
						        <meta charset="utf-8">
						        <meta http-equiv="X-UA-Compatible" content="IE=edge">
						        <meta name="viewport" content="width=device-width, initial-scale=1">
						        <title>Área restrita -Miranda Fotográfia</title>

						        <!-- CSS -->
						        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
						        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
						        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
								<link rel="stylesheet" href="assets/css/form-elements-login.css">
						        <link rel="stylesheet" href="assets/css/style-login.css">

						        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
						        
						        <!--[if lt IE 9]>
						            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
						            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
						        <![endif]-->
						    </head>
						    <body>
						        <!-- Top content -->
						        <div class="top-content">
						            <div class="inner-bg">
						                <div class="container">
						                    <div class="row">
						                        <div class="col-sm-6 col-sm-offset-3 form-box">';
		 }

        public static function getLoginRodape(){
             return'                </div>
			                    </div>
			                </div>
			            </div>
			            
			        </div>


			        <!-- Javascript -->
			        <script src="assets/js/jquery-1.11.1.min.js"></script>
			        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
			        <script src="assets/js/jquery.backstretch.min.js"></script>
			        <script src="assets/js/scripts-login.js"></script>
			        
			        <!--[if lt IE 10]>
			            <script src="assets/js/placeholder.js"></script>
			        <![endif]-->
			    </body>
			</html>';
         }

         public static function setTitulo($Titulo="",$SubTit=""){
         	return '<div id="page-wrapper">
				         <div class="col-md-12 alert alert-info">
				          <div class="col-lg-12 gallery">
				            <h3> Gerenciar Álbuns <small>Painel Administratico | Miranda Fotográfia</small></h3>
				            <ul class="breadcrumb">
				              <li><a href="#">Home</a> <span class="divider"></span></li>
				              <li class="active"> '.$Titulo.'<span class="divider"></span></li>
				              <li class="active"> '.$SubTit.'</li>
				            </ul>
				          </div>
			        </div><!-- /.row -->';
         }
         
         public static function getFormularioLogin(){
         	$html='';
         	$class='';
         	if (isset($_GET['id']) && $_GET['id'] == 'error'){
         	    $html ='	
         		   <div class="alert alert-danger" role="alert">
					 <center>
					  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
					  <span class="sr-only">ERRO:</span>
					  Usuário e/ou senha inválido(s), verifique!
					  </center>
					</div>';
				$class='input-error';	
         	}

           $html .='<form role="form" action="verificaLogin" method="post" class="login-form">
				    	<div class="form-group">
				    		<label class="sr-only" for="form-username">Usuário:</label>
				        	<input type="text" id="email" name="email" placeholder="Usuário..." class="form-username form-control '.$class.'" id="form-username" required>
				        </div>
				        <div class="form-group">
				        	<label class="sr-only" for="form-password">Senha:</label>
				        	<input type="password" id="senha" name="senha" placeholder="Senha..." class="form-password form-control '.$class.'" id="form-password"required>
				        </div>
				        <button type="submit" class="btn">Entrar</button>
				    </form>';
			return $html;	    
         }

	}

?>	