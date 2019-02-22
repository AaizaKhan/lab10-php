<?php

$file_type=$_FILES['uploadedfile']['type'];

$allowed = array("image/jpeg", "application/pdf", "image/png");
if(!in_array($file_type, $allowed)) {
  $error_message = 'Only jpg, pdf, and png files are allowed.';

  echo $error_message;

  exit();}
else{
$target_name="uploaded_files/";
$temp_path=$_FILES['uploadedfile']['tmp_name'];

echo("Temp path:".$_FILES['uploadedfile']['tmp_name']."<br>");
echo ("Target path:".$target_name.$_FILES['uploadedfile']['name']."<br>");
$target_name=$target_name.$_FILES['uploadedfile']['name'];

  if(move_uploaded_file($temp_path,$target_name)){
	
echo("<b>File uploaded successfully </br>");
}
else{
	
	echo("<b>Cannot upload File</br>");
}

}


?>