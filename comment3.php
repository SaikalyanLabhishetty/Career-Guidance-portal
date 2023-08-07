
<body>

    <?php// include('navhead_student.php'); ?>

    
<?php

include('header.php');

include ('session.php');
$user_query = mysql_query("select * from student where student_id='$session_id'") or die(mysql_error());
$user_row = mysql_fetch_array($user_query);




//session_start();
if(isset($_POST['submit']))
{
    $body=$_POST['body'];
    $_SESSION['user']=$user_row['firstname'] . " " . $user_row['lastname'];
    $studentName=$_SESSION['user'];
    $subject=$_POST['subject'];
    //include 'dbConnector.php';
    $query=mysql_query("INSERT INTO `sendcmd`(`sender`, `body`, `subject`) VALUES ('$studentName','$body','$subject')");
if($query==1)
  {
            echo "<script>alert('Comment is  Posted');window.location='comment.php';</script>";

    
    
}
//        
//        
//                         //   $subject=$_POST['subject'];
//                    if($subject=="CProgramming")
//                    {
//                            $body1=$body."http://localhost/elearning/comment.php";//give url of the hosted server address
//                            include "classes/class.phpmailer.php"; // include the class name
//                            $mail = new PHPMailer(); // create a new object
//                            $mail->IsSMTP(); // enable SMTP
//                            $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
//                            $mail->SMTPAuth = true; // authentication enabled
//                            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
//                            $mail->Host = "smtp.gmail.com";
//                            $mail->Port = 465; // or 587
//                            $mail->IsHTML(true);
//                            $mail->Username = "collaborativee@gmail.com";//match this account with google settings by giving access to less secure apps also
//                            $mail->Password = "learning12";
//                            $mail->SetFrom("puvvadamanikumar@gmail.com");
//                            $mail->Subject =$subject;
//                            $mail->Body =$body1;
//                            $mail->AddAddress("kodalieswar77@yahoo.com");//provided mail-id of eswar sir 
//                            if(!$mail->Send()){
//                                   
//                                    echo "Mailer Error: " . $mail->ErrorInfo;
//                            }
//                            else{
//                                    echo "<script>alert('Message has been sent');</script>";
//                                   // echo "Mail send Boss";
// 			            echo "<script>alert('Comment is NOT Posted');window.location='comment.php';</script>";		
//
//                            }
//                    }
//                   
//                    else if($subject=="Java")
//                    {
//                            //$message=$_POST['message'];
//                            $body1=$body."http://localhost/elearning/comment.php";//give url of the hosted server address
//                            include "classes/class.phpmailer.php"; // include the class name
//                            $mail = new PHPMailer(); // create a new object
//                            $mail->IsSMTP(); // enable SMTP
//                            $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
//                            $mail->SMTPAuth = true; // authentication enabled
//                            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
//                            $mail->Host = "smtp.gmail.com";
//                            $mail->Port = 465; // or 587
//                            $mail->IsHTML(true);
//                            $mail->Username = "collaborativee@gmail.com";
//                            $mail->Password = "learning12";
//                            $mail->SetFrom("puvvadamanikumar@gmail.com");
//                            $mail->Subject =$subject;
//                            $mail->Body =$body;
//                            $mail->AddAddress("subbukatte@gmail.com");//mai-id of k.subbarao sir
//                            if(!$mail->Send()){
//                                echo "Mailer Error: " . $mail->ErrorInfo;
//                                 
//                            }
//                            else{
//                                    echo "<script>alert('Message has been sent');</script>";
//                                    //echo "Mail send Boss";
//                                    echo "<script>alert('Comment is NOT Posted');window.location='comment.php';</script>";
//                            }
//                    }
//                    else if($subject=="AdvancedjavaandWebTechnologies")
//                    {
//                            //$message=$_POST['message'];
//                            $body1=$body."http://localhost/elearning/comment.php";//give url of the hosted server address
//                            include "classes/class.phpmailer.php"; // include the class name
//                            $mail = new PHPMailer(); // create a new object
//                            $mail->IsSMTP(); // enable SMTP
//                            $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
//                            $mail->SMTPAuth = true; // authentication enabled
//                            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
//                            $mail->Host = "smtp.gmail.com";
//                            $mail->Port = 465; // or 587
//                            $mail->IsHTML(true);
//                            $mail->Username = "collaborativee@gmail.com";
//                            $mail->Password = "learning12";
//                            $mail->SetFrom("puvvadamanikumar@gmail.com");
//                            $mail->Subject =$subject;
//                            $mail->Body =$body;
//                            $mail->AddAddress("chvijay-anand@yahoo.co.in");
//                            if(!$mail->Send()){
//                                echo "Mailer Error: " . $mail->ErrorInfo;
//                                 
//                            }
//                            else{
//                                    echo "<script>alert('Message has been sent');</script>";
//                                    //echo "Mail send Boss";
//                                    echo "<script>alert('Comment is NOT Posted');window.location='comment.php';</script>";
//                            }
//                    }
//                    else if($subject=="MobileComputing")
//                    {
//                            //$message=$_POST['message'];
//                            $body1=$body."hhttp://localhost/elearning/comment.php";//give url of the hosted server address
//                            include "classes/class.phpmailer.php"; // include the class name
//                            $mail = new PHPMailer(); // create a new object
//                            $mail->IsSMTP(); // enable SMTP
//                            $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
//                            $mail->SMTPAuth = true; // authentication enabled
//                            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
//                            $mail->Host = "smtp.gmail.com";
//                            $mail->Port = 465; // or 587
//                            $mail->IsHTML(true);
//                            $mail->Username = "collaborativee@gmail.com";
//                            $mail->Password = "learning12";
//                            $mail->SetFrom("puvvadamanikumar@gmail.com");
//                            $mail->Subject =$subject;
//                            $mail->Body =$body;
//                            $mail->AddAddress("Harinimadam@gmail.com");
//                            if(!$mail->Send()){
//                                echo "Mailer Error: " . $mail->ErrorInfo;
//                                 
//                            }
//                            else{
//                                    echo "<script>alert('Message has been sent');</script>";
//                                    //echo "Mail send Boss";
//                                    echo "<script>alert('Comment is NOT Posted');window.location='comment.php';</script>";
//                            }
//                    }
//                    else if($subject=="DataStuctures")
//                    {
//                            //$message=$_POST['message'];
//                            $body1=$body."hhttp://localhost/elearning/comment.php";//give url of the hosted server address
//                            include "classes/class.phpmailer.php"; // include the class name
//                            $mail = new PHPMailer(); // create a new object
//                            $mail->IsSMTP(); // enable SMTP
//                            $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
//                            $mail->SMTPAuth = true; // authentication enabled
//                            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
//                            $mail->Host = "smtp.gmail.com";
//                            $mail->Port = 465; // or 587
//                            $mail->IsHTML(true);
//                            $mail->Username = "collaborativee@gmail.com";
//                            $mail->Password = "learning12";
//                            $mail->SetFrom("puvvadamanikumar@gmail.com");
//                            $mail->Subject =$subject;
//                            $mail->Body =$body;
//                            $mail->AddAddress("tysr_crl@yahoo.co.in");
//                            if(!$mail->Send()){
//                                echo "Mailer Error: " . $mail->ErrorInfo;
//                                 
//                            }
//                            else{
//                                    echo "<script>alert('Message has been sent');</script>";
//                                    //echo "Mail send Boss";
//                                    echo "<script>alert('Comment is NOT Posted');window.location='comment.php';</script>";
//                            }
//                    }
//                     else if($subject=="SoftwareEngineering")
//                    {
//                            //$message=$_POST['message'];
//                            $body1=$body."http://localhost/elearning/comment.php";//give url of the hosted server address
//                            include "classes/class.phpmailer.php"; // include the class name
//                            $mail = new PHPMailer(); // create a new object
//                            $mail->IsSMTP(); // enable SMTP
//                            $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
//                            $mail->SMTPAuth = true; // authentication enabled
//                            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
//                            $mail->Host = "smtp.gmail.com";
//                            $mail->Port = 465; // or 587
//                            $mail->IsHTML(true);
//                            $mail->Username = "collaborativee@gmail.com";
//                            $mail->Password = "learning12";
//                            $mail->SetFrom("puvvadamanikumar@gmail.com");
//                            $mail->Subject =$subject;
//                            $mail->Body =$body;
//                            $mail->AddAddress("Nageshsir@gmail.com");
//                            if(!$mail->Send()){
//                                echo "Mailer Error: " . $mail->ErrorInfo;
//                                 
//                            }
//                            else{
//                                    echo "<script>alert('Message has been sent');</script>";
//                                    //echo "Mail send Boss";
//                                    echo "<script>alert('Comment is NOT Posted');window.location='comment.php';</script>";
//                            }
//                    }
//                    else if($subject=="DataBaseManagementSystem")
//                    {
//                            //$message=$_POST['message'];
//                            $body1=$body."http://localhost/elearning/comment.php";//give url of the hosted server address
//                            include "classes/class.phpmailer.php"; // include the class name
//                            $mail = new PHPMailer(); // create a new object
//                            $mail->IsSMTP(); // enable SMTP
//                            $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
//                            $mail->SMTPAuth = true; // authentication enabled
//                            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
//                            $mail->Host = "smtp.gmail.com";
//                            $mail->Port = 465; // or 587
//                            $mail->IsHTML(true);
//                            $mail->Username = "collaborativee@gmail.com";
//                            $mail->Password = "learning12";
//                            $mail->SetFrom("puvvadamanikumar@gmail.com");
//                            $mail->Subject =$subject;
//                            $mail->Body =$body;
//                            $mail->AddAddress("chitti510@gmail.com");
//                            if(!$mail->Send()){
//                                echo "Mailer Error: " . $mail->ErrorInfo;
//                                 
//                            }
//                            else{
//                                    echo "<script>alert('Message has been sent');</script>";
//                                    //echo "Mail send Boss";
//                                    echo "<script>alert('Comment is NOT Posted');window.location='comment.php';</script>";
//                            }
//                    }
//                    else if($subject=="DataWareHouseandDataMining")
//                    {
//                            //$message=$_POST['message'];
//                            $body1=$body."http://localhost/elearning/comment.php";//give url of the hosted server address
//                            include "classes/class.phpmailer.php"; // include the class name
//                            $mail = new PHPMailer(); // create a new object
//                            $mail->IsSMTP(); // enable SMTP
//                            $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
//                            $mail->SMTPAuth = true; // authentication enabled
//                            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
//                            $mail->Host = "smtp.gmail.com";
//                            $mail->Port = 465; // or 587
//                            $mail->IsHTML(true);
//                            $mail->Username = "collaborativee@gmail.com";
//                            $mail->Password = "learning12";
//                            $mail->SetFrom("puvvadamanikumar@gmail.com");
//                            $mail->Subject =$subject;
//                            $mail->Body =$body;
//                            $mail->AddAddress("DWDMsir@gmail.com");
//                            if(!$mail->Send()){
//                                echo "Mailer Error: " . $mail->ErrorInfo;
//                                 
//                            }
//                            else{
//                                    echo "<script>alert('Message has been sent');</script>";
//                                    //echo "Mail send Boss";
//                                    echo "<script>alert('Comment is NOT Posted');window.location='comment.php';</script>";
//                            }
//                    }
//                    else if($subject=="ComputerNetworks")
//                    {
//                            //$message=$_POST['message'];
//                            $body1=$body."http://localhost/elearning/comment.php";//give url of the hosted server address
//                            include "classes/class.phpmailer.php"; // include the class name
//                            $mail = new PHPMailer(); // create a new object
//                            $mail->IsSMTP(); // enable SMTP
//                            $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
//                            $mail->SMTPAuth = true; // authentication enabled
//                            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
//                            $mail->Host = "smtp.gmail.com";
//                            $mail->Port = 465; // or 587
//                            $mail->IsHTML(true);
//                            $mail->Username = "collaborativee@gmail.com";
//                            $mail->Password = "learning12";
//                            $mail->SetFrom("puvvadamanikumar@gmail.com");
//                            $mail->Subject =$subject;
//                            $mail->Body =$body;
//                            $mail->AddAddress("Thisisnarayan@gmail.com");
//                            if(!$mail->Send()){
//                                echo "Mailer Error: " . $mail->ErrorInfo;
//                                 
//                            }
//                            else{
//                                    echo "<script>alert('Message has been sent');</script>";
//                                    //echo "Mail send Boss";
//                                    echo "<script>alert('Comment is NOT Posted');window.location='comment.php';</script>";
//                            }
//                    }
//                    else if($subject=="OperatingSystem")
//                    {
//                            //$message=$_POST['message'];
//                            $body1=$body."http://localhost/elearning/comment.php";//give url of the hosted server address
//                            include "classes/class.phpmailer.php"; // include the class name
//                            $mail = new PHPMailer(); // create a new object
//                            $mail->IsSMTP(); // enable SMTP
//                            $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
//                            $mail->SMTPAuth = true; // authentication enabled
//                            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
//                            $mail->Host = "smtp.gmail.com";
//                            $mail->Port = 465; // or 587
//                            $mail->IsHTML(true);
//                            $mail->Username = "collaborativee@gmail.com";
//                            $mail->Password = "learning12";
//                            $mail->SetFrom("puvvadamanikumar@gmail.com");
//                            $mail->Subject =$subject;
//                            $mail->Body =$body;
//                            $mail->AddAddress("ande-sudhakar@yahoo.co.in");
//                            if(!$mail->Send()){
//                                echo "Mailer Error: " . $mail->ErrorInfo;
//                                 
//                            }
//                            else{
//                                    echo "<script>alert('Message has been sent');</script>";
//                                    //echo "Mail send Boss";
//                                    echo "<script>alert('Comment is NOT Posted');window.location='comment.php';</script>";
//                            }
//                    }
//                    else if($subject=="AdvancedComputerNetworks")
//                    {
//                            //$message=$_POST['message'];
//                            $body1=$body."http://localhost/elearning/comment.php";//give url of the hosted server address
//                            include "classes/class.phpmailer.php"; // include the class name
//                            $mail = new PHPMailer(); // create a new object
//                            $mail->IsSMTP(); // enable SMTP
//                            $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
//                            $mail->SMTPAuth = true; // authentication enabled
//                            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
//                            $mail->Host = "smtp.gmail.com";
//                            $mail->Port = 465; // or 587
//                            $mail->IsHTML(true);
//                            $mail->Username = "collaborativee@gmail.com";
//                            $mail->Password = "learning12";
//                            $mail->SetFrom("puvvadamanikumar@gmail.com");
//                            $mail->Subject =$subject;
//                            $mail->Body =$body;
//                            $mail->AddAddress("ande-sudhakar@yahoo.co.in");
//                            if(!$mail->Send()){
//                                echo "Mailer Error: " . $mail->ErrorInfo;
//                                 
//                            }
//                            else{
//                                    echo "<script>alert('Message has been sent');</script>";
//                                    //echo "Mail send Boss";
//                                    echo "<script>alert('Comment is NOT Posted');window.location='comment.php';</script>";
//                            }
//                    }
//                   else if($subject=="UnixProgramming")
//                    {
//                            //$message=$_POST['message'];
//                            $body1=$body."http://localhost/elearning/comment.php";//give url of the hosted server address
//                            include "classes/class.phpmailer.php"; // include the class name
//                            $mail = new PHPMailer(); // create a new object
//                            $mail->IsSMTP(); // enable SMTP
//                            $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
//                            $mail->SMTPAuth = true; // authentication enabled
//                            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
//                            $mail->Host = "smtp.gmail.com";
//                            $mail->Port = 465; // or 587
//                            $mail->IsHTML(true);
//                            $mail->Username = "collaborativee@gmail.com";
//                            $mail->Password = "learning12";
//                            $mail->SetFrom("puvvadamanikumar@gmail.com");
//                            $mail->Subject =$subject;
//                            $mail->Body =$body;
//                            $mail->AddAddress("yallantisowjanya@gmail.com");
//                            if(!$mail->Send()){
//                                echo "Mailer Error: " . $mail->ErrorInfo;
//                                 
//                            }
//                            else{
//                                    echo "<script>alert('Message has been sent');</script>";
//                                    //echo "Mail send Boss";
//                                    echo "<script>alert('Comment is NOT Posted');window.location='comment.php';</script>";
//                            }
//                    }
//                    else if($subject=="CryptographyandNetworkSecurity")
//                    {
//                            //$message=$_POST['message'];
//                            $body1=$body."http://localhost/elearning/comment.php";//give url of the hosted server address
//                            include "classes/class.phpmailer.php"; // include the class name
//                            $mail = new PHPMailer(); // create a new object
//                            $mail->IsSMTP(); // enable SMTP
//                            $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
//                            $mail->SMTPAuth = true; // authentication enabled
//                            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
//                            $mail->Host = "smtp.gmail.com";
//                            $mail->Port = 465; // or 587
//                            $mail->IsHTML(true);
//                            $mail->Username = "collaborativee@gmail.com";
//                            $mail->Password = "learning12";
//                            $mail->SetFrom("puvvadamanikumar@gmail.com");
//                            $mail->Subject =$subject;
//                            $mail->Body =$body;
//                            $mail->AddAddress("yallantisowjanya@gmail.com");
//                            if(!$mail->Send()){
//                                echo "Mailer Error: " . $mail->ErrorInfo;
//                                 
//                            }
//                            else{
//                                    echo "<script>alert('Message has been sent');</script>";
//                                    //echo "Mail send Boss";
//                                    echo "<script>alert('Comment is NOT Posted');window.location='comment.php';</script>";
//                            }
//                    }
//                   else if($subject=="UnifiedModelingLanguage")
//                    {
//                            //$message=$_POST['message'];
//                            $body1=$body."http://localhost/elearning/comment.php";//give url of the hosted server address
//                            include "classes/class.phpmailer.php"; // include the class name
//                            $mail = new PHPMailer(); // create a new object
//                            $mail->IsSMTP(); // enable SMTP
//                            $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
//                            $mail->SMTPAuth = true; // authentication enabled
//                            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
//                            $mail->Host = "smtp.gmail.com";
//                            $mail->Port = 465; // or 587
//                            $mail->IsHTML(true);
//                            $mail->Username = "collaborativee@gmail.com";
//                            $mail->Password = "learning12";
//                            $mail->SetFrom("puvvadamanikumar@gmail.com");
//                            $mail->Subject =$subject;
//                            $mail->Body =$body;
//                            $mail->AddAddress("ande-sudhakar@yahoo.co.in");
//                            if(!$mail->Send()){
//                                echo "Mailer Error: " . $mail->ErrorInfo;
//                                 
//                            }
//                            else{
//                                    echo "<script>alert('Message has been sent');</script>";
//                                    //echo "Mail send Boss";
//                                    echo "<script>alert('Comment is NOT Posted');window.location='comment.php';</script>";
//                            }
//                    }
//                    else if($subject=="SoftwareProjectManagement")
//                    {
//                            //$message=$_POST['message'];
//                            $body1=$body."http://localhost/elearning/comment.php";//give url of the hosted server address
//                            include "classes/class.phpmailer.php"; // include the class name
//                            $mail = new PHPMailer(); // create a new object
//                            $mail->IsSMTP(); // enable SMTP
//                            $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
//                            $mail->SMTPAuth = true; // authentication enabled
//                            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
//                            $mail->Host = "smtp.gmail.com";
//                            $mail->Port = 465; // or 587
//                            $mail->IsHTML(true);
//                            $mail->Username = "collaborativee@gmail.com";
//                            $mail->Password = "learning12";
//                            $mail->SetFrom("puvvadamanikumar@gmail.com");
//                            $mail->Subject =$subject;
//                            $mail->Body =$body;
//                            $mail->AddAddress("Nageshsir@gmail.com");
//                            if(!$mail->Send()){
//                                echo "Mailer Error: " . $mail->ErrorInfo;
//                                 
//                            }
//                            else{
//                                    echo "<script>alert('Message has been sent');</script>";
//                                    //echo "Mail send Boss";
//                                    echo "<script>alert('Comment is NOT Posted');window.location='comment.php';</script>";
//                            }
//                    }
//                   else if($subject=="Aptitude")
//                    {
//                            //$message=$_POST['message'];
//                            $body1=$body."http://localhost/elearning/comment.php";//give url of the hosted server address
//                            include "classes/class.phpmailer.php"; // include the class name
//                            $mail = new PHPMailer(); // create a new object
//                            $mail->IsSMTP(); // enable SMTP
//                            $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
//                            $mail->SMTPAuth = true; // authentication enabled
//                            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
//                            $mail->Host = "smtp.gmail.com";
//                            $mail->Port = 465; // or 587
//                            $mail->IsHTML(true);
//                            $mail->Username = "collaborativee@gmail.com";
//                            $mail->Password = "learning12";
//                            $mail->SetFrom("puvvadamanikumar@gmail.com");
//                            $mail->Subject =$subject;
//                            $mail->Body =$body;
//                            $mail->AddAddress("aptitudesir@gmail.com");
//                            if(!$mail->Send()){
//                                echo "Mailer Error: " . $mail->ErrorInfo;
//                                 
//                            }
//                            else{
//                                    echo "<script>alert('Message has been sent');</script>";
//                                    //echo "Mail send Boss";
//                                    echo "<script>alert('Comment is NOT Posted');window.location='comment.php';</script>";
//                            }
//                    }
//                     else if($subject=="Reasoning")
//                    {
//                            //$message=$_POST['message'];
//                            $body1=$body."http://localhost/elearning/comment.php";//give url of the hosted server address
//                            include "classes/class.phpmailer.php"; // include the class name
//                            $mail = new PHPMailer(); // create a new object
//                            $mail->IsSMTP(); // enable SMTP
//                            $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
//                            $mail->SMTPAuth = true; // authentication enabled
//                            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
//                            $mail->Host = "smtp.gmail.com";
//                            $mail->Port = 465; // or 587
//                            $mail->IsHTML(true);
//                            $mail->Username = "collaborativee@gmail.com";
//                            $mail->Password = "learning12";
//                            $mail->SetFrom("puvvadamanikumar@gmail.com");
//                            $mail->Subject =$subject;
//                            $mail->Body =$body;
//                            $mail->AddAddress("reasoningsir@gmail.com");
//                            if(!$mail->Send()){
//                                echo "Mailer Error: " . $mail->ErrorInfo;
//                                 
//                            }
//                            else{
//                                    echo "<script>alert('Message has been sent');</script>";
//                                    //echo "Mail send Boss";
//                                    echo "<script>alert('Comment is NOT Posted');window.location='comment.php';</script>";
//                            }
//                    }
//                    else if($subject=="EnglishGrammar")
//                    {
//                            //$message=$_POST['message'];
//                            $body1=$body."http://localhost/elearning/comment.php";//give url of the hosted server address
//                            include "classes/class.phpmailer.php"; // include the class name
//                            $mail = new PHPMailer(); // create a new object
//                            $mail->IsSMTP(); // enable SMTP
//                            $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
//                            $mail->SMTPAuth = true; // authentication enabled
//                            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
//                            $mail->Host = "smtp.gmail.com";
//                            $mail->Port = 465; // or 587
//                            $mail->IsHTML(true);
//                            $mail->Username = "collaborativee@gmail.com";
//                            $mail->Password = "learning12";
//                            $mail->SetFrom("puvvadamanikumar@gmail.com");
//                            $mail->Subject =$subject;
//                            $mail->Body =$body;
//                            $mail->AddAddress("shaphiamadam@gmail.com");
//                            if(!$mail->Send()){
//                                echo "Mailer Error: " . $mail->ErrorInfo;
//                                 
//                            }
//                            else{
//                                    echo "<script>alert('Message has been sent');</script>";
//                                    //echo "Mail send Boss";
//                                    echo "<script>alert('Comment is NOT Posted');window.location='comment.php';</script>";
//                            }
//                    }
//                    else if($subject=="InterviewSkills")
//                    {
//                            //$message=$_POST['message'];
//                            $body1=$body."http://localhost/elearning/comment.php";//give url of the hosted server address
//                            include "classes/class.phpmailer.php"; // include the class name
//                            $mail = new PHPMailer(); // create a new object
//                            $mail->IsSMTP(); // enable SMTP
//                            $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
//                            $mail->SMTPAuth = true; // authentication enabled
//                            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
//                            $mail->Host = "smtp.gmail.com";
//                            $mail->Port = 465; // or 587
//                            $mail->IsHTML(true);
//                            $mail->Username = "collaborativee@gmail.com";
//                            $mail->Password = "learning12";
//                            $mail->SetFrom("puvvadamanikumar@gmail.com");
//                            $mail->Subject =$subject;
//                            $mail->Body =$body;
//                            $mail->AddAddress("shaphiamadam@gmail.com");
//                            if(!$mail->Send()){
//                                echo "Mailer Error: " . $mail->ErrorInfo;
//                                 
//                            }
//                            else{
//                                    echo "<script>alert('Message has been sent');</script>";
//                                    //echo "Mail send Boss";
//                                    echo "<script>alert('Comment is NOT Posted');window.location='comment.php';</script>";
//                            }
//                    }
//
//                    

}  else
         {
        echo "<script>alert('Comment is NOT Posted');window.location='comment.php';</script>";
    }
    
    
    
 
?>