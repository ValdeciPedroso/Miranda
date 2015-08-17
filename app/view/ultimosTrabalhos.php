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
            <?php 
                $cadastroImagemController = new CadastroImagemController();
                $imagens = $cadastroImagemController->getImagensAlbum($lista[$key]->id);
            if(count($imagens) > 0){
            ?>
            		<div class="col-sm-3">
            	        <div class="work wow fadeInUp">
            	            <?php echo '<img src="assets/img/album-img/'.$lista[$key]->id.'/'.$imagens[0]->endereco.'" alt="Lorem Website" data-at2x="assets/img/album-img/'.$lista[$key]->id.'/'.$imagens[0]->endereco.'">'; ?>
            	            <h3><?php echo $lista[$key]->nome; ?></h3>
            	            <p><?php echo $lista[$key]->legenda; ?></p>
            	            <div class="work-bottom">
            	                <?php echo '<a class="big-link-2 view-work" href="assets/img/album-img/'.$lista[$key]->id.'/'.$imagens[0]->endereco.'"><i class="fa fa-search"></i></a>'; ?>
            	                <a class="big-link-2" href="portfolio.html"><i class="fa fa-link"></i></a>
            	            </div>
            	        </div>
            	    </div>
<?php       } // fim if
    }// fim foreach
?>
	
    <!-- <div class="col-sm-3">
        <div class="work wow fadeInDown">
            <img src="assets/img/portfolio/work2.jpg" alt="Ipsum Logo" data-at2x="assets/img/portfolio/work2.jpg">
            <h3>Ipsum Logo</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
            <div class="work-bottom">
                <a class="big-link-2 view-work" href="assets/img/portfolio/work2.jpg"><i class="fa fa-search"></i></a>
                <a class="big-link-2" href="portfolio.html"><i class="fa fa-link"></i></a>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="work wow fadeInUp">
            <img src="assets/img/portfolio/work3.jpg" alt="Dolor Prints" data-at2x="assets/img/portfolio/work3.jpg">
            <h3>Dolor Prints</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
            <div class="work-bottom">
                <a class="big-link-2 view-work" href="assets/img/portfolio/work3.jpg"><i class="fa fa-search"></i></a>
                <a class="big-link-2" href="portfolio.html"><i class="fa fa-link"></i></a>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="work wow fadeInDown">
            <img src="assets/img/portfolio/work4.jpg" alt="Sit Amet Website" data-at2x="assets/img/portfolio/work4.jpg">
            <h3>Sit Amet Website</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
            <div class="work-bottom">
                <a class="big-link-2 view-work" href="assets/img/portfolio/work4.jpg"><i class="fa fa-search"></i></a>
                <a class="big-link-2" href="portfolio.html"><i class="fa fa-link"></i></a>
            </div>
        </div>
    </div> -->
</div>