<!DOCTYPE html>
<html>
<head>
<title>Report Details</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/admin-dashboard-trial.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/report_detail.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	
</head>
<body>
	<center><br><br>
	<div id="header"><h1> Mentee's Report Details </h1></div>
	
	<form action="" method="POST">
		<div id="small_container">
		<div id ="button">
        
		<input type="submit" name="attendance" value="Student's Attendance" required></div></div>
		<div id="small_container">
        <div id ="button">
		<input type="submit" name="activities" value="Co-Curricular Activities" required></div></div>
		<div id="small_container">
        <div id ="button">
        <input type="submit" name="feedback" value="Mentor's Feedback" required> </div></div>
	</form>
	<?php
    
        if(isset($_POST['attendance'])){
			header("Location: attendance.php");
		}

        if(isset($_POST['activities'])){
			header("Location: activities_seen_by_students.php");
		}

        if(isset($_POST['feedback'])){
			header("Location: feedback_recieved_student.php");
		}
		
	?>
	</center>
</body>
</html>