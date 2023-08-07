<?php
include('admin/connect.php');
$get_id=$_POST['id'];

mysql_query("delete from class where class_id='$get_id'")or die(mysql_error());
header('location:teacher_subject.php');

?>