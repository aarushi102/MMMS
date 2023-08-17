<!DOCTYPE html>
<html>
<head>
	<title>Mentor Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/admin-login.css">
  	
</head>
<body>
	<center><br><br>
		<div id="admin-login">
		<h1>Mentor LogIn</h1><br><br>
		<form action="" method="post">
			Email ID: <input type="text" name="email" required><br><br>
			Password: <input type="password" name="password" required><br><br>
			<input type="submit" name="submit" value="LogIn">
		</form><br>
	</div>

		<?php
			session_start();
			if(isset($_POST['submit']))
			{
				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,"sms.sql");
				$query = "select * from teachers where email = '$_POST[email]'";
				echo $query;
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					if($row['email'] == $_POST['email'])
					{
						if($row['password'] == $_POST['password'])
						{
							$_SESSION['name'] =  $row['name'];
							$_SESSION['email'] =  $row['email'];
							header("Location: Mentor_Dashboard.php");
						}
						else{
							?>
							<span>Wrong Password !!</span>
							<?php
						}
					}
					else
					{
						?>
						<span>Wrong UserName !!</span>
						<?php
					}
				}
			}
		?>
	</center>
</body>
</html>