<?php

include "db.php";

$f_name = $_POST["f_name"];
$l_name = $_POST["l_name"];
$email = $_POST["email"];
$password = $_POST["password"];
$repassword = $_POST["repassword"];
$mobile = $_POST["mobile"];
$address1 = $_POST["address1"];
$address2 = $_POST["address2"];
$class = $_POST["class"];
$school = $_POST["school"];
$name = "/^[A-Z][a-zA-Z ]+$/";
$emailvalidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
$number = "/^[0-9]+$/";

if(empty($f_name) || empty($l_name) || empty($email) || empty($password) || empty($repassword) || empty($mobile) || empty($address1) || empty($address2) || empty($class) || empty($school))
{
	echo "
		<div class='alert alert-warning'>
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>All fields need to be filled</b>
		</div>	
	";
	exit();
}
else{
	if(!preg_match($name,$f_name))
	{
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>First Name not Valid.Only Alphabets Allowed</b>
			</div>	
		";
		exit();
	}
	if(!preg_match($name,$l_name))
	{
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Last Name not Valid.Only Alphabets Allowed</b>
			</div>	
		";
		exit();
	}
	if(!preg_match($emailvalidation,$email))
	{
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Email not Valid.</b>
			</div>	
		";
		exit();
	}
	if(!preg_match($number,$mobile) || strlen($mobile)!= 10)
	{
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Mobile not Valid</b>
			</div>	
		";
		exit();
	}
	if(!preg_match($number,$class))
	{
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Class not Valid.Only Numbers Allowed</b>
			</div>	
		";
		exit();
	}
	if(strlen($password)<9)
	{
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Password should have at least 9 characters</b>
			</div>	
		";
		exit();
	}
	if($password != $repassword)
	{
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Password & Reenter Password doesnt Match</b>
			</div>	
		";
		exit();
	}
	$check_query = "SELECT user_id FROM user_info WHERE email = '$email'";
	$run_checkquery = mysqli_query($con,$check_query);
	if(mysqli_num_rows($run_checkquery) > 0){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Email Address already Registered</b>
			</div>	
		";
		exit();
	}
	else{
		$enc_password = md5($password);
		$sql = "INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, 
		`address1`, `address2`, `class`, `school`) 
		VALUES (NULL, '$f_name', '$l_name', '$email', '$enc_password', '$mobile', '$address1', '$address2', '$class', '$school');";
		$run_insert = mysqli_query($con,$sql);
		if($run_insert){
			echo "
			<div class='alert alert-success'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>You have been successfully Registered</b>
			</div>	
			";
		exit();
		}
	}
}


?>