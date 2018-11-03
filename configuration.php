<?php
	$dbHost= "127.0.0.1";
	$dbUser="root";
	$dbPass= "";
	$dbName= "cslab";

	$connect = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);

	if(!$connect){
		echo "connection failed";
	}

?>