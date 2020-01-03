<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title') </title>
    <!-- Bootstrap -->
    <link href="adminStyle/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="adminStyle/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="adminStyle/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="adminStyle/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="adminStyle/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="adminStyle/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="adminStyle/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="adminStyle/build/css/custom.min.css" rel="stylesheet">
</head>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>后台管理!</span></a>
                </div>
                <div class="clearfix"></div>
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="adminStyle/images/img.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>管理员</span>
                        <h2>admin</h2>
                    </div>
                </div>
                <br/>
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-home"></i> 首页 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="index.html">菜单1</a></li>
                                    <li><a href="index2.html">菜单1</a></li>
                                    <li><a href="index3.html">菜单1</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    {{--分割菜单 --}}
                    <div class="menu_section">
                        <h3>分割菜单</h3>
                        <ul class="nav side-menu">
                            <li>
                                <a>
                                    <i class="fa fa-bug"></i> 菜单2
                                    <span class="fa fa-chevron-down"></span>
                                </a>
                                <ul class="nav child_menu">
                                    <li><a href="e_commerce.html">菜单2</a></li>
                                    <li><a href="projects.html">菜单2</a></li>
                                    <li><a href="project_detail.html">菜单2</a></li>
                                    <li><a href="contacts.html">菜单2</a></li>
                                    <li><a href="profile.html">菜单2</a></li>
                                </ul>
                            </li>


                            <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span
                                        class="label label-success pull-right">Coming Soon</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false">
                                <img src="adminStyle/images/img.jpg" alt="">admin
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;"> 我的信息</a></li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>消息</span>
                                    </a>
                                </li>
                                <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> 退出</a></li>
                            </ul>
                        </li>
                        {{--消息--}}
                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                               aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                <li>
                                    <a><span class="image"><img src="adminStyle/images/img.jpg"
                                                                alt="Profile Image"/></span><span>
                          <span>小米</span><span class="time">3 个小时前</span></span>
                                        <span class="message">
                          你好，你好，你好，你好，你好，你好，你好，你好，你好，你好，你好，你好，
                        </span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->
        <!-- page content -->
        <div class="right_col" role="main">
            <div style="height: 60px"></div>
            <div style="width: 100%">
                <div class="alert alert-danger" role="alert" style="width: 50%;">
                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                    <span class="sr-only">Error:</span>
                    Enter a valid email address
                </div>
            </div>
            {{--内容--}}
            @yield('content')
        </div>

        <footer>
            <div class="pull-right"></div>
            <div class="clearfix"></div>
        </footer>
    </div>
</div>
<!-- jQuery -->
<script src="adminStyle/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="adminStyle/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="adminStyle/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="adminStyle/vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="adminStyle/vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="adminStyle/vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="adminStyle/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="adminStyle/vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="adminStyle/vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="adminStyle/vendors/Flot/jquery.flot.js"></script>
<script src="adminStyle/vendors/Flot/jquery.flot.pie.js"></script>
<script src="adminStyle/vendors/Flot/jquery.flot.time.js"></script>
<script src="adminStyle/vendors/Flot/jquery.flot.stack.js"></script>
<script src="adminStyle/vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="adminStyle/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="adminStyle/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="adminStyle/vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="adminStyle/vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="adminStyle/vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="adminStyle/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="adminStyle/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="adminStyle/vendors/moment/min/moment.min.js"></script>
<script src="adminStyle/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- Custom Theme Scripts -->
<script src="adminStyle/build/js/custom.min.js"></script>
@yield('js')
</body>
</html>
