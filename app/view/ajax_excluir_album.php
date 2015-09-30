<?php 
	
   $id = $_GET['id'];
   $path = "assets/img/album-img/$id/";
   $diretorio = dir($path);
   if(is_dir($path)){//se for um diretorio
        // echo "Lista de Arquivos do diretório '<strong>".$path."</strong>':<br />";    
       while($arquivo = $diretorio->read()){
           // echo "<a href='".$path.$arquivo."'>".$arquivo."</a><br />";
       		if(!is_dir($path.$arquivo))
           		unlink($path.$arquivo);//excluindo arquivos
       }

       rmdir($path) or die("Erro ao excluir diretório");// excluindo pasta
    }

   if(CadastroAlbumController::delete($id)){
   		echo '<script>alert("Algum excluido com sucesso!"); window.location = "admin-excluir-album"</script>';
   }else{
   		echo '<script>alert("Falha ao excluir album!"); window.location = "admin-excluir-album"</script>';
   }

	
 ?>