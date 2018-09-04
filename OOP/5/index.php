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
		echo $object->getproperty();
		$object->setNewProperty("This is the new data!");
		echo $object->getproperty();
	 ?>
</body>
</html>