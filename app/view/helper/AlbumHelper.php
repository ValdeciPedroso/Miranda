<?php
/** 
* Esta responsável pelo HELPER das funções do produto
* @version 0.1 
* @author Valdeci Pedroso <valdecipti@gmail.com> 
* @access public 
*/ 

class AlbumHelper {
     
        public static function BuscarAlbuns(){
				
				$cpc = new CadastroAlbumController();//instanciando objeto CadastroAlbumController
			    $lista = $cpc->getAlbunsCadastrados();
				 // Insere album no banco e pega o id para inserir as imagens
                //Cria um diretorio para salvar as imagens do album
				/**if(!mkdir("assets/img/album-img/$nome_album", 0700)){
					echo 'Atenção, Já existe um album com esse nome<br />';
					return;
				}**/
								// percorre o array de imagens
				foreach ($_FILES["imagens"]["error"] as $key => $error) {
					// Definir o diretório onde salvar os arquivos.
				    $destino = "assets/img/album-img/$nome_album/" . $_FILES["imagens"]["name"][$i];
				   	
				    // Move o arquivo para o diretório de destino
				    move_uploaded_file($_FILES["imagens"]["tmp_name"][$i], $destino );
				 	// echo "Imagem: ".$destino.'<br />';
				    
				    // Insere no BD cada imagem para o album adicionado
				    $cadImg->id_album = $id_album;
				    $cadImg->endereco = $_FILES["imagens"]["name"][$i];
				    $cadImg->insertImagem();
				    
				    // Próximo arquivo a ser analisado
				    $i++;
				}
				echo $i.' imagens adicionadas<br />';
				
				
				
					
		}

	public static function getTabela(){
			 $cpc = new CadastroProdutoController();
						 $lista = $cpc->getCadastroProdutos();
						foreach($lista as $cadastro){
						   echo "<tr class=\"active\">
								 <td>".$cadastro->id."</td>
								 <td>".$cadastro->nome."</td>
								 <td>".$cadastro->fabricante."</td>
								 <td>".$cadastro->descricao."</td>
								 <td>".$cadastro->preco."</td>
								 <td>".$cadastro->estoque."</td>
								 <td><a href='formularioProduto?id=".$cadastro->id."'><i class=\"fa fa-wrench\"></a></td>
								 <td><a href='excluirProduto?id=".$cadastro->id."' onclick=\"return confirm('Deseja excluir este registro? Nome --".$cadastro->nome." |  Quantidade em estoque -- ".$cadastro->estoque."');\"><i class=\"fa fa-times\"></a></td>
								       
								 </tr>";
					 }				
	}
	public static function recebeAlbum(){
			     
                // $name = $_POST['album'];
                // $categoria = $_POST['categoria'];                
                // $legenda = (isset($_POST['legenda']))?($_POST['legenda']):null;

				
				$i = 0;// sera o contador de cada imagem do foreach

				// $cpc = new CadastroAlbumController();//instanciando objeto CadastroAlbumController
				$id_album = CadastroAlbumController::inserirAlbum();// Insere album no banco e pega o id para inserir as imagens
                //Cria um diretorio para salvar as imagens do album
				if(!mkdir("assets/img/album-img/$id_album", 0700)){
					echo 'Atenção, Já existe um album com esse nome<br />';
					return;
				}
				if($id_album){
					echo 'Album '.$_POST['nome'].' cadastrado com sucesso';
				}
				// $cadAlbum = new CadastroAlbum();// instancia objeto CadastroImagem
				
				
		}
public static function recebeProduto(){
	// Recebe as variáveis enviadas pelo método POST
	$id=$_POST['id'];
	$nome=$_POST['nome'];
	$fabricante=$_POST['fabricante'];
	$descricao=$_POST['descricao'];
	$preco=$_POST['preco'];
	$estoque=$_POST['estoque'];

		if ((isset($id))&&($id>0)){
					$cpc = new CadastroProdutoController(); 
					echo $cpc->alterarProduto();
				}
				else {
					// faz chamada ao metodo que prepara o  cadastro de produto
					$cpc = new CadastroProdutoController(); 
					echo $cpc->inserirProduto();
				}
				
	}
	public static function formularioProduto(){
				$id=$_GET['id'];

				$c = new CadastroProdutoController();

				$produto=$c->find($id);
				$id= $produto->id;
				$nome=$produto->nome;
				$fabricante=$produto->fabricante;
				$descricao=$produto->descricao;
				$preco=$produto->preco;
				$estoque=$produto->estoque;
				if($id){
				   $html = "<form action=\"recebeProduto\" method=\"post\">
					<input type=\"hidden\" name=\"id\" value=".$id." />
					<span>Nome:<span><br /> <input type=\"text\" name=\"nome\" value=".$nome." required autofocus /><br />
					Fabricante:<br /> <input type=\"text\" name=\"fabricante\" value=".$fabricante." required /><br />
					Descricao: <br /><textarea  name=\"descricao\" required>".$descricao."</textarea><br />
					Preco: <br /><input type=\"number\" name=\"preco\"   pattern=\"[0-9]+([\.|,][0-9]+)?\" step=\"0.01\" value=".$preco." required/><br />
					Estoque: <br /><input type=\"number\" name=\"estoque\" value=".$estoque." required /><br />
					<br /><input class=\"btn  btn-primary\" value=\"Alterar\"type=\"submit\" />
					</form>	";
				}
				else{
				$html = "<form action=\"recebeProduto\" method=\"post\">
					<input type=\"hidden\" name=\"id\" />
					<span>Nome:<span><br /> <input type=\"text\" name=\"nome\"required autofocus /><br />
					Fabricante:<br /> <input type=\"text\" name=\"fabricante\" required /><br />
					Descricao: <br /><textarea  name=\"descricao\" required></textarea><br />
					Preco: <br /><input type=\"number\" name=\"preco\"   pattern=\"[0-9]+([\.|,][0-9]+)?\" step=\"0.01\"required/><br />
					Estoque: <br /><input type=\"number\" name=\"estoque\"  required /><br />
					<br /><input class=\"btn  btn-primary\" value=\"Cadastrar\"type=\"submit\" />
					</form>	";
				}
			
			return $html;
	}
	public static function removerQuantidadeProduto(){	
	
	// Recebe as variáveis enviadas pelo método POST
	$id=$_POST['id'];
	$qtd=$_POST['quantidade'];
	
		 $cpc = new CadastroProdutoController(); 
		 echo $cpc->removerQtdProduto($id,$qtd);
	}
	
	public static function venderProduto(){	
	 $cpc = new CadastroProdutoController();
					 $lista = $cpc->getCadastroProdutos();
							foreach($lista as $cadastro){
							echo " <tr class=\"active\">
										 <td>".$cadastro->nome."</td>
										 <td>".$cadastro->preco."</td>
										 <td>".$cadastro->estoque."</td>
										 <td><a href='venderProduto?id=".$cadastro->id."'><i class=\"fa fa-money\"></i></a></td>
								 </tr>";
						}	
	}	
	public static function formularioVenda(){
	$id=$_GET['id'];

	$c = new CadastroProdutoController();

	$produto=$c->find($id);
	$id= $produto->id;
	$nome=$produto->nome;
	$fabricante=$produto->fabricante;
	$descricao=$produto->descricao;
	$preco=$produto->preco;
	$estoque=$produto->estoque;
	
	$html = "<form action=\"removerQuantidadeProduto\" method=\"post\">
						<input type=\"hidden\" name=\"id\" value=".$id." />
						<strong>Nome: </strong>".$nome."<br />
						<strong>Fabricante: </strong>".$fabricante."<br />
						<strong>Descricao: </strong>".$descricao."<br />
						<strong>Preco: </strong>".$preco."<br />
						<strong>Estoque: </strong>".$estoque."<br />
						<strong>Quantidade vendida: </strong><br />
						<input type=\"number\" max=".$estoque." min=\"0\" name=\"quantidade\" required /><br />
						<br /><input class=\"btn  btn-primary\" value=\"Vender\"type=\"submit\" />
				</form>	";
	return $html;
	}
	public static function excluirProduto(){
	$id=$_GET['id'];
		$cpc = new CadastroProdutoController();
		echo $cpc->deletarProduto($id);
	}

}