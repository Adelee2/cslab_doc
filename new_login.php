<?php

	     session_name('Log-out');
		 session_start();
		 $_SESSION['mysecurity'] = "NASA-pass"; 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
			height: 100vh;
			background-size: cover;
			text-align: center;
			font-style: italic;
		}
	.bf{
			margin-top: 100px;
			border-radius: 50px;
			margin-left: 250px;
			border: 50px solid #fff;
			-webkit-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0,75);
			box-shadow: -1px 4px 26px 11px rgba(0,0,0,0,75);
		}
	.row{
		width: 400px;
	}
	.jumbotron{
		padding: 80px,80px;
		width: 60%;
	}
	</style>
</head>
<body >
	<div class="container">
		<div class="col-sm-10 bg" style="">
			<div class=" bf jumbotron">
				<div class="form-group" style="margin-top:-20px; ">
					<h1 style="text-align: center; margin-right: 70px; margin-top:-50px;">Login</h1>
				</div><br/>
					<form method="post" action="checklogin.php"> 
					<div class="form-group row">
					    <label for="inputPassword3" class="col-sm-2 col-form-label">Username</label>
					    <div class="col-sm-10">
					     <select type="text" name="user" class="form-control">
					     	<option>Select option</option>
					     	<option>Admin</option>
					      </select>
					    </div>
					</div>
					<div class="form-group row">
					    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
					    <div class="col-sm-10">
					      <input type="password" name="pass" class="form-control" placeholder="Enter password" required="required">
					   </div>
				</div>
				<span><button class="btn-primary" style="width:100px; height: 40px; margin-left: 0px; color: white;" type="submit" name="login">Login</button>
				<a style="width:100px; height: 40px; margin-left: 50px; color: blue;" href="profile_mem/registration.php">Click here to register!!</a>
				</span>
			</form>

			</div>
		</div>
	</div>
</body>
</html>