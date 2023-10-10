<!DOCTYPE html>
<html>
<head>
	<title>Student Dashboard</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="student_dash_styles.css">
	
	
	<?php
		session_start();
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms");
	?>
</head>
<body>
	<div id="header"><br>
		<center style="font-style: oblique;">Student Zone &nbsp;&nbsp;&nbsp;
		<a href="logout.php">Logout</a>
		</center>
	</div>
	<span id="top_span"><marquee> STAY HOME STAY SAFE 😇</marquee></span>
	<div id="right_corner"><br>
		<form action ="student_profile.php" method="post">
			<tr>
				<td>
					<input type="submit" name="profile" value="profile">
				</td>
			</tr>
		</form>
	</div>
	<div id="left_side">
		<br><br><br>
		<form action="" method="post">
		
			<table class="test">
				<tr>
					<td>
						<input type="submit" name="edit_detail" value="Edit Detail"><br><br>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="show_detail" value="Show Detail"><br><br>
					</td>
				</tr>
			</table>
		</form>
	</div>
	<div id="right_side"><br><br>
		<div id="demo">
			<?php
			if(isset($_POST['show_detail']))
			{
				$query = "select * from students where roll_no = '$_SESSION[roll_no]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
			?>
			<center>
			<div id="center"><br>	
							<center><h4><b>Student  details</b></h4><br><br></center>
			</div>			
				<table>
					<tr>
						<td>
							<b>Roll No:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['roll_no']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Name:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['name']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Department:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['department']?>" disabled>
						</td>
					</tr>
	
					<tr>
						<td>
							<b>Mobile:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['mobile']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Email:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['email']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Password:</b>
						</td> 
						<td>
							<input type="password" value="<?php echo $row['password']?>" disabled>
						</td>
					</tr>

					<tr>
						<td>
							<b>Course:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['course']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>CGPA:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['cgpa']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Current Semester:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['current_semester']?>" disabled>
						</td>
					</tr>

				</table>
			</center>
			<?php
				}	
			}
			?>

			<?php
			if(isset($_POST['edit_detail']))
			{
				$query = "select * from students where roll_no= '$_SESSION[roll_no]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?>
					<form action="edit_student.php" method="post">
						<center>
							<div id="center"><br>
									<center><h4><b>Edit Student details</b></h4><br><br></center>
							</div>
						<table>
						<tr>
							<td>
								<b>Roll No:</b>
							</td> 
							<td>
								<input type="text" name="roll_no" value="<?php echo $row['roll_no']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Name:</b>
							</td> 
							<td>
								<input type="text" name="name" value="<?php echo $row['name']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Department:</b>
							</td> 
							<td>
								<input type="text" name="department" value="<?php echo $row['department']?>">
							</td>
						</tr>
						
						<tr>
							<td>
								<b>Mobile:</b>
							</td> 
							<td>
								<input type="text" name="mobile" value="<?php echo $row['mobile']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Email:</b>
							</td> 
							<td>
								<input type="text" name="email" value="<?php echo $row['email']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Password:</b>
							</td> 
							<td>
								<input type="password" name="password" value="<?php echo $row['password']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Course:</b>
							</td> 
							<td>
								<input type="text" name="course" value="<?php echo $row['course']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>CGPA:</b>
							</td> 
							<td>
								<input type="text" name="cgpa" value="<?php echo $row['cgpa']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Current Semester:</b>
							</td> 
							<td>
								<input type="text" name="current_semester" value="<?php echo $row['current_semester']?>">
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<input type="submit" value="Save">
							</td>
						</tr>
					</table>
				</center>
				</div>
					</form>
					<?php
				}
			}
			?>
		</div>
	</div>
</body>
</html>