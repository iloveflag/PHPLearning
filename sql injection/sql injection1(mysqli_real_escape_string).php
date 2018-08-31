
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
$user_uid=mysqli_real_escape_string($conn,$_GET['user_uid']);
$user_pwd=mysqli_real_escape_string($conn,$_GET['user_pwd']);
$mysql="select * from users where user_uid='$user_uid' and user_pwd='$user_pwd';";
$result=mysqli_query($conn,$mysql);
while($row=mysqli_fetch_assoc($result)){
	echo $row['user_first'].'<br>';
}
}
 ?>
