<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="GET">
		<input type="test" name="user_uid" placeholder="user_uid">
		<input type="password" name="user_pwd" placeholder="user_pwd">
		<button type="submit" name="submit" value="submit">Login</button>
	</form>
	<?php 
		$dbServername='localhost';
		$dbUsername='root';
		$dbPassword='';
		$dbName='loginsystem';
		$conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
		$user_uid=$_GET['user_uid'];
		$user_pwd=$_GET['user_pwd'];
		$submit=$_GET['submit'];
		echo 'you input username is:'.$user_uid.'<br>you input password is:'.$user_pwd.'<br>';
		if(isset($submit)){
			$sql="select * from users where user_uid=?;";
			$stmt=mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt,$sql)){
				echo "SQL statment failed!";
			}else{
				mysqli_stmt_bind_param($stmt,'s',$user_uid);
				mysqli_stmt_execute($stmt);
				$result=mysqli_stmt_get_result($stmt);
				$resultCheck=mysqli_num_rows($result);
				if ($resultCheck>0){
					while($row=mysqli_fetch_assoc($result)){
						$user_pwd_correct=$row['user_pwd'];
						echo 'correct password is:'.$user_pwd_correct.'<br>';
						if($user_pwd_correct==$user_pwd){
							echo "Login success!";
							}
							else{
								echo "Login failed!";
							}
					}
				}
			}

		}
	 ?>
</body>
</html>
