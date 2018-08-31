<?php 
	include_once 'includes/dbh.inc.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		$sql="select * from users where user_uid='test';";
		$result=mysqli_query($conn,$sql);
		$resultCheck=mysqli_num_rows($result);
		if($resultCheck>0){
			while($row=mysqli_fetch_assoc($result)){
			}
		}
	 ?>
</body>
</html>