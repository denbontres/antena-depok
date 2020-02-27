<?php
    session_start();
    include_once '../lib/aden.baseurl.php';
    include_once "../lib/aden.connection.php";
    include_once "../lib/aden.library.php";
    include_once "../lib/fungsi_seo.php";
    include_once "../lib/fungsi_thumbnail.php";
    include '../lib/aden.ceklogin.php';
    include '../lib/aden.session.php';

?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>Color Admin | Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    
    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="<?php echo $base_url ?>assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
    <link href="<?php echo $base_url ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo $base_url ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?php echo $base_url ?>assets/css/animate.min.css" rel="stylesheet" />
    <link href="<?php echo $base_url ?>assets/css/style.min.css" rel="stylesheet" />
    <link href="<?php echo $base_url ?>assets/css/style-responsive.min.css" rel="stylesheet" />
    <link href="<?php echo $base_url ?>assets/css/theme/default.css" rel="stylesheet" id="theme" />
    <!-- ================== END BASE CSS STYLE ================== -->
    
    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link href="<?php echo $base_url ?>assets/plugins/jquery-jvectormap/jquery-jvectormap.css" rel="stylesheet" />
    <link href="<?php echo $base_url ?>assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
    <!--<link href="<?php echo $base_url ?>assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />-->
    <!-- ================== END PAGE LEVEL STYLE ================== -->

    <!-- ================== BEGIN PAGE DATATABLES STYLE ================== -->
    <link href="<?php echo $base_url ?>assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo $base_url ?>assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
    <!-- ================== END PAGE DATATABLES STYLE ================== -->
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="<?php echo $base_url ?>assets/plugins/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->
</head>
<body>
    <!-- begin #page-loader -->
    <div id="page-loader" class="fade in"><span class="spinner"></span></div>
    <!-- end #page-loader -->
    
    <!-- begin #page-container -->
    <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
        <!-- begin #header -->
        <div id="header" class="header navbar navbar-default navbar-fixed-top">
            <!-- begin container-fluid -->
            <div class="container-fluid">
                <!-- begin mobile sidebar expand / collapse button -->
                <div class="navbar-header">
                    <a href="index.html" class="navbar-brand"><img style="margin-top: -10px;" 
             src="<?php echo $base_url ?>assets/logo.png"> </a>
                    <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- end mobile sidebar expand / collapse button -->
                
                <!-- begin header navigation right -->
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <!--<form class="navbar-form full-width">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter keyword" />
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </div>
                        </form>-->
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
                            <i class="fa fa-bell-o"></i>
                            <span class="label">1</span>
                        </a>
                        <ul class="dropdown-menu media-list pull-right animated fadeInDown">
                            <li class="dropdown-header">Notifications (1)</li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><i class="fa fa-bug media-object bg-red"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Server Error Reports</h6>
                                        <div class="text-muted f-s-11">3 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer text-center">
                                <a href="javascript:;">View more</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown navbar-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo $base_url ?>assets/img/user-.jpg" alt="" /> 
                            <span class="hidden-xs"></span> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu animated fadeInLeft">
                            <li class="arrow"></li>
                            <li><a href="javascript:;">Edit Profile</a></li>
                            <li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
                            <li><a href="?module=Edit-Password">Edit Password</a></li>
                            <li class="divider"></li>
                            <li><a href="logout.php" OnClick="return confirm('Anda yakin ingin keluar aplikasi!');">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- end header navigation right -->
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end #header -->
        
        <!-- begin #sidebar -->
        <div id="sidebar" class="sidebar">
            <!-- begin sidebar scrollbar -->
            <div data-scrollbar="true" data-height="100%">
                <!-- begin sidebar user -->
                <ul class="nav">
                    <li class="nav-profile">
                        <div class="image">
                            <a href="javascript:;"><img src="<?php echo $base_url ?>assets/img/user-.jpg" alt="" /></a>
                        </div>
                        <div class="info">
                            <?php echo $_SESSION['nama_lengkap']  ?>
                            <small><?php echo $_SESSION['level']  ?></small>
                        </div>
                    </li>
                </ul>
                <!-- end sidebar user -->
                <!-- begin sidebar nav -->
                <ul class="nav">
                    <?php include "sidebar_menu.php"; ?>
                </ul>
                <!-- end sidebar nav -->
            </div>
            <!-- end sidebar scrollbar -->
        </div>
        <div class="sidebar-bg"></div>
        <!-- end #sidebar -->
        
        <!-- begin #content -->
            <?php include "load_file.php";?>
    
        <!-- end #content -->

        <!-- begin #footer -->
        <div id="footer" class="footer">
            &copy; 2019 This system managed by - IT Departement
        </div>
        <!-- end #footer -->
        
      
        
        <!-- begin scroll to top btn -->
        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        <!-- end scroll to top btn -->
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
    <!--<script src="<?php echo $base_url ?>assets/plugins/gritter/js/jquery.gritter.js"></script>-->
    <script src="<?php echo $base_url ?>assets/plugins/flot/jquery.flot.min.js"></script>
    <script src="<?php echo $base_url ?>assets/plugins/flot/jquery.flot.time.min.js"></script>
    <script src="<?php echo $base_url ?>assets/plugins/flot/jquery.flot.resize.min.js"></script>
    <script src="<?php echo $base_url ?>assets/plugins/flot/jquery.flot.pie.min.js"></script>
    <script src="<?php echo $base_url ?>assets/plugins/sparkline/jquery.sparkline.js"></script>
    <script src="<?php echo $base_url ?>assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
    <script src="<?php echo $base_url ?>assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?php echo $base_url ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo $base_url ?>assets/js/dashboard.min.js"></script>
    <script src="<?php echo $base_url ?>assets/js/apps.min.js"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->

    <!-- ================== BEGIN PAGE DATATABALES JS ================== -->
    <script src="<?php echo $base_url ?>assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
    <script src="<?php echo $base_url ?>assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo $base_url ?>assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo $base_url ?>assets/js/table-manage-default.demo.min.js"></script>
    <script src="<?php echo $base_url ?>assets/js/apps.min.js"></script>
    <!-- ================== END PAGE DATATABALES JS ================== -->
    

    <script>
        $(document).ready(function() {
            App.init();
            Dashboard.init();
            TableManageDefault.init();
        });
    </script>
<!--<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53034621-1', 'auto');
  ga('send', 'pageview');

</script>-->
</body>
</html>
