<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="This is an example of a meta description.This will often">
	<meta name=viewport content="width=device-width,initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
		// function generateKey(){
		// 	$keyLength=8;
		// 	$str="1234567890abcdefghijklmnopqrstuvwxyz()/$";
		// 	$randStr=substr(str_shuffle($str),0,$keyLength);
		// 	return $randStr;
		// }
		function generateKey(){
			$randStr=uniqid('zhao',true);
			return $randStr;
		}
		echo generateKey();
	 ?>
</body>
</html>