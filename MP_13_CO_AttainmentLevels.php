<?php
		session_start();
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms.sql");
	?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CO_AttainmentLevels</title>
  </head>
  <body>
    <form action="" method="POST">
        <p align="left"> <b>  Record the attainment of Course Outcomes of course with respect to set attainment levels </b></p>
        <h3 align="left">Attainment of Lab Outcomes through Internal Assessment:</h3>
        <table
        align="left"
        border="1"
        height="100px"
        width="50%"
        cellspacing="0"
        >
      <tr>
      <th rowspan="3">CO</th>
      <th colspan="4">Direct Tools</th>
      <th>Indirect Tool</th>
      <th rowspan="3">CO Attainment</th>
      </tr>

      <tr>
          <th>Journal <br> (Experiments)</th>
          <th>Assignments</th>
          <th>Course Project</th>
          <th>Quizs</th>
          <th>Course Exit Survey</th>
      </tr>

      <tr>
         <th>A</th>
         <th>B</th>
         <th>C</th>
         <th>D</th>
         <th>E</th>
      </tr>

      <tr>
          <th>CO1</th>
        <td align="center" height="30px" width="10%">
          <input type="text"
            name="n1"
            id="n1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="n2"
            id="n2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="n3"
            id="n3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="n4"
            id="n4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="n5"
            id="n5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="n6"
            id="n6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <th>CO2</th>
        <td align="center" height="30px" width="10%">
          <input type="text"
            name="n1"
            id="n1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="n2"
            id="n2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="n3"
            id="n3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="n4"
            id="n4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="n5"
            id="n5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="n6"
            id="n6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <th>CO3</th>
        <td align="center" height="30px" width="10%">
          <input type="text"
            name="m1"
            id="m1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="m2"
            id="m2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="m3"
            id="m3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="m4"
            id="m4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="m5"
            id="m5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="m6"
            id="m6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <th>CO4</th>
        <td align="center" height="30px" width="10%">
          <input type="text"
            name="a1"
            id="a1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="a2"
            id="a2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="a3"
            id="a3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="a4"
            id="a4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="a5"
            id="a5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="a6"
            id="a6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <th>CO5</th>
        <td align="center" height="30px" width="10%">
          <input type="text"
            name="b1"
            id="b1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="b2"
            id="b2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="b3"
            id="b3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="b4"
            id="b4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="b5"
            id="b5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="b6"
            id="b6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <th>CO6</th>
        <td align="center" height="30px" width="10%">
          <input type="text"
            name="c1"
            id="c1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="c2"
            id="c2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="c3"
            id="c3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="c4"
            id="c4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="c5"
            id="c5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="c6"
            id="c6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <th></th>
        <td align="center" height="30px" width="10%">
          <input type="text"
            name="d1"
            id="d1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="d2"
            id="d2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="d3"
            id="d3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="d4"
            id="d4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="d5"
            id="d5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="d6"
            id="d6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <th></th>
        <td align="center" height="30px" width="10%">
          <input type="text"
            name="e1"
            id="e1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="e2"
            id="e2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="e3"
            id="e3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="e4"
            id="e4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="e5"
            id="e5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="e6"
            id="e6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <th colspan="6">Average</th>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="e7"
            id="e7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>
      <tr>
          <td>
              <input type="submit" name="submit_1" id="submit_1" value="Enter Details">
          </td>
      </tr>
      </table>
</form>
 <?php
    $connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms.sql");
    if(isset($_POST['submit_1'])){
      //  if(!empty($_POST['course_no']) && !empty($_POST['y1']) && !empty($_POST['cc1']) && !empty($_POST['c1']) && !empty($_POST['p1']) && !empty($_POST['cn1']) && !empty($_POST['d1']) && !empty($_POST['de1']) && !empty($_POST['sem']) && !empty($_POST['f1'])){
            
            $query = "INSERT INTO `mp_13_co_attainmentlevels_1`(`n1`, `n2`, `n3`, `n4`, `n5`, `n6`, `nm1`, `nm2`, `nm3`, `nm4`, `nm5`, `nm6`, `m1`, `m2`, `m3`, `m4`, `m5`, `m6`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `b1`, `b2`, `b3`, `b4`, `b5`, `b6`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `d1`, `d2`, `d3`, `d4`, `d5`, `d6`, `e1`, `e2`, `e3`, `e4`, `e5`, `e6`, `e7`) VALUES ('$_POST[n1]','$_POST[n2]','$_POST[n3]','$_POST[n4]','$_POST[n5]','$_POST[n6]','$_POST[nm1]','$_POST[nm2]', '$_POST[nm3]', '$_POST[nm4]', '$_POST[nm5]', '$_POST[nm6]', '$_POST[m1]', '$_POST[m2]', '$_POST[m3]', '$_POST[m4]', '$_POST[m5]', '$_POST[m6]', '$_POST[a1]', '$_POST[a2]', '$_POST[a3]', '$_POST[a4]', '$_POST[a5]', '$_POST[a6]', '$_POST[b1]', '$_POST[b2]', '$_POST[b3]', '$_POST[b4]', '$_POST[b5]', '$_POST[b6]', '$_POST[c1]', '$_POST[c2]', '$_POST[c3]', '$_POST[c4]', '$_POST[c5]', '$_POST[c6]', '$_POST[d1]', '$_POST[d2]', '$_POST[d3]', '$_POST[d4]', '$_POST[d5]', '$_POST[d6]', '$_POST[e1]', '$_POST[e2]', '$_POST[e3]', '$_POST[e4]', '$_POST[e5]', '$_POST[e6]', '$_POST[e7]')";
            $query_run = mysqli_query($connection,$query);
            if($query_run){
                ?>
                <script>
                    alert("Details added successfully!");
                    </script>
                    <?php
            }
            else {
                 ?>
                <script>
                    alert("Details not added!");
                    </script>
                    <?php
            }
    }
?>

        
    <br> <br> <br> <br> <br> <br> <br>
    <form action="" method="POST">
        <table
        align="center"
        border="1"
        height="100px"
        width="40%"
        cellspacing="0"
        >
      <tr>
          <th width="10%">CO1</th>
        <td align="center" height="30px" width="10%">
          <input type="text"
            name="f1"
            id="f1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="f2"
            id="f2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="f3"
            id="f3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="f4"
            id="f4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="f5"
            id="f5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="f6"
            id="f6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="f7"
            id="f7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <th>CO2</th>
        <td align="center" height="30px" width="10%">
          <input type="text"
            name="g1"
            id="g1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="g2"
            id="g2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="g3"
            id="g3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="g4"
            id="g4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="g5"
            id="g5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="g6"
            id="g6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
    
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="g7"
            id="g7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <th>CO3</th>
        <td align="center" height="30px" width="10%">
          <input type="text"
            name="h1"
            id="h1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="h2"
            id="h2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="h3"
            id="h3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="h4"
            id="h4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="h5"
            id="h5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="h6"
            id="h6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="h7"
            id="h7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <th>CO4</th>
        <td align="center" height="30px" width="10%">
          <input type="text"
            name="i1"
            id="i1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="i2"
            id="i2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="i3"
            id="i3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="i4"
            id="i4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="i5"
            id="i5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="i6"
            id="i6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="i7"
            id="i7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <th>CO5</th>
        <td align="center" height="30px" width="10%">
          <input type="text"
            name="j1"
            id="j1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="j2"
            id="j2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="j3"
            id="j3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="j4"
            id="j4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="j5"
            id="j5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="j6"
            id="j6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="j7"
            id="j7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           
      </tr>

      <tr>
          <th>CO6</th>
        <td align="center" height="30px" width="10%">
          <input type="text"
            name="k1"
            id="k1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="k2"
            id="k2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="k3"
            id="k3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="k4"
            id="k4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="k5"
            id="k5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="k6"
            id="k6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="k7"
            id="k7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>
    <tr>
          <td>
              <input type="submit" name="submit_2" id="submit_2" value="Enter Details">
          </td>
      </tr>
      </table>
</form>
 <?php
    $connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms.sql");
    if(isset($_POST['submit_2'])){
      //  if(!empty($_POST['course_no']) && !empty($_POST['y1']) && !empty($_POST['cc1']) && !empty($_POST['c1']) && !empty($_POST['p1']) && !empty($_POST['cn1']) && !empty($_POST['d1']) && !empty($_POST['de1']) && !empty($_POST['sem']) && !empty($_POST['f1'])){
            
            $query = "INSERT INTO `mp_13_co_attainmentlevels_2`(`f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `g1`, `g2`, `g3`, `g4`, `g5`, `g6`, `g7`, `h1`, `h2`, `h3`, `h4`, `h5`, `h6`, `h7`, `i1`, `i2`, `i3`, `i4`, `i5`, `i6`, `i7`, `j1`, `j2`, `j3`, `j4`, `j5`, `j6`, `j7`, `k1`, `k2`, `k3`, `k4`, `k5`, `k6`, `k7`) VALUES ('$_POST[f1]', '$_POST[f2]', '$_POST[f3]', '$_POST[f4]', '$_POST[f5]', '$_POST[f6]', '$_POST[f7]', '$_POST[g1]', '$_POST[g2]', '$_POST[g3]', '$_POST[g4]', '$_POST[g5]', '$_POST[g7]', '$_POST[h1]', '$_POST[h2]', '$_POST[h3]', '$_POST[h4]', '$_POST[h5]', '$_POST[h6]', '$_POST[h7]', '$_POST[i1]', '$_POST[i2]', '$_POST[i3]', '$_POST[i4]', '$_POST[i5]', '$_POST[i6]', '$_POST[i7]', '$_POST[j1]', '$_POST[j2]', '$_POST[j3]', '$_POST[j4]', '$_POST[j5]', '$_POST[j6]', '$_POST[j7]', '$_POST[k1]', '$_POST[k2]', '$_POST[k3]', '$_POST[k4]', '$_POST[k5]', '$_POST[k6]', '$_POST[k7]')";
            $query_run = mysqli_query($connection,$query);
            if($query_run){
                ?>
                <script>
                    alert("Details added successfully!");
                    </script>
                    <?php
            }
            else {
                 ?>
                <script>
                    alert("Details not added!");
                    </script>
                    <?php
            }
    }
?>

    <br> <br> <br> <br> <br> <br> <br>
<p><b>Course Contribution to Course Outcome: </b></p>
<form action="" method="POST">
<table
      align="left"
      border="1"
      height="100px"
      width="95%"
      cellspacing="0"
    >
<tr>
    <th>Course Outcomes</th>
    <th>Target Level</th>
    <th>Attainment through University Examination X1</th>
    <th>Attainment through Term Work (X2)</th>
    <th>Attainment through Internal Assessment (X3)</th>
    <th>Average of X2 and X3 (Internal Assessment)  X4</th>
    <th>Overall Attainment (0.8X1+0.2X4)</th>
</tr>
<tr>
          <th>CO1</th>
        <td align="center" height="30px" width="10%">
          <input type="text"
            name="l1"
            id="l1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="l2"
            id="l2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="l3"
            id="l3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="l4"
            id="l4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="l5"
            id="l5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="l6"
            id="l6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <th>CO2</th>
        <td align="center" height="30px" width="10%">
          <input type="text"
            name="p1"
            id="p1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="p2"
            id="p2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="p3"
            id="p3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="p4"
            id="p4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="p5"
            id="p5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="p6"
            id="p6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <th>CO3</th>
        <td align="center" height="30px" width="10%">
          <input type="text"
            name="q1"
            id="q1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="q2"
            id="q2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="q3"
            id="q3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="q4"
            id="q4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="q5"
            id="q5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="q6"
            id="q6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <th>CO4</th>
        <td align="center" height="30px" width="10%">
          <input type="text"
            name="r1"
            id="r1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="r2"
            id="r2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="r3"
            id="r3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="r4"
            id="r4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="r5"
            id="r5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="r6"
            id="r6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <th>CO5</th>
        <td align="center" height="30px" width="10%">
          <input type="text"
            name="s1"
            id="s1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="s2"
            id="s2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="s3"
            id="s3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="s4"
            id="s4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="s5"
            id="s5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="s6"
            id="s6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <th>CO6</th>
        <td align="center" height="30px" width="10%">
          <input type="text"
            name="t1"
            id="t1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="t2"
            id="t2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="t3"
            id="t3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="t4"
            id="t4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="t5"
            id="t5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="t6"
            id="t6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

            <tr>
          <th>CO7</th>
        <td align="center" height="30px" width="10%">
          <input type="text"
            name="u1"
            id="u1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="u2"
            id="u2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="u3"
            id="u3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="u4"
            id="u4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="u5"
            id="u5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="u6"
            id="u6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <th>CO8</th>
        <td align="center" height="30px" width="10%">
          <input type="text"
            name="v1"
            id="v1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="v2"
            id="v2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="v3"
            id="v3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="v4"
            id="v4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="v5"
            id="v5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="v6"
            id="v6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>
       <tr>
          <td>
              <input type="submit" name="submit_3" id="submit_3" value="Enter Details">
          </td>
      </tr>
      </table>
</form>
 <?php
    $connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms.sql");
    if(isset($_POST['submit_3'])){
      //  if(!empty($_POST['course_no']) && !empty($_POST['y1']) && !empty($_POST['cc1']) && !empty($_POST['c1']) && !empty($_POST['p1']) && !empty($_POST['cn1']) && !empty($_POST['d1']) && !empty($_POST['de1']) && !empty($_POST['sem']) && !empty($_POST['f1'])){
            
            $query = "INSERT INTO `mp_13_co_attainmentlevels_3` (`l1`, `l2`, `l3`, `l4`, `l5`, `l6`, `l7`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `t1`, `t2`, `t3`, `t4`, `t5`, `t6`, `u1`, `u2`, `u3`, `u4`, `u5`, `u6`, `v1`, `v2`, `v3`, `v4`, `v5`, `v6`) VALUES ('$_POST[l1]', '$_POST[l2]', '$_POST[l3]', '$_POST[l4]', '$_POST[l5]', '$_POST[l6]', '$_POST[l7]', '$_POST[p1]', '$_POST[p2]', '$_POST[p3]', '$_POST[p4]', '$_POST[p5]', '$_POST[p6]', '$_POST[q1]', '$_POST[q2]', '$_POST[q3]', '$_POST[q4]', '$_POST[q5]', '$_POST[q6]', '$_POST[r1]', '$_POST[r2]', '$_POST[r3]', '$_POST[r4]', '$_POST[r5]', '$_POST[r6]', '$_POST[s1]', '$_POST[s2]', '$_POST[s3]', '$_POST[s4]', '$_POST[s5]', '$_POST[s6]', '$_POST[t1]', '$_POST[t2]', '$_POST[t3]', '$_POST[t4]', '$_POST[t5]', '$_POST[t6]', '$_POST[u1]', '$_POST[u2]', '$_POST[u3]', '$_POST[u4]', '$_POST[u5]', '$_POST[u6]', '$_POST[v1]', '$_POST[v2]', '$_POST[v3]', '$_POST[v4]', '$_POST[v5]', '$_POST[v6]')";
            $query_run = mysqli_query($connection,$query);
            if($query_run){
                ?>
                <script>
                    alert("Details added successfully!");
                    </script>
                    <?php
            }
            else {
                 ?>
                <script>
                    alert("Details not added!");
                    </script>
                    <?php
            }
    }
?>

  </body>
</html>
