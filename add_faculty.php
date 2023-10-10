<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms");
	$query = "insert into faculty values('$_POST[t_id]','$_POST[name]','$_POST[mobile]','$_POST[courses]','$_POST[email]','$_POST[password]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Faculty added successfully.");
	window.location.href = "admin_dashboard.php";
</script>
