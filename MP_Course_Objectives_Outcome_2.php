<?php
		session_start();
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms.sql");
	?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Course_Objectives_Outcomes</title>
    <style>
      .box1 {
        width: 100%;
        height: 100px;
        border-radius: 5px;
        background-color: grey;
      }
      h1,h2,h3{
        color: white;
      }
      input {
        margin: 0px;
        width: 100%; 
        height: 100%; 
        border: none; 
        background-color: #303030; 
        color:white; 
        outline: none;
        text-align: center;
      }
    </style>
  </head>

  <body style="text-align: center; background-color: #0f0f0f">
    
  <form action="" method=""> 
    <div class="box1"></div>
		
			<input type="submit" name="" value="">
    <br />
    </form>
    <h2>DEPARTMENT OF COMPUTER ENGINEERING</h2>

    <form action="add-details.php" method="POST">
    <table class="table table-dark table-hover align="left" height="50px" width="75%" border="0" cellspacing="0" cellpadding="5" style="color:white">
        <tr>
            <td align="left" width="20%">
          <b> Year: </b><input type="text"
            name="y1"
            id="y1"
            value=""
            style="margin: 0px; width: 55%; height: 70%; border: 0px"
          ></input>
        </td>

        <td align="left" width="20%">
          <b> Course Code: </b><input type="text"
            name="cc1"
            id="cc1"
            value=""
            style="margin: 0px; width: 55%; height: 70%; border: 0px"
          ></input>
        </td>

        <td align="left" width="20%">
         <b> Class: </b><input type="text"
            name="c1"
            id="c1"
            value=""
            style="margin: 0px; width: 55%; height: 70%; border: 0px"
          ></input>
        </td>
        </tr>

        <tr>
            <td align="left" width="20%">
         <b> Program: </b><input type="text"
            name="p1"
            id="p1"
            value=""
            style="margin: 0px; width: 55%; height: 70%; border: 0px"
          ></input>
        </td>

        <td align="left" width="20%">
        <b>  Course Name: </b><input type="text"
            name="cn1"
            id="cn1"
            value=""
            style="margin: 0px; width: 70%; height: 70%; border: 0px"
          ></input>
        </td>

        <td align="left" width="20%">
         <b> Div: </b><input type="text"
            name="d1"
            id="d1"
            value=""
            style="margin: 0px; width: 55%; height: 70%; border: 0px"
          ></input>
        </td>
        </tr>

        <tr>
            <td align="left" width="20%">
       <b> Department: </b><input type="text"
            name="de1"
            id="de1"
            value=""
            style="margin: 0px; width: 55%; height: 70%; border: 0px"
          ></input>
        </td>

        <td align="left" width="20%">
          <b> Sem: </b><input type="text"
            name="sem"
            id="sem"
            value=""
            style="margin: 0px; width: 55%; height: 70%; border: 0px"
          ></input>
        </td>

        <td align="left" width="20%">
         <b> Faculty: </b><input type="text"
            name="f1"
            id="f1"
            value=""
            style="margin: 0px; width: 70%; height: 70%; border: 0px"
          ></input>
        </td>
        </tr>
        <tr>
        <td align="center">
   
    <input type="submit" name="add_details" value="Enter Details">
  </td>
  </tr>

	
    </table>       
 </form>


    <br> <br> <br> <br> <br> <br>
    <form action="" method="">
    <h2 align="left">Course Objectives:</h2>

       <table class="table table-dark table-hover align="left" border="1" height="70px" width="80%" cellspacing="0">
      <thead height="30px">
        <tr>
          <th width="6%">Sr. No.</th>
          <th width="74%">
            Statement
          </th>
        </tr>
      </thead>

      <tr>
        <td align="center" height="30px" width="6%"> <b> 1 </b> </td>

        <td align="left" height="30px" width="74%">
          Apply the knowledge of mathematics, science, engineering fundamentals,
          and an engineering specialization to the solution of complex
          engineering problems.
        </td>
      </tr>

      <tr>
        <td align="center" height="30px" width="6%"> <b> 2 </b> </td>

        <td align="left" height="30px" width="74%">
          Apply the knowledge of mathematics, science, engineering fundamentals,
          and an engineering specialization to the solution of complex
          engineering problems.
        </td>
      </tr>

      <tr>
        <td align="center" height="30px" width="6%"> <b> 3 </b> </td>

        <td align="left" height="30px" width="74%">
          Apply the knowledge of mathematics, science, engineering fundamentals,
          and an engineering specialization to the solution of complex
          engineering problems.
        </td>
      </tr>

      <tr>
        <td align="center" height="30px" width="6%"> <b> 4 </b> </td>

        <td align="left" height="30px" width="74%">
          Apply the knowledge of mathematics, science, engineering fundamentals,
          and an engineering specialization to the solution of complex
          engineering problems.
        </td>
      </tr>

      <tr>
        <td align="center" height="30px" width="6%"> <b> 5 </b> </td>

        <td align="left" height="30px" width="74%">
          Apply the knowledge of mathematics, science, engineering fundamentals,
          and an engineering specialization to the solution of complex
          engineering problems.
        </td>
      </tr>

      <tr>
        <td align="center" height="30px" width="6%"> <b> 6 </b> </td>

        <td align="left" height="30px" width="74%">
          Apply the knowledge of mathematics, science, engineering fundamentals,
          and an engineering specialization to the solution of complex
          engineering problems.
        </td>
      </tr>
</table>

<table class="table table-dark table-hover width="100%" align="center" height="60px">
  <tr>
  <td align="center">
    <h3>To add a New Objective...</h3>
    <input type="submit" name="submit" value="">
  </td>
</tr>
</table>


</form>

<form action="" method="">

<h2 align="left">3.1.1 Course Outcomes (COs):</h2>
<h3 align="left">Upon completion of this course students will be able: </h3>

       <table align="left" border="1" height="70px" width="90%" cellspacing="0">
      <thead height="30px">
        <tr>
          <th width="10%">CO's No.</th>
          <th width="6%">Abbre.</th>
          <th width="54%">
            Statement
          </th>
          <th width="10%">POs</th>
          <th width="10%">Bloom Levels</th>
        </tr>
      </thead>

      <!--1st CO-->
      <tr>
        <td align="center" height="30px" width="10%"> <b> CSL304.1 </b>
        </td>

        <td align="center" height="30px" width="6%">
            CO1
        </td>

        <td align="left" height="30px" width="54%">
          Apply the knowledge of mathematics, science, engineering fundamentals,
          and an engineering specialization to the solution of complex
          engineering problems.
        </td>

        <td align="center" height="30px" width="10%">
          <input type="text"
            name="i1"
            id="i1"
            value=""
            style="margin: 0px; width: 92%; height: 70%; border: 0px"
          ></input>

        </td>

        <td align="center" height="30px" width="10%">
          <input type="text"
            name="i2"
            id="i2"
            value=""
            style="margin: 0px; width: 92%; height: 70%; border: 0px"
          ></input>
          
        </td>
      </tr>

       <!--2nd CO-->
      <tr>
        <td align="center" height="30px" width="10%"> <b> CSL304.2 </b>
        </td>

        <td align="center" height="30px" width="6%">
            CO2
        </td>

        <td align="left" height="30px" width="54%">
          Apply the knowledge of mathematics, science, engineering fundamentals,
          and an engineering specialization to the solution of complex
          engineering problems.
        </td>

        <td align="center" height="30px" width="10%">
          <input type="text"
            name="i3"
            id="i3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>

        <td align="center" height="30px" width="12%">
          <input type="text" 
            name="i4"
            id="i4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

       <!--3rd CO-->
      <tr>
        <td align="center" height="30px" width="10%"> <b> CSL304.3 </b>
        </td>

        <td align="center" height="30px" width="6%">
            CO3
        </td>

        <td align="left" height="30px" width="54%">
          Apply the knowledge of mathematics, science, engineering fundamentals,
          and an engineering specialization to the solution of complex
          engineering problems.
        </td>

        <td align="center" height="30px" width="10%">
          <input type="text"
            name="i5"
            id="i5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>

        <td align="center" height="30px" width="12%">
          <input type="text" 
            name="i6"
            id="i6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

       <!--4th CO-->
      <tr>
        <td align="center" height="30px" width="10%"> <b> CSL304.4 </b>
        </td>

        <td align="center" height="30px" width="6%">
            CO4
        </td>

        <td align="left" height="30px" width="54%">
          Apply the knowledge of mathematics, science, engineering fundamentals,
          and an engineering specialization to the solution of complex
          engineering problems.
        </td>

        <td align="center" height="30px" width="10%">
          <input type="text"
            name="i7"
            id="i7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>

        <td align="center" height="30px" width="12%">
          <input type="text" 
            name="i8"
            id="i8"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

       <!--5th CO-->
      <tr>
        <td align="center" height="30px" width="10%"> <b> CSL304.5 </b>
        </td>

        <td align="center" height="30px" width="6%">
            CO5
        </td>

        <td align="left" height="30px" width="54%">
          Apply the knowledge of mathematics, science, engineering fundamentals,
          and an engineering specialization to the solution of complex
          engineering problems.
        </td>

        <td align="center" height="30px" width="10%">
          <input type="text"
            name="i9"
            id="i9"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>

        <td align="center" height="30px" width="12%">
          <input type="text" 
            name="i10"
            id="i10"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

       <!--6th CO-->
      <tr>
        <td align="center" height="30px" width="10%"> <b> CSL304.6 </b>
        </td>

        <td align="center" height="30px" width="6%">
            CO2
        </td>

        <td align="left" height="30px" width="54%">
          Apply the knowledge of mathematics, science, engineering fundamentals,
          and an engineering specialization to the solution of complex
          engineering problems.
        </td>

        <td align="center" height="30px" width="10%">
          <input type="text"
            name="i11"
            id="i11"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>

        <td align="center" height="30px" width="12%">
          <input type="text" 
            name="i12"
            id="i12"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

       <!--7th CO-->
      <tr>
        <td align="center" height="30px" width="10%"> <b> CSL304.7 </b>
        </td>

        <td align="center" height="30px" width="6%">
            CO7
        </td>

        <td align="left" height="30px" width="54%">
          Apply the knowledge of mathematics, science, engineering fundamentals,
          and an engineering specialization to the solution of complex
          engineering problems.
        </td>

        <td align="center" height="30px" width="10%">
          <input type="text"
            name="i13"
            id="i13"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>

        <td align="center" height="30px" width="12%">
          <input type="text" 
            name="i14"
            id="i14"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>
</table>

<table width="100%" align="center" height="60px">
  <tr>
  <td align="center">
    <h3>To add a new Course Outcome...</h3>
    <button name="bt2" value="" id="bt2">Click Here!</button>
  </td>
</tr>
</table>

<br> 
<h2 align="Left">Course Pre-requisite</h2>
<table align="left" border="1" height="70px" width="70%" cellspacing="0">
  <thead height="30px">
        <tr>
          <th width="6%">Sr. No.</th>
          <th width="64%">
            Statement
          </th>
        </tr>
      </thead>

      <tr>
        <td align="center" height="30px" width="6%"> <b> 1 </b> </td>

        <td align="left" height="30px" width="64%">
          Apply the knowledge of mathematics, science, engineering fundamentals,
          and an engineering specialization to the solution of complex
          engineering problems.
        </td>
      </tr>

</table>

<table height="70px" width="80%" align="center">
   <tr>
    <td align="center">
      <button name="bt3" value="" id="bt3">Next Page</button>
    </td>
</tr>
 <tr>
    <td align="center">
       <nav aria-label="Page navigation example">
  <ul class="pagination  justify-content-center">
    <li class="page-item ">
      <a class="page-link bg-dark text-white" href="1_POs and PSOs of CS.html">Previous</a>
    </li>
    <li class="page-item " ><a class="page-link bg-dark text-white" href="1_POs and PSOs of CS.html">1</a></li>
    <li class="page-item active"  aria-current="page" ><a class="page-link   text-white" href="2_Course_Objectives_Outcomes.html">2</a></li>
    <li class="page-item"><a class="page-link bg-dark text-white" href="3_OOPM_PMT.html">3</a></li>
    <li class="page-item"><a class="page-link bg-dark text-white" href="4_Action_Plan_Items.html">4</a></li>
    <li class="page-item"><a class="page-link bg-dark text-white" href="5_PO_Competency_PI_CO_Mapping.html">5</a></li>
    <li class="page-item"><a class="page-link bg-dark text-white" href="6_Co-Po-mapping.html">6</a></li>
    <li class="page-item"><a class="page-link bg-dark text-white" href="7_Assessment_Method.html">7</a></li>
    <li class="page-item"><a class="page-link bg-dark text-white" href="8_Attainment_level_vs_target.html">8</a></li>
    <li class="page-item"><a class="page-link bg-dark text-white" href="9_Continous_Assessment_Recod.html">9</a></li>
    <li class="page-item"><a class="page-link bg-dark text-white" href="10_Measurements_Co.html">10</a></li>
    <li class="page-item " ><a class="page-link bg-dark text-white" href="11_Course_Exit_Survey.html">11</a></li>
    <li class="page-item "><a class="page-link bg-dark text-white" href="12_CO_Att_CourseExit.html">12</a></li>
    <li class="page-item "><a class="page-link bg-dark text-white" href="13_CO_AttainmentLevels.html">13</a></li>
    <li class="page-item " ><a class="page-link bg-dark text-white" href="14_PO_PSO_Attainment.html">14</a></li>
    <li class="page-item " ><a class="page-link bg-dark text-white" href="15_Action_Taken.html">15</a></li>

    <li class="page-item">
      <a class="page-link bg-dark text-white" href="3_OOPM_PMT.html">Next</a>
    </li>
  </ul>
</nav>
    </td>
</tr>
</table>
</form>
  </body>
</html>
