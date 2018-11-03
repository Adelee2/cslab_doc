<?php
 	 include_once('../configuration.php');
	 include_once('../AdeleyeMySql.php');
	
		//echo "hello";
		// $id=$_GET['id'];
		// echo $id;
	// $adelee = new AdeleyeMySql($connection);
	if(isset($_POST['updateone'])){
		$n1 = $_POST['firname'];
		$n2 = $_POST['lname'];
		$n3 = $_POST['sex'];
		$n4 = $_POST['phone'];
		$n5 = $_POST['email'];

	 // $up = $adeleyemysql->updaterow("directors",'name',$n1,'rank',$n2,'bank',$n3,'acct_number',$n4,'id',$n6);
	$updating = "UPDATE director,director_info set fname='$n1',lname='$n2',sex='$n3',phone_no='$n4',email='$n5' where director.id='1' and director_info.id='1'";
	// print_r($updating);
		$up= mysqli_query($connect,$updating);
		//print_r($up);
	  if($up){
	     echo"<script>alert('Successful');</script>";	  		
 	     echo"<script> window.location.href='directors_pro.php?';</script>";
	 }
	}
	//echo "hello1";
	if(isset($_POST['updatetwo'])){
		$n1 = $_POST['firname'];
		$n2 = $_POST['lname'];
		$n3 = $_POST['sex'];
		$n4 = $_POST['phone'];
		$n5 = $_POST['email'];

	$updating = "UPDATE director,director_info set fname='$n1',lname='$n2',sex='$n3',phone_no='$n4',email='$n5' where director.id=2 and director_info.id=2";
		$up= mysqli_query($connect,$updating);
		
	  if($up){
	  	 echo"<script>alert('Successful');</script>";	  		
 	     echo"<script> window.location.href='directors_pro.php';</script>";
	 }
	}
	//echo "hello2";
	//instructor
if(isset($_POST['updatethree'])){
		$n1 = $_POST['firname'];
		$n2 = $_POST['lname'];
		$n3 = $_POST['sex'];
		$n4 = $_POST['skill'];
		$n5 = $_POST['phone'];
		$n6 = $_POST['email'];
		
$updating = "UPDATE instructor,instructor_info set fname='$n1',lname='$n2',sex='$n3',speciality='$n4',phone_no='$n5',email='$n6' where instructor.id=5 and instructor_info.id=1";
	$up= mysqli_query($connect,$updating);
		
 if($up){
	  echo"<script>alert('Successful');</script>";	  		
 	  echo"<script> window.location.href='instructor_pro.php';</script>";
	 }
	}
	//echo "hello3";
if(isset($_POST['updatefour'])){
		$n1 = $_POST['firname'];
		$n2 = $_POST['lname'];
		$n3 = $_POST['sex'];
		$n4 = $_POST['skill'];
		$n5 = $_POST['phone'];
		$n6 = $_POST['email'];
$updating = "UPDATE instructor,instructor_info set fname='$n1',lname='$n2',sex='$n3',speciality='$n4',phone_no='$n5',email='$n6' where instructor.id=6 and instructor_info.id=2";
		$up= mysqli_query($connect,$updating);
		
 if($up){
	  echo"<script>alert('Successful');</script>";	  		
 	  echo"<script> window.location.href='instructor_pro.php';</script>";
	 }
	}
if(isset($_POST['updatefive'])){
		$n1 = $_POST['firname'];
		$n2 = $_POST['lname'];
		$n3 = $_POST['sex'];
		$n4 = $_POST['skill'];
		$n5 = $_POST['phone'];
		$n6 = $_POST['email'];

$updating = "UPDATE instructor,instructor_info set fname='$n1',lname='$n2',sex='$n3',speciality='$n4',phone_no='$n5',email='$n6' where instructor.id=7 and instructor_info.id=3";
		$up= mysqli_query($connect,$updating);
		
 if($up){
	   echo"<script>alert('Successful');</script>";	  		
 	     echo"<script> window.location.href='instructor_pro.php';</script>";
	 }
	}

if(isset($_POST['updatesix'])){
		$n1 = $_POST['firname'];
		$n2 = $_POST['lname'];
		$n3 = $_POST['sex'];
		$n4 = $_POST['skill'];
		$n5 = $_POST['phone'];
		$n6 = $_POST['email'];
$updating = "UPDATE instructor,instructor_info set fname='$n1',lname='$n2',sex='$n3',speciality='$n4',phone_no='$n5',email='$n6' where instructor.id=8 and instructor_info.id=4";
		$up= mysqli_query($connect,$updating);
		
 if($up){
	  echo "<script>alert('Successful');</script>";	 
	  echo "<script> window.location.href='instructor_pro.php'; </script>";
	 }
	}
	//echo "hello5";
		//interns
	//echo $_POST['update_one'];
if(isset($_POST['updateseven'])){
		$num=$_POST['num4'];
		$n1 = $_POST['firname'];
		$n2 = $_POST['lname'];
		$n3 = $_POST['sex'];
		$n8 = $_POST['depart'];
		$n4 = $_POST['skill'];
		$n5 = $_POST['phone'];
		$n6 = $_POST['email'];
		$n7 = $_POST['dates'];
		//echo "string";
	 // $up = $adeleyemysql->updaterow("directors",'name',$n1,'rank',$n2,'bank',$n3,'acct_number',$n4,'id',$n6);
$updating = "UPDATE intern,intern_info set fname='$n1',lname='$n2',sex='$n3',depart_from='$n8',speciality='$n4',phone_no='$n5',email='$n6',date_admit='$n7' where intern.id=1 and intern_info.id=1";
	// print_r($updating);
		$up= mysqli_query($connect,$updating);
		//print_r($up);
	  if($up){
	     echo"<script>alert('Successful');</script>";	  		
 	     echo"<script> window.location.href='prof_test.php?$num';</script>";
	 }
	}

	  $num2 = $_POST['num5'];
 	//  print_r($num2);
if(isset($_POST['update'.$num2])){
		$n1 = $_POST['firname'];
		$n2 = $_POST['lname'];
		$n3 = $_POST['sex'];
		$n8 = $_POST['depart'];
		$n4 = $_POST['skill'];
		$n5 = $_POST['phone'];
		$n6 = $_POST['email'];
		$n7 = $_POST['dates'];

	 // $up = $adeleyemysql->updaterow("directors",'name',$n1,'rank',$n2,'bank',$n3,'acct_number',$n4,'id',$n6);
$updating = "UPDATE intern,intern_info set fname='$n1',lname='$n2',sex='$n3',depart_from='$n8',speciality='$n4',phone_no='$n5',email='$n6',date_admit='$n7' where intern.id=$num2 and intern_info.id=$num2";
		$up= mysqli_query($connect,$updating);
		
	  if($up){
	  	 echo"<script>alert('Successful');</script>";	  		
 	     echo"<script> window.location.href='prof_test.php?$num2';</script>";
	 }
	  	}

?>