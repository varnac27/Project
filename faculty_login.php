<!DOCTYPE html>
<html>
<head>
	<title>Faculty Login</title>
	<link rel="icon" type="text/css" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="student_styles.css">	

</head>
<body>
	<center><br><br>
		<h3>Faculty Login Page</h3><br>
		<form action="" method="post">
			Teacher id: <input type="text" name="t_id" required><br><br>
			Password: <input type="password" name="password" required><br><br>
			<input type="submit" name="submit" value="LogIn">
		</form><br>

		<?php
			session_start();
			if(isset($_POST['submit']))
			{
				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,"sms");
				$query = "select * from faculty where t_id= '$_POST[t_id]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					if($row['t_id'] == $_POST['t_id'])
					{
						if($row['password'] == $_POST['password'])
						{
							$_SESSION['name'] =  $row['name'];
							$_SESSION['t_id'] =  $row['t_id'];
							$_SESSION['email']=$row['email'];
							$_SESSION['courses']=$row['courses'];
							header("Location: faculty_dashboard.php");
						}
						else{
							?>
							<span>Wrong Password !!</span>
							<?php
						}
					}
					else
					{
						?>
						<span>Wrong UserName !!</span>
						<?php
					}
				}
			}
		?>
	</center>
</body>
</html>