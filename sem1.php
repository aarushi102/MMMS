<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SEMESTER I RESULT</title>
	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>

	<?php
		session_start();
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms.sql");
	?>
</head>
<body>
	<div id="header"><br>
		<center>Mentor-Mentee Management System &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email: <?php echo $_SESSION['email'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:<?php echo $_SESSION['name'];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a id="logout" href="logout.php">Logout</a>
		</center>
	</div>
		<?php
			{
	     		$query = " select students.*,sem1.*,sem1.roll_no from students,sem1 where sem1.roll_no=students.roll_no and students.email='".$_SESSION['email']."'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
			?>
				<center><h1><b><u> MARKSHEET</u></b></h1></center><br> 
						<div id="stu_detail">
						<form action="" method="post"> 
				</form>
			</div>
				<?php
			}
		}
		?>
</body>
</html>