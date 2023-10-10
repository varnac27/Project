<!DOCTYPE html>
<html>
<head>
	<title>Student Portal</title>
	<link rel="icon" type="text/css" href="favicon.ico">
  	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body style="background-color: white">
	<center>
	<h3 style="font-size: 30px">LOGIN TO CONTINUE</h3><br>
	<br><br>
	<form action="" method="POST" style="font-size: 20px">
		<input  type="submit" name="admin_login" value="Admin Login" required><br><br>
		<input   type="submit" name="student_login" value="Student Login" required><br><br>
		<input type="submit" name="faculty_login" value="Faculty login" required><br><br>
		
	</form>
	<?php
		if(isset($_POST['admin_login'])){
			header("Location: sign.php");
		}
		if(isset($_POST['student_login'])){
			header("Location: student_login.php");
		}

		if(isset($_POST['faculty_login'])){
			header("Location: faculty_login.php");
		}
	?>
	</center>
	<footer>
	<center><br><br>
		<p>&#x21dd; with 💙 By varna & aarthi</p>
	</center>
</footer>
</body>
</html>