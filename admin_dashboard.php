<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="icon" type="text/css" href="favicon.ico">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="admin_styles.css">
	<?php
		session_start();
		$name = "";
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms");
	?>
</head>
<body>
	<div id="header"><br>
		<center style="font-style: oblique;">Student Portal - Admin Zone &nbsp;&nbsp;&nbsp;
		<a href="logout.php">Logout</a>
		</center>
	</div>
	<span id="top_span"><marquee> STAY HOME STAY SAFE 😇</marquee></span>

	<div id="right_corner"><br>
		<form action ="admin_profile.php" method="post">
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
						<input type="submit" name="search_student" value="Search Student"><br>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="edit_student" value="Edit Student"><br>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="add_new_student" value="Add New Student"><br>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="delete_student" value="Delete Student"><br>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="show teacher" value="Show faculty"><br>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="add_faculty" value="Add faculty"><br>
					</td>
				</tr>

			</table>
		</form>
	</div>
	<div id="right_side"><br><br>
		<div id="demo">
		<!-- #Code for search student---Start-->
			<?php
				if(isset($_POST['search_student']))
				{
					?>
					
					<center>
						<div id="demo1">
					<form action="" method="post">
					<center>&nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="roll_no"></center> <br>
					<input type="submit" name="search_by_roll_no_for_search" value="Search">
					</form><br><br>

					</center>
				</div>
					<?php
				}
				if(isset($_POST['search_by_roll_no_for_search']))
				{
					$query = "select * from students where roll_no = '$_POST[roll_no]'";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?>
						<div id="center"><br>
							<center><h4><b>Student details</b></h4><br><br></center>
						</div>
						<center>
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
									<b>Course Name:</b>
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
		<!-- #Code for edit student details---Start-->
		<?php
			if(isset($_POST['edit_student']))
			{
				?>
				<center>
					<div id="demo1">
				<form action="" method="post">
				<center>&nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="roll_no"></center> <br>
				<input type="submit" name="search_by_roll_no_for_edit" value="Search">
				</form><br><br>
				
				</center>
			</div>
				<?php
			}
			if(isset($_POST['search_by_roll_no_for_edit']))
			{
				$query = "select * from students where roll_no = $_POST[roll_no]";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?>
					<div id="center">
						<center><h4><b>Student's details</b></h4><br><br></center>
					</div>
					<center>
					<form action="admin_edit_student.php" method="post">
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


						</tr><br>
						<tr>
							<td></td>
							<td>
								<input type="submit" name="edit" value="Save">
							</td>
						</tr>
					</table>
				</center>
					</form>
					<?php
				}
			}
		?>
		<!-- #Code for Delete student details---Start-->
		<?php
			if(isset($_POST['delete_student']))
			{
				?>
				<center>
					<div id="demo1">
				<form action="delete_student.php" method="post">
				<center>&nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="roll_no"></center> <br>
				<input type="submit" name="search_by_roll_no_for_delete" value="Delete">
				</form><br><br>
				</center>
			</div>
				<?php
			}
			?>

			<?php 
				if(isset($_POST['add_new_student'])){
					?>
					<div id="center">
						<center><h4>Fill the given details</h4><br></center>
					</div>
					<center>
					<form action="add_student.php" method="post">
						<table>
						<tr>
							<td>
								<b>Roll No:</b>
							</td> 
							<td>
								<input type="text" name="roll_no" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Name:</b>
							</td> 
							<td>
								<input type="text" name="name" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Department:</b>
							</td> 
							<td>
								<input type="text" name="department" required>
							</td>
						</tr>
						
						<tr>
							<td>
								<b>Mobile:</b>
							</td> 
							<td>
								<input type="text" name="mobile" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Email:</b>
							</td> 
							<td>
								<input type="text" name="email" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Password:</b>
							</td> 
							<td>
								<input type="password" name="password" required>
							</td>
						</tr>
						
						<tr>
							<td>
								<b>Course:</b>
							</td> 
							<td>
								<input type="text" name="course" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>CGPA:</b>
							</td> 
							<td>
								<input type="text" name="cgpa" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Current Semester:</b>
							</td> 
							<td>
								<input type="text" name="current_semester" required>
							</td>
						</tr>


						<tr>
							<td></td>
							<td><br><input type="submit" name="add" value="Add Student"></td>
						</tr>
					</table>
				</center>
					</form>
					<?php
				}
			?>
			<?php
				if(isset($_POST['show_teacher']))
				{
					?>
					<center>
						<div id="center"><br>
							<center><h5><b>Faculty Details</b></h5>
						<table style="width:100%" >

							<tr>
								<th id="td"><b>ID</b></th>
								<th id="td"><b>Name</b></th>
								<th id="td"><b>Mobile</b></th>
								<th id="td"><b>Courses</b></th>
								<th id="td"><b>Email</b></th>
							</tr>
					</table>
					</center>
				</div>
					<?php
					$query = "select * from faculty";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?>
						<center>
						<table style="width:100%" >

						
							<tr>
								<td id="td"><?php echo $row['t_id']?></td>
								<td id="td"><?php echo $row['name']?></td>
								<td id="td"><?php echo $row['mobile']?></td>
								<td id="td"><?php echo $row['courses']?></td>
								<td id="td"><?php echo $row['email']?></td>
								
							</tr>
						</table>
						</center>
						<?php
					}
				}
			?>
			<?php 
				if(isset($_POST['add_faculty'])){
					?>
					<div id="center">
						<center><h4>Fill faculty details</h4><br></center>
					</div>
					<center>
					<form action="add_faculty.php" method="post">
						<table>
						<tr>
							<td>
								<b>Teacher Id:</b>
							</td> 
							<td>
								<input type="text" name="t_id" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Name:</b>
							</td> 
							<td>
								<input type="text" name="name" required>
							</td>
						</tr>
						
						<tr>
							<td>
								<b>Mobile:</b>
							</td> 
							<td>
								<input type="text" name="mobile" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Courses:</b>
							</td> 
							<td>
								<input type="text" name="courses" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Email:</b>
							</td> 
							<td>
								<input type="text" name="email" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Password:</b>
							</td> 
							<td>
								<input type="password" name="password" required>
							</td>
						</tr>
						
						<tr>
							<td></td>
							<td><br><input type="submit" name="add" value="Add faculty"></td>
						</tr>
					</table>
				</center>
					</form>
					<?php
				}
			?>
		</div>


</body>
</html>