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
                           <center> <strong><i class="icon-user icon-large"></i>&nbsp;Welcome to Forum</strong></center>
                        </div>






                <table width="700px">
                <h5 style="color:darkgoldenrod">View Comments:</h5>
				<?php
				 error_reporting(E_ERROR | E_PARSE);

				 $id=$_GET['Sno'];

				?>

                <?php
				echo "<table border='1px'>";
                echo "<th style='color:darkgoldenrod'>&nbsp;&nbsp;&nbsp;&nbsp;UserName:</th>";
                echo "<th style='color:darkgoldenrod'>&nbsp;&nbsp;&nbsp;&nbsp;Comment:</th>";
                echo "<th style='color:darkgoldenrod'>&nbsp;&nbsp;&nbsp;&nbsp;Subject:</th>";
				echo "<th style='color:darkgoldenrod'>&nbsp;&nbsp;&nbsp;&nbsp;Reply:</th>";
				echo "<th style='color:darkgoldenrod'>&nbsp;&nbsp;&nbsp;&nbsp;Answer:</th>";
			/*	echo "<th style='color:darkgoldenrod'>&nbsp;&nbsp;&nbsp;&nbsp;ReplayGivenBy</th>";	*/
			/*	echo "<th style='color:darkgoldenrod'>&nbsp;&nbsp;&nbsp;&nbsp;View Answers</th>";	*/

                //include 'dbconn.php';
                $query=mysql_query("SELECT * FROM sendcmd") or die(mysql_error());

                while($rec=mysql_fetch_array($query))
                {

                    echo  "<tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td align=center style='color:black'>".$rec['sender'];
                    echo  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td align=center style='color:black'>".$rec['body'];
                    echo  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td align=center style='color:black'>".$rec['subject'];

					echo   "&nbsp;&nbsp;&nbsp;&nbsp;<td><a href='reply.php?Sno=$rec[0]'>Reply</a>";
					echo   "&nbsp;&nbsp;&nbsp;&nbsp;<td><a href='view.php?Sno=$rec[0]'>ViewAnswers</a>";
				/*	echo  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td align=center style='color:black'>".$rec['reply'];*/
                }
				   /*$query1=mysql_query("SELECT * FROM answer where question_id='$id'") or die(mysql_error());
                   $rec1=mysql_fetch_array($query1);
				   echo $rec1[2];
                */
					 //echo  "<td align=center style='color:black'>".$rec1[2];
					 echo "</table>";

                ?>
                </table>
                 <br><br> <br><br> <br><br><br><br>

                <center>
<form method="post" action="comment3.php">

<table width="500px" border="2">
<tr><td colspan="2" align="center"><p align="center" style="font-size:18px; color:#FF9999;">Comment here </p></td></tr>

            <tr>
                    <td></td>
                    <td align="center">
                    <tr>
                        <td style='color:darkgoldenrod'><b>Subject:</b></td><td align="center">
          <select name="subject" required="required">
              <option>JEE</option><option>NEET</option><option>RBI GRADE B</option><option>UPSC</option>
                          <option>IBPS CLERK</option><option>SSC CGL</option><option>RRB NTPC</option>
                          <option>GATE</option><option>GRE</option>
                          <option>BITSAT</option><option>SBI PO</option>
                         <option>CAT</option><option>SSC CHSL</option><option>INCOME TAX</option><option>IELTS</option>
                          
          </select>
                        </td></tr>                    </td>
            </tr>
            <tr><td style='color:darkgoldenrod'><b>Message:</b></td><td align="center"> <textarea rows="10" cols="40" name="body" required="true"></textarea></td></tr>
            <tr align="center"><td>&nbsp;</td><td style='color:darkgoldenrod'><input type="submit" name="submit" value="Send"></td></tr>

</table>
  </form>
            </center>






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
