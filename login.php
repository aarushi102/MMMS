<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<!-- <script rel="stylesheet" type="text/css" href="login.css"></script> -->
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/login.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	
</head>
<body>
	<center><br><br>
	<h1>Mentor-Mentee Management System</h1><br>
	<div id ="login-form">
	<form action="" method="POST">
		<input type="submit" name="admin_login" value="Admin Login" required>
		<input type="submit" name="Mentee_login" value="Mentee Login" required>
		<input type="submit" name="Mentor_login" value="Mentor Login" required>
	</form></div>
	<?php
		if(isset($_POST['admin_login'])){
			header("Location: admin_login.php");
		}
		if(isset($_POST['Mentee_login'])){
			header("Location: student_login.php");
		}
		 if(isset($_POST['Mentor_login'])){
			header("Location: Mentor_login.php");
		}
	?>
	</center>
</body>
</html>