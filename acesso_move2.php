<html>
<head>
    <title></title>
</head>
<body>

    <table width="50%" border="0" align="center">
        <tr bgcolor="#CCCCCC">
            <td width="60%">
                <div align="center"><strong>
                        <font size="2" face="Verdana, Arial, Helvetica, sans-serif">Arquivo</font>
                    </strong></div>
            </td>

            <td width="40%">
                <div align="center"><strong>
                        <font size="2" face="Verdana, Arial, Helvetica, sans-serif">Data de Upload</font>
                    </strong></div>
            </td>
        </tr>
        <?php

$cu = "j1zC9W";
/* Script para listar arquivos do diretório, com os respectivos links */
//if ($handle=opendir("uploads/".$cu."/")) {
//abre diretório para leitura

if ($handle=opendir(".")) { //abre diretório para leitura
      $x=0;

      while (false!==($file=readdir($handle))) {            //lê arquivos do diretório
         if ($file!="." && $file!=".." && $file!="index.php" && $file!="acesso_move2.php") {               //evita leitura de . e ..
               $matrix[$x]=$file;                     //armazena nomes dos arquivos na matriz
               $x++;
         } //if
      } //while

      closedir($handle);                              //fecha o diretório

   } //if

   $x=0;
   while($matrix[$x]) {                              //imprime links com nomes dos arquivos

      if($x%2==0) {
         echo '<tr bgcolor="#FFFFCC">';
      } //if

      else {
         echo '<tr bgcolor="#FFFF99">';
      } //else

      echo '   

            <td><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><a href="'.$matrix[$x].'">'.$matrix[$x].'</a></font></strong></td>

            <td align="center"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">'.date("d/m/Y - H:i", filemtime($matrix[$x])).'</font></strong></td>

         </tr>

      ';

      $x++;

   } //while

?>
    </table>

</body>

</html>

<?php
/*

$cu = "j1zC9W";
$pasta = 'uploads/'.$cu.'/';
if(is_dir($pasta))
{

$diretorio = dir($pasta);
while(($arquivo = $diretorio->read()) !== false)
{
echo '<a href='.$pasta.$arquivo.'>'.$arquivo.'</a><br />';
}

$diretorio->close();
}
else
{
echo 'A pasta não existe.';
}*/

?>