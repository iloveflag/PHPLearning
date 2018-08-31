<?php 
	if (isset($_POST['submit'])) {
		$name=$_POST['name'];
		$subject=$_POST['subject'];
		$mailFrom=$_POST['mail'];
		$message=$_POST['message'];

		$mailTo="zmbxzrq@outlook.com";
		$headers="From:".$mailFrom;
		$txt="You have recevied an e-mail from".$name.".\n\n".$message;
		if(mail($mailTo,$subject,$txt,$headers)){
			echo "send ok";
		}else{
			echo "send falied";
		}
	}
 ?>
