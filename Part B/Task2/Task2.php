<?php
if($_FILES['uploadedfile']['type'] == 'text/plain' && strrpos($_FILES['uploadedfile']['name'], '.txt') === strlen($_FILES['uploadedfile']['name']) - strlen('.txt')){
$target_name="uploaded_files/";
$temp_path=$_FILES['uploadedfile']['tmp_name'];

echo("Temp path:".$_FILES['uploadedfile']['tmp_name']."<br>");
echo ("Target path:".$target_name.$_FILES['uploadedfile']['name']."<br>");
$target_name=$target_name.$_FILES['uploadedfile']['name'];

  if(move_uploaded_file($temp_path,$target_name)){
	
echo("<b>File uploaded successfully</br>");

echo "READING THE UPLOADED FILE:</b><br>";

    $handle = fopen($target_name, 'rb');
    while ( ($line = fgets($handle)) !== false) {
      echo "$line<br>";

}

echo "<b>WRITING THE UPLOADED FILE:</b><br>";
 $handle = fopen($target_name, 'w');
fwrite($handle, 'This content is written in the uploaded file of 16SW04 and 16SW22 ');
    fclose($handle);
    $fp=fopen($target_name, 'rb');
    while ( ($line = fgets($fp)) !== false) {
      echo "$line<br>";
    }


echo "<b>COPYING THE UPLOADED FILE</b><br>";
  $filePath = realpath($target_name);   
	 $newfn = 'copyFile.txt'; 
	 
	 if(copy($filePath,$newfn)){
	 echo 'The uploaded file was copied successfully <br>';}
	 else{
	 echo 'Error in copying the uploaded file <br>';}

echo "<b>RENAME THE UPOADED FILE</b><br>";
 $newfnren = 'newFile.txt';
	 
	if(rename($newfn,$newfnren)){
	 echo sprintf("%s was renamed to %s <br>",$newfn,$newfnren);
	}else{
	 echo 'The uploaded file cannot be renamed <br>';}

echo "<b>DELETE THE UPLOADED FILE</b><br>";
 if(unlink($newfnren)){
	 echo sprintf("The uploaded file %s  is deleted successfully <br>",$newfnren);
	}else{
	 echo sprintf("Cannot delete the uploaded file %s <br>",$newfnren);
	}

}
else{
	
	echo("<b>Cannot upload File</br>");
}

}  

else
{

	echo "Only Text Files are Allowed to be uploaded";
}





?>