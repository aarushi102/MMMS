<script type="text/javascript">
	if(confirm("Are you sure want to delete ?"))
	{
		document.write("<?php 
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms.sql");
		$query = "delete from student_mentoring_form where r_no = $_POST[r_no]";
		$query_run = mysqli_query($connection,$query);
		?>");
	 	window.location.href = "admin-dashboard-trial.php";
	}
	else
	{
		
		window.location.href = "admin-dashboard-trial.php";
	}
</script>
