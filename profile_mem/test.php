<?php
	 include_once('../configuration.php');
	 include_once('../AdeleyeMySql.php');

	$adeleyemysql= new AdeleyeMySql($connect);
	// echo "string";
	 $i=1;
	 $j=0;
	 $bool1=0;
	$bool2=0;
	$bool3=0;
	 // $row1= $adeleyemysql->fetchdatabase1("intern_info");
	 // print_r($row1);
	?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<script src="https://use.fontawesome.com/ea46728558.js"></script>
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/jquery.min.js"></script> -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</head>
<body style="text-align: center;">
	<script type="text/javascript">
		$('#myModal').modal('show')
	</script>
	<div class="modal" id="myModal" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">edit profile</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <p>Modal body text goes here.</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>
</body>
</html>
<?php
		// echo "<br/>";

		
	// 	while($row3 = $adeleyemysql->fetchdatabase("intern","intern_info","intern.id",$j,"intern_info.id",$j)){
	// 				$checker2[]=$row3[2];
	// 				$j++;
	// 			}
	// 	print_r($checker2);

		// 	while($row3= $adeleyemysql->getrow6("intern","intern.id")){
	// 	var_dump($row3['id']);
	// 	$i++;
	// }
	// $i=1;
	// while($row3= $adeleyemysql->getrow6("intern","intern.id","id",$i)){
	// 	print_r($row3);
	// 	$i++;
	// }
	
	// $row3= $adeleyemysql->getrow6("intern","intern.id","id",5);
	// print_r($row3);

	// $row2 = $adeleyemysql->fetchdatabase("intern","intern_info","intern.id",14,"intern_info.id",14);
	// print_r($row2);
// $row1 = $adeleyemysql->getrow1("intern","intern_info","intern.id",10,"intern.intern_id","intern_info.id","fname","lname","sex","depart_from","date_admit","speciality","phone_no","email");
// 	print_r($row1);

?>

