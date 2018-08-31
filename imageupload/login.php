<?php 
include_once "dbh.php";
session_start();
$uid=$_POST['uid'];
$pwd=$_POST['pwd'];
if(isset($_POST['submitLogin'])){
	if (empty($uid)||empty($pwd)) {
		header("Location:index.php?login=empty");
		exit();	
	}else{
		$sql="SELECT * FROM user where username='$uid'";
		$result=mysqli_query($conn,$sql);
		if (mysqli_num_rows($result)<1) {
			header("Location:index.php?login=nouser");
			exit();
		}else{
			while ($row=mysqli_fetch_assoc($result)) {
				if ($row['password']==$pwd) {
					$_SESSION['id']=$row['id'];
					$_SESSION['uid']=$uid;
				}else{
					header("Location:index.php");
					exit();
				}
			}
		}
		
		header("location:index.php");
	}
}

 ?>