<?php 
	$ultimosTrabalhos = new CadastroAlbumController();
	$lista = $ultimosTrabalhos->getUltimosAlbuns(4);
 ?>
<div class="row">

	<?php
    if(count($lista) == 0){
        echo 'Nenhum trabalho cadastrado!';
    }
    foreach ($lista as $key => $value) { ?>
		<div class="col-sm-3">
	        <div class="work wow fadeInUp">
	        	<?php 
	        		$cadastroImagemController = new CadastroImagemController();
	        		$imagens = $cadastroImagemController->getImagensAlbum($lista[$key]->id);
	        	?>
	            <?php echo '<a class="thumbnail view-work" href="assets/img/album-img/'.$lista[$key]->id.'/'.$imagens[0]->endereco.'"><img class="ultimoTrabalhos" src="assets/img/album-img/'.$lista[$key]->id.'/'.$imagens[0]->endereco.'"  data-at2x="assets/img/album-img/'.$lista[$key]->id.'/'.$imagens[0]->endereco.'"><a>'; ?>
	         
                <h3><?php echo $lista[$key]->nome; ?></h3>
	            <p><?php echo $lista[$key]->legenda; ?></p>
	            
                <div class="work-bottom">
	                <?php echo '<a class="big-link-2 view-work" href="assets/img/album-img/'.$lista[$key]->id.'/'.$imagens[0]->endereco.'"><i class="fa fa-search"></i></a>'; ?>
	                <a class="big-link-2" href="portfolio.html"><i class="fa fa-link"></i></a>
	            </div>
	        </div>
	    </div>
<?php } ?>
     