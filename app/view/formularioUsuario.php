<?PHP echo SystemHelper::getTopo("..::Cadastro usuário::.."); ?>
<?php echo PaginaHelper::getLayout(); ?> 
<div class="row">
	  <div class="col-md-offset-1 col-md-10">
		<h1>Usuário <small>/ Cadastro</small></h1>
		<ol class="breadcrumb">
		  <li><a href="home"><i class="icon-dashboard"></i> home</a></li>
		  <li class="active"><i class="icon-file-alt"></i>Usuário / Formulário usuário</li>
		</ol>
			<?php echo UsuarioHelper::getFormularioUsuario(); ?> 
	 </div>
</div><!-- /.row -->

<?php echo PaginaHelper::getWrapper(); ?>