<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>

	<style>
        h1 {
            text-align: center;
        }
    </style>

    <h1>Student's Mentor Feedback Semester Wise</h1>

	<?php
		session_start();
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms.sql");
	?>

</head>
<body>

</head>
<body>
<div id="header"><br>
		<center>Mentor-Mentee Management System <!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email: <?php echo $_SESSION['email'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:<?php echo $_SESSION['name'];?> -->
		<a href="student_dashboard.php">Back</a>
		</center>
	</div>
	<span id="top_span"><marquee>Note:- This portal is open till 31 March 2020...Plz edit your information, if wrong.</marquee></span>

	<div id="right_side"><br><br>
		<div id="demo">        
        <?php
            
            $r_no = (isset($_GET['r_no']) ? $_GET['r_no'] : '');
            $query= 'SELECT * from feedback WHERE r_no='.$r_no;
            $query_run = mysqli_query($connection,$query);
            while ($row = mysqli_fetch_assoc($query_run)) 
            
				{
            
        ?>


    
			<center><h1><b><u> STUDENT MENTORING FORM </u></b></h1></center><br> 
			<div id="feedback">

				<!-- <form action="AddFeedback.php method=POST"> --> 

                    <br><br><br>
 
                    <?php 
                            echo "Roll number:". $_GET['r_no'];
                    ?> <br> <br>
                    <table align="center" border="1" height="250px" width="80%" cellspacing="0">
                        <tr>
                            <td align="center" height="50px" width="20%">
                                <b>Semester I</b>
                            </td>

                            <td align="center" height="50px" width="20%">
                                <b>Semester II</b>
                            </td>

                            <td align="center" height="50px" width="20%">
                                <b>Semester III</b>
                            </td>

                            <td align="center" height="50px" width="20%">
                                <b>Semester IV</b>
                            </td>
                        </tr>

                        <tr>
                            <td align="center" width="10%" height="200px">
                                <textarea name="Semester1" id="Semester1" style="margin: 0px; width: 290px; height: 188px; " disabled > <?php echo $row['Semester1'] ?> </textarea>
                            </td>

                            <td align="center" width="10%" height="200px">
                                <textarea name="Semester2" id="Semester2"   style="margin: 0px; width: 290px; height: 188px; " disabled><?php echo $row['Semester2'] ?></textarea>
                            </td>

                            <td align="center" width="10%" height="200px">
                                <textarea name="Semester3" id="Semester3"   style="margin: 0px; width: 290px; height: 188px; " disabled><?php echo $row['Semester3'] ?></textarea>
                            </td>

                            <td align="center" width="10%" height="200px">
                                <textarea name="Semester4" id="Semester4"   style="margin: 0px; width: 290px; height: 188px; " disabled><?php echo $row['Semester4'] ?></textarea>
                            </td>
            
                        </tr>

                        <tr>
                            <td align="center" height="50px" width="20%">
                                <b>Semester V</b>
                            </td>

                            <td align="center" height="50px" width="20%">
                                <b>Semester VI</b>
                            </td>

                            <td align="center" height="50px" width="20%">
                                <b>Semester VII</b>
                            </td>

                            <td align="center" height="50px" width="20%">
                                <b>Semester VIII</b>
                            </td>
                        </tr>
                    
                        <tr>
                            <td align="center" width="10%" height="200px">
                                <textarea name="Semester5" id="Semester5"   style="margin: 0px; width: 290px; height: 188px; " disabled><?php echo $row['Semester5'] ?></textarea>
                            </td>

                            <td align="center" width="10%" height="200px">
                                <textarea name="Semester6" id="Semester6"   style="margin: 0px; width: 290px; height: 188px; " disabled><?php echo $row['Semester6'] ?></textarea>
                            </td>

                            <td align="center" width="10%" height="200px">
                                <textarea name="Semester7" id="Semester7"    style="margin: 0px; width: 290px; height: 188px; " disabled><?php echo $row['Semester7'] ?></textarea>
                            </td>

                            <td align="center" width="10%" height="200px">
                                <textarea name="Semester8" id="Semester8"   style="margin: 0px; width: 290px; height: 188px; " disabled><?php echo $row['Semester8'] ?></textarea>
                            </td>
                        </tr>        
                    </table>
                    
                <!-- </form> -->
            </div>
        <?php
				
		    }
		?>
        
    
</body>
</html>