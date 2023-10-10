<!DOCTYPE html>
<html>
<head>
	<title>Student Login</title>
	<link rel="icon" type="text/css" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="student_styles.css">	

</head>
<body>
	<center><br><br>
		<h3>Student Login Page</h3><br>
		<form action="" method="post">
			Roll No: <input type="text" name="roll_no" required><br><br>
			Password: <input type="password" name="password" required><br><br>
			<input type="submit" name="submit" value="LogIn">
		</form><br>
		<?php
			session_start();
			if(isset($_POST['submit']))
			{
				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,"sms");
				$query = "select * from students where roll_no = '$_POST[roll_no]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					if($row['roll_no'] == $_POST['roll_no'])
					{
						if($row['password'] == $_POST['password'])
						{
							$_SESSION['name'] =  $row['name'];
							$_SESSION['roll_no'] =  $row['roll_no'];
							$_SESSION['email']=$row['email'];
							$_SESSION['course']=$row['course'];
							header("Location: student_dashboard.php");
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