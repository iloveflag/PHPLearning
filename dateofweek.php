<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		p{
			text-align: center;
			font-size: 50px;
			font-family: fantasy;
			margin-top:38vh;
		}
	</style>
</head>
<body>
	<?php  
		$dateofweek=date('w');
		switch ($dateofweek) {
			case 1:
				echo'<p>This is Monday!</p>';
				break;
			case 2:
				echo 'This is Tuesday!';
				break;
			case 3:
				echo 'This is Wednesday!';
				break;
			case 4:
				echo 'This is Thursday!';
				break;
			case 5:
				echo 'This is Monday!';
				break;
			case 6:
				echo 'This is Saturday!';
				break;
			case 0:
				echo 'This is Sunday!';
		}
	?>
</body>
</html>