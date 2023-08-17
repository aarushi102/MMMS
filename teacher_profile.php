<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Teacher's Profile</title>
	<?php
		session_start();
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms.sql");
	?>
</head>
<body style="text-align: center;">
<form action="" method="">
	<?php

    $t_id = (isset($_GET['teacher_id']) ? $_GET['teacher_id'] : '');
    
    $query= 'SELECT * from teachers WHERE t_id='.$t_id;
    $query_run = mysqli_query($connection,$query);
    
    while ($row = mysqli_fetch_assoc($query_run)) 
  {
      ?>

	<img src="Gaming_5000x3125.jpg" alt="PROF. IMG" width="100" height="100" >
	 <h1 align = "center"><?php echo $row["name"]?> </h1>
	 
	 <input type="text" name="" value="<?php echo $row["profession"]?>" id="" placeholder="Professor's Bio" disabled> 
	 <hr>
  </form>
	 <form action="teacher_profile_update.php" method="POST">
	 	<p><?php echo $row["name"]?></p>

	 	<section >
	 	<label>Select Semester:</label>
	 	<form>
		 	<select class="" name="semester" id="semester">
		 		<option value="">Select Semester</option>	
				 <?php
        $records = mysqli_query($connection, "SELECT sem_no FROM semester");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['sem_no'] ."'>" .$data['sem_no'] ."</option>";  // displaying data in option menu
        }	
    ?>  
		 	</select>
		
	 	
	 </section> 
	 <br>
	 <section>
	 <label>Select Subject:</label>
	 <select class="" name="subject" id="subject">
	 		<option value="">Select Subject</option>
			 <?php
        $records = mysqli_query($connection, "SELECT sub_name FROM subject");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['sub_name'] ."'>" .$data['sub_name'] ."</option>";  // displaying data in option menu
        }	
    ?>  
	 </select>
	 	
	</section>
<input type="submit" class="" name="Allocate" id="submit" value="Allocate"> 
			 <?php

	 	}
	 ?>
	 </form><br>

	 </body>
</html>