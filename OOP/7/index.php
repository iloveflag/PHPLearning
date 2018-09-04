<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php 
		include_once "includes/newclass.inc.php";
		
		$object=new Newclass;
		unset($object);
		echo $object->getproperty()."<br>";
	 ?>
</body>
</html>