<?php
session_start();
if(!isset($_SESSION["username"])){
	header("location:experience.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>4eCNirnay Services</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
  </head>
  <body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><b>4eCNirnay Services</b></a>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
					<li><a href="explore.html">Explore</a></li>
					<li><a href="engage.html">Engage</a></li>
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Welcome ".$_SESSION["username"]; ?></a>
						<ul class="dropdown-menu">
							<li><a href="cartDetails.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
							<li class="divider"></li>
							<li><a href="#">Change Password</a></li>
							<li class="divider"></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</li>
					<li><a href="#" id = "cart_dropdown" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
						<div class="dropdown-menu" style="width:400px;">
							<div class="panel panel-success">
								<div class="panel-heading">
									<div class="row">
										<div class="col-md-3">Sl No</div>
										<div class="col-md-3">Product Image</div>
										<div class="col-md-3">Product Name</div>
										<div class="col-md-3">Price (In INR)</div>
									</div>
								</div>
								<div class="panel-body"></div>
									<div id="cart_details">
									</div>
								<div class="panel-footer"></div>
							</div>
						</div>
					</li>
					
				</ul>
			</div>
		</div>
	</nav>
	<p><br></p>
	<p><br></p>
	<p><br></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
			</div>
			<div class="col-md-8" id="course-msg">
			</div>
			<div class="col-md-1">
			</div>
		</div>
		<div class="row">
		<br>
			<div class="col-md-1">
			</div>
			<div class="col-md-2">
				<div id="get_disciplines">
				</div>
			</div>
			<div class="col-md-8">
				<div class="panel panel-info">
					<div class="panel-heading"><h4>Experiential Courses</h4></div>
						<div class="panel-body">
							<div id="get_select_product">
							</div>
						</div>
				</div>
			</div>
			<div class="col-md-1">
			</div>
			
		</div>
	</div>
	<div class="navbar navbar-inverse navbar-floating-bottom">
		<div class="container">
			<p align="center">
			<font color="white">Copyright 4eCNirnay Services 2016</font>
			</p>
		</div>
	</div>
	
   
  </body>
</html>