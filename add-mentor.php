<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms.sql");
	$query= "INSERT INTO `teachers`(`s_no`, `t_id`, `name`, `mobile`, `courses`, `email`, `password`, `designation`, `qualification`, `batch_no`) VALUES (' ' , '$_POST[t_id]', '$_POST[name]', '$_POST[mobile]', '$_POST[courses]', '$_POST[email]', '$_POST[password]', '$_POST[designation]', '$_POST[qualification]', '$_POST[batch_no]')";
	$query_run = mysqli_query($connection, $query);
?>
<script type="text/javascript">
	alert("Mentor added successfully.");
	window.location.href = "admin-dashboard-trial.php";
</script>
S