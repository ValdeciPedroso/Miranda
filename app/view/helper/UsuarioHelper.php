<?php
/** 
* Esta responsável pelo HELPER das funções do usuario
* @version 0.1 
* @author Valdeci Pedroso <valdecipti@gmail.com> 
* @access public 
*/ 

	class UsuarioHelper {
		/** 
		* Função que redireciona o login para erro de login ou página home
		* @access static  
		*/ 
		public static function getVerificaLogin(){
			
				 $v = new VerificaLoginController();
				 $url = $v->verificaUsuario($_POST['email'],$_POST['senha']);
				 echo  header("Location: ".$url);
		}
		/** 
		* Função que retorna o formulario
		* @access static  
		*/ 
		public static function getFormularioUsuario(){
		
		$id= $_GET['id'];
		$c = new CadastroUsuarioController();
		$usuario=$c->find($id);
		$id= $usuario->id;
		$nome=$usuario->nome;
		$email=$usuario->email;
		$telefone=$usuario->telefone;
		$senha=$usuario->senha;
		    if(isset($id)){
		       $html = " <form action=\"recebeUsuario\" method=\"post\">
					<input type=\"hidden\" name=\"id\" value=".$id." />
					Nome:    <br/><input type=\"text\" name=\"nome\" value=".$nome." required autofocus class=\"form-username form-control\"/><br />
					Email:   <br/><input type=\"email\" name=\"email\" value=".$email." required class=\"form-username form-control\"/><br />
					Telefone:<br/><input type=\"phone\"  name=\"telefone\" required value=".$telefone." class=\"form-username form-control\"/><br />";

				if ($id == $_SESSION["id"]){
                	$html .= " Senha: <br /><input type=\"password\" name=\"senha\" required/><br /><br />
					          <input type=\"submit\"  class=\"btn  btn-primary\" value=\"Editar\" onclick=\"return confirm('".$cadastro->nome." Seu usuário será alterado, sendo necessário efetuar login novamente! deseja  continuar?');\"/>
				             </form></div>";
				}
				else{
					$html .= " <br /><input type=\"submit\"  class=\"btn  btn-primary\" value=\"Editar\"  />
				             </form>";	
				}

			}else{
			   $html .= "
				<form action=\"recebeUsuario\" method=\"post\">
					<input type=\"hidden\" name=\"id\" />
					<span>Nome:<span><br /> <input type=\"text\" 
					name=\"nome\" required autofocus class=\"form-username form-control\"/><br />
					Email:<br /> <input type=\"email\" name=\"email\" class=\"form-username form-control\" required /><br />
					Telefone: <br /><input type=\"phone\"  name=\"telefone\" class=\"form-username form-control\" required/><br />
					Senha: <br /><input type=\"password\" name=\"senha\" class=\"form-username form-control\" required/><br />
					<br /><input type=\"submit\"  class=\"btn  btn-primary\" value=\"Cadastrar\" />
			   </form>	
			   "; 
			}
			return $html;	
		
	}
	
	public static function getTabela(){
	/** 
		* Função que retorna a tabela de alteração e deleção
		* @access static  
		*/ 
			 $cpc = new CadastroUsuarioController();
						 $lista = $cpc->getCadastroUsuario();
						foreach($lista as $cadastro){
						   echo "<tr class=\"active\">
								 <td>".$cadastro->nome."</td>
								 <td>".$cadastro->email."</td>
								 <td>".$cadastro->telefone."</td>
								";
								echo "
								 <td><a href='cadastrarUsuario?id=".$cadastro->id."'><i class=\"fa fa-wrench\"></a></td>
								"; 
								
							    if(($cadastro->id) == $_SESSION["id"]){
								  echo "</td>
										 <td><a href='excluirUsuario?id=".$cadastro->id."' onclick=\"return confirm('".$cadastro->nome." Seu usuário será Excluído! deseja sair?');\"><i class=\"fa fa-times\"></i></a></td>
								     </tr>";
								}
								else{	  
								 echo "</td>
										 <td><a href='excluirUsuario?id=".$cadastro->id."' onclick=\"return confirm('Deseja excluir o usuário\ ".$cadastro->nome."');\"><i class=\"fa fa-times\"></i></a></td>
								      </tr>";
									  
								}
								
								
								
					 }		
	 }
/** 
		* Função que recebe os dados do usuario para alteração e cadastro
		* @access static  
		*/ 	 
	public static function recebeUsuario(){
           	$id=$_POST['id'];
			$nome=$_POST['nome'];
			$email=$_POST['email'];
			$telefone=$_POST['telefone'];
			$senha=$_POST['senha']; 
			if ((isset($id))&&($id>0)){
			//se o usuario tiver o mesmo id do qual deseja alterar, informa ao usuario que ira será necessário entrar novamente no sistema e redireciona para a pagina de login
					if($id!=$_SESSION["id"]){
						$cpc = new CadastroUsuarioController(); 
						echo $cpc->alterarUsuario();
					}
					else{
						$cpc = new CadastroUsuarioController(); 
						echo $cpc->alterarUsuario();
						
					}
					
				}
				else {
					// faz chamada ao metodo que prepara o  cadastro de usuário
					$cpc = new CadastroUsuarioController(); 
					echo $cpc->inserirUsuario();
				}		
	}
	/** 
		* Função que envia os dados para excluir
		* @access static  
		*/ 
	public static function ExcluirUsuario(){
	$id=$_GET['id'];
	//se o usuario tiver o mesmo id do qual deseja excluir, informa ao usuario que ira será necessário entrar novamente no sistema e destroy a sessão do usuario redirecionando-o para a pagina de login
		if($id!=$_SESSION["id"]){
				    $cpc = new CadastroUsuarioController();
					echo $cpc->deletarUsuario($id);
					}
				else{
					echo('<meta http-equiv="refresh" content="0;URL= inicio ">');
					 $cpc = new CadastroUsuarioController();
					echo $cpc->deletarUsuario($id);
				}	
	
	} 
	public static function getVerificaSessao(){
		$id =  new SessaoHelper();
		// echo '<script>alert('.$_SESSION["id"].')</script>';
	    if ($id->getId()!=null){
          	return 'administrador';
	    }
	    else
	    	return 'adminMiranda';
	}
	}