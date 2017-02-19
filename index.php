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
			<?php 
			if(!isset($_SESSION["username"])){
			?>	
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="explore.html">Explore</a></li>
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
				</ul>
			</div>
			<?php 
			} else{
			?>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="explore.html">Explore</a></li>
					<li><a href="experience.php">Experience</a></li>
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
					</li>
					
				</ul>
			</div>
			<?php 
			}
			?>
		</div>
	</nav>
	<div class="jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<br><img src="images/graduation-party.jpg" width="100%" height="470px">
			</div>
			<div class="col-md-4">
				<br><a href="explore.html"><img class="img-rounded" src="images/exploreicon.jpg" width="80%" height="145"></a><br><br>
				<a href="experience.php"><img class="img-rounded" src="images/experienceicon.jpg" width="80%" height="145"></a><br><br>
				<a href="#"><img class="img-rounded" src="images/engageicon.jpg" width="80%" height="145"></a>
			</div>
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
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>