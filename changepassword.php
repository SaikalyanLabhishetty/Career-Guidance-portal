
<?php
include('header.php');
include ('session.php');
session_start();
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
 <div class="sr" style="font-family: sans-serif;font-size: 20px;color:#2a85a0">User Profile</div>
<hr>

<br>
 <img   alt="ddd" src="<?php echo $student_row['location']; ?>"  class="sl img img-rounded" id="picture">
<br><br><br>



<?php
	$error = "";

	if(isset($_POST['savepass']))
	{

		$password = $_POST['password'];
		$confirmPassword = $_POST['passwordConfirm'];

		if(strlen($password) < 8)
		{
			$error = "Password must be greater than 8 characters";
		}
		else if($password !== $confirmPassword)
		{
			$error = "Password does not match";
		}
		else
		{
   $username=$_SESSION['username'];
$conn=mysqli_connect("localhost","root","","elearning");
			if(mysqli_query($conn, "UPDATE student SET password='$password' WHERE username='$username'"))
			{
				$error = "Password changed successfully, <a href='profile_student.php'>click here</a> to go to the profile";
			}

		}
	}




	?>

		<?php echo $error; ?>

		<form method="POST" action="changepassword.php">

<table width="500px" align="center">
<tr><td><b style="color:#68686f; border-radius: 9px;">New Password::</b></td><td><input type="password" name="password" /></td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td><b style="color:#68686f; border-radius: 9px;">Re-enter Password::</b></td><td><input type="password" name="passwordConfirm" /></td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td>	<input  class="btn btn-primary" type="submit" name="savepass" value="save"/></td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
				</table>
</form>







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
