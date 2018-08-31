<?php
session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<ul>
		<li><a href="session_index.php">index.php</a></li>
		<li><a href="session_contact.php">contact.php</a></li>
	</ul>
	<?php 
	echo $_SESSION['username'];
	 ?>
</body>
</html>