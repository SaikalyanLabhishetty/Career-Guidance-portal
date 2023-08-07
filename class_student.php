<?php
$get_id = $_GET['id'];

include('header.php');
include ('session.php');
$user_query = mysql_query("select * from student where student_id='$session_id'") or die(mysql_error());
$user_row = mysql_fetch_array($user_query);
?>

<?php
$query_class = mysql_query("select * from class where class_id='$get_id'") or die(mysql_error());
$row_class = mysql_fetch_array($query_class);
$teacher_id = $row_class['teacher_id'];

$teacher_query=mysql_query("select *from teacher where teacher_id='$teacher_id'")or die(mysql_error());
$teacher_row=  mysql_fetch_array($teacher_query);
?>
<body>

    <?php include('navhead_student.php'); ?>

    <div class="container">
<?php include("menu.php"); ?>
            <div class="span9">

                <a href="student_class.php" class="btn btn-success"><i class="icon-arrow-left"></i>&nbsp;Back</a>
                <br><br>
                <div class="alert">Class:<a href="" >&nbsp;<strong><?php echo $row_class['course_id']; ?></strong></a>
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    Subject:<a href="">&nbsp;<strong><?php echo $row_class['subject_id']; ?></strong></a>
                    &nbsp;
                    Teacher::<a href="">&nbsp;<strong><?php echo $teacher_row['firstname']." ".$teacher_row['lastname']; ?></strong></a>
                </div>

                <div class="hero-unit-3">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><i class="icon-user icon-large"></i>&nbsp;Files</strong>
                        </div>
                        <thead>
                            <tr>

                                <th>File Name</th>
                                <th>Description</th>
                                <th>Date Uploaded</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = mysql_query("select * from files where class_id = '$get_id'") or die(mysql_error());
                            while ($row = mysql_fetch_array($query)) {
                                $file_id = $row['file_id'];
                                ?>
                                <tr class="odd gradeX">

                                    <!-- script -->
                            <script type="text/javascript">
                                $(document).ready(function(){

                                    $('#d<?php echo $file_id; ?>').tooltip('show')
                                    $('#d<?php echo $file_id; ?>').tooltip('hide')
                                });
                            </script>
                            <!-- end script -->

                            <td><?php echo $row['fname'] ?></td>
                            <td><?php echo $row['fdesc']; ?></td>
                            <td><?php echo $row['fdatein']; ?></td>
                            <td width="50">
                                <a href="<?php echo $row['floc']; ?>" rel="tooltip"  title="Download File" id="d<?php echo $file_id; ?>"  role="button"  data-toggle="modal" class="btn btn-info"><i class="icon-download-alt icon-large"></i></a>

                            </td>


                            </tr>
                        <?php } ?>
                        </tbody>
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
