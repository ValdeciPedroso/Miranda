<?PHP echo AdminGenericosHelper::getStyle(); ?>
<?PHP echo AdminGenericosHelper::getTopo("..::Restrito | ADM::.."); ?>
<div id="wrapper">
  <?PHP echo AdminGenericosHelper::getMenu(); ?>
  <?PHP echo AdminGenericosHelper::setTitulo("Gerenciador de usuário","Adicionar"); ?>
    <div class="row">
      <div class="col-md-offset-1 col-md-3">
          <h1>Usuário <small>/ Cadastro</small></h1>
           <?PHP echo UsuarioHelper::getFormularioUsuario(); ?>
         </div>
    </div><!-- /.row -->
  </div><!-- /#page-wrapper -->
<?PHP echo AdminGenericosHelper::getRodape(); ?>

