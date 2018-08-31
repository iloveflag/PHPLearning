<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact form tutorial</title>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<main>
		<p>SEND E-MAIL</p>
	</main>
	<form class="contact-from" action="contactfrom.php" method="post">
		<input type="text" name="name" placeholder="Full name">
		<input type="text" name="mail" placeholder="Your e-mail">
		<input type="text" name="subject" placeholder="Subject">
		<textarea name="message" placeholder="Message"></textarea>
		<button type="submit" name="submit">SEND MAIL</button>
	</form>
</body>
</html>