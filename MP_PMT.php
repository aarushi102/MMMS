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
    <title>MP_PMT</title>
    <style>
      p{
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
  <form action="mp_pmt_details_1.php" method="POST">
    <table
      align="center"
      border="1"
      height="100px"
      width="95%"
      cellspacing="0"
      class="table table-dark table-hover"
    >
      <tr>
        <th rowspan="3">Exp No.</th>
        <th rowspan="3" width="50%">Name of Experiment</th>
        <th colspan="5">Criteria for Grading</th>
        <th rowspan="3" width="5%">Total (out of 15)</th>
        <th rowspan="3" width="5%">Average (out of 3)</th>
        <th rowspan="3"width="5%">Covered COs</th>
      </tr>

      <tr>
        <th>PE</th>
        <th>KT</th>
        <th>DR</th>
        <th>DN</th>
        <th>PL</th>
      </tr>

      <tr>
        <th>(out of 3)</th>
        <th>(out of 3)</th>
        <th>(out of 3)</th>
        <th>(out of 3)</th>
        <th>(out of 3)</th>
      </tr>

      <tr>
          <td><b>1.</b></td>
<td>

</td>
         
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="a1"
            id="a1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="a2"
            id="a2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="a3"
            id="a3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="a4"
            id="a4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="a5"
            id="a5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="a6"
            id="a6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="a7"
            id="a7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
         <td align="center" height="30px" width="10%">
          <input type="text"
            name="a8"
            id="a8"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>


      <tr>
          <td><b>2.</b></td>

          <td>

          </td>
          
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="b1"
            id="b1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="b2"
            id="b2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="b3"
            id="b3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="b4"
            id="b4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="b5"
            id="b5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="b6"
            id="b6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="b7"
            id="b7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="b8"
            id="b8"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <td><b>3.</b></td>

          <td>

          </td>
          
          <td align="center" height="30px" width="10%">
          <input type="text"
            name="c1"
            id="c1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="c2"
            id="c2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="c3"
            id="c3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="c4"
            id="c4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="c5"
            id="c5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="c6"
            id="c6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="c7"
            id="c7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="c8"
            id="c8"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <td><b>4.</b></td>

          <td>

          </td>
          
          <td align="center" height="30px" width="10%">
          <input type="text"
            name="d1"
            id="d1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="d2"
            id="d2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="d3"
            id="d3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="d4"
            id="d4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="d5"
            id="d5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="d6"
            id="d6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="d7"
            id="d7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="d8"
            id="d8"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <td><b>5.</b></td>

          <td>

          </td>
          
          <td align="center" height="30px" width="10%">
          <input type="text"
            name="e1"
            id="e1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="e2"
            id="e2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="e3"
            id="e3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="e4"
            id="e4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="e5"
            id="e5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="e6"
            id="e6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="e7"
            id="e7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="e8"
            id="e8"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <td><b>6.</b></td>

          <td>

          </td>
          
          <td align="center" height="30px" width="10%">
          <input type="text"
            name="f1"
            id="f1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="f2"
            id="f2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="f3"
            id="f3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="f4"
            id="f4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="f5"
            id="f5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="f6"
            id="f6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="f7"
            id="f7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="f8"
            id="f8"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <td><b>7.</b></td>

          <td>

          </td>
          
          <td align="center" height="30px" width="10%">
          <input type="text"
            name="g1"
            id="g1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="g2"
            id="g2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="g3"
            id="g3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="g4"
            id="g4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="g5"
            id="g5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="g6"
            id="g6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="g7"
            id="g7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="g8"
            id="g8"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <td><b>8.</b></td>

          <td>

          </td>
          
          <td align="center" height="30px" width="10%">
          <input type="text"
            name="h1"
            id="h1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="h2"
            id="h2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="h3"
            id="h3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="h4"
            id="h4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="h5"
            id="h5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="h6"
            id="h6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="h7"
            id="h7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="h8"
            id="h8"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <td><b>9.</b></td>

          <td>

          </td>
          
          <td align="center" height="30px" width="10%">
          <input type="text"
            name="i1"
            id="i1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="i2"
            id="i2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="i3"
            id="i3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="i4"
            id="i4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="i5"
            id="i5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="i6"
            id="i6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="i7"
            id="i7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="i8"
            id="i8"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <td><b>10.</b></td>

          <td>

          </td>
          
          <td align="center" height="30px" width="10%">
          <input type="text"
            name="j1"
            id="j1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="j2"
            id="j2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="j3"
            id="j3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="j4"
            id="j4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="j5"
            id="j5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="j6"
            id="j6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="j7"
            id="j7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="j8"
            id="j8"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <td><b>11.</b></td>

          <td>

          </td>
          
          <td align="center" height="30px" width="10%">
          <input type="text"
            name="k1"
            id="k1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="k2"
            id="k2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="k3"
            id="k3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="k4"
            id="k4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="k5"
            id="k5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="k6"
            id="k6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="k7"
            id="k7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="k8"
            id="k8"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <td><b>12.</b></td>

          <td>

          </td>
          
          <td align="center" height="30px" width="10%">
          <input type="text"
            name="l1"
            id="l1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="l2"
            id="l2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="l3"
            id="l3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="l4"
            id="l4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="l5"
            id="l5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="l6"
            id="l6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="l7"
            id="l7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="l8"
            id="l8"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <td><b>13.</b></td>

          <td>

          </td>
          
          <td align="center" height="30px" width="10%">
          <input type="text"
            name="m1"
            id="m1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="m2"
            id="m2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="m3"
            id="m3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="m4"
            id="m4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="m5"
            id="m5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="m6"
            id="m6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="m7"
            id="m7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="m8"
            id="m8"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <td><b>14.</b></td>

          <td>

          </td>
          
          <td align="center" height="30px" width="10%">
          <input type="text"
            name="n1"
            id="n1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="n2"
            id="n2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="n3"
            id="n3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="n4"
            id="n4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="n5"
            id="n5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="n6"
            id="n6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="n7"
            id="n7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="n8"
            id="n8"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <td><b>15.</b></td>

          <td>

          </td>
          
          <td align="center" height="30px" width="10%">
          <input type="text"
            name="o1"
            id="o1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="o2"
            id="o2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="o3"
            id="o3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="o4"
            id="o4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="o5"
            id="o5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="o6"
            id="o6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="o7"
            id="o7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="o8"
            id="o8"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <td><b>16.</b></td>

          <td>

          </td>
          
          <td align="center" height="30px" width="10%">
          <input type="text"
            name="p1"
            id="p1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="p2"
            id="p2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="p3"
            id="p3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="p4"
            id="p4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="p5"
            id="p5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="p6"
            id="p6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="p7"
            id="p7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="p8"
            id="p8"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <td><b>17.</b></td>

          <td>

          </td>
          
          <td align="center" height="30px" width="10%">
          <input type="text"
            name="q1"
            id="q1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="q2"
            id="q2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="q3"
            id="q3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="q4"
            id="q4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="q5"
            id="q5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="q6"
            id="q6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="q7"
            id="q7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="q8"
            id="q8"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <td><b>18.</b></td>

          <td>

          </td>
          
          <td align="center" height="30px" width="10%">
          <input type="text"
            name="r1"
            id="r1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="r2"
            id="r2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="r3"
            id="r3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="r4"
            id="r4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="r5"
            id="r5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="r6"
            id="r6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="r7"
            id="r7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="r8"
            id="r8"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <td><b>19.</b></td>

          <td>

          </td>
          
          <td align="center" height="30px" width="10%">
          <input type="text"
            name="s1"
            id="s1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="s2"
            id="s2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="s3"
            id="s3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="s4"
            id="s4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="s5"
            id="s5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="s6"
            id="s6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="s7"
            id="s7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="s8"
            id="s8"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <td><b>20.</b></td>

          <td>

          </td>
          
          <td align="center" height="30px" width="10%">
          <input type="text"
            name="t1"
            id="t1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="t2"
            id="t2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="t3"
            id="t3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="t4"
            id="t4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="t5"
            id="t5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="t6"
            id="t6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="t7"
            id="t7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="t8"
            id="t8"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <td><b>21.</b></td>

          <td>

          </td>
          
          <td align="center" height="30px" width="10%">
          <input type="text"
            name="u1"
            id="u1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="u2"
            id="u2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="u3"
            id="u3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="u4"
            id="u4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="u5"
            id="u5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="u6"
            id="u6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="u7"
            id="u7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="u8"
            id="u8"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

<tr>
          <td><b>22.</b></td>

          <td>

          </td>
          
          <td align="center" height="30px" width="10%">
          <input type="text"
            name="v1"
            id="v1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="v2"
            id="v2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="v3"
            id="v3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="v4"
            id="v4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="v5"
            id="v5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="v6"
            id="v6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="v7"
            id="v7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="v8"
            id="v8"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <td><b>23.</b></td>

          <td>

          </td>
          
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="w1"
            id="w1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="w2"
            id="w2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="w3"
            id="w3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="w4"
            id="w4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="w5"
            id="w5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="w6"
            id="w6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="w7"
            id="w7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="w8"
            id="w8"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

<tr>
          <td><b>24.</b></td>

          <td>

          </td>
          
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="x1"
            id="x1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="x2"
            id="x2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="x3"
            id="x3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="x4"
            id="x4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="x5"
            id="x5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="x6"
            id="x6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="x7"
            id="x7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="x8"
            id="x8"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <th colspan="2">Average Marks</th>
          <td align="center" height="30px" width="10%">
          <input type="text"
            name="y1"
            id="y1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="y2"
            id="y2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="y3"
            id="y3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="y4"
            id="y4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="y5"
            id="y5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="y6"
            id="y6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="y7"
            id="y7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="y8"
            id="y8"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>
      <tr>
          <td>
          <input type="submit" name="submit_1" id="submit_1" value="Add Details">
          </td>
      </tr>
    </table>
</form>


<p><b>Criteria for Grading – Preparedness and Efforts(PE),Knowledge of tools(KT), Debugging and results(DR), Documentation(DN), Punctuality & Lab Ethics(PL)</b>
<br>
<form action="" method="POST">
    <table
      align="center"
      border="1"
      height="100px"
      width="100%"
      cellspacing="0"
      class="table table-dark table-hover"
    >
      <tr>
        <th rowspan="3" width="40%">Mini Project</th>
        <th colspan="6">Criteria for Grading</th>
        <th rowspan="3" width="5%">Total (out of 18)</th>
        <th rowspan="3" width="5%">Average (out of 3)</th>
        <th rowspan="3"width="5%">Covered COs</th>
      </tr>

      <tr>
        <th>KD</th>
        <th>WG</th>
        <th>PS</th>
        <th>TM</th>
        <th>LL</th>
        <th>ET</th>
      </tr>

      <tr>
        <th>(out of 3)</th>
        <th>(out of 3)</th>
        <th>(out of 3)</th>
        <th>(out of 3)</th>
        <th>(out of 3)</th>
        <th>(out of 3)</th>
      </tr>

      <tr>
          <td>
          <input type="text"
            name="mp1"
            id="mp1"
            value=""
            style="margin: 0px; width: 98%; height: 70%; border: 0px"
          ></input>
          </td>

           <td align="center" height="30px" width="10%">
          <input type="text"
            name="mp2"
            id="mp2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
<td align="center" height="30px" width="10%">
          <input type="text"
            name="mp3"
            id="mp3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="mp4"
            id="mp4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="mp5"
            id="mp5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="mp6"
            id="mp6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="mp7"
            id="mp7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="mp8"
            id="mp8"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="mp9"
            id="mp9"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="mp10"
            id="mp10"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>
       <tr>
          <td>
          <input type="submit" name="submit_2" id="submit_2" value="Add Details">
          </td>
      </tr>
    </table>
</form>
<?php
$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms.sql");
    if(isset($_POST['submit_2'])){
      //  if(!empty($_POST['course_no']) && !empty($_POST['y1']) && !empty($_POST['cc1']) && !empty($_POST['c1']) && !empty($_POST['p1']) && !empty($_POST['cn1']) && !empty($_POST['d1']) && !empty($_POST['de1']) && !empty($_POST['sem']) && !empty($_POST['f1'])){

            $mp1 = $_POST['mp1'];
            $mp2 = $_POST['mp2'];
            $mp3 = $_POST['mp3'];
            $mp4 = $_POST['mp4'];
            $mp5 = $_POST['mp5'];
            $mp6 = $_POST['mp6'];
            $mp7 = $_POST['mp7'];
            $mp8 = $_POST['mp8'];
            $mp9 = $_POST['mp9'];
            $mp10 = $_POST['mp10'];
            
            //$query= "INSERT INTO `dbms_course_obj_outcomes` (`y1`, `cc1`, `c1`, `p1`, `cn1`, `d1`, `de1`, `sem`, `f1`) VALUES ('$_POST[y1]', '$_POST[cc1]', '$_POST[c1]', '$_POST[p1]', '$_POST[cn1]', '$_POST[d1]', '$_POST[de1]', '$_POST[sem]', '$_POST[f1]')";
           // $query = "INSERT into `dbms_7_assessment_1` (`A1`, `A2`, `A3`, `A4`, `A5`, `A6`, `B1`, `B2`, `B3`, `B4`, `B5`, `B6`, `C1`, `C2`, `C3`, `C4`, `C5`, `C6`, `D1`, `D2`, `D3`, `D4`, `D5`, `D6`, `E1`, `E2`, `E3`, `E4`, `E5`, `E6`, `F1`, `F2`, `F3`, `F4`, `F5`, `F6`, `G1`, `G2`, `G3`, `G4`, `G5`, `G6`, `H1`, `H2`, `H3`, `H4`, `H5`, `H6`, `J1`, `J2`, `J3`, `J4`, `J5`, `J6`, `K1`, `K2`, `K3`, `K4`, `K5`, `K6`) VALUES ('$_POST[A1]', '$_POST[A2]', '$_POST[A3]', '$_POST[A4]', '$_POST[A5]', '$_POST[A6]', '$_POST[B1]', '$_POST[B2]', '$_POST[B3]', '$_POST[B4]', '$_POST[B5]', '$_POST[B6]', '$_POST[C1]', '$_POST[C2]', '$_POST[C3]', '$_POST[C4]', '$_POST[C5]', '$_POST[C6]', '$_POST[D1]', '$_POST[D2]', '$_POST[D3]', '$_POST[D4]', '$_POST[D5]', '$_POST[D6]', '$_POST[E1]', '$_POST[E2]', '$_POST[E3]', '$_POST[E4]', '$_POST[E5]', '$_POST[E6]', '$_POST[F1]', '$_POST[F2]', '$_POST[F3]', '$_POST[F4]', '$_POST[F5]', '$_POST[F6]', '$_POST[G1]', '$_POST[G2]', '$_POST[G3]', '$_POST[G4]', '$_POST[G5]', '$_POST[G6]', '$_POST[H1]', '$_POST[H2]', '$_POST[H3]', '$_POST[H4]', '$_POST[H5]', '$_POST[H6]', '$_POST[J1]', '$_POST[J2]', '$_POST[J3]', '$_POST[J4]', '$_POST[J5]', '$_POST[J6]', '$_POST[K1]', '$_POST[K2]', '$_POST[K3]', '$_POST[K4]', '$_POST[K5]', '$_POST[K6]')";
           $query = "INSERT INTO `mp_pmt_2`(`mp1`, `mp2`, `mp3`, `mp4`, `mp5`, `mp6`, `mp7`, `mp8`, `mp9`, `mp10`) VALUES ('$_POST[mp1]', '$_POST[mp2]', '$_POST[mp3]', '$_POST[mp4]', '$_POST[mp5]', '$_POST[mp6]', '$_POST[mp7]', '$_POST[mp8]', '$_POST[mp9]', '$_POST[mp10]')";
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


<p><b>Criteria for Grading-</b>

    Knowledge regarding design and implementation of GUI based Java application (KD), 
    <br>
    Working in a group (WG), 
<br>
Presentation skill (PS), <br>
Time Management (TM), <br>
Lifelong learning (LL), <br>
Ethics (ET) <br>
<b>Grades – Meet Expectations(3 Marks), Moderate Expectations (2 Marks), Below Expectations (1 Mark)</b>
</p>
<br> 


<form action="" method="POST">
    <table
      align="center"
      border="1"
      height="100px"
      width="75%"
      cellspacing="0"
      class="table table-dark table-hover"
    >
      <tr>
        <th rowspan="3" width="30%">Assignments</th>
        <th colspan="4">Criteria for Grading</th>
        <th rowspan="3" width="5%">Total (out of 12)</th>
        <th rowspan="3" width="5%">Average (out of 3)</th>
        <th rowspan="3"width="5%">Covered COs</th>
      </tr>

      <tr>
        <th>TS</th>
        <th>OM</th>
        <th>NT</th>
        <th>IS</th>
        
      </tr>

      <tr>
        <th>(out of 3)</th>
        <th>(out of 3)</th>
        <th>(out of 3)</th>
        <th>(out of 3)</th>
      </tr>

      <tr>
          <td>
Assignment No.1
          </td>

           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xa1"
            id="xa1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
        <td align="center" height="30px" width="10%">
          <input type="text"
            name="xa2"
            id="xa2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xa3"
            id="xa3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xa4"
            id="xa4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xa5"
            id="xa5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xa6"
            id="xa6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xa7"
            id="xa7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <td>
Assignment No.2
          </td>

           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xb1"
            id="xb1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
        <td align="center" height="30px" width="10%">
          <input type="text"
            name="xb2"
            id="xb2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xb3"
            id="xb3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xb4"
            id="xb4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xb5"
            id="xb5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xb6"
            id="xb6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xb7"
            id="xb7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <td>
Assignment No.3
          </td>

           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xc1"
            id="xc1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
        <td align="center" height="30px" width="10%">
          <input type="text"
            name="xc2"
            id="xc2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xc3"
            id="xc3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xc4"
            id="xc4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xc5"
            id="xc5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xc6"
            id="xc6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xc7"
            id="xc7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>

      <tr>
          <td>
Assignment No.4
          </td>

           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xd1"
            id="xd1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
        <td align="center" height="30px" width="10%">
          <input type="text"
            name="xd2"
            id="xd2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xd3"
            id="xd3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xd4"
            id="xd4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xd5"
            id="xd5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xd6"
            id="xd6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xd7"
            id="xd7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <td>
Assignment No.5
          </td>

           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xe1"
            id="xe1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
        <td align="center" height="30px" width="10%">
          <input type="text"
            name="xe2"
            id="xe2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xe3"
            id="xe3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xe4"
            id="xe4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xe5"
            id="xe5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xe6"
            id="xe6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xe7"
            id="xe7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <td>
Assignment No.6
          </td>

           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xf1"
            id="xf1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
        <td align="center" height="30px" width="10%">
          <input type="text"
            name="xf2"
            id="xf2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xf3"
            id="xf3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xf4"
            id="xf4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xf5"
            id="xf5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xf6"
            id="xf6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xf7"
            id="xf7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>

      <tr>
          <td>
 <b>  Average Marks  </b>
          </td>

           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xg1"
            id="xg1"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
        <td align="center" height="30px" width="10%">
          <input type="text"
            name="xg2"
            id="xg2"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xg3"
            id="xg3"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xg4"
            id="xg4"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xg5"
            id="xg5"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xg6"
            id="xg6"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
           <td align="center" height="30px" width="10%">
          <input type="text"
            name="xg7"
            id="xg7"
            value=""
            style="margin: 0px; width: 90%; height: 70%; border: 0px"
          ></input>
        </td>
      </tr>
       <tr>
          <td>
          <input type="submit" name="submit_3" id="submit_3" value="Add Details">
          </td>
      </tr>
    </table>
</form>
    <?php
$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms.sql");
    if(isset($_POST['submit_3'])){
      //  if(!empty($_POST['course_no']) && !empty($_POST['y1']) && !empty($_POST['cc1']) && !empty($_POST['c1']) && !empty($_POST['p1']) && !empty($_POST['cn1']) && !empty($_POST['d1']) && !empty($_POST['de1']) && !empty($_POST['sem']) && !empty($_POST['f1'])){

            // $xa1 = $_POST['xa1'];
            // $xa2 = $_POST['xa2'];
            // $xa3 = $_POST['xa3'];
            // $xa4 = $_POST['xa4'];
            // $xa5 = $_POST['xa5'];
            // $xa6 = $_POST['xa6'];
            // $xa7 = $_POST['xa7'];
            
            // $xb1 = $_POST['xb1'];
            // $xb2 = $_POST['xb2'];
            // $xb3 = $_POST['xb3'];
            // $xb4 = $_POST['xb4'];
            // $xb5 = $_POST['xb5'];
            // $xb6 = $_POST['xb6'];
            // $xb7 = $_POST['xb7'];
            
            // $xc1 = $_POST['xc1'];
            // $xc2 = $_POST['xc2'];
            // $xc3 = $_POST['xc3'];
            // $xc4 = $_POST['xc4'];
            // $xc5 = $_POST['xc5'];
            // $xc6 = $_POST['xc6'];
            // $xc7 = $_POST['xc7'];
            
            // $xd1 = $_POST['xd1'];
            // $xd2 = $_POST['xd2'];
            // $xd3 = $_POST['xd3'];
            // $xd4 = $_POST['xd4'];
            // $xd5 = $_POST['xd5'];
            // $xd6 = $_POST['xd6'];
            // $xd7 = $_POST['xd7'];
            
            // $xe1 = $_POST['xe1'];
            // $xe2 = $_POST['xe2'];
            // $xe3 = $_POST['xe3'];
            // $xe4 = $_POST['xe4'];
            // $xe5 = $_POST['xe5'];
            // $xe6 = $_POST['xe6'];
            // $xe7 = $_POST['xe7'];
            
            // $xf1 = $_POST['xf1'];
            // $xf2 = $_POST['xf2'];
            // $xf3 = $_POST['xf3'];
            // $xf4 = $_POST['xf4'];
            // $xf5 = $_POST['xf5'];
            // $xf6 = $_POST['xf6'];
            // $xf7 = $_POST['xf7'];
            
            // $xg1 = $_POST['xg1'];
            // $xg2 = $_POST['xg2'];
            // $xg3 = $_POST['xg3'];
            // $xg4 = $_POST['xg4'];
            // $xg5 = $_POST['xg5'];
            // $xg6 = $_POST['xg6'];
            // $xg7 = $_POST['xg7'];
            
            
            //$query= "INSERT INTO `dbms_course_obj_outcomes` (`y1`, `cc1`, `c1`, `p1`, `cn1`, `d1`, `de1`, `sem`, `f1`) VALUES ('$_POST[y1]', '$_POST[cc1]', '$_POST[c1]', '$_POST[p1]', '$_POST[cn1]', '$_POST[d1]', '$_POST[de1]', '$_POST[sem]', '$_POST[f1]')";
           $query = "INSERT INTO `mp_pmt_3` (`xa1`, `xa2`, `xa3`, `xa4`, `xa5`, `xa6`, `xa7`, `xb1`, `xb2`, `xb3`, `xb4`, `xb5`, `xb6`, `xb7`, `xc1`, `xc2`, `xc3`, `xc4`, `xc5`, `xc6`, `xc7`, `xd1`, `xd2`, `xd3`, `xd4`, `xd5`, `xd6`, `xd7`, `xe1`, `xe2`, `xe3`, `xe4`, `xe5`, `xe6`, `xe7`, `xf1`, `xf2`, `xf3`, `xf4`, `xf5`, `xf6`, `xf7`, `xg1`, `xg2`, `xg3`, `xg4`, `xg5`, `xg6`, `xg7`) VALUES ('$_POST[xa1]', '$_POST[xa2]', '$_POST[xa3]', '$_POST[xa4]', '$_POST[xa5]', '$_POST[xa6]', '$_POST[xa7]', '$_POST[xb1]', '$_POST[xb2]', '$_POST[xb3]', '$_POST[xb4]', '$_POST[xb5]', '$_POST[xb6]', '$_POST[xb7]', '$_POST[xc1]', '$_POST[xc2]', '$_POST[xc3]', '$_POST[xc4]', '$_POST[xc5]', '$_POST[xc6]', '$_POST[xc7]', '$_POST[xd1]', '$_POST[xd2]', '$_POST[xd3]', '$_POST[xd4]', '$_POST[xd5]', '$_POST[xd6]', '$_POST[xd7]', '$_POST[xe1]', '$_POST[xe2]', '$_POST[xe3]', '$_POST[xe4]', '$_POST[xe5]', '$_POST[xe6]', '$_POST[xe7]', '$_POST[xf1]', '$_POST[xf2]', '$_POST[xf3]', '$_POST[xf4]', '$_POST[xf5]', '$_POST[xf6]', '$_POST[xf7]', '$_POST[xg1]', '$_POST[xg2]', '$_POST[xg3]', '$_POST[xg4]', '$_POST[xg5]', '$_POST[xg6]', '$_POST[xg7]')";
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


<p><b>Criteria for Grading-</b>

    Timely submission(TS),  
    <br>
    Working in a group (WG), 
<br>
Presentation skill (PS), <br>
Originality of the material(OM),  <br>
Neatness(NT),  <br>
Innovative solution(IS) <br>
<b>Grades – Meet Expectations(3 Marks), Moderate Expectations (2 Marks), Below Expectations (1 Mark)</b>
</p>
<br> 
     <form action="" method="POST">
         <table align="center"
      border="1"
      height="100px"
      width="95%"
      cellspacing="0"
      class="table table-dark">
             <tr>
                 <th>Sr.No.</th>
                 <th>1.</th>
                 <th>2.</th>
                 <th>3.</th>
                 <th>4.</th>
                 <th>5.</th>
                 <th>6.</th>
                 <th>7.</th>
                 <th>8.</th>
                 <th>9.</th>
                 <th>10.</th>
                 <th>11.</th>
                 <th>12.</th>
                 <th>13.</th>
                 <th>14.</th>
                 <th>15.</th>
                 <th>16.</th>
                 <th>17.</th>
                 <th>18.</th>
                 <th>19.</th>
                 <th>20.</th>
             </tr>

             <tr>
                 <th>Experiment No.</th>
                 <th>Exp1.</th>
                 <th>Exp2.</th>
                 <th>Exp3.</th>
                 <th>Exp4.</th>
                 <th>Exp5.</th>
                 <th>Exp6.</th>
                 <th>Exp7.</th>
                 <th>Exp8.</th>
                 <th>Exp9.</th>
                 <th>Exp10.</th>
                 <th>Exp11.</th>
                 <th>Exp12.</th>
                 <th>Exp13.</th>
                 <th>Exp14.</th>
                 <th>Exp15.</th>
                 <th>Exp16.</th>
                 <th>Exp17.</th>
                 <th>Exp18.</th>
                 <th>Exp23.</th>
                 <th>Exp24.</th>
             </tr>

             <tr>
                 <th>CO Mapping</th>
                <td align="center"> <input type="text" name="com1" id="com1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="com2" id="com2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="com3" id="com3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="com4" id="com4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="com5" id="com5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="com6" id="com6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="com7" id="com7" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="com8" id="com8" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="com9" id="com9" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="com10" id="com10" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="com11" id="com11" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="com12" id="com12" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="com13" id="com13" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="com14" id="com14" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="com15" id="com15" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="com16" id="com16" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="com17" id="com17" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="com18" id="com18" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="com19" id="com19" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="com20" id="com20" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
             </tr>
              <tr>
          <td>
          <input type="submit" name="submit_4" id="submit_4" value="Add Details">
          </td>
      </tr>
         </table>

         <?php
$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms.sql");
    if(isset($_POST['submit_4'])){
      //  if(!empty($_POST['course_no']) && !empty($_POST['y1']) && !empty($_POST['cc1']) && !empty($_POST['c1']) && !empty($_POST['p1']) && !empty($_POST['cn1']) && !empty($_POST['d1']) && !empty($_POST['de1']) && !empty($_POST['sem']) && !empty($_POST['f1'])){

            $com1 = $_POST['com1'];
            $com2 = $_POST['com2'];
            $com3 = $_POST['com3'];
            $com4 = $_POST['com4'];
            $com5 = $_POST['com5'];
            $com6 = $_POST['com6'];
            $com7 = $_POST['com7'];
            $com8 = $_POST['com8'];
            $com9 = $_POST['com9'];
            $com10 = $_POST['com10'];
            $com11 = $_POST['com11'];
            $com12 = $_POST['com12'];
            $com13 = $_POST['com13'];
            $com14 = $_POST['com14'];
            $com15 = $_POST['com15'];
            $com16 = $_POST['com16'];
            $com17 = $_POST['com17'];
            $com18 = $_POST['com18'];
            $com19 = $_POST['com19'];
            $com20 = $_POST['com20'];
            
           $query = "INSERT INTO `mp_pmt_4` (`com1`, `com2`, `com3`, `com4`, `com5`, `com6`, `com7`, `com8`, `com9`, `com10`, `com11`, `com12`, `com13`, `com14`, `com15`, `com16`, `com17`, `com18`, `com19`, `com20`) VALUES ('$_POST[com1]', '$_POST[com2]', '$_POST[com3]', '$_POST[com4]', '$_POST[com5]', '$_POST[com6]', '$_POST[com7]', '$_POST[com8]', '$_POST[com9]', '$_POST[com10]', '$_POST[com11]', '$_POST[com12]', '$_POST[com13]', '$_POST[com14]', '$_POST[com15]', '$_POST[com16]', '$_POST[com17]', '$_POST[com18]', '$_POST[com19]', '$_POST[com20]')";
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
?>

         <table height="70px" width="80%" align="center">
   <tr>
    <td align="center">
      <button name="bt1" value="" id="bt1">Next Page</button>
    </td>
</tr>
</table>

 <table height="150px" width="80%" align="center">
          <tr>
            <td align="center">
                <!-- <input type="submit" value="Submit"> -->
                 <button type="button" class="btn btn-outline-light" name="" id="" value=" ">Submit</button> 
            </td>
        </tr>
   <tr>
    <td align="center">
 <nav aria-label="Page navigation example">
  <ul class="pagination  justify-content-center">
    <li class="page-item ">
      <a class="page-link bg-dark text-white" href="2_Course_Objectives_Outcomes.html">Previous</a>
    </li>
    <li class="page-item " ><a class="page-link bg-dark text-white" href="1_POs and PSOs of CS.html">1</a></li>
    <li class="page-item " ><a class="page-link bg-dark text-white" href="2_Course_Objectives_Outcomes.html">2</a></li>
    <li class="page-item active"  aria-current="page"><a class="page-link  text-white" href="3_OOPM_PMT.html">3</a></li>
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
      <a class="page-link bg-dark text-white" href="4_Action_Plan_Items.html">Next</a>
    </li>
  </ul>
</nav>
    </td>
</tr>
</table>
     </form>
  </body>
</html>
