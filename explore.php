<?php
session_start();
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
					<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
					<li><a href="experience.php">Experience</a></li>
					<li><a href="engage.html">Engage</a></li>
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Login</a>
						<ul class="dropdown-menu">
							<div style="width:300px">
								<div class="panel panel-primary">
									<div class="panel-heading">Login</div>
									<div class="panel-heading">
										<label for="email">Email</label>
										<input type="email" class="form-control" id="email" required/>
										<label for="email">Password</label>
										<input type="password" class="form-control" id="password" required/>
										<p><br></p>
										<a href="#" style="color:white; list-style:none;">Forgot Password</a>
										<input type="submit" class="btn btn-success" style="float:right" id="explogin" value="Login">
									</div>
									<div class="panel-footer" id="e-msg"></div>
								</div>
							</div>
						</ul>
					</li>
					<li><a href="customer_registration.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span> Cart <span class="badge">0</span></a>
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
								<div class="panel-footer"></div>
							</div>
						</div>
					</li>
					
				</ul>
			</div>
		</div>
	</nav>
	<br><br>
	<div class="container-fluid">
		<div class="row">
		<br>
			<div class="col-md-1">
			</div>
			<div class="col-md-2">
				<div id="get_coldisciplines">
				</div>
			</div>
			<div class="col-md-9">
				<div class="panel panel-info">
					<div class="panel-heading"><h4>College Details</h4></div>
						<div class="panel-body">
							<div id="get_select_college">
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