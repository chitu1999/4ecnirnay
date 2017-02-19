<?php
include "db.php";
session_start();

if(isset($_POST["getuser"])){
	$useremail = $_POST["user_email"];
	$userpwd = md5($_POST["user_password"]);
	$user_query = "SELECT * FROM user_info WHERE email='$useremail' AND password='$userpwd'";
	$run_userquery = mysqli_query($con,$user_query);
	
	if(mysqli_num_rows($run_userquery) > 0){
			$row = mysqli_fetch_array($run_userquery);
			$_SESSION["uid"] = $row["user_id"];
			$_SESSION["username"] = $row["first_name"];
			echo "true";
		}
}
?>