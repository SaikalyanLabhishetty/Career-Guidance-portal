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





                       <h3 style="font-style: segoe script;color:black" class="prev-indent-bot">Below are  Exams books links</h3>
                <ul class="list-1">

                  <?php
$id= $_GET['id'];
$NAME= $_GET['name'];
if ($id=="Jee") {
  ?>
                	<li>
                            <a href="booklink.php"><strong><b style="color:darkgoldenrod;font-size:15px">Jee Mains</b></strong></a>
 <li><a href="https://www.amazon.in/Chapter-wise-NCERT-Exemplar-Solutions-Class/dp/9386320460/ref=sr_1_2_sspa?keywords=ncert+book&qid=1562655111&s=books&sr=1-2-spons&psc=1 ">NCRET</a></li>
  <li><a href=" https://www.amazon.in/Principles-Physics-Halliday-Robert-Resnick/dp/8126552565/ref=sr_1_1?crid=OYY16UBSHYJY&keywords=fundamental+of+physics&qid=1562655481&s=gateway&sprefix=fundamental+of+phi%2Cstripbooks%2C412&sr=8-1">FUNDAMENTAL OF PHISICS,CHEMISTRY AND maths</a></li>
  <li><a href="https://www.amazon.in/Selling-Latest-Organic-Chemistry-Competitive/dp/9384538248/ref=sr_1_2_sspa?keywords=inorganic+chemistry&qid=1562655508&s=gateway&sr=8-2-spons&psc=1">inorganic chemistry</a></li>

                    </li>

                  <?php } ?>

<?php
if ($id=="RBI" && $NAME=="English") {
?>
<strong><b style="color:darkgoldenrod;font-size:15px">RBI ENGLISH BOOKS</b></strong>
<li><a href="https://www.amazon.in/Selling-Latest-Organic-Chemistry-Competitive/dp/9384538248/ref=sr_1_2_sspa?keywords=inorganic+chemistry&qid=1562655508&s=gateway&sr=8-2-spons&psc=1">English1</a></li>
<li><a href="https://www.amazon.in/Selling-Latest-Organic-Chemistry-Competitive/dp/9384538248/ref=sr_1_2_sspa?keywords=inorganic+chemistry&qid=1562655508&s=gateway&sr=8-2-spons&psc=1">English2</a></li>
<li><a href="https://www.amazon.in/Selling-Latest-Organic-Chemistry-Competitive/dp/9384538248/ref=sr_1_2_sspa?keywords=inorganic+chemistry&qid=1562655508&s=gateway&sr=8-2-spons&psc=1">English3</a></li>



<?php } ?>




<?php
if ($id=="RBI" && $NAME=="Appitude") {
?>
<strong><b style="color:darkgoldenrod;font-size:15px">RBI Aptitude BOOKS</b></strong>
<li><a href="https://www.amazon.in/Selling-Latest-Organic-Chemistry-Competitive/dp/9384538248/ref=sr_1_2_sspa?keywords=inorganic+chemistry&qid=1562655508&s=gateway&sr=8-2-spons&psc=1">Aptitude1</a></li>
<li><a href="https://www.amazon.in/Selling-Latest-Organic-Chemistry-Competitive/dp/9384538248/ref=sr_1_2_sspa?keywords=inorganic+chemistry&qid=1562655508&s=gateway&sr=8-2-spons&psc=1">Aptitude2</a></li>
<li><a href="https://www.amazon.in/Selling-Latest-Organic-Chemistry-Competitive/dp/9384538248/ref=sr_1_2_sspa?keywords=inorganic+chemistry&qid=1562655508&s=gateway&sr=8-2-spons&psc=1">Aptitude3</a></li>



<?php } ?>
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
