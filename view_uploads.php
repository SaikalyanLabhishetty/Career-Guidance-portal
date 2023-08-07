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
                            <li class="active">
                            <a href="view_uploads.php"><i class="icon-group icon-large"></i>&nbsp;Downloads
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
                   <center>

                       <div style="font-family: sans-serif;font-size: 20px;color:#2a85a0">Downloadable Table</div><br><br>

                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Materials Table</strong>
                                </div>

                                        <?php
                                $sql="SELECT * FROM latestupd ";
$dd=mysql_query($sql);

echo "<div style='margin-left:400px;width:600px;height:auto;border:2px;'>";

	echo "<table border='1' width='600' style='background-color:';>";
	echo "<tr><th>Technology </th><th>Description </th><th>File</th><th>Date</th></tr>";
while(list($b,$c,$d,$e,$f)=mysql_fetch_array($dd))
{
	echo "<tr>";

	echo "<td>".$c."</td>";

	//echo "<td><img src='uploads/$a' width='80' height='80'></td>";
	echo "<td>".$d."</td>";
        	echo "<td><a href='download1.php?filename=$e'>".$e."</a></td>";
                echo "<td>".$f."</td>";

                echo "</tr>";
	}
	echo "</table>";





?>

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
