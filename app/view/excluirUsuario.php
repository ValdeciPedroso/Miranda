<?PHP echo SystemHelper::getTopo("..::Restrito | ADM::.."); ?>
<?PHP echo PaginaHelper::getLayout(); ?>

<?php
$id=$_GET['id'];
?>

<div class="row">
	    <div class="col-md-offset-1 col-md-10">
			<h1>usuário <small>/ Excluir</small></h1>
			<ol class="breadcrumb">
			  <li><a href="home"><i class="icon-dashboard"></i> Home</a></li>
			  <li class="active"><i class="icon-file-alt"></i>Usuário / <a href="listarExcluirProduto">Excluir</a> / status de exclusão</li>
			</ol>
			<div class="alert alert-dismissable alert-success">
				<?php
			echo UsuarioHelper::ExcluirUsuario();
				?>
			   <br/><br/>
			   <a href="formularioUsuario" class="btn btn-success"> Cadastrar usuário</a>
			   <a href="listarAlterarUsuario" class="btn btn-primary"> Alterar / Excluir  usuários</a>
		   </div>
	    </div>
</div><!-- /.row -->

<?php echo PaginaHelper::getWrapper(); ?>

