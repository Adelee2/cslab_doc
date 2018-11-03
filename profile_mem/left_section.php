<?php
	// session_name('Log-in');
	// session_start();
	// if(!isset($_SESSION['password']) && ($_SESSION['mysecurity'] != "MASA-pass")){
	// 	header('Location: ../new_login.php');
	// }
	// else{
	// 	echo"<script>alert('Illegal directory');</script";
	// 	echo "<script>window.load(../new_login.php);</script>";
	// }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Left_section</title>
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

<script type="text/javascript">
	// function changeColor(){
	// 	getElementById('idone').style='color: lightblue;';
	// }
	// function changeColor1(){
	// 	getElementById('idtwo').style='color: lightblue;';
	// }
	// function changeColor2(){
	// 	getElementById('idthree').style='color: lightblue;';
	// }
</script>

<style type="text/css">

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
	 <div class="float-left bg-dark" style="width: 10%; height:650px; padding-top: 200px;">
			<div class="dropdown show">
			  <div style="">
			  	<table align="center">
			  		<tr>
			  			<td><i class="fa fa-angle-double-right" aria-hidden="true"></i></td>
			  			<td><a class="over nav-link" id="idone" href="directors_pro.php"><big>Directors</big></a></td>
			  		</tr>
			  		<tr>&nbsp;</tr>
			  		<tr>
			  			<td><i class="fa fa-angle-double-right" aria-hidden="true"></i></td>
			  			<td><a class="over nav-link" id="idtwo" href="Instructor_pro.php"><big>Instructors</big></a></td>
			  		</tr>
			  		<tr>&nbsp;</tr>
			    	<tr>
			    		<td><i class="fa fa-angle-double-right" aria-hidden="true"></i></td>
			    		<td><a class="over nav-link" id="idthree" href="prof_test.php"><big>Interns</big></a></td>
			    	</tr>
			    	<!-- <tr>&nbsp;</tr>
			    	<tr>
			    		<td><i class="fa fa-angle-double-right" aria-hidden="true"></i></td>
			    		<td> <a class="over" id="idfour"  onclick="changeColor2();" href="other_pro.php"><big>Others</big></a></td>
			    	</tr> -->
			   </table>
			    
			</div>
			</div>
		</div>
</body>
</html>