<?PHP echo AdminGenericosHelper::getStyle(); ?>
<?PHP echo AdminGenericosHelper::getTopo("..::Restrito | ADM::.."); ?>

    <div id="wrapper">
         <?PHP echo AdminGenericosHelper::getMenu(); ?>
         <?PHP echo AdminGenericosHelper::setTitulo("Gerenciador de fotos","Excluir"); ?>
        
          <!--formulario das fotos-->
             <div >
                  <ul class="nav nav-tabs">
                    <li role="presentation"><a href="admin-fotos">Cadastrar</a></li>
                    <li role="presentation" class="active"><a href="#">Editar e Excluir</a></li>
                  </ul>
               </div><!-- /.navbar-collapse -->

             <div class="well well-lg">
                  <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title">Ordenar por:</h3>
                  </div>
                  <div class="panel-body">
                    
                    <select id="ordem" name="ordem">
                          <option value="0">Categoria</option>
                          <option value="1">Últimas Adicionadas</option>
                          <option value="2">Antigas</option>
                     </select>
                     <select id="ordem" name="Ordem" >
                          <option value="0">Ordem</option>
                          <option value="1">Últimas Adicionadas</option>
                          <option value="2">Antigas</option>
                     </select>
                     <select id="ordem" name="ordem" >
                          <option value="0">Ordem</option>
                          <option value="1">Últimas Adicionadas</option>
                          <option value="2">Antigas</option>
                     </select>
                  </div>
                </div>
                <div class="row clearfix">
                  <div class="thumbnail">
                      <div class="row ">
                          <?php $ultimosTrabalhos = new CadastroAlbumController();
                           $lista = $ultimosTrabalhos->getUltimosAlbuns(4); ?>
                         <?php
                            if(count($lista) == 0){
                                echo 'Nenhum trabalho cadastrado!';
                            }foreach ($lista as $key => $value) { ?>
                         <div class="col-lg-3" >
                           <div class="panel panel-default">
                           <div class="panel-body">
                                <?php 
                                  $cadastroImagemController = new CadastroImagemController();
                                  $imagens = $cadastroImagemController->getImagensAlbum($lista[$key]->id);
                                ?>
                               <?php echo' <a class="thumbnail sb DivFoto" href="assets/img/album-img/'.$lista[$key]->id.'/'.$imagens[0]->endereco.'" > <img class="foto" src="assets/img/album-img/'.$lista[$key]->id.'/'.$imagens[0]->endereco.'"> </a>'; ?>
                              <div class="breadcrumb legendas">
                                <small>legendas.... Neque porro quisquam est qui dolorem ipsum quia dolor sit</small>
                              </div>
                              <center>
                                <button type="button" class="btn btn-info" aria-label="Left Align" data-toggle="modal" data-target=".bs-example-modal-sm">
                                  <span class="glyphicon glyphicon-wrench" ></span>
                                </button>
                                 <button type="button" class="btn btn-warning" aria-label="right Align">
                                  <span class="glyphicon glyphicon-remove" ></span>
                                </button>
                              </center>  
                           </div>
                           </div>
                         </div>
                         <?php } ?>
                          <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                          <h4 class="modal-title" id="gridSystemModalLabel">Editar Foto:</h4>
                                        </div>
                                        <div class="modal-body">
                                          <div class="container-fluid">
                                            <div class="row">
                                              <div class="form-group">
                                                    <label class="control-label" for="adicionar-fotos">Selecione para alterar a imagem.</label><br/>
                                                    <small><input id="adicionar-fotos" name="imagens[]" multiple class="input-file" type="file"></small><br/>
                                                    <label class="control-label" for="adicionar-fotos">Alterar álbum:</label><br/>
                                                    <select id="ordem" name="Ordem" class="form-username form-control">
                                                      <option value="0">Ordem</option>
                                                      <option value="1">Últimas Adicionadas</option>
                                                      <option value="2">Antigas</option>
                                                    </select>
                                               </div>
                                            </div>
                                            <form>
                                            <div class="form-group">
                                              <label for="message-text" class="control-label">Legenda:</label>
                                              <textarea class="form-control" id="message-text"></textarea>
                                            </div>
                                          </form>
                                          </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                          <button type="button" class="btn btn-primary">Concluir</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                      </div>
                  </div>
              </div>  
</div><!-- /.page-wrapper -->

<?PHP echo AdminGenericosHelper::getRodape(); ?>