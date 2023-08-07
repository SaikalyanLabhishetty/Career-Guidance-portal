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


                <ul >
                  <?php
$id= $_GET['id'];

                   if ($id=="JEE") {
                    // code...
                  ?>
                  <a href="aboutexam.php?id=<?php echo "$id"; ?>"><h3 style="font-style: segoe script;" class="prev-indent-bot btn btn-primary">About Exam</h3></br>
                          <a href="syllabus.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Syllabus</h3></a></br>
                          <a href="books.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Books</h3></a></a></br>
                          <a href="modelpapers.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Model papers</h3></a>
<?php }  
?>

<?php
if ($id=="NEET") {
 // code...
?>
<a href="aboutexam.php?id=<?php echo "$id"; ?>"><h3 style="font-style: segoe script;" class="prev-indent-bot btn btn-primary">About Exam</h3></br>
       <a href="syllabus.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Syllabus</h3></a></br>
       <a href="books.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Books</h3></a></br>
       <a href="modelpapers.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Model papers</h3></a></br>
<?php }

 ?>

 <?php
if ($id=="RBI GRADE B") {
 // code...
?>
<a href="aboutexam.php?id=<?php echo "$id"; ?>"><h3 style="font-style: segoe script;" class="prev-indent-bot btn btn-primary">About Exam</h3></br>

       <a href="syllabus.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Syllabus</h3></a></br>
       <a href="books.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Books</h3></a></br>
       <a href="modelpapers.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Model papers</h3></a></br>
<?php }

 ?>

 <?php
if ($id=="UPSC") {
 // code...
?>
<a href="aboutexam.php?id=<?php echo "$id"; ?>"><h3 style="font-style: segoe script;" class="prev-indent-bot btn btn-primary">About Exam</h3></br>
       <a href="syllabus.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Syllabus</h3></a></br>
       <a href="books.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Books</h3></a></br>
       <a href="modelpapers.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Model papers</h3></a></br>
<?php }

 ?>

 <?php
if ($id=="IBPS CLERK") {
 // code...
?>
<a href="aboutexam.php?id=<?php echo "$id"; ?>"><h3 style="font-style: segoe script;" class="prev-indent-bot btn btn-primary">About Exam</h3></br>
       <a href="syllabus.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Syllabus</h3></a></br>
       <a href="books.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Books</h3></a></br>
       <a href="modelpapers.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Model papers</h3></a></br>
<?php }

 ?>

 <?php
if ($id=="SSC CGL") {
 // code...
?>
<a href="aboutexam.php?id=<?php echo "$id"; ?>"><h3 style="font-style: segoe script;" class="prev-indent-bot btn btn-primary">About Exam</h3></br>
       <a href="syllabus.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Syllabus</h3></a></br>
       <a href="books.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Books</h3></a></br>
       <a href="modelpapers.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Model papers</h3></a></br>
<?php }

 ?>

 <?php
if ($id=="RRB NTPC") {
 // code...
?>
<a href="aboutexam.php?id=<?php echo "$id"; ?>"><h3 style="font-style: segoe script;" class="prev-indent-bot btn btn-primary">About Exam</h3></br>
       <a href="syllabus.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Syllabus</h3></a></br>
       <a href="books.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Books</h3></a></br>
       <a href="modelpapers.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Model papers</h3></a></br>
<?php }

 ?>

 <?php
if ($id=="GATE") {
 // code...
?>
<a href="aboutexam.php?id=<?php echo "$id"; ?>"><h3 style="font-style: segoe script;" class="prev-indent-bot btn btn-primary">About Exam</h3></br>
       <a href="syllabus.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Syllabus</h3></a></br>
       <a href="books.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Books</h3></a></br>
       <a href="modelpapers.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Model papers</h3></a></br>
<?php }

 ?>

 <?php
if ($id=="GRE") {
 // code...
?>
<a href="aboutexam.php?id=<?php echo "$id"; ?>"><h3 style="font-style: segoe script;" class="prev-indent-bot btn btn-primary">About Exam</h3></br>
       <a href="syllabus.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Syllabus</h3></a></br>
       <a href="books.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Books</h3></a></br>
       <a href="modelpapers.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Model papers</h3></a></br>
<?php }

 ?>

 <?php
if ($id=="BITSAT") {
 // code...
?>
<a href="aboutexam.php?id=<?php echo "$id"; ?>"><h3 style="font-style: segoe script;" class="prev-indent-bot btn btn-primary">About Exam</h3></br>
       <a href="syllabus.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Syllabus</h3></a></br>
       <a href="books.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Books</h3></a></br>
       <a href="modelpapers.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Model papers</h3></a></br>
<?php }

 ?>

 <?php
if ($id=="SBI PO") {
 // code...
?>
<a href="aboutexam.php?id=<?php echo "$id"; ?>"><h3 style="font-style: segoe script;" class="prev-indent-bot btn btn-primary">About Exam</h3></br>
       <a href="syllabus.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Syllabus</h3></a></br>
       <a href="books.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Books</h3></a></br>
       <a href="modelpapers.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Model papers</h3></a></br>

<?php }

 ?>

 <?php
if ($id=="CAT") {
 // code...
?>
<a href="aboutexam.php?id=<?php echo "$id"; ?>"><h3 style="font-style: segoe script;" class="prev-indent-bot btn btn-primary">About Exam</h3></br>
       <a href="syllabus.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Syllabus</h3></a></br>
       <a href="books.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Books</h3></a></br>
       <a href="modelpapers.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Model papers</h3></a></br>
<?php }

 ?>

 <?php
if ($id=="SSC CHSL") {
 // code...
?>
<a href="aboutexam.php?id=<?php echo "$id"; ?>"><h3 style="font-style: segoe script;" class="prev-indent-bot btn btn-primary">About Exam</h3></br>
       <a href="syllabus.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Syllabus</h3></a></br>
       <a href="books.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Books</h3></a></br>
       <a href="modelpapers.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Model papers</h3></a></br>
<?php }

 ?>

 <?php
if ($id=="INCOME TAX") {
 // code...
?>
<a href="aboutexam.php?id=<?php echo "$id"; ?>"><h3 style="font-style: segoe script;" class="prev-indent-bot btn btn-primary">About Exam</h3></br>
       <a href="syllabus.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Syllabus</h3></a></br>
       <a href="books.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Books</h3></a></br>
       <a href="modelpapers.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Model papers</h3></a></br>
<?php }

 ?>

 <?php
if ($id=="IELTS") {
 // code...
?>
<a href="aboutexam.php?id=<?php echo "$id"; ?>"><h3 style="font-style: segoe script;" class="prev-indent-bot btn btn-primary">About Exam</h3></br>
       <a href="syllabus.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Syllabus</h3></a></br>
       <a href="books.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Books</h3></a></br>
       <a href="modelpapers.php?id=<?php echo "$id"; ?>"><h3 class="btn btn-primary">Model papers</h3></a></br>
<?php }

 ?>


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
