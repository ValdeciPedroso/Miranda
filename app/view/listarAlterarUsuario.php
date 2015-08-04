<?PHP echo AdminGenericosHelper::getStyle(); ?>
<?PHP echo AdminGenericosHelper::getTopo("..::Restrito | ADM::.."); ?>
<div id="wrapper">
  <?PHP echo AdminGenericosHelper::getMenu(); ?>
  <?PHP echo AdminGenericosHelper::setTitulo("Gerenciador de fotos","editar"); ?>
  <div id="page-wrapper">
    <div class="row">
		    <div class="col-md-12">
				<div class="table-responsive">	
					<table class="table table-bordered table-hover table-striped tablesorter">
					  <thead>
						  <tr>
							<th>Nome </th>
							<th>Email </th>
							<th>Telefone</th>
							<th></th>
							<th></th>
						  </tr>
						</thead>	
						<tbody>	
					     	<?php echo UsuarioHelper::getTabela(); ?> 
						</tbody>	
				   </table>
			   </div>
			</div>
	    </div>
 </div><!-- /.row -->
 </div>

<?PHP echo AdminGenericosHelper::getRodape(); ?>