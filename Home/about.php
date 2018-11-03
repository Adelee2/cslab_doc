<?php
	// include('../profile_mem/header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>About CSLAB</title>

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
	<style type="text/css">
		body{
			background-color: lightblue;
			text-align: center;
			font-style: italic;
			width:30%;
			margin-left: 470px;
		}
		.abt{
			margin-top: 150px;
		}
		.footer{
			color: white;
			margin-top: 270px;
			padding-top: 20px;
			margin-left: -480px;
			height: 90px;
			width: 1380px;
		}
		nav h1{
			color: lightblue;
			font-style: italic;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
			  <!-- <button class="navbar-toggler" type="button" aria-expanded="true" aria-label="Toggle navigation"> -->
			  	<h1>Welcome to <big>CSLAB</big></h1>
				  <div class=" navbar-collapse" id="navbarNav" style="padding-left: 50px;">
				   <ul class="navbar-nav">
				      <li class="nav-item">
				        <a class="nav-link" id="idone" onclick="changeColor();" href="../profile_mem/registration.php">Register here</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" id="idthree" onclick="changeColor2();" href="../Home/about.php">About</a>
				      </li>
				    </ul>
				 </div>
			</nav>
	<div class="container">
	<div class="abt">
		<h1>About CSLAB</h1>
		<p>Cybersecurity Research Laboratory was initially being setup for cybersecurity purposes but due to stoppage in funding from the government, It is now being used to improved people's skills to as to make positive impact to the society</p>
	</div>
	</div>
	<div class="bg-dark footer">&copy copyright 2017/18</div>
</body>
</html>