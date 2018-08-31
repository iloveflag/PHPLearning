<?php 
	//Indexed arrays
	$data=array('Daniel','John','Jane');
	echo $data[0];

	//Associative arrays
	$data=array("first"=>"Daniel","last"=>"Nielsen","age"=>25);

	//Multidimensional arrays
	$data1=array(array("first"=>"Daniel","last"=>"Nielsen"),"John","Jane");
	echo $data1[0]["last"];
 ?>