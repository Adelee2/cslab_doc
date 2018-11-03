

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>

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
		form{
			padding-top: 20px;
			margin-top: 3px;
			margin-right: -40px;
		}
/*		nav h1{
			margin-left: 450px;
		}*/
	nav h1{
			color: lightblue;
			font-style: italic;
		}
	/*input{
			border-radius: 250px;
		}*/
		h1{
			text-align: center;
		}
		.form-control{
			margin-left: 40px;
		}
		img{
			/*margin-top: 50px;*/
			width: 200px;
			height: 200px;
			/*-webkit-transform: rotate(-90deg);*/
		}
		body{
			background-size: cover;
			background-color: lightblue;
		}
		.bf{
			float: left;
			border: 0px solid #fff;
			padding: 70px 40px;
			-webkit-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0,75);
			box-shadow: -1px 4px 26px 11px rgba(0,0,0,0,75);
		}
	.row{
		width: 400px;
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
				        <a class="nav-link" id="idone" onclick="changeColor();" href="registration.php">Register here</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" id="idthree" onclick="changeColor2();" href="../Home/about.php">About</a>
				      </li>
				    </ul>
				 </div>
			</nav>
			<div class="container">
				<div class="col-sm-10 bg" style="">
					<div class="bf">
					<form method="post" action="check_reg.php" enctype="multipart/form-data">
					<h2><small>Registration profile</small></h2>
						<div class="form-group row">
							 <label class="col-sm-2 col-form-label">Firstname</label>
						    <div class="col-sm-10">
							     <input type="text" name="firname" class="form-control" placeholder="First name" required="required">
						     </div>
						</div>
						<div class="form-group row">
							 <label class="col-sm-2 col-form-label">Lastname</label>
						    <div class="col-sm-10">
							     <input type="text" name="lname" class="form-control" placeholder="Last name" required="required">
						    </div>
						</div>
						<div class="form-group row">
							 <label class="col-sm-2 col-form-label">Sex</label>
						    <div class="col-sm-10">
							   <select type="text" name="sex" class="form-control" placeholder="sex" required="required">
								   	<option>Select an option</option>
								   	<option>male</option>
								   	<option>female</option>
							   </select>
						    </div>
						</div>
					<div class="form-group row">
							 <label class="col-sm-2 col-form-label">Department</label>
						    <div class="col-sm-10">
							     <input type="text" name="depart" class="form-control" placeholder="department from" required="required">
						    </div>
						</div>
						<div class="form-group row">
							 <label class="col-sm-2 col-form-label">Speciality</label>
						    <div class="col-sm-10">
							     <input type="text" name="skill" class="form-control" placeholder="skills" required="required">
						    </div>
						</div>
						<div class="form-group row">
							 <label class="col-sm-2 col-form-label">Phonenumber</label>
						    <div class="col-sm-10">
							     <input type="text" name="phone" class="form-control" placeholder="phonenumber" required="required" pattern="\d*">
						    </div>
						</div>
						<div class="form-group row">
							 <label class="col-sm-2 col-form-label">Email</label>
						    <div class="col-sm-10">
							     <input type="email" name="email" class="form-control" placeholder="email" required="required">
						    </div>
						</div>
						<div class="form-group row">
							 <label class="col-sm-2 col-form-label">Date Admitted</label>
						    <div class="col-sm-10">
							     <input type="date" name="dates" class="form-control" required="required" >
						    </div>
						</div>
						<div class="form-group row">
							 <label class="col-sm-2 col-form-label">Upload picture</label>
						    <div class="col-sm-10">
							     <input type="file" name="profile_img" class="form-control" required="required" >
						    </div>
						</div>
						<button class="btn btn-primary" style="width:100px; height: 30px;" type="submit" name="submit">Submit</button><br/>
					</form>
				</div>
			</div>	
		</div>
</body>
</html>

