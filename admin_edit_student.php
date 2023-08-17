<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms.sql");
	$query= "UPDATE student_mentoring_form SET `name`='$_POST[name]',`dob`='$_POST[dob]',`c_add`='$_POST[c_add]',`p_add`='$_POST[p_add]',`m_no`='$_POST[m_no]',`e_id`='$_POST[e_id]',`f_name`='$_POST[f_name]',`f_no`='$_POST[f_no]',`f_id`='$_POST[f_id]',`m_name`='$_POST[m_name]',`s_mentor`='$_POST[s_mentor]',`m_mob`='$_POST[m_mob]',`men_id`='$_POST[men_id]',`batch_no`='$_POST[batch_no]',`S_no`='$_POST[S_no]',`mother_id`='$_POST[mother_id]',`men_mob_no`='$_POST[men_mob_no]',`gender`='$_POST[gender]' WHERE r_no = '$_POST[r_no]'";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Details edited successfully.");
	window.location.href = "admin-dashboard-trial.php";
</script>
