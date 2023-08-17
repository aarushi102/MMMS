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
    <title>Continous Assesment Record</title>
</head>
<body>
    <h1 align = "center">SHREE L.R. TIWARI COLLEGE OF ENGINEERING</h1>
    <h2 align = "center"><b>DEPARTMENT OF COMPUTER ENGINEERING</b></h2>
    <h4 align = "center">Student's Progressive Assesment for Laboratory Experiments</h4>

    <form action="" method="POST">
         <table align="left" border="0" height="" width="" cellspacing="0">
             <tr>
                 <td>Academic Year : <input type="text" id="name1" name="name1"></td>
                <td>Class :  <input type="text" id="name2" name="name2"></td>
                </tr>
             <tr>
                 <td>Course Code : <input type="text" id="name3" name="name3"></td>
                <td>Div : <input type="text" id="name4" name="name4"></td>
                </tr>
                
                <tr>
                <td>Course Name : <input type="text" id="name5" name="name5"></td>
                    <td>Sem :  <input type="text" id="name6" name="name6"></td>
                </tr>
                
                <tr>     
                <td>Faculty Incharge : <input type="text" id="name7" name="name7"></td>
                        <td>Batch :  <input type="text" id="name7" name="name8"></td>
                 </tr>  
         </table>

         <table  align="center" border="1" height="100px" width="50%" cellspacing="0">
         <tr>
            <th rowspan = "6">Roll No.</th>
            <th rowspan = "6">Exam Seat No.</th>
            <th rowspan = "6">Name of the Student</th>
            <th colspan = "32">Direct Assesment tools</th>
        </tr>

        <tr>
            <td colspan = "20">Laboratory Journal (Experiments)</td>
            <td colspan="6">Course Assignments </td>
            <td colspan="6"> CO based Quizzes</td>
            <td rowspan = "3">Course Project</td>
            <td rowspan = "3">TW</td>
            <td rowspan = "3">PR+OR</td>
            <td colspan = "7" rowspan="3">Term Work</td>
            <td colspan = "5" rowspan="3">Oral Exam</td>
            
        </tr>

        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td>10</td>
            <td>11</td>
            <td>12</td>
            <td>13</td>
            <td>14</td>
            <td>15</td>
            <td>16</td>
            <td>17</td>
            <td>18</td>
            <td>19</td>
            <td>20</td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            

        </tr>

        <tr>
            <td>Exp1</td>
            <td>Exp2</td>
            <td>Exp3</td>
            <td>Exp4</td>
            <td>Exp5</td>
            <td>Exp6</td>
            <td>Exp7</td>
            <td>Exp8</td>
            <td>Exp9</td>
            <td>Exp10</td>
            <td>Exp11</td>
            <td>Exp12</td>
            <td>Exp13</td>
            <td>Exp14</td>
            <td>Exp15</td>
            <td>Exp16</td>
            <td>Exp17</td>
            <td>Exp18</td>
            <td>Exp19</td>
            <td>Exp20</td>
            <td>A1</td>
            <td>A2</td>
            <td>A3</td>
            <td>A4</td>
            <td>A5</td>
            <td>A6</td>
            <td>Quiz1</td>
            <td>Quiz2</td>
            <td>Quiz3</td>
            <td>Quiz4</td>
            <td>Quiz5</td>
            <td>Quiz6</td>

            
        </tr>

        <tr>
            <td>CO1</td>
            <td>CO1</td>
            <td>CO2</td>
            <td>CO2</td>
            <td>CO2</td>
            <td>CO2</td>
            <td>CO2</td>
            <td>CO3</td>
            <td>CO3</td>
            <td>CO3</td>
            <td>CO3</td>
            <td>CO3</td>
            <td>CO4</td>
            <td>CO4</td>
            <td>CO4</td>
            <td>CO4</td>
            <td>CO5</td>
            <td>CO5</td>
            <td>CO6</td>
            <td>CO6</td>
            <td>CO1</td>
            <td>CO2</td>
            <td>CO3</td>
            <td>CO4</td>
            <td>CO5</td>
            <td>CO6</td>
            <td>CO1</td>
            <td>CO2</td>
            <td>CO3</td>
            <td>CO4</td>
            <td>CO5</td>
            <td>CO6</td>
            <td>All</td>
            <td>All</td>
            <td>All</td>
            <td>Laboratory Work(Experiments)</td>
            <td>Mini Project</td>
            <td>Assignments</td>
            <td>Attendence Marks</td>
            <td>Total term work marks</td>
            <td>Term Work</td>
            <td>Grading</td>
            <td>Internal</td>
            <td>External</td>
            <td>Avg</td>
            <td>Oral</td>
            <td>Grading</td>
        </tr>

        <tr>
            
            <td>15</td>
            <td>15</td>
            <td>15</td>
            <td>15</td>
            <td>15</td>
            <td>15</td>
            <td>15</td>
            <td>15</td>
            <td>15</td>
            <td>15</td>
            <td>15</td>
            <td>15</td>
            <td>15</td>
            <td>15</td>
            <td>15</td>
            <td>15</td>
            <td>15</td>
            <td>15</td>
            <td>15</td>
            <td>15</td>
            <td>15</td>
            <td>15</td>
            <td>15</td>
            <td>15</td>
            <td>15</td>
            <td>15</td>
            <td>10</td>
            <td>10</td>
            <td>10</td>
            <td>10</td>
            <td>10</td>
            <td>10</td>
            <td>18</td>
            <td>50</td>
            <td>50</td>
            <td>Out of 20</td>
            <td>Out of 5(B)</td>
            <td>Out of 5(C)</td>
            <td>Out of 5(D)</td>
            <td>(A+B+C+D) (Out of 25)</td>
            <td>TW %</td>
            <td>Grade TW</td>
            <td>50</td>
            <td>50</td>
            <td>50</td>
            <td>Percentage</td>
            <td>Grade</td>
         </tr>

         <tr>
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
             <td rowspan="1"><input type="text" name="A21" id="A22" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="A22" id="A22" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="A23" id="A23" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="A24" id="A24" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="A25" id="A25" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="A26" id="A26" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="A27" id="A27" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="A28" id="A28" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="A29" id="A29" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="A30" id="A30" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="A31" id="A31" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="A32" id="A32" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="A33" id="A33" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="A34" id="A34" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="A35" id="A35" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="A36" id="A36" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="A37" id="A37" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="A38" id="A38" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="A39" id="A39" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="A40" id="A40" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="A41" id="A41" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="A42" id="A42" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="A43" id="A43" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="A44" id="A44" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="A45" id="A45" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="A46" id="A46" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="A47" id="A47" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="A48" id="A48" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>

         </tr>

         <tr>
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
            <td rowspan="1"><input type="text" name="B21" id="B22" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="B22" id="B22" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="B23" id="B23" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="B24" id="B24" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="B25" id="B25" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="B26" id="B26" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="B27" id="B27" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="B28" id="B28" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="B29" id="B29" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="B30" id="B30" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="B31" id="B31" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="B32" id="B32" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="B33" id="B33" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="B34" id="B34" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="B35" id="B35" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="B36" id="B36" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="B37" id="B37" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="B38" id="B38" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="B39" id="B39" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="B40" id="B40" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="B41" id="B41" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="B42" id="B42" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="B43" id="B43" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="B44" id="B44" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="B45" id="B45" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="B46" id="B46" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="B47" id="B47" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="B48" id="B48" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>

            </tr>

        <tr>
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
            <td rowspan="1"><input type="text" name="C21" id="C22" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="C22" id="C22" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="C23" id="C23" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="C24" id="C24" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="C25" id="C25" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="C26" id="C26" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="C27" id="C27" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="C28" id="C28" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="C29" id="C29" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="C30" id="C30" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="C31" id="C31" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="C32" id="C32" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="C33" id="C33" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="C34" id="C34" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="C35" id="C35" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="C36" id="C36" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="C37" id="C37" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="C38" id="C38" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="C39" id="C39" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="C40" id="C40" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="C41" id="C41" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="C42" id="C42" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="C43" id="C43" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="C44" id="C44" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="C45" id="C45" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="C46" id="C46" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="C47" id="C47" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="C48" id="C48" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>

        </tr>

        <tr>
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
             <td rowspan="1"><input type="text" name="D21" id="D22" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="D22" id="D22" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="D23" id="D23" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="D24" id="D24" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="D25" id="D25" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="D26" id="D26" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="D27" id="D27" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="D28" id="D28" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="D29" id="D29" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="D30" id="D30" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="D31" id="D31" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="D32" id="D32" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="D33" id="D33" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="D34" id="D34" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="D35" id="D35" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="D36" id="D36" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="D37" id="D37" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="D38" id="D38" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="D39" id="D39" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="D40" id="D40" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="D41" id="D41" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="D42" id="D42" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="D43" id="D43" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="D44" id="D44" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="D45" id="D45" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="D46" id="D46" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="D47" id="D47" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
             <td rowspan="1"><input type="text" name="D48" id="D48" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>

        </tr>
            <tr>
                <td>
                     <input type="submit" name="submit_4" id="submit_4" value="Enter Details"></button> 
                </td>
            </tr>
         </table>
</form>
 <?php
    $connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms.sql");
    if(isset($_POST['submit_4'])){
      //  if(!empty($_POST['course_no']) && !empty($_POST['y1']) && !empty($_POST['cc1']) && !empty($_POST['c1']) && !empty($_POST['p1']) && !empty($_POST['cn1']) && !empty($_POST['d1']) && !empty($_POST['de1']) && !empty($_POST['sem']) && !empty($_POST['f1'])){
            
            $query = "INSERT INTO `mp_9_continousass` (`name1`, `name2`, `name3`, `name4`, `name5`, `name6`, `name7`, `name8`, `A1`, `A2`, `A3`, `A4`, `A5`, `A6`, `A7`, `A8`, `A9`, `A10`, `A11`, `A12`, `A13`, `A14`, `A15`, `A16`, `A17`, `A18`, `A19`, `A20`, `A21`, `A22`, `A23`, `A24`, `A25`, `A26`, `A27`, `A28`, `A29`, `A30`, `A31`, `A32`, `A33`, `A34`, `A35`, `A36`, `A37`, `A38`, `A39`, `A40`, `A41`, `A42`, `A43`, `A44`, `A45`, `A46`, `A47`, `A48`, `B1`, `B2`, `B3`, `B4`, `B5`, `B6`, `B7`, `B8`, `B9`, `B10`, `B11`, `B12`, `B13`, `B14`, `B15`, `B16`, `B17`, `B18`, `B19`, `B20`, `B21`, `B22`, `B23`, `B24`, `B25`, `B26`, `B27`, `B28`, `B29`, `B30`, `B31`, `B32`, `B33`, `B34`, `B35`, `B36`, `B37`, `B38`, `B39`, `B40`, `B41`, `B42`, `B43`, `B44`, `B45`, `B46`, `B47`, `B48`, `C1`, `C2`, `C3`, `C4`, `C5`, `C6`, `C7`, `C8`, `C9`, `C10`, `C11`, `C12`, `C13`, `C14`, `C15`, `C16`, `C17`, `C18`, `C19`, `C20`, `C21`, `C22`, `C23`, `C24`, `C25`, `C26`, `C27`, `C28`, `C29`, `C30`, `C31`, `C32`, `C33`, `C34`, `C35`, `C36`, `C37`, `C38`, `C39`, `C40`, `C41`, `C42`, `C43`, `C44`, `C45`, `C46`, `C47`, `C48`, `D1`, `D2`, `D3`, `D4`, `D5`, `D6`, `D7`, `D8`, `D9`, `D10`, `D11`, `D12`, `D13`, `D14`, `D15`, `D16`, `D17`, `D18`, `D19`, `D20`, `D21`, `D22`, `D23`, `D24`, `D25`, `D26`, `D27`, `D28`, `D29`, `D30`, `D31`, `D32`, `D33`, `D34`, `D35`, `D36`, `D37`, `D38`, `D39`, `D40`, `D41`, `D42`, `D43`, `D44`, `D45`, `D46`, `D47`, `D48`) VALUES ('$_POST[name1]','$_POST[name2]', '$_POST[name3]','$_POST[name4]','$_POST[name5]','$_POST[name6]', '$_POST[name7]', '$_POST[name8]', '$_POST[A1]', '$_POST[A2]', '$_POST[A3]', '$_POST[A4]', '$_POST[A5]', '$_POST[A6]', '$_POST[A7]', '$_POST[A8]', '$_POST[A9]', '$_POST[A10]', '$_POST[A11]', '$_POST[A12]', '$_POST[A13]', '$_POST[A14]', '$_POST[A15]', '$_POST[A16]', '$_POST[A17]', '$_POST[A18]', '$_POST[A19]', '$_POST[A20]', '$_POST[A21]', '$_POST[A22]', '$_POST[A23]', '$_POST[A24]', '$_POST[A25]', '$_POST[A26]', '$_POST[A27]', '$_POST[A28]','$_POST[A29]', '$_POST[A30]', '$_POST[A31]','$_POST[A32]', '$_POST[A33]', '$_POST[A34]', '$_POST[A35]', '$_POST[A36]', '$_POST[A37]', '$_POST[A38]', '$_POST[A39]', '$_POST[A40]', '$_POST[A41]', '$_POST[A42]', '$_POST[A43]', '$_POST[A44]', '$_POST[A45]', '$_POST[A46]', '$_POST[A47]', '$_POST[A48]', '$_POST[B1]', '$_POST[B2]', '$_POST[B3]', '$_POST[B4]', '$_POST[B5]', '$_POST[B6]', '$_POST[B7]', '$_POST[B8]', '$_POST[B9]', '$_POST[B10]', '$_POST[B11]', '$_POST[B12]', '$_POST[B13]', '$_POST[B14]', '$_POST[B15]', '$_POST[B16]', '$_POST[B17]', '$_POST[B18]', '$_POST[B19]', '$_POST[B20]', '$_POST[B21]', '$_POST[B22]', '$_POST[B23]', '$_POST[B24]', '$_POST[B25]', '$_POST[B26]', '$_POST[B27]', '$_POST[B28]', '$_POST[B29]', '$_POST[B30]', '$_POST[B31]', '$_POST[B32]', '$_POST[B33]', '$_POST[B34]', '$_POST[B35]', '$_POST[B36]', '$_POST[B37]', '$_POST[B38]', '$_POST[B39]', '$_POST[B40]', '$_POST[B41]', '$_POST[B42]', '$_POST[B43]', '$_POST[B44]', '$_POST[B45]', '$_POST[B46]', '$_POST[B47]', '$_POST[B48]', '$_POST[C1]', '$_POST[C2]', '$_POST[C3]', '$_POST[C4]', '$_POST[C5]', '$_POST[C6]', '$_POST[C7]', '$_POST[C8]', '$_POST[C9]', '$_POST[C10]', '$_POST[C11]', '$_POST[C12]', '$_POST[C13]', '$_POST[C14]', '$_POST[C15]', '$_POST[C16]', '$_POST[C17]', '$_POST[C18]', '$_POST[C19]', '$_POST[C20]', '$_POST[C21]', '$_POST[C22]', '$_POST[C23]', '$_POST[C24]', '$_POST[C25]', '$_POST[C26]', '$_POST[C27]', '$_POST[C28]', '$_POST[C29]', '$_POST[C30]', '$_POST[C31]', '$_POST[C32]', '$_POST[C33]', '$_POST[C34]', '$_POST[C35]', '$_POST[C36]', '$_POST[C37]', '$_POST[C38]', '$_POST[C39]', '$_POST[C40]', '$_POST[C41]', '$_POST[C42]', '$_POST[C43]', '$_POST[C44]', '$_POST[C45]', '$_POST[C46]', '$_POST[C47]', '$_POST[C48]', '$_POST[D1]', '$_POST[D2]', '$_POST[D3]', '$_POST[D4]', '$_POST[D5]', '$_POST[D6]', '$_POST[D7]', '$_POST[D8]', '$_POST[D9]', '$_POST[D10]', '$_POST[D11]', '$_POST[D12]', '$_POST[D13]', '$_POST[D14]', '$_POST[D15]', '$_POST[D16]', '$_POST[D17]', '$_POST[D18]', '$_POST[D19]', '$_POST[D20]', '$_POST[D21]', '$_POST[D22]', '$_POST[D23]', '$_POST[D24]', '$_POST[D25]', '$_POST[D26]', '$_POST[D27]', '$_POST[D28]', '$_POST[D29]', '$_POST[D30]', '$_POST[D31]', '$_POST[D32]', '$_POST[D33]', '$_POST[D34]', '$_POST[D35]', '$_POST[D36]', '$_POST[D37]', '$_POST[D38]', '$_POST[D39]', '$_POST[D40]', '$_POST[D41]', '$_POST[D42]', '$_POST[D43]', '$_POST[D44]', '$_POST[D45]', '$_POST[D46]', '$_POST[D47]', '$_POST[D48]')";
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