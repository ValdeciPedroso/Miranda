<?PHP echo GenericosHelper::getStyle(); ?>
<?PHP echo GenericosHelper::getTopo("Portfólio - Miranda Fotografia"); ?>
<script type="text/javascript">
function enviaId(id){
	if(id){
	  var url = 'ajax_editar_album?id='+id;  // caminho do arquivo que irá buscar os albuns no BD
	  $.get(url, function(dataReturn) {
	    $('#result_ajax').html(dataReturn);  //Coloco os dados de retorno na div result_ajax
	  });
	}
}
</script>

        <!-- Slider -->
        <div class="presentation-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="col-sm-12 wow fadeInLeftBig">
	            		<h1><span class="violet">Nosso Portfólio</span>,  confira nossos trabalhos.</h1>
	            		<p>Com excelência, bom gosto e principalmente qualidade para atender esta diversidade de clientes de modo especial e diferenciado, pois cada cliente é tratado com exclusividade, de um modo único e especial, nossos serviços são feitos desta forma para que o cliente possa sair satisfeito, com um material único e personalizado com o seu jeito e seu gosto.</p>
	            	</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="work-container">
	        <div class="container">
	        	<div class="row">
		            <div class="col-sm-12 work-title wow fadeIn">
		                <h2>Albúns</h2>
		            </div>
	            </div>
	            
	        </div>
        </div>
        <!-- portifolio -->

					 
        <div class="portfolio-container">
	        <div class="container">
	        <?PHP  
              $ordenar = (isset($_GET['ord']))?($_GET['ord']):null;
              $album = (isset($_GET['album']))?($_GET['album']):null;
              $pagina = (isset($_GET['pag']))?($_GET['pag']):null;
             
              //atualiza album
              if(isset($_POST['nome']))
                CadastroAlbumController::atualizaAlbum();
            ?>
              <?php include("paginacaoAlbum.php");?>

	            <div class="row">
	                <?php
                      $album = new CadastroAlbumController();
                      $lista = $album->getAlbunsPaginacao($pagina);

                      if(count($lista) == 0){
                        echo 'Nenhum trabalho cadastrado!';
                      }foreach ($lista as $key => $value) { ?>
                       
	            	<div class="col-sm-offset-1 col-sm-10 portfolio">
	                    <div class="col-sm-6"> 
		                    <center>
		                    <?php 
                                $cadastroImagemController = new cadastroImagemController();
                                $imagens = $cadastroImagemController->getImagensAlbum($lista[$key]->id);
                                if($imagens)
                                   echo ' <img class="albuns" alt="foto" src="assets/img/album-img/'.$lista[$key]->id.'/'.$imagens[0]->endereco.'">'; 
                                else
                                   echo '<img class="albuns" alt="foto" src="assets/img/no_image_available.png">'; 
                            ?> 
		                    </center>
		                </div>
		               	<div class="col-sm-6 info work-bottom descricao_album "> 
			          	  <h3><?php echo $lista[$key]->nome; ?></h3>
		               	  <p><?php echo $lista[$key]->legenda; ?></p>
		               	  <a class="big-link-1" <?php echo 'href="album?id='.$lista[$key]->id.'"';?> >Veja Mais</a>
			            </div>
			         </div>
			         <?php }?>
			    </div>
			     <?php include("paginacaoAlbum.php");?>
	         </div>
	    </div>
        </div>


        <!-- Testimonials -->
        <div class="testimonials-container">	
        </div>
 <?PHP echo GenericosHelper::getRodape();?>
