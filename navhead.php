
<?php

error_reporting(1);

?>

<div class="row-fluid">
    <div class="span12">


        <div class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-inner">
                <div class="container">

                    <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <!-- Be sure to leave the brand out there if you want it shown -->


                    <!-- Everything you want hidden at 940px or less, place within here -->



                    <div class="nav-collapse collapse">
                        <!-- .nav, .navbar-search, .navbar-form, etc -->
                        <i class="icon-facebook-sign icon-large" id="color_white"></i>
                        <i class="icon-twitter icon-large" id="color_white"></i>
                        <i class="icon-google-plus icon-large" id="color_white"></i>
                        <i class="icon-github-alt icon-large" id="color_white"></i>
                        <i class="icon-linkedin-sign icon-large" id="color_white"></i>
                        <div class="pull-right">
                            <form class="navbar-search pull-left">
                                <i class="icon-search icon-large" id="color_white"></i>
                                <input type="text" class="search-query"  placeholder="Search">
                            </form>
                        </div>

                        <!-- end collapse -->
                    </div>

                </div>
            </div>
        </div>
        <div class="hero-unit-header">
            <div class="container">

                <div class="row-fluid">
                    <div class="span12">
                        <div class="row-fluid">
                            <div class="span8">
<!--                                <img src="admin/images/head.png">-->
                                <b><p style="font-size: 45px;font-weight:10px;margin-left:100px; color: #387038;font-family:Times New Roman ">ONLINE BOOKS REFERENCE</p></b>
                            </div>
                            <div class="span4">
                                <div class="pull-right">
                                    <!--- login button -->
                                    <div class="btn-group">
                                        <button class="btn btn-success"><i class="icon-signin icon-large"></i>&nbsp;Login</button>
                                        <button class="btn dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="error_login.php"><i class="icon-user icon-large"></i>&nbsp;Student</a></li>
                                            <li><a href="admin/index.php"><i class="icon-user-md icon-large"></i>&nbsp;Admin</a></li>

                                        </ul>
                                    </div>

<!--<div class="btn-group">
    <a href="guest.php" role="button"><button class="btn btn-success"><i class="icon-signin icon-large"></i>&nbsp;Guest</button></a>

                                    </div>-->

<div class="btn-group">
    <a href="student_reg.php" role="button"><button class="btn btn-success"><i class="icon-signin icon-large"></i>&nbsp;Student Registration</button></a>

                                    </div>

                                    <!-- end login -->
                                    <?php //include('student_modal.php'); ?>
                                    <?php //include('teacher_modal.php'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
