<?PHP echo AdminGenericosHelper::getStyle(); ?>
<?PHP echo AdminGenericosHelper::getTopo("..::Restrito | ADM::.."); ?>
<div id="wrapper">
  <?PHP echo AdminGenericosHelper::getMenu(); ?>
  <?PHP echo AdminGenericosHelper::setTitulo("Gerenciador de usuário","Adicionar"); ?>

    <div class="well well-lg col-md-12 ">
        <center>
        <div class="container">
	        <div class="col-md-4">
	          <div class="panel panel-primary">
	                  <div class="panel-heading">
	                    <h3 class="panel-title">Dados do usuário</h3>
	                  </div>
	                  <div class="panel-body">
	                       <?PHP echo UsuarioHelper::getFormularioUsuario(); ?>
	                  </div >   
	           </div > 
	         </div>
	    </div>     
     </div>               
  </div><!-- /#page-wrapper -->
<?PHP echo AdminGenericosHelper::getRodape(); ?>

