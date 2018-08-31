<?php 
	session_start();
	include_once 'dbh.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
	//图片加载
	$sql="SELECT * FROM user";
	$result=mysqli_query($conn,$sql);
	if (mysqli_num_rows($result)>0) {
		while ($row=mysqli_fetch_assoc($result)) {
			$id=$row['id'];
			$sqlImg="SELECT * FROM profileimg WHERE userid='$id'";
			$resultImg=mysqli_query($conn,$sqlImg);
			while ($rowImg=mysqli_fetch_assoc($resultImg)) {
				echo "<div class='user-container'>";
				if ($rowImg['status']==0) {
					$filename="uploads/profile".$id."*";
					$fileinfo=glob($filename);
					$fileext=explode(".",$fileinfo[0]);
					$fileactualext=$fileext[1];

					echo "<img src='uploads/profile".$id.".".$fileactualext."?'".mt_rand().">"; 
				}else{
					echo "<img src='uploads/profiledefault.jpg'>";
				}
				echo "<p>".$row['username']."</p>";
				echo "</div>";
			}
		}
	}else{
		echo "There are no users yet!";
	}

	//session判断是否登录,登录方可上传,否则进行注册
	if (isset($_SESSION['id'])) {
		echo "You are logged in as user:".$_SESSION['uid'];
		echo "	<form action='upload.php' method='POST' enctype='multipart/form-data'>
		<input type='file' name='file'>
		<button type='submit' name='submit'>UPLOAD</button>
		</form><br>";
		echo "	<form action='deleteprofile.php' method='POST' enctype='multipart/form-data'>
		<button type='submit' name='submit'>Delete profile image</button>
		</form>";
		echo "	<p>Logout:</p>
				<form action='logout.php' method='POST'>
					<button type='submit' name='submitLogout'>Logout</button>
				</form>";
	}else{
		echo "You are not logged in!";
		echo "	<form action='Signup.php'method='POST'> 
		<input type='text' name='first' placeholder='First name'>
		<input type='text' name='last' placeholder='Last name'>
		<input type='text' name='uid' placeholder='Username'>
		<input type='password' name='pwd' placeholder='Password'>
		<button type='submit' name='submitSignup'>Signup</button>
		</form>";
		echo "	<p>Login:</p>
			<form action='login.php' method='POST'>
				<input type='text' name='uid' placeholder='Username'>
				<input type='password' name='pwd' placeholder='Password'>
				<button type='submit' name='submitLogin'>Login</button>
			</form>";
		if(isset($_GET['login'])){
			$loginCheck=$_GET['login'];
			if ($loginCheck=="nouser") {
				echo "没有此用户!";
				exit();
			}elseif($loginCheck=='empty'){
				echo "请输入用户名和密码";
			}elseif($loginCheck=='errorpassword'){
				echo "密码错误";
			}
		}
	}
	 ?>



<!-- payload:uid='union select 1,2,3,4,5 order by 1#&pwd=5 -->
</body>
</html>
