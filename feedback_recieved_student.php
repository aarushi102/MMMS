<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/feedback.css">
    
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
<div id="header"><center>
		  <h1>Mentee's Academic Feedback </h1>
		</center>
	</div>
	<span id="top_span"><marquee>Semester wise academic feedback by mentor. All the best!!!!!</marquee></span>

	<div id="right_side">
		<div id="demo">        
        <?php
            
            $r_no = (isset($_GET['r_no']) ? $_GET['r_no'] : '');
            $query= 'SELECT * from feedback WHERE r_no='.$r_no;
            $query_run = mysqli_query($connection,$query);
            while ($row = mysqli_fetch_assoc($query_run)) 
            
				{
            
        ?>
			<div id="feedback">

				<!-- <form action="AddFeedback.php method=POST"> --> 

                    <center><h1><b><?php 
                            echo "Roll number:". $_GET['r_no'];
                    ?></b></h1></center>
 
                   
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