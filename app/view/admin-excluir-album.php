<?PHP echo AdminGenericosHelper::getStyle(); ?>
<?PHP echo AdminGenericosHelper::getTopo("..::Restrito | ADM::.."); ?>
 
    <div id="wrapper">
         <?PHP echo AdminGenericosHelper::getMenu(); ?>
         <?PHP echo AdminGenericosHelper::setTitulo("Gerenciador de albuns","Editar Excluir"); ?>
<script type="text/javascript">
    function enviaId(id, param){
        if(id){
          if(param == 'edit'){
              var url = 'ajax_editar_album?id='+id;  // caminho do arquivo que irá buscar os albuns no BD
              $.get(url, function(dataReturn) {
                $('#result_ajax').html(dataReturn);  //Coloco os dados de retorno na div result_ajax
              });
          }else{
              var opc = confirm("Excluir album, tem certeza?");
              if(opc){
                var url = 'ajax_excluir_album?id='+id;  // caminho do arquivo que irá buscar os albuns no BD
                $.get(url, function(dataReturn) {
                    $('#apagar').html(dataReturn);  //Coloco os dados de retorno na div result_ajax
                });
                
              }
          }
        }
    }

</script>
         <?PHP  
            $ordenar = (isset($_GET['ord']))?($_GET['ord']):null;
            $album = (isset($_GET['album']))?($_GET['album']):null;
         ?> 
        <?php 
            //atualiza album
          if(isset($_POST['nome']))
              CadastroAlbumController::atualizaAlbum();

         ?>
          <!--formulario das fotos-->
             <div >
                  <ul class="nav nav-tabs">
                    <li role="presentation"><a href="admin-album">Cadastrar</a></li>
                    <li role="presentation" class="active"><a href="#">Editar e Excluir</a></li>
                  </ul>
               </div><!-- /.navbar-collapse -->
              <div id="apagar"></div>
             <div class="well well-lg">
                  <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title">Filtrar por:</h3>
                  </div>
                  <div class="panel-body">
                    <select onchange="top.location.href = 'admin-excluir-album?ord='
                      + this.options[ this.selectedIndex ].value" >
                      <option value="">Ordenar</option>
                      <option value="ASC">Mais Antigos</option>
                      <option value="DESC">Mais Recentes</option>
                      <option value="DEST">Albuns em destaque</option>
                    </select>
                  </div>
                </div>
                <div >
                  <div class="thumbnail">
                      <?php

                          $album = new CadastroAlbumController();
                      ?>
                      <div class="row ">
                         <?php
                            $lista = $album->getAlbuns($ordenar);

                            if(count($lista) == 0){
                                echo 'Nenhum trabalho cadastrado!';
                            }foreach ($lista as $key => $value) { ?>
                              <div class="col-lg-3" >
                                 <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php 
                                          $cadastroImagemController = new cadastroImagemController();
                                          $imagens = $cadastroImagemController->getImagensAlbum($lista[$key]->id);
                                          if($imagens)
                                            echo ' <a class="thumbnail sb DivFoto"  href="assets/img/album-img/'.$lista[$key]->id.'/'.$imagens[0]->endereco.'" > <img class="foto" src="assets/img/album-img/'.$lista[$key]->id.'/'.$imagens[0]->endereco.'"> </a>'; 
                                          else
                                            echo '<a class="thumbnail DivFoto"><img class="foto" style="width:auto;" src="assets/img/no_image_available.png"></a>'; 
                                        ?>
                                        <div style="text-align:center">
                                          <p><?php echo '<b>'.$lista[$key]->nome.'</b>'; ?></p>
                                        </div>
                                        <div class="breadcrumb legendas">
                                          <p><?php echo $lista[$key]->legenda; ?></p>
                                        </div>
                                        <center>
                                          <button type="button" class="btn btn-info" aria-label="Left Align" onclick="enviaId(this.value,'edit')" data-toggle="modal" value="<?php echo $lista[$key]->id; ?>" title="Clique para editar"  data-target=".bs-example-modal-sm">
                                            <span class="glyphicon glyphicon-wrench" ></span>
                                          </button>
                                           <button type="button" class="btn btn-warning" aria-label="right Align" onclick="enviaId(this.value,'exclui')" data-toggle="modal" value="<?php echo $lista[$key]->id; ?>" >
                                            <span class="glyphicon glyphicon-remove" ></span>
                                          </button>
                                        </center>  
                                    </div>
                                </div>
                            </div>
                         <?php }?>
                          <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                          <h4 class="modal-title" id="gridSystemModalLabel">Editar Album:</h4>
                                        </div>
                                        <form action="admin-excluir-album" method="POST">
                                            <div class="modal-body" id="result_ajax">
                                              <div class="container-fluid">
                                                
                                                    <div class="row">
                                                      
                                                      <div class="form-group" id="result_ajax">
                                                            <label class="control-label" for="adicionar-fotos">Nome:</label><br/>
                                                            <input id="adicionar-album" name="nome" multiple class="form-control" type="text" required ><br/>
                                                            <label class="control-label" for="adicionar-fotos">Alterar categoria:</label><br/>
                                                            <?php

                                                            $lista = CadastroCategoria::getCategorias(); ?>
                                                            <select id="categoria" name="categoria" class="form-control">
                                                               <?php 
                                                                     if(count($lista) != 0){
                                                                        echo 'Nenhum trabalho cadastrado!';
                                                                    }foreach ($lista as $key => $value) { 
                                                                       echo '<option value="'.$lista[$key]->id.'">'.$lista[$key]->nome.'</option>';
                                                                    }?> 
                                                            </select>
                                                       </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                      <label for="message-text" class="control-label">Legenda:</label>
                                                      <textarea class="form-control" id="message-text"></textarea>
                                                    </div>
                                              <!-- </form> -->
                                              </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                              <button type="submit" class="btn btn-primary">Concluir</button>
                                            </div>
                                      </form>
                                      </div>
                                    </div>
                                  </div>
                      </div>
                  </div>
              </div>  
</div><!-- /.page-wrapper -->

<?PHP echo AdminGenericosHelper::getRodape(); ?>