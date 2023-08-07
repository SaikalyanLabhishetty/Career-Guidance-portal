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
                            <strong><i class="icon-user icon-large"></i>&nbsp;Online Test</strong>
                        </div>
                        
                       

                        
                      <span id="countdown"  class="timer"></span>
 <center>
                  <?php
                                          error_reporting(1);
//include("dbconn.php");
extract($_POST);
extract($_GET);
extract($_SESSION);

if(isset($subid) && isset($testid))
{
@$_SESSION[sid]=$subid;
@$_SESSION[tid]=$testid;
//header("location:quiz.php");
}
if(!isset($_SESSION[sid]) || !isset($_SESSION[tid]))
{
	header("location: ");
}
?>
     <?php
$dateFormat = "d F Y -- g:i a";
$targetDate = time() + (1*60);//Change the 25 to however many minutes you want to countdown
$actualDate = time();
$secondsDiff = $targetDate - $actualDate;
$remainingDay     = floor($secondsDiff/60/60/24);
$remainingHour    = floor(($secondsDiff-($remainingDay*60*60*24))/60/60);
$remainingMinutes = floor(($secondsDiff-($remainingDay*60*60*24)-($remainingHour*60*60))/60);
$remainingSeconds = floor(($secondsDiff-($remainingDay*60*60*24)-($remainingHour*60*60))-($remainingMinutes*60));
$actualDateDisplay = date($dateFormat,$actualDate);
$targetDateDisplay = date($dateFormat,$targetDate);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<style>
    table{
        padding-bottom:30px;  
    }
    textarea
    {
        background-color:inherit;
        border:none;
        font-weight:bolder;
        font-style: normal;
        resize:none;
    }
</style>

<script type="text/javascript"> 
  var minutes = <?php echo $remainingMinutes; ?>  
  var seconds = <?php echo $remainingSeconds; ?> 
  minutes=19
function setCountDown ()
{
  seconds--;
  if(seconds==0)
      {
       minutes--;   
      }
  
  if (seconds < 0){
      
      seconds = 60
      
  }
      
  document.getElementById("remain").innerHTML = minutes+" minutes, "+seconds+" seconds";
  SD=window.setTimeout( "setCountDown()",1000 );
  if (minutes == '00' && seconds == '00') { seconds = "00";window.clearTimeout(SD);
   		//window.alert("Time is up. Press OK to continue.");//change timeout message as required
  		window.location= "review.php"; // Add your redirect url
   //             window.location="review.php";

                
 	} 

}

</script>
</head>

<body onload="setCountDown();">
    <b style='color:red;font-size:15px;'><div id="remain"></div></b>

<?php

$rs=mysql_query("select * from mst_question where test_id=$tid") or die(mysql_error());

echo "<table width=100% >";

echo "<form name=myfm method=post action=review.php>";

while($row= mysql_fetch_row($rs))
{
  $qid=$row[0];  
$n=$n+1;
$q="q".$n;
echo "<input type='hidden' name='$q' value='$qid'>";
echo "<tr><td colspan=4><span class=style2>Que ".  $n .":<br><textarea cols='110' rows='7' name=$qid value=>$row[2]</textarea>";
echo"</tr>";
echo "<tr id='b'><td class=style8><input type=radio name='$n' value=1>$row[3]<br></td>";
echo "<td class=style8> <input type=radio name='$n' value=2>$row[4]<br></td>";
echo "<td class=style8><input type=radio name='$n' value=3>$row[5]<br></td>";
echo "<td class=style8><input type=radio name='$n' value=4>$row[6]<br></td></tr>";
}

echo "<tr align='right'><td colspan='4'><input type=submit name=submit value='Submit' id='clss'></form>";
echo "</form></table></table>";
?>
  </center>
                <style>
                    .style8 {
	color: #6633CC;
	font-weight: bold;
}
 .style2 
 {
	color: #000000;
	font-weight: bold;
} 
#clss{
    color: blue;
    border-radius: 5px;
}

.head1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 24px;
	color: #FF0000;
	text-align: center;
	font-weight: bold;
}
#b
{
    border: #000000;
    
    border-bottom-style: outset; 
}

                </style>
                <br>
                <br>
        
    





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


