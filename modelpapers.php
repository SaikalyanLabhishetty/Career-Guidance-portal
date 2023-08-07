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





                       <h3 style="font-style: segoe script;color:black" class="prev-indent-bot"></h3>
                <ul class="list-1">

                  <?php
$id= $_GET['id'];
?>
<?php
if ($id=="JEE") {
?>
<li>
<strong><b style="color:darkgoldenrod;font-size:15px">JEE</b></strong>

  <li><a href="https://www.vedantu.com/iit-jee/jee-main-question-paper-2019">previous years papers</a></li>
 
</li>

<?php } ?>

<?php
if ($id=="NEET") {
?>
<li>
<strong><b style="color:darkgoldenrod;font-size:15px">NEET</b></strong>

  <li><a href="https://www.vedantu.com/neet/neet-previous-year-question-paper">previous years papers</a></li>
 
</li>

<?php } ?>

<?php
if ($id=="RBI GRADE B") {
?>
<li>
<strong><b style="color:darkgoldenrod;font-size:15px">RBI GRADE B</b></strong>

  <li><a href="https://gradeup.co/rbi-grade-b-question-paper-i">previous years papers</a></li>
  

  
</li>

<?php } ?>

<?php
if ($id=="UPSC") {
?>
<li>
<strong><b style="color:darkgoldenrod;font-size:15px">UPSC</b></strong>

  <li><a href="https://upsc.gov.in/examinations/previous-question-papers">previous years papers</a></li>
  

  
</li>

<?php } ?>

<?php
if ($id=="IBPS CLERK") {
?>
<li>
<strong><b style="color:darkgoldenrod;font-size:15px">IBPS CLERK</b></strong>

  <li><a href="https://www.ibpsguide.com/ibps-clerk-previous-year-question-paper-download-pdf">previous years papers</a></li>
  

  
</li>

<?php } ?>

<?php
if ($id=="SSC CGL") {
?>
<li>
<strong><b style="color:darkgoldenrod;font-size:15px">SSC CGL</b></strong>

  <li><a href="https://cracku.in/ssc-chsl-question-papers#mocks-list">previous years papers</a></li>
  

  
</li>

<?php } ?>

<?php
if ($id=="RRB NTPC") {
?>
<li>
<strong><b style="color:darkgoldenrod;font-size:15px">RRB NTPC</b></strong>

  <li><a href="https://testbook.com/blog/rrb-ntpc-previous-years-papers/">previous years papers</a></li>
  

  
</li>

<?php } ?>

<?php
if ($id=="GATE") {
?>
<li>
<strong><b style="color:darkgoldenrod;font-size:15px">GATE</b></strong>

  <li><a href="http://gate.iitm.ac.in/Previousqp17">previous years papers</a></li>
  

  
</li>

<?php } ?>

<?php
if ($id=="GRE") {
?>
<li>
<strong><b style="color:darkgoldenrod;font-size:15px">GRE</b></strong>

  <li><a href="http://entrance-exam.net/gre-papers/">previous years papers</a></li>
  

  
</li>

<?php } ?>

<?php
if ($id=="BITSAT") {
?>
<li>
<strong><b style="color:darkgoldenrod;font-size:15px">BITSAT</b></strong>

  <li><a href="https://admission.aglasem.com/bitsat-previous-year-question-papers/">previous years papers</a></li>
  

  
</li>

<?php } ?>

<?php
if ($id=="SBI PO") {
?>
<li>
<strong><b style="color:darkgoldenrod;font-size:15px">SBI PO</b></strong>

  <li><a href="https://gradeup.co/sbi-po-question-paper-i">previous years papers</a></li>
  

  
</li>

<?php } ?>

<?php
if ($id=="CAT") {
?>
<li>
<strong><b style="color:darkgoldenrod;font-size:15px">CAT</b></strong>

  <li><a href="https://online.2iim.com/CAT-question-paper/">previous years papers</a></li>
  

  
</li>

<?php } ?>

<?php
if ($id=="SSC CHSL") {
?>
<li>
<strong><b style="color:darkgoldenrod;font-size:15px">SSC CHSL</b></strong>

  <li><a href="https://sscportal.in/chsl/tier-1/papers">previous years papers</a></li>
  

  
</li>

<?php } ?>

<?php
if ($id=="INCOME TAX") {
?>
<li>
<strong><b style="color:darkgoldenrod;font-size:15px">INCOME TAX</b></strong>

  <li><a href="https://www.current-affairs.org/2266/income-tax-previous-year-question-papers-pdf">previous years papers</a></li>
  

  
</li>

<?php } ?>

<?php
if ($id=="IELTS") {
?>
<li>
<strong><b style="color:darkgoldenrod;font-size:15px">IELTS</b></strong>

  <li><a href="https://www.ielts.org/about-the-test/sample-test-questions">previous years papers</a></li>
  

  
</li>

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
