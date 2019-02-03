<?php

$myfile = 'myrollnum.txt';
$fileread = file($myfile);
print_r($fileread);
//append
$handle = fopen($myfile, 'a');
$data = '16SW159';
$result=fwrite($handle,$data);
if($result)
	echo "written succesfully";

else
	echo "problem in writing to file";



fclose($handle);

$displayfile = file($myfile);
echo (implode($displayfile));
?>