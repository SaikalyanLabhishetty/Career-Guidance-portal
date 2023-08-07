<?php
include('header.php');
include ('session.php');
$user_query = mysql_query("select * from student where student_id='$session_id'") or die(mysql_error());
$user_row = mysql_fetch_array($user_query);
?>
<style media="screen">
  .sl{
    float: left;
width: 200px;

  }
.hero-unit-3 > center img {
width: 150px ! important;
height: 150px ! important;
 }



</style>
<body>

    <?php include('navhead_student.php'); ?>

    <div class="container">
        <div class="row-fluid">
<?php include("menu.php"); ?>
            <div class="span9">

                <div class="hero-unit-3">
                   <center>
 <div class="sr" style="font-family: sans-serif;font-size: 20px;color:#2a85a0"><?php echo $student_row['username']; ?> Profile</div>
<hr>

<br>
 <img   alt="ddd" src="<?php echo $student_row['location']; ?>"  class="sl img img-rounded" id="picture">
<br><br><br>

                                    <table width="500px" align="center">
                <tr><td><b style="color:#68686f; border-radius: 9px;">FIRSTNAME:</b></td><td><?php echo $student_row['firstname']; ?></td></tr>
                <tr><td colspan="2">&nbsp;</td></tr>
                <tr><td><b style="color:#68686f; border-radius: 9px;">LASTNAME
                  :</b></td><td><?php echo $student_row['lastname']; ?></td></tr>
                <tr><td colspan="2">&nbsp;</td></tr>
                <tr><td><b style="color:#68686f; border-radius: 9px;">USER NAME:</b></td><td><?php echo $student_row['username']; ?></td></tr>
                <tr><td colspan="2">&nbsp;</td></tr>
                <tr><td><b style="color:#68686f; border-radius: 9px;">Date Of birth:</b></td><td><?php echo $student_row['dob']; ?></td></tr>
                <tr><td colspan="2">&nbsp;</td></tr>  <tr><td><b style="color:#68686f; border-radius: 9px;">MOBILE NUMBER:</b></td><td><?php echo $student_row['mobile']; ?></td></tr>
                  <tr><td colspan="2">&nbsp;</td></tr>  <tr><td><b style="color:#68686f; border-radius: 9px;">EMAIL:</b></td><td><input type = "email"><?php echo $student_row['Email']; ?></td></tr>

                      <tr><td colspan="2">&nbsp;</td></tr>  <tr><td><b style="color:#68686f; border-radius: 9px;">ADDRESS:</b></td><td><?php echo $student_row['Address']; ?></td></tr>
                        <tr><td colspan="2">&nbsp;</td></tr>


                                </table>

<a class="btn btn-primary"href="changepassword.php">Change password</a>
                                  </center>
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
