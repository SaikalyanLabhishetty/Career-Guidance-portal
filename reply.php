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

<li class="">
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

<li class="active">
                            <a href="forum.php"><i class="icon-group icon-large"></i>&nbsp;Forum
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
<!--                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><i class="icon-user icon-large"></i>&nbsp;My Classes</strong>
                        </div>-->
                        
                       

                        
                        
                      <?php
//session_start();
           $_SESSION['user']=$user_row['firstname'] . " " . $user_row['lastname'];
              
                      
  $userName=$_SESSION['user'];
  $a=$_GET['Sno'];
//include 'dbconn.php';
 
?>
<body bgcolor="#C0C0C0">
<form method="post" action="">
<marquee behavior="alternate"><h3 align="center" style="color:#FF8040;">You Can Give Your Reply Here</h3></marquee>
<table align="center">
<tr>
<td>Answer:</td></tr>
<tr>
<td><textarea rows="4" cols="38" name="f1" required></textarea></td>
</tr>
<tr>
<td><input type="submit" value="Submit" name="sub"></td>
</tr>
</table>

<?php 
if(isset($_POST['sub']))
{
echo $qid=$_GET['Sno'];
echo "<br>";
echo $ata=$_POST['f1'];
echo "<br>";
           $_SESSION['user']=$user_row['firstname'] . " " . $user_row['lastname'];

echo $userName = $_SESSION["user"];



//include "dbconn.php";
$sql="INSERT INTO answer(question_id,user,answer) VALUES('$qid','$userName','$ata')";
//$sql="update sendcmd set answer='$ata' where Sno='$qid'";

//$sql1="update sendcmd set reply='$userName' where Sno='$qid'";
//$sql="INSERT INTO sendcmd(answer) VALUES('$ata')";
 
$result=mysql_query($sql);
//$result1=mysql_query($sql1);

if($result==true)
{
	
	//echo "sucess";
	header("location:comment.php?Sno=$qid");
	}
	else
	{
		echo "error";
   }
   
   }
?>

</form>
</body>
 





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


