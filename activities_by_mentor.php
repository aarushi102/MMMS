<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/activities.css">
    <title>Activities</title>

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
		<center><h1><u>Mentee's Co-curricular Activities</u></h1>
		
		</center>
		
	</div>
	<span id="top_span"><marquee>CO-CURRICULAR ACTIVITES</marquee></span>

	<div id="right_side">
		<div id="demo">
			<div id="activities">
				
<?php

    $r_no = (isset($_GET['r_no']) ? $_GET['r_no'] : '');
    
    $query= 'SELECT * from activities WHERE r_no='.$r_no;
    //$query = "select student_mentoring_form.* from student_mentoring_form,teachers where teachers.batch_no=student_mentoring_form.batch_no and teachers.email= '".$_SESSION['email']."'";
      
  $query_run = mysqli_query($connection,$query);
    
    //echo 'asdsd<pre>';print_r($query_run);die;

  while ($row = mysqli_fetch_assoc($query_run)) 
  {
      ?>

        <center><h1><b><?php 
                            echo "Roll number:". $_GET['r_no'];
                    ?></b></h1></center>

      <form action="activities_editing.php " method="GET">
 
                    <input type="text" name="r_no" value="<?php echo $r_no ?>" hidden>
                     
    <table align="center" border="0" height="700px" width="80%" cellspacing="0">
      <tr>
          <td align="center" height="50px" width="10%">
              <b>Semester</b>
          </td>

          <td align="center" height="50px" width="20%">
            <b>Professional Society </b>
        </td>

        <td align="center" height="50px" width="20%">
            <b>Internship</b>
        </td>

        <td align="center" height="50px" width="20%">
            <b>Papers Published</b>
        </td>
      </tr>

      <tr>
          <td align="center">
              <b>I</b>
          </td>

          <td align="center" width="20%">
            <input type="text" name="sem1_prof_soc" value="<?php echo $row['sem1_prof_soc']?>" >
        </td>

        <td align="center" width="20%">
            <input type="text" name="sem1_internship" value="<?php echo $row['sem1_internship']?>">
        </td>

        <td align="center" width="30%">
            <input type="text" name="sem1_pap_publ"  value="<?php echo $row['sem1_pap_publ']?>">
        </td>
      </tr>

      <tr>
        <td align="center">
            <b>II</b>
        </td>

        <td align="center" width="20%">
            <input type="text" name="sem2_prof_soc" value="<?php echo $row['sem2_prof_soc']?>"  >
        </td>

        <td align="center" width="20%">
            <input type="text" name="sem2_internship" value="<?php echo $row['sem2_internship']?>" >
        </td>

        <td align="center" width="30%">
            <input type="text" name="sem2_pap_publ" value="<?php echo $row['sem2_pap_publ']?>">
        </td>
      </tr>

      <tr>
        <td align="center">
            <b>III</b>
        </td>

        <td align="center" width="20%">
            <input type="text" name="sem3_prof_soc" value="<?php echo $row['sem3_prof_soc']?>"  >
        </td>

        <td align="center" width="20%">
            <input type="text" name="sem3_internship" value="<?php echo $row['sem3_internship']?>">
        </td>

        <td align="center" width="30%">
            <input type="text" name="sem3_pap_publ" value="<?php echo $row['sem3_pap_publ']?>">
        </td>
      </tr>

      <tr>
        <td align="center">
            <b>IV</b>
        </td>

        <td align="center" width="20%">
            <input type="text" name="sem4_prof_soc" value="<?php echo $row['sem4_prof_soc']?>"  >
        </td>

        <td align="center" width="20%">
            <input type="text" name="sem4_internship" value="<?php echo $row['sem4_internship']?>">
        </td>

        <td align="center" width="30%">
            <input type="text" name="sem4_pap_publ" value="<?php echo $row['sem4_pap_publ']?>">
        </td>
      </tr>

      <tr>
          <td align="center">
        <b>V</b>
          </td>

          <td align="center" width="20%">
            <input type="text" name="sem5_prof_soc" value="<?php echo $row['sem5_prof_soc']?>">
        </td>

        <td align="center" width="20%">
            <input type="text" name="sem5_internship" value="<?php echo $row['sem5_internship']?>" >
        </td>

        <td align="center" width="30%">
            <input type="text" name="sem5_pap_publ" value="<?php echo $row['sem5_pap_publ']?>">
        </td>
      </tr>
 
      <tr>
        <td align="center">
            <b>VI</b>
        </td>

        <td align="center" width="20%">
            <input type="text" name="sem6_prof_soc" value="<?php echo $row['sem6_prof_soc']?>" >
        </td>

        <td align="center" width="20%">
            <input type="text" name="sem6_internship" value="<?php echo $row['sem6_internship']?>">
        </td>

        <td align="center" width="30%">
            <input type="text" name="sem6_pap_publ" value="<?php echo $row['sem6_pap_publ']?>">
        </td>
      </tr>

      <tr>
        <td align="center">
            <b>VII</b>
        </td>

        <td align="center" width="20%">
            <input type="text" name="sem7_prof_soc" value="<?php echo $row['sem7_prof_soc']?>"  >
        </td>

        <td align="center" width="20%">
            <input type="text" name="sem7_internship" value="<?php echo $row['sem7_internship']?>">
        </td>

        <td align="center" width="30%">
            <input type="text" name="sem7_pap_publ" value="<?php echo $row['sem7_pap_publ']?>">
        </td>
      </tr>

      <tr>
        <td align="center">
            <b>VIII</b>
        </td>

        <td align="center" width="20%">
            <input type="text" name="sem8_prof_soc" value="<?php echo $row['sem8_prof_soc']?>">
        </td>

        <td align="center" width="20%">
            <input type="text" name="sem8_internship" value="<?php echo $row['sem8_internship']?>">
        </td>

        <td align="center" width="30%">
            <input type="text" name="sem8_pap_publ" value="<?php echo $row['sem8_pap_publ']?>" >
        </td>
      </tr>

    </table>
    <center><input type="submit" name="submit_feedback"></center>
  <?php
          
      }
      ?>

	
    
</body>
</html>