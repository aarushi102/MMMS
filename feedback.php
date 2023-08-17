<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/feedback.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>

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

</head>
<body>
<div id="header">
    <center><h1>Student's Mentor Feedback Semester Wise</h1></center>
		<!-- <center>Mentor-Mentee Management System &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email: <?php echo $_SESSION['email'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:<?php echo $_SESSION['name'];?> 
		<a href="Mentor_Dashboard.php">Back</a>
		</center> -->
	</div>
	<!-- <span id="top_span"><marquee>Note:- This portal is open till 31 March 2020...Plz edit your information, if wrong.</marquee></span> -->

	<div id="right_side">
		<div id="demo">        
        <?php
            $query = "select * from feedback where 1";
            $query_run = mysqli_query($connection,$query);
            // while ($row = mysqli_fetch_assoc($query_run)) 
				{
        ?>
			
			<div id="feedback">
				<form action="AddFeedback.php" method="post"> 

                    <table align="center" border="1" height="200px" width="80%" cellspacing="0">
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
                            <td align="center" width="10%" height="150px">
                                <textarea name="txtSem1" id="txtSem1" required="" style="margin: 0px; width: 290px; height: 150px;"></textarea>
                            </td>

                            <td align="center" width="10%" height="150px">
                                <textarea name="txtSem2" id="txtSem2" required="" style="margin: 0px; width: 290px; height: 150px;"></textarea>
                            </td>

                            <td align="center" width="10%" height="150px">
                                <textarea name="txtSem3" id="txtSem3" required="" style="margin: 0px; width: 290px; height: 150px;"></textarea>
                            </td>

                            <td align="center" width="10%" height="150px">
                                <textarea name="txtSem4" id="txtSem4" required="" style="margin: 0px; width: 290px; height: 150px;"></textarea>
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
                            <td align="center" width="10%" height="150px">
                                <textarea name="txtSem5" id="txtSem5" required="" style="margin: 0px; width: 290px; height: 150px;"></textarea>
                            </td>

                            <td align="center" width="10%" height="150px">
                                <textarea name="txtSem6" id="txtSem6" required="" style="margin: 0px; width: 290px; height: 150px;"></textarea>
                            </td>

                            <td align="center" width="10%" height="150px">
                                <textarea name="txtSem7" id="txtSem7" required="" style="margin: 0px; width: 290px; height: 150px;"></textarea>
                            </td>

                            <td align="center" width="10%" height="150px">
                                <textarea name="txtSem8" id="txtSem8" required="" style="margin: 0px; width: 290px; height: 150px;"></textarea>
                            </td>
                        </tr>        
                    </table>
                  
                              <center><input type="submit" value="Save"></center>  
                         
                </form>
            </div>
        <?php
				
		    }
		?>
        
    
</body>
</html>