<?php
session_start();
include_once '../lib/aden.baseurl.php';
include_once "../lib/aden.connection.php";
if (isset($_SESSION['username'])) 
{
    header("location:cms.nw.php");
}
else {}
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>Citramas | System</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    
    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="<?php echo $base_url ?>assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
    <link href="<?php echo $base_url ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo $base_url ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?php echo $base_url ?>assets/css/animate.min.css" rel="stylesheet" />
    <link href="<?php echo $base_url ?>assets/css/style.min.css" rel="stylesheet" />
    <link href="<?php echo $base_url ?>assets/css/style-responsive.min.css" rel="stylesheet" />
    <link href="<?php echo $base_url ?>assets/css/theme/default.css" rel="stylesheet" id="theme" />
    <!-- ================== END BASE CSS STYLE ================== -->
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="<?php echo $base_url ?>assets/plugins/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top">
    <!-- begin #page-loader -->
    <div id="page-loader" class="fade in"><span class="spinner"></span></div>
    <!-- end #page-loader -->
    
    <div class="login-cover">
        <div class="login-cover-image"><img src="<?php echo $base_url ?>assets/img/login-bg/bg-cti.jpg" data-id="login-cover-image" alt="" /></div>
        <div class="login-cover-bg"></div>
    </div>
    <!-- begin #page-container -->
    <div id="page-container" class="fade">
        <!-- begin login -->
        <div class="login login-v2" data-pageload-addclass="animated fadeIn">
            <!-- begin brand -->
            <!--<div class="login-header">
                <div class="brand">
                     <a href="index.html" class="navbar-brand"><img style="margin-top: -10px;" 
             src="<?php echo $base_url ?>assets/logo.png"> </a>
                </div>
                <div class="icon">
                    <i class="fa fa-sign-in"></i>
                </div>
            </div>-->
            <!-- end brand -->
            <div class="login-content">
                <form action="cek_login.php" method="POST" class="margin-bottom-0">
                    <div class="form-group m-b-20">
                        <input type="text" name="txtUser" class="form-control input-lg" placeholder="Username" />
                    </div>
                    <div class="form-group m-b-20">
                        <input type="password" name="txtPassword" class="form-control input-lg" placeholder="Password" />

                    </div>
                    <div class="checkbox m-b-20">
                        <label>
                            <input type="checkbox" /> Remember Me
                        </label>
                    </div>
                    <div class="login-buttons">
                        <button type="submit" name="btnLogin" class="btn btn-success btn-block btn-lg">Sign me in</button>
                    </div>
                    <div class="m-t-20">
                        Not a member yet? Click <a href="#">here</a> to register.
                    </div>
                </form>
            </div>
        </div>
        <!-- end login -->
        
        <ul class="login-bg-list clearfix">
            <li class="active"><a href="#" data-click="change-bg"><img src="<?php echo $base_url ?>assets/img/login-bg/bg-cti.jpg" alt="" /></a></li>
            <li><a href="#" data-click="change-bg"><img src="<?php echo $base_url ?>assets/img/login-bg/bg-1.jpg" alt="" /></a></li>
            <li><a href="#" data-click="change-bg"><img src="<?php echo $base_url ?>assets/img/login-bg/bg-4.jpg" alt="" /></a></li>
        </ul>
        
    </div>
    <!-- end page container -->
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="<?php echo $base_url ?>assets/plugins/jquery/jquery-1.9.1.min.js"></script>
    <script src="<?php echo $base_url ?>assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
    <script src="<?php echo $base_url ?>assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
    <script src="<?php echo $base_url ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
        <script src="<?php echo $base_url ?>assets/crossbrowserjs/html5shiv.js"></script>
        <script src="<?php echo $base_url ?>assets/crossbrowserjs/respond.min.js"></script>
        <script src="<?php echo $base_url ?>assets/crossbrowserjs/excanvas.min.js"></script>
    <![endif]-->
    <script src="<?php echo $base_url ?>assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo $base_url ?>assets/plugins/jquery-cookie/jquery.cookie.js"></script>
    <!-- ================== END BASE JS ================== -->
    
    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="<?php echo $base_url ?>assets/js/login-v2.demo.min.js"></script>
    <script src="<?php echo $base_url ?>assets/js/apps.min.js"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->

    <script>
        $(document).ready(function() {
            App.init();
            LoginV2.init();
        });
    </script>

</body>
</html>
