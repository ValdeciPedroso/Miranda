	            <ul class="pagination pagination-centered">
				    
				          <?php $cadastroAlbumController = new cadastroAlbumController();
                                $totalPaginas = $cadastroAlbumController->getTotalPaginacao();
                                
                                for ($i =1 ; $i <= $totalPaginas; $i++){
                                	if ($i=='1'){
                                		if ($pagina == '1'){
                                          echo "<li class=\"disabled\"><a href=\"#\"><< Primeiro</a></li>";                                		       
                                		}
                                		else{
                                		   echo "<li><a href=\"portfolio?pag=1\"><< Primeiro</a></li>";                                		       
                                		}   
                                	}
                                	if ($i == $pagina){
                                		echo "<li class=\"disabled\"><a href=\"portfolio?pag=".$i."\">".$i."</a></li>";
                                	}
                                	else{
                                        echo "<li><a href=\"portfolio?pag=".$i."\">".$i."</a></li>";
                                	}
                                	if ($i==$totalPaginas){
                                		if ($pagina==$totalPaginas){
                                           echo "<li class=\"disabled\"><a href=\"#\">Último >></a></li>";
                                		}else{
                                		   echo "<li><a href=\"portfolio?pag=".$totalPaginas."\">Último >></a></li>";
                                		}   
                                	}
                                }
                           ?>
				</ul>