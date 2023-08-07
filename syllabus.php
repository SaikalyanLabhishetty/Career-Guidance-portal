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

            if ($id=="JEE") { ?>
              <li><a href="https://jeemain.nic.in/WebInfo/Handler/FileHandler.ashx?i=File&ii=33&iii=Y">JEE</a></li>

            <?php } ?>

              <?php
$id= $_GET['id'];

            if ($id=="NEET") { ?>
              <li><a href="https://drive.google.com/file/d/1aUPQeBy5isU29qtb-0LmkQi3X-JUUHbV/view">NEET</a></li>

            <?php } ?>



            <?php
                        if ($id=="RBI GRADE B") { ?>
                        <li><a href="https://d2cyt36b7wnvt9.cloudfront.net/exams/wp-content/uploads/2019/03/26173059/RBI-grade-b-syllabus.pdf">RBI GRADE B</a></li>

                        <?php } ?>

                         <?php
                        if ($id=="UPSC") { ?>
                        <li><a href="https://www.mockbank.com/bulletin/wp-content/uploads/2019/02/Syllabus-UPSC-Civil-Services-Exam.pdf">UPSC</a></li>

                        <?php } ?>

                        <?php
                        if ($id=="IBPS CLERK") { ?>
                        <li><a href="https://drive.google.com/file/d/15zwae3kmfXL72UEKdYzf0DbLqmAywNPo/view">IBPS CLERK</a></li>

                        <?php } ?>
                    
                         <?php
                        if ($id=="SSC CGL") { ?>
                        <li><a href="https://blogmedia.testbook.com/blog/wp-content/uploads/2018/05/ssc-cgl-syllabus-2018-19-for-tier-i-ii-iii-and-iv-67001c22.pdf">SSC CGL</a></li>

                        <?php } ?>

                         <?php
                        if ($id=="RRB NTPC") { ?>
                        <li><a href="https://knowernikhil.com/wp-content/uploads/2019/04/RRB-NTPC-2019-Detailed-Syllabus.pdf">RRB NTPC</a></li>

                        <?php } ?>

                         <?php
                        if ($id=="GATE") { ?>
                        <li><a href="https://gradeup.co/liveData/f/2019/7/gate-cse-syllabus-2020-89.pdf">GATE CSE</a></li>
                        <li><a href="https://gradeup.co/liveData/f/2019/7/gate-ece-syllabus-2020-97.pdf">GATE ECE</a></li>
                        <li><a href="https://gradeup.co/liveData/f/2019/7/gate-ee-syllabus-2020-74.pdf">GATE EEE</a></li>
                        <li><a href="https://gradeup.co/liveData/f/2019/7/gate-me-syllabus-2020-82.pdf">GATE ME</a></li>
                        <li><a href="https://gradeup.co/gate-civil-engineering-syllabus-i">GATE CE</a></li>



                        <?php } ?>

                         <?php
                        if ($id=="GRE") { ?>
                        <li><a href="https://www.freshersnow.com/wp-content/uploads/2018/05/6s.pdf">GRE</a></li>

                        <?php } ?>

                         <?php
                        if ($id=="BITSAT") { ?>
                        <li><a href="https://drive.google.com/file/d/1ZjAdTv4rJbp1KEGaZCXlMILm4IiXSC8o/view">BITSAT</a></li>

                        <?php } ?>

                         <?php
                        if ($id=="SBI PO") { ?>
                        <li><a href="https://drive.google.com/file/d/11kLRoqdhfFgGI4LiVxeXkjm4N6lda1jb/view">SBI PO</a></li>

                        <?php } ?>

                         <?php
                        if ($id=="CAT") { ?>
                        <li><a href="https://www.mbauniverse.com/sites/default/files/cat-2018-syllabus_0.pdf">CAT</a></li>

                        <?php } ?>

                         <?php
                        if ($id=="SSC CHSL") { ?>
                        <li><a href="https://s3-ap-south-1.amazonaws.com/tr-wp-media-uploads/exams/wp-content/uploads/2017/12/11194823/cnvert_removed.pdf">SSC CHSL</a></li>

                        <?php } ?>

                         <?php
                        if ($id=="INCOME TAX") { ?>
                        <li><a href="https://drive.google.com/file/d/1cX3WFd5koMBrXk3UAiCGPfgdFzk6ltEx/view">INCOME TAX</a></li>

                        <?php } ?>

                         <?php
                        if ($id=="IELTS") { ?>
                        <li><a href="http://recruitmentresult.com/wp-content/uploads/2018/06/IELTS-Syllabus.pdf">IELTS</a></li>

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
