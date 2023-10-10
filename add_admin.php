<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms");
	$query = "insert into login values('$_POST[name]','$_POST[email]','$_POST[password]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Admin added successfully.");
	window.location.href = "admin_login.php";
</script>
