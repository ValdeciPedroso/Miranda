<?php 
	$ultimosTrabalhos = new CadastroAlbumController();
	$lista = $ultimosTrabalhos->getAlbunsDestaque();

if(count($lista) != 0){
        
  ?>

	<div class="row">
			            <div class="col-sm-12 work-title wow fadeIn">
			                <h2>Albúns em destaque</h2>
			            </div>
	</div>
	<div class="row ">

	<?php
    foreach ($lista as $key => $value) { ?>

		<div class="col-sm-3 ">
	        <div class="work wow fadeInUp ">
	        	<?php 
	        		$cadastroImagemController = new CadastroImagemController();
	        		$imagens = $cadastroImagemController->getImagensAlbum($lista[$key]->id);
	        	?>

	            <?php echo '<a class="thumbnail trabalhosDestaque view-work" href="assets/img/album-img/'.$lista[$key]->id.'/'.$lista[$key]->foto_principal.'"><div class="foto"><img class="ultimoTrabalhos" alt="foto" src="assets/img/album-img/'.$lista[$key]->id.'/'.$lista[$key]->foto_principal.'"  data-at2x="assets/img/album-img/'.$lista[$key]->id.'/'.$lista[$key]->foto_principal.'"></div><a>'; ?>
	            <div class="ultimosTrabalhos">
                <h3><?php echo $lista[$key]->nome; ?></h3>
	            <p><?php echo $lista[$key]->legenda; ?></p>
	            </div>
                <div class="work-bottom">
	                <?php echo '<a class="big-link-2 view-work" href="assets/img/album-img/'.$lista[$key]->id.'/'.$lista[$key]->foto_principal.'"><i class="fa fa-search"></i></a>'; ?>
	                <a class="big-link-2" href="portfolio.html"><i class="fa fa-link"></i></a>
	            </div>
	        </div>
	    </div>
	<?php } ?>
	</div>
<?php } ?>