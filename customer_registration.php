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
					<li><a href="index.html"><span class="glyphicon glyphicon-home"></span>Home</a></li>
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>Login</a>
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
										<input type="submit" class="btn btn-success" style="float:right" id="login" value="Login">
									</div>
									<div class="panel-footer" id="e-msg"></div>
								</div>
							</div>
						</ul>
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
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg"></div>
			<div class="col-md-2"></div>
		</div>
				<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Customer SignUp Form</div>
					<div class="panel-body">
					<form method="post">
						<div class="row">
							<div class="col-md-6">
								<label for="f_name">First Name</label>
								<input type="text" id="f_name" name="f_name" class="form-control">
							</div>
							<div class="col-md-6">
								<label for="l_name">Last Name</label>
								<input type="text" id="l_name" name="l_name" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" id="email" name="email" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="password">Password</label>
								<input type="password" id="password" name="password" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="repassword">Re-enter Password</label>
								<input type="password" id="repassword" name="repassword" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="mobile">Mobile</label>
								<input type="text" id="mobile" name="mobile" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address1">Address Line 1</label>
								<input type="text" id="address1" name="address1" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="password">Address Line 2</label>
								<input type="text" id="address2" name="address2" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="class">Class</label>
								<input type="text" id="class" name="class" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="school">School</label>
								<input type="text" id="school" name="school" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input style="float:right;" value = "Sign Up" type="button" id="signup_button" name="signup_button" class="btn btn-success btn-lg">
							</div>
						</div>
					</div>
					</form>
					<div class="panel-footer"></div>
				</div>
			</div>
		</div>
	</div>
</body>