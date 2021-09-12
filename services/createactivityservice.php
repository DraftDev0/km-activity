<?php 
session_start();
ob_start();
require_once "dblink.php";
  /*echo "Test"; 
  echo "<br>";
  echo $_POST["Activity"];//temp id
  echo "<br>";
  echo $_POST["type"];
  echo "<br>";
  echo $_POST["Name"];
  echo "<br>";
  echo htmlentities($_POST["details"]);
  echo "<br>";



  
*/





  $idtemp = $_POST["Activity"];
  $name = $_POST["Name"];
  $activitytypeid = $_POST["type"];
  $description = htmlentities($_POST["details"]);
  $userid = $_SESSION["Id"];
  $datetime = date('Y-m-d H:i:s');


  $sql = "INSERT INTO km_activity (Name,Description,IsActive,ActivityTypeID,CreateOn,CreateBy,UpdateOn,UpdateBy)
  VALUES ('".$name."','".$description."','1','".$activitytypeid."','".$datetime."','".$userid."','".$datetime."','1');";

  //echo $sql; exit();

  if (mysqli_query($link, $sql)) {

  if(isset($_SESSION["uploadActivity"])) {

    $last_id = mysqli_insert_id($link);
    $uniqid = $_SESSION["upload_idActivity"];
    $tempName = $_SESSION["upload_fileActivity"];
    $tempPath = $_SESSION["upload_pathActivity"];
    
    $FilePath = array();
    $Uniqid = array();

    $num = 0;
    foreach ($tempPath as $value) {
      $FilePath[$num] = $value;
      $num++;
    }
    
    $num = 0;
    foreach ($uniqid as $value) {
      $Uniqid[$num] = $value;
      $num++;
    }

  
    $Length = count($FilePath);

    for ($x = 0; $x <= $Length; $x++) {

      if($Uniqid[$x] == $idtemp) {

    //$fileExists = "../upload/images/6125b5d8702471.jpg";
    $fileExists = ("../".$FilePath[$x]);
     if (file_exists($fileExists)) {

    $filename_value = substr($FilePath[$x],27);
    $strSQL = "";
    $strSQL = "INSERT INTO km_activityuploadfild ";
    $strSQL = "INSERT INTO `km_activityuploadfild` (`ActivityUploadFileID`, `activityID`, `TopicID`, `FileName`, `FileType`, `FileData`, `FilePath`, `IsActive`, `Remark`, `CreateOn`, `CreateBy`, `UploadOn`, `UploadBy`) VALUES (NULL, '$last_id', '', '$filename_value', '', '', '$FilePath[$x]', '1', '', '$datetime', '$userid', '$datetime', '$userid');";
    mysqli_query($link,$strSQL);

      }
    }
  }
}
}

unset($_SESSION["uploadActivity"]);
unset($_SESSION["upload_idActivity"]);
unset($_SESSION["upload_fileActivity"]);
unset($_SESSION["upload_pathActivity"]);
unset($_SESSION["uploadDoc"]);
unset($_SESSION["upload_idDoc"]);
unset($_SESSION["upload_fileDoc"]);
unset($_SESSION["upload_pathDoc"]);

  mysqli_close($link);
  header("location: ../index.php");



?>