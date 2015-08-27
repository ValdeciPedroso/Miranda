<?PHP echo AdminGenericosHelper::getStyle(); ?> 
<?PHP echo AdminGenericosHelper::getTopo("..::Restrito | ADM::.."); ?>
<div id="wrapper">
  <?PHP echo AdminGenericosHelper::getMenu(); ?>
  <div id="page-wrapper">
	<div class="row">
		  <div class="col-md-offset-1 col-md-10">
			<h1>Álbum <small>/ Cadastro</small></h1>
			<ol class="breadcrumb">
			  <li><a href="home"><i class="icon-dashboard"></i> Home</a></li>
			  <li class="active"><i class="icon-file-alt"></i>Álbum / Cadastro / Status do cadastro</li>
			</ol>
			<div class="alert alert-dismissable alert-success">
	                <?PHP echo AlbumHelper::recebeAlbum(); ?>
			    <br/>
				<br/>
				<a href="#" class="btn btn-success"> Cadastrar Álbum</a>
			</div>
	      </div>
	</div><!-- /.row -->
  </div>
</div>

<?PHP echo AdminGenericosHelper::getRodape(); ?> 