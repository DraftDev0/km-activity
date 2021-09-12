<?php 

session_start();
ob_start();


require_once "dblink.php";




$username_err = $username = "";
$password_err = $password =  "";



//check username
if(isset($_POST['save'])){

	if(empty(trim($_POST["username"]))){
		$username_err = "Please enter username.";
	}else{

		$username = trim($_POST["username"]);
	}

if(empty(trim($_POST["password"]))){
	$password_err = "Please enter username.";
}else{
	$password = trim($_POST["password"]);
}


	if(empty($username_err) && empty($password_err)){

		$sql = "SELECT *  FROM km_userlogin 
		Where  km_userlogin.Name = '$username' AND km_userlogin.IsActive = 1";
		$stmt = mysqli_query($link,$sql);

				if(mysqli_num_rows($stmt) > 0){
					
					while($row = mysqli_fetch_assoc($stmt)){


						if(password_verify($password, $row["Password"]))  {


								$_SESSION["loggedin"] = true;
								$_SESSION["Id"] = $row['UserID'];
								$_SESSION["Name"] = $row['Name'];
								mysqli_close($link);
								header("location: ../index.php");

						}else {
							$passowrd_err = "passowrd not have in database";
							echo  "passowrd not have in database";
						}
					
					}

				}else{
					$username_err = "username not have in database";
				}				
		}
	}


?>
