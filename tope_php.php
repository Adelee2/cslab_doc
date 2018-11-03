<?php

$in1=$_POST['input1'];
$in2=$_POST['input2'];

$result=calculate($in1,$in2);

echo $result;

function calculate($value1,$value2)
{
	return $value1+$value2;
}


?>