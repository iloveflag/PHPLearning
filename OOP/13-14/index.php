<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	include_once "includes/dbh.inc.php";
	include_once "includes/user.inc.php";
	$object=new User;
	echo $object->getAllUsers()."<br>";
	echo $object->getUserWithCountCheck();
	 ?>
</body>
</html>