<?php 
session_start();
ob_start();
require_once "dblink.php";

/*
  echo "Test"; 
  echo "<br>";
  echo $_POST["DocId"];//temp id
  echo "<br>";
  echo $_POST["AgencyId"];
  exit();
    */

  $idtemp = $_POST["DocId"];
  $agencyId = $_POST["agencyId"];
  $doctypeid = $_POST["type"];
  $userid = $_SESSION["Id"];
  $datetime = date('Y-m-d H:i:s');

  $sql = "INSERT INTO `km_activity` (`ActivityID`, `Name`, `Description`, `ActivityTypeID`, `AgencyID`, `CategoryID`, `IsActive`, `CreateOn`, `CreateBy`, `UpdateOn`, `UpdateBy`) VALUES (NULL, NULL, NULL, '".$doctypeid."', '".$agencyId."', NULL, '".$userid."', '".$datetime."', '1', '".$datetime."', '".$userid."')";

  if (mysqli_query($link, $sql)) {

  if(isset($_SESSION["uploadDoc"])) {

    $last_id = mysqli_insert_id($link);
    $uniqid = $_SESSION["upload_idDoc"];
    $tempName = $_SESSION["upload_fileDoc"];
    $tempPath = $_SESSION["upload_pathDoc"];
    
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

   /* echo "ID FROM";
    echo "<br>";
    echo $idtemp;
    echo "ID Upload";
    echo "<br>";
    print_r($Uniqid);
    exit();*/
  
    $Length = count($FilePath);


    for ($x = 0; $x <= $Length; $x++) {

      if($Uniqid[$x] == $idtemp) {


        $fileExists = ("../".$FilePath[$x]);

        if (file_exists($fileExists)) {
    $filename_value = substr($FilePath[$x],30);
    $strSQL = "";
    $strSQL = "INSERT INTO km_activityuploadfild ";
    $strSQL = "INSERT INTO `km_activityuploadfild` (`ActivityUploadFileID`, `activityID`, `TopicID`, `FileName`, `FileType`, `FileData`, `FilePath`, `IsActive`, `Remark`, `CreateOn`, `CreateBy`, `UploadOn`, `UploadBy`) VALUES (NULL, '$last_id', '0', '$filename_value', '', '', '$FilePath[$x]', '1', '', '$datetime', '$userid', '$datetime', '$userid');";
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