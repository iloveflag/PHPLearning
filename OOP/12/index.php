<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	include "includes/dbh.inc.php";
	include 'includes/user.inc.php';
	include 'includes/viewuser.inc.php';
	$users=new ViewUser();
	echo $users->showALLUsers();
	 ?>

</body>
</html>