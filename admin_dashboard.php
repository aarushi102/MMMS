 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1\css\admin-dashboard-trial.css"></link>
	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	
	<?php
	    // $_SERVER['variable']
		session_start();
		$name = "";
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms.sql");
	?>
</head>
<body>
	<div id="header"><br>
		<center>Mentor-Mentee Management System &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:<?php echo $_SESSION['email'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:<?php echo $_SESSION['name'];?> 
		<a href="logout.php">Logout</a>
		</center>
	</div>
	<span id="top_span"><marquee>Welcome to admin login!</marquee></span>
	<div id="left_side">
	<form action="" method="POST">
		
			<input type="submit" name="search_student" value="Search Mentee">
		
			<input type="submit" name="edit_student" value="Edit Mentee">
	
		
			<input type="submit" name="add_new_student" value="Add New Mentee">
		
		
			<input type="submit" name="delete_student" value="Remove Mentee">
				
			<input type="submit" name="show teacher" value="Show Mentors">

			<input type="submit" name="edit_teacher" value="Edit Mentor">

			<input type="submit" name="add_teacher" value="Add New Mentor">

			<input type="submit" name="delete_teacher" value="Remove Mentor">

		
	</form></div>

	<div id="right_side">
	<br><br>
	<div id="demo"> 

<!-- Code to search student -->
		<?php
		if(isset($_POST['search_student']))
				{
					?>
					<center><div id="enter-roll-no">
					<form action="" method="post">
					&nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="r_no">
					<input  type="submit" name="search_by_r_no_for_search" value="Search">
					</form><br><br></div>

                    <div>
                        <label for="Year">Choose your Year</label>

                        <select name="year" id="year-select">
                        <option value="">--Please choose an option--</option>
                            <option value="FE">FE</option>
                            <option value="SE">SE</option>
                            <option value="TE">TE</option>
                            <option value="BE">BE</option>
                        </select>
                    </div>
					
					</center>
					<?php
				}

				if(isset($_POST['search_by_r_no_for_search']))
				{
					
					$query = "SELECT * FROM `student_mentoring_form` WHERE r_no = '$_POST[r_no]'";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?>
						<center><h1><b><u>Mentee's details</u></b></h1></center><br> 
						<div id="stu_detail">
						<form action="" method="post"> 
							<table align="center" border="1" cellspacing="0">
    

        <tr>
            <td colspan="2">
                <b>Name : </b>
                <input type="text" name="name" value="<?php echo $row['name']?>"  disabled>
            </td> 
            <td>
                <b>Roll No : </b>
                <input type="text" name="r_no" value="<?php echo $row['r_no']?>"  disabled>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <b>Date of Birth : </b>
                <input type="date" name="dob" value="<?php echo $row['dob']?>"  disabled>
            </td> 
            <td colspan="1">
                <b>Gender : </b>

                 
                <input type="radio" name="gender" value="m" 
                <?php 

                    if ($row["gender"]=='m') {

                        echo "checked";
                        
                        }    
                 ?> disbaled>
                
                 Male   
                 <input type="radio" name="gender" value="f" 
                  <?php 

                    if ($row['gender']=="f") {

                        echo "checked";
                        
                        }    
                 ?>  
                   disabled> 
                   Female     
                </td>
        </tr>
        <tr>
            <td colspan="3">
                <b>Current Address : </b>
                <input type="text" name="c_add" value="<?php echo $row['c_add']?>"  disabled>
            </td> 
        </tr>
        <tr>
            <td colspan="3">
                <b>Permanent Address : </b>
                <input type="text" name="p_add" value="<?php echo $row['p_add']?>"  disabled>
            </td> 
        </tr>
        <tr>
            <td colspan="2">
                <b>Mobile No : </b>
                <input type="number" name="m_no" value="<?php echo $row['m_no']?>"  disabled>
            </td> 
            <td colspan="1">
                <b>Email ID : </b>
                <input type="text" name="e_id" value="<?php echo $row['e_id']?>"  disabled>
            </td>
        </tr>

        <tr>
            <td colspan="3">
                <b>Father's Name : </b> 
                <input type="text" name="f_name" value="<?php echo $row['f_name']?>"  disabled>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <b>Mobile No : </b>
                <input type="number" name="f_no" value="<?php echo $row['f_no']?>"  disabled>
            </td> 
            <td>
                <b>Email ID : </b>
                <input type="text" name="f_id" value="<?php echo $row['f_id']?>"  disabled>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <b>Mother's Name : </b> 
                <input type="text" name="m_name" value="<?php echo $row['m_name']?>"  disabled>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <b>Mobile No : </b>
                <input type="number" name="m_mob" value="<?php echo $row['m_mob']?>"  disabled>
            </td> 
            <td>
                <b>Email ID : </b>
                <input type="text" name="mother_id" value="<?php echo $row['mother_id']?>"  disabled>
            </td>
        </tr>

        <tr>
            <td colspan="3">
                <b>Name of The Student Mentor:</b>
                <input type="text" name="s_mentor" value="<?php echo $row['s_mentor']?>"  disabled>
            </td>       
            </tr>
            <tr>
                <td colspan="2">
                    <b>Mobile No : </b>
                    <input type="number" name="men_mob_no" value="<?php echo $row['men_mob_no']?>"  disabled>
                </td> 
                <td>
                    <b>Email ID : </b>
                    <input type="text" name="men_id" value="<?php echo $row['men_id']?>"  disabled>
                </td>
            </tr>

         

        </table>
									<!-- <br><br>
									<b>Remark:</b>
								
									<textarea rows="3" cols="40" disabled><?php echo $row['remark']?></textarea> -->
								</form></div>
						<?php
					} 
				}
			?>
		
	
<!-- Code to edit student -->
		
		<?php
			if(isset($_POST['edit_student']))
			{
				?>
				<center><div id="enter-roll-no">
				<form action="" method="post">
				&nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="r_no">
				<input type="submit" name="search_by_r_no_for_edit" value="Search">
				</form><br><br>

                <div>
                        <label for="Year">Choose your Year</label>

                        <select name="year" id="year-select">
                        <option value="">--Please choose an option--</option>
                            <option value="FE">FE</option>
                            <option value="SE">SE</option>
                            <option value="TE">TE</option>
                            <option value="BE">BE</option>
                        </select>
                    </div>
				
				</center></div>
				<?php
			}
			if(isset($_POST['search_by_r_no_for_edit']))
			{
				$query = "SELECT * FROM student_mentoring_form WHERE r_no = $_POST[r_no]";   
				$query_run = mysqli_query($connection,$query); 
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?>
					<center><h1><b><u>Mentee's details</u></b></h1><br><br></center>
					<div id="ed_detail">
					<form action="admin_edit_student.php" method="post">
						<table align="center" border="1" cellspacing="0">
						 <tr>
            <td colspan="2">
                <b>Name : </b>
                <input type="text" name="name" value="<?php echo $row['name']?>"  >
            </td> 
            <td>
                <b>Roll No : </b>
                <input type="text" name="r_no" value="<?php echo $row['r_no']?>"  >
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <b>Date of Birth : </b>
                <input type="date" name="dob" value="<?php echo $row['dob']?>"  >
            </td> 
            <td colspan="1">
                <b>Gender : </b>

                 
                <input type="radio" name="gender" value="m" 
                <?php 

                    if ($row["gender"]=='m') {

                        echo "checked";
                        
                        }    
                 ?> >
                
                 Male   
                 <input type="radio" name="gender" value="f" 
                  <?php 

                    if ($row['gender']=="f") {

                        echo "checked";
                        
                        }    
                 ?>  
                   > 
                   Female     
                </td>
        </tr>
        <tr>
            <td colspan="3">
                <b>Current Address : </b>
                <input type="text" name="c_add" value="<?php echo $row['c_add']?>"  >
            </td> 
        </tr>
        <tr>
            <td colspan="3">
                <b>Permanent Address : </b>
                <input type="text" name="p_add" value="<?php echo $row['p_add']?>"  >
            </td> 
        </tr>
        <tr>
            <td colspan="2">
                <b>Mobile No : </b>
                <input type="number" name="m_no" value="<?php echo $row['m_no']?>"  >
            </td> 
            <td colspan="1">
                <b>Email ID : </b>
                <input type="text" name="e_id" value="<?php echo $row['e_id']?>"  >
            </td>
        </tr>

        <tr>
            <td colspan="3">
                <b>Father's Name : </b> 
                <input type="text" name="f_name" value="<?php echo $row['f_name']?>"  >
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <b>Mobile No : </b>
                <input type="number" name="f_no" value="<?php echo $row['f_no']?>"  >
            </td> 
            <td>
                <b>Email ID : </b>
                <input type="text" name="f_id" value="<?php echo $row['f_id']?>"  >
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <b>Mother's Name : </b> 
                <input type="text" name="m_name" value="<?php echo $row['m_name']?>"  >
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <b>Mobile No : </b>
                <input type="number" name="m_mob" value="<?php echo $row['m_mob']?>"  >
            </td> 
            <td>
                <b>Email ID : </b>
                <input type="text" name="mother_id" value="<?php echo $row['mother_id']?>"  >
            </td>
        </tr>

        <tr>
            <td colspan="3">
                <b>Name of The Student Mentor:</b>
                <input type="text" name="s_mentor" value="<?php echo $row['s_mentor']?>"  >
            </td>       
            </tr>
            <tr>
                <td colspan="2">
                    <b>Mobile No : </b>
                    <input type="number" name="men_mob_no" value="<?php echo $row['men_mob_no']?>"  >
                </td> 
                <td>
                    <b>Email ID : </b>
                    <input type="text" name="men_id" value="<?php echo $row['men_id']?>"  >
                </td>
            </tr>

        </table>
		<input type="submit" name="edit" value="Save">
					</form>
				</div>
					<?php
				}
			}
		?>

<!-- Code to add new student -->
		
		<?php 
				if(isset($_POST['add_new_student'])){
					?>
					<center><h1>Fill the given details</h1></center><hr>
					<div id="add-student">
					<form action="add_student.php" method="post">
						<table align="center" border="1" width="60%" cellspacing="0">
						 <tr>
            <td colspan="2">
                <b>Name : </b>
                <input type="text" name="name" value=""  >
            </td> 
            <td>
                <b>Roll No : </b>
                <input type="text" name="r_no" value=""  >
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <b>Date of Birth : </b>
                <input type="date" name="dob" value=""  >
            </td> 
            <td colspan="1">
                <b>Gender : </b>

                 
                <input type="radio" name="gender" value="" 
                >
                 Male   
                 <input type="radio" name="gender" value="" 
                   > 
                   Female     
                </td>
        </tr>
        <tr>
            <td colspan="3">
                <b>Current Address : </b>
                <input type="text" name="c_add" value=""  >
            </td> 
        </tr>
        <tr>
            <td colspan="3">
                <b>Permanent Address : </b>
                <input type="text" name="p_add" value=""  >
            </td> 
        </tr>
        <tr>
            <td colspan="2">
                <b>Mobile No : </b>
                <input type="number" name="m_no" value=""  >
            </td> 
            <td colspan="1">
                <b>Email ID : </b>
                <input type="text" name="e_id" value=""  >
            </td>
        </tr>

        <tr>
            <td colspan="3">
                <b>Father's Name : </b> 
                <input type="text" name="f_name" value=""  >
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <b>Mobile No : </b>
                <input type="number" name="f_no" value=""  >
            </td> 
            <td>
                <b>Email ID : </b>
                <input type="text" name="f_id" value=""  >
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <b>Mother's Name : </b> 
                <input type="text" name="m_name" value=""  >
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <b>Mobile No : </b>
                <input type="number" name="m_mob" value=""  >
            </td> 
            <td>
                <b>Email ID : </b>
                <input type="text" name="mother_id" value=""  >
            </td>
        </tr>

        <tr>
            <td colspan="3">
                <b>Name of The Student Mentor:</b>
                <input type="text" name="s_mentor" value=""  >
            </td>       
            </tr>
            <tr>
                <td colspan="2">
                    <b>Mobile No : </b>
                    <input type="number" name="men_mob_no" value=""  >
                </td> 
                <td>
                    <b>Email ID : </b>
                    <input type="text" name="men_id" value=""  >
                </td>
            </tr>
					</table>
<input type="submit" name="add" value="Add Student"><br><br></td>				
				</form></div>
					<?php
				}
			?>

<!-- Code to delete student by admin -->
			<?php
			if(isset($_POST['delete_student']))
			{
				?>
				<center>
				<div id="enter-roll-no">
				
				<form action="delete_student.php" method="post">
				&nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="roll_no">
				<div>
						<label for="Year">Choose your Year</label>

						<select name="year" id="year-select">
    					<option value="">--Please choose an option--</option>
    <option value="FE">FE</option>
    <option value="SE">SE</option>
    <option value="TE">TE</option>
    <option value="BE">BE</option>
</select>
					</div>
				<input type="submit" name="search_by_roll_no_for_delete" value="Delete">
				</form><br><br></div>

				
				</center>

			
				<?php
			}
			?>
<!-- Code to see mentor details from admin dashboard -->

			<?php
				if(isset($_POST['show_teacher']))
				{
					?>
					<center>
						<h1>Mentor's Details</h1>
						<div id="table">
						<table>
							<tr>
								<td id="td"><b>ID</b></td>
								<td id="td"><b>Name</b></td>
								<td id="td"><b>View</b></td>
								
							</div>
							</tr>
						</table>
					</div>
					</center>
					<?php
					$query = "select * from teachers";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?>
						<center>
						<table style="border-collapse: collapse;border: 3px solid white;">
							<tr>
								<td id="td"><?php echo $row['t_id']?></td>
								<td id="td"><?php echo $row['name']?></td>
								<td id="td"><?php echo "<a href='teacher_profile.php?teacher_id=". $row["t_id"] . " '> View </a>" ?></td>
								
							</tr>
						</table>
						</center>
						<?php
					}
				}
			?>

<!-- Code to edit teacher by admin -->			
			<?php
			if(isset($_POST['edit_teacher']))
			{
				?>
				<center><div id="enter-roll-no">
				<form action="" method="post">
				&nbsp;&nbsp;<b>Enter Mentor's Id:</b>&nbsp;&nbsp; <input type="text" name="t_id">
				<input type="submit" name="search_by_t_id_for_edit" value="Search">
				</form><br><br></div>
				
				</center>
				<?php
			}

			if(isset($_POST['search_by_t_id_for_edit']))
			{
				$query = "select * from teachers where t_id = '$_POST[t_id]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?>
					
					<center><h1><b><u>Edit Mentee's details</u></b></h1></center><br>
					<div id="ed-mentor" >
					<form action="admin-edit-mentor.php" method="post">
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
								<b>Courses:</b>
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

<!-- Code to add teacher by admin -->
		<?php 
				if(isset($_POST['add_teacher'])){
					?>
					<center><h1>Fill the given details</h1></center><hr>
					<div id="add-student">
					<form action="add-mentor.php" method="post">
						<table>
						<tr>
							<td>
								<b>Mentor Id:</b>
							</td> 
							<td>
								<input type="text" name="t_id" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Name:</b>
							</td> 
							<td>
								<input type="text" name="name" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Contact No:</b>
							</td> 
							<td>
								<input type="text" name="mobile" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Courses:</b>
							</td> 
							<td>
								<input type="text" name="courses" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Email:</b>
							</td> 
							<td>
								<input type="text" name="email" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Password:</b>
							</td> 
							<td>
								<input type="password" name="password" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Designation:</b>
							</td> 
							<td>
								<input type="text" name="designation" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Qualification:</b>
							</td> 
							<td>
								<input type="text" name="qualification" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Batch:</b>
							</td> 
							<td>
								<input type="text" name="batch_no" required>
							</td>
						</tr>
						
						<tr>
							<td></td>
							<td><input type="submit" name="add" value="Add Mentor"><br></td>
						</tr>
					</table>
					</form></div>
					<?php
				}
			?>
 <!-- Code to delete teacher by admin -->
			<?php
			if(isset($_POST['delete_teacher']))
			{
				?><div id="enter-roll-no">
				<center>
				<form action="delete-mentor.php" method="post">
				&nbsp;&nbsp;<b>Enter Mentor Id:</b>&nbsp;&nbsp; <input type="text" name="t_id">
				<input type="submit" name="search_by_t_id_for_delete" value="Delete">
				</form><br><br>
				</center>
			</div>
				<?php
			}
			?>
		
		</div>
</div>
 	

<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script></body>
</html>