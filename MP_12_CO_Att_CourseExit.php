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
    <title>CourseExit form</title>
</head>
<body>
    <h1>Total Students Participated in Course Exit Survey				
    </h1>
    <form action="" method="POST">
        <table align="center" border="1" height="700px" width="90%" cellspacing="0">
            <tr>
                <th> </th>
                <th>1 (lowest)</th>
                <th>Weighted 1</th>
                <th>2(Value)</th>
                <th>Weighted 2</th>
                <th>3(Value)</th>
                <th>Weighted 3</th>
                <th>4(Value)</th>
                <th>Weighted 4</th>
                <th>5(highest)</th>
                <th>Weighted 5</th>
                <th>TOTAL</th>
                <th>Attainment</th>

            </tr>
            <tr>
                <td>CO1</td>
                <td rowspan="1"><input type="text" name="c1_1" id="c1_1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w1_1" id="w1_1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px;"></input></td>
                <td rowspan="1"><input type="text" name="c1_2" id="c1_2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w1_2" id="w1_2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="c1_3" id="c1_3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w1_3" id="w1_3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="c1_4" id="c1_4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w1_4" id="w1_4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="c1_5" id="c1_5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w1_5" id="w1_5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="t1" id="t1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="Att1" id="Att1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>

            </tr>

            <tr>
                <td>CO2</td>
                <td rowspan="1"><input type="text" name="c2_1" id="c2_1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w2_1" id="w2_1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="c2_2" id="c2_2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w2_2" id="w2_2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="c2_3" id="c2_3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w2_3" id="w2_3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="c2_4" id="c2_4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w2_4" id="w2_4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="c2_5" id="c2_5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w2_5" id="w2_5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="t2" id="t2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="Att2" id="Att2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>

            </tr>

            <tr>
                <td>CO3</td>
                <td rowspan="1"><input type="text" name="c3_1" id="c3_1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w3_1" id="w3_1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px; "></input></td>
                <td rowspan="1"><input type="text" name="c3_2" id="c3_2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w3_2" id="w3_2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="c3_3" id="c3_3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w3_3" id="w3_3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="c3_4" id="c3_4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w3_4" id="w3_4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="c3_5" id="c3_5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w3_5" id="w3_5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="t3" id="t3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="Att3" id="Att3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>

            </tr>

            <tr>
                <td>CO4</td>
                <td rowspan="1"><input type="text" name="c4_1" id="c4_1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w4_1" id="w4_1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="c4_2" id="c4_2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w4_2" id="w4_2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="c4_3" id="c4_3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w4_3" id="w4_3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="c4_4" id="c4_4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w4_4" id="w4_4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="c4_5" id="c4_5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w4_5" id="w4_5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="t4" id="t4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="Att4" id="Att4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>

            </tr>

            <tr>
                <td>CO5</td>
                <td rowspan="1"><input type="text" name="c5_1" id="c5_1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w5_1" id="w5_1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="c5_2" id="c5_2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w5_2" id="w5_2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="c5_3" id="c5_3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w5_3" id="w5_3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="c5_4" id="c5_4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w5_4" id="w5_4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="c5_5" id="c5_5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w5_5" id="w5_5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="t5" id="t5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="Att5" id="Att5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>

            </tr>

            <tr>
                <td>CO6</td>
                <td rowspan="1"><input type="text" name="c6_1" id="c6_1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w6_1" id="w6_1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="c6_2" id="c6_2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w6_2" id="w6_2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="c6_3" id="c6_3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w6_3" id="w6_3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="c6_4" id="c6_4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w6_4" id="w6_4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="c6_5" id="c6_5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w6_5" id="w6_5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="t6" id="t6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="Att6" id="Att6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>

            </tr>

            <tr>
                <td>CO7</td>
                <td rowspan="1"><input type="text" name="c7_1" id="c7_1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w7_1" id="w7_1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="c7_2" id="c7_2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w7_2" id="w7_2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="c7_3" id="c7_3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w7_3" id="w7_3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="c7_4" id="c7_4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w7_4" id="w7_4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="c7_5" id="c7_5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w7_5" id="w7_5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="t7" id="t7" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="Att7" id="Att7" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>

            </tr>

            <tr>
                <td>CO8</td>
                <td rowspan="1"><input type="text" name="c8_1" id="c8_1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w8_1" id="w8_1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="c8_2" id="c8_2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w8_2" id="w8_2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="c8_3" id="c8_3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w8_3" id="w8_3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="c8_4" id="c8_4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w8_4" id="w8_4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="c8_5" id="c8_5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="w8_5" id="w8_5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="t8" id="t8" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="Att8" id="Att" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            </tr>
</table>
<table>
            <tr>
                <td>
                    <input type="submit" name="submit" id="submit" value="Enter Details">
                </td>
            </tr>
        </table>  
    </form>

    <?php
    $connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms.sql");
    if(isset($_POST['submit'])){
      //  if(!empty($_POST['course_no']) && !empty($_POST['y1']) && !empty($_POST['cc1']) && !empty($_POST['c1']) && !empty($_POST['p1']) && !empty($_POST['cn1']) && !empty($_POST['d1']) && !empty($_POST['de1']) && !empty($_POST['sem']) && !empty($_POST['f1'])){
            
            $query = "INSERT INTO `mp_12_courseexitsurvey`(`c1_1`, `w1_1`, `c1_2`, `w1_2`, `c1_3`, `w1_3`, `c1_4`, `w1_4`, `c1_5`, `w1_5`, `t1`, `Att1`, `c2_1`, `w2_1`, `c2_2`, `w2_2`, `c2_3`, `w2_3`, `c2_4`, `w2_4`, `c2_5`, `w2_5`, `t2`, `Att2`, `c3_1`, `w3_1`, `c3_2`, `w3_2`, `c3_3`, `w3_3`, `c3_4`, `w3_4`, `c3_5`, `w3_5`, `t3`, `Att3`, `c4_1`, `w4_1`, `c4_2`, `w4_2`, `c4_3`, `w4_3`, `c4_4`, `w4_4`, `c4_5`, `w4_5`, `t4`, `Att4`, `c5_1`, `w5_1`, `c5_2`, `w5_2`, `c5_3`, `w5_3`, `c5_4`, `w5_4`, `c5_5`, `w5_5`, `t5`, `Att5`, `c6_1`, `w6_1`, `c6_2`, `w6_2`, `c6_3`, `w6_3`, `c6_4`, `w6_4`, `c6_5`, `w6_5`, `t6`, `Att6`, `c7_1`, `w7_1`, `c7_2`, `w7_2`, `c7_3`, `w7_3`, `c7_4`, `w7_4`, `c7_5`, `w7_5`, `t7`, `Att7`, `c8_1`, `w8_1`, `c8_2`, `w8_2`, `c8_3`, `w8_3`, `c8_4`, `w8_4`, `c8_5`, `w8_5`, `t8`, `Att8`) VALUES ('$_POST[c1_1]', '$_POST[w1_1]','$_POST[c1_2]', '$_POST[w1_2]','$_POST[c1_3]','$_POST[w1_3]','$_POST[c1_4]','$_POST[w1_4]', '$_POST[c1_5]', '$_POST[w1_5]', '$_POST[t1]', '$_POST[Att1]', '$_POST[c2_1]', '$_POST[w2_1]', '$_POST[c2_2]', '$_POST[w2_2]', '$_POST[c2_3]', '$_POST[w2_3]', '$_POST[c2_4]', '$_POST[w2_4]', '$_POST[c2_5]', '$_POST[w2_5]', '$_POST[t2]', '$_POST[Att2]', '$_POST[c3_1]', '$_POST[w3_1]', '$_POST[c3_2]', '$_POST[w3_2]', '$_POST[c3_3]', '$_POST[w3_3]', '$_POST[c3_4]', '$_POST[w3_4]', '$_POST[c3_5]', '$_POST[w3_5]', '$_POST[t3]', '$_POST[Att3]', '$_POST[c4_1]', '$_POST[w4_1]', '$_POST[c4_2]', '$_POST[w4_2]', '$_POST[c4_3]', '$_POST[w4_3]', '$_POST[c4_4]', '$_POST[w4_4]', '$_POST[c4_5]', '$_POST[w4_5]', '$_POST[t4]', '$_POST[Att4]', '$_POST[c5_1]', '$_POST[w5_1]', '$_POST[c5_2]', '$_POST[w5_2]', '$_POST[c5_3]', '$_POST[w5_3]', '$_POST[c5_4]', '$_POST[w5_4]', '$_POST[c5_5]', '$_POST[w5_5]', '$_POST[t5]', '$_POST[Att5]', '$_POST[c6_1]', '$_POST[w6_1]', '$_POST[c6_2]', '$_POST[w6_2]', '$_POST[c6_3]', '$_POST[w6_3]', '$_POST[c6_4]', '$_POST[w6_4]', '$_POST[c6_5]', '$_POST[w6_5]', '$_POST[t6]', '$_POST[Att6]', '$_POST[c7_1]', '$_POST[w7_1]', '$_POST[c7_2]', '$_POST[w7_2]', '$_POST[c7_3]', '$_POST[w7_3]', '$_POST[c7_4]', '$_POST[w7_4]', '$_POST[c7_5]', '$_POST[w7_5]', '$_POST[t7]', '$_POST[Att7]', '$_POST[c8_1]', '$_POST[w8_1]', '$_POST[c8_2]', '$_POST[w8_2]', '$_POST[c8_3]', '$_POST[w8_3]', '$_POST[c8_4]', '$_POST[w8_4]', '$_POST[c8_5]', '$_POST[w8_5]', '$_POST[t8]', '$_POST[Att8]')";
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