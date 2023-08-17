
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/mentoringform.css">
    <title>STUDENT MENTORING FORM</title>

    <!-- <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/admin-dashboard-trial.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/Mentor-dashboard.css"> -->

    <style>
        h1 {
            text-align: center;
        }
    </style>

    <?php
		session_start();
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms.sql");
	?>

</head>
<body>
<div id="header">
		 <center> <input type="image" src="slrtce.png" width="70%" height="144px"></center>
	</div>
	<span id="top_span"><marquee></marquee></span>

	<div id="right_side">
		<div id="demo">
			<div id="student_mentoring_form">
		<form action="" method="post"> 

   
   
        <div id="title">
            <center><h1>STUDENT MENTORING FORM</h1></center>
                
            </div>
    
   <br>
<!-- <?php

    //$r_no = (isset($_GET['r_no']) ? $_GET['r_no'] : '');
    
 //   $query= 'SELECT * from student_mentoring_form WHERE r_no='.$r_no;
    //$query = "select student_mentoring_form.* from student_mentoring_form,teachers where teachers.batch_no=student_mentoring_form.batch_no and teachers.email= '".$_SESSION['email']."'";
			
	//$query_run = mysqli_query($connection,$query);
    
    //echo 'asdsd<pre>';print_r($query_run);die;

//	while ($row = mysqli_fetch_assoc($query_run)) 
	//{
			?>
    <table align="center" border="1" height="630px" width="53%" cellspacing="0">
        <tr>
            
            <td align="center" colspan="3" height="50px" cellspacing="0">
               <h2>Students Personal Details</h2><hr width="70%">
            </td>
        
    </tr>

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

            

        </table> -->
       <!--  <table align="center" height="30px" width="10%">
            <tr>
                <td>
                    <input type="submit" name="Submit">
                </td>
            </tr>
        </table> -->
    <?php
			
				
				//$query = "select * from students where email = '$_SESSION[email]'";
				// $query = "select students.roll_no, teachers.name,teachers.t_id from students join teachers on students.roll_no = teachers.roll_no ";
				
				$roll_no = (isset($POST['roll_no']) ? $_GET['roll_no'] : '');
    
    $query= "SELECT * from students WHERE roll_no=.$roll_no";
			//	echo $query;
				$query_run = mysqli_query($connection,$query);
			//	while ($row = mysqli_fetch_assoc($query_run)) 
			//	{
			?>

			<center><h1><b><u> Profile </u></b></h1></center><br> 
						<div id="stu_detail">
						<form action="" method=""> 
				<table>
					<tr>
						<td>
							<b>Roll No:</b>
						</td> 
						<td>
							<input type="text" name="roll_no" value="<?php echo $row['roll_no']?>" disabled>
						</td>
					</tr>
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
							<b>Father's Name:</b>
						</td> 
						<td>
							<input type="text" name="father_name" value="<?php echo $row['father_name']?>" disabled>
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
					
		//	}
			?>
</body>
</html>