<!doctype html>

<html class="no-js" lang="en">

<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="e-attendance" name="description">
    <meta content="" name="author">
    <meta name="keywords" content="hovee-atten-web" />

    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

    <!-- Title -->
    <title>hovee-Attendance</title>

    <link rel="stylesheet" href="assets/scss/layout/_horizontal.scss">
    <!--Gallery-Image-Zoom-->
    <link href="assets/plugins/gallery-image-zoom/RV-gallery.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/scss/util/_display.scss">
    <!--Font icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="assets/scss/custom/_custom-styles.scss">
    <!-- Countdown css-->
    <link href="assets/plugins/count-down/flipclock.css" rel="stylesheet" />

    <!-- Switcher css -->
    <link href="assets/switcher/css/switcher.css" rel="stylesheet" id="switcher-css" type="text/css" media="all" />

    <!-- video css-->
    <link href="assets/plugins/video/insideElementDemo.css" rel="stylesheet" />
    <!-- Date Picker Plugin -->
    <link href="assets/plugins/date-picker/spectrum.css" rel="stylesheet" />

    <!-- File Uploads css -->
    <link href="assets/plugins/fancyuploder/fancy_fileupload.css" rel="stylesheet" />
    <link href="assets/plugins/jquery-uislider/jquery-ui.css" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link id="style" href="assets/plugins/bootstrap-5/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom scroll bar css-->
    <link href="assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" media="screen" />
    <!-- Font-awesome  Css -->
    <link href="assets/css/icons.css" rel="stylesheet" />

    <!--Select2 Plugin -->
    <link href="assets/plugins/select2/select2.min.css" rel="stylesheet" />

    <!-- P-scroll bar css-->
    <link href="assets/plugins/pscrollbar/perfect-scrollbar.css" rel="stylesheet" />
    <!-- p-scroll bar css-->
    <link href="assets/plugins/pscrollbar/pscrollbar.css" rel="stylesheet" />

    <!-- Owl Theme css-->
    <link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />

    <!-- Dashboard Css -->
    <link href="assets/css/style.css" rel="stylesheet" />


</head>

<body class="main-body">

    <div id="global-loader">
        <img src="assets/images/Double Ring@1x-1.0s-200px-200px (1).gif" class="loader-img" alt>
    </div>

    <div class="header-main">

        <!-- Duplex Houses Header -->
        <div class="sticky">
            <div class="horizontal-header clearfix ">
                <div class="container">
                    <a id="horizontal-navtoggle" class="animated-arrow"><span></span></a>
                    <span class="smllogo">
                        <a href="hostel-dashboard.php">
                            <img src="assets/images/brand/hovee_attendance_1.svg" class="mobile-light-logo" width="120" alt />
                            <img src="assets/images/brand/hovee_attendance_1.svg" class="mobile-dark-logo" width="120" alt />
                        </a>
                    </span>
                    <a href="tel:245-6325-3256" class="callusbtn"><i class="fa fa-phone" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <!-- /Duplex Houses Header -->

        <div class="horizontal-main bg-dark-transparent clearfix">
            <div class="horizontal-mainwrapper container clearfix">
                <div class="desktoplogo">
                    <a href="hostel-dashboard.php"><img src="assets/images/brand/hovee_attendance_1.svg" alt></a>
                </div>
                <div class="desktoplogo-1">
                    <a href="hostel-dashboard.php"><img src="assets/images/brand/hovee_attendance_1.svg" alt></a>
                </div>
                <!--Nav-->
                <nav class="horizontalMenu clearfix d-md-flex">
                    <ul class="horizontalMenu-list">
                        <li aria-haspopup="true"><a href="#" class=""><i class="fa fa-user-circle-o px-1"></i> My Account</a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true"><a href="hostel-dashboard.php">My Dashboard</a></li>
                                <li aria-haspopup="true"><a href="hostel-edit-profile.php">View Profile</a></li>
                                <li aria-haspopup="true"><a href="hostel-payments.php">Payments</a></li>
                                <li aria-haspopup="true"><a href="hostel-notification.php">Notifications</a></li>
                            </ul>
                        </li>
                        <li aria-haspopup="true"><a href="hostel-verification.php"><i class="fa fa-th px-1"></i>Verifications</a></li>
                        <li aria-haspopup="true"><a href="#"><i class="fa fa-id-card-o px-1"></i>Enrollments</a></li>
                        <li aria-haspopup="true"><a href="hostel-attendlist.php"><i class="fa fa-book px-1"></i>Attendance</a></li>
                        <li aria-haspopup="true"><a href="hostel-ratings.php"><i class="fa fa-star px-1"></i>
                                Ratings</a></li>
                        <li aria-haspopup="true"><a href="hostel-subscription.php"><i class="fa fa-credit-card "></i></a>
                        </li>
                        <li aria-haspopup="true"><a href="#" class="icon-font-bell"> <i class=" icon icon-bell text-dark" id="bellIcon"></i><span class="badge badge-4 rounded-circle text-center">5</span></a>

                            <div class="panel">
                                <div class="notification-panel" id="notificationPanel">
                                    <p class="text-start text-dark fw-bold ">Your Notifications</p>
                                    <ul>
                                        <li class="unread">
                                            <img src="https://i.pravatar.cc/40?img=8">
                                            <strong>Tene</strong> added your Pen <a href="#" class="text-primary">404
                                                Error Room</a> to their Collection
                                        </li>
                                        <li class="unread">
                                            <img src="https://i.pravatar.cc/40?img=11">
                                            <strong>Rufo</strong> and 11 others love your pen <a href="#" class="text-primary fs-9">Notification Icon</a>
                                        </li>
                                        <li class="read">
                                            <img src="https://i.pravatar.cc/40?img=3">
                                            <strong>teena</strong> added your Pen <a href="#" class="text-primary">404
                                                Error Room</a> to their Collection
                                        </li>
                                        <li class="unread">
                                            <img src="https://i.pravatar.cc/40?img=4">
                                            <strong>Rufo</strong> and 11 others love your pen <a href="#" class="text-primary fs-9">Notification Icon</a>
                                        </li>
                                        <li class="read">
                                            <img src="https://i.pravatar.cc/40?img=4">
                                            <strong>Rufo</strong> and 11 others love your pen <a href="#" class="text-primary fs-9">Notification Icon</a>
                                        </li>
                                        <li class="unread">
                                            <img src="https://i.pravatar.cc/40?img=4">
                                            <strong>Rufo</strong> and 11 others love your pen <a href="#" class="text-primary fs-9 ">Notification Icon</a>
                                        </li>

                                    </ul>
                                    <p class="text-end"><a href="hostel-notification.php" class=" text-primary">See more</a></p>

                                </div>
                            </div>
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    var bellIcon = document.getElementById("bellIcon");
                                    var notificationPanel = document.getElementById("notificationPanel");

                                    bellIcon.addEventListener("click", function() {
                                        notificationPanel.classList.toggle("show");
                                    });
                                });
                            </script>

                        </li>
                        <li aria-haspopup="true" class="d-lg-none mt-5 pb-5 mt-lg-0">
                            <span><a class="btn bg-secondary px-5 fw-bold text-white" href="login.php">Log out
                                </a></span>
                        </li>
                    </ul>
                    <ul class="mb-0">
                        <li aria-haspopup="true" class=" d-none d-lg-block top-postbtn">
                            <span><a class="btn bg-secondary px-5  rounded-pill text-white fw-bold" href="index.php">Log
                                    Out</a></span>
                        </li>
                    </ul>
                </nav>
                <!--Nav-->
            </div>
        </div>
    </div>