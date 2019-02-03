<?php

//set file name
$file = "myfile.txt";
//read file contents into string
$str = file_get_contents($file);
echo $str ."<br>";

//count words
$numwords = str_word_count($str);
echo "counted " . $numwords . " word(s).<br>";

$numwords2 = explode(" ", $str);
print_r($numwords2);

//count lines in the file
echo "counted " . count(file($file)) ." line(s). <br>";


?>