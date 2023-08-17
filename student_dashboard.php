<!DOCTYPE html>
<html>
<head>
	<title>Student Dashboard</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/admin-dashboard-trial.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/student-dashboard.css">
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
	<span id="top_span"><marquee>Note:- nothing is impossible</marquee></span>
	<div id="left_side">
		<br><br><br>
		<form action="" method="POST">
		
						<input type="submit" name="show_detail" value="Show Profile">

						<input type="submit" name="edit_detail" value="Edit Profile">
					
						<input type="submit" name="report_detail" value="Report">

						<input type="submit" name="mentor_detail" value="Mentor Profile">
					
		</form>
	</div>
	<div id="right_side"><br><br>
		<div id="demo">

<!-- Code to see student's details -->
			<?php
			if(isset($_POST['show_detail']))
			{
				$query = "select * from students where email = '$_SESSION[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
			?>
				<center><h1><b><u> Profile </u></b></h1></center><br> 
						<div id="stu_detail">
						<form action="" method="post"> 
				<table>
					<tr>
						<td>
							<b>Roll No:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['roll_no']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Name:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['name']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Father's Name:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['father_name']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Class:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['class']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Mobile:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['mobile']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Email:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['email']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Password:</b>
						</td> 
						<td>
							<input type="password" value="<?php echo $row['password']?>" disabled>
						</td>
					</tr>
					<!-- <tr>
						<td>
							<b>Remark:</b>
						</td> 
						<td>
							<textarea rows="3" cols="40" disabled><?php echo $row['remark']?></textarea>
						</td>
					</tr> -->
				</table></form></div>
				<?php
				}	
			}
			?>
<!-- Code to edit student's details -->
			<?php
			if(isset($_POST['edit_detail']))
			{
				$query = "select * from students where email = '$_SESSION[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?>
					<center><h1>Edit your details</h1></center><hr>
					<div id="edit-student">
					<form action="edit_student.php" method="post">
						<table>
						<tr>
							<td>
								<b>Roll No:</b>
							</td> 
							<td>
								<input type="text" name="roll_no" value="<?php echo $row['roll_no']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Name:</b>
							</td> 
							<td>
								<input type="text" name="name" value="<?php echo $row['name']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Father's Name:</b>
							</td> 
							<td>
								<input type="text" name="father_name" value="<?php echo $row['father_name']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Class:</b>
							</td> 
							<td>
								<input type="text" name="class" value="<?php echo $row['class']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Mobile:</b>
							</td> 
							<td>
								<input type="text" name="mobile" value="<?php echo $row['mobile']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Email:</b>
							</td> 
							<td>
								<input type="text" name="email" value="<?php echo $row['email']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Password:</b>
							</td> 
							<td>
								<input type="password" name="password" value="<?php echo $row['password']?>">
							</td>
						</tr>
						<!-- <tr>
							<td>
								<b>Remark:</b>
							</td> 
							<td>
								<textarea rows="3" cols="40" name="remark"><?php echo $row['remark']?></textarea>
							</td>
						</tr> --><br>
						<tr>
							<td></td>
							<td>
								<input type="submit" value="Save">
							</td>
						</tr>
					</table>
					</form>
				</div>
					<?php
				}
			}
			?>

<!-- Code to see mentor's details with student's login -->
			<?php
			if(isset($_POST['mentor_detail']))
			{ 

				
				//$query = "select * from students where email = '$_SESSION[email]'";
				// $query = "select students.roll_no, teachers.name,teachers.t_id from students join teachers on students.roll_no = teachers.roll_no ";
				
				$query = "select teachers.* from students,teachers where teachers.batch_no=students.batch_no and students.email= '".$_SESSION['email']."'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
			?>
				<center><h1><b><u> Profile </u></b></h1></center><br> 
						<div id="stu_detail">
						<form action="" method="post"> 
				<table>
					<tr>
						<td>
							<b>Mentor Id</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['t_id']?>" disabled>
						</td>
					</tr>
					
					<tr>
						<td>
							<b>Name:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['name']?>" disabled>
						</td>
					</tr>
					<tr>
							<td>
								<b>Designation:</b>
							</td> 
							<td>
								<input type="text" name="designation" value="<?php echo $row['designation']?>"disabled>
							</td>
						</tr>
						<tr>
							<td>
								<b>Qualification:</b>
							</td> 
							<td>
								<input type="text" name="qualification" value="<?php echo $row['qualification']?>"disabled>
							</td>
						</tr>
					
					
					<tr>
						<td>
							<b>Mobile:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['mobile']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Email:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['email']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Password:</b>
						</td> 
						<td>
							<input type="password" value="<?php echo $row['password']?>" disabled>
						</td>
					</tr>
					
				</table></form>
			</div>
				<?php
				}	
			}
			?>
			<?php
				if(isset($_POST['report_detail']))
				{
					?>
					<center>
						<h1>My Info</h1>
						<div id="table">
						<table>
							<tr>
								<td id="td"><b>Roll No</b></td>
								<td id="td"><b>Name</b></td>
								<td id="td"><b>View Detail</b></td>
							</tr>
						</table>
					</div>
					</center>
					<?php
					$query = "select * from students where email = '$_SESSION[email]'";

					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?>
						<center>
						
								
							<table id="table1" style="border-collapse: collapse;border: 3px solid white;">
								
							<tr>
								<td id="td"><?php echo $row['roll_no']?></td>
								<td id="td"><?php echo $row['name']?></td>
								<td id="td"><?php echo "<a href='my_report.php?r_no=".$row["roll_no"]."'>View</a>" ?> </td>
							</tr>
						</table>
							</form>
						</center>
						<?php
					}
				}
			?>

		</div>

		</div>
	</div>
</body>
</html>