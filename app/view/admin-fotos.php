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
              <form>
                <fieldset>
                <div class="form-group">
                  <label class="control-label" for="adicionar-fotos">Imagem:</label><br/>
                  <input id="adicionar-fotos" name="adicionar-fotos" class="input-file" type="file"><br/>
                  <label class="control-label" for="adicionar-fotos">Nome do albúm:</label><br/>
                  <input type="text" id="email" name="titulo" placeholder="Titulo..." class="form-username form-control" >
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
                    <button id="enviar" name="enviar" class="btn btn-danger">Cancelar</button>
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

