<?php
	
	/**
	* 
	*/
	class AdeleyeMySql
	{
		var $dbconnection;
		//var $mynewquery;
		//var $result

		function AdeleyeMySql ($con)
		{
			$this->dbconnection=$con;
		}

		function ShowError ($message)
		{
			echo "<script type='text/javascript'> 
					alert('".$message."');
					history.go(-1);
				</script>";
			exit();
		}

		function addlist($fields,$values,$table1)
		{
			if($fields=="" || $values=="" || $table1=="")
			{
				$this->ShowError("field must not be empty");
			}

			if(!$this->checkfield($fields,$values))
			{
				$this->ShowError("data does not correlate");
			}

			else{
				$tquery = "INSERT INTO " .$table1."(".$fields.") VALUES(".$values.")";
				$myquery = mysqli_query($this->dbconnection,$tquery);

				if($myquery){
					return true;
				}
				else{
					print_r($myquery);
					//$msg =  mysqli_error($this->dbconnection);
					// $this->ShowError("Cannot insert into DB: ");
				}
			}
		}

		//function that fetches data from database in an ORDERBY and LIMITS
		function fetchdatabase($table1,$table2,$id1,$idval1,$id2,$idval2){

			if($table1 =="" || $table2 ==""){
				$this->ShowError("Table is empty");

			}
			// else{
			// 	if(($orderby!="" && $order=="") || ($orderby=="" && $order!="")){
			// 		$this->ShowError("Both must be filled");
			// 	}
			// 	else{
			// 		if($orderby!="" && ($order=='A' || $order=='a') && $limit=""){  //if limit is empty, it selects only by orderby in ascending order
			// 			$order="ASC";
			// 			$myquery="SELECT * FROM $tables $orderby $order";
			// 			$mynewquery=mysqli_query($this->dbconnection,$myquery);
			// 		}
			// 		elseif($orderby!="" && ($order=='D' || $order=='d') && $limit=""){  //if limit is empty, it selects only by orderby in descending order
			// 			$order="DESC";
			// 			$myquery="SELECT * FROM $tables $orderby $order";
			// 			$mynewquery=mysqli_query($this->dbconnection,$myquery);
			// 		}
					// else{
					// 	if($orderby!="" && ($order=='A' || $order=='a') && $limit!=""){
					// 		$order="ASC";
					// 		$myquery="SELECT * FROM $tables $orderby $order $limit";
					// 		$mynewquery=mysqli_query($this->dbconnection,$myquery);
					// 	}
					// 	elseif($orderby!="" && ($order=='D' || $order=='d') && $limit!=""){
					// 		$order="DESC";
					// 		$myquery="SELECT * FROM $tables $orderby $order $limit";
					// 		$mynewquery=mysqli_query($this->dbconnection,$myquery);
					// 	}
						else{
							$myquery = "SELECT * FROM $table1,$table2 WHERE $id1 = $idval1 and $id2 = $idval2";
							// print_r($myquery);
							$mynewquery = mysqli_query($this->dbconnection,$myquery);
							$result = mysqli_fetch_array($mynewquery);	

							return $result;		

							// if($result){
							// 	return true;
							// }
							// else{
							// 	return false;
							// }
						}
					}
			function fetchdatabase1($table1){

				if($table1 ==""){
					$this->ShowError("Table is empty");

				}
		
				else{
					$myquery = "SELECT * FROM $table1";
					// print_r($myquery);
					$mynewquery = mysqli_query($this->dbconnection,$myquery);
					$result = mysqli_fetch_array($mynewquery);	
						return $result;		
						// if($result){
						// 	return true;
						// }
						// else{
						// 	return false;
						// }
						}
					}
			function getrow1($table1,$table2,$where1,$whereval1,$where2,$whereval2,$fname,$lname,$sex,$depart_from,$date_admit,$speciality,$phone_no,$email){
				if($table1== "" && $where1 == "" || $whereval1 == "" || $table2== "" && $where2 == "" || $whereval2 == ""){
					$this->ShowError("Enter valid data");
				}
				else{
					$myarr="SELECT $fname,$lname,$sex,$depart_from,$date_admit,$speciality,$phone_no,$email FROM $table1,$table2 WHERE $where1=$whereval1 and $where2=$whereval2";
					$mynewarr=mysqli_query($this->dbconnection,$myarr);

					return mysqli_fetch_array($mynewarr);
				}
			}
			function getrow2($table1,$table2,$where1,$whereval1,$where2,$whereval2,$pictures){
				if($table1== "" && $where1 == "" || $whereval1 == "" || $table2== "" && $where2 == "" || $whereval2 == ""){
					$this->ShowError("Enter valid data");
				}
				else{
					$myarr="SELECT $pictures FROM $table1,$table2 WHERE $where1=$whereval1 and $where2=$whereval2";
					$mynewarr=mysqli_query($this->dbconnection,$myarr);

					return mysqli_fetch_array($mynewarr);
				}
			}
			function getrow($table1,$table2,$where1,$whereval1,$where2,$whereval2,$fname,$lname,$sex,$speciality,$phone_no,$email){
				if($table1== "" && $where1 == "" || $whereval1 == "" || $table2== "" && $where2 == "" || $whereval2 == ""){
					$this->ShowError("Enter valid data");
				}
				else{
					$myarr="SELECT $fname,$lname,$sex,$speciality,$phone_no,$email FROM $table1,$table2 WHERE $where1=$whereval1 and $where2=$whereval2";
					$mynewarr=mysqli_query($this->dbconnection,$myarr);
					return mysqli_fetch_array($mynewarr);
				}
			}

			function getrow3($table1,$table2,$where1,$whereval1,$where2,$whereval2,$fname,$lname,$sex,$phone_no,$email){
				if($table1== "" && $where1 == "" || $whereval1 == "" || $table2== "" && $where2 == "" || $whereval2 == ""){
					$this->ShowError("Enter valid data");
				}
				else{
					$myarr="SELECT $fname,$lname,$sex,$phone_no,$email FROM $table1,$table2 WHERE $where1=$whereval1 and $where2=$whereval2";
					$mynewarrs=mysqli_query($this->dbconnection,$myarr);
					return mysqli_fetch_array($mynewarrs);
				}
			}
			function getrow4($table1,$table2,$where1,$whereval1,$where2,$whereval2,$username,$password){
				if($table1== "" && $where1 == "" || $whereval1 == "" || $table2== "" && $where2 == "" || $whereval2 == ""){
					$this->ShowError("Enter valid data");
				}
				else{
					$myarr="SELECT $username,$password FROM $table1,$table2 WHERE $where1=$whereval1 and $where2=$whereval2";
					$mynewarr=mysqli_query($this->dbconnection,$myarr);

					return mysqli_fetch_array($mynewarr);
				}
			}
			function getrow5($table1,$where1,$whereval1,$idval){
				if($table1== "" && $where1 == "" || $whereval1 == ""){
					$this->ShowError("Enter valid data");
				}
				else{
					$myarr="SELECT $idval FROM $table1 WHERE $where1=$whereval1";
					$mynewarr=mysqli_query($this->dbconnection,$myarr);

					return mysqli_fetch_array($mynewarr);
				}
			}
			function getrow6($table1,$idval,$where,$whereval1){
				if($table1== ""){
					$this->ShowError("Enter valid data");
				}
				else{
					$myarr="SELECT $idval FROM $table1 WHERE $where=$whereval1 ";
					$mynewarr=mysqli_query($this->dbconnection,$myarr);
					print_r(mysqli_fetch_array($mynewarr));
					return mysqli_fetch_array($mynewarr);
				}
			}
			function deleteval($where,$whereval,$table){
				if($table == "" && $where == "" || $whereval == ""){
					$this->ShowError("Enter valid data");
				}
				else{
					$myarr="DELETE FROM $table WHERE $where='".$whereval."'";
					$mynewarr=mysqli_query($this->dbconnection,$myarr);

					if($mynewarr){
						return true;
					}
					else{
						return false;
					}
				}
			}

			function updateRow($name,$naming,$table,$id,$idval){
				if($table == ""){
					$this->ShowError("Enter valid data");
				}
				else{
					 // $name=$this->equatearray1($name);
					 // $naming=$this->equatearray2($naming);
					$myarr="UPDATE $table SET $name = .'$naming'. WHERE $id='".$idval."' ";
					$mynewarr=mysqli_query($this->dbconnection,$myarr);

					return $mynewarr;
				}
			}

		  function checkfield($field,$value)
		  {
			$arraya = explode(",", $field);
			$counta = count($arraya);
			$arrayb = explode(",", $value);
			$countb = count($arrayb);
			if ($counta==$countb){
				return true;
			}
			else{
				return false;
			}
		}

		function equatearray1($value1){
			$arr_value1 = explode(",",$value1);

			return $arr_value1;
		}
		function equatearray2($value2){
			$arr_value2 = explode(",",$value2);

			return $arr_value2;
		}
	}
?>