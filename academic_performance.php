<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P.2.ACADEMIC PERFORMANCE</title>

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

    <h1>Mentee's Academic Performance</h1>

</head>
<body>

  <?php

    $r_no = (isset($_GET['r_no']) ? $_GET['r_no'] : '');
    
    $query= 'SELECT * from academic_performance WHERE r_no='.$r_no;
    $query_run = mysqli_query($connection,$query);
    
    while ($row = mysqli_fetch_assoc($query_run)) 
  {
      ?>

        <center><h1><b><?php 
                            echo "Roll number:". $_GET['r_no'];
                    ?></b></h1></center>
      
    
    


      <form action=" " method="POST">
 
                    <input type="text" name="r_no" value="<?php echo $r_no ?>" hidden>
    <table align="center" border="1" height="700px" width="70%" cellspacing="0">
      <tr>
          <td align="center" height="50px" width="10%" style="font-size: 18px;">
              <b>Semester</b>
          </td>

          <td align="center" height="50px" width="10%" style="font-size: 18px;">
            <b>Subjet</b>
        </td>

        <td align="center" height="50px" width="10%" colspan="2" style="font-size: 18px;">
            <b>IA1</b>
        </td>

        <td align="center" height="50px" width="10%" colspan="2" style="font-size: 18px;">
            <b>IA2</b>
        </td>

        <td align="center" height="50px" width="15%" colspan="2" style="font-size: 18px;">
            <b>Prelim</b>
        </td>

        <td align="center" height="50px" width="15%" colspan="2" style="font-size: 18px;">
            <b>End semester
                Exam (SGPI)</b>
        </td>

      </tr>

      <tr>
          <td align="center" rowspan="2" width="10%">
              <b>I</b>
          
          <td align="center" height="25px" rowspan="1" width="10%">
              <b>Performance</b>
          </td>

          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
            C  <input type="radio" name="sem1_ia1" value="c" 

              <?php 
                if ($row['placement']=="c") {
                  echo "checked";
                }
              ?>  
            > 


        </td>

        <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
            N/C  <input type="radio" name="sem1_ia1" value="nc" 

            <?php 
                if ($row['placement']=="nc") {
                  echo "checked";
                }
              ?>
              >
        </td>


        <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
            C  <input type="radio" name="sem1_ia2" value="c" 

            <?php 
                if ($row['placement']=="c") {
                  echo "checked";
                }
              ?>

            > 
        </td>

        <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
            N/C  <input type="radio" name="sem1_ia2" value="nc" 

            <?php 
                if ($row['placement']=="nc") {
                  echo "checked";
                }
              ?>
              >
        </td>

        <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
            C  <input type="radio" name="sem1_prelim1" value="c"  
            <?php 
                if ($row['placement']=="c") {
                  echo "checked";
                }
              ?>
              > 
        </td>

        <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
            N/C  <input type="radio" name="sem1_prelim1" value="nc" 

            <?php 
                if ($row['placement']=="nc") {
                  echo "checked";
                }
              ?>
              >
        </td>

        <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
            C  <input type="radio" name="sem1_endSemExam1" value="c" 

            <?php 
                if ($row['placement']=="c") {
                  echo "checked";
                }
              ?>
              > 
        </td>

        <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
            N/C  <input type="radio" name="sem1_endSemExam1" value="nc" 

            <?php 
                if ($row['placement']=="nc") {
                  echo "checked";
                }
              ?>
              >
        </td>

        </td>
        </tr>

        <tr>
            <td align="center" height="25px" rowspan="1" width="10%">
                <b>Remarks</b>
            </td>

            <td align="center" height="25px" rowspan="1" colspan="2" width="10%">
                <textarea name="sem1_ia1_remark" id="sem1_ia1_remark" style="margin: 0px; width: 98%; height: 80%;"><?php echo $row['sem1_prof_soc']?></textarea>
            </td>

            <td align="center" height="25px" rowspan="1" colspan="2" width="10%">
                <textarea name="sem1_ia2_remark" id="sem1_ia2_remark" style="margin: 0px; width: 98%; height: 80%;"><?php echo $row['sem1_ia2_remark']?></textarea>
            </td>

            <td align="center" height="25px" rowspan="1" colspan="2" width="10%">
                <textarea name="sem1_prelim_remark" id="sem1_prelim_remark" style="margin: 0px; width: 98%; height: 80%;"><?php echo $row['sem1_prelim_remark']?></textarea>
            </td>

            <td align="center" height="25px" rowspan="1" colspan="2" width="10%">
                <textarea name="sem1_end_sem_remark" id="sem1_end_sem_remark" style="margin: 0px; width: 98%; height: 80%;"><?php echo $row['sem1_end_sem_remark']?></textarea>
            </td>
   
        </tr>

        <tr>
            <td align="center" rowspan="2" width="10%">
                <b>II</b>
            
            <td align="center" height="25px" rowspan="1" width="10%">
                <b>Performance</b>
            </td>
  
            <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              C  <input type="radio" name="sem2_ia1" value="c" 

              <?php 
                if ($row['placement']=="c") {
                  echo "checked";
                }
              ?>
              > 
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              N/C  <input type="radio" name="sem2_ia1" value="nc" 

              <?php 
                if ($row['placement']=="nc") {
                  echo "checked";
                }
              ?>
              >
          </td>
  
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              C  <input type="radio" name="sem2_ia2" value="c" 

              <?php 
                if ($row['placement']=="c") {
                  echo "checked";
                }
              ?>
              > 
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              N/C  <input type="radio" name="sem2_ia2" value="nc" 

              <?php 
                if ($row['placement']=="nc") {
                  echo "checked";
                }
              ?>
              >
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              C  <input type="radio" name="sem2_prelim2" value="c" 

              <?php 
                if ($row['placement']=="c") {
                  echo "checked";
                }
              ?>
              > 
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              N/C  <input type="radio" name="sem2_prelim2" value="nc" 

              <?php 
                if ($row['placement']=="nc") {
                  echo "checked";
                }
              ?>
              >
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              C  <input type="radio" name="sem2_endSemExam2" value="c" 

              <?php 
                if ($row['placement']=="c") {
                  echo "checked";
                }
              ?>
              > 
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              N/C  <input type="radio" name="sem2_endSemExam2" value="nc" 

              <?php 
                if ($row['placement']=="nc") {
                  echo "checked";
                }
              ?>
              >
          </td>
  
          </td>
          </tr>
  
          <tr>
              <td align="center" height="25px" rowspan="1" width="10%">
                  <b>Remarks</b>
              </td>
  
              <td align="center" height="25px" rowspan="1" colspan="2" width="10%">
                  <textarea name="sem2_ia1_remark" id="sem2_ia1_remark"style="margin: 0px; width: 98%; height: 80%;"><?php echo $row['sem2_ia1_remark']?></textarea>
              </td>
  
              <td align="center" height="25px" rowspan="1" colspan="2" width="10%">
                  <textarea name="sem2_ia2_remark" id="sem2_ia2_remark" style="margin: 0px; width: 98%; height: 80%;"><?php echo $row['sem2_ia2_remark']?></textarea>
              </td>
  
              <td align="center" height="25px" rowspan="1" colspan="2" width="10%">
                  <textarea name="sem2_prelim_remark" id="sem2_prelim_remark" style="margin: 0px; width: 98%; height: 80%;" ><?php echo $row['sem2_prelim_remark']?></textarea>
              </td>
  
              <td align="center" height="25px" rowspan="1" colspan="2" width="10%">
                  <textarea name="sem2_end_sem_remark" id="sem2_end_sem_remark" style="margin: 0px; width: 98%; height: 80%;"><?php echo $row['sem2_end_sem_remark']?></textarea>
              </td>
     
          </tr>

          <tr>
            <td align="center" rowspan="2" width="10%">
                <b>III</b>
            
            <td align="center" height="25px" rowspan="1" width="10%">
                <b>Performance</b>
            </td>
  
            <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              C  <input type="radio" name="sem3_ia1" value="c" 

              <?php 
                if ($row['placement']=="c") {
                  echo "checked";
                }
              ?>
              > 
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              N/C  <input type="radio" name="sem3_ia1" value="nc" 

              <?php 
                if ($row['placement']=="nc") {
                  echo "checked";
                }
              ?>
              >
          </td>
  
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              C  <input type="radio" name="sem3_ia2" value="c" 

              <?php 
                if ($row['placement']=="c") {
                  echo "checked";
                }
              ?>
              > 
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              N/C  <input type="radio" name="sem3_ia2" value="nc" 

              <?php 
                if ($row['placement']=="nc") {
                  echo "checked";
                }
              ?>
              >
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              C  <input type="radio" name="sem3_prelim3" value="c" 

              <?php 
                if ($row['placement']=="c") {
                  echo "checked";
                }
              ?>
              > 
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              N/C  <input type="radio" name="sem3_prelim3" value="nc" 

              <?php 
                if ($row['placement']=="nc") {
                  echo "checked";
                }
              ?>
              >
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              C  <input type="radio" name="sem3_endSemExam3" value="c" 

              <?php 
                if ($row['placement']=="c") {
                  echo "checked";
                }
              ?>
              > 
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              N/C  <input type="radio" name="sem3_endSemExam3" value="nc" 

              <?php 
                if ($row['placement']=="nc") {
                  echo "checked";
                }
              ?>
              >
          </td>
  
          </td>
          </tr>
  
          <tr>
              <td align="center" height="25px" rowspan="1" width="10%">
                  <b>Remarks</b>
              </td>
  
              <td align="center" height="25px" rowspan="1" colspan="2" width="10%">
                  <textarea name="sem3_ia1_remark" id="sem3_ia1_remark"style="margin: 0px; width: 98%; height: 80%;"><?php echo $row['sem3_ia1_remark']?></textarea>
              </td>
  
              <td align="center" height="25px" rowspan="1" colspan="2" width="10%">
                  <textarea name="sem3_ia2_remark" id="sem3_ia2_remark" style="margin: 0px; width: 98%; height: 80%;"><?php echo $row['sem3_ia2_remark']?></textarea>
              </td>
  
              <td align="center" height="25px" rowspan="1" colspan="2" width="10%">
                  <textarea name="sem3_prelim_remark" id="sem3_prelim_remark" style="margin: 0px; width: 98%; height: 80%;" ><?php echo $row['sem3_prelim_remark']?></textarea>
              </td>
  
              <td align="center" height="25px" rowspan="1" colspan="2" width="10%">
                  <textarea name="sem3_end_sem_remark" id="sem3_end_sem_remark" style="margin: 0px; width: 98%; height: 80%;"><?php echo $row['sem3_end_sem_remark']?></textarea>
              </td>
     
          </tr>

          <tr>
            <td align="center" rowspan="2" width="10%">
                <b>IV</b>
            
            <td align="center" height="25px" rowspan="1" width="10%">
                <b>Performance</b>
            </td>
  
            <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              C  <input type="radio" name="sem4_ia1" value="c" 

              <?php 
                if ($row['placement']=="c") {
                  echo "checked";
                }
              ?>
              > 
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              N/C  <input type="radio" name="sem4_ia1" value="nc" 

              <?php 
                if ($row['placement']=="nc") {
                  echo "checked";
                }
              ?>
              >
          </td>
  
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              C  <input type="radio" name="sem4_ia2" value="c" 

              <?php 
                if ($row['placement']=="c") {
                  echo "checked";
                }
              ?>
              > 
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              N/C  <input type="radio" name="sem4_ia2" value="nc" 

              <?php 
                if ($row['placement']=="nc") {
                  echo "checked";
                }
              ?>
              >
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              C  <input type="radio" name="sem4_prelim4" value="c" 

              <?php 
                if ($row['placement']=="c") {
                  echo "checked";
                }
              ?>
              > 
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              N/C  <input type="radio" name="sem4_prelim4" value="nc" 

              <?php 
                if ($row['placement']=="nc") {
                  echo "checked";
                }
              ?>
              >
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              C  <input type="radio" name="sem4_endSemExam4" value="c" 

              <?php 
                if ($row['placement']=="c") {
                  echo "checked";
                }
              ?>
              > 
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              N/C  <input type="radio" name="sem4_endSemExam4" value="nc" 

              <?php 
                if ($row['placement']=="nc") {
                  echo "checked";
                }
              ?>
              >
          </td>
  
          </td>
          </tr>
  
          <tr>
              <td align="center" height="25px" rowspan="1" width="10%">
                  <b>Remarks</b>
              </td>
  
              <td align="center" height="25px" rowspan="1" colspan="2" width="10%">
                  <textarea name="sem4_ia1_remark" id="sem4_ia1_remark"style="margin: 0px; width: 98%; height: 80%;"><?php echo $row['sem4_ia1_remark']?></textarea>
              </td>
  
              <td align="center" height="25px" rowspan="1" colspan="2" width="10%">
                  <textarea name="sem4_ia2_remark" id="sem4_ia2_remark" style="margin: 0px; width: 98%; height: 80%;"><?php echo $row['sem4_ia2_remark']?></textarea>
              </td>
  
              <td align="center" height="25px" rowspan="1" colspan="2" width="10%">
                  <textarea name="sem4_prelim_remark" id="sem4_prelim_remark" style="margin: 0px; width: 98%; height: 80%;" ><?php echo $row['sem4_prelim_remark']?></textarea>
              </td>
  
              <td align="center" height="25px" rowspan="1" colspan="2" width="10%">
                  <textarea name="sem4_end_sem_remark" id="sem4_end_sem_remark" style="margin: 0px; width: 98%; height: 80%;"><?php echo $row['sem4_end_sem_remark']?></textarea>
              </td>
     
          </tr>

          <tr>
            <td align="center" rowspan="2" width="10%">
                <b>V</b>
            
            <td align="center" height="25px" rowspan="1" width="10%">
                <b>Performance</b>
            </td>
  
            <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              C  <input type="radio" name="sem5_ia1" value="c" 

              <?php 
                if ($row['placement']=="c") {
                  echo "checked";
                }
              ?>
              > 
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              N/C  <input type="radio" name="sem5_ia1" value="nc" 

              <?php 
                if ($row['placement']=="nc") {
                  echo "checked";
                }
              ?>
              >
          </td>
  
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              C  <input type="radio" name="sem5_ia2" value="c" 

              <?php 
                if ($row['placement']=="c") {
                  echo "checked";
                }
              ?>
              > 
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              N/C  <input type="radio" name="sem5_ia2" value="nc" 

              <?php 
                if ($row['placement']=="nc") {
                  echo "checked";
                }
              ?>
              >
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              C  <input type="radio" name="sem5_prelim5" value="c" 

              <?php 
                if ($row['placement']=="c") {
                  echo "checked";
                }
              ?>
              > 
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              N/C  <input type="radio" name="sem5_prelim5" value="nc" 

              <?php 
                if ($row['placement']=="nc") {
                  echo "checked";
                }
              ?>
              >
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              C  <input type="radio" name="sem5_endSemExam5" value="c"  

              <?php 
                if ($row['placement']=="c") {
                  echo "checked";
                }
              ?>
              > 
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              N/C  <input type="radio" name="sem5_endSemExam5" value="nc" 

              <?php 
                if ($row['placement']=="nc") {
                  echo "checked";
                }
              ?>
              >
          </td>
  
          </td>
          </tr>
  
          <tr>
              <td align="center" height="25px" rowspan="1" width="10%">
                  <b>Remarks</b>
              </td>
  
              <td align="center" height="25px" rowspan="1" colspan="2" width="10%">
                  <textarea name="sem5_ia1_remark" id="sem5_ia1_remark"style="margin: 0px; width: 98%; height: 80%;"><?php echo $row['sem5_ia1_remark']?></textarea>
              </td>
  
              <td align="center" height="25px" rowspan="1" colspan="2" width="10%">
                  <textarea name="sem5_ia2_remark" id="sem5_ia2_remark" style="margin: 0px; width: 98%; height: 80%;"><?php echo $row['sem5_ia2_remark']?></textarea>
              </td>
  
              <td align="center" height="25px" rowspan="1" colspan="2" width="10%">
                  <textarea name="sem5_prelim_remark" id="sem5_prelim_remark" style="margin: 0px; width: 98%; height: 80%;" ><?php echo $row['sem5_prelim_remark']?></textarea>
              </td>
  
              <td align="center" height="25px" rowspan="1" colspan="2" width="10%">
                  <textarea name="sem5_end_sem_remark" id="sem5_end_sem_remark" style="margin: 0px; width: 98%; height: 80%;"><?php echo $row['sem5_end_sem_remark']?></textarea>
              </td>
     
          </tr>

          <tr>
            <td align="center" rowspan="2" width="10%">
                <b>VI</b>
            
            <td align="center" height="25px" rowspan="1" width="10%">
                <b>Performance</b>
            </td>
  
            <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              C  <input type="radio" name="sem6_ia1" value="c" 

              <?php 
                if ($row['placement']=="c") {
                  echo "checked";
                }
              ?>
              > 
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              N/C  <input type="radio" name="sem6_ia1" value="nc" 

              <?php 
                if ($row['placement']=="nc") {
                  echo "checked";
                }
              ?>
              >
          </td>
  
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              C  <input type="radio" name="sem6_ia2" value="c" 

              <?php 
                if ($row['placement']=="c") {
                  echo "checked";
                }
              ?>
              > 
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              N/C  <input type="radio" name="sem6_ia2" value="nc" 

              <?php 
                if ($row['placement']=="nc") {
                  echo "checked";
                }
              ?>
              >
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              C  <input type="radio" name="sem6_prelim6" value="c" 

              <?php 
                if ($row['placement']=="c") {
                  echo "checked";
                }
              ?>
              > 
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              N/C  <input type="radio" name="sem6_prelim6" value="nc" 

              <?php 
                if ($row['placement']=="nc") {
                  echo "checked";
                }
              ?>
              >
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              C  <input type="radio" name="sem6_endSemExam6" value="c" 

              <?php 
                if ($row['placement']=="c") {
                  echo "checked";
                }
              ?>
              > 
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              N/C  <input type="radio" name="sem6_endSemExam6" value="nc" 

              <?php 
                if ($row['placement']=="nc") {
                  echo "checked";
                }
              ?>
              >
          </td>
  
          </td>
          </tr>
  
          <tr>
              <td align="center" height="25px" rowspan="1" width="10%">
                  <b>Remarks</b>
              </td>
  
              <td align="center" height="25px" rowspan="1" colspan="2" width="10%">
                  <textarea name="sem6_ia1_remark" id="sem6_ia1_remark"style="margin: 0px; width: 98%; height: 80%;"><?php echo $row['sem6_ia1_remark']?></textarea>
              </td>
  
              <td align="center" height="25px" rowspan="1" colspan="2" width="10%">
                  <textarea name="sem6_ia2_remark" id="sem6_ia2_remark" style="margin: 0px; width: 98%; height: 80%;"><?php echo $row['sem6_ia2_remark']?></textarea>
              </td>
  
              <td align="center" height="25px" rowspan="1" colspan="2" width="10%">
                  <textarea name="sem6_prelim_remark" id="sem6_prelim_remark" style="margin: 0px; width: 98%; height: 80%;" ><?php echo $row['sem6_prelim_remark']?></textarea>
              </td>
  
              <td align="center" height="25px" rowspan="1" colspan="2" width="10%">
                  <textarea name="sem6_end_exam_remark" id="sem6_end_exam_remark" style="margin: 0px; width: 98%; height: 80%;"><?php echo $row['sem6_end_exam_remark']?></textarea>
              </td>
     
          </tr>

          <tr>
            <td align="center" rowspan="2" width="10%">
                <b>VII</b>
            
            <td align="center" height="25px" rowspan="1" width="10%">
                <b>Performance</b>
            </td>
  
            <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              C  <input type="radio" name="sem7_ia1" value="c" 

              <?php 
                if ($row['placement']=="c") {
                  echo "checked";
                }
              ?>
              > 
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              N/C  <input type="radio" name="sem7_ia1" value="nc" 

              <?php 
                if ($row['placement']=="nc") {
                  echo "checked";
                }
              ?>
              >
          </td>
  
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              C  <input type="radio" name="sem7_ia2" value="c" 

              <?php 
                if ($row['placement']=="c") {
                  echo "checked";
                }
              ?>
              > 
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              N/C  <input type="radio" name="sem7_ia2" value="nc" 

              <?php 
                if ($row['placement']=="nc") {
                  echo "checked";
                }
              ?>
              >
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              C  <input type="radio" name="sem7_prelim7" value="c" 

              <?php 
                if ($row['placement']=="c") {
                  echo "checked";
                }
              ?>
              > 
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              N/C  <input type="radio" name="sem7_prelim7" value="nc" 

              <?php 
                if ($row['placement']=="nc") {
                  echo "checked";
                }
              ?>
              >
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              C  <input type="radio" name="sem7_endSemExam7" value="c" 

              <?php 
                if ($row['placement']=="c") {
                  echo "checked";
                }
              ?>
              > 
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              N/C  <input type="radio" name="sem7_endSemExam7" value="nc" 

              <?php 
                if ($row['placement']=="nc") {
                  echo "checked";
                }
              ?>
              >
          </td>
  
          </td>
          </tr>
  
          <tr>
              <td align="center" height="25px" rowspan="1" width="10%">
                  <b>Remarks</b>
              </td>
  
              <td align="center" height="25px" rowspan="1" colspan="2" width="10%">
                  <textarea name="sem7_ia1_remark" id="sem7_ia1_remark"style="margin: 0px; width: 98%; height: 80%;"><?php echo $row['sem7_ia1_remark']?></textarea>
              </td>
  
              <td align="center" height="25px" rowspan="1" colspan="2" width="10%">
                  <textarea name="sem7_ia2_remark" id="sem7_ia2_remark" style="margin: 0px; width: 98%; height: 80%;"><?php echo $row['sem7_ia2_remark']?></textarea>
              </td>
  
              <td align="center" height="25px" rowspan="1" colspan="2" width="10%">
                  <textarea name="sem7_prelim_remark" id="sem7_prelim_remark" style="margin: 0px; width: 98%; height: 80%;" ><?php echo $row['sem7_prelim_remark']?></textarea>
              </td>
  
              <td align="center" height="25px" rowspan="1" colspan="2" width="10%">
                  <textarea name="sem7_end_sem_remark" id="sem7_end_sem_remark" style="margin: 0px; width: 98%; height: 80%;"><?php echo $row['sem7_end_sem_remark']?></textarea>
              </td>
     
          </tr>

          <tr>
            <td align="center" rowspan="2" width="10%">
                <b>VIII</b>
            
            <td align="center" height="25px" rowspan="1" width="10%">
                <b>Performance</b>
            </td>
  
            <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              C  <input type="radio" name="sem8_ia1" value="c" 

              <?php 
                if ($row['placement']=="c") {
                  echo "checked";
                }
              ?>
              > 
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              N/C  <input type="radio" name="sem8_ia1" value="nc" 

              <?php 
                if ($row['placement']=="nc") {
                  echo "checked";
                }
              ?>
              >
          </td>
  
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              C  <input type="radio" name="sem8_ia2" value="c" 

              <?php 
                if ($row['placement']=="c") {
                  echo "checked";
                }
              ?>
              > 
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              N/C  <input type="radio" name="sem8_ia2" value="nc" 

              <?php 
                if ($row['placement']=="nc") {
                  echo "checked";
                }
              ?>
              >
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              C  <input type="radio" name="sem8_prelim8" value="c" 

              <?php 
                if ($row['placement']=="c") {
                  echo "checked";
                }
              ?>
              > 
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              N/C  <input type="radio" name="sem8_prelim8" value="nc" 

              <?php 
                if ($row['placement']=="nc") {
                  echo "checked";
                }
              ?>
              >
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              C  <input type="radio" name="sem8_endSemExam8" value="c" 

              <?php 
                if ($row['placement']=="c") {
                  echo "checked";
                }
              ?>
              > 
          </td>
  
          <td align="center" height="25px" rowspan="1" colspan="1" width="10%">
              N/C  <input type="radio" name="sem8_endSemExam8" value="nc" 

              <?php 
                if ($row['placement']=="nc") {
                  echo "checked";
                }
              ?>
              >
          </td>
  
          </td>
          </tr>
  
          <tr>
              <td align="center" height="25px" rowspan="1" width="10%">
                  <b>Remarks</b>
              </td>
  
              <td align="center" height="25px" rowspan="1" colspan="2" width="10%">
                  <textarea name="sem8_ia1_remark" id="sem8_ia1_remark"style="margin: 0px; width: 98%; height: 80%;"><?php echo $row['sem8_ia1_remark']?></textarea>
              </td>
  
              <td align="center" height="25px" rowspan="1" colspan="2" width="10%">
                  <textarea name="sem8_ia2_remark" id="sem8_ia2_remark" style="margin: 0px; width: 98%; height: 80%;"><?php echo $row['sem8_ia2_remark']?></textarea>
              </td>
  
              <td align="center" height="25px" rowspan="1" colspan="2" width="10%">
                  <textarea name="sem8_prelim_remark" id="sem8_prelim_remark" style="margin: 0px; width: 98%; height: 80%;" ><?php echo $row['sem8_prelim_remark']?></textarea>
              </td>
  
              <td align="center" height="25px" rowspan="1" colspan="2" width="10%">
                  <textarea name="sem8_end_sem_remark" id="sem8_end_sem_remark" style="margin: 0px; width: 98%; height: 80%;"><?php echo $row['sem8_end_sem_remark']?></textarea>
              </td>
     
          </tr>
     
          </tr>
          </table>

          <br>
         
        <center><input type="submit" name="submit_feedback"></center>

      </form>
  <?php
          
      }
      ?>
            
        <br><br>
        <b>NOTE:</b>
        <p> 1. C - Cleared, write percentage or SGPI in Remarks.
            <br>
            2. N/C - write subjects not cleared in Remarks.
           <br>
            3. If students cleared subjects in next academic year kindly circle “N/C” and click On “C”</p>
          </body>
          </html>