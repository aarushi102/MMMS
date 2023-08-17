<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms.sql");
    if(isset($_POST['submit_1'])){
      //  if(!empty($_POST['course_no']) && !empty($_POST['y1']) && !empty($_POST['cc1']) && !empty($_POST['c1']) && !empty($_POST['p1']) && !empty($_POST['cn1']) && !empty($_POST['d1']) && !empty($_POST['de1']) && !empty($_POST['sem']) && !empty($_POST['f1'])){

            // $course_no = $_POST['course_no'];
             $a1 = $_POST['a1'];
             $a2 = $_POST['a2'];
             $a3 = $_POST['a3'];
             $a4 = $_POST['a4'];
             $a5 = $_POST['a5'];
             $a6 = $_POST['a6'];
             $a7 = $_POST['a7'];
             $a8 = $_POST['a8'];

             $b1 = $_POST['b1'];
             $b2 = $_POST['b2'];
             $b3 = $_POST['b3'];
             $b4 = $_POST['b4'];
             $b5 = $_POST['b5'];
             $b6 = $_POST['b6'];
             $b7 = $_POST['b7'];
             $b8 = $_POST['b8'];

             $c1 = $_POST['c1'];
             $c2 = $_POST['c2'];
             $c3 = $_POST['c3'];
             $c4 = $_POST['c4'];
             $c5 = $_POST['c5'];
             $c6 = $_POST['c6'];
             $c7 = $_POST['c7'];
             $c8 = $_POST['c8'];

             $d1 = $_POST['d1'];
             $d2 = $_POST['d2'];
             $d3 = $_POST['d3'];
             $d4 = $_POST['d4'];
             $d5 = $_POST['d5'];
             $d6 = $_POST['d6'];
             $d7 = $_POST['d7'];
             $d8 = $_POST['d8'];

             $e1 = $_POST['e1'];
             $e2 = $_POST['e2'];
             $e3 = $_POST['e3'];
             $e4 = $_POST['e4'];
             $e5 = $_POST['e5'];
             $e6 = $_POST['e6'];
             $e7 = $_POST['e7'];
             $e8 = $_POST['e8'];

             $f1 = $_POST['f1'];
             $f2 = $_POST['f2'];
             $f3 = $_POST['f3'];
             $f4 = $_POST['f4'];
             $f5 = $_POST['f5'];
             $f6 = $_POST['f6'];
             $f7 = $_POST['f7'];
             $f8 = $_POST['f8'];

             $g1 = $_POST['g1'];
             $g2 = $_POST['g2'];
             $g3 = $_POST['g3'];
             $g4 = $_POST['g4'];
             $g5 = $_POST['g5'];
             $g6 = $_POST['g6'];
             $g7 = $_POST['g7'];
             $g8 = $_POST['g8'];

             $h1 = $_POST['h1'];
             $h2 = $_POST['h2'];
             $h3 = $_POST['h3'];
             $h4 = $_POST['h4'];
             $h5 = $_POST['h5'];
             $h6 = $_POST['h6'];
             $h7 = $_POST['h7'];
             $h8 = $_POST['h8'];

             $i1 = $_POST['i1'];
             $i2 = $_POST['i2'];
             $i3 = $_POST['i3'];
             $i4 = $_POST['i4'];
             $i5 = $_POST['i5'];
             $i6 = $_POST['i6'];
             $i7 = $_POST['i7'];
             $i8 = $_POST['i8'];

             $j1 = $_POST['j1'];
             $j2 = $_POST['j2'];
             $j3 = $_POST['j3'];
             $j4 = $_POST['j4'];
             $j5 = $_POST['j5'];
             $j6 = $_POST['j6'];
             $j7 = $_POST['j7'];
             $j8 = $_POST['j8'];

             $k1 = $_POST['k1'];
             $k2 = $_POST['k2'];
             $k3 = $_POST['k3'];
             $k4 = $_POST['k4'];
             $k5 = $_POST['k5'];
             $k6 = $_POST['k6'];
             $k7 = $_POST['k7'];
             $k8 = $_POST['k8'];

             $l1 = $_POST['l1'];
             $l2 = $_POST['l2'];
             $l3 = $_POST['l3'];
             $l4 = $_POST['l4'];
             $l5 = $_POST['l5'];
             $l6 = $_POST['l6'];
             $l7 = $_POST['l7'];
             $l8 = $_POST['l8'];

             $m1 = $_POST['m1'];
             $m2 = $_POST['m2'];
             $m3 = $_POST['m3'];
             $m4 = $_POST['m4'];
             $m5 = $_POST['m5'];
             $m6 = $_POST['m6'];
             $m7 = $_POST['m7'];
             $m8 = $_POST['m8'];

             $n1 = $_POST['n1'];
             $n2 = $_POST['n2'];
             $n3 = $_POST['n3'];
             $n4 = $_POST['n4'];
             $n5 = $_POST['n5'];
             $n6 = $_POST['n6'];
             $n7 = $_POST['n7'];
             $n8 = $_POST['n8'];

             $o1 = $_POST['o1'];
             $o2 = $_POST['o2'];
             $o3 = $_POST['o3'];
             $o4 = $_POST['o4'];
             $o5 = $_POST['o5'];
             $o6 = $_POST['o6'];
             $o7 = $_POST['o7'];
             $o8 = $_POST['o8'];

             $p1 = $_POST['p1'];
             $p2 = $_POST['p2'];
             $p3 = $_POST['p3'];
             $p4 = $_POST['p4'];
             $p5 = $_POST['p5'];
             $p6 = $_POST['p6'];
             $p7 = $_POST['p7'];
             $p8 = $_POST['p8'];

             $q1 = $_POST['q1'];
             $q2 = $_POST['q2'];
             $q3 = $_POST['q3'];
             $q4 = $_POST['q4'];
             $q5 = $_POST['q5'];
             $q6 = $_POST['q6'];
             $q7 = $_POST['q7'];
             $q8 = $_POST['q8'];

             $r1 = $_POST['r1'];
             $r2 = $_POST['r2'];
             $r3 = $_POST['r3'];
             $r4 = $_POST['r4'];
             $r5 = $_POST['r5'];
             $r6 = $_POST['r6'];
             $r7 = $_POST['r7'];
             $r8 = $_POST['r8'];

             $s1 = $_POST['s1'];
             $s2 = $_POST['s2'];
             $s3 = $_POST['s3'];
             $s4 = $_POST['s4'];
             $s5 = $_POST['s5'];
             $s6 = $_POST['s6'];
             $s7 = $_POST['s7'];
             $s8 = $_POST['s8'];

             $t1 = $_POST['t1'];
             $t2 = $_POST['t2'];
             $t3 = $_POST['t3'];
             $t4 = $_POST['t4'];
             $t5 = $_POST['t5'];
             $t6 = $_POST['t6'];
             $t7 = $_POST['t7'];
             $t8 = $_POST['t8'];

             $u1 = $_POST['u1'];
             $u2 = $_POST['u2'];
             $u3 = $_POST['u3'];
             $u4 = $_POST['u4'];
             $u5 = $_POST['u5'];
             $u6 = $_POST['u6'];
             $u7 = $_POST['u7'];
             $u8 = $_POST['u8'];

             $v1 = $_POST['v1'];
             $v2 = $_POST['v2'];
             $v3 = $_POST['v3'];
             $v4 = $_POST['v4'];
             $v5 = $_POST['v5'];
             $v6 = $_POST['v6'];
             $v7 = $_POST['v7'];
             $v8 = $_POST['v8'];

             $w1 = $_POST['w1'];
             $w2 = $_POST['w2'];
             $w3 = $_POST['w3'];
             $w4 = $_POST['w4'];
             $w5 = $_POST['w5'];
             $w6 = $_POST['w6'];
             $w7 = $_POST['w7'];
             $w8 = $_POST['w8'];

             $x1 = $_POST['x1'];
             $x2 = $_POST['x2'];
             $x3 = $_POST['x3'];
             $x4 = $_POST['x4'];
             $x5 = $_POST['x5'];
             $x6 = $_POST['x6'];
             $x7 = $_POST['x7'];
             $x8 = $_POST['x8'];

             $y1 = $_POST['y1'];
             $y2 = $_POST['y2'];
             $y3 = $_POST['y3'];
             $y4 = $_POST['y4'];
             $y5 = $_POST['y5'];
             $y6 = $_POST['y6'];
             $y7 = $_POST['y7'];
             $y8 = $_POST['y8'];
            
            
            //$query = "INSERT INTO `mp_pmt_1` (`a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `b1`, `b2`, `b3`, `b4`, `b5`, `b6`, `b7`, `b8`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `d1`, `d2`, `d3`, `d4`, `d5`, `d6`, `d7`, `d8`, `e1`, `e2`, `e3`, `e4`, `e5`, `e6`, `e7`, `e8`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`, `g1`, `g2`, `g3`, `g4`, `g5`, `g6`, `g7`, `g8`, `h1`, `h2`, `h3`, `h4`, `h5`, `h6`, `h7`, `h8`, `i1`, `i2`, `i3`, `i4`, `i5`, `i6`, `i7`, `i8`, `j1`, `j2`, `j3`, `j4`, `j5`, `j6`, `j7`, `j8`, `k1`, `k2`, `k3`, `k4`, `k5`, `k6`, `k7`, `k8`, `l1`, `l2`, `l3`, `l4`, `l5`, `l6`, `l7`, `l8`, `m1`, `m2`, `m3`, `m4`, `m5`, `m6`, `m7`, `m8`, `n1`, `n2`, `n3`, `n4`, `n5`, `n6`, `n7`, `n8`, `o1`, `o2`, `o3`, `o4`, `o5`, `o6`, `o7`, `o8`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `r7`, `r8`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `t1`, `t2`, `t3`, `t4`, `t5`, `t6`, `t7`, `t8`, `u1`, `u2`, `u3`, `u4`, `u5`, `u6`, `u7`, `u8`, `v1`, `v2`, `v3`, `v4`, `v5`, `v6`, `v7`, `v8`, `w1`, `w2`, `w3`, `w4`, `w5`, `w6`, `w7`, `w8`, `x1`, `x2`, `x3`, `x4`, `x5`, `x6`, `x7`, `x8`, `y1`, `y2`, `y3`, `y4`, `y6`, `y7`, `y8`) VALUES ('$_POST[a1]', '$_POST[a2]', '$_POST[a3]', '$_POST[a4]', '$_POST[a5]', '$_POST[a6]', '$_POST[a7]', '$_POST[a8]', '$_POST[b1]', '$_POST[b2]', '$_POST[b3]', '$_POST[b4]', '$_POST[b5]', '$_POST[b6]', '$_POST[b7]', '$_POST[b8]', '$_POST[c1]', '$_POST[c2]', '$_POST[c3]', '$_POST[c4]', '$_POST[c5]', '$_POST[c6]', '$_POST[c7]', '$_POST[c8]', '$_POST[d1]', '$_POST[d2]', '$_POST[d3]', '$_POST[d4]', '$_POST[d5]', '$_POST[d6]', '$_POST[d7]', '$_POST[d8]', '$_POST[e1]', '$_POST[e2]', '$_POST[e3]', '$_POST[e4]', '$_POST[e5]', '$_POST[e6]', '$_POST[e7]', '$_POST[e8]', '$_POST[f1]', '$_POST[f2]', '$_POST[f3]', '$_POST[f4]', '$_POST[f5]', '$_POST[f6]', '$_POST[f7]', '$_POST[f8]', '$_POST[g1]', '$_POST[g2]', '$_POST[g3]', '$_POST[g4]', '$_POST[g5]', '$_POST[g6]', '$_POST[g7]', '$_POST[g8]', '$_POST[h1]', '$_POST[h2]', '$_POST[h3]', '$_POST[h4]', '$_POST[h5]', '$_POST[h6]', '$_POST[h7]', '$_POST[h8]', '$_POST[i1]', '$_POST[i2]', '$_POST[i3]', '$_POST[i4]', '$_POST[i5]', '$_POST[i6]', '$_POST[i7]', '$_POST[i8]', '$_POST[j1]', '$_POST[j2]', '$_POST[j3]', '$_POST[j4]', '$_POST[j5]', '$_POST[j6]', '$_POST[j7]', '$_POST[j8]', '$_POST[k1]', '$_POST[k2]', '$_POST[k3]', '$_POST[k4]', '$_POST[k5]', '$_POST[k6]', '$_POST[k7]', '$_POST[k8]', '$_POST[l1]', '$_POST[l2]', '$_POST[l3]', '$_POST[l4]', '$_POST[l5]', '$_POST[l6]', '$_POST[l7]', '$_POST[l8]', '$_POST[m1]', '$_POST[m2]', '$_POST[m3]', '$_POST[m4]', '$_POST[m5]', '$_POST[m6]', '$_POST[m7]', '$_POST[m8]', '$_POST[n1]', '$_POST[n2]', '$_POST[n3]', '$_POST[n4]', '$_POST[n5]', '$_POST[n6]', '$_POST[n7]', '$_POST[n8]', '$_POST[o1]', '$_POST[o2]', '$_POST[o3]', '$_POST[o4]', '$_POST[o5]', '$_POST[o6]', '$_POST[o7]', '$_POST[o8]', '$_POST[p1]', '$_POST[p2]', '$_POST[p3]', '$_POST[p4]', '$_POST[p5]', '$_POST[p6]', '$_POST[p7]', '$_POST[p8]', '$_POST[q1]', '$_POST[q2]', '$_POST[q3]', '$_POST[q4]', '$_POST[q5]', '$_POST[q6]', '$_POST[q7]', '$_POST[q8]', '$_POST[r1]', '$_POST[r2]', '$_POST[r3]', '$_POST[r4]', '$_POST[r5]', '$_POST[r6]', '$_POST[r7]', '$_POST[r8]', '$_POST[s1]', '$_POST[s2]', '$_POST[s3]', '$_POST[s4]', '$_POST[s5]', '$_POST[s6]', '$_POST[s7]', '$_POST[s8]', '$_POST[t1]', '$_POST[t2]', '$_POST[t3]', '$_POST[t4]', '$_POST[t5]', '$_POST[t6]', '$_POST[t7]', '$_POST[t8]', '$_POST[u1]', '$_POST[u2]', '$_POST[u3]', '$_POST[u4]', '$_POST[u5]', '$_POST[u6]', '$_POST[u7]', '$_POST[u8]', '$_POST[v1]', '$_POST[v2]', '$_POST[v3]', '$_POST[v4]', '$_POST[v5]', '$_POST[v6]', '$_POST[v7]', '$_POST[v8]', '$_POST[w1]', '$_POST[w2]', '$_POST[w3]', '$_POST[w4]', '$_POST[w5]', '$_POST[w6]', '$_POST[w7]', '$_POST[w8]', '$_POST[x1]', '$_POST[x2]', '$_POST[x3]', '$_POST[x4]', '$_POST[x5]', '$_POST[x6]', '$_POST[x7]', '$_POST[x8]', '$_POST[y1]', '$_POST[y2]', '$_POST[y3]', '$_POST[y4]', '$_POST[y5]', '$_POST[y6]', '$_POST[y7]', '$_POST[y8]')";
            //$query= "INSERT INTO `mp_pmt_1` (`a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`) VALUES ('$_POST[a1]', '$_POST[a2]', '$_POST[a3]', '$_POST[a4]', '$_POST[a5]', '$_POST[a6]', '$_POST[a7]', '$_POST[a8]')";
            $query= "INSERT INTO `mp_pmt_1`(`a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `b1`, `b2`, `b3`, `b4`, `b5`, `b6`, `b7`, `b8`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `d1`, `d2`, `d3`, `d4`, `d5`, `d6`, `d7`, `d8`, `e1`, `e2`, `e3`, `e4`, `e5`, `e6`, `e7`, `e8`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`, `g1`, `g2`, `g3`, `g4`, `g5`, `g6`, `g7`, `g8`, `h1`, `h2`, `h3`, `h4`, `h5`, `h6`, `h7`, `h8`, `i1`, `i2`, `i3`, `i4`, `i5`, `i6`, `i7`, `i8`, `j1`, `j2`, `j3`, `j4`, `j5`, `j6`, `j7`, `j8`, `k1`, `k2`, `k3`, `k4`, `k5`, `k6`, `k7`, `k8`, `l1`, `l2`, `l3`, `l4`, `l5`, `l6`, `l7`, `l8`, `m1`, `m2`, `m3`, `m4`, `m5`, `m6`, `m7`, `m8`, `n1`, `n2`, `n3`, `n4`, `n5`, `n6`, `n7`, `n8`, `o1`, `o2`, `o3`, `o4`, `o5`, `o6`, `o7`, `o8`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `r7`, `r8`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `t1`, `t2`, `t3`, `t4`, `t5`, `t6`, `t7`, `t8`, `u1`, `u2`, `u3`, `u4`, `u5`, `u6`, `u7`, `u8`, `v1`, `v2`, `v3`, `v4`, `v5`, `v6`, `v7`, `v8`, `w1`, `w2`, `w3`, `w4`, `w5`, `w6`, `w7`, `w8`, `x1`, `x2`, `x3`, `x4`, `x5`, `x6`, `x7`, `x8`, `y1`, `y2`, `y3`, `y4`, `y5`, `y6`, `y7`, `y8`) VALUES ('$_POST[a1]', '$_POST[a2]', '$_POST[a3]', '$_POST[a4]', '$_POST[a5]', '$_POST[a6]', '$_POST[a7]', '$_POST[a8]', '$_POST[b1]', '$_POST[b2]', '$_POST[b3]', '$_POST[b4]', '$_POST[b5]', '$_POST[b6]', '$_POST[b7]', '$_POST[b8]', '$_POST[c1]', '$_POST[c2]', '$_POST[c3]', '$_POST[c4]', '$_POST[c5]', '$_POST[c6]', '$_POST[c7]', '$_POST[c8]', '$_POST[d1]', '$_POST[d2]', '$_POST[d3]', '$_POST[d4]', '$_POST[d5]', '$_POST[d6]', '$_POST[d7]', '$_POST[d8]', '$_POST[e1]', '$_POST[e2]', '$_POST[e3]', '$_POST[e4]', '$_POST[e5]', '$_POST[e6]', '$_POST[e7]', '$_POST[e8]', '$_POST[f1]', '$_POST[f2]', '$_POST[f3]', '$_POST[f4]', '$_POST[f5]', '$_POST[f6]', '$_POST[f7]', '$_POST[f8]', '$_POST[g1]', '$_POST[g2]', '$_POST[g3]', '$_POST[g4]', '$_POST[g5]', '$_POST[g6]', '$_POST[g7]', '$_POST[g8]', '$_POST[h1]', '$_POST[h2]', '$_POST[h3]', '$_POST[h4]', '$_POST[h5]', '$_POST[h6]', '$_POST[h7]', '$_POST[h8]', '$_POST[i1]', '$_POST[i2]', '$_POST[i3]', '$_POST[i4]', '$_POST[i5]', '$_POST[i6]', '$_POST[i7]', '$_POST[i8]', '$_POST[j1]', '$_POST[j2]', '$_POST[j3]', '$_POST[j4]', '$_POST[j5]', '$_POST[j6]', '$_POST[j7]', '$_POST[j8]', '$_POST[k1]', '$_POST[k2]', '$_POST[k3]', '$_POST[k4]', '$_POST[k5]', '$_POST[k6]', '$_POST[k7]', '$_POST[k8]', '$_POST[l1]', '$_POST[l2]', '$_POST[l3]', '$_POST[l4]', '$_POST[l5]', '$_POST[l6]', '$_POST[l7]', '$_POST[l8]', '$_POST[m1]', '$_POST[m2]', '$_POST[m3]', '$_POST[m4]', '$_POST[m5]', '$_POST[m6]', '$_POST[m7]', '$_POST[m8]', '$_POST[n1]', '$_POST[n2]', '$_POST[n3]', '$_POST[n4]', '$_POST[n5]', '$_POST[n6]', '$_POST[n7]', '$_POST[n8]', '$_POST[o1]', '$_POST[o2]', '$_POST[o3]', '$_POST[o4]', '$_POST[o5]', '$_POST[o6]', '$_POST[o7]', '$_POST[o8]', '$_POST[p1]', '$_POST[p2]', '$_POST[p3]', '$_POST[p4]', '$_POST[p5]', '$_POST[p6]', '$_POST[p7]', '$_POST[p8]', '$_POST[q1]', '$_POST[q2]', '$_POST[q3]', '$_POST[q4]', '$_POST[q5]', '$_POST[q6]', '$_POST[q7]', '$_POST[q8]', '$_POST[r1]', '$_POST[r2]', '$_POST[r3]', '$_POST[r4]', '$_POST[r5]', '$_POST[r6]', '$_POST[r7]', '$_POST[r8]', '$_POST[s1]', '$_POST[s2]', '$_POST[s3]', '$_POST[s4]', '$_POST[s5]', '$_POST[s6]', '$_POST[s7]', '$_POST[s8]', '$_POST[t1]', '$_POST[t2]', '$_POST[t3]', '$_POST[t4]', '$_POST[t5]', '$_POST[t6]', '$_POST[t7]', '$_POST[t8]', '$_POST[u1]', '$_POST[u2]', '$_POST[u3]', '$_POST[u4]', '$_POST[u5]', '$_POST[u6]', '$_POST[u7]', '$_POST[u8]', '$_POST[v1]', '$_POST[v2]', '$_POST[v3]', '$_POST[v4]', '$_POST[v5]', '$_POST[v6]', '$_POST[v7]', '$_POST[v8]', '$_POST[w1]', '$_POST[w2]', '$_POST[w3]', '$_POST[w4]', '$_POST[w5]', '$_POST[w6]', '$_POST[w7]', '$_POST[w8]', '$_POST[x1]', '$_POST[x2]', '$_POST[x3]', '$_POST[x4]', '$_POST[x5]', '$_POST[x6]', '$_POST[x7]', '$_POST[x8]', '$_POST[y1]', '$_POST[y2]', '$_POST[y3]', '$_POST[y4]', '$_POST[y5]', '$_POST[y6]', '$_POST[y7]', '$_POST[y8]')";
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
	window.location.href = "MP_PMT.php";
</script>