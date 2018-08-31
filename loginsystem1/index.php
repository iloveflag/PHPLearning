<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h2>Sign up</h2>
	<form action="includes/signup.inc.php" method="post">
		<?php 
			if(isset($_GET['first'])){
				$first=$_GET['first'];
				echo '<div><input type="text" name="first" placeholder="Firstname" value="'.$first.'"></div>';
			}
			else{
				echo  '<div><input type="text" name="first" placeholder="Firstname"></div>';
			}
			if(isset($_GET['last'])){
				$last=$_GET['last'];
				echo '<div><input type="text" name="last" placeholder="Lastname" value="'.$last.'"></div>';
			}
			else{
				echo  '<div><input type="text" name="last" placeholder="Lastname"></div>';
			}

		 ?>
		<div><input type="text" name="email" placeholder="E-mail"></div>
		<?php 
			if(isset($_GET['uid'])){
				$uid=$_GET['uid'];
				echo '<div><input type="text" name="uid" placeholder="Username" value="'.$uid.'"></div>';
			}
			else{
				echo  '<div><input type="text" name="uid" placeholder="Username"></div>';
			}
		 ?>
		<div><input type="password" name="pwd" placeholder="Password"></div>
		<div><button type="submit" name="submit">Sign up</button></div>
	</form>
	<?php 
		/*$fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		if(strpos($fullUrl,"signup=empty")==true){
			echo "<p class='error'>You did not fill in all fields!</p>";
			exit();
		}
		elseif(strpos($fullUrl,"signup=char")==true){
			echo "<p class='error'>You used intvalid characters!</p>";
			exit();
		}
		elseif(strpos($fullUrl,"signup=email")==true){
			echo "<p class='error'>You used an intvalid e-mail!</p>";
			exit();
		}
		elseif(strpos($fullUrl,"signup=char")==true){
			echo "<p class='error'>You did not fill in all fields!</p>";
			exit();
		}
		elseif(strpos($fullUrl,"signup=success")==true){
			echo "<p class='success'>You have signed up!</p>";
			exit();
		}*/

		if(!isset($_GET['signup'])){
			exit();
		}
		else{
			$signupCheck=$_GET['signup'];
			if($signupCheck=='empty'){
			echo "<p class='error'>You did not fill in all fields!</p>";
			exit();
			}
			elseif($signupCheck=='char'){
				echo "<p class='error'>You used intvalid characters!</p>";
				exit();
			}
			elseif($signupCheck=='email'){
			echo "<p class='error'>You used an intvalid e-mail!</p>";
			exit();				
			}
			elseif($signupCheck=='success'){
			echo "<p class='success'>You have signed up!</p>";
			exit();				
			}
		}
	?>