<?PHP echo AdminGenericosHelper::getStyle(); ?>
<?PHP echo AdminGenericosHelper::getTopo("..::Restrito | ADM::.."); ?>
 
    <div id="wrapper">
         <?PHP echo AdminGenericosHelper::getMenu(); ?>
         <?PHP echo AdminGenericosHelper::setTitulo("Gerenciador de Categorias","Adicionar - Excluir"); ?>
    <div class="row">
          <!--formulario das fotos-->
             <div class="col-md-offset-1 col-md-4">
                <fieldset>
                    <div class="accordion" id="accordion2">
                    <div class="accordion-group">
                      <div class="accordion-heading">
                        <a  class="accordion-toggle btn btn-info"  data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                          Adicionar Categoria
                        </a>
                      </div>
                      <div id="collapseOne" class="accordion-body collapse ">
                        <div class="accordion-inner">
                          <form action="admin-fotos-excluir-selecionar.php" method="post">
                            <div class="form-group">
                               <br/>
                               <label class="control-label">Nome categoria:</label><br/>
                              <input class="form-username form-control" for="categoria"></input>
                            </div>
                                <button class="btn btn-success" >Adicionar</button>
                            </form>
                         </div>   
                       </div>
                    </div><!--acordion grupo 1-->
                    <br/>
                    <div class="accordion-group">
                      <div class="accordion-heading">
                        <a class="accordion-toggle btn btn-info" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                          Excluir Categoria
                        </a>
                      </div>
                      <div id="collapseTwo" class="accordion-body collapse">
                        <div class="accordion-inner">
                          <form action="admin-fotos-excluir-selecionar.php" method="post">
                            <div class="form-group2">
                              <label class="control-label" for="categoria">Selecione uma categoria</label>
                              <select id="ordem" name="ordem" class="form-control">
                                <option value="0">Ordem</option>
                                <option value="1">Últimas Adicionadas</option>
                                <option value="2">Antigas</option>
                              </select>
                            </div><br />
                            <button class="btn btn-danger">Buscar</button>
                          </form> 
                        </div>
                      </div>
                    </div><!--acordion grupo2-->
                  </div>
                 </fieldset>
              </div><!--fim coluna form-->  
           </div><!--fim coluna -->   
      </div><!-- /.row -->
 </div><!-- /.page-wrapper -->


<?PHP echo AdminGenericosHelper::getRodape(); ?>