<!DOCTYPE html>
<html>

<head>
	<title>Student Profile</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<style type="text/css">
		#header{
			height: 80%;
			width: 100%;
			top: 10%;
			background-color: white;
			position: fixed;
			color: black;
			font-size: 50px;
	<?php
		session_start();
		$name = "";
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms");
	?>
</style>
</head>
<body>
	<div id="header"><br>
	<center><b>My Profile</b><br><br>
	<table>
	<b>Teacher Id: </b><?php echo $_SESSION['t_id'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<br>
	<b>Name:    </b><?php echo $_SESSION['name'];?> &nbsp;<br>

	<b>Courses:    </b><?php echo $_SESSION['courses'];?> &nbsp;<br>

	<b>Email:    </b><?php echo $_SESSION['email'];?> &nbsp;<br>

	</table>

		<a href="faculty_dashboard.php">Back to home page</a>
</div>
</body>
</html>