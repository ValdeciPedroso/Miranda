<?PHP echo AdminGenericosHelper::getStyle(); ?>
<?PHP echo AdminGenericosHelper::getTopo("..::Restrito | ADM::.."); ?>

    <div id="wrapper">
         <?PHP echo AdminGenericosHelper::getMenu(); ?>
         <?PHP echo AdminGenericosHelper::setTitulo("Gerenciador de fotos","Adicionar"); ?>

        <div class=" col-md-offset-1 col-md-11">
          <div class="col-lg-12">
            <ul class="nav navbar-nav">
              <li class="disabled"><a href="admin-fotos"><i class="fa fa-table"></i> Adicionar Fotos</a></li>
              <li><a href="admin-excluir-fotos"><i class="fa fa-edit"></i> Excluir Fotos</a></li>
            </ul>
         </div><!-- /.navbar-collapse -->
       
         <div class="row">
          <!--formulario das fotos-->
             <div class="col-md-4">
              <!-- definindo enctype="multipart/form-data" -->
              <form action="recebeAlbum" method="POST" enctype="multipart/form-data">
                <fieldset>
                <div class="form-group">
                  <label class="control-label" for="adicionar-fotos">Imagem:</label><br/>
                  <input id="adicionar-fotos" name="imagens[]" multiple class="input-file" type="file"><br/>
                  <label class="control-label" for="adicionar-fotos">Nome do álbum:</label><br/>
                  <input type="text" id="email" name="nome" placeholder="Titulo..." class="form-username form-control" >
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="control-label" for="legenda">Legenda</label>  
                  <div>
                  <textarea id="legenda" name="legenda" type="text" placeholder="Descrição ... " class="form-control" row="2"></textarea>
                    
                  </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                  <label class="control-label" for="categoria">Categoria</label>
                  <div>
                    <select id="categoria" name="categoria" class="form-control">
                      <option value="1">Casamentos, Jantares, Formaturas</option>
                      <option value="2">Aniversários</option>
                    </select>
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
              </div><!--fim coluna form-->  
           </div><!--fim coluna -->   
      </div><!-- /.row -->
      </div><!-- /.page-wrapper -->
       </div> <!--fim coluna-->
 </div><!-- /#wrapper -->
 <?PHP echo AdminGenericosHelper::getRodape(); ?>

