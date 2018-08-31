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
 		$data='user_uid1';
 		//Creat a tempalte
 		$sql="SELECT * from users where user_uid=?;";
 		//Creat a prepared statement
 		$stmt=mysqli_stmt_init($conn);
 		//Prepare the prepared statement
 		if(!mysqli_stmt_prepare($stmt,$sql)){
 			echo "SQL statement failed";
 		}else{
 			//Bind parameters to the placeholder
 			mysqli_stmt_bind_param($stmt,'s',$data);
 			//Run parameters inside database
 			mysqli_stmt_execute($stmt);
 			$result=mysqli_stmt_get_result($stmt);
			while($row=mysqli_fetch_assoc($result)){
				echo $row['user_first'].'<br>';
			}
 		}


 	 ?>
 </body>
 </html>