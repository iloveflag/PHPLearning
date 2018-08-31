<?php 
echo "123456<br>";
$x='123456';
$y=password_hash($x,PASSWORD_DEFAULT);
echo $y."<br>";
if(password_verify($x,$y)){
	echo "success";
}

 ?>