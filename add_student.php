<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms");
	$query = "insert into students values($_POST[roll_no],'$_POST[name]','$_POST[department]','$_POST[mobile]','$_POST[email]','$_POST[password]','$_POST[course]','$_POST[cgpa]','$_POST[current_semester]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Student added successfully.");
	window.location.href = "admin_dashboard.php";
</script>
