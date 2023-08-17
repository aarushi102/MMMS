<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms.sql");
	$query = " UPDATE `after_be` SET `company`='$_POST[company]',`package`='$_POST[package]',`gre_score`='$_POST[gre_score]',`tofel_score`='$_POST[tofel_score]',`cat_score`='$_POST[cat_score]',`gate_score`='$_POST[gate_score]',`university`='$_POST[university]',`country`='$_POST[country]',`placement`='$_POST[placement]' WHERE r_no = '$_POST[r_no]'";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Details edited successfully.");
	window.location.href = "Mentor_Dashboard.php";
</script>