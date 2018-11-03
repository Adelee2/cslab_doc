<?php
	include_once('configuration.php');
	include_once('AdeleyeMySql.php');

    $adeleyemysql= new AdeleyeMySql($connect);

	// $n6 = $_POST['user_entry3'];
 	$n2 = $_POST['pass'];
 	$n3 = $_POST['user'];

 	if($n3 == "Admin"){
 		 $adelee = $adeleyemysql->getrow4("login","login_info",1,"login.id",1,"login_info.id","username","password");
 		 // print_r($adelee[0]) ;
 		if($n2 == $adelee['password']){
 			// session_name('Log-out');
			session_start();
			  $adelee = $adeleyemysql->getrow4("login","login_info",1,"login.id",1,"login_info.id","username","password");

			$_SESSION['user'] = $adelee['password'];
			$_SESSION['mysecurity'] = "NASA-pass"; 
 			echo "<script>window.location.href='Home/cslab_doc.php';</script>";
 		}

 		else{
 			echo "<script> alert('Incorrect Password');</script>";
 			echo "<script>window.location.href='new_login.php';</script>";
 		}
 		// elseif($n2 != $adelee[0]){
 		// 	$adeleyemysql->ShowError("Incorrect password");
 		// }
 }
 else{
 		echo "<script> alert('Incorrect Username');</script>";
 		echo "<script>window.location.href='new_login.php';</script>";
 }
?>