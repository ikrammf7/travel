<!DOCTYPE html>
<html lang="id">
<!-- Mirrored from techydevs.com/demos/trizen/html/admin-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Feb 2024 01:08:18 GMT -->

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="TechyDevs" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Travel - Admin</title>
    <!-- Favicon -->
    <link rel="icon" href="../../images/favicon.png" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap"
        rel="stylesheet" />

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../css/select2-bootstrap-5-theme.min.css" />
    <link rel="stylesheet" href="../../css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="../../css/select2.min.css" />
    <link rel="stylesheet" href="../../css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="../../css/line-awesome.css" />
    <link rel="stylesheet" href="../../css/owl.carousel.min.css" />
    <link rel="stylesheet" href="../../css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="../../css/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="../../css/daterangepicker.css" />
    <link rel="stylesheet" href="../../css/animate.min.css" />
    <link rel="stylesheet" href="../../css/animated-headline.css" />
    <link rel="stylesheet" href="../../css/jquery-ui.css" />
    <link rel="stylesheet" href="../../css/flag-icon.min.css" />
    <link rel="stylesheet" href="../../css/style.css" />
</head>

<body class="section-bg">
    <!-- ================================
       START USER CANVAS MENU
================================= -->
    <div class="user-canvas-container">
        <div class="side-menu-close">
            <i class="la la-times"></i>
        </div>
        <!-- end menu-toggler -->
        <div class="user-action-wrap user-sidebar-panel my-3">
            <div class="notification-item">
                <div class="dropdown-item">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-sm flex-shrink-0 mr-2">
                            <img src="../../images/team8.jpg" alt="team-img" />
                        </div>
                        <span class="font-size-14 font-weight-bold">Admin</span>
                    </div>
                </div>
                <div class="list-group drop-reveal-list user-drop-reveal-list">
                    <a href="../../views/admin/profile.php" class="list-group-item list-group-item-action">
                        <div class="msg-body">
                            <div class="msg-content">
                                <h3 class="title">
                                    <i class="la la-user mr-2"></i>Profil
                                </h3>
                            </div>
                        </div>
                        <!-- end msg-body -->
                    </a>
                    <div class="section-block"></div>
                    <a href="index.html" class="list-group-item list-group-item-action">
                        <div class="msg-body">
                            <div class="msg-content">
                                <h3 class="title">
                                    <i class="la la-power-off mr-2"></i>Keluar
                                </h3>
                            </div>
                        </div>
                        <!-- end msg-body -->
                    </a>
                </div>
            </div>
            <!-- end notification-item -->
        </div>
    </div>
    <!-- end user-canvas-container -->
    <section class="dashboard-area">
        <div class="dashboard-nav dashboard--nav">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-wrapper">
                            <div class="logo mr-5">
                                <a href="index.html"><img src="../../images/logo2.png" alt="logo" /></a>
                                <div class="menu-toggler">
                                    <i class="la la-bars"></i>
                                    <i class="la la-times"></i>
                                </div>
                                <!-- end menu-toggler -->
                                <div class="user-menu-open">
                                    <i class="la la-user"></i>
                                </div>
                                <!-- end user-menu-open -->
                            </div>
                            <div class="dashboard-search-box">
                                <div class="contact-form-action">
                                    <form action="#">
                                        <div class="form-group mb-0">
                                            <input class="form-control" type="text" name="text" placeholder="Cari" />
                                            <button class="search-btn">
                                                <i class="la la-search"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="nav-btn ml-auto">
                                <div class="notification-wrap d-flex align-items-center">
                                    <div class="notification-item">
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" id="userDropdownMenu"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-sm flex-shrink-0 mr-2">
                                                        <img src="../../images/team8.jpg" alt="team-img" />
                                                    </div>
                                                    <span class="font-size-14 font-weight-bold">Admin</span>
                                                </div>
                                            </a>
                                            <div
                                                class="dropdown-menu dropdown-reveal dropdown-menu-md dropdown-menu-right">
                                                <div class="dropdown-item drop-reveal-header user-reveal-header">
                                                    <h6 class="title text-uppercase">Selamat datang!</h6>
                                                </div>
                                                <div class="list-group drop-reveal-list user-drop-reveal-list">
                                                    <a href="../../views/admin/profile.php"
                                                        class="list-group-item list-group-item-action">
                                                        <div class="msg-body">
                                                            <div class="msg-content">
                                                                <h3 class="title">
                                                                    <i class="la la-user mr-2"></i>Profil
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <!-- end msg-body -->
                                                    </a>
                                                    <div class="section-block"></div>
                                                    <a href="index.html" class="list-group-item list-group-item-action">
                                                        <div class="msg-body">
                                                            <div class="msg-content">
                                                                <h3 class="title">
                                                                    <i class="la la-power-off mr-2"></i>Keluar
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <!-- end msg-body -->
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end dropdown-menu -->
                                        </div>
                                    </div>
                                    <!-- end notification-item -->
                                </div>
                            </div>
                            <!-- end nav-btn -->
                        </div>
                        <!-- end menu-wrapper -->
                    </div>
                    <!-- end col-lg-12 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end dashboard-nav -->
        <!-- ================================
       END USER CANVAS MENU
================================= -->