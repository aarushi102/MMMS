<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/after_be.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLACEMENT</title>

  <?php
    session_start();
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"sms.sql");
  ?>
</head>
<body>
  <?php

    $r_no = (isset($_GET['r_no']) ? $_GET['r_no'] : '');
    
    $query= 'SELECT * from after_be WHERE r_no='.$r_no;
    $query_run = mysqli_query($connection,$query);
    
    while ($row = mysqli_fetch_assoc($query_run)) 
  {
      ?>

        <center><h1><b><?php 
                            echo "Roll number:". $_GET['r_no'];
                    ?></b></h1></center>
      
    
    


      <form action="after_be_update.php " method="POST">
 
        <input type="text" name="r_no" value="<?php echo $r_no ?>" hidden>
<p align="center" style="font-size: 20px;">
   <b> Placement  : Yes 
    <input type="radio" name="placement" value="yes"

    <?php 

      if ($row['placement']=="yes") {
        echo "checked";
      }
    ?> 
    > <!-- Input closure tag -->

    No
    <input type="radio" name="placement" value="no"

      <?php 

      if ($row['placement']=="no") {
        echo "checked";
      }
    ?> 
    >
    <hr width="40%">
     <br>

    <center>If yes get following Details :</center>  </b></p>

   <table border="0" align="center" height="125px%" width="50%" cellspacing="15px">
    <tr>
        <td colspan="2" cellspacing="5px">
            <b >Company : </b>
            <input type="text" name="company" value="<?php echo $row['company']?>" style="margin: 15px; width: 88%; height: 50%;"  >
        </td>

    </tr>

    <tr>
    <td colspan="2" cellspacing="5px">
      <b>Package : </b>
        <input type="text" name="package" value="<?php echo $row['package']?>" style="margin: 15px; width: 88%; height: 50%;" >
    </td> </tr>

   </table>

   <br>
   <p align="center" style="font-size: 20px;">
    <b>Higher Studies : </b></p>

   <table border="0" align="center" height="125px%" width="50%" cellspacing="0px">
   <tr style="margin: 0px; width: 86%; height: 30%;">
   <td align="center" width="10%" height=50%;>
     <b>Exams</b>
   </td>

   <td align="center" width="8">
    <b>GRE</b>
  </td>

  <td align="center" width="8">
    <b>TOFEL</b>
  </td>

  <td align="center" width="8">
    <b>CAT</b>
  </td>

  <td align="center" width="8">
    <b>GATE</b>
  </td>

   </tr>

   <tr style="margin: 0px; width: 86%; height: 40%;">
    <td width="10%">
       <p style="font-size: 15px;" align="center"> <b>SCORE</b> </p>
    </td>

    <td>
        <textarea name="gre_score" id="gre_score"> <?php echo $row['gre_score']?></textarea>
    </td>

    <td>
        <textarea name="tofel_score" id="tofel_score"><?php echo $row['tofel_score']?></textarea>
    </td>

    <td>
        <textarea name="cat_score" id="cat_score"><?php echo $row['cat_score']?></textarea>
    </td>

    <td>
        <textarea name="gate_score" id="gate_score"><?php echo $row['gate_score']?></textarea>
    </td>
   </tr>
   </table>


   <br>
<p align="center" style="font-size: 20px;">
   <b> If Admitted : </b></p>
   <table border="0" align="center" height="125px%" width="50%" cellspacing="5px">
    <tr>
        <td colspan="2" cellspacing="5px">
            <b>University : </b>
            <input type="text" name="university" value="<?php echo $row['university']?>" style="margin: 15px; width: 87%; height: 50%;" required>
        </td> 
    </tr>
    <tr>
    <td colspan="2" cellspacing="5px">
        <b>Country : </b>
        <input type="text" name="country" value="<?php echo $row['country']?>" style="margin: 15px; width: 87%; height: 50%;" required>
    </td> </tr>
   </table>

     <center><input type="submit" name="submit_feedback"></center>

      </form>
  <?php
          
      }
      ?>
</body>
</html>