<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms.sql");
	$query = "UPDATE `activities` SET `sem1_prof_soc`='$_GET[sem1_prof_soc]',`sem1_internship`='$_GET[sem1_internship]',`sem1_pap_publ`='$_GET[sem1_pap_publ]',`sem2_prof_soc`='$_GET[sem2_prof_soc]',`sem2_internship`='$_GET[sem2_internship]',`sem2_pap_publ`='$_GET[sem2_pap_publ]',`sem3_prof_soc`='$_GET[sem3_prof_soc]',`sem3_internship`='$_GET[sem3_internship]',`sem3_pap_publ`='$_GET[sem3_pap_publ]',`sem4_prof_soc`='$_GET[sem4_prof_soc]',`sem4_internship`='$_GET[sem4_internship]',`sem4_pap_publ`='$_GET[sem4_pap_publ]',`sem5_prof_soc`='$_GET[sem5_prof_soc]',`sem5_internship`='$_GET[sem5_internship]',`sem5_pap_publ`='$_GET[sem5_pap_publ]',`sem6_prof_soc`='$_GET[sem6_prof_soc]',`sem6_internship`='$_GET[sem6_internship]',`sem6_pap_publ`='$_GET[sem6_pap_publ]',`sem7_prof_soc`='$_GET[sem7_prof_soc]',`sem7_internship`='$_GET[sem7_internship]',`sem7_pap_publ`='$_GET[sem7_pap_publ]',`sem8_prof_soc`='$_GET[sem8_prof_soc]',`sem8_internship`='$_GET[sem8_internship]',`sem8_pap_publ`='$_GET[sem8_pap_publ]'  WHERE r_no = '$_GET[r_no]'";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Details edited successfully.");
	window.location.href = "Mentor_Dashboard.php";
</script>