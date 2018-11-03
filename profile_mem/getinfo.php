<?php
	  require_once('header.php');
	 include_once('../configuration.php');
	 include_once('../AdeleyeMySql.php');

	 $q = $_GET['q'];
	 $adeleyemysql = new AdeleyeMySql($connect);
	  $i=1;
	 $j=0;
	 $id=0;
	 // $row1= $adeleyemysql->fetchdatabase1("intern_info");
	 // print_r($row1);
	$bool1=0;
	$bool2=0;
	$bool3=0;
	 $checker1= array();
	 $checker2= array();
	 $checker3= array();
	
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
	<style type="text/css">
		.hidden{
			display: none;
			}
	.unhidden{
			visibility: visible;
			}
	.unhid{
			visibility: visible;
			position: absolute;
			/*margin-left: 700px;*/
			/*margin-top: 160px;*/
		}

	form{
			margin-left: 100px;
			/*padding-top: -10px;*/
			margin-top: 1px;
		}
	/*input{
			border-radius: 250px;
		}*/
		h2{
			font-style: italic;
			margin-right: 80px;
			margin-bottom: 80px;
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
			/*float: left;*/
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
<body style="text-align: center;">
	<?php
	 while($row2 = $adeleyemysql->fetchdatabase("director","director_info","director.id",$i,"director_info.id",$i)){
	 	$checker1[]=strtolower($row2[1].$row2[2]);
			$i++;
		if((str_replace(' ','',strtolower($q))==$checker1[$j++]) || $q == $row2['phone_no']){
			$id=$j;
			$bool1=0;
			$row1 = $adeleyemysql->getrow3("director","director_info","director.id",$id,"director_info.id",$id,"fname","lname","sex","phone_no","email");
			?>
		<div class="col-sm-10 bg" style="margin-top: -80px;margin-left: 100px;">
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
					 <label class="col-sm-2 col-form-label">Phone</label>
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
			</form>
		</div>
		<div style="margin-right:-350px; margin-top: -330px;" >
				<?php
					$pic1 = $adeleyemysql->getrow2("director","director_info","director.id",$id,"director_info.id",$id,"pictures");
				?>
				<img src="Uploads/<?php echo $pic1['pictures'];?>"><br/>
			</div>
	</div>
			<?php
			break;
		}
		else{
			$bool1=1;
		}
	 }
	 $i=5;
	 $j=0;
	 while($row2 = $adeleyemysql->fetchdatabase("instructor","instructor_info","instructor.id",$i,"instructor_info.id",$i-4)){
	 	$checker2[]=strtolower($row2[1].$row2[2]);
			$i++;
		if((str_replace(' ','',strtolower($q))==$checker2[$j++]) || $q == $row2['phone_no']){
			$id=$j;
			$bool2=0;
			$row1 = $adeleyemysql->getrow("instructor","instructor_info","instructor.id",$id+4,"instructor_info.id",$id,"fname","lname","sex","speciality","phone_no","email");
			?>
		<div class="col-sm-10 bg" style="margin-top: -80px;margin-left: 100px;">
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
					 <label class="col-sm-2 col-form-label">Speciality</label>
				    <div class="col-sm-10">
					     <input type="text" name="skill" class="form-control" placeholder="skills" value="<?php echo $row1['speciality'];?>">
				    </div>
				</div>
				<div class="form-group row">
					 <label class="col-sm-2 col-form-label">Phone</label>
				    <div class="col-sm-10">
					     <input type="text" id="phone" name="phone" class="form-control" placeholder="phonenumber" value="<?php echo $row1['phone_no'];?>">
				    </div>
				</div>
				<div class="form-group row">
					 <label class="col-sm-2 col-form-label">Email</label>
				    <div class="col-sm-10">
					     <input type="email" name="email" class="form-control" placeholder="email" value="<?php echo $row1['email'];?>">
				    </div>
				</div>
			</form>
		</div>
			<div style="margin-right:-350px; margin-top: -380px;" >
				<?php
					$pic1 = $adeleyemysql->getrow2("instructor","instructor_info","instructor.id",$id+4,"instructor_info.id",$id,"pictures");
				?>
				<img src="Uploads/<?php echo $pic1['pictures'];?>"><br/>
			</div>
	</div>	
		<?php
		break;
		}
		else{
			$bool2=1;
		}
	 }
	 $i=1;
	 $j=0;
	while($row2 = $adeleyemysql->fetchdatabase("intern","intern_info","intern.id",$i,"intern_info.id",$i)){
			$checker3[]=strtolower($row2[1].$row2[2]);
			$i++;
		if((str_replace(' ','',strtolower($q))==$checker3[$j++]) || $q == $row2['phone_no']){
			$id=$j;	
			$bool3=0;		
			$row1 = $adeleyemysql->getrow1("intern","intern_info","intern.id",$id,"intern_info.id",$id,"fname","lname","sex","depart_from","date_admit","speciality","phone_no","email");
			?>
		<div class="col-sm-10 bg" style="margin-top: -80px;margin-left: 100px;">
			<div class="bf">
			<form method="post">
			<h2><small>Edit Profile</small></h2><input type="hidden" name="num4" value="1">
				<div class="form-group row">
					 <label for="inputPassword3" class="col-sm-2 col-form-label">Firstname</label>
				    <div class="col-sm-10">
					     <input type="text" name="firname" class="form-control" placeholder="First name" value="<?php echo $row1[0];?>">
				     </div>
				</div>
				<div class="form-group row">
					 <label for="inputPassword3" class="col-sm-2 col-form-label">Lastname</label>
				    <div class="col-sm-10">
					     <input type="text" name="lname" class="form-control" placeholder="Last name" value="<?php echo $row1[1];?>">
				    </div>
				</div>
				<div class="form-group row">
					 <label for="inputPassword3" class="col-sm-2 col-form-label">Sex</label>
				    <div class="col-sm-10">
					     <input type="text" name="sex" class="form-control" placeholder="sex" value="<?php echo $row1[2];?>">
				    </div>
				</div>
				<div class="form-group row">
					 <label for="inputPassword3" class="col-sm-2 col-form-label">Depart</label>
				    <div class="col-sm-10">
					     <input type="text" name="depart" class="form-control" placeholder="department from" value="<?php echo $row1[3];?>">
				    </div>
				</div>
				<div class="form-group row">
					 <label for="inputPassword3" class="col-sm-2 col-form-label">Speciality</label>
				    <div class="col-sm-10">
					     <input type="text" name="skill" class="form-control" placeholder="skills" value="<?php echo $row1[5];?>">
				    </div>
				</div>
				<div class="form-group row">
					 <label for="inputPassword3" class="col-sm-2 col-form-label">Phone</label>
				    <div class="col-sm-10">
					     <input type="text" name="phone" class="form-control" placeholder="phonenumber" value="<?php echo $row1['phone_no'];?>">
				    </div>
				</div>
				<div class="form-group row">
					 <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
				    <div class="col-sm-10">
					     <input type="email" name="email" class="form-control" placeholder="email" value="<?php echo $row1['email'];?>">
				    </div>
				</div>
				<div class="form-group row">
					 <label for="inputPassword3" class="col-sm-2 col-form-label">Date Admitted</label>
				    <div class="col-sm-10">
					     <input type="date" name="dates" class="form-control"  value="<?php echo $row1[4];?>">
				    </div>
				</div>
			</form>
		</div>
			<div style="margin-right:-350px; margin-top: -500px;" >
				<?php
					$pic1 = $adeleyemysql->getrow2("intern","intern_info","intern.id",$id,"intern_info.id",$id,"pictures");
				?>
				<img src="Uploads/<?php echo $pic1['pictures'];?>"><br/>
			</div>
	</div>
		<?php
		break;
		}
		else{
			$bool3=1;
		}
	}

	if($bool1==1 && $bool2==1 && $bool3==1){
		echo "<script>alert('data not found!);</script>";
		// history.go(-1);
	}
	?>
		
</body>
</html>