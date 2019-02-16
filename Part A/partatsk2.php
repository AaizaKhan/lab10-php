<?php


if(file_exists("dummyfile.pdf")){
  copy("dummyfile.pdf","dummyfile.txt");
  echo "converted successfully";
}

?>