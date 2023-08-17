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
    <title>Course Exit Form</title>
</head>
<body>
    <h1 align = "center">SHREE L.R. TIWARI COLLEGE OF ENGINEERING</h1>
    <h2 align = "center"><b>DEPARTMENT OF COMPUTER ENGINEERING</b></h2>
    <h4 align = "center">Course Exit Survey Analysis Report												
    </h4>

   <form action="" method="POST">
    <table align="Center" border="0" height="" width="" cellspacing="0">
        <tr>
            <td>Academic Year : <input type="text" id="name" name="name"> </td>
           <td>Class :  <input type="text" id="name1" name="name1"></td>
           </tr>
           
           <tr>
           <td>Course Code : <input type="text" id="name2" name="name2"> </td>
               <td>Div :  <input type="text" id="name3" name="name3"></td>
           </tr>
           
           <tr>     
           <td>Course Name : <input type="text" id="name4" name="name4"> </td>
                   <td>Sem :  <input type="text" id="name5" name="name5"></td>
            </tr>  
            
            <tr>
           <td>Faculty Incharge : <input type="text" id="name6" name="name6"> </td>
           <td>Date : <input type="text" id="name7" name="name7"></td>
           </tr> 
    </table>
    <br>
    <table align="center" border="1" height="700px" width="90%" cellspacing="0">
        <tr>
            <th rowspan = "3">Roll No.</th>
            <th rowspan = "3">Seat Number</th>
            <th rowspan = "3">Name of the Student</th>
            <th>CO1</th>
            <th>CO2</th>
            <th>CO3</th>
            <th>CO4</th>
            <th>CO5</th>
            <th>CO6</th>
            <th>CO7</th>
            <th>CO8</th>
            <th rowspan = "3">Total</th>
            <th rowspan="3"> Mean</th>

        </tr>
        <tr>
            <td>Q1</td>
            <td>Q2</td>
            <td>Q3</td>
            <td>Q4</td>
            <td>Q5</td>
            <td>Q6</td>
            <td>Q7</td>
            <td>Q8</td>
        </tr>
        <tr>
            <td>5</td>
            <td>5</td>
            <td>5</td>
            <td>5</td>
            <td>5</td>
            <td>5</td>
            <td>5</td>
            <td>5</td>

        </tr>
        <tr>
            <td>1</td>
            <td rowspan="1"><input type="text" name="Seat1" id="Seat1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td>Harsh Tiwari</td>
            <td rowspan="1"><input type="text" name="CO1_1" id="CO1_1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="CO2_1" id="CO2_1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="CO3_1" id="CO3_1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="CO4_1" id="CO4_1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="CO5_1" id="CO5_1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="CO6_1" id="CO6_1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="CO7_1" id="CO7_1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="CO8_1" id="CO8_1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="Total_1" id="Total_1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="Mean_1" id="Mean_1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>

        </tr>

        <tr>
            <td>2</td>
            <td rowspan="1"><input type="text" name="Seat2" id="Seat2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td>Vibhanshu Singh</td>
            <td rowspan="1"><input type="text" name="CO1_2" id="CO1_2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="CO2_2" id="CO2_2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="CO3_2" id="CO3_2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="CO4_2" id="CO4_2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="CO5_2" id="CO5_2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="CO6_2" id="CO6_2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="CO7_2" id="CO7_2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="CO8_2" id="CO8_2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="Total_2" id="Total_2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="Mean_2" id="Mean_2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>

        </tr>

        <tr>
            <td>3</td>
            <td rowspan="1"><input type="text" name="Seat3" id="Seat3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td>Akshay Singh</td>
            <td rowspan="1"><input type="text" name="CO1_3" id="CO1_3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="CO2_3" id="CO2_3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="CO3_3" id="CO3_3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="CO4_3" id="CO4_3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="CO5_3" id="CO5_3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="CO6_3" id="CO6_3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="CO7_3" id="CO7_3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="CO8_3" id="CO8_3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="Total_3" id="Total_3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="Mean_3" id="Mean_3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>

        </tr>

        <tr>
            <td>4</td>
            <td rowspan="1"><input type="text" name="Seat4" id="Seat4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td>Aarushi Tiwari</td>
            <td rowspan="1"><input type="text" name="CO1_4" id="CO1_4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="CO2_4" id="CO2_4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="CO3_4" id="CO3_4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="CO4_4" id="CO4_4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="CO5_4" id="CO5_4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="CO6_4" id="CO6_4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="CO7_4" id="CO7_4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="CO8_4" id="CO8_4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="Total_4" id="Total_4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="Mean_4" id="Mean_4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>

        </tr>
        <tr>
            <!-- <td colspan ="12" rowspan="1"></td> -->
            <td colspan = "3">Average Marks</td>
            <td rowspan="1"><input type="text" name="Av1" id="Av1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="Av2" id="Av2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="Av3" id="Av3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="Av4" id="Av4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="Av5" id="Av5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="Av6" id="Av6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="Av7" id="Av7" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="Av8" id="Av8" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="Avt" id="Avt" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="MeanAvg" id="MeanAvg" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>         
        </tr>

        <tr>
            <td colspan="3">Course Outcome Mapping</td>
            <td>CO1</td>
            <td>CO2</td>
            <td>CO3</td>
            <td>CO4</td>
            <td>CO5</td>
            <td>CO6</td>
            <td>CO7</td>
            <td>CO8</td>
            <td colspan = "2">Overall</td>
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
            
            $query = "INSERT INTO `mp_11_course_exit_survey_1` (`name`, `name1`, `name2`, `name3`, `name4`, `name5`, `name6`, `name7`, `Seat1`, `CO1_1`, `CO2_1`, `CO3_1`, `CO4_1`, `CO5_1`, `CO6_1`, `CO7_1`, `CO8_1`, `Total_1`, `Mean_1`, `Seat2`, `CO1_2`, `CO2_2`, `CO3_2`, `CO4_2`, `CO5_2`, `CO6_2`, `CO7_2`, `CO8_2`, `Total_2`, `Mean_2`, `Seat3`, `CO1_3`, `CO2_3`, `CO3_3`, `CO4_3`, `CO5_3`, `CO6_3`, `CO7_3`, `CO8_3`, `Total_3`, `Mean_3`, `Seat4`, `CO1_4`, `CO2_4`, `CO3_4`, `CO4_4`, `CO5_4`, `CO6_4`, `CO7_4`, `CO8_4`, `Total_4`, `Mean_4`, `Av1`, `Av2`, `Av3`, `Av4`, `Av5`, `Av6`, `Av7`, `Av8`, `Avt`, `MeanAvg`) VALUES ('$_POST[name]', '$_POST[name1]','$_POST[name2]', '$_POST[name3]','$_POST[name4]','$_POST[name5]','$_POST[name6]','$_POST[name7]', '$_POST[Seat1]', '$_POST[CO1_1]', '$_POST[CO2_1]', '$_POST[CO3_1]', '$_POST[CO4_1]', '$_POST[CO5_1]', '$_POST[CO6_1]', '$_POST[CO7_1]', '$_POST[CO8_1]', '$_POST[Total_1]', '$_POST[Mean_1]', '$_POST[Seat2]', '$_POST[CO1_2]', '$_POST[CO2_2]', '$_POST[CO3_2]', '$_POST[CO4_2]', '$_POST[CO5_2]', '$_POST[CO6_2]', '$_POST[CO7_2]', '$_POST[CO8_2]', '$_POST[Total_2]', '$_POST[Mean_2]', '$_POST[Seat3]', '$_POST[CO1_3]', '$_POST[CO2_3]', '$_POST[CO3_3]', '$_POST[CO4_3]', '$_POST[CO5_3]', '$_POST[CO6_3]', '$_POST[CO7_3]', '$_POST[CO8_3]', '$_POST[Total_3]', '$_POST[Mean_3]', '$_POST[Seat4]', '$_POST[CO1_4]', '$_POST[CO2_4]', '$_POST[CO3_4]', '$_POST[CO4_4]', '$_POST[CO5_4]', '$_POST[CO6_4]', '$_POST[CO7_4]', '$_POST[CO8_4]', '$_POST[Total_4]', '$_POST[Mean_4]', '$_POST[Av1]', '$_POST[Av2]', '$_POST[Av3]', '$_POST[Av4]', '$_POST[Av5]', '$_POST[Av6]', '$_POST[Av7]', '$_POST[Av8]', '$_POST[Avt]', '$_POST[MeanAvg]')";
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
    <h4>Course Exit Survey Analysis</h4>
    <form action="" method="POST">
    <table align="center" border="1" height="700px" width="90%" cellspacing="1">
        <tr>
            <th>Sr No.</th>
            <th>Analysis Criteria</th>
            <th>Q1</th>
            <th>Q2</th>
            <th>Q3</th>
            <th>Q4</th>
            <th>Q5</th>
            <th>Q6</th>
            <th>Q7</th>
            <th>Q8</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>CO1</td>
            <td>CO2</td>
            <td>CO3</td>
            <td>CO4</td>
            <td>CO5</td>
            <td>CO6</td>
            <td>CO7</td>
            <td>CO8</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Total Students in the Course</td>
            <td rowspan="1"><input type="text" name="Totalstud1" id="Totalstud1" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color: red;"></input></td>
            <td rowspan="1"><input type="text" name="Totalstud2" id="Totalstud2" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color: red;"></input></td>
            <td rowspan="1"><input type="text" name="Totalstud3" id="Totalstud3" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color: red;"></input></td>
            <td rowspan="1"><input type="text" name="Totalstud4" id="Totalstud4" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color: red;"></input></td>
            <td rowspan="1"><input type="text" name="Totalstud5" id="Totalstud5" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color: red;"></input></td>
            <td rowspan="1"><input type="text" name="Totalstud6" id="Totalstud6" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color: red;"></input></td>
            <td rowspan="1"><input type="text" name="Totalstud7" id="Totalstud7" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color: red;"></input></td>
            <td rowspan="1"><input type="text" name="Totalstud8" id="Totalstud8" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color: red;"></input></td>

        </tr>

        <tr>
            <td>2</td>
            <td>Absent Students</td>
            <td rowspan="1"><input type="text" name="AB1" id="AB1" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="AB2" id="AB2" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="AB3" id="AB3" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="AB4" id="AB4" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="AB5" id="AB5" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="AB6" id="AB6" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="AB7" id="AB7" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="AB8" id="AB8" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            
        </tr>

        <tr>
            <td>3</td>
            <td>Total Survey Attended Students</td>
            <td rowspan="1"><input type="text" name="STS1" id="STS1" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="STS2" id="STS2" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="STS3" id="STS3" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="STS4" id="STS4" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="STS5" id="STS5" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="STS6" id="STS6" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="STS7" id="STS7" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="STS8" id="STS8" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
        </tr>

        <tr>
            <td>4</td>
            <td>No. of Lowest(1)</td>
            <td rowspan="1"><input type="text" name="L1_1" id="L1_1" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="L1_2" id="L1_2" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="L1_3" id="L1_3" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="L1_4" id="L1_4" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="L1_5" id="L1_5" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="L1_6" id="L1_6" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="L1_7" id="L1_7" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="L1_8" id="L1_8" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
        </tr>

        <tr>
            <td>5</td>
            <td>No. of Low(2)</td>
            <td rowspan="1"><input type="text" name="L2_1" id="L2_1" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="L2_2" id="L2_2" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="L2_3" id="L2_3" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="L2_4" id="L2_4" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="L2_5" id="L2_5" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="L2_6" id="L2_6" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="L2_7" id="L2_7" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="L2_8" id="L2_8" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
        </tr>

       

        <tr>
            <td>6</td>
            <td>No. of Medium(3)</td>
            <td rowspan="1"><input type="text" name="M1" id="M1" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="M2" id="M2" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="M3" id="M3" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="M4" id="M4" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="M5" id="M5" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="M6" id="M6" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="M7" id="M7" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="M8" id="M8" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
        </tr>

        <tr>
            <td>7</td>
            <td>No. of High(4)</td>
            <td rowspan="1"><input type="text" name="H1_1" id="H1_1" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="H1_2" id="H1_2" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="H1_3" id="H1_3" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="H1_4" id="H1_4" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="H1_5" id="H1_5" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="H1_6" id="H1_6" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="H1_7" id="H1_7" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="H1_8" id="H1_8" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
        </tr>

        <tr>
            <td>8</td>
            <td>No. of Highest(5)</td>
            <td rowspan="1"><input type="text" name="H2_1" id="H2_1" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="H2_2" id="H2_2" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="H2_3" id="H2_3" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="H2_4" id="H2_4" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="H2_5" id="H2_5" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="H2_6" id="H2_6" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="H2_7" id="H2_7" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="H2_8" id="H2_8" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
        </tr>

        <tr>
            <td>3</td>
            <td>Total Survey Attended Students</td>
            <td rowspan="1"><input type="text" name="ST1" id="ST1" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="ST2" id="ST2" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="ST3" id="ST3" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="ST4" id="ST4" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="ST5" id="ST5" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="ST6" id="ST6" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="ST7" id="ST7" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
            <td rowspan="1"><input type="text" name="ST8" id="ST8" value="" style="margin: 0px; width: 100%; height: 100%; border: 0px; background-color:plum;"></input></td>
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

            $query = "INSERT INTO `mp_11_course_exit_survey_2` (`Totalstud1`, `Totalstud2`, `Totalstud3`, `Totalstud4`, `Totalstud5`, `Totalstud6`, `Totalstud7`, `Totalstud8`, `AB1`, `AB2`, `AB3`, `AB4`, `AB5`, `AB6`, `AB7`, `AB8`, `STS1`, `STS2`, `STS3`, `STS4`, `STS5`, `STS6`, `STS7`, `STS8`, `L1_1`, `L1_2`, `L1_3`, `L1_4`, `L1_5`, `L1_6`, `L1_7`, `L1_8`, `L2_1`, `L2_2`, `L2_3`, `L2_4`, `L2_5`, `L2_6`, `L2_7`, `L2_8`, `M1`, `M2`, `M3`, `M4`, `M5`, `M6`, `M7`, `M8`, `H1_1`, `H1_2`, `H1_3`, `H1_4`, `H1_5`, `H1_6`, `H1_7`, `H1_8`, `H2_1`, `H2_2`, `H2_3`, `H2_4`, `H2_5`, `H2_6`, `H2_7`, `H2_8`, `ST1`, `ST2`, `ST3`, `ST4`, `ST5`, `ST6`, `ST7`, `ST8`) VALUES ('$_POST[Totalstud1]', '$_POST[Totalstud2]','$_POST[Totalstud3]', '$_POST[Totalstud4]','$_POST[Totalstud5]','$_POST[Totalstud6]','$_POST[Totalstud7]','$_POST[Totalstud8]', '$_POST[AB1]', '$_POST[AB2]', '$_POST[AB3]', '$_POST[AB4]', '$_POST[AB5]', '$_POST[AB6]', '$_POST[AB7]', '$_POST[AB8]', '$_POST[STS1]', '$_POST[STS2]', '$_POST[STS3]', '$_POST[STS4]', '$_POST[STS5]', '$_POST[STS6]', '$_POST[STS7]', '$_POST[STS8]', '$_POST[L1_1]', '$_POST[L1_2]', '$_POST[L1_3]', '$_POST[L1_4]', '$_POST[L1_5]', '$_POST[L1_6]', '$_POST[L1_7]', '$_POST[L1_8]', '$_POST[L2_1]', '$_POST[L2_2]', '$_POST[L2_3]', '$_POST[L2_4]', '$_POST[L2_5]', '$_POST[L2_6]', '$_POST[L2_7]', '$_POST[L2_8]', '$_POST[M1]', '$_POST[M2]', '$_POST[M3]', '$_POST[M4]', '$_POST[M5]', '$_POST[M6]', '$_POST[M7]', '$_POST[M8]', '$_POST[H1_1]', '$_POST[H1_2]', '$_POST[H1_3]', '$_POST[H1_4]', '$_POST[H1_5]', '$_POST[H1_6]', '$_POST[H1_7]', '$_POST[H1_8]', '$_POST[H2_1]', '$_POST[H2_2]', '$_POST[H2_3]', '$_POST[H2_4]', '$_POST[H2_5]', '$_POST[H2_6]', '$_POST[H2_7]', '$_POST[H2_8]', '$_POST[ST1]', '$_POST[ST2]', '$_POST[ST3]', '$_POST[ST4]', '$_POST[ST5]', '$_POST[ST6]', '$_POST[ST7]', '$_POST[ST8]')";
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