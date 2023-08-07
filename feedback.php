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
                   <center>

                       <div style="font-family: sans-serif;font-size: 20px;color:#2a85a0;margin-right: 50px">Give Feedback to Admin</div><br><br>

                                    <table width="500px" align="center">
                <form method="post" action="feedback1.php">
                <tr><td><b style="color:blue; border-radius: 9px;">Comment:</b></td><td><textarea cols="30" rows="5" name="Body" style="border-radius: 9px;"></textarea></td></tr>
                <tr><td colspan="2">&nbsp;</td></tr>
                <tr><td><b style="color:red;margin-left: 10px">Ranking :</b></td><td><input type="radio" name="dynamic" checked value="best"><b class="clear1">BEST</b></input>
                                       <input type="radio" name="dynamic" value="good"><b class="clear1">GOOD</b></input>
                                        <input type="radio" name="dynamic" value="average"><b class="clear1">AVERAGE</b></input>
                                         <input type="radio" name="dynamic" value="bad"><b class="clear1">BAD</b></input>
                       </td></tr>
                <tr><td colspan="2">&nbsp;</td></tr>
                <tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Send FeedBack" style="border-radius: 9px;"></input></td></tr>

                </form>
                                </table>


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
