<?php
/** 
* Esta classe carrega o modelo base do site, todas as pagina exceto a pagina login e 404
* @version 0.1 
* @author Valdeci Pedroso <valdecipti@gmail.com> 
* @access public 
*/
class PaginaHelper{
        /** 
		* Função que retorna o modelo da pagina a ser carregada e passa alguns parametros de indentificacao de cada usuario
		* @access static 
		* @param $sessaoId informação da sessao do usuario
		* @param $nome nome do usuario logado
		* @param $id ID do usuario
		* @param $tipo tipo do usuario (Administrador, Vendedor, Inativo)
		* @return a pagina modelo
		*/ 
		public static function getLayout(){
			echo "<!DOCTYPE html>
					<html lang=\"pt-br\">
					  <head>
						<meta charset=\"utf-8\">
						<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
						<meta name=\"description\" content=\"\">
						<meta name=\"author\" content=\"\">

						<title>Blank Page - SB Admin</title>

						<!-- Bootstrap core CSS -->
						<link href=\"css/bootstrap.css\" rel=\"stylesheet\">

						<!-- Add custom CSS here -->
						<link href=\"css/sb-admin.css\" rel=\"stylesheet\">
						<link rel=\"stylesheet\" href=\"font-awesome/css/font-awesome.min.css\">
					  </head>

					  <body>

						<div id=\"wrapper\">

						  <!-- Sidebar -->
						  <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class=\"navbar-header\">
							  <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
								<span class=\"sr-only\">Toggle navigation</span>
								<span class=\"icon-bar\"></span>
								<span class=\"icon-bar\"></span>
								<span class=\"icon-bar\"></span>
							  </button>
							  <a class=\"navbar-brand\" href=\"#\">Dashboard</a>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class=\"collapse navbar-collapse navbar-ex1-collapse\">
							
							  <ul class=\"nav navbar-nav side-nav\">
								";
								// se o usuario for inativo não carregado os menus de produtos e usuario
								    if(SessaoHelper::getTipo()!="i"){  
										// se o usuario for administrador carrega  o menu de usuario
										if(SessaoHelper::getTipo()=="a"){
										echo"
										<li class=\"dropdown\">
										  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-caret-square-o-down\"></i> Usuários <i class=\"fa fa-user\"></i> <b class=\"caret\"></b></a>
										  <ul class=\"dropdown-menu\">
											<li><a href=\"formularioUsuario\"><i class=\"fa fa-check-square\"></i> Cadastrar</a></li>
											<li><a href=\"listarAlterarUsuario\"><i class=\"fa fa-edit\"></i>Alterar e excluir</a></li>
										  </ul>
										</li>
										"
										;}
										echo "								
										<li class=\"dropdown\">
										  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-caret-square-o-down\"></i>  Produtos  <i class=\"fa fa-truck\"></i><b class=\"caret\"></b></a>
										  <ul class=\"dropdown-menu\">
											<li><a href=\"formularioProduto\"><i class=\"fa fa-check-square\"></i> Cadastrar</a></li>
											<li><a href=\"listarAlterarProduto\"><i class=\"fa fa-edit\"></i> Alterar e excluir</a></li>
											<li><a href=\"vender\"><i class=\"fa fa-edit\"></i> Vender</a></li>
											<li><a href=\"listarProduto\"><i class=\"fa fa-list-ul\"></i> Listar Todos</a></li>
										  </ul>
										</li>
									";}
									else{
									echo "<div class=\"inativo\">
												<li class=\"alert alert-dismissable alert-danger\">Seu usuário<br/> encontra-se<Strong> inativo</Strong>  <br/> Contate um <br/><Strong>Administrador</Strong><br/> do sistema</li>
										</div>";
									}
							 echo "
							  </ul>

							  <ul class=\"nav navbar-nav navbar-right navbar-user\">
								<li class=\"dropdown messages-dropdown\">
								  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-key\"></i> Identificação <b class=\"caret\"></b></a>
								  <ul class=\"dropdown-menu\">
									<li class=\"message-preview\">
									  <a href=\"#\">
										<span class=\"name\">".SessaoHelper::getNome()." </span>
										<span class=\"message\">ID:".SessaoHelper::getNome()."</span>
										<span class=\"message\">Função:";
										//se o usuatio tiver o tipo a , imprime na tela administrador
										if(SessaoHelper::getTipo()=='a')
										echo 'Administrador';
										//se o usuatio tiver o tipo v , imprime na tela vendedor
										else if(SessaoHelper::getTipo()=='v')
										echo 'Vendedor';
										//se o usuatio tiver o tipo v , imprime na tela Inativo
										else if(SessaoHelper::getTipo()=='i')
										echo 'Inativo';
										
										echo"</span>
										<span class=\"time\"><i class=\"fa fa-clock-o\"></i> ".date('d')."/".date('n')."/".date('Y') ."</span>
									  </a>
									</li>
								  </ul>
								</li>
								<li class=\"dropdown user-dropdown\">
								  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> ".SessaoHelper::getNome()." <b class=\"caret\"></b></a>
								  <ul class=\"dropdown-menu\">
									<li><a href=\"logout\"><i class=\"fa fa-power-off\"></i> Sair</a></li>
								  </ul>
								</li>
							  </ul>
							</div><!-- /.navbar-collapse -->
						  </nav>
						<div id=\"page-wrapper\">
						  </div><!-- /#page-wrapper -->
						";
			}
		 /** 
		* Função que retorna o rodape da pagina
		* @access static 
		* @return a pagina modelo de rodape
		*/ 
		public static function getSessao(){
		    echo sessao_id();
		}
		public static function getWrapper(){
				echo	"</div><!-- /#wrapper -->
						<!-- JavaScript -->
						<script src=\"js/jquery-1.10.2.js\"></script>
						<script src=\"js/bootstrap.js\"></script>

					  </body>
					</html>";
		}
		
		
}