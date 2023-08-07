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
                            <a href="faq.php"><i class="icon-group icon-large"></i>&nbsp;Learning session
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>
                            </a></li>

<li class="active">
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
                            <strong><i class="icon-user icon-large"></i>&nbsp;View Answers</strong>
                        </div>





                       <html>
<?php
//session_start();
echo $userName=$_SESSION['user'];
echo "<br>";
echo $a=$_GET['Sno'];

//include 'dbconn.php';


$sql ="SELECT * FROM answer where question_id='$a'";
$result= mysql_query($sql);
?>
<marquee><h1>Given Answers</h1></marquee>
<table width="100%" border="1px" style="background-image:url(dispaly/download.jpg)">
<tr>
<th>User Name</th>
<th>Answer</th>


</tr>

<?php
while($row=mysql_fetch_object($result))
{
?>
<tr>
 <td align="center"><?php echo $row->user;?></td>
<td align="center"><?php echo $row->answer;?></td>


 </tr>
<?php
}
?>
</table>
</body>
</html>










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
