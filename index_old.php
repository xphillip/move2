<?php

// GERADOR DE CU
include("gera_cu.php");
$nomedodiretorio_novo = geraCu(6);

// CRIANDO PASTA USANDO O CU DOS OUTROS
mkdir("uploads/".$nomedodiretorio_novo) or die("erro ao criar diretório");
//echo "Pasta  " .$nomedodiretorio_novo. "  Criada com sucesso.............";

// COPIANDO ARQUIVO ACESSO PARA DAR PERMISSÃO E LISTAR ARQUIVOS NA PASTA DO CU
$arquivo_origem = "uploads/acesso/acesso.php";
$arquivo_destino = "uploads/".$nomedodiretorio_novo."/index.php";
copy($arquivo_origem, $arquivo_destino)
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<!-- Add Dropzone -->
<link rel="stylesheet" type="text/css" href="css/dropzone.css" />
<script type="text/javascript" src="js/dropzone.js">
dictDefaultMessage: "Olá";
</script>
</head>
<body>
<h1>Arraste seus arquivos ou clique para realizar seu upload</h1>
<div class="image_upload_div">
<form action="upload.php?cu=<?php echo $nomedodiretorio_novo;?>" class="dropzone">
</form>
</div> 	
</body>
</html>


    

    
    
    
    
    

