<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms.sql");
    if(isset($_POST['add_details'])){
      //  if(!empty($_POST['course_no']) && !empty($_POST['y1']) && !empty($_POST['cc1']) && !empty($_POST['c1']) && !empty($_POST['p1']) && !empty($_POST['cn1']) && !empty($_POST['d1']) && !empty($_POST['de1']) && !empty($_POST['sem']) && !empty($_POST['f1'])){

            // $course_no = $_POST['course_no'];
            $y1 = $_POST['y1'];
            $cc1 = $_POST['cc1'];
            $c1 = $_POST['c1'];
            $p1 = $_POST['p1'];
            $cn1 = $_POST['cn1'];
            $d1 = $_POST['d1'];
            $de1 = $_POST['de1'];
            $sem = $_POST['sem'];
            $f1 = $_POST['f1'];
            
            $query= "INSERT INTO `dbms_course_obj_outcomes` (`y1`, `cc1`, `c1`, `p1`, `cn1`, `d1`, `de1`, `sem`, `f1`) VALUES ('$_POST[y1]', '$_POST[cc1]', '$_POST[c1]', '$_POST[p1]', '$_POST[cn1]', '$_POST[d1]', '$_POST[de1]', '$_POST[sem]', '$_POST[f1]')";
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
      //  }
       

    }
//	$query = "INSERT INTO 'student_mentoring_form' ('$_POST[name]','$_POST[r_no]','$_POST[dob]', '$_POST[gender]','$_POST[c_add]','$_POST[p_add]','$_POST[m_no]', '$_POST[e_id]', '$_POST[fname]', '$_POST[f_no]', '$_POST[f_id]', '$_POST[m_name]', '$_POST[m_mob]', '$_POST[mother_id]', '$_POST[s_mentor]', '$_POST[men_mob_no]', '$_POST[men_id]')";
//$query= "INSERT INTO `course_obj_outcomes`(`course_no`, `y1`, `cc1`, `c1`, `p1`, `cn1`, `d1`, `de1`, `sem`, `f1`) VALUES ('$_POST[course_no]', '$_POST[y1]', '$_POST[cc1]', '$_POST[c1]', '$_POST[p1]', '$_POST[cn1]', '$_POST[d1]', '$_POST[de1]', '$_POST[sem]', '$_POST[f1]')";
//$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	window.location.href = "DBMS_Course_Objectives_Outcome.php";
</script>