<!DOCTYPE html>
<html>
<head>
	<title>Mentee's Details</title>
	 <script rel="stylesheet" type="text/css" href="login.css"></script> 
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/my_report.css"> 
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	
</head>
<body>
	<center><br><br>
	<h1>Student's Mentoring </h1><br>
	<div id ="login-form">
	<form action="" method="POST">
		<input type="submit" name="student_mentoring_form" value="Student's personal details" required>
        <br>

		<input type="submit" name="attendance" value="Student's Attendance" required>
        <br>
		
		<input type="submit" name="activities" value="Co-Curricular Activities" required>
        <br>
        
        <input type="submit" name="feedback" value="Mentor's Feedback" required> 
        <br>
        
        <input type="submit" name="extra_curricular_activities" value="Extra Curricular Activities" required>
        <br>
        
        <input type="submit" name="after_be" value="After BE" required>
        <br>
        
        <input type="submit" name="academic_performance" value="Academic performance" required>
	</form></div>
	<?php
		if(isset($_POST['student_mentoring_form'])){
			header("Location: mentoringform.php?r_no=".$_GET['r_no']."");
		}

        if(isset($_POST['attendance'])){
			header("Location: attendance_received_by_student.php?r_no=".$_GET['r_no']."");
		}

        if(isset($_POST['activities'])){
			header("Location: activities_seen_by_students.php?r_no=".$_GET['r_no']."");
		}

        if(isset($_POST['feedback'])){
			header("Location: feedback_recieved_student.php?r_no=".$_GET['r_no']."");
		}
		
		if(isset($_POST['extra_curricular_activities'])){
			header("Location: extra_curricular_received_student.php?r_no=".$_GET['r_no']."");
		}

		if(isset($_POST['after_be'])){
			header("Location: after_be_received_student.php?r_no=".$_GET['r_no']."");
		}

		if(isset($_POST['academic_performance'])){
			header("Location: academic_performance_received_student.php?r_no=".$_GET['r_no']."");
		}
	?>
	</center>
</body>
</html>