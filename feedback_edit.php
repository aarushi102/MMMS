<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms.sql");
	$query = "UPDATE `feedback` SET `Semester1`='$_GET[Semester1]',`Semester2`='$_GET[Semester2]',`Semester3`='$_GET[Semester3]',`Semester4`='$_GET[Semester4]',`Semester5`='$_GET[Semester5]',`Semester6`='$_GET[Semester6]',`Semester7`='$_GET[Semester7]',`Semester8`='$_GET[Semester8]' WHERE r_no = '$_GET[r_no]'";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Details edited successfully.");
	window.location.href = "Mentor_Dashboard.php";
</script>