<?php
	// $_SESSION['mysecurity'] = "NASA-pass";
 // session_start();
	// if (!isset($_SESSION['user'])){
	// 	echo "<script>alert('Invalid Entry!!');</script>";
	// 	echo "<script>alert('Enter through the Login page');</script>";
	// 	echo "<script>window.location.href='../new_login.php';</script>";
	// }
	 require_once('header.php');
	 require('left_section.php');
	 // include_once('secure.php');
	 include_once('../configuration.php');
	 include_once('../AdeleyeMySql.php');
	// include('linking-class-database.php');
	$adeleyemysql= new AdeleyeMySql($connect);

	$row1 = $adeleyemysql->getrow3("director","director_info",1,"director.id",1,"director_info.id","fname","lname","sex","phone_no","email");
	$row2 = $adeleyemysql->getrow3("director","director_info",2,"director.id",2,"director_info.id","fname","lname","sex","phone_no","email");

	$pic1 = $adeleyemysql->getrow2("director","director_info",1,"director.id",1,"director_info.id","pictures");
	$pic2 = $adeleyemysql->getrow2("director","director_info",2,"director.id",2,"director_info.id","pictures");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<script type="text/javascript">
function unhidedivone(){
	var n1= document.getElementById('divone');
	var n2= document.getElementById('divtwo');

		if(n1.className == 'unhidden'){
			n1.className = 'hidden';
			n2.className = 'unhidden';
		}
		else{
			n1.className = 'unhidden';
			n2.className = 'hidden';
		}
}

function unhidedivtwo(){
	var n1= document.getElementById('divone');
	var n2= document.getElementById('divtwo');

		if(n2.className == 'unhidden'){
			n1.className = 'unhidden';
			n2.className = 'hidden';
		}
		else{
			n2.className = 'unhidden';
			n1.className = 'hidden';
		}
}
	</script>
<style type="text/css">
	.hidden{
			display: none;
			}
	.unhidden{
			visibility: visible;
			}

	form{
			padding-top: 20px;
			margin-top: 3px;
			margin-right: -40px;
		}
	/*input{
			border-radius: 250px;
		}*/
		h1{
			text-align: center;
		}
		/*nav{
			background-color: blue;
		}*/
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
	<!-- director profile 1 -->
	<div class="container unhidden" id="divone">
		<div class="col-sm-10 bg" style="">
			<div class="bf">
			<form method="post" action="updating.php">
			<h2><small>Edit Profile</small></h2>
				<div class="form-group row">
					 <label class="col-sm-2 col-form-label">Firstname</label>
				    <div class="col-sm-10">
					     <input type="text" name="firname" class="form-control" placeholder="First name" value="<?php echo $row1['fname'];?>">
				     </div>
				</div>
				<div class="form-group row">
					 <label class="col-sm-2 col-form-label">Lastname</label>
				    <div class="col-sm-10">
					     <input type="text" name="lname" class="form-control" placeholder="Last name" value="<?php echo $row1['lname'];?>">
				    </div>
				</div>
				<div class="form-group row">
					 <label class="col-sm-2 col-form-label">Sex</label>
				    <div class="col-sm-10">
					     <input type="text" name="sex" class="form-control" placeholder="sex" value="<?php echo $row1['sex'];?>">
				    </div>
				</div>
				<div class="form-group row">
					 <label class="col-sm-2 col-form-label">Phonenumber</label>
				    <div class="col-sm-10">
					     <input type="text" name="phone" class="form-control" placeholder="phonenumber" value="<?php echo $row1['phone_no'];?>">
				    </div>
				</div>
				<div class="form-group row">
					 <label class="col-sm-2 col-form-label">Email</label>
				    <div class="col-sm-10">
					     <input type="email" name="email" class="form-control" placeholder="email" value="<?php echo $row1['email'];?>">
				    </div>
				</div>
				<button style="width:100px; height: 30px; background-color: red; color: white;" type="submit" name="updateone">Update</button>
			</form>
		</div>
		<div style="margin-right:-250px; margin-top: 50px; padding-top: 150px;" >
			<img src="Uploads/<?php echo $pic1['pictures'];?>"><br/>

			 <form method="post" action="images.php" enctype="multipart/form-data">
				<input type="file" name="profile1_img" placeholder="Browse" style="background-color:white; color: black;">
				<button type="submit" name="submit_one">Upload</button>
			</form>
		</div>
	</div>
</div>
<!-- director profile 2 -->
	<div class="container hidden" id="divtwo">
		<div class="col-sm-10 bg" style="">
			<div class="bf">
			<form method="post" action="updating.php">
			<h2><small>Edit Profile</small></h2>
				<div class="form-group row">
					 <label class="col-sm-2 col-form-label">Firstname</label>
				    <div class="col-sm-10">
					     <input type="text" name="firname" class="form-control" placeholder="First name" value="<?php echo $row2['fname'];?>">
				     </div>
				</div>
				<div class="form-group row">
					 <label class="col-sm-2 col-form-label">Lastname</label>
				    <div class="col-sm-10">
					     <input type="text" name="lname" class="form-control" placeholder="Last name" value="<?php echo $row2['lname'];?>">
				    </div>
				</div>
				<div class="form-group row">
					 <label class="col-sm-2 col-form-label">Sex</label>
				    <div class="col-sm-10">
					     <input type="text" name="sex" class="form-control" placeholder="sex" value="<?php echo $row2['sex'];?>">
				    </div>
				</div>
				<div class="form-group row">
					 <label class="col-sm-2 col-form-label">Phonenumber</label>
				    <div class="col-sm-10">
					     <input type="text" name="phone" class="form-control" placeholder="phonenumber" value="<?php echo $row2['phone_no'];?>">
				    </div>
				</div>
				<div class="form-group row">
					 <label class="col-sm-2 col-form-label">Email</label>
				    <div class="col-sm-10">
					     <input type="email" name="email" class="form-control" placeholder="email" value="<?php echo $row2['email'];?>">
				    </div>
				</div>
				<button style="width:100px; height: 30px; background-color: red; color: white;" type="submit" name="updatetwo">Update</button><br/>
			</form>
		</div>
		<div style="margin-right:-250px; margin-top: 50px; padding-top: 150px;" >
			<img src="Uploads/<?php echo $pic2['pictures'];?>"><br/>

			 <form method="post" action="images.php" enctype="multipart/form-data">
				<input type="file" name="profile2_img" placeholder="Browse" style="background-color:white; color: black;">
				<button type="submit" name="submit_two">Upload</button>
			</form>
		</div>
	</div>
</div>
	<button type="button" class="fixed-bottom" style="margin-left: 1130px;" onclick="unhidedivtwo(); "><i class="fa fa-angle-double-left"></i>prev</button>
	<button type="button" class="fixed-bottom" style="margin-left: 1200px;" onclick="unhidedivone(); ">next<i class="fa fa-angle-double-right"></i></button>
</body>
</html>