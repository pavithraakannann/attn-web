<?php include('header-parent.php') ?>

<section>
    <div class="bannerimg cover-image bg-background3 sptb-2 bg-white" data-bs-image-src="assets/images/banners/banner2.jpg">
        <div class="header-text mb-0">
            <div class="container">
                <div class="text-center text-white ">
                    <h1 class="">Student Dashboard</h1>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="parent-dashboard.php">Home</a></li>
                        <li class="breadcrumb-item  text-white">Student Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sptb  bg-white">
    <div class="container ">
        <div class="row ">
            <?php include('parent-dashboard-menu.php') ?>
            <div class="col-xl-9 col-lg-12 col-md-12">
                <div class="card ">
                    <div class="card-header bg-primary">
                        <h3 class="card-title text-white fs-5 py-1">My Dashboard</h3>
                    </div>
                </div>

                <div class="row my-2">
                    <div class="col-md-6">
                        <div class="card shadow-lg indiv-card">
                            <div class="card-header bg-secondary py-1">
                                <h3 class="card-title">Attendance Monitoring</h3>
                                <div class="ms-auto">
                                    <div class="dropdown ">
                                        <button class="btn btn-primary px-5 py-0 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            Course
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="#">Maths</a></li>
                                            <li><a class="dropdown-item" href="#">English</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <?php include('calender.php') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card shadow-lg">
                            <div class="card-header bg-secondary">
                                <h3 class="card-title">My Classes</h3>
                            </div>
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class=" col-md-12">
                                        <div class="card card-aside shadow-lg">
                                            <div class="card-body ">
                                                <div class="card-item d-flex">
                                                    <div class="bg-transparent text-success text-start">
                                                        <div class="card-aside-img">
                                                            <a href="student-attendancelist.php"></a>
                                                            <img src="assets/images/media/5.png" alt="img">
                                                        </div>
                                                    </div>
                                                    <div class="ms-2">
                                                        <h6 class="font-weight-bold mt-2">Mathematics <a href="#" class="btn-primary px-3 rounded py- mx-5">Active</a>
                                                        </h6>
                                                        <h6 class="font-weight-bold mt-2">Timings : 11.30-12.30</h6>
                                                        <h6 class="font-weight-bold mt-2">CBSE</h6>
                                                        <h6 class="font-weight-bold mt-2">12th std</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-md-12">
                                        <div class="card card-aside shadow-lg">
                                            <div class="card-body ">
                                                <div class="card-item d-flex">
                                                    <div class="bg-transparent text-success text-start">
                                                        <div class="card-aside-img">
                                                            <a href="student-attendancelist.php"></a>
                                                            <img src="assets/images/media/5.png" alt="img">
                                                        </div>
                                                    </div>
                                                    <div class="ms-2">
                                                        <h6 class="font-weight-bold mt-2">Mathematics <a href="#" class="btn-primary px-3 rounded py- mx-5">Active</a>
                                                        </h6>
                                                        <h6 class="font-weight-bold mt-2">Timings : 11.30-12.30</h6>
                                                        <h6 class="font-weight-bold mt-2">CBSE</h6>
                                                        <h6 class="font-weight-bold mt-2">12th std</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="card indiv-card shadow-lg">
                            <div class="card-header bg-secondary  ">
                                <h3 class="card-title fw-bold">Attendance Chart</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group month">
                                            <label class="form-label">From Month</label>
                                            <input type="month" class="form-control " name="bdaymonth">
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group month">
                                            <label class="form-label">End Month</label>
                                            <input type="month" class="form-control " name="bdaymonth">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <figure class="pie-chart">
                                            <div class="inner">

                                            </div>
                                        </figure>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="index-chart mt-5">
                                            <div class="option">
                                                <div class="colour-box c1"></div>
                                                <div class="fs-6">Present (35%)</div>
                                            </div>
                                            <div class="option">
                                                <div class="colour-box c2"></div>
                                                <div class="fs-6">Leave (15%)</div>
                                            </div>


                                            <div class="option">
                                                <div class="colour-box c3"></div>
                                                <div class="fs-6">Absent(14%)</div>
                                            </div>
                                            <div class="option">
                                                <div class="colour-box c4"></div>
                                                <div class="fs-6">Holiday(14%)</div>
                                            </div>
                                            <div class="option">
                                                <div class="colour-box c5"></div>
                                                <div class="miss-punch fs-6">Miss Punch(14%)</div>
                                            </div>
                                            <div class="option">
                                                <div class="colour-box c6"></div>
                                                <div class="fs-6">Modified</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6">
                        <div class="manged-ad table-responsive userprof-tab shadow-lg indiv-card">
                            <div class="card-header bg-secondary">
                                <h3 class="card-title ">June-2024</h3>
                                <div class="ms-auto">
                                    <h3 class="card-title ">Total Days-30</h3>
                                </div>

                            </div>
                            <table class="table table-bordered table-hover mb-0 text-nowrap">

                                <tbody>
                                    <tr class="text-start">
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc  p-0 ">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">Present
                                                            </h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc  p-0 ">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">20</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-start">
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc  p-0 ">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">Leave
                                                            </h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc  p-0 ">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">1</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-start">
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc  p-0 ">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">Absent
                                                            </h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc  p-0 ">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">1</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-start">
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc  p-0 ">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">Holiday
                                                            </h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc  p-0 ">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">6</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-start">
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc  p-0 ">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">Miss Punch
                                                            </h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc  p-0 ">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">2</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-start">
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc  p-0 ">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">Leave Approved Pending</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc  p-0 ">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">0</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-start">
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc  p-0 ">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">Modified</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc  p-0 ">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">0</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 item-all-cat  ">
                        <div class="item-all-card text-dark text-center card mb-5 bg-dash shadow">
                            <a href="parent-gpstracking.php"></a>
                            <div class="iteam-all-icon">
                                <img src="assets/images/icons/gps-svgrepo-com.svg" class="imag-service" alt="Sales">
                                <h4 class="text-body font-weight-bold mb-2 mt-2">GPS Tracking</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 item-all-cat  ">
                        <div class="item-all-card text-dark text-center card mb-5 bg-dash shadow">
                            <a href="parent-attendance.php"></a>
                            <div class="iteam-all-icon">
                                <img src="assets/images/icons/attendance.svg" class="imag-service" alt="Sales">
                                <h4 class="text-body font-weight-bold mb-2 mt-2">Attendance</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 item-all-cat  ">
                        <div class="item-all-card text-dark text-center card mb-5 bg-dash shadow">
                            <a href="parent-feesform.php"></a>
                            <div class="iteam-all-icon">
                                <img src="assets/images/icons/fees.svg" class="imag-service" alt="Sales">
                                <h4 class="text-body font-weight-bold mb-2 mt-2">Fees
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 item-all-cat  ">
                        <div class="item-all-card text-dark text-center card mb-5 bg-dash shadow">
                            <a href="parent-leavelist.php"></a>
                            <div class="iteam-all-icon">
                                <img src="assets/images/icons/leave.svg" class="imag-service" alt="Sales">
                                <h4 class="text-body font-weight-bold mb-2 mt-2">Leave</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 item-all-cat  ">
                        <div class="item-all-card text-dark text-center card mb-5 bg-dash shadow">
                            <a href="parent-msplist.php"></a>
                            <div class="iteam-all-icon">
                                <img src="assets/images/icons/Miss Punch.svg" class="imag-service" alt="Sales">
                                <h4 class="text-body font-weight-bold mb-2 mt-2">Miss Punch</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 item-all-cat  ">
                        <div class="item-all-card text-dark text-center card mb-5 bg-dash shadow">
                            <a href="parent-enrollmentlist.php"></a>
                            <div class="iteam-all-icon">
                                <img src="assets/images/icons/enrollment.svg" class="imag-service" alt="Sales">
                                <h4 class="text-body font-weight-bold mb-2 mt-2">Enrollments</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php') ?>