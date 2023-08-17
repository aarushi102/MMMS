<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/extra_curricular_by_mentor.css">
    <title>Extra Curricular Activities</title>

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

  <div id="header"><center><h1>Mentee's Extra-Curricular Activities</h1></center> 
</div> 
</head>
<body>

  <?php

    $r_no = (isset($_GET['r_no']) ? $_GET['r_no'] : '');
    
    $query= 'SELECT * from extra_curricular_activities WHERE r_no='.$r_no;
  
      
  $query_run = mysqli_query($connection,$query);
    
    //echo 'asdsd<pre>';print_r($query_run);die;

  while ($row = mysqli_fetch_assoc($query_run)) 
  {
      ?>

        <center><h1><b><?php 
                            echo "Roll number:". $_GET['r_no'];
                    ?></b></h1></center>

      <form action=" extra_curricular_update.php " method="POST">
 
      <input type="text" name="r_no" value="<?php echo $r_no ?>" hidden>

    <table align="center" border="0" height="700px" width="80%" cellspacing="0">
      <tr>
          <td align="center" height="50px" width="10%" style="font-size: 18px;">
              <b>Semester</b>
          </td>

          <td align="center" height="50px" width="20%" style="font-size: 18px;">
            <b>Sports</b>
        </td>

        <td align="center" height="50px" width="20%" style="font-size: 18px;">
            <b>NSS / Social cell</b>
        </td>

        <td align="center" height="50px" width="30%" style="font-size: 18px;">
            <b>Competition / Participation /
                Prize / Awards</b>
        </td>
      </tr>

      <tr>
          <td align="center">
              <b>I</b>
          </td>

          <td align="center" width="20%">
            <textarea name="sem1_sports" id="" style="margin: 0px; width: 98%; height: 88%;"><?php echo $row['sem1_sports'] ?></textarea>

        </td>

        <td align="center" width="20%">
            <textarea name="sem1_nss" id="" style="margin: 0px; width: 98%; height: 88%;"><?php echo $row['sem1_nss'] ?></textarea>
        </td>

        <td align="center" width="30%">
            <textarea name="sem1_awards" id="" style="margin: 0px; width: 98%; height: 88%;"><?php echo $row['sem1_awards'] ?></textarea>
        </td>
      </tr>

      <tr>
        <td align="center">
            <b>II</b>
        </td>

        <td align="center" width="20%">
            <textarea name="sem2_sports" id="" style="margin: 0px; width: 98%; height: 88%;"><?php echo $row['sem2_sports'] ?></textarea>
        </td>

        <td align="center" width="20%">
            <textarea name="sem2_nss" id="" style="margin: 0px; width: 98%; height: 88%;"><?php echo $row['sem2_nss'] ?></textarea>
        </td>

        <td align="center" width="30%">
            <textarea name="sem2_awards" id="" style="margin: 0px; width: 98%; height: 88%;"><?php echo $row['sem2_awards'] ?></textarea>
        </td>
      </tr>

      <tr>
        <td align="center">
            <b>III</b>
        </td>

        <td align="center" width="20%">
            <textarea name="sem3_sports" id="" style="margin: 0px; width: 98%; height: 88%;"><?php echo $row['sem3_sports'] ?></textarea>
        </td>

        <td align="center" width="20%">
            <textarea name="sem3_nss" id="" style="margin: 0px; width: 98%; height: 88%;"><?php echo $row['sem3_nss'] ?></textarea>
        </td>

        <td align="center" width="30%">
            <textarea name="sem3_awards" id="" style="margin: 0px; width: 98%; height: 88%;"><?php echo $row['sem3_awards'] ?></textarea>
        </td>
      </tr>

      <tr>
        <td align="center">
            <b>IV</b>
        </td>

        <td align="center" width="20%">
            <textarea name="sem4_sports" id="" style="margin: 0px; width: 98%; height: 88%;"><?php echo $row['sem4_sports'] ?></textarea>
        </td>

        <td align="center" width="20%">
            <textarea name="sem4_nss" id="" style="margin: 0px; width: 98%; height: 88%;"><?php echo $row['sem4_nss'] ?></textarea>
        </td>

        <td align="center" width="30%">
            <textarea name="sem4_awards" id="" style="margin: 0px; width: 98%; height: 88%;"><?php echo $row['sem4_awards'] ?></textarea>
        </td>
      </tr>

      <tr>
          <td align="center">
        <b>V</b>
          </td>

          <td align="center" width="20%">
            <textarea name="sem5_sports" id="" style="margin: 0px; width: 98%; height: 88%;"><?php echo $row['sem5_sports'] ?></textarea>
        </td>

        <td align="center" width="20%">
            <textarea name="sem5_nss" id="" style="margin: 0px; width: 98%; height: 88%;"><?php echo $row['sem5_nss'] ?></textarea>
        </td>

        <td align="center" width="30%">
            <textarea name="sem5_awards" id="" style="margin: 0px; width: 98%; height: 88%;"><?php echo $row['sem5_awards'] ?></textarea>
        </td>
      </tr>
 
      <tr>
        <td align="center">
            <b>VI</b>
        </td>

        <td align="center" width="20%">
            <textarea name="sem6_sports" id="" style="margin: 0px; width: 98%; height: 88%;"><?php echo $row['sem6_sports'] ?></textarea>
        </td>

        <td align="center" width="20%">
           <textarea name="sem6_nss" id="" style="margin: 0px; width: 98%; height: 88%;"><?php echo $row['sem6_nss'] ?></textarea>
        </td>

        <td align="center" width="30%">
            <textarea name="sem6_awards" id="" style="margin: 0px; width: 98%; height: 88%;"><?php echo $row['sem6_awards'] ?></textarea>
        </td>
      </tr>

      <tr>
        <td align="center">
            <b>VII</b>
        </td>

        <td align="center" width="20%">
            <textarea name="sem7_sports" id="" style="margin: 0px; width: 98%; height: 88%;"><?php echo $row['sem7_sports'] ?></textarea>
        </td>

        <td align="center" width="20%">
            <textarea name="sem7_nss" id="" style="margin: 0px; width: 98%; height: 88%;"><?php echo $row['sem7_nss'] ?></textarea>
        </td>

        <td align="center" width="30%">
            <textarea name="sem7_awards" id="" style="margin: 0px; width: 98%; height: 88%;"><?php echo $row['sem7_awards'] ?></textarea>
        </td>
      </tr>

      <tr>
        <td align="center">
            <b>VIII</b>
        </td>

        <td align="center" width="20%">
            <textarea name="sem8_sports" id="" style="margin: 0px; width: 98%; height: 88%;"><?php echo $row['sem8_sports'] ?></textarea>
        </td>

        <td align="center" width="20%">
            <textarea name="sem8_nss" id="" style="margin: 0px; width: 98%; height: 88%;"><?php echo $row['sem8_nss'] ?></textarea>
        </td>

        <td align="center" width="30%">
            <textarea name="sem8_awards" id="" style="margin: 0px; width: 98%; height: 88%;"><?php echo $row['sem8_awards'] ?></textarea>
        </td>
      </tr>

    </table>

    <center><input type="submit" name="submit_feedback"></center>
  <?php
          
      }
      ?>
</body>
</html>