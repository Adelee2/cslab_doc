<?php

	 include_once('../configuration.php');
	 include_once('../AdeleyeMySql.php');

	 $adeleyemysql = new AdeleyeMySql($connect);
	 // $n1 = ;
	 // $n2 = $_POST['profile1_img'];
	 // echo "submit_".$k;
	 //  echo "profile".$k."_img";

 if(isset($_POST['submit_one'])){
 		// $check_img = $_FILES['profile1_img'];
 		// print_r($check_img);
	 	$img_firname = $_FILES['profile1_img']['name'];
	 	 $img_name = explode(".", $img_firname);

	 	$img_type = $_FILES['profile1_img']['type'];
	 	$img_type = explode("/", $img_type);

	 	$img_tmpname = $_FILES['profile1_img']['tmp_name'];

	 	$img_error = $_FILES['profile1_img']['error'];
	 	
	 	if($img_error != 0){
	 		$adeleyemysql->ShowError("Error Uploading your file!");
	 	}
	 	else{

	 	     if($img_type[0] == "image"){
	 		
	 			 $img_newname = uniqid($img_name[0],true).'.'.$img_name[1];
	 			$target = "Uploads/".$img_newname;
	 			move_uploaded_file($img_tmpname, $target);
	 			$insert_img = "UPDATE director_info SET pictures='$img_newname' WHERE director_info.id=1";
	 				$up= mysqli_query($connect,$insert_img);
	 				 if($up){
	 			         echo "<script> window.location.href= 'directors_pro.php';</script>";
	 			      }
	 			      else{
	 			      	$adeleyemysql->ShowError("Update unsuccessful");
	 			      }
	   		  }
	     else{
	 			echo "Incorrect file format!";
	 		}
	 	}
	 }

	 // $n2 = ;
	 if(isset($_POST['submit_two'])){

	 	$img_firname = $_FILES['profile2_img']['name'];
	 	 $img_name = explode(".", $img_firname);

	 	$img_type = $_FILES['profile2_img']['type'];
	 	$img_type = explode("/", $img_type);

	 	$img_tmpname = $_FILES['profile2_img']['tmp_name'];

	 	$img_error = $_FILES['profile2_img']['error'];
	 	
	 	if($img_error != 0){
	 		$adeleyemysql->ShowError("Error Uploading your file!");
	 	}
	 	else{

	 	     if($img_type[0] == "image"){
	 		
	 			 $img_newname = uniqid($img_name[0],true).'.'.$img_name[1];
	 			$target = "Uploads/".$img_newname;
	 			move_uploaded_file($img_tmpname, $target);

	 			$insert_img = "UPDATE director_info SET pictures='$img_newname' WHERE director_info.id=2";
	 				$up = mysqli_query($connect,$insert_img);
	 				 if($up){
	 			         echo "<script> window.location.href= 'directors_pro.php';</script>";
	 			      }
	 			      else{
	 			      	$adeleyemysql->ShowError("Update unsuccessful");
	 			      }
	   		   }
	         else{
	 			echo "Incorrect file format!";
	 		}
	 	}
	 }

	  // $n3 = ;
	  if(isset($_POST['submit_three'])){

	 	$img_firname = $_FILES['profile3_img']['name'];
	 	 $img_name = explode(".", $img_firname);

	 	$img_type = $_FILES['profile3_img']['type'];
	 	$img_type = explode("/", $img_type);

	 	$img_tmpname = $_FILES['profile3_img']['tmp_name'];

	 	$img_error = $_FILES['profile3_img']['error'];
	 	
	 	if($img_error != 0){
	 		$adeleyemysql->ShowError("Error Uploading your file!");
	 	}
	 	else{

	 	     if($img_type[0] == "image"){
	 		
	 			 $img_newname = uniqid($img_name[0],true).'.'.$img_name[1];
	 			$target = "Uploads/".$img_newname;
	 			move_uploaded_file($img_tmpname, $target);

	 			$insert_img = "UPDATE instructor_info SET pictures='$img_newname' WHERE instructor_info.id=1";
	 				$up= mysqli_query($connect,$insert_img);
	 				 if($up){
	 			        echo "<script> window.location.href= 'instructor_pro.php';</script>";
	 			      }
	 			      else{
	 			      	$adeleyemysql->ShowError("Update unsuccessful");
	 			      }
	   		  }
	     else{
	 			echo "Incorrect file format!";
	 		}
	 	}
	 }

	  // $n4 = ;
	  if(isset($_POST['submit_four'])){

	 	$img_firname = $_FILES['profile4_img']['name'];
	 	 $img_name = explode(".", $img_firname);

	 	$img_type = $_FILES['profile4_img']['type'];
	 	$img_type = explode("/", $img_type);

	 	$img_tmpname = $_FILES['profile4_img']['tmp_name'];

	 	$img_error = $_FILES['profile4_img']['error'];
	 	
	 	if($img_error != 0){
	 		$adeleyemysql->ShowError("Error Uploading your file!");
	 	}
	 	else{

	 	     if($img_type[0] == "image"){
	 		
	 			 $img_newname = uniqid($img_name[0],true).'.'.$img_name[1];
	 			$target = "Uploads/".$img_newname;
	 			move_uploaded_file($img_tmpname, $target);

	 			$insert_img = "UPDATE instructor_info SET pictures='$img_newname' WHERE instructor_info.id=2";
	 				$up= mysqli_query($connect,$insert_img);
	 				 if($up){
	 			        echo "<script> window.location.href= 'instructor_pro.php';</script>";
	 			      }
	 			      else{
	 			      	$adeleyemysql->ShowError("Update unsuccessful");
	 			      }
	   		  }
	     else{
	 			echo "Incorrect file format!";
	 		}
	 	}
	 }

	  // $n5 = ;
	  if(isset($_POST['submit_five'])){

	 	$img_firname = $_FILES['profile5_img']['name'];
	 	 $img_name = explode(".", $img_firname);

	 	$img_type = $_FILES['profile5_img']['type'];
	 	$img_type = explode("/", $img_type);

	 	$img_tmpname = $_FILES['profile5_img']['tmp_name'];

	 	$img_error = $_FILES['profile5_img']['error'];
	 	
	 	if($img_error != 0){
	 		$adeleyemysql->ShowError("Error Uploading your file!");
	 	}
	 	else{

	 	     if($img_type[0] == "image"){
	 		
	 			 $img_newname = uniqid($img_name[0],true).'.'.$img_name[1];
	 			$target = "Uploads/".$img_newname;
	 			move_uploaded_file($img_tmpname, $target);
				$insert_img = "UPDATE instructor_info SET pictures='$img_newname' WHERE instructor_info.id=3";
	 				$up= mysqli_query($connect,$insert_img);
	 				 if($up){
	 			       echo "<script> window.location.href= 'instructor_pro.php';</script>";
	 			      }
	 			      else{
	 			      	$adeleyemysql->ShowError("Update unsuccessful");
	 			      }
	   		  }
	     else{
	 			echo "Incorrect file format!";
	 		}
	 	}
	 }

	  // $n6 = ;
	  if(isset($_POST['submit_six'])){

	 	$img_firname = $_FILES['profile6_img']['name'];
	 	 $img_name = explode(".", $img_firname);

	 	$img_type = $_FILES['profile6_img']['type'];
	 	$img_type = explode("/", $img_type);

	 	$img_tmpname = $_FILES['profile6_img']['tmp_name'];

	 	$img_error = $_FILES['profile6_img']['error'];
	 	
	 	if($img_error != 0){
	 		$adeleyemysql->ShowError("Error Uploading your file!");
	 	}
	 	else{

	 	     if($img_type[0] == "image"){
	 		
	 			 $img_newname = uniqid($img_name[0],true).'.'.$img_name[1];
	 			$target = "Uploads/".$img_newname;
	 			move_uploaded_file($img_tmpname, $target);

					$insert_img = "UPDATE instructor_info SET pictures='$img_newname' WHERE instructor_info.id=4";
	 				$up= mysqli_query($connect,$insert_img);
	 				 if($up){
	 			       echo "<script> window.location.href= 'instructor_pro.php';</script>";
	 			      }
	 			      else{
	 			      	$adeleyemysql->ShowError("Update unsuccessful");
	 			      }
	   		  }
	     else{
	 			echo "Incorrect file format!";
	 		}
	 	}
	 }

	 if(isset( $_POST['submit_7'])){

	 	$img_firname = $_FILES['profile7_img']['name'];
	 	 $img_name = explode(".", $img_firname);

	 	$img_type = $_FILES['profile7_img']['type'];
	 	$img_type = explode("/", $img_type);

	 	$img_tmpname = $_FILES['profile7_img']['tmp_name'];

	 	$img_error = $_FILES['profile7_img']['error'];
	 	
	 	if($img_error != 0){
	 		$adeleyemysql->ShowError("Error Uploading your file!");
	 	}
	 	else{

	 	     if($img_type[0] == "image"){
	 		
	 			 $img_newname = uniqid($img_name[0],true).'.'.$img_name[1];
	 			$target = "Uploads/".$img_newname;
	 			move_uploaded_file($img_tmpname, $target);


	 				$insert_img = "UPDATE intern_info SET pictures='$img_newname' WHERE intern_info.id=1";
	 				$up= mysqli_query($connect,$insert_img);
	 				 if($up){
	 			         echo "<script> window.location.href= 'prof_test.php';</script>";
	 			      }
	 			      else{
	 			      	$adeleyemysql->ShowError("Update unsuccessful");
	 			      }
	   		  }
	     else{
	 			echo "Incorrect file format!";
	 		}
	 	}
	 }


	 $num1 = $_POST['num1'];
	  // Interns;
	  if(isset( $_POST['submit_'.$num1])){
	  		 $num2 = $_POST['num2'];

	 	$img_firname = $_FILES['profile'.$num1.'_img']['name'];
	 	 $img_name = explode(".", $img_firname);

	 	$img_type = $_FILES['profile'.$num1.'_img']['type'];
	 	$img_type = explode("/", $img_type);

	 	$img_tmpname = $_FILES['profile'.$num1.'_img']['tmp_name'];

	 	$img_error = $_FILES['profile'.$num1.'_img']['error'];
	 	
	 	if($img_error != 0){
	 		$adeleyemysql->ShowError("Error Uploading your file!");
	 	}
	 	else{

	 	     if($img_type[0] == "image"){
	 		
	 			 $img_newname = uniqid($img_name[0],true).'.'.$img_name[1];
	 			$target = "Uploads/".$img_newname;
	 			move_uploaded_file($img_tmpname, $target);


	 				$insert_img = "UPDATE intern_info SET pictures='$img_newname' WHERE intern_info.id=$num2";
	 				$up= mysqli_query($connect,$insert_img);
	 				 if($up){
	 			         echo "<script> window.location.href= 'prof_test.php';</script>";
	 			      }
	 			      else{
	 			      	$adeleyemysql->ShowError("Update unsuccessful");
	 			      }
	   		  }
	     else{
	 			echo "Incorrect file format!";
	 		}
	 	}

	 }

	  // $n15 =;
	 //  if(isset( $_POST['submit_fifteen'])){

	 // 	$img_firname = $_FILES['profile15_img']['name'];
	 // 	 $img_name = explode(".", $img_firname);

	 // 	$img_type = $_FILES['profile15_img']['type'];
	 // 	$img_type = explode("/", $img_type);

	 // 	$img_tmpname = $_FILES['profile15_img']['tmp_name'];

	 // 	$img_error = $_FILES['profile15_img']['error'];
	 	
	 // 	if($img_error != 0){
	 // 		$adeleyemysql->ShowError("Error Uploading your file!");
	 // 	}
	 // 	else{

	 // 	     if($img_type[0] == "image"){
	 		
	 // 			 $img_newname = uniqid($img_name[0],true).'.'.$img_name[1];
	 // 			$target = "Uploads/".$img_newname;
	 // 			move_uploaded_file($img_tmpname, $target);

	 // 			if(empty($adeleyemysql->fetchdatabase("pro_img"))){
		//  			 // echo "DB is empty";
		//  			$insert = $adeleyemysql-> addlist('images',$img_newname,"pro_img");
		//  				header('location: profile15.php');
		//  			}
	 // 			else{
	 // 				$insert_img = "UPDATE pro_img SET images='$img_newname' WHERE id=15";
	 // 				$up= mysqli_query($connect,$insert_img);
	 // 				 if($up){
	 // 			         header('location: profile15.php');
	 // 			      }
	 // 			      else{
	 // 			      	$adeleyemysql->ShowError("Update unsuccessful");
	 // 			      }
	 // 		     }
	 //   		  }
	 //     else{
	 // 			echo "Incorrect file format!";
	 // 		}
	 // 	}
	 // }


?>