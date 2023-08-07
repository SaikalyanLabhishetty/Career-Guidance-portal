<?php
include('header.php');
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
?>
<body>

    <?php include('navhead.php'); ?>

    <div class="container">
        <div class="row-fluid">
            <div class="span3">

                <div class="hero-unit-3">
                    <div class="alert-index alert-success">
                        <i class="icon-calendar icon-large"></i>
                        <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>
                </div>

                <div class="hero-unit-1">
                    <ul class="nav  nav-pills nav-stacked">


                        <li class="nav-header">Links</li>
                        <li class="active"><a href="index.php"><i class="icon-home icon-large"></i>&nbsp;Home
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>

                         <li>
                            <a href="student_reg.php"><i class="icon-group icon-large"></i>&nbsp;Learning Session
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a></li>
                  
                         <li>
                            <a href="student_reg.php"><i class="icon-group icon-large"></i>&nbsp;Forum
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a></li>
                            <li>
                            <a href="student_reg.php"><i class="icon-group icon-large"></i>&nbsp;Model Papers
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a></li>
                  
                         <li>
                            <a href="student_reg.php"><i class="icon-group icon-large"></i>&nbsp;Send Feedback
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a></li>
                        <li><a href="sitemap.php"><i class="icon-sitemap icon-large"></i>&nbsp;Site Map
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
                        <li><a href="contact.php"><i class="icon-envelope-alt icon-large"></i>&nbsp;Contact Us
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a>                
                        </li>
                        <li class="nav-header">About US</li>
                        <li><a  href="#mission" role="button" data-toggle="modal"><i class="icon-book icon-large"></i>&nbsp;Mission
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
                        <li><a href="#vision" role="button" data-toggle="modal"><i class="icon-book icon-large"></i>&nbsp;Vision
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
                        <li><a href="history.php"><i class="icon-list-alt icon-large"></i>&nbsp;History
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>

                    </ul>
                </div>
                <br>


            </div>
            <div class="span9">
                <section class="main">
                    <div class="custom-calendar-wrap">
                        <div id="custom-inner" class="custom-inner">
                            <div class="custom-header clearfix">
                                <nav>
                                    <span id="custom-prev" class="custom-prev"></span>
                                    <span id="custom-next" class="custom-next"></span>
                                </nav>
                                <h2 id="custom-month" class="custom-month"></h2>
                                <h3 id="custom-year" class="custom-year"></h3>
                            </div>
                            <div id="calendar" class="fc-calendar-container"></div>
                        </div>
                    </div>
                </section>

                <div class="slider-wrapper theme-default">
                <?php// include('slider.php'); ?>
                    
                    
                     <div class="row-fluid">

                    <div class="span12">

                      
                          <?php
                                error_reporting(1);
                                echo "$re";
                            
                            ?></div>
                          <b>  <center><div class="alert alert-success">STUDENT REGISTRATION</div></center></b>

                            <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Username</label>
                                    <div class="controls">
                                        <input type="text" name="un" id="inputEmail" placeholder="Username" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Password</label>
                                    <div class="controls">
                                        <input type="password" name="p" id="inputPassword" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Firstname</label>
                                    <div class="controls">
                                        <input type="text" name="fn" id="inputEmail" placeholder="Firstname" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Lastname</label>
                                    <div class="controls">
                                        <input type="text" name="ln" id="inputEmail" placeholder="Lastname" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Middlename</label>
                                    <div class="controls">
                                        <input type="text" name="mn" id="inputEmail" placeholder="Middlename" required>
                                    </div>
                                </div>
                                 <div class="control-group">
                                <label class="control-label" for="input01">Enter Your DOB:</label>
                                <div class="controls">
                                <select style="width:100px;float:left" name="yy" class="form-control" required>
                                <option value="">Year</option>
                                <?php
                                for($i=1980;$i<=2002;$i++)
                                {
                                echo "<option>".$i."</option>";
                                }
                                ?>
                                </select>
                                </div>
                                <div class="controls">
                                <select style="width:100px;float:left" name="mm" class="form-control" required>
                                <option value="">Month</option>
                                <?php
                                for($i=1;$i<=12;$i++)
                                {
                                echo "<option>".$i."</option>";
                                }
                                ?>

                                </select>
                                </div>
                                <div class="controls">
                                <select style="width:100px;float:left" name="dd" class="form-control" required>
                                <option value="">Date</option>
                                <?php
                                for($i=1;$i<=31;$i++)
                                {
                                echo "<option>".$i."</option>";
                                }
                                ?>

                                </select>
                                </div>
                                </div>
                                 <div class="control-group">
                                    <label class="control-label" for="inputEmail">Contact No</label>
                                    <div class="controls">
                                        <input type="text" name="mobile" id="inputEmail" placeholder="Contact No" required>
                                    </div>
                                </div>
                                 <div class="control-group">
                                    <label class="control-label" for="inputEmail">Email</label>
                                    <div class="controls">
                                        <input type="text" name="email" id="inputEmail" placeholder="Email" required>
                                    </div>
                                </div>
                                 <div class="control-group">
                                    <label class="control-label" for="inputEmail">Address</label>
                                    <div class="controls">
                                        <textarea name="addr" id="inputEmail" placeholder="Address" required>
                                            
                                        </textarea>
                                        
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="input01">Image</label>
                                    <div class="controls">
                                        <input type="file" name="image" class="font" required> 
                                    </div>
                                </div>

                               



                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="submit" class="btn btn-info"><i class="icon-save icon-large"></i>&nbsp;Submit</button>
                                    </div>
                                </div>
                            </form>

                            <?php
                            if (isset($_POST['submit'])) {
                                $un = $_POST['un'];
                                $p = $_POST['p'];
                                $fn = $_POST['fn'];
                                $ln = $_POST['ln'];
                                $mn = $_POST['mn'];

                                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);

                                move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"]);
                                $location = "uploads/" . $_FILES["image"]["name"];
                                
                                $mb=$_POST['mobile'];
                                                                $email=$_POST['email'];
                                $addr=$_POST['addr'];

$yy=$_POST['yy'];
$mm=$_POST['mm'];
$dd=$_POST['dd'];
$dob=$dd."-".$mm."-".$yy;


                                $r=mysql_query("insert into student (username,password,firstname,lastname,middle_name,location,mobile,Email,Address,dob)
values ('$un','$p','$fn','$ln','$mn','$location','$mb','$email','$addr','$dob')") or die(mysql_error());
                               //header('location:index.php');
                            $re=   "Registration Success";
                            }
                            ?>


                        </div>

               
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                </div>
                <!-- end slider -->
            </div>

        </div>

    </div>
    <!---------------->
    <div class="container">

<!--        <div class="row-fluid">
            <div class="span12">

                <div class="row-fluid">
                    <div class="span9">
                        <div class="alert alert-success"><i class="icon-file icon-large"></i>&nbsp;<strong></strong></div>
                        <div class="hero-unit-2">
                        </div>

                    </div>
                    <div class="span3">
                        <div class="alert alert-info">
                            <i class="icon-building icon-large"></i>&nbsp;

                        </div>
                        <div class="hero-unit-3">
                            <p><a href=""><i class="icon-sign-blank"></i>&nbsp;</a></p>
                            <p><a href=""><i class="icon-sign-blank"></i>&nbsp;</a></p>
                            <p><a href=""><i class="icon-sign-blank"></i>&nbsp;</a></p>
                            <p><a href=""><i class="icon-sign-blank"></i>&nbsp;</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->



        <br>
        
        </div>

        <?php include('footer.php'); ?>
    </div>


</div>
</div>






</body>
</html>


