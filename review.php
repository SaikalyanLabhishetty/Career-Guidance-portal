<?php
include('header.php');
include ('session.php');
$user_query = mysql_query("select * from student where student_id='$session_id'") or die(mysql_error());
$user_row = mysql_fetch_array($user_query);
?>
<body>

    <?php include('navhead_student.php'); ?>

    <div class="container">
        <div class="row-fluid">
            <div class="span3">
                <div class="hero-unit-3">
                    <div class="alert-index alert-success">
                        <i class="icon-calendar icon-large"></i>
                        <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>
                </div>
                <div class="hero-unit-1">
                    <ul class="nav  nav-pills nav-stacked">
                        <li class="nav-header">Links</li>
                        <li>
                            <a href="student_home.php"><i class="icon-home icon-large"></i>&nbsp;Home
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a>

                        </li>
                        <li class="">
                            <a href="student_class.php"><i class="icon-group icon-large"></i>&nbsp;Class
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a></li>

<li class="active">
                            <a href=" "><i class="icon-group icon-large"></i>&nbsp; 
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a></li>
<li class="">
                            <a href="faq.php"><i class="icon-group icon-large"></i>&nbsp;Learning session
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a></li>

<li class="">
                            <a href="comment.php"><i class="icon-group icon-large"></i>&nbsp;Forum
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a></li>


                    </ul>
                </div>

            </div>
            <div class="span9">

                <div class="hero-unit-3">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><i class="icon-user icon-large"></i>&nbsp;Result</strong>
                        </div>
                       <style>
         .head1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 24px;
	color: #FF0000;
	text-align: center;
	font-weight: bold;
}
.style2 {
	color: blue;
	font-weight: bold;
}
.style7 {
	color: black;
	font-weight: bold;
}
.style8 {
	color:green;
	font-weight: bold;
}
textarea
    {
        background-color:inherit;
        border:none;
        color:darkgoldenrod;
        font-weight:bolder;
        font-size:20px;
        width:100%; 
        resize:none;
    }
    p
    {
        color:#FF9900;
        background-color:#000; 
    }
    #k{
      color:#00CC66;  
    }
     </style>
 
                       

                        
                       <?php
error_reporting(error_reporting() & ~E_ALL);
include //'dbconn.php';
session_start();
$true=0;
$false=0;
    
    $day=date("y/m/d");
    $true=$true;
    $mail=$_SESSION['user'];
    $false=$false;	
    for($i=1;$i<=20;$i++)
    {
        $q=q.$i;
        $ans=$_POST[$i]; 
        $qid=$_POST[$q];
        $check="select * from mst_question where true_ans='$ans' and que_id='$qid'";
        $qcheck= mysql_query($check) or die(mysql_error());
        $uans="select * from mst_question where que_id='$qid'";
        $uans1=  mysql_query($uans);
        $res=mysql_fetch_row($uans1);
            $tid=$res[1];
            $qdes=$res[2];
            $ans1=$res[3];
            $ans2=$res[4];
            $ans3=$res[5];
            $ans4=$res[6];
            //echo "ans koti".$ans4;
            $tans=$res[7];
            
             $review="INSERT INTO `mst_useranswer`(`mailid`, `test_id`, `que_des`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`, `your_ans`)
                VALUES ('$mail','$tid','$qdes','$ans1','$ans2','$ans3','$ans4','$tans','$ans')";
            
            mysql_query($review)or die(mysql_error());
        
        while($qcheck1= mysql_num_rows($qcheck))
        {
            
           
            $true=$true+1;
            break;
        }
        }
		
		  $testid=$_SESSION[tid];

 
 
$sql=mysql_query("select total_que from mst_test where test_id='$testid'");
		
$data=mysql_fetch_array($sql); 
echo $total=$data[0]; 
		
    $false=$total-$true;
    echo"<script>alert('True $true False=$false');</script>";
    
    $score="INSERT INTO `mst_result`(`login`, `test_id`, `test_date`, `score`) VALUES ('$mail',$tid,'$day','$true')";
    $qscore=  mysql_query($score);

$tid=$_SESSION[tid];
$rs=mysql_query("select * from mst_useranswer where test_id=$tid and mailid='$mail' ") or die(mysql_error());
echo "<table width=100% ><tr><th colspan='4'><p>YOU SCORED=>".$true."<p></th></tr>";
echo "<form name=myfm method=post action=validatetest.php>";
$count=0;
while($row= mysql_fetch_row($rs))
{
$n=$n+1;
$q="q".$n;
echo "<tr><td colspan=4><span class=style2>Que ".  $n .":&nbsp;&nbsp;<p id='k'>[True Answer:".$row[7]."]&nbsp;&nbsp;[Your Answer:".$row[8]."]</p><br><textarea rows='7' name=$qid readonly='true'>$row[2]</textarea>";
echo"</tr>";
echo "<tr id='b'><td class=style8>$row[3]<br></td>";
echo "<td class=style8>$row[4]<br></td>";
echo "<td class=style8>$row[5]<br></td>";
echo "<td class=style8>$row[6]<br></td></tr>";
$count++;
if($count==20)
{
    break;
}
}
echo "<tr align='right'><td colspan='4'></form>";
echo "</form></table></table>";


?>

  </center>






                    </table>
                    <!-- end slider -->
                </div>
            </div>

        </div>
<?php include('footer.php'); ?>
    </div>
</div>
</div>






</body>
</html>


<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

