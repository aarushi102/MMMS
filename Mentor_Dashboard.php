<!DOCTYPE html>
<html>
<head>
	<title>Mentor Dashboard</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/admin-dashboard-trial.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/Mentor-dashboard.css">
  	
	
	<?php
		session_start();
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms.sql");
	?>
</head>
<body>
	<div id="header"><br>
		<center>Mentor-Mentee Management System &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email: <?php echo $_SESSION['email'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:<?php echo $_SESSION['name'];?> 
		<a href="logout.php">Logout</a>
		</center>
	</div>
	<span id="top_span"><marquee>Welcome to Mentor login</marquee></span>
	<div id="left_side">
		<br><br><br>
		<form action="" method="post">
		
			
					<center>
						<input type="submit" name="show_detail" value="Show Profile">
						<input type="submit" name="edit_detail" value="Edit Profile">
						<input type="submit" name="my_students" value="My Students">
						<input type="submit" name="show_mentee_profile" value="okok">
					</center>
		</form>
	</div>
	<div id="right_side">
		<div id="demo">

<!-- Code to show mentor's details -->
			<!-- Code to show mentor details -->
			<?php
			if(isset($_POST['show_detail']))
			{
				$query = "select * from teachers where email = '$_SESSION[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
			?>  
			<center><b><h1>Profile</h1><b></center><br><br>
			<div id="teacher_detail">
				<table>
					<tr>
						<td>
							<b>Name:</b>
						</td> 
						<td>
							<input type="text" name="name" value="<?php echo $row['name']?>" disabled>
						</td>
					</tr>
					<tr>
							<td>
								<b>Designation:</b>
							</td> 
							<td>
								<input type="text" name="designation" value="<?php echo $row['designation']?>" disabled>
							</td>
						</tr>
						<tr>
							<td>
								<b>Qualification:</b>
							</td> 
							<td>
								<input type="text" name="qualification" value="<?php echo $row['qualification']?>" disabled>
							</td>
						</tr>
					<tr>
						<td>
							<b>Mobile:</b>
						</td> 
						<td>
							<input type="text" name="mobile" value="<?php echo $row['mobile']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Email:</b>
						</td> 
						<td>
							<input type="text" name="email" value="<?php echo $row['email']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Password:</b>
						</td> 
						<td>
							<input type="password" name="password" value="<?php echo $row['password']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Courses:</b>
						</td> 
						<td>
							<input type="text" name="courses" value="<?php echo $row['courses']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Batch:</b>
						</td> 
						<td>
							<input type="text" name="batch_no" value="<?php echo $row['batch_no']?>" disabled>
						</td>
					</tr>

					
				</table>
				</div>
				<?php
				}	
			}
			?>

<!-- Code to edit mentor's details -->
			<?php
			if(isset($_POST['edit_detail']))
			{ 
				$query = "select * from teachers where email = '$_SESSION[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?>
					<center><h1>Edit your details</h1></center><hr>
					<div id="edit-teacher">
					<form action="editmentor.php" method="post">
						<table>
						<tr>
						<td>
							<b>Mentor Id</b>
						</td> 
						<td>
							<input type="text" name="t_id" value="<?php echo $row['t_id']?>" >
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
								<b>Designation:</b>
							</td> 
							<td>
								<input type="text" name="designation" value="<?php echo $row['designation']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Qualification:</b>
							</td> 
							<td>
								<input type="text" name="qualification" value="<?php echo $row['qualification']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Course:</b>
							</td> 
							<td>
								<input type="text" name="courses" value="<?php echo $row['courses']?>">
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
						<br>
						<tr>
							<td></td>
							<td>
								<input type="submit" value="Save">
							</td>
						</tr>
					</table>
					</form></div>
					<?php
				}
			}
			?>
<!-- Code to show My mentee's details -->
			<?php
			if(isset($_POST['show_mentee_profile']))
			{ 

				
				//$query = "select * from students where email = '$_SESSION[email]'";
				// $query = "select students.roll_no, teachers.name,teachers.t_id from students join teachers on students.roll_no = teachers.roll_no ";
				
				$query = "select students.* from students,teachers where teachers.batch_no=students.batch_no and teachers.email= '".$_SESSION['email']."'";
				echo $query;
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
					
				</table>
			</form>
		</div>
				<?php
				}	
			}
		?>
<!--	Code to check my student's details  -->
			<?php
				if(isset($_POST['my_students']))
				{
					?>
					<center>
						<h1>My Students</h1>
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
					$query = "select students.* from students,teachers where teachers.batch_no=students.batch_no and teachers.email= '".$_SESSION['email']."'";

					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?>
						<center>
						
								
							<table id="table1" style="border-collapse: collapse;border: 3px solid white;">
								
							<tr>
								<td id="td"><?php echo $row['roll_no']?></td>
								<td id="td"><?php echo $row['name']?></td>
								<td id="td"><?php echo "<a href='mentoringform.php?r_no=".$row["roll_no"]."'>View</a>" ?> </td>
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
</body>
</html>