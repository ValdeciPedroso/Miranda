<?PHP echo AdminGenericosHelper::getStyle(); ?>
<?PHP echo AdminGenericosHelper::getTopo("..::Restrito | ADM::.."); ?>

    <div id="wrapper">
         <?PHP echo AdminGenericosHelper::getMenu(); ?>
         <?PHP echo AdminGenericosHelper::setTitulo("Gerenciador de fotos","Excluir"); ?>
    <div class="row">
          <!--formulario das fotos-->
             <div class="col-md-offset-1 col-md-11">
                  <ul class="nav navbar-nav">
                    <li><a href="admin-fotos"><i class="fa fa-table"></i> Adicionar Fotos</a></li>
                    <li  class="disabled"><a href="admin-excluir-fotos"><i class="fa fa-edit"></i> Excluir Fotos</a></li>
                  </ul>
               </div><!-- /.navbar-collapse -->

             <div class="col-md-offset-1 col-md-4">
                <fieldset>
                    <div class="accordion" id="accordion2">
                    <div class="accordion-group">
                      <div class="accordion-heading">
                        <a  class="accordion-toggle btn btn-info"  data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                          Buscar por Albúm
                        </a>
                      </div>
                      <div id="collapseThree" class="accordion-body collapse ">
                        <div class="accordion-inner">
                          <form action="admin-fotos-excluir-selecionar.php" method="post">
                            <div class="form-group">
                              <label class="control-label" for="categoria">Categoria:</label>
                                <select id="categoria" name="categoria" class="form-control">
                                  <option value="diversos">Casamento de tal...</option>
                                  <option value="banda">Anniversário do joão</option>
                                </select>
                            </div>
                                <button class="btn btn-success" >Buscar</button>
                            </form>
                         </div>   
                       </div>
                    </div><!--acordion grupo 1-->
                    <br/>
                    <div class="accordion-group">
                      <div class="accordion-heading">
                        <a  class="accordion-toggle btn btn-info"  data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                          Buscar por Categoria
                        </a>
                      </div>
                      <div id="collapseOne" class="accordion-body collapse ">
                        <div class="accordion-inner">
                          <form action="admin-fotos-excluir-selecionar.php" method="post">
                            <div class="form-group">
                              <label class="control-label" for="categoria">Categoria:</label>
                                <select id="categoria" name="categoria" class="form-control">
                                  <option value="diversos">Jantares Dançantes, casamentos e formaturas</option>
                                  <option value="banda">Banda</option>
                                  <option value="infantil">Festas Kids</option>
                                   <option value="aniversarios">Aniversarios</option>
                                   <option value="carnaval">carnaval</option>
                                </select>
                            </div>
                                <button class="btn btn-success" >Buscar</button>
                            </form>
                         </div>   
                       </div>
                    </div><!--acordion grupo 1-->
                    <br/>
                    <div class="accordion-group">
                      <div class="accordion-heading">
                        <a class="accordion-toggle btn btn-info" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                          Buscar por ordem adicionada
                        </a>
                      </div>
                      <div id="collapseTwo" class="accordion-body collapse">
                        <div class="accordion-inner">
                          <form action="admin-fotos-excluir-selecionar.php" method="post">
                            <div class="form-group2">
                              <label class="control-label" for="categoria">Ordem adicionada</label>
                              <select id="ordem" name="ordem" class="form-control">
                                <option value="0">Ordem</option>
                                <option value="1">Últimas Adicionadas</option>
                                <option value="2">Antigas</option>
                              </select>
                            </div><br />
                            <button class="btn btn-success">Buscar</button>
                          </form> 
                        </div>
                      </div>
                    </div><!--acordion grupo2-->
                  </div>
                 </fieldset>
              </div><!--fim coluna form-->  
           </div><!--fim coluna -->   
 </div><!-- /.page-wrapper -->


<?PHP echo AdminGenericosHelper::getRodape(); ?>