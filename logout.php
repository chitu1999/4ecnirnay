<?php
session_start();
unset($_SESSION["uid"]);
unset($_SESSION["username"]);
header("location:experience.php");

?>