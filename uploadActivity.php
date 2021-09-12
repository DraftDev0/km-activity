<?php

session_start();



//upload.php
$folder_name = "";
$name  = "";
$formid = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$folder_name = 'upload/images/';
$name = $_POST['fname'];
$formid = $_POST['formid'];


if(!empty($_FILES))
{
 $temp_file = $_FILES['file']['tmp_name'];
 $location = $folder_name . ($formid. $_FILES['file']['name']);
 move_uploaded_file($temp_file, $location);

 if(!isset($_SESSION["uploadActivity"])){
 
  $_SESSION["uploadActivity"][]  = true;
  $_SESSION["upload_idActivity"][] = $formid;
  $_SESSION["upload_fileActivity"][] = $temp_file;
  $_SESSION["upload_pathActivity"][] = $location;

 }else {
  array_push($_SESSION["upload_idActivity"],$formid);
  array_push($_SESSION["upload_fileActivity"],$temp_file);
  array_push($_SESSION["upload_pathActivity"],$location);
 }
}





}

?>
