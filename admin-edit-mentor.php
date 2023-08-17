<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms.sql");
	$query = "UPDATE `teachers` SET `name`='$_POST[name]',`mobile`='$_POST[mobile]',`courses`='$_POST[courses]',`email`='$_POST[email]',`password`='$_POST[password]',`designation`='$_POST[designation]',`qualification`='$_POST[qualification]' where t_id = '$_POST[t_id]'";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Details edited successfully.");
	window.location.href = "admin-dashboard-trial.php";
</script>