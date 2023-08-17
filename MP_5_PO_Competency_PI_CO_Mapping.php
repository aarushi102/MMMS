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
    <title>PO_Competency_PI_CO_Mapping</title>
  </head>
  <form action="" method="POST">
    <table align="center" border="1" height="100px" width="120%" cellspacing="0">
      <tr>
        <th width="15%">POs</th>
        <th>C.no.</th>
        <th width="20%">Competency</th>
        <th>Sr.no.</th>
        <th>PI.no.</th>
        <th width="25%">Performance Indications</th>
        <th>E1</th>
        <th>E2</th>
        <th>E3</th>
        <th>E4</th>
        <th>E5</th>
        <th>E6</th>
      </tr>

      <tr>
          <td rowspan="5">PO 1: Engineering knowledge: Apply the knowledge of mathematics, science, engineering fundamentals, and an engineering specialisation for the solution of complex engineering problems.</td>
          <td rowspan="2">1.1</td>
          <td rowspan="2">Demonstrate competence in mathematical modelling</td>
          <td>1</td>
          <td>1.1.1</td>
          <td>Apply the knowledge of discrete structures, linear algebra, statistics and numerical techniques to solve problems</td>
          <td align="center"> <input type="text" name="a1" id="a1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="a2" id="a2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="a3" id="a3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="a4" id="a4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="a5" id="a5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="a6" id="a6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                
      </tr>

      <tr>
          <td>2</td>
          <td>1.1.2</td>
          <td>Apply the concepts of probability, statistics and queuing theory in modeling of computer-based system, data and network protocols.</td>
          <td align="center"> <input type="text" name="b1" id="b1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="b2" id="b2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="b3" id="b3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="b4" id="b4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="b5" id="b5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="b6" id="b6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td>1.2</td>
          <td>	Demonstrate competence in basic sciences</td>
          <td>3</td>
          <td>1.1.3</td>
          <td>Apply laws of natural science to an engineering problem</td>
          <td align="center"> <input type="text" name="c1" id="c1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="c2" id="c2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="c3" id="c3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="c4" id="c4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="c5" id="c5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="c6" id="c6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

       <tr>
          <td>1.3</td>
          <td>Demonstrate competence in engineering fundamentals</td>
          <td>4</td>
          <td>1.1.4</td>
          <td>Apply engineering fundamentals</td>
          <td align="center"> <input type="text" name="d1" id="d1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="d2" id="d2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="d3" id="d3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="d4" id="d4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="d5" id="d5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="d6" id="d6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

       <tr>
          <td>1.4</td>
          <td>	Demonstrate competence in specialized engineering knowledge to the program</td>
          <td>5</td>
          <td>1.1.4</td>
          <td>Apply theory and principles of computer science and engineering to solve an engineering problem</td>
          <td align="center"> <input type="text" name="e1" id="e1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="e2" id="e2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="e3" id="e3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="e4" id="e4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="e5" id="e5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="e6" id="e6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td rowspan="14">PO 2: Problem analysis: Identify, formulate, research literature, and analyse complex engineering problems reaching
substantiated conclusions using first principles of mathematics, natural sciences, and engineering sciences.</td>
          <td rowspan="3">2.1</td>
          <td rowspan="3">Demonstrate an ability to identify and formulate complex engineering problem</td>
          <td>1</td>
          <td>2.1.1</td>
          <td>Evaluate problem statements and identifies objectives</td>
          <td align="center"> <input type="text" name="f1" id="f1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="f2" id="f2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="f3" id="f3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="f4" id="f4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="f5" id="f5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="f6" id="f6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td>2</td>
          <td>2.1.2</td>
          <td>Identify processes/modules/algorithms of a computer-based system and parameters to solve a problem</td>
          <td align="center"> <input type="text" name="g1" id="g1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="g2" id="g2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="g3" id="g3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="g4" id="g4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="g5" id="g5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="g6" id="g6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td>3</td>
          <td>2.1.3</td>
          <td>	Identify mathematical algorithmic knowledge that applies to a given problem</td>
          <td align="center"> <input type="text" name="h1" id="h1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="h2" id="h2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="h3" id="h3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="h4" id="h4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="h5" id="h5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="h6" id="h6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td rowspan="5">2.2</td>
          <td rowspan="5">	Demonstrate an ability to formulate a solution plan and methodology for an engineering problem</td>
          <td>4</td>
          <td>2.2.1</td>
          <td>Reframe the computer-based system into interconnected subsystems</td>
          <td align="center"> <input type="text" name="i1" id="i1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="i2" id="i2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="i3" id="i3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="i4" id="i4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="i5" id="i5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="i6" id="i6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td>5</td>
          <td>2.2.2</td>
          <td>Identify functionalities and computing resources.</td>
          <td align="center"> <input type="text" name="j1" id="j1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="j2" id="j2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="j3" id="j3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="j4" id="j4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="j5" id="j5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="j6" id="j6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td>6</td>
          <td>2.2.3</td>
          <td>Identify existing solution/methods to solve the problem, including forming justified approximations and assumptions</td>
          <td align="center"> <input type="text" name="k1" id="k1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="k2" id="k2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="k3" id="k3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="k4" id="k4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="k5" id="k5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="k6" id="k6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

       <tr>
          <td>7</td>
          <td>2.2.4</td>
          <td>Compare and contrast alternative solution/methods to select the best methods</td>
          <td align="center"> <input type="text" name="l1" id="l1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="l2" id="l2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="l3" id="l3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="l4" id="l4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="l5" id="l5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="l6" id="l6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

       <tr>
          <td>8</td>
          <td>2.2.5</td>
          <td>Compare and contrast alternative solution processes to select the best process.</td>
          <td align="center"> <input type="text" name="m1" id="m1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="m2" id="m2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="m3" id="m3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="m4" id="m4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="m5" id="m5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="m6" id="m6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td rowspan="2">2.3</td>
          <td rowspan="2">Demonstrate an ability to formulate and interpret a model</td>
          <td>9</td>
          <td>2.3.1</td>
          <td>Able to apply computer engineering principles to formulate modules of a system with required applicability and performance.</td>
          <td align="center"> <input type="text" name="n1" id="n1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="n2" id="n2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="n3" id="n3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="n4" id="n4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="n5" id="n5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="n6" id="n6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td>10</td>
          <td>2.3.2</td>
          <td>	Identify design constraints for required performance criteria.</td>
          <td align="center"> <input type="text" name="o1" id="o1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="o2" id="o2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="o3" id="o3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="o4" id="o4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="o5" id="o5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="o6" id="o6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td rowspan="4">2.4</td>
          <td rowspan="4">Demonstrate an ability to execute a solution process and analyze results</td>
          <td>11</td>
          <td>2.4.1</td>
          <td>Applies engineering mathematics to implement the solution.</td>
          <td align="center"> <input type="text" name="p1" id="p1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="p2" id="p2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="p3" id="p3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="p4" id="p4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="p5" id="p5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="p6" id="p6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td>12</td>
          <td>2.4.2</td>
          <td>Analyze and interpret the results using contemporary tools.</td>
          <td align="center"> <input type="text" name="q1" id="q1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="q2" id="q2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="q3" id="q3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="q4" id="q4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="q5" id="q5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="q6" id="q6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td>13</td>
          <td>2.4.3</td>
          <td>	Identify the limitations of the solution and sources/causes.</td>
          <td align="center"> <input type="text" name="r1" id="r1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="r2" id="r2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="r3" id="r3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="r4" id="r4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="r5" id="r5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="r6" id="r6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td>14</td>
          <td>2.4.4</td>
          <td>	Arrive at conclusions with respect to the objectives.</td>
          <td align="center"> <input type="text" name="s1" id="s1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="s2" id="s2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="s3" id="s3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="s4" id="s4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="s5" id="s5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="s6" id="s6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

       <tr>
          <td rowspan="14">PO 3: Design/Development of Solutions: Design solutions for complex engineering problems and design system components or processes that meet the specified needs with appropriate consideration for public health and safety, and cultural, societal, and environmental considerations.</td>
          <td rowspan="6">3.1</td>
          <td rowspan="6">Demonstrate an ability to define a complex/ open-ended problem in engineering terms</td>
          <td>1</td>
          <td>3.1.1</td>
          <td>Able to define a precise problem statement with objectives and scope.</td>
          <td align="center"> <input type="text" name="t1" id="t1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="t2" id="t2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="t3" id="t3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="t4" id="t4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="t5" id="t5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="t6" id="t6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                
      </tr>

      <tr>
          <td>2</td>
          <td>3.1.2</td>
          <td>	Able to identify and document system requirements from stake- holders.</td>
          <td align="center"> <input type="text" name="u1" id="u1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="u2" id="u2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="u3" id="u3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="u4" id="u4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="u5" id="u5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="u6" id="u6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td>3</td>
          <td>3.1.3</td>
          <td>Able to review state-of-the-art literature to synthesize system requirements.</td>
          <td align="center"> <input type="text" name="v1" id="v1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="v2" id="v2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="v3" id="v3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="v4" id="v4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="v5" id="v5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="v6" id="v6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

       <tr>
          <td>4</td>
          <td>3.1.4</td>
          <td>	Able to choose appropriate quality attributes as defined by ISO/IEC/IEEE standard.</td>
          <td align="center"> <input type="text" name="w1" id="w1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="w2" id="w2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="w3" id="w3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="w4" id="w4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="w5" id="w5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="w6" id="w6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td>5</td>
          <td>3.1.5</td>
          <td>	Explore and synthesize system requirements from larger social and professional concerns.</td>
          <td align="center"> <input type="text" name="x1" id="x1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="x2" id="x2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="x3" id="x3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="x4" id="x4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="x5" id="x5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="x6" id="x6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

       <tr>
          <td>6</td>
          <td>3.1.6</td>
          <td>Able to develop software requirement specifications (SRS).</td>
          <td align="center"> <input type="text" name="y1" id="y1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="y2" id="y2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="y3" id="y3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="y4" id="y4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="y5" id="y5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="y6" id="y6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

<tr>
     
          <td rowspan="3">3.2</td>
          <td rowspan="3">Demonstrate an ability to generate a diverse set of alternative design solutions</td>
          <td>7</td>
          <td>3.2.1</td>
          <td>Able to explore design alternatives.</td>
          <td align="center"> <input type="text" name="z1" id="z1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="z2" id="z2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="z3" id="z3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="z4" id="z4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="z5" id="z5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="z6" id="z6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td>8</td>
          <td>3.2.2</td>
          <td>Able to produce a variety of potential design solutions suited to meet functional requirements.</td>
          <td align="center"> <input type="text" name="ab1" id="ab1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ab2" id="ab2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ab3" id="ab3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ab4" id="ab4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ab5" id="ab5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ab6" id="ab6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

       <tr>
          <td>9</td>
          <td>3.2.3</td>
          <td>Identify suitable non-functional requirements for evaluation of alternate design solutions.</td>
          <td align="center"> <input type="text" name="ac1" id="ac1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ac2" id="ac2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ac3" id="ac3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ac4" id="ac4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ac5" id="ac5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ac6" id="ac6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>      

<tr>
     
          <td rowspan="2">3.3</td>
          <td rowspan="2">Demonstrate an ability to select optimal design scheme for fur ther development</td>
          <td>10</td>
          <td>3.3.1</td>
          <td>Able to perform systematic evaluation of the degree to which several design concepts meet the criteria.</td>
          <td align="center"> <input type="text" name="ad1" id="ad1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ad2" id="ad2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ad3" id="ad3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ad4" id="ad4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ad5" id="ad5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ad6" id="ad6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td>11</td>
          <td>3.3.2</td>
          <td>Consult with domain exper ts and stakeholders to select candidate engineering design solution for fur ther development</td>
          <td align="center"> <input type="text" name="ae1" id="ae1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ae2" id="ae2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ae3" id="ae3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ae4" id="ae4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ae5" id="ae5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ae6" id="ae6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
     
          <td rowspan="3">3.4</td>
          <td rowspan="3">	Demonstrate an ability to advance an engineering design to defined end state</td>
          <td>12</td>
          <td>3.4.1</td>
          <td>	Able to refine architecture design into a detailed design within the existing constraints.</td>
          <td align="center"> <input type="text" name="af1" id="af1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="af2" id="af2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="af3" id="af3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="af4" id="af4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="af5" id="af5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="af6" id="af6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td>13</td>
          <td>3.4.2</td>
          <td>	Able to implement and integrate the modules.</td>
          <td align="center"> <input type="text" name="ag1" id="ag1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ag2" id="ag2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ag3" id="ag3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ag4" id="ag4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ag5" id="ag5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ag6" id="ag6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

       <tr>
          <td>14</td>
          <td>3.4.3</td>
          <td>Able to verify the functionalities and validate the design.</td>
          <td align="center"> <input type="text" name="ah1" id="ah1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ah2" id="ah2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ah3" id="ah3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ah4" id="ah4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ah5" id="ah5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ah6" id="ah6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>     
      
      <tr>
          <td rowspan="8">PO 4: Conduct investigations of complex problems: Use research-based knowledge and research methods including design of experiments, analysis and interpretation of data, and synthesis of the information to provide valid conclusions.</td>
          <td rowspan="3">4.1</td>
          <td rowspan="3">	Demonstrate an ability to conduct investigations of technical issues consistent with their level of knowledge and understanding</td>
          <td>1</td>
          <td>4.1.1</td>
          <td>Define a problem for purposes of investigation, its scope and importance</td>
          <td align="center"> <input type="text" name="ai1" id="ai1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ai2" id="ai2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ai3" id="ai3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ai4" id="ai4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ai5" id="ai5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ai6" id="ai6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>     
      </tr>
      <tr>
           <td>2</td>
          <td>4.1.2</td>
          <td>Able to choose appropriate procedure/algorithm, dataset and test cases.</td>
          <td align="center"> <input type="text" name="aj1" id="aj1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="aj2" id="aj2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="aj3" id="aj3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="aj4" id="aj4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="aj5" id="aj5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="aj6" id="aj6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>
      <tr>
           <td>3</td>
          <td>4.1.3</td>
          <td>	Able to choose appropriate hardware/software tools to conduct the experiment</td>
          <td align="center"> <input type="text" name="ak1" id="ak1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ak2" id="ak2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ak3" id="ak3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ak4" id="ak4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ak5" id="ak5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ak6" id="ak6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td>4.2</td>
          <td>Demonstrate an ability to design experiments to solve open-ended problems</td>
          <td>4</td>
          <td>4.3.1</td>
          <td>Design and develop appropriate procedures/methodologies based on the study objectives</td>
          <td align="center"> <input type="text" name="al1" id="al1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="al2" id="al2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="al3" id="al3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="al4" id="al4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="al5" id="al5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="al6" id="al6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td rowspan="4">4.3</td>
          <td rowspan="4">	Demonstrate an ability to analyze data and reach a valid conclusion</td>
          <td>5</td>
          <td>4.3.1</td>
          <td>	Use appropriate procedures, tools and techniques to collect and analyze data</td>
          <td align="center"> <input type="text" name="am1" id="am1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="am2" id="am2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="am3" id="am3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="am4" id="am4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="am5" id="am5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="am6" id="am6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td>6</td>
          <td>4.3.2</td>
          <td>Critically analyze data for trends and correlations, stating possible errors and limitations</td>
          <td align="center"> <input type="text" name="an1" id="an1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="an2" id="an2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="an3" id="an3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="an4" id="an4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="an5" id="an5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="an6" id="an6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td> 
      </tr>

      <tr>
          <td>7</td>
          <td>4.3.3</td>
          <td>Represent data (in tabular and/or graphical forms) so as to facilitate analysis and explanation of the data, and drawing of conclusions</td>
          <td align="center"> <input type="text" name="ao1" id="ao1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ao2" id="ao2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ao3" id="ao3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ao4" id="ao4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ao5" id="ao5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ao6" id="ao6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td>8</td>
          <td>4.3.4</td>
          <td>Synthesize information and knowledge about the problem from the raw data to reach appropriate conclusions</td>
          <td align="center"> <input type="text" name="ap1" id="ap1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ap2" id="ap2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ap3" id="ap3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ap4" id="ap4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ap5" id="ap5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ap6" id="ap6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td rowspan="6">PO 5: Modern tool usage: Create, select, and apply appropriate techniques, resources, and modern engineering and IT tools including prediction and modelling to complex engineering activities with an understanding of the limitations.</td>
          <td rowspan="2">5.1</td>
          <td rowspan="2">	Demonstrate an ability to identify/create modern engineering tools, techniques and resources</td>
          <td>1</td>
          <td>5.1.1</td>
          <td>	Identify modern engineering tools, techniques and resources for engineering activities</td>
          <td align="center"> <input type="text" name="aq1" id="aq1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="aq2" id="aq2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="aq3" id="aq3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="aq4" id="aq4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="aq5" id="aq5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="aq6" id="aq6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                
      </tr>

      <tr>
          <td>2</td>
          <td>5.1.2</td>
          <td>Create/adapt/modify/extend tools and techniques to solve engineering problems</td>
          <td align="center"> <input type="text" name="ar1" id="ar1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ar2" id="ar2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ar3" id="ar3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ar4" id="ar4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ar5" id="ar5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ar6" id="ar6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td rowspan="2">5.2</td>
          <td rowspan="2">Demonstrate an ability to select and apply discipline- specific tools, techniques and resources</td>
          <td>3</td>
          <td>5.2.1</td>
          <td>Identify the strengths and limitations of tools for (i) acquiring information, (ii) modeling and simulating, (iii) monitoring system performance, and (iv) creating engineering designs.</td>
          <td align="center"> <input type="text" name="as1" id="as1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="as2" id="as2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="as3" id="as3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="as4" id="as4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="as5" id="as5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="as6" id="as6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                
      </tr>

      <tr>
          <td>4</td>
          <td>5.2.2</td>
          <td>Demonstrate proficiency in using discipline-specific tools</td>
          <td align="center"> <input type="text" name="at1" id="at1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="at2" id="at2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="at3" id="at3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="at4" id="at4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="at5" id="at5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="at6" id="at6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td rowspan="2">5.3</td>
          <td rowspan="2">	Demonstrate an ability to evaluate the suitability and limitations of tools used to solve an engineering problem</td>
          <td>5</td>
          <td>5.3.1</td>
          <td>Discuss limitations and validate tools, techniques and resources</td>
          <td align="center"> <input type="text" name="au1" id="au1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="au2" id="au2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="au3" id="au3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="au4" id="au4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="au5" id="au5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="au6" id="au6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td>6</td>
          <td>5.3.2</td>
          <td>Verify the credibility of results from tool use with reference to the accuracy and limitations, and the assumptions inherent in their use</td>
          <td align="center"> <input type="text" name="av1" id="av1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="av2" id="av2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="av3" id="av3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="av4" id="av4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="av5" id="av5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="av6" id="av6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td rowspan="2">PO 6: The engineer and society: Apply reasoning informed by the contextual knowledge to assess societal, health, safety, legal, and cultural issues and the consequent responsibilities relevant to the professional engineering practice.</td>
          <td>6.1</td>
          <td>Demonstrate an ability to describe engineering roles in a broader context, e.g. pertaining to the environment, health, safety, legal and public welfare</td>
          <td>1</td>
          <td>6.1.1</td>
          <td>Identify and describe various engineering roles; particularly as pertains to protection of the public and public interest at the global, regional and local level</td>
          <td align="center"> <input type="text" name="aw1" id="aw1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="aw2" id="aw2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="aw3" id="aw3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="aw4" id="aw4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="aw5" id="aw5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="aw6" id="aw6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td>6.2</td>
          <td>	Demonstrate an understanding of professional engineering regulations, legislation and standards</td>
          <td>2</td>
          <td>6.2.1</td>
          <td>Interpret legislation, regulations, codes, and standards relevant to your discipline and explain its contribution to the protection of the public</td>
          <td align="center"> <input type="text" name="ax1" id="ax1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ax2" id="ax2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ax3" id="ax3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ax4" id="ax4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ax5" id="ax5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ax6" id="ax6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td rowspan="4">PO 7: Environment and sustainability: Understand the impact of the professional engineering solutions in societal and environmental contexts, and demonstrate the knowledge of, and the need for sustainable development.</td>
          <td rowspan="2">7.1</td>
          <td rowspan="2">	Demonstrate an understanding of the impact of engineering and industrial practices on social, environmental and in economic contexts</td>
          <td>1</td>
          <td>7.1.1</td>
          <td>Identify risks/impacts in the life-cycle of an engineering product or activity</td>
          <td align="center"> <input type="text" name="ay1" id="ay1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ay2" id="ay2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ay3" id="ay3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ay4" id="ay4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ay5" id="ay5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ay6" id="ay6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>     
      </tr>

      <tr>
          <td>2</td>
          <td>7.1.2</td>
          <td>Understand the relationship between the technical, socio-economic and environmental dimensions of sustainability</td>
          <td align="center"> <input type="text" name="az1" id="az1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="az2" id="az2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="az3" id="az3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="az4" id="az4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="az5" id="az5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="az6" id="az6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td rowspan="2">7.2</td>
          <td rowspan="2">Demonstrate an ability to apply principles of sustainable design and development</td>
          <td>3</td>
          <td>7.2.1</td>
          <td>Describe management techniques for sustainable development</td>
          <td align="center"> <input type="text" name="ba1" id="ba1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ba2" id="ba2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ba3" id="ba3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ba4" id="ba4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ba5" id="ba5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ba6" id="ba6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td>4</td>
          <td>7.2.2</td>
          <td>	Apply principles of preventive engineering and sustainable development to an engineering activity or product relevant to the discipline</td>
          <td align="center"> <input type="text" name="bb1" id="bb1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bb2" id="bb2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bb3" id="bb3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bb4" id="bb4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bb5" id="bb5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bb6" id="bb6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td rowspan="3">	PO 8: Ethics: Apply ethical principles and commit to professional ethics and responsibilities and norms of the engineering practice.</td>
          <td>8.1</td>
          <td>Demonstrate an ability to recognize ethical dilemmas</td>
          <td>1</td>
          <td>8.1.1</td>
          <td>Identify situations of unethical professional conduct and propose ethical alternatives</td>
          <td align="center"> <input type="text" name="bc1" id="bc1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bc2" id="bc2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bc3" id="bc3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bc4" id="bc4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bc5" id="bc5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bc6" id="bc6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td rowspan="2">8.2</td>
          <td rowspan="2">Demonstrate an ability to apply the Code of Ethics</td>
          <td>2</td>
          <td>8.2.1</td>
          <td>Identify tenets of the ASME professional code of ethics</td>
          <td align="center"> <input type="text" name="bd1" id="bd1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bd2" id="bd2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bd3" id="bd3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bd4" id="bd4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bd5" id="bd5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bd6" id="bd6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td>3</td>
          <td>8.2.2</td>
          <td>Examine and apply moral & ethical principles to known case studies</td>
          <td align="center"> <input type="text" name="be1" id="be1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="be2" id="be2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="be3" id="be3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="be4" id="be4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="be5" id="be5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="be6" id="be6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td rowspan="7">PO 9: Individual and team work: Function effectively as an individual, and as a member or leader in diverse teams, and in multidisciplinary settings.</td>
          <td rowspan="2">9.1</td>
          <td rowspan="2">	Demonstrate an ability to form a team and define a role for each member</td>
          <td>1</td>
          <td>9.1.1</td>
          <td>Recognize a variety of working and learning preferences; appreciate the value of diversity on a team</td>
          <td align="center"> <input type="text" name="bf1" id="bf1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bf2" id="bf2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bf3" id="bf3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bf4" id="bf4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bf5" id="bf5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bf6" id="bf6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>      
      </tr>

      <tr>
          <td>2</td>
          <td>9.1.2</td>
          <td>Implement the norms of practice (e.g. rules, roles, char ters, agendas, etc.) of effective team work, to accomplish a goal.</td>
          <td align="center"> <input type="text" name="bg1" id="bg1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bg2" id="bg2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bg3" id="bg3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bg4" id="bg4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bg5" id="bg5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bg6" id="bg6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td rowspan="4">9.2</td>
          <td rowspan="4">Demonstrate effective individual and team operations-- communication, problem- solving, conflict resolution and leadership skills</td>
          <td>3</td>
          <td>9.2.1</td>
          <td>Demonstrate effective communication, problem-solving, conflict resolution and leadership skills</td>
          <td align="center"> <input type="text" name="bh1" id="bh1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bh2" id="bh2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bh3" id="bh3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bh4" id="bh4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bh5" id="bh5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bh6" id="bh6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td>4</td>
          <td>9.2.2</td>
          <td>Treat other team members respectfully</td>
          <td align="center"> <input type="text" name="bi1" id="bi1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bi2" id="bi2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bi3" id="bi3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bi4" id="bi4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bi5" id="bi5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bi6" id="bi6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

       <tr>
          <td>5</td>
          <td>9.2.3</td>
          <td>	Listen to other members</td>
          <td align="center"> <input type="text" name="bj1" id="bj1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bj2" id="bj2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bj3" id="bj3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bj4" id="bj4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bj5" id="bj5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bj6" id="bj6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

       <tr>
          <td>6</td>
          <td>9.2.4</td>
          <td>	Maintain composure in difficult situations</td>
          <td align="center"> <input type="text" name="bk1" id="bk1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bk2" id="bk2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bk3" id="bk3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bk4" id="bk4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bk5" id="bk5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bk6" id="bk6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

       <tr>
          <td>9.3</td>
          <td>	Demonstrate success in a team-based project</td>
          <td>7</td>
          <td>9.3.1</td>
          <td>Present results as a team, with smooth integration of contributions from all individual efforts</td>
          <td align="center"> <input type="text" name="bl1" id="bl1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bl2" id="bl2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bl3" id="bl3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bl4" id="bl4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bl5" id="bl5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bl6" id="bl6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td rowspan="7">PO 10: Communication: Communicate effectively on complex engineering activities with the engineering community and with the society at large, such as being able to comprehend and write effective repor ts and design documentation, make effective presentations, and give and receive clear instructions</td>
          <td rowspan="3">10.1</td>
          <td rowspan="3">	Demonstrate an ability to comprehend technical literature and document project work</td>
          <td>1</td>
          <td>10.1.1</td>
          <td>Read, understand and interpret technical and non-technical information</td>
          <td align="center"> <input type="text" name="bm1" id="bm1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bm2" id="bm2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bm3" id="bm3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bm4" id="bm4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bm5" id="bm5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bm6" id="bm6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                
      </tr>

      <tr>
          <td>2</td>
          <td>10.1.2</td>
          <td>Produce clear, well-constructed, and well-suppor ted written engineering documents</td>
          <td align="center"> <input type="text" name="bn1" id="bn1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bn2" id="bn2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bn3" id="bn3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bn4" id="bn4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bn5" id="bn5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bn6" id="bn6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

<tr>
          <td>3</td>
          <td>10.1.3</td>
          <td>Create flow in a document or presentation - a logical progression of ideas so that the main point is clear</td>
          <td align="center"> <input type="text" name="bo1" id="bo1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bo2" id="bo2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bo3" id="bo3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bo4" id="bo4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bo5" id="bo5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bo6" id="bo6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td rowspan="2">10.2</td>
          <td rowspan="2">	Demonstrate competence in listening, speaking, and presentation</td>
          <td>4</td>
          <td>10.2.1</td>
          <td>	Listen to and comprehend information, instructions, and viewpoints of others</td>
          <td align="center"> <input type="text" name="bp1" id="bp1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bp2" id="bp2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bp3" id="bp3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bp4" id="bp4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bp5" id="bp5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bp6" id="bp6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td>5</td>
          <td>10.2.2</td>
          <td>	Deliver effective oral presentations to technical and non-technical audiences</td>
          <td align="center"> <input type="text" name="bq1" id="bq1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bq2" id="bq2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bq3" id="bq3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bq4" id="bq4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bq5" id="bq5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bq6" id="bq6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td rowspan="2">10.3</td>
          <td rowspan="2">	Demonstrate the ability to integrate different modes of communication</td>
          <td>6</td>
          <td>10.3.1</td>
          <td>	Create engineering-standard figures, repor ts and drawings to complement writing and presentations</td>
          <td align="center"> <input type="text" name="br1" id="br1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="br2" id="br2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="br3" id="br3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="br4" id="br4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="br5" id="br5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="br6" id="br6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>                
      </tr>

      <tr>
          <td>7</td>
          <td>10.3.2</td>
          <td>	Use a variety of media effectively to convey a message in a document or a presentation</td>
          <td align="center"> <input type="text" name="bs1" id="bs1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bs2" id="bs2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bs3" id="bs3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bs4" id="bs4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bs5" id="bs5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bs6" id="bs6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td rowspan="5">PO 11: Project management and finance: Demonstrate knowledge and understanding of the engineering and management principles and apply these to one’s work, as a member and leader in a team, to manage projects and in multidisciplinary environments.</td>
          <td rowspan="2">11.1</td>
          <td rowspan="2">	Demonstrate an ability to evaluate the economic and financial performance of an engineering activity</td>
          <td>1</td>
          <td>11.1.1</td>
          <td>	Describe various economic and financial costs/benefits of an engineering activity</td>
          <td align="center"> <input type="text" name="bt1" id="bt1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bt2" id="bt2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bt3" id="bt3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bt4" id="bt4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bt5" id="bt5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bt6" id="bt6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>                
      </tr>

      <tr>
          <td>2</td>
          <td>11.1.2</td>
          <td>Analyze different forms of financial statements to evaluate the financial status of an engineering project</td>
          <td align="center"> <input type="text" name="bu1" id="bu1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bu2" id="bu2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bu3" id="bu3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bu4" id="bu4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bu5" id="bu5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bu6" id="bu6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td>11.2</td>
          <td>	Demonstrate an ability to compare and contrast the costs/benefits of alternate proposals for an engineering activity</td>
          <td>3</td>
          <td>11.2.1</td>
          <td>Analyze and select the most appropriate proposal based on economic and financial
considerations.</td>
          <td align="center"> <input type="text" name="bv1" id="bv1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bv2" id="bv2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bv3" id="bv3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bv4" id="bv4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bv5" id="bv5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bv6" id="bv6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>                
      </tr>

      <tr>
          <td rowspan="2">11.3</td>
          <td rowspan="2">Demonstrate an ability to plan/manage an engineering activity within time and budget constraints</td>
          <td>4</td>
          <td>11.3.1</td>
          <td>	Identify the tasks required to complete an engineering activity, and the resources required to complete the tasks.</td>
          <td align="center"> <input type="text" name="bw1" id="bw1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bw2" id="bw2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bw3" id="bw3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bw4" id="bw4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bw5" id="bw5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bw6" id="bw6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td>5</td>
          <td>11.3.2</td>
          <td>Use project management tools to schedule an engineering project, so it is completed on time and on budget</td>
          <td align="center"> <input type="text" name="bx1" id="bx1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bx2" id="bx2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bx3" id="bx3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bx4" id="bx4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bx5" id="bx5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bx6" id="bx6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td rowspan="6">PO 12: Life-long learning: Recognise the need for, and have the preparation and ability to engage in independent and life-long learning in the broadest context of technological change.</td>
          <td rowspan="2">12.1</td>
          <td rowspan="2">Demonstrate an ability to identify gaps in knowledge and a strategy to close these gaps</td>
          <td>1</td>
          <td>12.1.1</td>
          <td>Describe the rationale for the requirement for continuing professional development</td>
          <td align="center"> <input type="text" name="by1" id="by1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="by2" id="by2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="by3" id="by3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="by4" id="by4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="by5" id="by5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="by6" id="by6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                
      </tr>

      <tr>
          <td>2</td>
          <td>12.1.2</td>
          <td>Identify deficiencies or gaps in knowledge and demonstrate an ability to source information to close this gap</td>
          <td align="center"> <input type="text" name="bz1" id="bz1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bz2" id="bz2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bz3" id="bz3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bz4" id="bz4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bz5" id="bz5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="bz6" id="bz6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td rowspan="2">12.2</td>
          <td rowspan="2">Demonstrate an ability to identify changing trends in engineering knowledge and practice</td>
          <td>3</td>
          <td>12.2.1</td>
          <td>	Identify historic points of technological advance in engineering that required practitioners to seek education in order to stay current</td>
          <td align="center"> <input type="text" name="ca1" id="ca1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ca2" id="ca2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ca3" id="ca3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ca4" id="ca4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ca5" id="ca5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ca6" id="ca6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                
      </tr>

      <tr>
          <td>4</td>
          <td>12.2.2</td>
          <td>Recognize the need and be able to clearly explain why it is vitally impor tant to keep current regarding new developments in your field</td>
          <td align="center"> <input type="text" name="cb1" id="cb1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cb2" id="cb2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cb3" id="cb3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cb4" id="cb4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cb5" id="cb5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cb6" id="cb6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td rowspan="2">12.3</td>
          <td rowspan="2">Demonstrate an ability to identify and access sources for new information</td>
          <td>5</td>
          <td>12.3.1</td>
          <td>	Source and comprehend technical literature and other credible sources of information</td>
          <td align="center"> <input type="text" name="cc1" id="cc1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cc2" id="cc2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cc3" id="cc3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cc4" id="cc4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cc5" id="cc5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cc6" id="cc6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>     
      </tr>

      <tr>
          <td>6</td>
          <td>12.3.3</td>
          <td>	Analyze sourced technical and popular information for feasibility, viability, sustainability, etc.</td>
          <td align="center"> <input type="text" name="cd1" id="cd1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cd2" id="cd2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cd3" id="cd3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cd4" id="cd4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cd5" id="cd5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cd6" id="cd6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td rowspan="11">PSO-1:System Inception and Elaboration: Conceptualize the software and/or hardware systems, system components and process/procedures through requirement analysis, modelling/design of the system using various architectural/design patterns, standard notations, procedures and algorithms.</td>
          <td rowspan="11">13.1</td>
          <td rowspan="11">	Demonstrate an ability to formulate a solution plan and methodology for an engineering problem</td>
          <td></td>
          <td>13.1</td>
          <td>Evaluate problem statements and identifies objectives</td>
          <td align="center"> <input type="text" name="ce1" id="ce1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ce2" id="ce2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ce3" id="ce3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ce4" id="ce4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ce5" id="ce5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ce6" id="ce6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td></td>
          <td>13.2</td>
          <td>Able to define a precise problem statement with objectives and scope.</td>
          <td align="center"> <input type="text" name="cf1" id="cf1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cf2" id="cf2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cf3" id="cf3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cf4" id="cf4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cf5" id="cf5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cf6" id="cf6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td></td>
          <td>13.3</td>
          <td>Identify functionalities and computing resources.</td>
          <td align="center"> <input type="text" name="cg1" id="cg1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cg2" id="cg2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cg3" id="cg3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cg4" id="cg4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cg5" id="cg5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cg6" id="cg6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td></td>
          <td>13.4</td>
          <td>Identify existing solution/methods to solve the problem, including forming justified approximations and assumptions</td>
          <td align="center"> <input type="text" name="ch1" id="ch1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ch2" id="ch2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ch3" id="ch3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ch4" id="ch4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ch5" id="ch5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ch6" id="ch6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td></td>
          <td>13.5</td>
          <td>Able to review state-of-the-art literature to synthesize system requirements</td>
          <td align="center"> <input type="text" name="ci1" id="ci1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ci2" id="ci2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ci3" id="ci3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ci4" id="ci4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ci5" id="ci5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ci6" id="ci6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td></td>
          <td>13.6</td>
          <td>Identify processes/modules/algorithms of a computer-based system and parameters to solve a problem</td>
          <td align="center"> <input type="text" name="cj1" id="cj1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cj2" id="cj2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cj3" id="cj3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cj4" id="cj4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cj5" id="cj5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cj6" id="cj6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td></td>
          <td>13.7</td>
          <td>Identify the limitations of the solution and sources/causes</td>
          <td align="center"> <input type="text" name="ck1" id="ck1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ck2" id="ck2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ck3" id="ck3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ck4" id="ck4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ck5" id="ck5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ck6" id="ck6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td></td>
          <td>13.8</td>
          <td>	Able to develop software requirement specifications (SRS).</td>
          <td align="center"> <input type="text" name="cl1" id="cl1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cl2" id="cl2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cl3" id="cl3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cl4" id="cl4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cl5" id="cl5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cl6" id="cl6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td></td>
          <td>13.9</td>
          <td>Able to produce a variety of potential design solutions suited to meet functional requirements.</td>
          <td align="center"> <input type="text" name="cm1" id="cm1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cm2" id="cm2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cm3" id="cm3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cm4" id="cm4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cm5" id="cm5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cm6" id="cm6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td></td>
          <td>13.10</td>
          <td>Identify suitable non-functional requirements for evaluation of alternate design solutions.</td>
          <td align="center"> <input type="text" name="cn1" id="cn1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cn2" id="cn2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cn3" id="cn3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cn4" id="cn4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cn5" id="cn5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cn6" id="cn6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td></td>
          <td>13.11</td>
          <td>Use project management tools to schedule an engineering project, so it is completed on time and on budget.</td>
          <td align="center"> <input type="text" name="co1" id="co1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="co2" id="co2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="co3" id="co3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="co4" id="co4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="co5" id="co5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="co6" id="co6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td rowspan="6">PSO-2: System Construction:Implement the systems, procedures and processes using the state of the art technologies, standards, tools and programming paradigms.</td>
          <td rowspan="6">14.1</td>
          <td rowspan="6">Demonstrate an ability to execute a solution process and analyze results</td>
          <td></td>
          <td>14.1</td>
          <td>	Able to implement and integrate the modules.</td>
          <td align="center"> <input type="text" name="cp1" id="cp1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cp2" id="cp2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cp3" id="cp3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cp4" id="cp4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cp5" id="cp5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cp6" id="cp6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td></td>
          <td>14.2</td>
          <td>	Able to choose appropriate procedure/algorithm, dataset and test cases.</td>
          <td align="center"> <input type="text" name="cq1" id="cq1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cq2" id="cq2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cq3" id="cq3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cq4" id="cq4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cq5" id="cq5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cq6" id="cq6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td></td>
          <td>14.3</td>
          <td>	Able to choose appropriate hardware/software tools to conduct the experiment.</td>
          <td align="center"> <input type="text" name="cr1" id="cr1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cr2" id="cr2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cr3" id="cr3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cr4" id="cr4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cr5" id="cr5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cr6" id="cr6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td></td>
          <td>14.4</td>
          <td>	Identify modern engineering tools, techniques and resources for engineering
activities.</td>
          <td align="center"> <input type="text" name="cs1" id="cs1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cs2" id="cs2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cs3" id="cs3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cs4" id="cs4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cs5" id="cs5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cs6" id="cs6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td></td>
          <td>14.5</td>
          <td>Demonstrate proficiency in using discipline-specific tools</td>
          <td align="center"> <input type="text" name="ct1" id="ct1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ct2" id="ct2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ct3" id="ct3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ct4" id="ct4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ct5" id="ct5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="ct6" id="ct6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td></td>
          <td>14.6</td>
          <td>Implement the norms of practice (e.g. rules, roles, charters, agendas, etc.) of effective team work, to accomplish a goal.</td>
          <td align="center"> <input type="text" name="cu1" id="cu1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cu2" id="cu2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cu3" id="cu3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cu4" id="cu4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cu5" id="cu5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cu6" id="cu6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

       <tr>
          <td rowspan="2">PSO-3:System Testing and Deployment:Verify and validate the systems, procedures and processes using various testing and verification techniques and tools.</td>
          <td rowspan="2">15.1</td>
          <td rowspan="2">Demonstrate an ability to conduct investigations of technical issues consistent with their level of knowledge and understanding</td>
          <td></td>
          <td>15.1</td>
          <td>Discuss limitations and validate tools, techniques and resources</td>
          <td align="center"> <input type="text" name="cv1" id="cv1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cv2" id="cv2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cv3" id="cv3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cv4" id="cv4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cv5" id="cv5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cv6" id="cv6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td></td>
          <td>15.2</td>
          <td>Verify the credibility of results from tool use with reference to the accuracy and limitations, and the assumptions inherent in their use.</td>
          <td align="center"> <input type="text" name="cw1" id="cw1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cw2" id="cw2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cw3" id="cw3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cw4" id="cw4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cw5" id="cw5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cw6" id="cw6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td rowspan="3">PSO-4:Quality and Maintenance:Manage the quality through various product development strategies under revision, transition and operation through maintainability, flexibility, testability, portability, reusability, interoperability, correctness, reliability, efficiency, integrity and usability to adapt the system to the changing structure and behaviour of the systems/environments.</td>
          <td rowspan="3">16.1</td>
          <td rowspan="3">Demonstrate an ability to advance an engineering design to defined end state</td>
          <td></td>
          <td>16.1</td>
          <td>Analyze sourced technical and popular information for feasibility, viability, sustainability, etc.</td>
          <td align="center"> <input type="text" name="cx1" id="cx1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cx2" id="cx2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cx3" id="cx3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cx4" id="cx4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cx5" id="cx5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cx6" id="cx6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td></td>
          <td>16.2</td>
          <td>Produce clear, well-constructed, and well-supported written engineering documents</td>
          <td align="center"> <input type="text" name="cy1" id="cy1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cy2" id="cy2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cy3" id="cy3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cy4" id="cy4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cy5" id="cy5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cy6" id="cy6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>

      <tr>
          <td></td>
          <td>16.3</td>
          <td>Recognize the need and be able to clearly explain why it is vitally important to keep current regarding new developments in your field</td>
          <td align="center"> <input type="text" name="cz1" id="cz1" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cz2" id="cz2" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cz3" id="cz3" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cz4" id="cz4" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cz5" id="cz5" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
                <td align="center"> <input type="text" name="cz6" id="cz6" value="" style="margin: 0px; width: 70%; height: 70%; border: 0px"></input> </td>
      </tr>
      <tr>
          <td>
            <input type="submit" name="submit" id="submit" value="Enter Details">
          </td>
        </tr>
    </table>
    <br>
    </form>

<?php
$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms.sql");
    if(isset($_POST['submit'])){
      //  if(!empty($_POST['course_no']) && !empty($_POST['y1']) && !empty($_POST['cc1']) && !empty($_POST['c1']) && !empty($_POST['p1']) && !empty($_POST['cn1']) && !empty($_POST['d1']) && !empty($_POST['de1']) && !empty($_POST['sem']) && !empty($_POST['f1'])){
            
          // $query = "INSERT INTO `mp_7_assessment_3` (`V1`, `V2`, `V3`, `V4`, `V5`, `V6`, `W1`, `W2`, `W3`, `W4`, `W5`, `W6`, `X1`, `X2`, `X3`, `X4`, `X5`, `X6`, `Y1`, `Y2`, `Y3`, `Y4`, `Y5`, `Y6`, `Z1`, `Z2`, `Z3`, `Z4`, `Z5`, `Z6`, `O1`, `O2`, `O3`, `O4`, `O5`, `O6`, `I1`, `I2`, `I3`, `I4`, `I5`, `I6`) VALUES ('$_POST[V1]','$_POST[V2]', '$_POST[V3]','$_POST[V4]','$_POST[V5]','$_POST[V6]', '$_POST[W1]', '$_POST[W2]', '$_POST[W3]', '$_POST[W4]', '$_POST[W5]', '$_POST[W6]', '$_POST[X1]', '$_POST[X2]', '$_POST[X3]', '$_POST[X4]', '$_POST[X5]', '$_POST[X6]', '$_POST[Y1]', '$_POST[Y2]', '$_POST[Y3]', '$_POST[Y4]', '$_POST[Y5]', '$_POST[Y6]', '$_POST[Z1]', '$_POST[Z2]', '$_POST[Z3]', '$_POST[Z4]', '$_POST[Z5]', '$_POST[Z6]', '$_POST[O1]', '$_POST[O2]', '$_POST[O3]', '$_POST[O4]', '$_POST[O5]', '$_POST[O6]', '$_POST[I1]', '$_POST[I2]', '$_POST[I3]', '$_POST[I4]', '$_POST[I5]', '$_POST[I6]')"; 
          $query = "INSERT INTO `mp_5_po_competency_pi_co_mapping` (`a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `b1`, `b2`, `b3`, `b4`, `b5`, `b6`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `d1`, `d2`, `d3`, `d4`, `d5`, `d6`, `e1`, `e2`, `e3`, `e4`, `e5`, `e6`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `g1`, `g2`, `g3`, `g4`, `g5`, `g6`, `h1`, `h2`, `h3`, `h4`, `h5`, `h6`, `i1`, `i2`, `i3`, `i4`, `i5`, `i6`, `j1`, `j2`, `j3`, `j4`, `j5`, `j6`, `k1`, `k2`, `k3`, `k4`, `k5`, `k6`, `l1`, `l2`, `l3`, `l4`, `l5`, `l6`, `m1`, `m2`, `m3`, `m4`, `m5`, `m6`, `n1`, `n2`, `n3`, `n4`, `n5`, `n6`, `o1`, `o2`, `o3`, `o4`, `o5`, `o6`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `t1`, `t2`, `t3`, `t4`, `t5`, `t6`, `u1`, `u2`, `u3`, `u4`, `u5`, `u6`, `v1`, `v2`, `v3`, `v4`, `v5`, `v6`, `w1`, `w2`, `w3`, `w4`, `w5`, `w6`, `x1`, `x2`, `x3`, `x4`, `x5`, `x6`, `y1`, `y2`, `y3`, `y4`, `y5`, `y6`, `z1`, `z2`, `z3`, `z4`, `z5`, `z6`, `ab1`, `ab2`, `ab3`, `ab4`, `ab5`, `ab6`, `ac1`, `ac2`, `ac3`, `ac4`, `ac5`, `ac6`, `ad1`, `ad2`, `ad3`, `ad4`, `ad5`, `ad6`, `ae1`, `ae2`, `ae3`, `ae4`, `ae5`, `ae6`, `af1`, `af2`, `af3`, `af4`, `af5`, `af6`, `ag1`, `ag2`, `ag3`, `ag4`, `ag5`, `ag6`, `ah1`, `ah2`, `ah3`, `ah4`, `ah5`, `ah6`, `ai1`, `ai2`, `ai3`, `ai4`, `ai5`, `ai6`, `aj1`, `aj2`, `aj3`, `aj4`, `aj5`, `aj6`, `ak1`, `ak2`, `ak3`, `ak4`, `ak5`, `ak6`, `al1`, `al2`, `al3`, `al4`, `al5`, `al6`, `am1`, `am2`, `am3`, `am4`, `am5`, `am6`, `an1`, `an2`, `an3`, `an4`, `an5`, `an6`, `ao1`, `ao2`, `ao3`, `ao4`, `ao5`, `ao6`, `ap1`, `ap2`, `ap3`, `ap4`, `ap5`, `ap6`, `aq1`, `aq2`, `aq3`, `aq4`, `aq5`, `aq6`, `ar1`, `ar2`, `ar3`, `ar4`, `ar5`, `ar6`, `as1`, `as2`, `as3`, `as4`, `as5`, `as6`, `at1`, `at2`, `at3`, `at4`, `at5`, `at6`, `au1`, `au2`, `au3`, `au4`, `au5`, `au6`, `av1`, `av2`, `av3`, `av4`, `av5`, `av6`, `aw1`, `aw2`, `aw3`, `aw4`, `aw5`, `aw6`, `ax1`, `ax2`, `ax3`, `ax4`, `ax5`, `ax6`, `ay1`, `ay2`, `ay3`, `ay4`, `ay5`, `ay6`, `az1`, `az2`, `az3`, `az4`, `az5`, `az6`, `ba1`, `ba2`, `ba3`, `ba4`, `ba5`, `ba6`, `bb1`, `bb2`, `bb3`, `bb4`, `bb5`, `bb6`, `bc1`, `bc2`, `bc3`, `bc4`, `bc5`, `bc6`, `bd1`, `bd2`, `bd3`, `bd4`, `bd5`, `bd6`, `be1`, `be2`, `be3`, `be4`, `be5`, `be6`, `bf1`, `bf2`, `bf3`, `bf4`, `bf5`, `bf6`, `bg1`, `bg2`, `bg3`, `bg4`, `bg5`, `bg6`, `bh1`, `bh2`, `bh3`, `bh4`, `bh5`, `bh6`, `bi1`, `bi2`, `bi3`, `bi4`, `bi5`, `bi6`, `bj1`, `bj2`, `bj3`, `bj4`, `bj5`, `bj6`, `bk1`, `bk2`, `bk3`, `bk4`, `bk5`, `bk6`, `bl1`, `bl2`, `bl3`, `bl4`, `bl5`, `bl6`, `bm1`, `bm2`, `bm3`, `bm4`, `bm5`, `bm6`, `bn1`, `bn2`, `bn3`, `bn4`, `bn5`, `bn6`, `bo1`, `bo2`, `bo3`, `bo4`, `bo5`, `bo6`, `bp1`, `bp2`, `bp3`, `bp4`, `bp5`, `bp6`, `bq1`, `bq2`, `bq3`, `bq4`, `bq5`, `bq6`, `br1`, `br2`, `br3`, `br4`, `br5`, `br6`, `bs1`, `bs2`, `bs3`, `bs4`, `bs5`, `bs6`, `bt1`, `bt2`, `bt3`, `bt4`, `bt5`, `bt6`, `bu1`, `bu2`, `bu3`, `bu4`, `bu5`, `bu6`, `bv1`, `bv2`, `bv3`, `bv4`, `bv5`, `bv6`, `bw1`, `bw2`, `bw3`, `bw4`, `bw5`, `bw6`, `bx1`, `bx2`, `bx3`, `bx4`, `bx5`, `bx6`, `by1`, `by2`, `by3`, `by4`, `by5`, `by6`, `bz1`, `bz2`, `bz3`, `bz4`, `bz5`, `bz6`, `ca1`, `ca2`, `ca3`, `ca4`, `ca5`, `ca6`, `cb1`, `cb2`, `cb3`, `cb4`, `cb5`, `cb6`, `cc1`, `cc2`, `cc3`, `cc4`, `cc5`, `cc6`, `cd1`, `cd2`, `cd3`, `cd4`, `cd5`, `cd6`, `ce1`, `ce2`, `ce3`, `ce4`, `ce5`, `ce6`, `cf1`, `cf2`, `cf3`, `cf4`, `cf5`, `cf6`, `cg1`, `cg2`, `cg3`, `cg4`, `cg5`, `cg6`, `ch1`, `ch2`, `ch3`, `ch4`, `ch5`, `ch6`, `ci1`, `ci2`, `ci3`, `ci4`, `ci5`, `ci6`, `cj1`, `cj2`, `cj3`, `cj4`, `cj5`, `cj6`, `ck1`, `ck2`, `ck3`, `ck4`, `ck5`, `ck6`, `cl1`, `cl2`, `cl3`, `cl4`, `cl5`, `cl6`, `cm1`, `cm2`, `cm3`, `cm4`, `cm5`, `cm6`, `cn1`, `cn2`, `cn3`, `cn4`, `cn5`, `cn6`, `co1`, `co2`, `co3`, `co4`, `co5`, `co6`, `cp1`, `cp2`, `cp3`, `cp4`, `cp5`, `cp6`, `cq1`, `cq2`, `cq3`, `cq4`, `cq5`, `cq6`, `cr1`, `cr2`, `cr3`, `cr4`, `cr5`, `cr6`, `cs1`, `cs2`, `cs3`, `cs4`, `cs5`, `cs6`, `ct1`, `ct2`, `ct3`, `ct4`, `ct5`, `ct6`, `cu1`, `cu2`, `cu3`, `cu4`, `cu5`, `cu6`, `cv1`, `cv2`, `cv3`, `cv4`, `cv5`, `cv6`, `cw1`, `cw2`, `cw3`, `cw4`, `cw5`, `cw6`, `cx1`, `cx2`, `cx3`, `cx4`, `cx5`, `cx6`, `cy1`, `cy2`, `cy3`, `cy4`, `cy5`, `cy6`, `cz1`, `cz2`, `cz3`, `cz4`, `cz5`, `cz6`) VALUES ('$_POST[a1]', '$_POST[a2]','$_POST[a3]', '$_POST[a4]','$_POST[a5]','$_POST[a6]', '$_POST[b1]', '$_POST[b2]','$_POST[b3]', '$_POST[b4]','$_POST[b5]','$_POST[b6]' ,'$_POST[c1]', '$_POST[c2]','$_POST[c3]', '$_POST[c4]','$_POST[c5]','$_POST[c6]' ,'$_POST[d1]', '$_POST[d2]','$_POST[d3]', '$_POST[d4]','$_POST[d5]','$_POST[d6]' ,'$_POST[e1]', '$_POST[e2]','$_POST[e3]', '$_POST[e4]','$_POST[e5]','$_POST[e6]' ,'$_POST[f1]', '$_POST[f2]','$_POST[f3]', '$_POST[f4]','$_POST[f5]','$_POST[f6]' ,'$_POST[g1]', '$_POST[g2]','$_POST[g3]', '$_POST[g4]','$_POST[g5]','$_POST[g6]' ,'$_POST[h1]', '$_POST[h2]','$_POST[h3]', '$_POST[h4]','$_POST[h5]','$_POST[h6]' ,'$_POST[i1]', '$_POST[i2]','$_POST[i3]', '$_POST[i4]','$_POST[i5]','$_POST[i6]' ,'$_POST[j1]', '$_POST[j2]','$_POST[j3]', '$_POST[j4]','$_POST[j5]','$_POST[j6]' ,'$_POST[k1]', '$_POST[k2]','$_POST[k3]', '$_POST[k4]','$_POST[k5]','$_POST[k6]' ,'$_POST[l1]', '$_POST[l2]','$_POST[l3]', '$_POST[l4]','$_POST[l5]','$_POST[l6]' ,'$_POST[m1]', '$_POST[m2]','$_POST[m3]', '$_POST[m4]','$_POST[m5]','$_POST[m6]' ,'$_POST[n1]', '$_POST[n2]','$_POST[n3]', '$_POST[n4]','$_POST[n5]','$_POST[n6]' ,'$_POST[o1]', '$_POST[o2]','$_POST[o3]', '$_POST[o4]','$_POST[o5]','$_POST[o6]' ,'$_POST[p1]', '$_POST[p2]','$_POST[p3]', '$_POST[p4]','$_POST[p5]','$_POST[p6]' ,'$_POST[q1]', '$_POST[q2]','$_POST[q3]', '$_POST[q4]','$_POST[q5]','$_POST[q6]' ,'$_POST[r1]', '$_POST[r2]','$_POST[r3]', '$_POST[r4]','$_POST[r5]','$_POST[r6]' ,'$_POST[s1]', '$_POST[s2]','$_POST[s3]', '$_POST[s4]','$_POST[s5]','$_POST[s6]' ,'$_POST[t1]', '$_POST[t2]','$_POST[t3]', '$_POST[t4]','$_POST[t5]','$_POST[t6]' ,'$_POST[u1]', '$_POST[u2]','$_POST[u3]', '$_POST[u4]','$_POST[u5]','$_POST[u6]' ,'$_POST[v1]', '$_POST[v2]','$_POST[v3]', '$_POST[v4]','$_POST[v5]','$_POST[v6]', '$_POST[w1]', '$_POST[w2]','$_POST[w3]', '$_POST[w4]','$_POST[w5]','$_POST[w6]' ,'$_POST[x1]', '$_POST[x2]','$_POST[x3]', '$_POST[x4]','$_POST[x5]','$_POST[x6]','$_POST[y1]', '$_POST[y2]','$_POST[y3]', '$_POST[y4]','$_POST[y5]','$_POST[y6]','$_POST[z1]', '$_POST[z2]','$_POST[z3]', '$_POST[z4]','$_POST[z5]','$_POST[z6]','$_POST[ab1]', '$_POST[ab2]','$_POST[ab3]', '$_POST[ab4]','$_POST[ab5]','$_POST[ab6]','$_POST[ac1]', '$_POST[ac2]','$_POST[ac3]', '$_POST[ac4]','$_POST[ac5]','$_POST[ac6]' ,'$_POST[ad1]', '$_POST[ad2]','$_POST[ad3]', '$_POST[ad4]','$_POST[ad5]','$_POST[ad6]','$_POST[ae1]', '$_POST[ae2]','$_POST[ae3]', '$_POST[ae4]','$_POST[ae5]','$_POST[ae6]' ,'$_POST[af1]', '$_POST[af2]','$_POST[af3]', '$_POST[af4]','$_POST[af5]','$_POST[af6]','$_POST[ag1]', '$_POST[ag2]','$_POST[ag3]', '$_POST[ag4]','$_POST[ag5]','$_POST[ag6]' ,'$_POST[ah1]', '$_POST[ah2]','$_POST[ah3]', '$_POST[ah4]','$_POST[ah5]','$_POST[ah6]','$_POST[ai1]', '$_POST[ai2]','$_POST[ai3]', '$_POST[ai4]','$_POST[ai5]','$_POST[ai6]','$_POST[aj1]', '$_POST[aj2]','$_POST[aj3]', '$_POST[aj4]','$_POST[aj5]','$_POST[aj6]','$_POST[ak1]', '$_POST[ak2]','$_POST[ak3]', '$_POST[ak4]','$_POST[ak5]','$_POST[ak6]' ,'$_POST[al1]', '$_POST[al2]','$_POST[al3]', '$_POST[al4]','$_POST[al5]','$_POST[al6]','$_POST[am1]', '$_POST[am2]','$_POST[am3]', '$_POST[am4]','$_POST[am5]','$_POST[am6]' ,'$_POST[an1]', '$_POST[an2]','$_POST[an3]', '$_POST[an4]','$_POST[an5]','$_POST[an6]','$_POST[ao1]', '$_POST[ao2]','$_POST[ao3]', '$_POST[ao4]','$_POST[ao5]','$_POST[ao6]','$_POST[ap1]', '$_POST[ap2]','$_POST[ap3]', '$_POST[ap4]','$_POST[ap5]','$_POST[ap6]','$_POST[aq1]', '$_POST[aq2]','$_POST[aq3]', '$_POST[aq4]','$_POST[aq5]','$_POST[aq6]','$_POST[ar1]', '$_POST[ar2]','$_POST[ar3]', '$_POST[ar4]','$_POST[ar5]','$_POST[ar6]','$_POST[as1]', '$_POST[as2]','$_POST[as3]', '$_POST[as4]','$_POST[as5]','$_POST[as6]','$_POST[at1]', '$_POST[at2]','$_POST[at3]', '$_POST[at4]','$_POST[at5]','$_POST[at6]','$_POST[au1]', '$_POST[au2]','$_POST[au3]', '$_POST[au4]','$_POST[au5]','$_POST[au6]','$_POST[av1]', '$_POST[av2]','$_POST[av3]', '$_POST[av4]','$_POST[av5]','$_POST[av6]','$_POST[aw1]', '$_POST[aw2]','$_POST[aw3]', '$_POST[aw4]','$_POST[aw5]','$_POST[aw6]','$_POST[ax1]', '$_POST[ax2]','$_POST[ax3]', '$_POST[ax4]','$_POST[ax5]','$_POST[ax6]','$_POST[ay1]', '$_POST[ay2]','$_POST[ay3]', '$_POST[ay4]','$_POST[ay5]','$_POST[ay6]','$_POST[az1]', '$_POST[az2]','$_POST[az3]', '$_POST[az4]','$_POST[az5]','$_POST[az6]','$_POST[ba1]', '$_POST[ba2]','$_POST[ba3]', '$_POST[ba4]','$_POST[ba5]','$_POST[ba6]','$_POST[bb1]', '$_POST[bb2]','$_POST[bb3]', '$_POST[bb4]','$_POST[bb5]','$_POST[bb6]','$_POST[bc1]', '$_POST[bc2]','$_POST[bc3]', '$_POST[bc4]','$_POST[bc5]','$_POST[bc6]','$_POST[bd1]', '$_POST[bd2]','$_POST[ba3]', '$_POST[bd4]','$_POST[bd5]','$_POST[bd6]','$_POST[be1]', '$_POST[be2]','$_POST[be3]', '$_POST[be4]','$_POST[be5]','$_POST[be6]','$_POST[bf1]', '$_POST[bf2]','$_POST[bf3]', '$_POST[bf4]','$_POST[bf5]','$_POST[bf6]','$_POST[bg1]', '$_POST[bg2]','$_POST[bg3]', '$_POST[bg4]','$_POST[bg5]','$_POST[bg6]','$_POST[bh1]', '$_POST[bh2]','$_POST[bh3]', '$_POST[bh4]','$_POST[bh5]','$_POST[bh6]','$_POST[bi1]', '$_POST[bi2]','$_POST[bi3]', '$_POST[bi4]','$_POST[bi5]','$_POST[bi6]','$_POST[bj1]', '$_POST[bj2]','$_POST[bj3]', '$_POST[bj4]','$_POST[bj5]','$_POST[bj6]','$_POST[bk1]', '$_POST[bk2]','$_POST[bk3]', '$_POST[bk4]','$_POST[bk5]','$_POST[bk6]','$_POST[bl1]', '$_POST[bl2]','$_POST[bl3]', '$_POST[bl4]','$_POST[bl5]','$_POST[bl6]','$_POST[bm1]', '$_POST[bm2]','$_POST[bm3]', '$_POST[bm4]','$_POST[bm5]','$_POST[bm6]','$_POST[bn1]', '$_POST[bn2]','$_POST[bn3]', '$_POST[bn4]','$_POST[bn5]','$_POST[bn6]','$_POST[bo1]', '$_POST[bo2]','$_POST[bo3]', '$_POST[bo4]','$_POST[bo5]','$_POST[bo6]','$_POST[bp1]', '$_POST[bp2]','$_POST[bp3]', '$_POST[bp4]','$_POST[bp5]','$_POST[bp6]','$_POST[bq1]', '$_POST[bq2]','$_POST[bq3]', '$_POST[bq4]','$_POST[bq5]','$_POST[bq6]','$_POST[br1]', '$_POST[br2]','$_POST[br3]', '$_POST[br4]','$_POST[br5]','$_POST[br6]','$_POST[bs1]', '$_POST[bs2]','$_POST[bs3]', '$_POST[bs4]','$_POST[bs5]','$_POST[bs6]','$_POST[bt1]', '$_POST[bt2]','$_POST[bt3]', '$_POST[bt4]','$_POST[bt5]','$_POST[bt6]','$_POST[bu1]', '$_POST[bu2]','$_POST[bu3]', '$_POST[bu4]','$_POST[bu5]','$_POST[bu6]','$_POST[bv1]',  '$_POST[bv2]','$_POST[bv3]', '$_POST[bv4]','$_POST[bv5]','$_POST[bv6]','$_POST[bw1]', '$_POST[bw2]','$_POST[bw3]', '$_POST[bw4]','$_POST[bw5]','$_POST[bw6]','$_POST[bx1]', '$_POST[bx2]','$_POST[bx3]', '$_POST[bx4]','$_POST[bx5]','$_POST[bx6]','$_POST[by1]', '$_POST[by2]','$_POST[by3]', '$_POST[by4]','$_POST[by5]','$_POST[by6]','$_POST[bz1]', '$_POST[bz2]','$_POST[bz3]', '$_POST[bz4]','$_POST[bz5]','$_POST[bz6]','$_POST[ca1]', '$_POST[ca2]','$_POST[ca3]', '$_POST[ca4]','$_POST[ca5]','$_POST[ca6]','$_POST[cb1]', '$_POST[cb2]','$_POST[cb3]', '$_POST[cb4]','$_POST[cb5]','$_POST[cb6]','$_POST[cc1]', '$_POST[cc2]','$_POST[cc3]', '$_POST[cc4]','$_POST[cc5]','$_POST[cc6]','$_POST[cd1]', '$_POST[cd2]','$_POST[cd3]', '$_POST[cd4]','$_POST[cd5]','$_POST[cd6]','$_POST[ce1]', '$_POST[ce2]','$_POST[ce3]', '$_POST[ce4]','$_POST[ce5]','$_POST[ce6]','$_POST[cf1]', '$_POST[cf2]','$_POST[cf3]', '$_POST[cf4]','$_POST[cf5]','$_POST[cf6]','$_POST[cg1]', '$_POST[cg2]','$_POST[cg3]', '$_POST[cg4]','$_POST[cg5]','$_POST[cg6]','$_POST[ch1]', '$_POST[ch2]','$_POST[ch3]', '$_POST[ch4]','$_POST[ch5]','$_POST[ch6]','$_POST[ci1]', '$_POST[ci2]','$_POST[ci3]', '$_POST[ci4]','$_POST[ci5]','$_POST[ci6]','$_POST[cj1]', '$_POST[cj2]','$_POST[cj3]', '$_POST[cj4]','$_POST[cj5]','$_POST[cj6]','$_POST[ck1]', '$_POST[ck2]','$_POST[ck3]', '$_POST[ck4]','$_POST[ck5]','$_POST[ck6]','$_POST[cl1]', '$_POST[cl2]','$_POST[cl3]', '$_POST[cl4]','$_POST[cl5]','$_POST[cl6]','$_POST[cm1]', '$_POST[cm2]','$_POST[cm3]', '$_POST[cm4]','$_POST[cm5]','$_POST[cm6]','$_POST[cn1]', '$_POST[cn2]','$_POST[cn3]', '$_POST[cn4]','$_POST[cn5]','$_POST[cn6]','$_POST[co1]', '$_POST[co2]','$_POST[co3]', '$_POST[co4]','$_POST[co5]','$_POST[co6]','$_POST[cp1]', '$_POST[cp2]','$_POST[cp3]', '$_POST[cp4]','$_POST[cp5]','$_POST[cp6]','$_POST[cq1]', '$_POST[cq2]','$_POST[cq3]', '$_POST[cq4]','$_POST[cq5]','$_POST[cq6]','$_POST[cr1]', '$_POST[cr2]','$_POST[cr3]', '$_POST[cr4]','$_POST[cr5]','$_POST[cr6]','$_POST[cs1]', '$_POST[cs2]','$_POST[cs3]', '$_POST[cs4]','$_POST[cs5]','$_POST[cs6]','$_POST[ct1]', '$_POST[ct2]','$_POST[ct3]', '$_POST[ct4]','$_POST[ct5]','$_POST[ct6]','$_POST[cu1]', '$_POST[cu2]','$_POST[cu3]', '$_POST[cu4]','$_POST[cu5]','$_POST[cu6]','$_POST[cv1]', '$_POST[cv2]','$_POST[cv3]', '$_POST[cv4]','$_POST[cv5]','$_POST[cw6]','$_POST[cw1]', '$_POST[cw2]','$_POST[cw3]', '$_POST[cw4]','$_POST[cw5]','$_POST[cw6]','$_POST[cx1]', '$_POST[cx2]','$_POST[cx3]', '$_POST[cx4]','$_POST[cx5]','$_POST[cx6]','$_POST[cy1]', '$_POST[cy2]','$_POST[cy3]', '$_POST[cy4]','$_POST[cy5]','$_POST[cy6]','$_POST[cz1]', '$_POST[cz2]','$_POST[cz3]', '$_POST[cz4]','$_POST[cz5]','$_POST[cz6]')"; 

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
