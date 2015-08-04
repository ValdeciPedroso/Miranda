<?PHP 
echo SessaoHelper::destruir();
echo AdminGenericosHelper::getLoginTopo(); 
?>
<div class="form-top">
	<div class="form-top-left">
		<h3>Logout efetuado!</h3>
		<p>Área administrativa Miranda Fotográfia</p>
	</div>
	<div class="form-top-right">
		<i class="fa fa-lock"></i>
	</div>
</div>
<div class="form-bottom">
    <div class="alert alert-success" role="alert">
        Logout efetuado com sucesso
    </div>
    <form action="inicio">
    <center>
      <button type="submit" class="btn btn-primary btn-success"> <span class="glyphicon glyphicon-home" ></span> Home</button>
        </center>
    </form>  
</div>


 <?PHP echo AdminGenericosHelper::getLoginRodape(); ?>
