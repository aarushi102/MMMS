<?php
		session_start();
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms.sql");
	?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Matrices</title>
</head>
<body>
    <h2 align = "center">CO-PO matrices of courses</h2>

    <form action="" method="POST">
        <table align="center" border="1" height="100px" width="70%" cellspacing="0">
            <!-- <colgroup span = "16"></colgroup> -->
            <tr>
                <th colspan = "17">Program Outcomes</th> 
            </tr>
            <tr>
                <th rowspan ="9">COurse Outcomes</th>
                <th>  </th>
                
                <th> PO-1</th>
                <th>PO-2</th>
                <th>PO-3</th>
                <th>PO-4</th>
                <th>PO-5</th>
                <th>PO-6</th>
                <th>PO-7</th>
                <th>PO-8</th>
                <th>PO-9</th>
                <th>PO-10</th>
                <th>PO-11</th>
                <th>PO-12</th>
                <th>PSO-1</th>
                <th>PSO-2</th>
                <th>PSO-3</th>
                <th>PSO-4</th>
            </tr>

            <tr>
                <td>CO1</td>
                <td><input type="text" name="CO1_PO1" id="CO1_PO1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO1_PO2" id="CO1_PO2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO1_PO3" id="CO1_PO3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO1_PO4" id="CO1_PO4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO1_PO5" id="CO1_PO5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO1_PO6" id="CO1_PO6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO1_PO7" id="CO1_PO7" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO1_PO8" id="CO1_PO8" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO1_PO9" id="CO1_PO9" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO1_PO10" id="CO1_PO10" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO1_PO11" id="CO1_PO11" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO1_PO12" id="CO1_PO12" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO1_PSO1" id="CO1_PSO1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO1_PSO2" id="CO1_PSO2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO1_PSO3" id="CO1_PSO3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO1_PSO4" id="CO1_PSO4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            </tr>

            <tr>
                <td>CO2</td>
                <td><input type="text" name="CO2_PO1" id="CO2_PO1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO2_PO2" id="CO2_PO2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO2_PO3" id="CO2_PO3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO2_PO4" id="CO2_PO4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO2_PO5" id="CO2_PO5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO2_PO6" id="CO2_PO6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO2_PO7" id="CO2_PO7" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO2_PO8" id="CO2_PO8" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO2_PO9" id="CO2_PO9" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO2_PO10" id="CO2_PO10" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO2_PO11" id="CO2_PO11" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO2_PO12" id="CO2_PO12" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO2_PSO1" id="CO2_PSO1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO2_PSO2" id="CO2_PSO2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO2_PSO3" id="CO2_PSO3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO2_PSO4" id="CO2_PSO4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            </tr>

            <tr>
                <td>CO3</td>
                <td><input type="text" name="CO3_PO1" id="CO3_PO1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO3_PO2" id="CO3_PO2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO3_PO3" id="CO3_PO3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO3_PO4" id="CO3_PO4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO3_PO5" id="CO3_PO5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO3_PO6" id="CO3_PO6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO3_PO7" id="CO3_PO7" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO3_PO8" id="CO3_PO8" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO3_PO9" id="CO3_PO9" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO3_PO10" id="CO3_PO10" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO3_PO11" id="CO3_PO11" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO3_PO12" id="CO3_PO12" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO3_PSO1" id="CO3_PSO1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO3_PSO2" id="CO3_PSO2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO3_PSO3" id="CO3_PSO3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO3_PSO4" id="CO3_PSO4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            </tr>

            <tr>
                <td>CO4</td>
                <td><input type="text" name="CO4_PO1" id="CO4_PO1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO4_PO2" id="CO4_PO2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO4_PO3" id="CO4_PO3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO4_PO4" id="CO4_PO4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO4_PO5" id="CO4_PO5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO4_PO6" id="CO4_PO6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO4_PO7" id="CO4_PO7" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO4_PO8" id="CO4_PO8" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO4_PO9" id="CO4_PO9" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO4_PO10" id="CO4_PO10" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO4_PO11" id="CO4_PO11" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO4_PO12" id="CO4_PO12" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO4_PSO1" id="CO4_PSO1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO4_PSO2" id="CO4_PSO2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO4_PSO3" id="CO4_PSO3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO4_PSO4" id="CO4_PSO4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            </tr>

            <tr>
                <td>CO5</td>
                <td><input type="text" name="CO5_PO1" id="CO5_PO1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO5_PO2" id="CO5_PO2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO5_PO3" id="CO5_PO3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO5_PO4" id="CO5_PO4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO5_PO5" id="CO5_PO5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO5_PO6" id="CO5_PO6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO5_PO7" id="CO5_PO7" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO5_PO8" id="CO5_PO8" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO5_PO9" id="CO5_PO9" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO5_PO10" id="CO5_PO10" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO5_PO11" id="CO5_PO11" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO5_PO12" id="CO5_PO12" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO5_PSO1" id="CO5_PSO1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO5_PSO2" id="CO5_PSO2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO5_PSO3" id="CO5_PSO3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO5_PSO4" id="CO5_PSO4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            </tr>
            <tr>
                <td>CO6</td>
                <td><input type="text" name="CO6_PO1" id="CO6_PO1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO6_PO2" id="CO6_PO2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO6_PO3" id="CO6_PO3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO6_PO4" id="CO6_PO4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO6_PO5" id="CO6_PO5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO6_PO6" id="CO6_PO6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO6_PO7" id="CO6_PO7" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO6_PO8" id="CO6_PO8" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO6_PO9" id="CO6_PO9" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO6_PO10" id="CO6_PO10" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO6_PO11" id="CO6_PO11" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO6_PO12" id="CO6_PO12" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO6_PSO1" id="CO6_PSO1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO6_PSO2" id="CO6_PSO2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO6_PSO3" id="CO6_PSO3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO6_PSO4" id="CO6_PSO4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            </tr>

            <tr>
                <td>CO7</td>
                <td><input type="text" name="CO7_PO1" id="CO7_PO1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO7_PO2" id="CO7_PO2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO7_PO3" id="CO7_PO3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO7_PO4" id="CO7_PO4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO7_PO5" id="CO7_PO5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO7_PO6" id="CO7_PO6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO7_PO7" id="CO7_PO7" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO7_PO8" id="CO7_PO8" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO7_PO9" id="CO7_PO9" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO7_PO10" id="CO7_PO10" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO7_PO11" id="CO7_PO11" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO7_PO12" id="CO7_PO12" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO7_PSO1" id="CO7_PSO1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO7_PSO2" id="CO7_PSO2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO7_PSO3" id="CO7_PSO3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO7_PSO4" id="CO7_PSO4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            </tr>

            <tr>
                <td>CO8</td>
                <td><input type="text" name="CO8_PO1" id="CO8_PO1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO8_PO2" id="CO8_PO2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO8_PO3" id="CO8_PO3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO8_PO4" id="CO8_PO4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO8_PO5" id="CO8_PO5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO8_PO6" id="CO8_PO6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO8_PO7" id="CO8_PO7" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO8_PO8" id="CO8_PO8" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO8_PO9" id="CO8_PO9" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO8_PO10" id="CO8_PO10" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO8_PO11" id="CO8_PO11" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO8_PO12" id="CO8_PO12" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO8_PSO1" id="CO8_PSO1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO8_PSO2" id="CO8_PSO2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO8_PSO3" id="CO8_PSO3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td><input type="text" name="CO8_PSO4" id="CO8_PSO4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
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
            
            $query = "INSERT INTO `mp_6_co_po_mapping_1` (`CO1_PO1`, `CO1_PO2`, `CO1_PO3`, `CO1_PO4`, `CO1_PO5`, `CO1_PO6`, `CO1_PO7`, `CO1_PO8`, `CO1_PO9`, `CO1_PO10`, `CO1_PO11`, `CO1_PO12`, `CO1_PSO1`, `CO1_PSO2`, `CO1_PSO3`, `CO1_PSO4`, `CO2_PO1`, `CO2_PO2`, `CO2_PO3`, `CO2_PO4`, `CO2_PO5`, `CO2_PO6`, `CO2_PO7`, `CO2_PO8`, `CO2_PO9`, `CO2_PO10`, `CO2_PO11`, `CO2_PO12`, `CO2_PSO1`, `CO2_PSO2`, `CO2_PSO3`, `CO2_PSO4`, `CO3_PO1`, `CO3_PO2`, `CO3_PO3`, `CO3_PO4`, `CO3_PO5`, `CO3_PO6`, `CO3_PO7`, `CO3_PO8`, `CO3_PO9`, `CO3_PO10`, `CO3_PO11`, `CO3_PO12`, `CO3_PSO1`, `CO3_PSO2`, `CO3_PSO3`, `CO3_PSO4`, `CO4_PO1`, `CO4_PO2`, `CO4_PO3`, `CO4_PO4`, `CO4_PO5`, `CO4_PO6`, `CO4_PO7`, `CO4_PO8`, `CO4_PO9`, `CO4_PO10`, `CO4_PO11`, `CO4_PO12`, `CO4_PSO1`, `CO4_PSO2`, `CO4_PSO3`, `CO4_PSO4`, `CO5_PO1`, `CO5_PO2`, `CO5_PO3`, `CO5_PO4`, `CO5_PO5`, `CO5_PO6`, `CO5_PO7`, `CO5_PO8`, `CO5_PO9`, `CO5_PO10`, `CO5_PO11`, `CO5_PO12`, `CO5_PSO1`, `CO5_PSO2`, `CO5_PSO3`, `CO5_PSO4`, `CO6_PO1`, `CO6_PO2`, `CO6_PO3`, `CO6_PO4`, `CO6_PO5`, `CO6_PO6`, `CO6_PO7`, `CO6_PO8`, `CO6_PO9`, `CO6_PO10`, `CO6_PO11`, `CO6_PO12`, `CO6_PSO1`, `CO6_PSO2`, `CO6_PSO3`, `CO6_PSO4`, `CO7_PO1`, `CO7_PO2`, `CO7_PO3`, `CO7_PO4`, `CO7_PO5`, `CO7_PO6`, `CO7_PO7`, `CO7_PO8`, `CO7_PO9`, `CO7_PO10`, `CO7_PO11`, `CO7_PO12`, `CO7_PSO1`, `CO7_PSO2`, `CO7_PSO3`, `CO7_PSO4`, `CO8_PO1`, `CO8_PO2`, `CO8_PO3`, `CO8_PO4`, `CO8_PO5`, `CO8_PO6`, `CO8_PO7`, `CO8_PO8`, `CO8_PO9`, `CO8_PO10`, `CO8_PO11`, `CO8_PO12`, `CO8_PSO1`, `CO8_PSO2`, `CO8_PSO3`, `CO8_PSO4`) VALUES ('$_POST[CO1_PO1]','$_POST[CO1_PO2]', '$_POST[CO1_PO3]','$_POST[CO1_PO4]','$_POST[CO1_PO5]','$_POST[CO1_PO6]', '$_POST[CO1_PO7]', '$_POST[CO1_PO8]', '$_POST[CO1_PO9]', '$_POST[CO1_PO10]', '$_POST[CO1_PO11]', '$_POST[CO1_PO12]', '$_POST[CO1_PSO1]', '$_POST[CO1_PSO2]', '$_POST[CO1_PSO3]', '$_POST[CO1_PSO4]', '$_POST[CO2_PO1]', '$_POST[CO2_PO2]', '$_POST[CO2_PO3]', '$_POST[CO2_PO4]', '$_POST[CO2_PO5]', '$_POST[CO2_PO6]', '$_POST[CO2_PO7]', '$_POST[CO2_PO8]', '$_POST[CO2_PO9]', '$_POST[CO2_PO10]', '$_POST[CO2_PO11]', '$_POST[CO2_PO12]', '$_POST[CO2_PSO1]', '$_POST[CO2_PSO2]', '$_POST[CO2_PSO3]', '$_POST[CO2_PSO4]', '$_POST[CO3_PO1]', '$_POST[CO3_PO2]', '$_POST[CO3_PO3]', '$_POST[CO3_PO4]', '$_POST[CO3_PO5]', '$_POST[CO3_PO6]', '$_POST[CO3_PO7]', '$_POST[CO3_PO8]', '$_POST[CO3_PO9]', '$_POST[CO3_PO10]', '$_POST[CO3_PO11]', '$_POST[CO3_PO12]', '$_POST[CO3_PSO1]', '$_POST[CO3_PSO2]', '$_POST[CO3_PSO3]', '$_POST[CO3_PSO4]', '$_POST[CO4_PO1]', '$_POST[CO4_PO2]', '$_POST[CO4_PO3]', '$_POST[CO4_PO4]', '$_POST[CO4_PO5]', '$_POST[CO4_PO6]', '$_POST[CO4_PO7]', '$_POST[CO4_PO8]', '$_POST[CO4_PO9]', '$_POST[CO4_PO10]', '$_POST[CO4_PO11]', '$_POST[CO4_PO12]', '$_POST[CO4_PSO1]', '$_POST[CO4_PSO2]', '$_POST[CO4_PSO3]', '$_POST[CO4_PSO4]', '$_POST[CO5_PO1]', '$_POST[CO5_PO2]', '$_POST[CO5_PO3]', '$_POST[CO5_PO4]', '$_POST[CO5_PO5]', '$_POST[CO5_PO6]', '$_POST[CO5_PO7]', '$_POST[CO5_PO8]', '$_POST[CO5_PO9]', '$_POST[CO5_PO10]', '$_POST[CO5_PO11]', '$_POST[CO5_PO12]', '$_POST[CO5_PSO1]', '$_POST[CO5_PSO2]', '$_POST[CO5_PSO3]', '$_POST[CO5_PSO4]', '$_POST[CO6_PO1]', '$_POST[CO6_PO2]', '$_POST[CO6_PO3]', '$_POST[CO6_PO4]', '$_POST[CO6_PO5]', '$_POST[CO6_PO6]', '$_POST[CO6_PO7]', '$_POST[CO6_PO8]', '$_POST[CO6_PO9]', '$_POST[CO6_PO10]', '$_POST[CO6_PO11]', '$_POST[CO6_PO12]', '$_POST[CO6_PSO1]', '$_POST[CO6_PSO2]', '$_POST[CO6_PSO3]', '$_POST[CO6_PSO4]', '$_POST[CO7_PO1]', '$_POST[CO7_PO2]', '$_POST[CO7_PO3]', '$_POST[CO7_PO4]', '$_POST[CO7_PO5]', '$_POST[CO7_PO6]', '$_POST[CO7_PO7]', '$_POST[CO7_PO8]', '$_POST[CO7_PO9]', '$_POST[CO7_PO10]', '$_POST[CO7_PO11]', '$_POST[CO7_PO12]', '$_POST[CO7_PSO1]', '$_POST[CO7_PSO2]', '$_POST[CO7_PSO3]', '$_POST[CO7_PSO4]', '$_POST[CO8_PO1]', '$_POST[CO8_PO2]', '$_POST[CO8_PO3]', '$_POST[CO8_PO4]', '$_POST[CO8_PO5]', '$_POST[CO8_PO6]', '$_POST[CO8_PO7]', '$_POST[CO8_PO8]', '$_POST[CO8_PO9]', '$_POST[CO8_PO10]', '$_POST[CO8_PO11]', '$_POST[CO8_PO12]', '$_POST[CO8_PSO1]', '$_POST[CO8_PSO2]', '$_POST[CO8_PSO3]', '$_POST[CO8_PSO4]')";
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
        <br>
        
        <br>
        <form action="" method="POST">
        <table align="LEFT" border="1" height="100px" width="50%" cellspacing="0">
            <tr>
                <th colspan = "1"></th>
                <th colspan = "3">PO-1</th>
                <th colspan = "3">PO-2</th>
                <th colspan = "3">PO-3</th>
                <th colspan = "3">PO-4</th>
                <th colspan = "3">PO-5</th>
                <th colspan = "3">PO-6</th>
                <th colspan = "3">PO-7</th>
                <th colspan = "3">PO-8</th>
                <th colspan = "3">PO-9</th>
                <th colspan = "3">PO-10</th>
                <th colspan = "3">PO-11</th>
                <th colspan = "3">PO-12</th>
                <th colspan = "3">PSO-1</th>
                <th colspan = "3">PSO-2</th>
                <th colspan = "3">PSO-3</th>
                <th colspan = "3">PSO-4</th>

            </tr>
            <tr>
            <th> </th>
            <th>T.PIs</th>
            <th>M.PIs</th>
            <th>MG</th>
            <th>T.PIs</th>
            <th>M.PIs</th>
            <th>MG</th>
            <th>T.PIs</th>
            <th>M.PIs</th>
            <th>MG</th>
            <th>T.PIs</th>
            <th>M.PIs</th>
            <th>MG</th>
            <th>T.PIs</th>
            <th>M.PIs</th>
            <th>MG</th>
            <th>T.PIs</th>
            <th>M.PIs</th>
            <th>MG</th>
            <th>T.PIs</th>
            <th>M.PIs</th>
            <th>MG</th>
            <th>T.PIs</th>
            <th>M.PIs</th>
            <th>MG</th>
            <th>T.PIs</th>
            <th>M.PIs</th>
            <th>MG</th>
            <th>T.PIs</th>
            <th>M.PIs</th>
            <th>MG</th>
            <th>T.PIs</th>
            <th>M.PIs</th>
            <th>MG</th>
            <th>T.PIs</th>
            <th>M.PIs</th>
            <th>MG</th>
            <th>T.PIs</th>
            <th>M.PIs</th>
            <th>MG</th>
            <th>T.PIs</th>
            <th>M.PIs</th>
            <th>MG</th>
            <th>T.PIs</th>
            <th>M.PIs</th>
            <th>MG</th>
            <th>T.PIs</th>
            <th>M.PIs</th>
            <th>MG</th>

        </tr>

        <tr>
            <td rowspan = "9">Course Outcome</td>
            <td>CO1</td>
            <td><input type="text" name="A1" id="A1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A2" id="A2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A3" id="A3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A4" id="A4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A5" id="A5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A6" id="A6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A7" id="A7" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A8" id="A8" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A9" id="A9" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A10" id="A10" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A11" id="A11" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A12" id="A12" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A13" id="A13" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A14" id="A14" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A15" id="A15" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A16" id="A16" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A17" id="A17" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A18" id="A18" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A19" id="A19" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A20" id="A20" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A21" id="A21" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A22" id="A22" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A23" id="A23" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A24" id="A24" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A25" id="A25" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A26" id="A26" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A27" id="A27" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A28" id="A28" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A29" id="A29" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A30" id="A30" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A31" id="A31" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A32" id="A32" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A33" id="A33" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A34" id="A34" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A35" id="A35" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A36" id="A36" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A37" id="A37" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A38" id="A38" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A39" id="A39" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A40" id="A40" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A41" id="A41" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A42" id="A42" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A43" id="A43" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A44" id="A44" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A45" id="A45" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A46" id="A46" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A47" id="A47" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A48" id="A48" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="A49" id="A49" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <!-- <td><input type="text" name="A50" id="A" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td> -->
            
        </tr>

        <tr>
            <td>CO2</td>
            <td><input type="text" name="B1" id="B1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B2" id="B2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B3" id="B3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B4" id="B4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B5" id="B5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B6" id="B6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B7" id="B7" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B8" id="B8" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B9" id="B9" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B10" id="B10" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B11" id="B11" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B12" id="B12" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B13" id="B13" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
           
            <td><input type="text" name="B14" id="B14" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B15" id="B15" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B16" id="B16" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B17" id="B17" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B18" id="B18" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B19" id="B19" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B20" id="B20" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B21" id="B21" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B22" id="B22" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B23" id="B23" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B24" id="B24" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B25" id="B25" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B26" id="B26" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B27" id="B27" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B28" id="B28" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B29" id="B29" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B30" id="B30" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B31" id="B31" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B32" id="B32" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B33" id="B33" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B34" id="B34" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B35" id="B35" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B36" id="B36" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B37" id="B37" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B38" id="B38" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B39" id="B39" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B40" id="B40" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B41" id="B41" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B42" id="B42" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B43" id="B43" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B44" id="B44" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B45" id="B45" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B46" id="B46" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B47" id="B47" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B48" id="B48" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="B49" id="B49" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <!-- <td><input type="text" name="A50"id="A" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td> -->
            
        </tr>

        <tr>
            <td>CO3</td>
            <td><input type="text" name="C1" id="C1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C2" id="C2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C3" id="C3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C4" id="C4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C5" id="C5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C6" id="C6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C7" id="C7" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C8" id="C8" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C9" id="C9" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C10" id="C10" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C11" id="C11" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C12" id="C12" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>

            <td><input type="text" name="C13" id="C13" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C14" id="C14" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C15" id="C15" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C16" id="C16" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C17" id="C17" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C18" id="C18" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C19" id="C19" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C20" id="C20" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C21" id="C21" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C22" id="C22" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C23" id="C23" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C24" id="C24" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C25" id="C25" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C26" id="C26" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C27" id="C27" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C28" id="C28" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C29" id="C29" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C30" id="C30" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C31" id="C31" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C32" id="C32" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C33" id="C33" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C34" id="C34" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C35" id="C35" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C36" id="C36" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C37" id="C37" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C38" id="C38" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C39" id="C39" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C40" id="C40" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C41" id="C41" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C42" id="C42" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C43" id="C43" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C44" id="C44" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C45" id="C45" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C46" id="C46" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C47" id="C47" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C48" id="C48" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="C49" id="C49" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <!-- <td><input type="text" name="A50" id="A" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td> -->
            
        </tr>

        <tr>
            <td>CO4</td>
            
            <td><input type="text" name="D1" id="D1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D2" id="D2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D3" id="D3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D4" id="D4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D5" id="D5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D6" id="D6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D7" id="D7" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D8" id="D8" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D9" id="D9" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D10" id="D10" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D11" id="D11" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D12" id="D12" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D13" id="D13" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>

            <td><input type="text" name="D14" id="D14" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D15" id="D15" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D16" id="D16" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            
            <td><input type="text" name="D17" id="D17" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D18" id="D18" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D19" id="D19" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D20" id="D20" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D21" id="D21" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D22" id="D22" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D23" id="D23" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D24" id="D24" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D25" id="D25" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D26" id="D26" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D27" id="D27" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D28" id="D28" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D29" id="D29" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D30" id="D30" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D31" id="D31" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D32" id="D32" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D33" id="D33" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D34" id="D34" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D35" id="D35" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D36" id="D36" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D37" id="D37" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D38" id="D38" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D39" id="D39" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D40" id="D40" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D41" id="D41" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D42" id="D42" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D43" id="D43" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D44" id="D44" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D45" id="D45" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D46" id="D46" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D47" id="D47" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D48" id="D48" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="D49" id="D49" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <!-- <td><input type="text" nme="A50" id="A" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td> -->
            
            </tr>
        <tr>
            <td>CO5</td>
            <td><input type="text" name="E1" id="E1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E2" id="E2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E3" id="E3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E4" id="E4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E5" id="E5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E6" id="E6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E7" id="E7" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E8" id="E8" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E9" id="E9" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E10" id="E10" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E11" id="E11" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E12" id="E12" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E13" id="E13" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            
            <td><input type="text" name="E14" id="E14" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E15" id="E15" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E16" id="E16" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E17" id="E17" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E18" id="E18" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E19" id="E19" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E20" id="E20" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E21" id="E21" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E22" id="E22" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E23" id="E23" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E24" id="E24" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E25" id="E25" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E26" id="E26" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E27" id="E27" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E28" id="E28" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E29" id="E29" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E30" id="E30" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E31" id="E31" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E32" id="E32" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E33" id="E33" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E34" id="E34" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E35" id="E35" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E36" id="E36" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E37" id="E37" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E38" id="E38" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E39" id="E39" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E40" id="E40" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E41" id="E41" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E42" id="E42" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E43" id="E43" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E44" id="E44" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E45" id="E45" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E46" id="E46" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E47" id="E47" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E48" id="E48" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="E49" id="E49" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
        </tr>

        <tr>
            <td>CO6</td>
            <td><input type="text" name="F1" id="F1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F2" id="F2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F3" id="F3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F4" id="F4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F5" id="F5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F6" id="F6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F7" id="F7" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F8" id="F8" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F9" id="F9" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F10" id="F10" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F11" id="F11" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F12" id="F12" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F13" id="F13" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F14" id="F14" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F15" id="F15" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F16" id="F16" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F17" id="F17" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F18" id="F18" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F19" id="F19" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F20" id="F20" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F21" id="F21" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F22" id="F22" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F23" id="F23" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F24" id="F24" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F25" id="F25" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F26" id="F26" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F27" id="F27" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F28" id="F28" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F29" id="F29" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F30" id="F30" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F31" id="F31" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F32" id="F32" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F33" id="F33" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F34" id="F34" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F35" id="F35" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F36" id="F36" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F37" id="F37" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F38" id="F38" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F39" id="F39" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F40" id="F40" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F41" id="F41" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F42" id="F42" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F43" id="F43" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F44" id="F44" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F45" id="F45" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F46" id="F46" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F47" id="F47" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F48" id="F48" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="F49" id="F49" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
        </tr>

        <tr>
            <td>CO7</td>
            <td><input type="text" name="G1" id="G1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G2" id="G2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G3" id="G3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G4" id="G4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G5" id="G5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G6" id="G6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G7" id="G7" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G8" id="G8" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G9" id="G9" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G10" id="G10" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G11" id="G11" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G12" id="G12" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G13" id="C13" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G14" id="G14" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G15" id="G15" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G16" id="G16" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G17" id="G17" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G18" id="G18" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G19" id="G19" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G20" id="G20" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G21" id="G21" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G22" id="G22" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G23" id="G23" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G24" id="G24" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G25" id="G25" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G26" id="G26" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G27" id="G27" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G28" id="G28" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G29" id="G29" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G30" id="G30" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G31" id="G31" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G32" id="G32" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G33" id="G33" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G34" id="G34" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G35" id="G35" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G36" id="G36" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G37" id="G37" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G38" id="G38" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G39" id="G39" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G40" id="G40" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G41" id="G41" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G42" id="G42" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G43" id="G43" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G44" id="G44" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G45" id="G45" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G46" id="G46" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G47" id="G47" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G48" id="G48" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="G49" id="G49" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
           
        </tr>

        <tr>
            <td>CO8</td>
            <td><input type="text" name="H1" id="H1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H2" id="H2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H3" id="H3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H4" id="H4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H5" id="H5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H6" id="H6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H7" id="H7" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H8" id="H8" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H9" id="H9" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H10" id="H10" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H11" id="H11" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H12" id="H12" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H13" id="H13" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H14" id="H14" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H15" id="H15" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H16" id="H16" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H17" id="H17" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H18" id="H18" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H19" id="H19" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H20" id="H20" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H21" id="H21" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H22" id="H22" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H23" id="H23" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H24" id="H24" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H25" id="H25" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H26" id="H26" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H27" id="H27" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H28" id="H28" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H29" id="H29" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H30" id="H30" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H31" id="H31" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H32" id="H32" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H33" id="H33" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H34" id="H34" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H35" id="H35" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H36" id="H36" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H37" id="H37" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H38" id="H38" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H39" id="H39" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H40" id="H40" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H41" id="H41" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H42" id="H42" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H43" id="H43" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H44" id="H44" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H45" id="H45" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H46" id="H46" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H47" id="H47" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H48" id="H48" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td><input type="text" name="H49" id="H49" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
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
            
            $query = "INSERT INTO `MP_6_co_po_mapping` (`A1`, `A2`, `A3`, `A4`, `A5`, `A6`, `A7`, `A8`, `A9`, `A10`, `A11`, `A13`, `A14`, `A15`, `A17`, `A18`, `A19`, `A20`, `A21`, `A22`, `A23`, `A24`, `A25`, `A26`, `A27`, `A28`, `A29`, `A30`, `A31`, `A32`, `A33`, `A34`, `A35`, `A36`, `A37`, `A38`, `A39`, `A40`, `A41`, `A42`, `A43`, `A44`, `A45`, `A46`, `A47`, `A48`, `A49`, `B1`, `B2`, `B3`, `B4`, `B5`, `B6`, `B7`, `B8`, `B9`, `B10`, `B11`, `B13`, `B14`, `B15`, `B17`, `B18`, `B19`, `B20`, `B21`, `B22`, `B23`, `B24`, `B25`, `B26`, `B27`, `B28`, `B29`, `B30`, `B31`, `B32`, `B33`, `B34`, `B35`, `B36`, `B37`, `B38`, `B39`, `B40`, `B41`, `B42`, `B43`, `B44`, `B45`, `B46`, `B47`, `B48`, `B49`, `C1`, `C2`, `C3`, `C4`, `C5`, `C6`, `C7`, `C8`, `C9`, `C10`, `C11`, `C12`, `C13`, `C14`, `C15`, `C17`, `C18`, `C19`, `C20`, `C21`, `C22`, `C23`, `C24`, `C25`, `C26`, `C27`, `C28`, `C29`, `C30`, `C31`, `C32`, `C33`, `C34`, `C35`, `C36`, `C37`, `C38`, `C39`, `C40`, `C41`, `C42`, `C43`, `C44`, `C45`, `C46`, `C47`, `C48`, `C49`, `D1`, `D2`, `D3`, `D4`, `D5`, `D6`, `D7`, `D8`, `D9`, `D10`, `D11`, `D12`, `D14`, `D15`, `D17`, `D18`, `D19`, `D20`, `D21`, `D22`, `D23`, `D24`, `D25`, `D26`, `D27`, `D28`, `D29`, `D30`, `D31`, `D32`, `D33`, `D34`, `D35`, `D36`, `D37`, `D38`, `D39`, `D40`, `D41`, `D42`, `D43`, `D44`, `D45`, `D46`, `D47`, `D48`, `D49`, `E1`, `E2`, `E3`, `E4`, `E5`, `E6`, `E7`, `E8`, `E9`, `E10`, `E11`, `E12`, `E14`, `E15`, `E17`, `E18`, `E19`, `E20`, `E21`, `E22`, `E23`, `E24`, `E25`, `E26`, `E27`, `E28`, `E29`, `E30`, `E31`, `E32`, `E33`, `E34`, `E35`, `E36`, `E37`, `E38`, `E39`, `E40`, `E41`, `E42`, `E43`, `E44`, `E45`, `E46`, `E47`, `E48`, `E49`, `F1`, `F2`, `F3`, `F4`, `F5`, `F6`, `F7`, `F8`, `F9`, `F10`, `F11`, `F12`, `F14`, `F15`, `F17`, `F18`, `F19`, `F20`, `F21`, `F22`, `F23`, `F24`, `F25`, `F26`, `F27`, `F28`, `F29`, `F30`, `F31`, `F32`, `F33`, `F34`, `F35`, `F36`, `F37`, `F38`, `F39`, `F40`, `F41`, `F42`, `F43`, `F44`, `F45`, `F46`, `F47`, `F48`, `F49`, `G1`, `G2`, `G3`, `G4`, `G5`, `G6`, `G7`, `G8`, `G9`, `G10`, `G11`, `G12`, `G14`, `G15`, `G17`, `G18`, `G19`, `G20`, `G21`, `G22`, `G23`, `G24`, `G25`, `G26`, `G27`, `G28`, `G29`, `G30`, `G31`, `G32`, `G33`, `G34`, `G35`, `G36`, `G37`, `G38`, `G39`, `G40`, `G41`, `G42`, `G43`, `G44`, `G45`, `G46`, `G47`, `G48`, `G49`, `H1`, `H2`, `H3`, `H4`, `H5`, `H6`, `H7`, `H8`, `H9`, `H10`, `H11`, `H12`, `H14`, `H15`, `H17`, `H18`, `H19`, `H20`, `H21`, `H22`, `H23`, `H24`, `H25`, `H26`, `H27`, `H28`, `H29`, `H30`, `H31`, `H32`, `H33`, `H34`, `H35`, `H36`, `H37`, `H38`, `H39`, `H40`, `H41`, `H42`, `H43`, `H44`, `H45`, `H46`, `H47`, `H48`, `H49`) VALUES ('$_POST[A1]','$_POST[A2]', '$_POST[A3]','$_POST[A4]','$_POST[A5]','$_POST[A6]', '$_POST[A7]', '$_POST[A8]', '$_POST[A9]', '$_POST[A10]', '$_POST[A11]', '$_POST[A14]', '$_POST[A15]', '$_POST[A17]', '$_POST[A18]', '$_POST[A19]', '$_POST[A20]', '$_POST[A21]', '$_POST[A22]', '$_POST[A23]', '$_POST[A24]', '$_POST[A25]', '$_POST[A26]', '$_POST[A27]', '$_POST[A28]', '$_POST[A29]', '$_POST[A30]', '$_POST[A31]', '$_POST[A32]', '$_POST[A33]', '$_POST[A34]', '$_POST[A35]', '$_POST[A36]', '$_POST[A37]', '$_POST[A38]', '$_POST[A39]', '$_POST[A40]', '$_POST[A41]', '$_POST[A42]', '$_POST[A43]', '$_POST[A44]', '$_POST[A45]', '$_POST[A46]', '$_POST[A47]', '$_POST[A48]', '$_POST[A49]', '$_POST[B1]', '$_POST[B2]', '$_POST[B3]', '$_POST[B4]', '$_POST[B5]', '$_POST[B6]', '$_POST[B7]', '$_POST[B8]', '$_POST[B9]', '$_POST[B10]', '$_POST[B11]', '$_POST[B14]', '$_POST[B15]', '$_POST[B17]', '$_POST[B18]', '$_POST[B19]', '$_POST[B20]', '$_POST[B21]', '$_POST[B22]', '$_POST[B23]', '$_POST[B24]', '$_POST[B25]', '$_POST[B26]', '$_POST[B27]', '$_POST[B28]', '$_POST[B29]', '$_POST[B30]', '$_POST[B31]', '$_POST[B32]', '$_POST[B33]', '$_POST[B34]', '$_POST[B35]', '$_POST[B36]', '$_POST[B37]', '$_POST[B38]', '$_POST[B39]', '$_POST[B40]', '$_POST[B41]', '$_POST[B42]', '$_POST[B43]', '$_POST[B44]', '$_POST[B45]', '$_POST[B46]', '$_POST[B47]', '$_POST[B48]', '$_POST[B49]', '$_POST[C1]', '$_POST[C2]', '$_POST[C3]', '$_POST[C4]', '$_POST[C5]', '$_POST[C6]', '$_POST[C7]', '$_POST[C8]', '$_POST[C9]', '$_POST[C10]', '$_POST[C11]', '$_POST[C12]', '$_POST[C13]', '$_POST[C14]', '$_POST[C15]', '$_POST[C17]', '$_POST[C18]', '$_POST[C19]', '$_POST[C20]', '$_POST[C21]', '$_POST[C22]', '$_POST[C23]', '$_POST[C24]', '$_POST[C25]', '$_POST[C26]', '$_POST[C27]', '$_POST[C28]', '$_POST[C29]', '$_POST[C30]', '$_POST[C31]', '$_POST[C32]', '$_POST[C33]', '$_POST[C34]', '$_POST[C35]', '$_POST[C36]', '$_POST[C37]', '$_POST[C38]', '$_POST[C39]', '$_POST[C40]', '$_POST[C41]', '$_POST[C42]', '$_POST[C43]', '$_POST[C44]', '$_POST[C45]', '$_POST[C46]', '$_POST[C47]', '$_POST[C48]', '$_POST[C49]', '$_POST[D1]', '$_POST[D2]', '$_POST[D3]', '$_POST[D4]', '$_POST[D5]', '$_POST[D6]', '$_POST[D7]', '$_POST[D8]', '$_POST[D9]', '$_POST[D10]', '$_POST[D11]', '$_POST[D12]', '$_POST[D13]', '$_POST[D14]', '$_POST[D15]', '$_POST[D16]', '$_POST[D17]', '$_POST[D18]', '$_POST[D19]', '$_POST[D20]', '$_POST[D21]', '$_POST[D22]', '$_POST[D23]', '$_POST[D24]', '$_POST[D25]', '$_POST[D26]', '$_POST[D27]', '$_POST[D28]', '$_POST[D29]', '$_POST[D30]', '$_POST[D31]', '$_POST[D32]', '$_POST[D33]', '$_POST[D34]', '$_POST[D35]', '$_POST[D36]', '$_POST[D37]', '$_POST[D38]', '$_POST[D39]', '$_POST[D40]', '$_POST[D41]', '$_POST[D42]', '$_POST[D43]', '$_POST[D44]', '$_POST[D45]', '$_POST[D46]', '$_POST[D47]', '$_POST[D48]', '$_POST[D49]', '$_POST[E1]', '$_POST[E2]', '$_POST[E3]', '$_POST[E4]', '$_POST[E5]', '$_POST[E6]', '$_POST[E7]', '$_POST[E8]', '$_POST[E9]', '$_POST[E10]', '$_POST[E11]', '$_POST[E12]', '$_POST[E13]', '$_POST[E14]', '$_POST[E15]', '$_POST[E16]', '$_POST[E17]', '$_POST[E18]', '$_POST[E19]', '$_POST[E20]', '$_POST[E21]', '$_POST[E22]', '$_POST[E23]', '$_POST[E24]', '$_POST[E25]', '$_POST[E26]', '$_POST[E27]', '$_POST[E28]', '$_POST[E29]', '$_POST[E30]', '$_POST[E31]', '$_POST[E32]', '$_POST[E33]', '$_POST[E34]', '$_POST[E35]', '$_POST[E36]', '$_POST[E37]', '$_POST[E38]', '$_POST[E39]', '$_POST[E40]', '$_POST[E41]', '$_POST[E42]', '$_POST[E43]', '$_POST[E44]', '$_POST[E45]', '$_POST[E46]', '$_POST[E47]', '$_POST[E48]', '$_POST[E49]', '$_POST[F1]', '$_POST[F2]', '$_POST[F3]', '$_POST[F4]', '$_POST[F5]', '$_POST[F6]', '$_POST[F7]', '$_POST[F8]', '$_POST[F9]', '$_POST[F10]', '$_POST[F11]', '$_POST[F12]', '$_POST[F13]', '$_POST[F14]', '$_POST[F15]', '$_POST[F16]', '$_POST[F17]', '$_POST[F18]', '$_POST[F19]', '$_POST[F20]', '$_POST[F21]', '$_POST[F22]', '$_POST[F23]', '$_POST[F24]', '$_POST[F25]', '$_POST[F26]', '$_POST[F27]', '$_POST[F28]', '$_POST[F29]', '$_POST[F30]', '$_POST[F31]', '$_POST[F32]', '$_POST[F33]', '$_POST[F34]', '$_POST[F35]', '$_POST[F36]', '$_POST[F37]', '$_POST[F38]', '$_POST[F39]', '$_POST[F40]', '$_POST[F41]', '$_POST[F42]', '$_POST[F43]', '$_POST[F44]', '$_POST[F45]', '$_POST[F46]', '$_POST[F47]', '$_POST[F48]', '$_POST[F49]', '$_POST[G1]', '$_POST[G2]', '$_POST[G3]', '$_POST[G4]', '$_POST[G5]', '$_POST[G6]', '$_POST[G7]', '$_POST[G8]', '$_POST[G9]', '$_POST[G10]', '$_POST[G11]', '$_POST[G12]', '$_POST[G13]', '$_POST[G14]', '$_POST[G15]', '$_POST[G16]', '$_POST[G17]', '$_POST[G18]', '$_POST[G19]', '$_POST[G20]', '$_POST[G21]', '$_POST[G22]', '$_POST[G23]', '$_POST[G24]', '$_POST[G25]', '$_POST[G26]', '$_POST[G27]', '$_POST[G28]', '$_POST[G29]', '$_POST[G30]', '$_POST[G31]', '$_POST[G32]', '$_POST[G33]', '$_POST[G34]', '$_POST[G35]', '$_POST[G36]', '$_POST[G37]', '$_POST[G38]', '$_POST[G39]', '$_POST[G40]', '$_POST[G41]', '$_POST[G42]', '$_POST[G43]', '$_POST[G44]', '$_POST[G45]', '$_POST[G46]', '$_POST[G47]', '$_POST[G48]', '$_POST[G49]', '$_POST[H1]', '$_POST[H2]', '$_POST[H3]', '$_POST[H4]', '$_POST[H5]', '$_POST[H6]', '$_POST[H7]', '$_POST[H8]', '$_POST[H9]', '$_POST[H10]', '$_POST[H11]', '$_POST[H12]', '$_POST[H13]', '$_POST[H14]', '$_POST[H15]', '$_POST[H16]', '$_POST[H17]', '$_POST[H18]', '$_POST[H19]', '$_POST[H20]', '$_POST[H21]', '$_POST[H22]', '$_POST[H23]', '$_POST[H24]', '$_POST[H25]', '$_POST[H26]', '$_POST[H27]', '$_POST[H28]', '$_POST[H29]', '$_POST[H30]', '$_POST[H31]', '$_POST[H32]', '$_POST[H33]', '$_POST[H34]', '$_POST[H35]', '$_POST[H36]', '$_POST[H37]', '$_POST[H38]', '$_POST[H39]', '$_POST[H40]', '$_POST[H41]', '$_POST[H42]', '$_POST[H43]', '$_POST[H44]', '$_POST[H45]', '$_POST[H46]', '$_POST[H47]', '$_POST[H48]', '$_POST[H49]')";

            

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


    <br>

    <h3>Note:</h3>
    
    <p>T.Pis - Total Performance indicator</p>
    <p>M.pis - Mapped Performance Indicators</p>
    <p>MG - Mapped Grade</p>

    <br>
    <h2>Analysis Based on Performance Indicators</h3>

    <table align="LEFT" border="1" height="20px" width="20%" cellspacing="0">
        <tr>
            <th>Threshold</th>
            <th>% Level</th>
            <th>form</th>
            <th>To</th>
        </tr>

        <tr>
            <td>3</td>
            <td>67</td>
            <td>67</td>
            <td>100</td>
        </tr>

        <tr>
            <td>2</td>
            <td>34</td>
            <td>34</td>
            <td>66</td>
        </tr>

        <tr>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>33</td>
        </tr>


    </table>

    <table width="100%" align="center" height="60px">
        <tr>
            <td align="center">
                <!-- <input type="submit" value="Submit"> -->
                 <button name="SUBMIT1" id="SUBMIT1" value=" "> <input type="submit" value="Submit"></button> 
            </td>
        </tr>
    </table>
</body>
</html>