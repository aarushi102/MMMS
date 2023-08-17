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
    <title>Assesment Form</title>
</head>
<body>

    <h2>Allocation of Assesment Instruments</h2>

    <form action="" method="POST">
        <table align="center" border="1" height="100px" width="50%" cellspacing="0">
            <tr>
                <th rowspan="2" colspan = "2"> <i>Assesment Methods</i> </th>
                <th colspan = "6" rowspan="1"><i>Course Outcome </i></th>
            </tr>
            <tr>
                <th>CO1</th>
                <th>CO2</th>
                <th>CO3</th>
                <th>CO4</th>
                <th>CO5</th>
                <th>CO6</th>
            </tr>
        <tr>
            <td rowspan="8">Direct</td>
            <td rowspan="1">Laboratory Journal No. of Experiments</td>
            <td rowspan="1"><input type="text" name="A1" id="A1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="A2" id="A2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="A3" id="A3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="A4" id="A4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="A5" id="A5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="A6" id="A6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            

        </tr>

        <tr>
            <td rowspan="1">Total Marks Laboratory Journal (A)</td>
            <td rowspan="1"><input type="text" name="B1" id="B1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="B2" id="B2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="B3" id="B3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="B4" id="B4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="B5" id="B5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="B6" id="B6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>

        </tr>
        <tr>
            <td rowspan="1">No. of Assignments </td>
            <td rowspan="1"><input type="text" name="C1" id="C1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="C2" id="C2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="C3" id="C3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="C4" id="C4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="C5" id="C5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="C6" id="C6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
        </tr>

        <tr>
            <td rowspan="1">Total Marks for Assignments(B)</td>
            <td rowspan="1"><input type="text" name="D1" id="D1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="D2" id="D2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="D3" id="D3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="D4" id="D4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="D5" id="D5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="D6" id="D6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            
        </tr>

        <tr>
            <td rowspan="1">Course Project Marks (C)</td>
            <td rowspan="1"><input type="text" name="E1" id="E1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="E2" id="E2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="E3" id="E3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="E4" id="E4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="E5" id="E5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="E6" id="E6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>

        </tr>

        <tr>
            <td rowspan="1">CO based Quizes Marks (D)</td>
            <td rowspan="1"><input type="text" name="F1" id="F1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="F2" id="F2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="F3" id="F3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="F4" id="F4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="F5" id="F5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="F6" id="F6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>

        </tr>

        <tr>
            <td rowspan = "1"> Total Marks</td>
            <td rowspan="1"><input type="text" name="G1" id="G1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="G2" id="G2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="G3" id="G3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="G4" id="G4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="G5" id="G5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="G6" id="G6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>

        </tr>

        <tr>
            <td rowspan="1">Total % allocation</td>
            <td rowspan="1"><input type="text" name="H1" id="H1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="H2" id="H2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="H3" id="H3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="H4" id="H4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="H5" id="H5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="H6" id="H6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            
        </tr>

        <tr>
            <td rowspan = "1"> Indirect</td>
            <td rowspan = "1"> Course exit Survey % </td>
            <td rowspan="1"><input type="text" name="J1" id="J1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="J2" id="J2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="J3" id="J3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="J4" id="J4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="J5" id="J5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="J6" id="J6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
        </tr>

        <tr>
            <td colspan="2">Direct + Indirect </td>
            <td rowspan="1"><input type="text" name="K1" id="K1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="K2" id="K2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="K3" id="K3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="K4" id="K4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="K5" id="K5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="K6" id="K6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>

        </tr>
        <tr>
            <td>
                <input type="submit" name="enter_details" value="Enter Details">
            </td>
        </tr>
        </table>
   
    <?php
$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms.sql");
    if(isset($_POST['enter_details'])){
      //  if(!empty($_POST['course_no']) && !empty($_POST['y1']) && !empty($_POST['cc1']) && !empty($_POST['c1']) && !empty($_POST['p1']) && !empty($_POST['cn1']) && !empty($_POST['d1']) && !empty($_POST['de1']) && !empty($_POST['sem']) && !empty($_POST['f1'])){

            
            $A1 = $_POST['A1'];
            $A2 = $_POST['A2'];
            $A3 = $_POST['A3'];
            $A4 = $_POST['A4'];
            $A5 = $_POST['A5'];
            $A6 = $_POST['A6'];
            
            $B1 = $_POST['B1'];
            $B2 = $_POST['B2'];
            $B3 = $_POST['B3'];
            $B4 = $_POST['B4'];
            $B5 = $_POST['B5'];
            $B6 = $_POST['B6'];

            $C1 = $_POST['C1'];
            $C2 = $_POST['C2'];
            $C3 = $_POST['C3'];
            $C4 = $_POST['C4'];
            $C5 = $_POST['C5'];
            $C6 = $_POST['C6'];

            $D1 = $_POST['D1'];
            $D2 = $_POST['D2'];
            $D3 = $_POST['D3'];
            $D4 = $_POST['D4'];
            $D5 = $_POST['D5'];
            $D6 = $_POST['D6'];

            $E1 = $_POST['E1'];
            $E2 = $_POST['E2'];
            $E3 = $_POST['E3'];
            $E4 = $_POST['E4'];
            $E5 = $_POST['E5'];
            $E6 = $_POST['E6'];

            $F1 = $_POST['F1'];
            $F2 = $_POST['F2'];
            $F3 = $_POST['F3'];
            $F4 = $_POST['F4'];
            $F5 = $_POST['F5'];
            $F6 = $_POST['F6'];

            $G1 = $_POST['G1'];
            $G2 = $_POST['G2'];
            $G3 = $_POST['G3'];
            $G4 = $_POST['G4'];
            $G5 = $_POST['G5'];
            $G6 = $_POST['G6'];

            $H1 = $_POST['H1'];
            $H2 = $_POST['H2'];
            $H3 = $_POST['H3'];
            $H4 = $_POST['H4'];
            $H5 = $_POST['H5'];
            $H6 = $_POST['H6'];

            $J1 = $_POST['J1'];
            $J2 = $_POST['J2'];
            $J3 = $_POST['J3'];
            $J4 = $_POST['J4'];
            $J5 = $_POST['J5'];
            $J6 = $_POST['J6'];

            $K1 = $_POST['K1'];
            $K2 = $_POST['K2'];
            $K3 = $_POST['K3'];
            $K4 = $_POST['K4'];
            $K5 = $_POST['K5'];
            $K6 = $_POST['K6'];
            
            
            //$query= "INSERT INTO `dbms_course_obj_outcomes` (`y1`, `cc1`, `c1`, `p1`, `cn1`, `d1`, `de1`, `sem`, `f1`) VALUES ('$_POST[y1]', '$_POST[cc1]', '$_POST[c1]', '$_POST[p1]', '$_POST[cn1]', '$_POST[d1]', '$_POST[de1]', '$_POST[sem]', '$_POST[f1]')";
            $query = "INSERT into `mp_7_assessment_1` (`A1`, `A2`, `A3`, `A4`, `A5`, `A6`, `B1`, `B2`, `B3`, `B4`, `B5`, `B6`, `C1`, `C2`, `C3`, `C4`, `C5`, `C6`, `D1`, `D2`, `D3`, `D4`, `D5`, `D6`, `E1`, `E2`, `E3`, `E4`, `E5`, `E6`, `F1`, `F2`, `F3`, `F4`, `F5`, `F6`, `G1`, `G2`, `G3`, `G4`, `G5`, `G6`, `H1`, `H2`, `H3`, `H4`, `H5`, `H6`, `J1`, `J2`, `J3`, `J4`, `J5`, `J6`, `K1`, `K2`, `K3`, `K4`, `K5`, `K6`) VALUES ('$_POST[A1]', '$_POST[A2]', '$_POST[A3]', '$_POST[A4]', '$_POST[A5]', '$_POST[A6]', '$_POST[B1]', '$_POST[B2]', '$_POST[B3]', '$_POST[B4]', '$_POST[B5]', '$_POST[B6]', '$_POST[C1]', '$_POST[C2]', '$_POST[C3]', '$_POST[C4]', '$_POST[C5]', '$_POST[C6]', '$_POST[D1]', '$_POST[D2]', '$_POST[D3]', '$_POST[D4]', '$_POST[D5]', '$_POST[D6]', '$_POST[E1]', '$_POST[E2]', '$_POST[E3]', '$_POST[E4]', '$_POST[E5]', '$_POST[E6]', '$_POST[F1]', '$_POST[F2]', '$_POST[F3]', '$_POST[F4]', '$_POST[F5]', '$_POST[F6]', '$_POST[G1]', '$_POST[G2]', '$_POST[G3]', '$_POST[G4]', '$_POST[G5]', '$_POST[G6]', '$_POST[H1]', '$_POST[H2]', '$_POST[H3]', '$_POST[H4]', '$_POST[H5]', '$_POST[H6]', '$_POST[J1]', '$_POST[J2]', '$_POST[J3]', '$_POST[J4]', '$_POST[J5]', '$_POST[J6]', '$_POST[K1]', '$_POST[K2]', '$_POST[K3]', '$_POST[K4]', '$_POST[K5]', '$_POST[K6]')";
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
 </form>

    <br>
    <h2>Internal Assesment Methods Weightage:</h2>
    <br>

    <form action="" method="POST">
        <table align="center" border="1" height="100px" width="50%" cellspacing="0">
            <tr>
                <th rowspan="2" colspan = "2"> <i>Assesment Methods</i> </th>
                <th colspan = "6" rowspan="1"><i>Course Outcome </i></th>
            </tr>
            <tr>
                <th>CO1</th>
                <th>CO2</th>
                <th>CO3</th>
                <th>CO4</th>
                <th>CO5</th>
                <th>CO6</th>
            </tr>
        <tr>
            <td rowspan="5">Direct</td>
            <td rowspan="1">Laboratory Journal </td>
            <td rowspan="1"><input type="text" name="M1" id="M1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="M2" id="M2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="M3" id="M3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="M4" id="M4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="M5" id="M5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="M6" id="M6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            

        </tr>

        <tr>
            <td rowspan="1">Assignments</td>
            <td rowspan="1"><input type="text" name="N1" id="N1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="N2" id="N2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="N3" id="N3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="N4" id="N4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="N5" id="N5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="N6" id="N6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>

        </tr>
        <tr>
            <td rowspan="1"> Course Project</td>
            <td rowspan="1"><input type="text" name="P1" id="P1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="P2" id="P2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="P3" id="P3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="P4" id="P4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="P5" id="P5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="P6" id="P6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
        </tr>

        <tr>
            <td rowspan="1">CO based Quizzes</td>
            <td rowspan="1"><input type="text" name="R1" id="R1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="R2" id="R2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="R3" id="R3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="R4" id="R4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="R5" id="R5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="R6" id="R6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>

        </tr>

        <tr>
            <td rowspan="1">Direct Tool %</td>
            <td rowspan="1"><input type="text" name="S1" id="S1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="S2" id="S2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="S3" id="S3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="S4" id="S4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="S5" id="S5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="S6" id="S6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>

        </tr>

        <tr>
            <td rowspan = "1"> Indirect</td>
            <td rowspan = "1"> Course exit Survey % </td>
            <td rowspan="1"><input type="text" name="T1" id="T1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="T2" id="T2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="T3" id="T3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="T4" id="T4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="T5" id="T5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="T6" id="T6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
        </tr>

        <tr>
            <td colspan="2">Direct + Indirect </td>
            <td rowspan="1"><input type="text" name="U1" id="U1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="U2" id="U2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="U3" id="U3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="U4" id="U4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="U5" id="U5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="U6" id="U6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="enter_details_2" id="enter_det" value="Enter Details">
            </td>
        </tr>
        </table>
        </form>
        <?php
$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms.sql");
    if(isset($_POST['enter_details_2'])){
      //  if(!empty($_POST['course_no']) && !empty($_POST['y1']) && !empty($_POST['cc1']) && !empty($_POST['c1']) && !empty($_POST['p1']) && !empty($_POST['cn1']) && !empty($_POST['d1']) && !empty($_POST['de1']) && !empty($_POST['sem']) && !empty($_POST['f1'])){

            
            $M1 = $_POST['M1'];
            $M2 = $_POST['M2'];
            $M3 = $_POST['M3'];
            $M4 = $_POST['M4'];
            $M5 = $_POST['M5'];
            $M6 = $_POST['M6'];
            
            $N1 = $_POST['N1'];
            $N2 = $_POST['N2'];
            $N3 = $_POST['N3'];
            $N4 = $_POST['N4'];
            $N5 = $_POST['N5'];
            $N6 = $_POST['N6'];

            $P1 = $_POST['P1'];
            $P2 = $_POST['P2'];
            $P3 = $_POST['P3'];
            $P4 = $_POST['P4'];
            $P5 = $_POST['P5'];
            $P6 = $_POST['P6'];

            $R1 = $_POST['R1'];
            $R2 = $_POST['R2'];
            $R3 = $_POST['R3'];
            $R4 = $_POST['R4'];
            $R5 = $_POST['R5'];
            $R6 = $_POST['R6'];

            $S1 = $_POST['S1'];
            $S2 = $_POST['S2'];
            $S3 = $_POST['S3'];
            $S4 = $_POST['S4'];
            $S5 = $_POST['S5'];
            $S6 = $_POST['S6'];

            $T1 = $_POST['T1'];
            $T2 = $_POST['T2'];
            $T3 = $_POST['T3'];
            $T4 = $_POST['T4'];
            $T5 = $_POST['T5'];
            $T6 = $_POST['T6'];

            $U1 = $_POST['U1'];
            $U2 = $_POST['U2'];
            $U3 = $_POST['U3'];
            $U4 = $_POST['U4'];
            $U5 = $_POST['U5'];
            $U6 = $_POST['U6'];
            
            //$query= "INSERT INTO `dbms_course_obj_outcomes` (`y1`, `cc1`, `c1`, `p1`, `cn1`, `d1`, `de1`, `sem`, `f1`) VMLUES ('$_POST[y1]', '$_POST[cc1]', '$_POST[c1]', '$_POST[p1]', '$_POST[cn1]', '$_POST[d1]', '$_POST[de1]', '$_POST[sem]', '$_POST[f1]')";
            $query = "INSERT into `mp_7_assessment_2` (`M1`, `M2`, `M3`, `M4`, `M5`, `M6`, `N1`, `N2`, `N3`, `N4`, `N5`, `N6`, `P1`, `P2`, `P3`, `P4`, `P5`, `P6`, `R1`, `R2`, `R3`, `R4`, `R5`, `R6`, `S1`, `S2`, `S3`, `S4`, `S5`, `S6`, `T1`, `T2`, `T3`, `T4`, `T5`, `T6`, `U1`, `U2`, `U3`, `U4`, `U5`, `U6`) VALUES ('$_POST[M1]', '$_POST[M2]', '$_POST[M3]', '$_POST[M4]', '$_POST[M5]', '$_POST[M6]', '$_POST[N1]', '$_POST[N2]', '$_POST[N3]', '$_POST[N4]', '$_POST[N5]', '$_POST[N6]', '$_POST[P1]', '$_POST[P2]', '$_POST[P3]', '$_POST[P4]', '$_POST[P5]', '$_POST[P6]', '$_POST[R1]', '$_POST[R2]', '$_POST[R3]', '$_POST[R4]', '$_POST[R5]', '$_POST[R6]', '$_POST[S1]', '$_POST[S2]', '$_POST[S3]', '$_POST[S4]', '$_POST[S5]', '$_POST[S6]', '$_POST[T1]', '$_POST[T2]', '$_POST[T3]', '$_POST[T4]', '$_POST[T5]', '$_POST[T6]', '$_POST[U1]', '$_POST[U2]', '$_POST[U3]', '$_POST[U4]', '$_POST[U5]', '$_POST[U6]')";
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
    <h2>Internal Assesment Multiplication factor for Calculation of CO Attainments</h2>
    <br>

    <form action="" method="POST">
        <table align="center" border="1" height="100px" width="50%" cellspacing="0">
            <tr>
                <th rowspan="2" colspan = "2"> <i>Assesment Methods</i> </th>
                <th colspan = "6" rowspan="1"><i>Course Outcome </i></th>
            </tr>
            <tr>
                <th>CO1</th>
                <th>CO2</th>
                <th>CO3</th>
                <th>CO4</th>
                <th>CO5</th>
                <th>CO6</th>
            </tr>
        <tr>
            <td rowspan="5">Direct</td>
            <td rowspan="1">Laboratory Journal </td>
            <td rowspan="1"><input type="text" name="V1" id="V1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="V2" id="V2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="V3" id="V3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="V4" id="V4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="V5" id="V5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="V6" id="V6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            

        </tr>

        <tr>
            <td rowspan="1">Assignments</td>
            <td rowspan="1"><input type="text" name="W1" id="W1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="W2" id="W2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="W3" id="W3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="W4" id="W4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="W5" id="W5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="W6" id="W6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>

        </tr>
        <tr>
            <td rowspan="1"> Course Project</td>
            <td rowspan="1"><input type="text" name="X1" id="X1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="X2" id="X2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="X3" id="X3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="X4" id="X4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="X5" id="X5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="X6" id="X6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
        </tr>

        <tr>
            <td rowspan="1">CO based Quizzes</td>
            <td rowspan="1"><input type="text" name="Y1" id="Y1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="Y2" id="Y2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="Y3" id="Y3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="Y4" id="Y4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="Y5" id="Y5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="Y6" id="Y6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>

        </tr>

        <tr>
            <td rowspan="1">Direct Tool %</td>
            <td rowspan="1"><input type="text" name="Z1" id="Z1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="Z2" id="Z2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="Z3" id="Z3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="Z4" id="Z4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="Z5" id="Z5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="Z6" id="Z6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>

        </tr>

        <tr>
            <td rowspan = "1"> Indirect</td>
            <td rowspan = "1"> Course exit Survey % </td>
            <td rowspan="1"><input type="text" name="O1" id="O1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="O2" id="O2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="O3" id="O3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="O4" id="O4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="O5" id="O5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="O6" id="O6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
        </tr>

        <tr>
            <td colspan="2">Direct + Indirect </td>
            <td rowspan="1"><input type="text" name="I1" id="I1" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="I2" id="I2" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="I3" id="I3" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="I4" id="I4" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="I5" id="I5" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
            <td rowspan="1"><input type="text" name="I6" id="I6" value="" style="margin: 0px; width: 90%; height: 70%; border: 0px"></input></td>
        </tr>
        <tr>
            <td>
                    <!-- <input type="submit" value="Submit"> -->
                     <input type="submit" name="SUBMIT2" value="Enter Details">
                </td>
            </tr>
        </table>
        </form>
        <?php
$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms.sql");
    if(isset($_POST['SUBMIT2'])){
      //  if(!empty($_POST['course_no']) && !empty($_POST['y1']) && !empty($_POST['cc1']) && !empty($_POST['c1']) && !empty($_POST['p1']) && !empty($_POST['cn1']) && !empty($_POST['d1']) && !empty($_POST['de1']) && !empty($_POST['sem']) && !empty($_POST['f1'])){

            
            $V1 = $_POST['V1'];
            $V2 = $_POST['V2'];
            $V3 = $_POST['V3'];
            $V4 = $_POST['V4'];
            $V5 = $_POST['V5'];
            $V6 = $_POST['V6'];
            
            $W1 = $_POST['W1'];
            $W2 = $_POST['W2'];
            $W3 = $_POST['W3'];
            $W4 = $_POST['W4'];
            $W5 = $_POST['W5'];
            $W6 = $_POST['W6'];

            $X1 = $_POST['X1'];
            $X2 = $_POST['X2'];
            $X3 = $_POST['X3'];
            $X4 = $_POST['X4'];
            $X5 = $_POST['X5'];
            $X6 = $_POST['X6'];

            $Y1 = $_POST['Y1'];
            $Y2 = $_POST['Y2'];
            $Y3 = $_POST['Y3'];
            $Y4 = $_POST['Y4'];
            $Y5 = $_POST['Y5'];
            $Y6 = $_POST['Y6'];

            $Z1 = $_POST['Z1'];
            $Z2 = $_POST['Z2'];
            $Z3 = $_POST['Z3'];
            $Z4 = $_POST['Z4'];
            $Z5 = $_POST['Z5'];
            $Z6 = $_POST['Z6'];

            $O1 = $_POST['O1'];
            $O2 = $_POST['O2'];
            $O3 = $_POST['O3'];
            $O4 = $_POST['O4'];
            $O5 = $_POST['O5'];
            $O6 = $_POST['O6'];

            $I1 = $_POST['I1'];
            $I2 = $_POST['I2'];
            $I3 = $_POST['I3'];
            $I4 = $_POST['I4'];
            $I5 = $_POST['I5'];
            $I6 = $_POST['I6'];
            
            //$query= "INSERT INTO `dbms_course_obj_outcomes` (`y1`, `cc1`, `c1`, `p1`, `cn1`, `d1`, `de1`, `sem`, `f1`) VMLUES ('$_POST[y1]', '$_POST[cc1]', '$_POST[c1]', '$_POST[p1]', '$_POST[cn1]', '$_POST[d1]', '$_POST[de1]', '$_POST[sem]', '$_POST[f1]')";
           // $query = "INSERT into `mp_7_assessment_2` (`M1`, `M2`, `M3`, `M4`, `M5`, `M6`, `N1`, `N2`, `N3`, `N4`, `N5`, `N6`, `P1`, `P2`, `P3`, `P4`, `P5`, `P6`, `R1`, `R2`, `R3`, `R4`, `R5`, `R6`, `S1`, `S2`, `S3`, `S4`, `S5`, `S6`, `T1`, `T2`, `T3`, `T4`, `T5`, `T6`, `U1`, `U2`, `U3`, `U4`, `U5`, `U6`) VALUES ('$_POST[M1]', '$_POST[M2]', '$_POST[M3]', '$_POST[M4]', '$_POST[M5]', '$_POST[M6]', '$_POST[N1]', '$_POST[N2]', '$_POST[N3]', '$_POST[N4]', '$_POST[N5]', '$_POST[N6]', '$_POST[P1]', '$_POST[P2]', '$_POST[P3]', '$_POST[P4]', '$_POST[P5]', '$_POST[P6]', '$_POST[R1]', '$_POST[R2]', '$_POST[R3]', '$_POST[R4]', '$_POST[R5]', '$_POST[R6]', '$_POST[S1]', '$_POST[S2]', '$_POST[S3]', '$_POST[S4]', '$_POST[S5]', '$_POST[S6]', '$_POST[T1]', '$_POST[T2]', '$_POST[T3]', '$_POST[T4]', '$_POST[T5]', '$_POST[T6]', '$_POST[U1]', '$_POST[U2]', '$_POST[U3]', '$_POST[U4]', '$_POST[U5]', '$_POST[U6]')";
           $query = "INSERT INTO `mp_7_assessment_3` (`V1`, `V2`, `V3`, `V4`, `V5`, `V6`, `W1`, `W2`, `W3`, `W4`, `W5`, `W6`, `X1`, `X2`, `X3`, `X4`, `X5`, `X6`, `Y1`, `Y2`, `Y3`, `Y4`, `Y5`, `Y6`, `Z1`, `Z2`, `Z3`, `Z4`, `Z5`, `Z6`, `O1`, `O2`, `O3`, `O4`, `O5`, `O6`, `I1`, `I2`, `I3`, `I4`, `I5`, `I6`) VALUES ('$_POST[V1]','$_POST[V2]', '$_POST[V3]','$_POST[V4]','$_POST[V5]','$_POST[V6]', '$_POST[W1]', '$_POST[W2]', '$_POST[W3]', '$_POST[W4]', '$_POST[W5]', '$_POST[W6]', '$_POST[X1]', '$_POST[X2]', '$_POST[X3]', '$_POST[X4]', '$_POST[X5]', '$_POST[X6]', '$_POST[Y1]', '$_POST[Y2]', '$_POST[Y3]', '$_POST[Y4]', '$_POST[Y5]', '$_POST[Y6]', '$_POST[Z1]', '$_POST[Z2]', '$_POST[Z3]', '$_POST[Z4]', '$_POST[Z5]', '$_POST[Z6]', '$_POST[O1]', '$_POST[O2]', '$_POST[O3]', '$_POST[O4]', '$_POST[O5]', '$_POST[O6]', '$_POST[I1]', '$_POST[I2]', '$_POST[I3]', '$_POST[I4]', '$_POST[I5]', '$_POST[I6]')"; 
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