<?php
session_start();

//include 'dbconn.php';
 include 'admin/connect.php';
$session_id=$_SESSION['id'];
$student_query=mysql_query("select * from student where student_id='$session_id'")or die(mysql_error());
  $student_row=  mysql_fetch_array($student_query);
  $email= $student_row['username'];
$feedback=$_POST['Body'];

$rank=$_POST['dynamic'];
  
    
      $Date=  date('d/m/y');
//$query=mysql_query("INSERT INTO `feedback`(`username`, `email`, `feedback`) VALUES ('$uname','$email','$feedback')");

   

  $s = mysql_query("insert into `feedback`(`username`, `feedback`, `date`,`ranking`) values('$email','$feedback','$Date','$rank')");

    if($s)
{
    echo "<script>alert('Comment is Sended to Admin');window.location='feedback.php';</script>";
}
else
{
    echo mysql_error();
    echo "<script>alert('ERROR! NOT SENDED');window.location='feedback.php';</script>";
}
 
?>




