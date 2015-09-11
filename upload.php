<?php

$tmp_file = $_FILES['image']['tmp_name'];
$file_name = $_FILES['image']['name'];

var_dump($tmp_file);
var_dump($file_name);

move_uploaded_file($tmp_file, "uploads/" . $file_name);
