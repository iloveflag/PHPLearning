 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<form method="POST">
 		<input type="text" name="first" placeholder="Firstname">
 		<br>
 		<input type="text" name="last" placeholder="Lastname">
 		<br>
 		<input type="text" name="email" placeholder="E-mail">
 		<br>
 		<input type="text" name="uid" placeholder="Username">
 		<br>
 		<input type="password" name="pwd" placeholder="Password">
 		<br>
 		<button type="submit" name="submit">Sign up</button>
 	</form>
 	<?php  
		 include_once 'includes/dbh.inc.php';
		 $first = $_POST['first'];
		 $last = $_POST['last'];
		 $email = $_POST['email'];
		 $uid = $_POST['uid'];
		 $pwd = $_POST['pwd'];
		 $sql = "INSERT INTO  users(user_first,user_last,user_email,user_uid,user_pwd)VALUES(?,?,?,?,?);";
		$stmt=mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt,$sql)){
			echo 'SQL statment failed';
		}
		else{
			mysqli_stmt_bind_param($stmt,'sssss',$first,$last,$email,$uid,$pwd);
			mysqli_stmt_execute($stmt);

		}
?>
 </body>
 </html>