<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms.sql");
	$query = " UPDATE `extra_curricular_activities` SET `sem1_sports`='$_POST[sem1_sports]',`sem1_nss`='$_POST[sem1_nss]',`sem1_awards`='$_POST[sem1_awards]',`sem2_sports`='$_POST[sem2_sports]',`sem2_nss`='$_POST[sem2_nss]',`sem2_awards`='$_POST[sem2_awards]',`sem3_sports`='$_POST[sem3_sports]',`sem3_nss`='$_POST[sem3_nss]',`sem3_awards`='$_POST[sem3_awards]',`sem4_sports`='$_POST[sem4_sports]',`sem4_nss`='$_POST[sem4_nss]',`sem4_awards`='$_POST[sem4_awards]',`sem5_sports`='$_POST[sem5_sports]',`sem5_nss`='$_POST[sem5_nss]',`sem5_awards`='$_POST[sem5_awards]',`sem6_sports`='$_POST[sem6_sports]',`sem6_nss`='$_POST[sem6_nss]',`sem6_awards`='$_POST[sem6_awards]',`sem7_sports`='$_POST[sem7_sports]',`sem7_nss`='$_POST[sem7_nss]',`sem7_awards`='$_POST[sem7_awards]',`sem8_sports`='$_POST[sem8_sports]',`sem8_nss`='$_POST[sem8_nss]',`sem8_awards`='$_POST[sem8_awards]' WHERE r_no = '$_POST[r_no]'";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Details edited successfully.");
	window.location.href = "Mentor_Dashboard.php";
</script>