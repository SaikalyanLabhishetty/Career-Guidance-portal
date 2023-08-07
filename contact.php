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
<?php include("menu.php"); ?>
            <div class="span9">


                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong><i class="icon-phone-sign icon-large"></i>&nbsp;Directories!</strong>&nbsp;
                </div>
                <div class="hero-unit-3">

                    <div class="row-fluid">
                        <div class="span12">
                            <div class="alert alert-success">   Book Reference </div>

                            <div class="row-fluid">
                                <div class="span6">

                                    <p><i class="icon-circle"></i>&nbsp;</p>
                                    <p><i class="icon-circle"></i>&nbsp;</p>
                                    <p><i class="icon-circle"></i>&nbsp;</p>
                                    <p><i class="icon-circle"></i>&nbsp;</p>
                                    <p><i class="icon-circle"></i>&nbsp;</p>
                                    <p><i class="icon-circle"></i>&nbsp;</p>
                                    <p><i class="icon-circle"></i>&nbsp;</p>
                                    <p><i class="icon-circle"></i>&nbsp;</p>
                                    <p><i class="icon-circle"></i>&nbsp;</p>
                                    <p><i class="icon-circle"></i>&nbsp;</p>


                                </div>
                                <div class="span6">

                                    <p><i class="icon-circle"></i>&nbsp;</p>
                                    <p><i class="icon-circle"></i>&nbsp;</p>
                                    <p><i class="icon-circle"></i>&nbsp;</p>
                                    <p><i class="icon-circle"></i>&nbsp;</p>
                                    <p><i class="icon-circle"></i>&nbsp;</p>
                                    <p><i class="icon-circle"></i>&nbsp;</p>
                                    <p><i class="icon-circle"></i>&nbsp;</p>
                                    <p><i class="icon-circle"></i>&nbsp;</p>
                                    <p><i class="icon-circle"></i>&nbsp;</p>
                                    <p><i class="icon-circle"></i>&nbsp;</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- end slider -->
            </div>

        </div>
        <?php include('footer.php'); ?>
    </div>


</div>
</div>






</body>
</html>
