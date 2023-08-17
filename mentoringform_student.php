
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
<?php

    $r_no = (isset($_GET['r_no']) ? $_GET['r_no'] : '');
    
    $query= 'SELECT * from student_mentoring_form WHERE r_no='.$r_no;
    //$query = "select student_mentoring_form.* from student_mentoring_form,teachers where teachers.batch_no=student_mentoring_form.batch_no and teachers.email= '".$_SESSION['email']."'";
			
	$query_run = mysqli_query($connection,$query);
    
    //echo 'asdsd<pre>';print_r($query_run);die;

	while ($row = mysqli_fetch_assoc($query_run)) 
	{
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
                 ?> disbaled>
                
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
       <!--  <table align="center" height="30px" width="10%">
            <tr>
                <td>
                    <input type="submit" name="Submit">
                </td>
            </tr>
        </table> --></form>
			</div>
				<?php
					
			}
			?>
</body>
</html>