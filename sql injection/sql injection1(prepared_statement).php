
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="get">
		<p>mysql:</p>
		<input type="test" name="user_uid" placeholder="user_uid">
		<input type="test" name="user_pwd" placeholder="user_pwd">
		<button type="submit"name='submit'value='submit'>submit</button>
	</form>
</body>
</html>
<?php 
$dbServername='localhost';
$dbUsername='root';
$dbPassword='';
$dbName='loginsystem';
if(isset($_GET['submit'])){
	$conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
	$user_uid=$_GET['user_uid'];
	$user_pwd=$_GET['user_pwd'];
	$mysql="SELECT * from users where user_uid=? and user_pwd=?;";
	$stmt=mysqli_stmt_init($conn);
	if(!(mysqli_stmt_prepare($stmt,$mysql))){
		echo "SQL statment failed!";
	}else{
		mysqli_stmt_bind_param($stmt,'ss',$user_uid,$user_pwd);
		mysqli_stmt_execute($stmt);
		$result=$result=mysqli_stmt_get_result($stmt);
		while($row=mysqli_fetch_assoc($result)){
			echo $row['user_first'].'<br>';
		}
	}
}

 ?>
 


