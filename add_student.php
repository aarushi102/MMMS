<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms.sql");
//	$query = "INSERT INTO 'student_mentoring_form' ('$_POST[name]','$_POST[r_no]','$_POST[dob]', '$_POST[gender]','$_POST[c_add]','$_POST[p_add]','$_POST[m_no]', '$_POST[e_id]', '$_POST[fname]', '$_POST[f_no]', '$_POST[f_id]', '$_POST[m_name]', '$_POST[m_mob]', '$_POST[mother_id]', '$_POST[s_mentor]', '$_POST[men_mob_no]', '$_POST[men_id]')";
$query= "INSERT INTO `student_mentoring_form`(`name`, `r_no`, `dob`, `c_add`, `p_add`, `m_no`, `e_id`, `f_name`, `f_no`, `f_id`, `m_name`, `s_mentor`, `m_mob`, `men_id`, `batch_no`, `S_no`, `mother_id`, `men_mob_no`, `gender`) VALUES ('$_POST[name]', '$_POST[r_no]', '$_POST[dob]', '$_POST[c_add]', '$_POST[p_add]', '$_POST[m_no]', '$_POST[e_id]', '$_POST[fname]', '$_POST[f_no]', '$_POST[f_id]', '$_POST[m_name]', '$_POST[s_mentor]', '$_POST[m_mob]', '$_POST[men_id]', '$_POST[batch_no]', '$_POST[S_no]', '$_POST[mother_id]', '$_POST[men_mob_no]', '$_POST[gender]')";
$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Mentee added successfully.");
	window.location.href = "admin-dashboard-trial.php";
</script>

	<!-- if ($connection->query($query) === TRUE) {
		echo "New record created successfully";
	  } else {
		echo "Error: " . $query . "<br>" . $connection->error;
		die;  
	} -->