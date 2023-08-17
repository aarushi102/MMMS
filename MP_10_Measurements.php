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
    <title>Measurements CO PO </title>
</head>
<body>
    <h1 align = "center">SHREE L.R. TIWARI COLLEGE OF ENGINEERING</h1>
    <h2 align = "center"><b>DEPARTMENT OF COMPUTER ENGINEERING</b></h2>
    <h4 align = "center">Student's Progressive Assesment for Laboratory Experiments</h4>

    <form action="" method="POST">
         <table align="left" border="0" height="" width="" cellspacing="0">
             <tr>
                 <td>Academic Year : <input type="text" id="name1" name="name1"> </td>
                </tr> <tr>
                <td>Course Code : <input type="text" id="name2" name="name2"> </td>
                </tr><tr>     
                <td>Course Name : <input type="text" id="name3" name="name3"> </td>
                 </tr>      
                <td>Faculty Incharge : <input type="text" id="name4" name="name4"> </td>
                            </tr> <tr>
                <td>Total number of students : <input type="text" id="name5" name="name5"> </td>
                            </tr>
                             <tr>
             <td>Academic Year :<input type="text" id="name6" name="name6"> </td>
                </tr>
         </table>
            
         <table align="center" border="1" height="100px" width="100%" cellspacing="0">
            <tr>
                <th rowspan = "5">Roll No.</th>
                <th rowspan = "5">Exam Seat No.</th>
                <th rowspan = "5">Name of the Student</th>
                <th colspan = "24">Direct Assesment Tools</th>
            </tr>

            <tr>
                <td colspan = "4"><b>1</b></td>
                <td colspan = "4"><b>2</b></td>
                <td colspan = "4"><b>3</b></td>
                <td colspan = "4"><b>4</b></td>
                <td colspan = "4"><b>5</b></td>
                <td colspan = "4"><b>6</b></td>
            </tr>

            <tr>
                <td colspan = "4"><b>CO1</b></td>
                <td colspan = "4"><b>CO2</b></td>
                <td colspan = "4"><b>CO3</b></td>
                <td colspan = "4"><b>CO4</b></td>
                <td colspan = "4"><b>CO5</b></td>
                <td colspan = "4"><b>CO6</b></td>
                <td rowspan = "2">TW</td>
                <td rowspan = "2">PR+OR</td>

            </tr>
            <tr>
                <td>A</td>
                <td>B</td>
                <td>C</td>
                <td>D</td>
                <td>A</td>
                <td>B</td>
                <td>C</td>
                <td>D</td>
                <td>A</td>
                <td>B</td>
                <td>C</td>
                <td>D</td>
                <td>A</td>
                <td>B</td>
                <td>C</td>
                <td>D</td>
                <td>A</td>
                <td>B</td>
                <td>C</td>
                <td>D</td>
                <td>A</td>
                <td>B</td>
                <td>C</td>
                <td>D</td>

            </tr>

            <tr>
                <td>30</td>
                <td>15</td>
                <td>18</td>
                <td>10</td>
                <td>75</td>
                <td>15</td>
                <td>18</td>
                <td>10</td>
                <td>75</td>
                <td>15</td>
                <td>18</td>
                <td>10</td>
                <td>60</td>
                <td>15</td>
                <td>18</td>
                <td>10</td>
                <td>30</td>
                <td>15</td>
                <td>18</td>
                <td>10</td>
                <td>30</td>
                <td>15</td>
                <td>18</td>
                <td>10</td>
                <td>50</td>
                <td>50</td>
            </tr>

            <td>1</td>
           <td rowspan="1"><input type="text" name="A1" id="A1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td>Harsh Tiwari</td>
                <td rowspan="1"><input type="text" name="A2" id="A2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="A3" id="A3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="A4" id="A4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="A5" id="A5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="A6" id="A6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="A7" id="A7" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="A8" id="A8" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="A9" id="A9" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="A10" id="A10" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="A11" id="A11" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="A12" id="A12" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="A13" id="A13" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="A14" id="A14" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="A15" id="A15" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="A16" id="A16" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="A17" id="A17" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="A18" id="A18" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="A19" id="A19" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="A20" id="A20" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="A21" id="A21" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="A22" id="A22" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="A23" id="A23" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="A24" id="A24" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="A25" id="A25" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="A26" id="A26" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="A27" id="A27" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                

            </tr>

            <td>2</td>
            <td rowspan="1"><input type="text" name="B1" id="B1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td>Vibhanshu Singh</td>
                 <td rowspan="1"><input type="text" name="B2" id="B2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                 <td rowspan="1"><input type="text" name="B3" id="B3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                 <td rowspan="1"><input type="text" name="B4" id="B4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                 <td rowspan="1"><input type="text" name="B5" id="B5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                 <td rowspan="1"><input type="text" name="B6" id="B6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                 <td rowspan="1"><input type="text" name="B7" id="B7" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                 <td rowspan="1"><input type="text" name="B8" id="B8" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                 <td rowspan="1"><input type="text" name="B9" id="B9" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                 <td rowspan="1"><input type="text" name="B10" id="B10" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                 <td rowspan="1"><input type="text" name="B11" id="B11" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                 <td rowspan="1"><input type="text" name="B12" id="B12" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                 <td rowspan="1"><input type="text" name="B13" id="B13" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                 <td rowspan="1"><input type="text" name="B14" id="B14" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                 <td rowspan="1"><input type="text" name="B15" id="B15" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                 <td rowspan="1"><input type="text" name="B16" id="B16" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                 <td rowspan="1"><input type="text" name="B17" id="B17" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                 <td rowspan="1"><input type="text" name="B18" id="B18" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                 <td rowspan="1"><input type="text" name="B19" id="B19" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                 <td rowspan="1"><input type="text" name="B20" id="B20" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                 <td rowspan="1"><input type="text" name="B21" id="B21" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                 <td rowspan="1"><input type="text" name="B22" id="B22" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                 <td rowspan="1"><input type="text" name="B23" id="B23" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                 <td rowspan="1"><input type="text" name="B24" id="B24" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                 <td rowspan="1"><input type="text" name="B25" id="B25" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                 <td rowspan="1"><input type="text" name="B26" id="B26" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                 <td rowspan="1"><input type="text" name="B27" id="B27" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                 
 
            </tr>

            <td>3</td>
           <td rowspan="1"><input type="text" name="C1" id="C1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td>Akshay Singh</td>
                <td rowspan="1"><input type="text" name="C2" id="C2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="C3" id="C3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="C4" id="C4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="C5" id="C5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="C6" id="C6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="C7" id="C7" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="C8" id="C8" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="C9" id="C9" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="C10" id="C10" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="C11" id="C11" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="C12" id="C12" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="C13" id="C13" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="C14" id="C14" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="C15" id="C15" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="C16" id="C16" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="C17" id="C17" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="C18" id="C18" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="C19" id="C19" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="C20" id="C20" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="C21" id="C21" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="C22" id="C22" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="C23" id="C23" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="C24" id="C24" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="C25" id="C25" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="C26" id="C26" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="C27" id="C27" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                

            </tr>

            <td>1</td>
           <td rowspan="1"><input type="text" name="D1" id="D1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td>Aarushi Tiwari</td>
                <td rowspan="1"><input type="text" name="D2" id="D2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="D3" id="D3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="D4" id="D4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="D5" id="D5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="D6" id="D6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="D7" id="D7" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="D8" id="D8" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="D9" id="D9" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="D10" id="D10" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="D11" id="D11" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="D12" id="D12" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="D13" id="D13" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="D14" id="D14" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="D15" id="D15" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="D16" id="D16" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="D17" id="D17" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="D18" id="D18" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="D19" id="D19" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="D20" id="D20" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="D21" id="D21" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="D22" id="D22" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="D23" id="D23" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="D24" id="D24" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="D25" id="D25" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="D26" id="D26" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="D27" id="D27" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                


            </tr>

            <tr>
                <td colspan = "3">Corresponding 60% marks in in the internal assessment</td>
                <td rowspan="1"><input type="text" name="E2" id="E2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="E2" id="E2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="E3" id="E3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="E4" id="E4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="E5" id="E5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="E6" id="E6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="E7" id="E7" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="E8" id="E8" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="E9" id="E9" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="E10" id="E10" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="E11" id="E11" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="E12" id="E12" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="E13" id="E13" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="E14" id="E14" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="E15" id="E15" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="E16" id="E16" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="E17" id="E17" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="E18" id="E18" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="E19" id="E19" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="E20" id="E20" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="E21" id="E21" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="E22" id="E22" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="E23" id="E23" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="E24" id="E24" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="E25" id="E25" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="E26" id="E26" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                
                <!-- <td rowspan="1"><input type="text" name="" id="" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td> -->
                  
            </tr>

            <tr>
                <td colspan = "3">No. students score more than 60% marks in in the internal assessment		
                </td>
                <td rowspan="1"><input type="text" name="F2" id="F2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="F3" id="F3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="F4" id="F4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="F5" id="F5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="F6" id="F6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="F7" id="F7" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="F8" id="F8" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="F9" id="F9" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="F10" id="F10" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="F11" id="F11" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="F12" id="F12" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="F13" id="F13" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="F14" id="F14" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="F15" id="F15" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="F16" id="F16" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="F17" id="F17" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="F18" id="F18" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="F19" id="F19" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="F20" id="F20" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="F21" id="F21" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="F22" id="E22" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="F23" id="F23" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="F24" id="F24" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="F25" id="F25" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="F26" id="F26" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
               
                
            </tr>

            <tr>
                <td colspan = "3">% students score more than 60% marks in in the internal assessment		
                </td>
                <td rowspan="1"><input type="text" name="G2" id="G2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="G3" id="G3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="G4" id="G4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="G5" id="G5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="G6" id="G6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="G7" id="G7" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="G8" id="G8" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="G9" id="G9" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="G10" id="G10" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="G11" id="G11" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="G12" id="G12" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="G13" id="G13" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="G14" id="G14" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="G15" id="G15" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="G16" id="G16" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="G17" id="G17" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="G18" id="G18" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="G19" id="G19" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="G20" id="G20" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="G21" id="G21" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="G22" id="G22" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="G23" id="G23" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="G24" id="G24" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="G25" id="G25" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="G26" id="G26" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                
                
            </tr>

            <tr>
                <td colspan = "3">Attainment Level		
                </td>
                <td rowspan="1"><input type="text" name="H2" id="H2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="H3" id="H3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="H4" id="H4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="H5" id="H5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="H6" id="H6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="H7" id="H7" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="H8" id="H8" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="H9" id="H9" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="H10" id="H10" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="H11" id="H11" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="H12" id="H12" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="H13" id="H13" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="H14" id="H14" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="H15" id="H15" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="H16" id="H16" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="H17" id="H17" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="H18" id="H18" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="H19" id="H19" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="H20" id="H20" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="H21" id="H21" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="H22" id="H22" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="H23" id="H23" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="H24" id="H24" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="H25" id="H25" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td rowspan="1"><input type="text" name="H26" id="H26" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
               
                
            </tr>
         </table>
<br>
         <table align="left" border="1" height="100px" width="50%" cellspacing="0">
             <tr>
                 <th>Attainment level</th>
                 <th>Threshold Vaue</th>
                 <th>Remark</th>
             </tr>

            <tr>
                <td>1</td>
                <td rowspan="1"><input type="text" name="TH1" id="TH1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td>60-69% students score more than 60% marks in the internal assesment</td>
            </tr>

            <tr>
                <td>2</td>
                <td rowspan="1"><input type="text" name="TH2" id="TH2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td>70-79% students score more than 60% marks in the internal assesment</td>
            </tr>

            <tr>
                <td>3</td>
                <td rowspan="1"><input type="text" name="TH3" id="TH3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
                <td>80% students score more than 60% marks in the internal assesment</td>
            </tr>
            <tr>
                 <input type="submit" name="enter" id="enter" value="Add Details"></button> 
            </td>
        </tr>
         </table>
    </form>
    
     <?php
    $connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms.sql");
    if(isset($_POST['enter'])){
      //  if(!empty($_POST['course_no']) && !empty($_POST['y1']) && !empty($_POST['cc1']) && !empty($_POST['c1']) && !empty($_POST['p1']) && !empty($_POST['cn1']) && !empty($_POST['d1']) && !empty($_POST['de1']) && !empty($_POST['sem']) && !empty($_POST['f1'])){
            
            $query = "INSERT INTO `mp_10_measurements` (`name1`, `name2`, `name3`, `name4`, `name5`, `name6`, `A1`, `A2`, `A3`, `A4`, `A5`, `A6`, `A7`, `A8`, `A9`, `A10`, `A11`, `A12`, `A13`, `A14`, `A15`, `A16`, `A17`, `A18`, `A19`, `A20`, `A21`, `A22`, `A23`, `A24`, `A25`, `A26`, `A27`, `B1`, `B2`, `B3`, `B4`, `B5`, `B6`, `B7`, `B8`, `B9`, `B10`, `B11`, `B12`, `B13`, `B14`, `B15`, `B16`, `B17`, `B18`, `B19`, `B20`, `B21`, `B22`, `B23`, `B24`, `B25`, `B26`, `B27`, `C1`, `C2`, `C3`, `C4`, `C5`, `C6`, `C7`, `C8`, `C9`, `C10`, `C11`, `C12`, `C13`, `C14`, `C15`, `C16`, `C17`, `C18`, `C19`, `C20`, `C21`, `C22`, `C23`, `C24`, `C25`, `C26`, `C27`, `D1`, `D2`, `D3`, `D4`, `D5`, `D6`, `D7`, `D8`, `D9`, `D10`, `D11`, `D12`, `D13`, `D14`, `D15`, `D16`, `D17`, `D18`, `D19`, `D20`, `D21`, `D22`, `D23`, `D24`, `D25`, `D26`, `D27`, `E2`, `E3`, `E4`, `E5`, `E6`, `E7`, `E8`, `E9`, `E10`, `E11`, `E12`, `E13`, `E14`, `E15`, `E16`, `E17`, `E18`, `E19`, `E20`, `E21`, `E22`, `E23`, `E24`, `E25`, `E26`, `F2`, `F3`, `F4`, `F5`, `F6`, `F7`, `F8`, `F9`, `F10`, `F11`, `F12`, `F13`, `F14`, `F15`, `F16`, `F17`, `F18`, `F19`, `F20`, `F21`, `F22`, `F23`, `F24`, `F25`, `F26`, `G2`, `G3`, `G4`, `G5`, `G6`, `G7`, `G8`, `G9`, `G10`, `G11`, `G12`, `G13`, `G14`, `G15`, `G16`, `G17`, `G18`, `G19`, `G20`, `G21`, `G22`, `G23`, `G24`, `G25`, `G26`, `H2`, `H3`, `H4`, `H5`, `H6`, `H7`, `H8`, `H9`, `H10`, `H11`, `H12`, `H13`, `H14`, `H15`, `H16`, `H17`, `H18`, `H19`, `H20`, `H21`, `H22`, `H23`, `H24`, `H25`, `H26`, `TH1`, `TH2`, `TH3`) VALUES ('$_POST[name1]','$_POST[name2]', '$_POST[name3]','$_POST[name4]','$_POST[name5]','$_POST[name6]', '$_POST[A1]', '$_POST[A2]', '$_POST[A3]', '$_POST[A4]', '$_POST[A5]', '$_POST[A6]', '$_POST[A7]', '$_POST[A8]', '$_POST[A9]', '$_POST[A10]', '$_POST[A11]', '$_POST[A12]', '$_POST[A13]', '$_POST[A14]', '$_POST[A15]', '$_POST[A16]', '$_POST[A17]', '$_POST[A18]', '$_POST[A19]', '$_POST[A20]', '$_POST[A21]', '$_POST[A22]', '$_POST[A23]', '$_POST[A24]', '$_POST[A25]', '$_POST[A26]', '$_POST[A27]', '$_POST[B1]', '$_POST[B2]', '$_POST[B3]', '$_POST[B4]', '$_POST[B5]', '$_POST[B6]', '$_POST[B7]', '$_POST[B8]', '$_POST[B9]', '$_POST[B10]', '$_POST[B11]', '$_POST[B12]', '$_POST[B13]', '$_POST[B14]', '$_POST[B15]', '$_POST[B16]', '$_POST[B17]', '$_POST[B18]', '$_POST[B19]', '$_POST[B20]', '$_POST[B21]', '$_POST[B22]', '$_POST[B23]', '$_POST[B24]', '$_POST[B25]', '$_POST[B26]', '$_POST[B27]', '$_POST[C1]', '$_POST[C2]', '$_POST[C3]', '$_POST[C4]', '$_POST[C5]', '$_POST[C6]', '$_POST[C7]', '$_POST[C8]', '$_POST[C9]', '$_POST[C10]', '$_POST[C11]', '$_POST[C12]', '$_POST[C13]', '$_POST[C14]', '$_POST[C15]', '$_POST[C16]', '$_POST[C17]', '$_POST[C18]', '$_POST[C19]', '$_POST[C20]', '$_POST[C21]', '$_POST[C22]', '$_POST[C23]', '$_POST[C24]', '$_POST[C25]', '$_POST[C26]', '$_POST[C27]', '$_POST[D1]', '$_POST[D2]', '$_POST[D3]', '$_POST[D4]', '$_POST[D5]', '$_POST[D6]', '$_POST[D7]', '$_POST[D8]', '$_POST[D9]', '$_POST[D10]', '$_POST[D11]', '$_POST[D12]', '$_POST[D13]', '$_POST[D14]', '$_POST[D15]', '$_POST[D16]', '$_POST[D17]', '$_POST[D18]', '$_POST[D19]', '$_POST[D20]', '$_POST[D21]', '$_POST[D22]', '$_POST[D23]', '$_POST[D24]', '$_POST[D25]', '$_POST[D26]', '$_POST[D27]', '$_POST[E2]', '$_POST[E3]', '$_POST[E4]', '$_POST[E5]', '$_POST[E6]', '$_POST[E7]', '$_POST[E8]', '$_POST[E9]', '$_POST[E10]', '$_POST[E11]', '$_POST[E12]', '$_POST[E13]', '$_POST[E14]', '$_POST[E15]', '$_POST[E16]', '$_POST[E17]', '$_POST[E18]', '$_POST[E19]', '$_POST[E20]', '$_POST[E21]', '$_POST[E22]', '$_POST[E23]', '$_POST[E24]', '$_POST[E25]', '$_POST[E26]', '$_POST[F2]', '$_POST[F3]', '$_POST[F4]', '$_POST[F5]', '$_POST[F6]', '$_POST[F7]', '$_POST[F8]', '$_POST[F9]', '$_POST[F10]', '$_POST[F11]', '$_POST[F12]', '$_POST[F13]', '$_POST[F14]', '$_POST[F15]', '$_POST[F16]', '$_POST[F17]', '$_POST[F18]', '$_POST[F19]', '$_POST[F20]', '$_POST[F21]', '$_POST[F22]', '$_POST[F23]', '$_POST[F24]', '$_POST[F25]', '$_POST[F26]', '$_POST[G2]', '$_POST[G3]', '$_POST[G4]', '$_POST[G5]', '$_POST[G6]', '$_POST[G7]', '$_POST[G8]', '$_POST[G9]', '$_POST[G10]', '$_POST[G11]', '$_POST[G12]', '$_POST[G13]', '$_POST[G14]', '$_POST[G15]', '$_POST[G16]', '$_POST[G17]', '$_POST[G18]', '$_POST[G19]', '$_POST[G20]', '$_POST[G21]', '$_POST[G22]', '$_POST[G23]', '$_POST[G24]', '$_POST[G25]', '$_POST[G26]', '$_POST[H2]', '$_POST[H3]', '$_POST[H4]', '$_POST[H5]', '$_POST[H6]', '$_POST[H7]', '$_POST[H8]', '$_POST[H9]', '$_POST[H10]', '$_POST[H11]', '$_POST[H12]', '$_POST[H13]', '$_POST[H14]', '$_POST[H15]', '$_POST[H16]', '$_POST[H17]', '$_POST[H18]', '$_POST[H19]', '$_POST[H20]', '$_POST[H21]', '$_POST[H22]', '$_POST[H23]', '$_POST[H24]', '$_POST[H25]', '$_POST[H26]', '$_POST[TH1]', '$_POST[TH2]', '$_POST[TH3]')";
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