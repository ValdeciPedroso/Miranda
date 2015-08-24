<?php 
     $id_album = $_GET['id'];
     $album = CadastroAlbum::getAlbumId($id_album);
 ?>
<script type="text/javascript">
	function carregaCategoria(id){
		var combo = document.getElementById('categoria');
		for(i = 0; i < combo.length; i++){
			if(combo.options[i].value == id){
				combo.options[i].selected = true;
			}

		}
	}

</script>
<div class="container-fluid">
                                                
    <div class="row">
      
      <div class="form-group" id="result_ajax">
      		<input type="hidden" name="id" value="<?php echo $id_album; ?>">
            <label class="control-label" for="adicionar-fotos">Nome:</label><br/>
			<input id="adicionar-album" name="nome" multiple class="form-control" value="<?php echo $album[0]->nome; ?>" type="text" required ><br/>
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

            <?php
            	//carrega a opção selecionada no select
            	echo '<script>carregaCategoria("'.$album[0]->id_categoria.'");</script>';
            ?>
       </div>
    </div>
    
    <div class="form-group">
      <label for="message-text" class="control-label">Legenda:</label>
      <textarea class="form-control" name="legenda" id="message-text"> <?php echo $album[0]->legenda; ?> </textarea>
    </div>
<!-- </form> -->
</div>