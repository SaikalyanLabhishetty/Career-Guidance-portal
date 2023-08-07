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
  <li>
                            <a href="feedback.php"><i class="icon-group icon-large"></i>&nbsp;Send Feedback
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
                            <strong><i class="icon-user icon-large"></i>&nbsp;Show Test</strong>
                        </div>
                        
                       

                        
                        
                        <center>
            <?php
//include 'dbconn.php';
extract($_GET);
$rs1=mysql_query("select * from mst_subject where sub_id=$subid");
$row1=mysql_fetch_array($rs1);
echo "<b style='color:green;font-size:18px'>SUBJECT NAME IS &nbsp;&nbsp;&nbsp;&nbsp;</b><b style='color:darkgoldenrod;font-size:17px'>$row1[1]</b>";
$rs=mysql_query("select * from mst_test where sub_id=$subid");
if(mysql_num_rows($rs)<1)
{
	echo "<h2>No Quiz for this Subject </h2>";
	exit;
}
echo "<table><th style='color:darkgoldenrod;font-size:18px' cols='2'> Select Quiz Name to Give Quiz</th>";
$i=1;
while($row=mysql_fetch_row($rs))
{
       
echo "<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>$i</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='quiz.php?testid=$row[0]&&subid=$subid'><b style='color:darkgoldenrod;font-size:16px'>$row[2]</b></td></tr>";
$i++;

}
echo "</table>";
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


