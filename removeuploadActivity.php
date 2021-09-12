<?php 
//3.jpg
if (isset($_POST['id'])) {
  if (unlink("upload/images/".$_POST['id'])) {
  }
}

?>