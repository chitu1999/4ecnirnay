<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "4ecnirnaystore";

// Creating Connection
$con = mysqli_connect($servername, $username, $password, $db);

// Check Connection
if(!$con){
	die("Connection Failed: ".mysqli_connect_error());
}


?>