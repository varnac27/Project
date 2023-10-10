<!DOCTYPE html>
<html>
<head>
	<title>Student Portal</title>
	<link rel="icon" type="text/css" href="favicon.ico">
  	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body style="background-color: white">
	<center>
	<h3 style="font-size: 30px">Sign In / Sign Up</h3><br>
	<br><br>
	<form action="" method="POST" style="font-size: 20px">
		<input  type="submit" name="sign_in" value="Sign In" required><br><br>
		<input   type="submit" name="sign_up" value="Sign Up" required><br><br>
	</form>

	<?php

		if(isset($_POST['sign_in'])){
			header("Location: admin_login.php");
		}
		if(isset($_POST['sign_up'])){
			header("Location: register_login.php");
		}
	?>
	</body>
</html>
	</center>