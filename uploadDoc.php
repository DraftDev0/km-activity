<?php

session_start();



//upload.php
$folder_name = "";
$name  = "";
$formid = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$folder_name = 'upload/';
$name = $_POST['fname'];
$formid = $_POST['formid'];


if(!empty($_FILES))
{
 $temp_file = $_FILES['file']['tmp_name'];
 $location = $folder_name . ($formid. $_FILES['file']['name']);
 move_uploaded_file($temp_file, $location);

 if(!isset($_SESSION["uploadDoc"])){
 
    $_SESSION["uploadDoc"][]  = true;
    $_SESSION["upload_idDoc"][] = $formid;
    $_SESSION["upload_fileDoc"][] = $temp_file;
    $_SESSION["upload_pathDoc"][] = $location;

 }else {
  array_push($_SESSION["upload_idDoc"],$formid);
  array_push($_SESSION["upload_fileDoc"],$temp_file);
  array_push($_SESSION["upload_pathDoc"],$location);
 }
}





}

?>
