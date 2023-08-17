<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/attendance_given_by_mentor.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Attendance</title>

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
<div id="header"> <h1>Student's Attendance Record</h1></div>
   
  </head>
  <body>

    <?php

    
  $r_no = (isset($_GET['r_no']) ? $_GET['r_no'] : '');
  $query= 'SELECT * from student_attendence WHERE r_no='.$r_no;
  $query_run = mysqli_query($connection,$query);
    
    
    // echo 'asdsd<pre>';print_r($query_run);die;

  while ($row = mysqli_fetch_assoc($query_run)) 
  {
      ?>

      <form action="attendance_update.php" method="POST" accept-charset="utf-8">

        <input  name="r_no" value="<?php echo $r_no ?>" hidden>
  
    <table align="center" border="0" height="600px" width="70%" cellspacing="0">
      <tr>
        <td id="td" align="center" colspan="1" rowspan="2" width="10%">
          <b>Semester </b>
        </td>
        <td id="td" colspan="2" align="center">
          <b>Month 1</b>
          
        </td>
        <td id="td" colspan="2" align="center">
          <b>Month 2</b>
          
        </td>
        <td  id="td" colspan="2" align="center">
          <b>Month 3</b>
          
        </td>
      </tr>

      <tr>
        <td align="center" colspan="1">
          <b>Percentage</b>
        </td>

        <td align="center" colspan="1">
          <b>Month</b>
        </td>

        <td align="center" colspan="1">
          <b>Percentage</b>
        </td>

        <td align="center" colspan="1">
          <b>Month</b>
        </td>

        <td align="center" colspan="1">
          <b>Percentage</b>
        </td>

        <td align="center" colspan="1">
          <b>Month</b>
        </td>
      </tr>

      <tr>
        <td align="center" colspan="1">
          <b>I</b>
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem1_month1_perc" value="<?php echo $row['sem1_month1_perc']?>"  >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem1_month1_remark" value="<?php echo $row['sem1_month1_remark']?>"  >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem1_month2_perc" value="<?php echo $row['sem1_month2_perc']?>"  >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem1_month2_remark"  value="<?php echo $row['sem1_month2_remark']?>" >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem1_month3_perc" value="<?php echo $row['sem1_month3_perc']?>"  >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem1_month3_remark" value="<?php echo $row['sem1_month3_remark']?>"  >
        </td>
      </tr>

      <tr>
        <td align="center" colspan="1">
          <b>II</b>
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem2_month1_perc" value="<?php echo $row['sem2_month1_perc']?>"  >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem2_month1_remark" value="<?php echo $row['sem2_month1_remark']?>"  >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem2_month2_perc" value="<?php echo $row['sem2_month2_perc']?>"  >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem2_month2_remark" value="<?php echo $row['sem2_month2_remark']?>"  >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem2_month3_perc" value="<?php echo $row['sem2_month3_perc']?>"  >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem2_month3_remark"  value="<?php echo $row['sem2_month3_remark']?>" >
        </td>
      </tr>

      <tr>
        <td align="center" colspan="1">
          <b>III</b>
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem3_month1_perc" value="<?php echo $row['sem3_month1_perc']?>"  >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem3_month1_remark" value="<?php echo $row['sem3_month1_remark']?>"  >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem3_month2_perc" value="<?php echo $row['sem3_month2_perc']?>"  >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem3_month2_remark" value="<?php echo $row['sem3_month2_remark']?>"  >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem3_month3_perc" value="<?php echo $row['sem3_month3_perc']?>"  >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem3_month3_remark" value="<?php echo $row['sem3_month3_remark']?>"  >
        </td>
      </tr>

      <tr>
        <td align="center" colspan="1">
          <b>IV</b>
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem4_month1_perc" value="<?php echo $row['sem4_month1_perc']?>"  >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem4_month1_remark" value="<?php echo $row['sem4_month1_remark']?>"  >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem4_month2_perc" value="<?php echo $row['sem4_month2_perc']?>"  >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem4_month2_remark" value="<?php echo $row['sem4_month2_remark']?>"  >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem4_month3_perc" value="<?php echo $row['sem4_month3_perc']?>"  >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem4_month3_remark" value="<?php echo $row['sem4_month3_remark']?>"  >
        </td>
      </tr>

      <tr>
        <td align="center" colspan="1">
          <b>V</b>
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem5_month1_perc" value="<?php echo $row['sem5_month1_perc']?>"  >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem5_month1_remark" value="<?php echo $row['sem5_month1_remark']?>"  >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem5_month2_perc" value="<?php echo $row['sem5_month2_perc']?>"  >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem5_month2_remark" value="<?php echo $row['sem5_month2_remark']?>"   >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem5_month3_perc" value="<?php echo $row['sem5_month3_perc']?>"  >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem5_month3_remark"  value="<?php echo $row['sem5_month3_remark']?>" >
        </td>
      </tr>

      <tr>
        <td align="center" colspan="1">
          <b>VI</b>
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem6_month1_perc" value="<?php echo $row['sem6_month1_perc']?>"  >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem6_month1_remark" value="<?php echo $row['sem6_month1_remark']?>"  >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem6_month2_perc" value="<?php echo $row['sem6_month2_perc']?>"  >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem6_month2_remark" value="<?php echo $row['sem6_month2_remark']?>"  >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem6_month3_perc" value="<?php echo $row['sem6_month3_perc']?>"  >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem6_month3_remark" value="<?php echo $row['sem6_month3_remark']?>"  >
        </td>
      </tr>

      <tr>
        <td align="center" colspan="1">
          <b>VII</b>
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem7_month1_perc" value="<?php echo $row['sem7_month1_perc']?>"  >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem7_month1_remark" value="<?php echo $row['sem7_month1_remark']?>"  >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem7_month2_perc" value="<?php echo $row['sem7_month2_perc']?>"   >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem7_month2_remark" value="<?php echo $row['sem7_month2_remark']?>"  >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem7_month3_perc" value="<?php echo $row['sem7_month3_perc']?>"  >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem7_month3_remark" value="<?php echo $row['sem7_month3_remark']?>"  >
        </td>
      </tr>

      <tr>
        <td id="td" align="center" colspan="1">
          <b>VIII</b>
        </td>

        <td id="td" align="center" colspan="1">
          <input type="text" name="sem8_month1_perc" value="<?php echo $row['sem8_month1_perc']?>"  >
        </td>

        <td  align="center" colspan="1">
          <input type="text" name="sem8_month1_remark" value="<?php echo $row['sem8_month1_remark']?>"  >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem8_month2_perc" value="<?php echo $row['sem8_month2_perc']?>"  >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem8_month2_remark" value="<?php echo $row['sem8_month2_remark']?>"  >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem8_month3_perc" value="<?php echo $row['sem8_month3_perc']?>"  >
        </td>

        <td align="center" colspan="1">
          <input type="text" name="sem8_month3_remark" value="<?php echo $row['sem8_month3_remark']?>"  >
        </td>
      </tr>
    </table>
  

    <center><input type="submit" name="submit_feedback"></center>
</form>
     <?php
          
      }
      ?>
  </body>
</html>
