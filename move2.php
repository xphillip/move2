<?php

// GERADOR DE CU
include("gera_cu.php");
$nomedodiretorio_novo = geraCu(8);

// CRIANDO PASTA USANDO O CU DOS OUTROS
mkdir("uploads/".$nomedodiretorio_novo) or die("erro ao criar diretório");
//echo "Pasta  " .$nomedodiretorio_novo. "  Criada com sucesso.............";

// COPIANDO ARQUIVO ACESSO PARA DAR PERMISSÃO E LISTAR ARQUIVOS NA PASTA DO CU
$arquivo_origem1 = "uploads/acesso/acesso.php";
$arquivo_destino1 = "uploads/".$nomedodiretorio_novo."/index.php";
copy($arquivo_origem1, $arquivo_destino1);

// COPIANDO ARQUIVO ACESSO PARA DAR PERMISSÃO E LISTAR ARQUIVOS NA PASTA DO CU
$arquivo_origem2 = "uploads/acesso/acesso_move2.php";
$arquivo_destino2 = "uploads/".$nomedodiretorio_novo."/acesso_move2.php";
copy($arquivo_origem2, $arquivo_destino2);

// URL de acesso arquivo
$urlacesso = "uploads/".$nomedodiretorio_novo;

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<!-- Add Dropzone -->
<link rel="stylesheet" type="text/css" href="css/dropzone.css" />
<script type="text/javascript" src="js/dropzone.js">
dictDefaultMessage: "Olá";
var copyTextareaBtn = document.querySelector('.js-textareacopybtn');
</script>
<script src="js/clipboard.min.js">
new Clipboard('.btn');
</script>
</head>
<body>
<h3>Arraste seus arquivos ou clique para realizar seu upload</h3>
<br />
<br />
<div class="image_upload_div">
<form action="upload.php?cu=<?php echo $nomedodiretorio_novo;?>" class="dropzone">
</form>

<p>&nbsp;</p>
<h3>Após realizar o upload de seus arquivos, clique em Copiar URL.</h3>
<p><b>URL: </b><input name="" id="foo" type="text" value="<?php echo "http://apromotora.com/move2/".$urlacesso?>" size="70">
<button class="btn" data-clipboard-action="copy" data-clipboard-target="#foo">Copiar URL</button></p>

    <!-- 2. Include library -->
    <script src="dist_clipboard/clipboard.min.js"></script>

    <!-- 3. Instantiate clipboard -->
    <script>
    var clipboard = new Clipboard('.btn');

    clipboard.on('success', function(e) {
        console.log(e);
    });

    clipboard.on('error', function(e) {
        console.log(e);
    });
    </script>
</div> 	
</body>
</html>