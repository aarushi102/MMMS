<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student's Attendance</title>

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

</head>
<body>

<div id="header">
		<h1>Mentee's Attendance Record</h1>
	</div>
	<span id="top_span"><marquee>Mentor below 75% will be given internal K.T</marquee></span>

	<div id="right_side"><br><br>
		<div id="demo">		
			<div id="attendance">					
            <form action="" method="post"> 
                        

    
</head>
<body>
    <table align="center" border="1" height="500px" width="90%" cellspacing="0">
        <tr>

            <td align="center" colspan="1" rowspan="2" width="5%" >
                <b>Semester </b>
            </td>
            <td colspan="2" align="center">
                <b>Month/Year</b>
            </td>
            <td colspan="2" align="center">
                <b>Month/Year</b>
            </td>
            <td colspan="2" align="center">
                <b>Month/Year</b>
            </td>
            <td colspan="2" align="center">
                <b>Month/Year</b>
            </td>
            
        </tr>

        <tr>
            <td align="center" colspan="1" >
                <b>Percentage</b>
                
            </td>

            <td align="center" colspan="1" >
                <b>Remarks</b>
                
            </td>

            <td align="center" colspan="1" >
                <b>Percentage</b>
                
            </td>

            <td align="center" colspan="1" >
                <b>Remarks</b>
                
            </td>

            <td align="center" colspan="1" >
                <b>Percentage</b>
                
            </td>

            <td align="center" colspan="1" >
                <b>Remarks</b>
                
            </td>

            <td align="center" colspan="1" >
                <b>Percentage</b>
                
            </td>

            <td align="center" colspan="1" >
                <b>Remarks</b>
                
            </td>
        </tr>

        <tr>
            <td align="center" colspan="1" >
                <b>I</b>
            
            </td>

            <td align="center" colspan="1" >
                <textarea ></textarea>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>
        </tr>

        <tr>
            <td align="center" colspan="1" >
                <b>II</b>
                
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>
        </tr>

        <tr>
            <td align="center" colspan="1" >
                <b>III</b>
                
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>
        </tr>

        <tr>
            <td align="center" colspan="1" >
                <b>IV</b>
                
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>
        </tr>

        <tr>
            <td align="center" colspan="1" >
                <b>V</b>
                
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>
        </tr>

        <tr>
            <td align="center" colspan="1" >
                <b>VI</b>
                
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>
        </tr>

        <tr>
            <td align="center" colspan="1" >
                <b>VII</b>
                
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>
        </tr>

        <tr>
            <td align="center" colspan="1" >
                <b>VIII</b>
                
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>

            <td align="center" colspan="1" >
                <input type="text" name="" required>
            </td>
        </tr>

    </table>
</body>
</html>