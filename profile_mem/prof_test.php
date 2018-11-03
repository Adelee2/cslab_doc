<?php
     //$_SESSION['mysecurity'] = "NASA-pass";
	 require_once('header.php');
	 require('left_section.php');
	 include_once('../configuration.php');
	 include_once('../AdeleyeMySql.php');

	$adeleyemysql= new AdeleyeMySql($connect);

	$row1 = $adeleyemysql->getrow1("intern","intern_info","intern.id",1,"intern_info.id",1,"fname","lname","sex","depart_from","date_admit","speciality","phone_no","email");

	?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

<script type="text/javascript">
	var i=0;
   var j=1;	
   var k;
   var m;
   var p;
   		 var arr=[];
function dosometin(){
	var n1=document.getElementsByTagName('h2').length;
	var n2=document.getElementById('prev');
	 //n2[i]=n1;
		console.log(n1);
		  arr[0]= document.getElementById('divone');
		 for(j=1;j<n1;j++){
		 	if(arr[j] != ""){
		 	 arr[j]=document.getElementById('div'+(j+1));
		 	 // console.log('div'+(j+1));
		 	 //occur++;
		 	}
		 	else{
		 		continue;
		 	}
		 }
		 		 	console.log(arr);
		 // n1.className = 'hidden';
	if(i==0){
			arr[0].className = 'hidden';
			arr[1].className ='unhidden';
			n2.className='unhid';
			n2.className='fixed-bottom';

				// console.log("i is"+(i+1));
	}
	else{

			arr[i+1].className='unhidden';
			for(k=i;k>0;k--){
				arr[k].className='hidden';
			}	

		}
			i++;

	}
function dosometin1(){
	var n2=document.getElementById('prev');

		  //arr[0]= document.getElementById('divone');
		  m=i;
		  //console.log(m);
		  arr[m].className='hidden';
		 arr[m-1].className='unhidden';
		 for(p=m-2;p>0;p--){
				arr[p].className='hidden';
				//console.log(arr[p]);	
			}
		 		 	//console.log(arr);
		 // n1.className = 'hidden';
	if(m==0){
			arr[0].className = 'unhidden';
			arr[1].className ='hidden';
				// console.log("i is"+(i+1));
	}
	i--;
	if(i==0){
		n2.className='hidden';
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
	.unhid{
			visibility: visible;
			position: absolute;
			margin-left: 700px;
			margin-top: 160px;
		}

	form{
			padding-top: -10px;
			margin-top: 1px;
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
	td{
			color: white;
			opacity: 1.0;
		}
		.over{
			color: white
		}
		.over:hover{
			color: lightblue;
		}
	</style>
</head>
<body>

<div class="container unhidden" id="divone">
		<div class="col-sm-10 bg" style="">
			<div class="bf">
			<form method="post" action="updating.php">
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
					 <label for="inputPassword3" class="col-sm-2 col-form-label">Department</label>
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
					 <label for="inputPassword3" class="col-sm-2 col-form-label">Phonenumber</label>
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
				<button style="width:100px; height: 30px; background-color: red; color: white;" type="submit" name="updateseven">Update</button>
			</form>
		</div>
		<div style="margin-right:-250px; margin-top: 50px; padding-top: 150px;" >
			<?php
				$pic1 = $adeleyemysql->getrow2("intern","intern_info","intern.id",1,"intern_info.id",1,"pictures");
			?>
			<img src="Uploads/<?php echo $pic1['pictures'];?>"><br/>

			 <form method="post" action="images.php" enctype="multipart/form-data">
				<input type="file" name="profile7_img" placeholder="Browse" style="background-color:white; color: black;">
				<button type="submit" onclick='window.location.reload(true);' name="submit_7">Upload</button>
			</form>
		</div>
	</div>
</div>	

<?php
$k=8;
	$i=2;
	while($row2 = $adeleyemysql->getrow1("intern","intern_info","intern.id",$i,"intern.intern_id","intern_info.id","fname","lname","sex","depart_from","date_admit","speciality","phone_no","email")){
	?>
	<!-- intern profile 2 -->

	<div class="container contains hidden" id="div<?php echo $i;?>">
		<div class="col-sm-10 bg" style="">
			<div class="bf">
			<form method="post" action="updating.php">
				<input type="hidden" name="num5" value="<?php echo $i;?>">
			<h2><small>Edit Profile</small></h2>
				<div class="form-group row">
					 <label for="inputPassword3" class="col-sm-2 col-form-label">Firstname</label>
				    <div class="col-sm-10">
					     <input type="text" name="firname" class="form-control" placeholder="First name" value="<?php echo $row2['fname'];?>">
				     </div>
				</div>
				<div class="form-group row">
					 <label for="inputPassword3" class="col-sm-2 col-form-label">Lastname</label>
				    <div class="col-sm-10">
					     <input type="text" name="lname" class="form-control" placeholder="Last name" value="<?php echo $row2['lname'];?>">
				    </div>
				</div>
				<div class="form-group row">
					 <label for="inputPassword3" class="col-sm-2 col-form-label">Sex</label>
				    <div class="col-sm-10">
					   <input type="text" name="sex" class="form-control" placeholder="sex" value="<?php echo $row2['sex'];?>">
				    </div>
				</div>
				<div class="form-group row">
					 <label for="inputPassword3" class="col-sm-2 col-form-label">Phonenumber</label>
				    <div class="col-sm-10">
					     <input type="text" name="phone" class="form-control" placeholder="phonenumber" value="<?php echo $row2['phone_no'];?>">
				    </div>
				</div>
				<div class="form-group row">
					 <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
				    <div class="col-sm-10">
					     <input type="email" name="email" class="form-control" placeholder="email" value="<?php echo $row2['email'];?>">
				    </div>
				</div>
			<div class="form-group row">
					 <label for="inputPassword3" class="col-sm-2 col-form-label">Department</label>
				    <div class="col-sm-10">
					     <input type="text" name="depart" class="form-control" placeholder="department from" value="<?php echo $row2['depart_from'];?>">
				    </div>
				</div>
				<div class="form-group row">
					 <label for="inputPassword3" class="col-sm-2 col-form-label">Speciality</label>
				    <div class="col-sm-10">
					     <input type="text" name="skill" class="form-control" placeholder="skills" value="<?php echo $row2['speciality'];?>">
				    </div>
				</div>
				<div class="form-group row">
					 <label for="inputPassword3" class="col-sm-2 col-form-label">Date Admitted</label>
				    <div class="col-sm-10">
					     <input type="date" name="dates" class="form-control" value="<?php echo $row2['date_admit'];?>" >
				    </div>
				</div>
				<button style="width:100px; height: 30px; background-color: red; color: white;" type="submit" name="update<?php echo $i;?>">Update</button><br/>
			</form>
		</div>
		<div style="margin-right:-250px; margin-top: 50px; padding-top: 150px;" >
			<?php
				$pic2 = $adeleyemysql->getrow2("intern","intern_info","intern.id",$i,"intern_info.id",$i,"pictures");
			?>
			<img src="Uploads/<?php echo $pic2['pictures'];?>"><br/>

			 <form method="post" action="images.php" enctype="multipart/form-data">
			 	<input type="hidden" name="num1" value="<?php echo $k;?>">
			 	<input type="hidden" name="num2" value="<?php echo $i;?>">
				<input type="file" name="profile<?php echo $k;?>_img" placeholder="Browse" style="background-color:white; color: black;">
				<button type="submit" name="submit_<?php echo $k;?>" >Upload</button>
			</form>
		</div>
	</div>
</div>

<?php
	$i++;
	$k++;
}
?>
<span>
	<button type="button" class=" hidden" style="margin-left: 1150px;" id="prev" onclick="dosometin1(); "><i class="fa fa-angle-double-left"></i>prev</button>
	<button type="button" class="fixed-bottom" style="margin-left: 1200px;" onclick="dosometin(); ">next<i class="fa fa-angle-double-right"></i></button>
</span>
</body>
</html>