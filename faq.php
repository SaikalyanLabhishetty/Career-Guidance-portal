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
<?php include("menu.php"); ?>
            <div class="span9">

                <div class="hero-unit-3">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><i class="icon-user icon-large"></i>&nbsp;Learning session</strong>
                        </div>





                       <h3 style="font-style: segoe script;color:black" class="prev-indent-bot">Competitive Exams</h3>
        <ul class="list-1">
        <li>
        <a href="booklink.php?id=JEE"><strong><b style="color:darkgoldenrod;font-size:15px">JEE</b></strong></a>

        </li>
        <li>
        <a href="booklink.php?id=NEET"><strong><b style="color:darkgoldenrod;font-size:15px">NEET</b></strong></a>
        </li>

      <li>
      <a href="booklink.php?id=RBI GRADE B"><strong><b style="color:darkgoldenrod;font-size:15px">RBI GRADE B</b></strong></a>
      </li>
        <li>
      <a href="booklink.php?id=UPSC"><strong><b style="color:darkgoldenrod;font-size:15px">UPSC</b></strong></a>
      </li>
        <li>
      <a href="booklink.php?id=IBPS CLERK"><strong><b style="color:darkgoldenrod;font-size:15px">IBPS CLERK</b></strong></a>
      </li>
        <li>
      <a href="booklink.php?id=SSC CGL"><strong><b style="color:darkgoldenrod;font-size:15px">SSC CGL</b></strong></a>
      </li>
        <li>
      <a href="booklink.php?id=RRB NTPC"><strong><b style="color:darkgoldenrod;font-size:15px">RRB NTPC</b></strong></a>
      </li>
        <li>
      <a href="booklink.php?id=GATE"><strong><b style="color:darkgoldenrod;font-size:15px">GATE</b></strong></a>
      </li>
        <li>
      <a href="booklink.php?id=GRE"><strong><b style="color:darkgoldenrod;font-size:15px">GRE</b></strong></a>
      </li>
        <li>
      <a href="booklink.php?id=BITSAT"><strong><b style="color:darkgoldenrod;font-size:15px">BITSAT</b></strong></a>
      </li>
       <li>
      <a href="booklink.php?id=SBI PO"><strong><b style="color:darkgoldenrod;font-size:15px">SBI PO</b></strong></a>
      </li>
       <li>
      <a href="booklink.php?id=CAT"><strong><b style="color:darkgoldenrod;font-size:15px">CAT</b></strong></a>
      </li>
       <li>
      <a href="booklink.php?id=SSC CHSL"><strong><b style="color:darkgoldenrod;font-size:15px">SSC CHSL</b></strong></a>
      </li>
       <li>
      <a href="booklink.php?id=INCOME TAX"><strong><b style="color:darkgoldenrod;font-size:15px">INCOME TAX</b></strong></a>
      </li>
      <li>
       <a href="booklink.php?id=IELTS"><strong><b style="color:darkgoldenrod;font-size:15px">IELTS</b></strong></a>
      </li>

        </ul>

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
