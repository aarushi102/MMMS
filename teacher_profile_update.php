<?php
session_start();
if(isset($_POST['submit'])) {
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms.sql");
	$query = "SELECT * FROM subject, teachers"; 

	$query_run = mysqli_query($connection,$query);

	//echo '<pre>';print_r($_POST);die;

while ($row = mysqli_fetch_assoc($query_run)){
		$sql= "UPDATE subject SET name=teachers.name FROM teachers WHERE teachers.sem_no = subject.sem_no";
		if(mysqli_query($connection, $sql)) {
			echo "Record was updated successfully.";
		} else {
		    echo "ERROR: Could not able to execute $sql. "; 
		                            
		} 

    }
	/* header('location:select.php');*/
	/*if ($connection->query($query) === TRUE) {
		echo "New record created successfully";
	  } else {
		echo "Error: " . $query . "<br>" . $connection->error;
		die;*/ 
      }

?>
<script type="text/javascript">
	alert("Details edited successfully.");
	window.location.href = "admin_dashboard.php";
</script>

	<!-- if ($connection->query($query) === TRUE) {
		echo "New record created successfully";
	  } else {
		echo "Error: " . $query . "<br>" . $connection->error;
		die; -->