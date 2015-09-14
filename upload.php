<?php
$fileName = $_FILES["csvfile"]["name"];
$filetmp = $_FILES["csvfile"]["tmp_name"];

echo $filetmp;
if(!$filetmp){
  echo "error: please browse for a file before submiting!";
  exit();
}

if(move_uploaded_file($filetmp, "uploads/$fileName")){
  echo "$fileName upload complete!";
}else{
  echo "move_uploaded_file function failed!";
}
 ?>
