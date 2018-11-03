<?php
 session_start();
	if (!isset($_SESSION['user'])){
		echo "<script>alert('Invalid Entry!!');</script>";
		echo "<script>alert('Enter through the Login page');</script>";
		echo "<script>window.location.href='../new_login.php';</script>";
	}
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Header</title>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<script src="https://use.fontawesome.com/ea46728558.js"></script>
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script type="text/javascript">
	function changeColor(){
		var n1 = document.getElementById('idone');
		// n1.style.cssText = "color: lightblue;";
		// n1.className = "active";
		// n1.innerHtml="<span>(current)</span>";
	}
	function changeColor1(){
		var n2 = document.getElementById('idtwo');
		// n2.style.cssText= "color: lightblue;";
		// n2.className = "active";
	}
	function changeColor2(){
		var n1 = document.getElementById('idthree');
		// n3.style.cssText="color: lightblue;";
		// n3.className = "active";
	}
	function searchme()
	{
		var str = document.getElementById("text").value;
		if(str!=="")
			window.location.href="../profile_mem/getinfo.php?q="+str;
		else{
			alert("input is empty!");
		}
	}
</script>

<style type="text/css">
		/*nav{
			padding-right: 15%;
			color: white;
			height: 70px;
		}*/
		.hidden{
			display: none;
		}
		.unhidden{
			visibility: visible;
		}
		nav h1{
			color: lightblue;
			font-style: italic;
		}
		body{
			background-color: lightblue;
		}
		// Small devices (landscape phones, 576px and up)
		@media (min-width: 576px) { ... }

		// Medium devices (tablets, 768px and up)
		@media (min-width: 768px) { ... }

		// Large devices (desktops, 992px and up)
		@media (min-width: 992px) { ... }

		// Extra large devices (large desktops, 1200px and up)
		@media (min-width: 1200px) { ... }
	</style>
</head>
<body style="text-align: center;">
		
		<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
			  <!-- <button class="navbar-toggler" type="button" aria-expanded="true" aria-label="Toggle navigation"> -->
			  	<h1>Welcome to <big>CSLAB</big></h1>
				  <div class=" navbar-collapse" id="navbarNav" style="padding-left: 50px;">
				    <ul class="navbar-nav">
				      <li class="nav-item">
				        <a class="nav-link" id="idone" onclick="changeColor();" href="../Home/cslab_doc.php">Home</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" id="idtwo" onclick="changeColor1();" href="../profile_mem/directors_pro.php">Members</a>
				      </li>
				      <li class="nav-item">
						<div class="input-group mb-3">
						  <div class="input-group-prepend" style="margin-left: 250px;">
						    <span class="input-group-text" style="height: 38px;"><i class="fa fa-search"></i></span>
						  </div>
						  <div class="custom-file" style="">
						    <input type="text" style="background-color: white; height: 38px; width: 250px;" id="text" placeholder="full name or phone number" required="required">
						    <button class="btn btn-outline-secondary" style="height: 38px;" type="button" onclick="searchme();">search</button>
						  </div>
						</div>
						</li>
				    </ul>
				  </div>
					 <!-- <i class="fa fa-user-circle-o" aria-hidden="true" style="width: 20px; height: 20px;"></i>Admin Administrator<br/> -->
				<button class="btn btn-outline-secondary" > <a style="color: lightblue;" href="../profile_mem/logout.php">Logout</a></button>
			</nav>  
			<div class="hidden" id="body">
				
			</div> 
</body>
</html>
