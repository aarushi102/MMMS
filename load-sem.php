<?php

	$conn = mysqli_connect("localhost","root","","sms.sql") or die("Connection failed"); //Database ka naam aaega 4th waale me

	if($_POST['type'] == ""){
		$sql = "SELECT * FROM semester"; // Table ka naam aaega

		$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

		$str = "";
		while($row = mysqli_fetch_assoc($query)){
		  $str .= "<option value='{$row['sem_id']}'> {$row['sem_no']}</option>"; //first row me semid aaega, second waale me semester
		}
	}else if($_POST['type'] == "subjectData"){

		$sql = "SELECT * FROM subject WHERE sem_id = {$_POST['id']}"; //Subject table name and where clause ke andar semester ka column name

		$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

		$str = "";
		while($row = mysqli_fetch_assoc($query)){
		  $str .= "<option value='{$row['sub_id']}'>{$row['sub_name']}</option>";//subjectid aur subject name daalna hai
		}
	}

	echo $str;
 ?>
