<?php
session_start();
include "db.php";
if(isset($_POST["discipline"])){
	$discipline_query = "SELECT * FROM discipline_info";
	$run_query = mysqli_query($con,$discipline_query);
	echo "
		<div class='nav nav-pills nav-stacked'>
			<li class='active'><a href='#'><h4>Disciplines</h4></a></li>
	";
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$did = $row["discipline_id"];
			$dname = $row["discipline_title"];
			echo "
				<li><a href='#' class='dis' did='$did'>$dname</a></li>
			";
		}
		echo "</div>";
	}
}
if(isset($_POST["getProduct"])){
	$did = $_POST["dis_id"];
	$product_query = "SELECT * FROM course_info WHERE course_discipline='$did'";
	$run_query = mysqli_query($con,$product_query);
	
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$cid = $row["course_id"];
			$cname = $row["course_title"];
			$cimage = $row["course_image"];
			$ctype = $row["course_type"];
			$cprice = $row["course_price"];
			$ccollege = $row["course_college"];
			$college_query = "SELECT * FROM college_info WHERE college_id='21'";
			$run_Collquery = mysqli_query($con,$college_query);
			$rowcollege = mysqli_fetch_array($run_Collquery);
			$collegename = $rowcollege["college_name"];
			echo "
				<div class='col-md-4'>
					<div class='panel panel-info'>
						<div class='panel-heading' align='center'>$cname</div>
							<div class='panel-body' align='center'>
								<img src='images/$cimage' style='width:100px; height:100px;'/>
							</div>
							<div class='panel-heading'>$collegename</div>
							<div class='panel-heading'>INR $cprice.00
								<button style='float:right;' cid='$cid' id='but_course' class='btn btn-danger btn-xs'>AddToCart</button>
							</div>
						</div>
					</div>
				</div>
			";
		}
	}
}
if(isset($_POST["coldiscipline"])){
	
	$coldiscipline_query = "SELECT * FROM discipline_info";
	$run_query = mysqli_query($con,$coldiscipline_query);
	echo "
		<div class='nav nav-pills nav-stacked'>
			<li class='active'><a href='#'><h4>Disciplines</h4></a></li>
	";
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$coldid = $row["discipline_id"];
			$coldname = $row["discipline_title"];
			echo "
				<li><a href='#' class='coldis' coldid='$coldid'>$coldname</a></li>
			";
		}
		echo "</div>";
	}
}
if(isset($_POST["getCollege"])){
	$coldid = $_POST["coldis_id"];
	$product_query = "SELECT * FROM college_info WHERE discipline_id='$coldid' GROUP BY college_name";
	$run_query = mysqli_query($con,$product_query);
	
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$colname = $row["college_name"];
			$colimage = $row["college_image"];
			$coladdress = $row["college_address1"];
			$colwebsite = $row["college_website"];
			
			echo "
				<div class='col-md-6'>
					<div>
						<div class='thumbnail' style='height:350px;'>";
							if($colimage !="")
							{echo "<img align='center' src='images/$colimage'/>";}
						echo "							
							<div class='caption'>
								<h3>$colname</h3>
								<p>$coladdress</p>
								<p><a href=$colwebsite>$colwebsite</a></p>
							</div>
						</div>
					</div>
				</div>
			";
		}
	}
}






if(isset($_POST["getCourseToCart"])){
	$cid = $_POST["cid_id"];
	$userid = $_SESSION["uid"];
	$cart_query = "SELECT * FROM cart WHERE course_id='$cid' AND user_id='$userid'";
	$run_query = mysqli_query($con,$cart_query);
	
	if(mysqli_num_rows($run_query) > 0){
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>This Course is already in the cart</b>
			</div>	
			";
		exit();
	}else{
		$sql = "SELECT * FROM course_info WHERE course_id = '$cid'";
		$course_query = mysqli_query($con,$sql);
		if(mysqli_num_rows($course_query) > 0){
			$row = mysqli_fetch_array($course_query);
			$courseid = $row["course_id"];
			$cname = $row["course_title"];
			$cimage = $row["course_image"];
			$ctype = $row["course_type"];
			$cprice = $row["course_price"];
			$ccollege = $row["course_college"];
			$sqlInsert = "INSERT INTO `cart` (`cart_id`, `course_id`, `ip_address`, `user_id`, 
			`course_title`, `course_image`, `course_type`, `course_college`, `course_price`, 
			`total_amount`) 
			VALUES (NULL, '$courseid', '3.196.73.45', '$userid', '$cname', '$cimage', 
			'$ctype', '$ccollege', '$cprice', '$cprice')";
			$insert_query = mysqli_query($con,$sqlInsert);
			if($insert_query){
				echo "
				<div class='alert alert-success'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Course has been added successfully to the Cart</b>
				</div>
				";
				exit();
			}
			exit();
		}else{
			echo "
			<div class='alert alert-alert'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>There was an error. Please Try Again</b>
			</div>
			";
			exit();
		}	
		exit();
	}
}
if(isset($_POST["getCountRow"])){
	if(isset($_SESSION["uid"])){
	$user = $_SESSION["uid"];
	$sqlcount = "SELECT * FROM cart WHERE user_id='$user'";
	$count_query = mysqli_query($con,$sqlcount);
	$count_rec = mysqli_num_rows($count_query);
	echo $count_rec;
	}
}
if(isset($_POST["getCartDetails"])){
	$user = $_SESSION["uid"];
	$sqlCart = "SELECT * FROM cart WHERE user_id='$user'";
	$cartQuery = mysqli_query($con,$sqlCart);
	if(mysqli_num_rows($cartQuery) > 0){
		$sno = 1;
		$total = 0;
		while($row = mysqli_fetch_array($cartQuery)){
			$cartImage = $row["course_image"];
			$cartname = $row["course_title"];
			$cartprice = $row["course_price"];
			echo"
			<div class='row'>
				<div class='col-md-3' align='center'>$sno</div>
				<div class='col-md-3'><img src='images/$cartImage' style='width:60px; height:30px;'/></div>
				<div class='col-md-3'>$cartname</div>
				<div class='col-md-3'>INR $cartprice.00</div>
			</div>
			<div class='divider'></div>
			";
			$sno = $sno + 1;
			$total = $total + $cartprice;
		}
			echo "
			<div class='row'>
				<div class='col-md-9' align='right'><b>Total</div>
				<div class='col-md-3'><b>INR $total.00</div>
			</div>
			<div class='divider'></div>
			<div class='row'>
				<div class='col-md-12'>
					<a href='cartDetails.php'><button style='float:right;' class='btn btn-success btn-xs'>Checkout</button></a>
				</div>
			</div>
			";
	}
}
if(isset($_POST["getCartCheckout"])){
	$user = $_SESSION["uid"];
	$sqlCart = "SELECT * FROM cart WHERE user_id='$user'";
	$cartQuery = mysqli_query($con,$sqlCart);
	if(mysqli_num_rows($cartQuery) > 0){
		$total = 0;
		while($row = mysqli_fetch_array($cartQuery)){
			$cartImage = $row["course_image"];
			$cartname = $row["course_title"];
			$cartprice = $row["course_price"];
			echo"
			<div class='row'>
				<div class='col-md-3'>
					<div class='btn-group'>
						<a href='#' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span></a>
					</div>
				</div>
				<div class='col-md-3'><img src='images/$cartImage' style='width:60px; height:30px;'/></div>
				<div class='col-md-3'>$cartname</div>
				<div class='col-md-3'>INR $cartprice.00</div>
			</div>
			<div class='divider'></div>
			<p><br></p>
			";
			$total = $total + $cartprice;
		}
			echo "
			<div class='row'>
				<div class='col-md-9' align='right'><b>Total</div>
				<div class='col-md-3'><b>INR $total.00</div>
			</div>
			";
	}
}

?>
