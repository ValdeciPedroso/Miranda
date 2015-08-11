<?PHP echo AdminGenericosHelper::getStyle(); ?>
<?PHP echo AdminGenericosHelper::getTopo("..::Restrito | ADM::.."); ?>
<div id="wrapper">
  <?PHP echo AdminGenericosHelper::getMenu(); ?>
  <div id="page-wrapper">
	<div class="row">
		  <div class="col-md-offset-1 col-md-10">
			<h1>Usuário <small>/ Cadastro</small></h1>
			<ol class="breadcrumb">
			  <li><a href="home"><i class="icon-dashboard"></i> Home</a></li>
			  <li class="active"><i class="icon-file-alt"></i>Usuário / Cadastro / Status do cadastro</li>
			</ol>
			<div class="alert alert-dismissable alert-success">
	                <?PHP echo UsuarioHelper::recebeUsuario(); ?>
			    <br/>
				<br/>
				<a href="cadastrarUsuario" class="btn btn-success"> Cadastrar Usuário</a>
			</div>
	      </div>
	</div><!-- /.row -->
  </div>
</div>

<?PHP echo AdminGenericosHelper::getRodape(); ?>