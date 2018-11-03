<?php

	  require_once('header.php');
	 require('left_section.php');
	// include_once('secure.php');
	 include_once('../configuration.php');
	 include_once('../AdeleyeMySql.php');
	
	// include('linking-class-database.php');
	$adeleyemysql= new AdeleyeMySql($connect);
	$row1 = $adeleyemysql->getrow("instructor","instructor_info","instructor.id",5,"instructor_info.id",1,"fname","lname","sex","speciality","phone_no","email");
	$row2 = $adeleyemysql->getrow("instructor","instructor_info","instructor.id",6,"instructor_info.id",2,"fname","lname","sex","speciality","phone_no","email");
	$row3 = $adeleyemysql->getrow("instructor","instructor_info","instructor.id",7,"instructor_info.id",3,"fname","lname","sex","speciality","phone_no","email");
	$row4 = $adeleyemysql->getrow("instructor","instructor_info","instructor.id",8,"instructor_info.id",4,"fname","lname","sex","speciality","phone_no","email");

	$pic1 = $adeleyemysql->getrow2("instructor","instructor_info","instructor.id",5,"instructor_info.id",1,"pictures");
	$pic2 = $adeleyemysql->getrow2("instructor","instructor_info","instructor.id",6,"instructor_info.id",2,"pictures");
	$pic3 = $adeleyemysql->getrow2("instructor","instructor_info","instructor.id",7,"instructor_info.id",3,"pictures");
	$pic4 = $adeleyemysql->getrow2("instructor","instructor_info","instructor.id",8,"instructor_info.id",4,"pictures");

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

<script type="text/javascript">
var i=0;
  // var j=1;	
   var k;
   var m;
   var p;
   		 var arr=[];
function dosometin(){
	var n1=document.getElementById('prev');
	 //n2[i]=n1;
		//console.log(n1);
		  arr[0]= document.getElementById('divone');
		  arr[1] = document.getElementById('divtwo');
		 arr[2]= document.getElementById('divthree');
		 arr[3] = document.getElementById('divfour');

	if(i==0){
			arr[0].className = 'hidden';
			arr[1].className ='unhidden';
			n1.className='unhid';
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
	var n1=document.getElementById('prev');
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
		n1.className='hidden';
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
			margin-left: 200px;
			margin-top: 170px;
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
	<!-- instructor profile 1 -->
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
					 <label class="col-sm-2 col-form-label">Speciality</label>
				    <div class="col-sm-10">
					     <input type="text" name="skill" class="form-control" placeholder="skills" value="<?php echo $row1['speciality'];?>">
				    </div>
				</div>
				<div class="form-group row">
					 <label class="col-sm-2 col-form-label">Phonenumber</label>
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
				<button style="width:100px; height: 30px; background-color: red; color: white;" type="submit" onclick="checkNumber();" name="updatethree">Update</button>
			</form>
		</div>
		<div style="margin-right:-250px; margin-top: 50px; padding-top: 150px;" >
			<img src="Uploads/<?php echo $pic1['pictures'];?>"><br/>

			 <form method="post" action="images.php" enctype="multipart/form-data">
				<input type="file" name="profile3_img" placeholder="Browse" style="background-color:white; color: black;">
				<button type="submit" name="submit_three">Upload</button>
			</form>
		</div>
	</div>
</div>	
	<!-- instructor profile 2 -->
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
					 <label class="col-sm-2 col-form-label">Speciality</label>
				    <div class="col-sm-10">
					     <input type="text" name="skill" class="form-control" placeholder="skills" value="<?php echo $row2['speciality'];?>">
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
				<button style="width:100px; height: 30px; background-color: red; color: white;" type="submit" onclick="checkNumber();" name="updatefour">Update</button><br/>
			</form>
		</div>
		<div style="margin-right:-250px; margin-top: 50px; padding-top: 150px;" >
			<img src="Uploads/<?php echo $pic2['pictures'];?>"><br/>

			 <form method="post" action="images.php" enctype="multipart/form-data">
				<input type="file" name="profile4_img" placeholder="Browse" style="background-color:white; color: black;">
				<button type="submit" name="submit_four">Upload</button>
			</form>
		</div>
	</div>
</div>	
	<!-- instructor profile 3 -->
	<div class="container hidden" id="divthree">
		<div class="col-sm-10 bg" style="">
			<div class="bf">
			<form method="post" action="updating.php">
			<h2><small>Edit Profile</small></h2>
				<div class="form-group row">
					 <label class="col-sm-2 col-form-label">Firstname</label>
				    <div class="col-sm-10">
					     <input type="text" name="firname" class="form-control" placeholder="First name" value="<?php echo $row3['fname'];?>">
				     </div>
				</div>
				<div class="form-group row">
					 <label class="col-sm-2 col-form-label">Lastname</label>
				    <div class="col-sm-10">
					     <input type="text" name="lname" class="form-control" placeholder="Last name" value="<?php echo $row3['lname'];?>">
				    </div>
				</div>
				<div class="form-group row">
					 <label class="col-sm-2 col-form-label">Sex</label>
				    <div class="col-sm-10">
					     <input type="text" name="sex" class="form-control" placeholder="sex" value="<?php echo $row3['sex'];?>">
				    </div>
				</div>
				<div class="form-group row">
					 <label class="col-sm-2 col-form-label">Speciality</label>
				    <div class="col-sm-10">
					     <input type="text" name="skill" class="form-control" placeholder="skills" value="<?php echo $row3['speciality'];?>">
				    </div>
				</div>
				<div class="form-group row">
					 <label class="col-sm-2 col-form-label">Phonenumber</label>
				    <div class="col-sm-10">
					     <input type="text" name="phone" class="form-control" placeholder="phonenumber" value="<?php echo $row3['phone_no'];?>">
				    </div>
				</div>
				<div class="form-group row">
					 <label class="col-sm-2 col-form-label">Email</label>
				    <div class="col-sm-10">
					     <input type="email" name="email" class="form-control" placeholder="email" value="<?php echo $row3['email'];?>">
				    </div>
				</div>
				<button style="width:100px; height: 30px; background-color: red; color: white;" type="submit" name="updatefive">Update</button><br/>
			</form>
		</div>
		<div style="margin-right:-250px; margin-top: 50px; padding-top: 150px;" >
			<img src="Uploads/<?php echo $pic3['pictures'];?>"><br/>

			 <form method="post" action="images.php" enctype="multipart/form-data">
				<input type="file" name="profile5_img" placeholder="Browse" style="background-color:white; color: black;">
				<button type="submit" name="submit_five">Upload</button>
			</form>
		</div>
	</div>
</div>
	<!-- instructor profile 4 -->
	<div class="container hidden" id="divfour">
		<div class="col-sm-10 bg" style="">
			<div class="bf">
			<form method="post" action="updating.php">
			<h2><small>Edit Profile</small></h2>
				<div class="form-group row">
					 <label class="col-sm-2 col-form-label">Firstname</label>
				    <div class="col-sm-10">
					     <input type="text" name="firname" class="form-control" placeholder="First name" value="<?php echo $row4['fname'];?>">
				     </div>
				</div>
				<div class="form-group row">
					 <label class="col-sm-2 col-form-label">Lastname</label>
				    <div class="col-sm-10">
					     <input type="text" name="lname" class="form-control" placeholder="Last name" value="<?php echo $row4['lname'];?>">
				    </div>
				</div>
				<div class="form-group row">
					 <label class="col-sm-2 col-form-label">Sex</label>
				    <div class="col-sm-10">
					     <input type="text" name="sex" class="form-control" placeholder="sex" value="<?php echo $row4['sex'];?>">
				    </div>
				</div>
				<div class="form-group row">
					 <label class="col-sm-2 col-form-label">Speciality</label>
				    <div class="col-sm-10">
					     <input type="text" name="skill" class="form-control" placeholder="skills" value="<?php echo $row4['speciality'];?>">
				    </div>
				</div>
				<div class="form-group row">
					 <label class="col-sm-2 col-form-label">Phonenumber</label>
				    <div class="col-sm-10">
					     <input type="text" id="phone" name="phone" class="form-control" placeholder="phonenumber" value="<?php echo $row4['phone_no'];?>">
				    </div>
				</div>
				<div class="form-group row">
					 <label class="col-sm-2 col-form-label">Email</label>
				    <div class="col-sm-10">
					     <input type="email" name="email" class="form-control" placeholder="email" value="<?php echo $row4['email'];?>">
				    </div>
				</div>
				<button style="width:100px; height: 30px; background-color: red; color: white;" type="submit" name="updatesix">Update</button><br/>
			</form>
		</div>
		<div style="margin-right:-250px; margin-top: 50px; padding-top: 150px;" >
			<img src="Uploads/<?php echo $pic4['pictures'];?>"><br/>

			 <form method="post" action="images.php" enctype="multipart/form-data">
				<input type="file" name="profile6_img" placeholder="Browse" style="background-color:white; color: black;">
				<button type="submit" name="submit_six">Upload</button>
			</form>
		</div>
	</div>
</div>
<span>
	<button type="button" class="fixed-bottom hidden" id="prev" onclick="dosometin1(); "><i class="fa fa-angle-double-left"></i>prev</button>
	<button type="button" class="fixed-bottom" id="next" style="margin-left: 1200px;" onclick="dosometin();">next<i class="fa fa-angle-double-right"></i></button>
</span>
</body>
</html>


<!-- var i=1;
var j;	

	function dosometin(){
		 var n1 = document.getElementById('divone');
		 var n2 = document.getElementById('divtwo');
		 var n3 = document.getElementById('divthree');
		 var n4 = document.getElementById('divfour');
	if(i<=4){
		j=i;
		switch(i){
			case 1:  n1.className='hidden';
					 n2.className='unhidden';
						break;
			case 2:  n3.className='unhidden';
					 n1.className='hidden';
					 n2.className='hidden';
						break;
			case 3:	 n4.className='unhidden';
					 n1.className='hidden';
					 n2.className='hidden';
					 n3.className='hidden';
						break;
			case 4:  n5.className='unhidden';
					 n1.className='hidden';
					 n2.className='hidden';
					 n3.className='hidden';
					 n4.className='hidden';
						break;

			default: break;
		}
	}
	
	i++;
	}

	function dosometin1(){	
		 var n1 = document.getElementById('divone');
		 var n2 = document.getElementById('divtwo');
		 var n3 = document.getElementById('divthree');
		 var n4 = document.getElementById('divfour');

		switch(j){
			case 4:  n4.className='unhidden';
					 n1.className='hidden';
					 n2.className='hidden';
					 n3.className='hidden';
						break;
			case 3:  n3.className='unhidden';
					 n1.className='hidden';
					 n2.className='hidden';
					 n4.className='hidden';

						break;

			case 2: n2.className='unhidden';
					 n1.className='hidden';
					 n3.className='hidden';
					 n4.className='hidden';

						break;
			case 1:  n1.className='unhidden';
					 n2.className='hidden';	
						break;
			default: break;
		}
		j--;
	} -->