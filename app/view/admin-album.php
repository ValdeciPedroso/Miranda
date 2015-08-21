<?PHP echo AdminGenericosHelper::getStyle(); ?>
<?PHP echo AdminGenericosHelper::getTopo("..::Restrito | ADM::.."); ?>

    <div id="wrapper">
         <?PHP echo AdminGenericosHelper::getMenu(); ?>
         <?PHP echo AdminGenericosHelper::setTitulo("Gerenciador de Albuns","Adicionar"); ?>

              <div >
                  <ul class="nav nav-tabs">
                    <li role="presentation" class="active"><a href="#">Cadastrar</a></li>
                    <li role="presentation" ><a href="admin-excluir-album">Editar e Excluir</a></li>
                  </ul>
               </div><!-- /.navbar-collapse -->

             <div class="well well-lg">
                  <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title">Enviar:</h3>
                  </div>
                  <div class="panel-body">
                    <div  class="col-md-4">
              <!-- definindo enctype="multipart/form-data" -->
              <form action="recebeAlbum" method="POST" enctype="multipart/form-data">
                <fieldset>
                <div class="form-group">
                  <label class="control-label" for="adicionar-fotos">Nome:</label><br/>
                  <input id="adicionar-album" name="name" multiple class="form-control" type="text" required ><br/>
                  <div class="form-group">
                  <label class="control-label" for="album">Escolha uma categoria:</label>
                  <div>
                    <?php $albuns = new CadastroAlbumController();
                    $lista = CadastroCategoria::getCategorias(); ?>
                    <select id="album" name="album" class="form-control">
                       <?php 
                             if(count($lista) != 0){
                                echo 'Nenhum trabalho cadastrado!';
                            }foreach ($lista as $key => $value) { 
                               echo '<option value="'.$lista[$key]->id.'">'.$lista[$key]->nome.'</option>';
                            }?> 
                    </select>
                  </div>
                </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="control-label" for="legenda">Legenda</label>  
                  <div>
                  <textarea id="legenda" name="legenda" type="text" placeholder="Descrição ... " class="form-control" row="2"></textarea>
                    
                  </div>
                </div>

                <!-- Button (Double) -->
                <div class="form-group">
                  <label class="control-label" for="button1id"></label>
                  <div >
                    <button id="button1id" name="button1id" class="btn btn-success">Enviar</button>
                    <input type="button" class="btn btn-danger" value="Cancelar">
                  </div>
                </div>

                </fieldset>
                </form>

                    
                  </div>
                </div>
           </div><!--fim coluna -->   
 </div><!-- /.page-wrapper -->


<?PHP echo AdminGenericosHelper::getRodape(); ?>

