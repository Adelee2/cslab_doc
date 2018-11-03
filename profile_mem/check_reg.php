<?php 

		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;

	 include_once('../configuration.php');
	 include_once('../AdeleyeMySql.php');
	
	$adeleyemysql= new AdeleyeMySql($connect);
	 $i=1;
	 $j=1;
	 $p=1;
	 $q=1;
	if(isset($_POST['submit'])){
		// echo "string";
		$n1 = $_POST['firname'];
		$n2 = $_POST['lname'];
		$n3 = $_POST['sex'];
		$n4 = $_POST['depart'];
		$n5 = str_replace(',', ' ',$_POST['skill']);
		$n6 = $_POST['phone'];
		$n7 = $_POST['email'];
		$n8 = $_POST['dates'];

		$img_firname = $_FILES['profile_img']['name'];
	 	 $img_name = explode(".", $img_firname);

	 	$img_type = $_FILES['profile_img']['type'];
	 	$img_type = explode("/", $img_type);

	 	$img_tmpname = $_FILES['profile_img']['tmp_name'];

	 	$img_error = $_FILES['profile_img']['error'];
	 	
	 	if($img_error != 0){
	 		$adeleyemysql->ShowError("Error Uploading your file!");
	 	}
	 	else{
	 		// echo $n1.$n2.$n3.$n4.$n5.$n6.$n7.$n8;
	 		//checks if details is already in database
	 		 	$checker1= array();
	 			 $checker2= array();
	 			 $checker3= array();
	 			 $checker4= array();
			while($row2 = $adeleyemysql->fetchdatabase("intern","intern_info","intern.id",$i,"intern_info.id",$i)){
					$checker1[]=$row2[10];
					$i++;
				}
			while($row3 = $adeleyemysql->fetchdatabase("intern","intern_info","intern.id",$j,"intern_info.id",$j)){
					$checker2[]=$row3[11];
					$j++;
				}
			while($row4 = $adeleyemysql->fetchdatabase("intern","intern_info","intern.id",$p,"intern_info.id",$p)){
					$checker3[]=$row4[1];
					$p++;
				}
			while($row5 = $adeleyemysql->fetchdatabase("intern","intern_info","intern.id",$q,"intern_info.id",$q)){
					$checker4[]=$row5[2];
					$q++;
				}

			for($k=0,$m=0;$k<count($checker1) || $m<count($checker2); $k++,$m++){
				if($checker1[$k]== $n6 || $checker2[$m]==$n7 ||($checker3[$k]==$n1 && $checker4[$m]==$n2)){
					$adeleyemysql->ShowError( "you are not a new member!");
				}
			}
			//if details is not in database, then proceed to store the details

	 	     if($img_type[0] == "image"){
	 		
	 			 $img_newname = uniqid($img_name[0],true).'.'.$img_name[1];
	 			$target = "Uploads/".$img_newname;
	 			move_uploaded_file($img_tmpname, $target);

			$mydb= "speciality,pictures,phone_no,email";
			$mydbvalues="'$n5','$img_newname','$n6','$n7'";
			$row = $adeleyemysql->addlist($mydb,$mydbvalues,"intern_info");
			// var_dump($mydbvalues);

			$get_id= $adeleyemysql->getrow5("intern_info","phone_no","'$n6'","id");
			$get_id1=$get_id[0];
					$mydb1= "fname,lname,sex,depart_from,date_admit,intern_id";
					$mydbvalue1="'$n1','$n2','$n3','$n4','$n8','$get_id1'";
			$row1 = $adeleyemysql->addlist($mydb1,$mydbvalue1,"intern");
			// print_r($row1);
	 			if($row== true && $row1==true){
						echo "<script type='text/javascript'>
								alert('successful');
						       </script>";
						echo "<script type='text/javascript'>
								alert('You are now a member of CSLAB');
						       </script>";
						 echo"<script type='text/javascript' >window.location.href='registration.php';</script>";
					}
					else{
						echo "<script type='text/javascript'>
								alert('Unsuccessful');
						       </script>";
						echo "<script type='text/javascript'>
								alert('Please rename your image you want to upload');
						       </script>";
						echo"<script type='text/javascript' >window.location.href='registration.php';</script>";
					}
	   		  	}
		     else{
		 			$adeleyemysql->ShowError( "Incorrect file format!");
		 		}
	 		}
	 	}

	// $message ='';
	// 	// $path = "Uploads/".$img_newname;
	// 	$message ='

	// 				<h3 align = "center">New Interns Details</h3>
	// 				<table width="100%">
	// 					<tr>
	// 						<td width="30%">First Name</td>
	// 						<td width="70%">'.$n1.'</td>
	// 					</tr>
	// 					<tr>
	// 						<td width="30%">Last Name</td>
	// 						<td>'.$n2.'</td>
	// 					</tr>
	// 					<tr>
	// 						<td width="30%">Sex</td>
	// 						<td>'.$n3.'</td>
	// 					</tr>
	// 					<tr>
	// 						<td width="30%">Department</td>
	// 						<td>'.$n4.'</td>
	// 					</tr>
	// 					<tr>
	// 						<td width="30%">Skills</td>
	// 						<td>'.$n5.'</td>
	// 					</tr>
	// 					<tr>
	// 						<td width="30%">Date Admitted</td>
	// 						<td>'.$n8.'</td>
	// 					</tr>
	// 					<tr>
	// 						<td width="30%">Phone number</td>
	// 						<td>'.$n6.'</td>
	// 					</tr>
	// 					<tr>
	// 						<td width="30%">Email</td>
	// 						<td>'.$n7.'</td>
	// 					</tr>
	// 				</table>
	// 			';
	// 		// use PHPMailer\PHPMailer;
	// 	require_once('../../PHPMailer-Master/src/PHPMailer.php');
	// 	require_once('../../PHPMailer-Master/src/OAuth.php');
	// 	require_once('../../PHPMailer-Master/src/SMTP.php');
	// 	require_once('../../PHPMailer-Master/src/Exception.php');
	// 	require_once('../../PHPMailer-Master/src/POP3.php');

	// 	$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
	// 	try {
	// 	    //Server settings
	// 	    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
	// 	    $mail->isSMTP();                                      // Set mailer to use SMTP
	// 	    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	// 	    // $mail->SMTPAuth = true;                               // Enable SMTP authentication
	// 	    $mail->Username = 'adeleyea5@gmail.com';                 // SMTP username
	// 	    $mail->Password = 'ADELEYE202020';                           // SMTP password
	// 	    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
	// 	    $mail->Port = 465;                                    // TCP port to connect to

	// 	    //Recipients
	// 	    $mail->setFrom($_POST['email'], $_POST['firname']);
	// 	    $mail->addAddress('adeleyea5@gmail.com', 'Adeleye');     // Add a recipient
	// 	    // $mail->addAddress('ellen@example.com');               // Name is optional
	// 	    // $mail->addReplyTo('info@example.com', 'Information');
	// 	    // $mail->addCC('cc@example.com');
	// 	    // $mail->addBCC('bcc@example.com');

	// 	    //Attachments
	// 	    $mail->addAttachment($target);         // Add attachments
	// 	    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

	// 	    //Content
	// 	    $mail->isHTML(true);                                  // Set email format to HTML
	// 	    $mail->Subject = 'Here is the subject';
	// 	    $mail->Body    = $message;
	// 	    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	// 	    $mail->send();
	// 	    echo 'Message has been sent';
	// 	} 
	// 	catch (Exception $e) {
	// 	    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
	// 	}
			  //     if($row== true && $row1==true && $mail->Send()){
					// 	echo "<script type='text/javascript'>
					// 			alert('sucessful');
					// 	       </script>";
					// 	echo "<script type='text/javascript'>
					// 			alert('You are now a member of CSLAB');
					// 	       </script>";
					// 	 echo"<script type='text/javascript' >window.location.href='registration.php';</script>";
					// }
	// }
?>