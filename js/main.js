$(document).ready(function(){
	dis();	
	coldis();
	function dis(){
		$.ajax({
			url: "action.php",
			method: "POST",
			data: {discipline:1},
			success: function(data){
				$("#get_disciplines").html(data);
			}
		})
	}
	$("body").delegate(".dis","click",function(event){
		event.preventDefault();
		var did =$(this).attr('did');
		$.ajax({
			url: "action.php",
			method: "POST",
			data: {getProduct:1,dis_id:did},
			success: function(data){
				$("#get_select_product").html(data);
			}
		})
		
	})
	function coldis(){
		$.ajax({
			url: "action.php",
			method: "POST",
			data: {coldiscipline:1},
			success: function(data){
				$("#get_coldisciplines").html(data);
			}
		})
	}
	$("body").delegate(".coldis","click",function(event){
		event.preventDefault();
		var coldid =$(this).attr('coldid');
		$.ajax({
			url: "action.php",
			method: "POST",
			data: {getCollege:1,coldis_id:coldid},
			success: function(data){
				$("#get_select_college").html(data);
			}
		})
		
	})
	$("#signup_button").click(function(event){
		event.preventDefault();
		$.ajax({
			url: "register.php",
			method: "POST",
			data: $("form").serialize(),
			success: function(data){
				$("#signup_msg").html(data);
			}
		})
	})
	$("#explogin").click(function(event){
		event.preventDefault();
		var uemail = $("#email").val();
		var upass = $("#password").val();
		$.ajax({
			url: "login.php",
			method: "POST",
			data: {getuser:1,user_email:uemail,user_password:upass},
			success: function(data){
				if(data == "true"){
					window.location.href = "profile.php";
				}
			}
		})
	})
	$("#login").click(function(event){
		event.preventDefault();
		var uemail = $("#email").val();
		var upass = $("#password").val();
		$.ajax({
			url: "login.php",
			method: "POST",
			data: {getuser:1,user_email:uemail,user_password:upass},
			success: function(data){
				if(data == "true"){
					window.location.href = "home.php";
				}
			}
		})
	})
	countRow();
	function countRow(){
		$.ajax({
			url: "action.php",
			method: "POST",
			data: {getCountRow:1},
			success: function(data){
				$(".badge").html(data);
			}
		})
	}
	$("body").delegate("#but_course","click",function(event){
		event.preventDefault();
		var cid =$(this).attr('cid');
		$.ajax({
			url: "action.php",
			method: "POST",
			data: {getCourseToCart:1,cid_id:cid},
			success: function(data){
				$("#course-msg").html(data);
					countRow();
			}
		})		
	})
	$("#cart_dropdown").click(function(event){
		event.preventDefault();
		$.ajax({
			url: "action.php",
			method: "POST",
			data: {getCartDetails:1},
			success: function(data){
				$("#cart_details").html(data);
			}
		})
	})
	cartCheckout();
	function cartCheckout(){
		$.ajax({
			url: "action.php",
			method: "POST",
			data: {getCartCheckout:1},
			success: function(data){
				$("#cartDetailsPage").html(data);
			}
		})
	}
})