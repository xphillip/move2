<?php
if(!empty($_FILES)){

	$targetDir = "uploads/".$_GET["cu"]."/";
	$fileName = $_FILES['file']['name'];
	$targetFile = $targetDir.$fileName;
	if(move_uploaded_file($_FILES['file']['tmp_name'],$targetFile)){
	}}
?>