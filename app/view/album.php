<?PHP echo GenericosHelper::getStyle(); ?>
<?PHP echo GenericosHelper::getTopo("..::Home::.."); ?>
<?php
  $album = new CadastroAlbumController();
  $lista = $album->getBuscarFotos($_GET['id']);
?>
        <!-- Slider -->
        <div class="presentation-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="col-sm-5"> 
                        <?php
                            $cadastroImagemController = new cadastroImagemController();
		                    $imagens = $cadastroImagemController->getImagensAlbum($_GET['id']);
                            if ($imagens){
		                      echo '<center>
		                              <img  class="albuns" alt="foto" src="assets\img\album-img\\'.$imagens[0]->id_album.'\\'.$imagens[0]->endereco.'" >
		                            </center>';
		                      echo '';      
		                    }
		                ?>
		                </div>  

	            		<h1><span class="violet"><?php echo $lista[0]->nome;  ?></span></h1>
                        
	            		<p class=""><?php echo $lista[0]->legenda; ?></p>
	            	 </div>
	            </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="container">
	 <div class="row">
		  <div class="col-sm-offset-1 col-sm-10 col-sm-offset-1 work-title wow fadeIn">
		     <?php
		       if($imagens){
                   echo '<h2>Mais Fotos</h2>';
		     	}
		     ?>
		  </div>
     </div>
     
        <div class=" col-sm-offset-1 col-sm-10 ">
            <?php  
               $fotos = new CadastroImagemController();
               $cadastroImagemController = new cadastroImagemController();
               $imagens = $cadastroImagemController->getImagensAlbum($_GET['id']);

                foreach ($imagens as $key => $value){ 
                   if($imagens){
                      echo '<div class="col-sm-3">
			                  <div class="work wow fadeInUp ">
			                   <a class="thumbnail view-work" href="assets\img\album-img\\'.$imagens[$key]->id_album.'\\'.$imagens[$key]->endereco.'" >
			                   <div class="foto"><img class="ultimoTrabalhos" alt="foto" src="assets\img\album-img\\'.$imagens[$key]->id_album.'\\'.$imagens[$key]->endereco.'"  data-at2x="assets\img\album-img\$imagens[0]->endereco">
			                   </div><a>
			                 <p>'.$imagens[$key]->legenda.'</p>
			              </div>
                      </div>'; 
                 }
               }
               ?>
         	  
	     </div>
  </div>
        <!-- Testimonials -->
        <div class="testimonials-container">	
        </div>
 <?PHP echo GenericosHelper::getRodape();?>
