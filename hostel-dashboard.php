<?php include('header-hostel.php') ?>

<section>
    <div class="bannerimg cover-image bg-background3 sptb-2 bg-white" data-bs-image-src="assets/images/banners/banner2.jpg">
        <div class="header-text mb-0">
            <div class="container">
                <div class="text-center text-white ">
                    <h1 class="">My Dashboard</h1>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="hostel-dashboard.php">Home</a></li>
                        <li class="breadcrumb-item  text-white">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sptb  bg-white">
    <div class="container ">
        <div class="row ">
            <?php include('hostel-dashmenu.php') ?>

            <div class="col-xl-9 col-lg-12 col-md-12">
                <div class="card ">
                    <div class="card-header bg-primary">
                        <h3 class="card-title text-white fs-5 py-1">My Dashboard</h3>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
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
                        <div class="col-lg-6 col-md-12">
                            <div class="card indiv-card shadow-lg">
                                <div class="card-header bg-secondary">
                                    <h3 class="card-title fw-bold">Rating And Reviews</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-4">
                                                <p class="mb-2">
                                                    <span class="fs-14 ms-2">Today</span>
                                                </p>
                                                <div class="progress progress-md mb-4 h-4">
                                                    <div class="progress-bar bg-info w-100">9,232</div>
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <p class="mb-2">
                                                    <span class="fs-14 ms-2">This Week</span>
                                                </p>
                                                <div class="progress progress-md mb-4 h-4">
                                                    <div class="progress-bar bg-success w-80">8,125</div>
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <p class="mb-2">
                                                    <span class="fs-14 ms-2">This Month</span>
                                                </p>
                                                <div class="progress progress-md mb-4 h-4">
                                                    <div class="progress-bar bg-info w-60">6,263</div>
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <p class="mb-2">
                                                    <span class="fs-14 ms-2">Remaining</span>
                                                </p>
                                                <div class="progress progress-md mb-4 h-4">
                                                    <div class="progress-bar bg-success w-30">3,463</div>
                                                </div>
                                            </div>
                                            <div class="mb-5">
                                                <p class="mb-2">
                                                    <span class="fs-14 ms-2">Overtime</span>
                                                </p>
                                                <div class="progress progress-md mb-4 h-4">
                                                    <div class="progress-bar bg-info w-20">1,456</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="manged-ad table-responsive userprof-tab shadow-lg indiv-card">
                                <table class="table table-bordered table-hover mb-0 text-nowrap shadow-lg">
                                    <thead class="bg-secondary text-center ">
                                        <td class="p-1">
                                            <h6 class="fw-bold fs-6">Date</h6>
                                        </td>
                                        <td class="p-1">
                                            <h6 class="fw-bold fs-6">Punch In</h6>
                                        </td>
                                        <td class="p-1">
                                            <h6 class="fw-bold fs-6">Punch Out</h6>
                                        </td>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">

                                            <td>
                                                <h6 class=" fs-6">19 June 2024</h6>
                                            </td>
                                            <td>
                                                <h6 class=" fs-6">9.00 AM</h6>
                                            </td>
                                            <td>
                                                <h6 class=" fs-6">9.00 PM</h6>
                                            </td>

                                        </tr>
                                        <tr class="text-center">

                                            <td>
                                                <h6 class=" fs-6">19 June 2024</h6>
                                            </td>
                                            <td>
                                                <h6 class=" fs-6">9.00 AM</h6>
                                            </td>
                                            <td>
                                                <h6 class=" fs-6">9.00 PM</h6>
                                            </td>

                                        </tr>
                                        <tr class="text-center">

                                            <td>
                                                <h6 class=" fs-6">19 June 2024</h6>
                                            </td>
                                            <td>
                                                <h6 class=" fs-6">9.00 AM</h6>
                                            </td>
                                            <td>
                                                <h6 class=" fs-6">9.00 PM</h6>
                                            </td>

                                        </tr>
                                        <tr class="text-center">

                                            <td>
                                                <h6 class=" fs-6">19 June 2024</h6>
                                            </td>
                                            <td>
                                                <h6 class=" fs-6">9.00 AM</h6>
                                            </td>
                                            <td>
                                                <h6 class=" fs-6">9.00 PM</h6>
                                            </td>

                                        </tr>
                                        <tr class="text-center">

                                            <td>
                                                <h6 class=" fs-6">19 June 2024</h6>
                                            </td>
                                            <td>
                                                <h6 class=" fs-6">9.00 AM</h6>
                                            </td>
                                            <td>
                                                <h6 class=" fs-6">9.00 PM</h6>
                                            </td>

                                        </tr>
                                        <tr class="text-center">

                                            <td>
                                                <h6 class=" fs-6">19 June 2024</h6>
                                            </td>
                                            <td>
                                                <h6 class=" fs-6">9.00 AM</h6>
                                            </td>
                                            <td>
                                                <h6 class=" fs-6">9.00 PM</h6>
                                            </td>

                                        </tr>
                                        <tr class="text-center">

                                            <td>
                                                <h6 class=" fs-6">19 June 2024</h6>
                                            </td>
                                            <td>
                                                <h6 class=" fs-6">9.00 AM</h6>
                                            </td>
                                            <td>
                                                <h6 class=" fs-6">9.00 PM</h6>
                                            </td>

                                        </tr>
                                        <tr class="text-center">

                                            <td>
                                                <h6 class=" fs-6">19 June 2024</h6>
                                            </td>
                                            <td>
                                                <h6 class=" fs-6">9.00 AM</h6>
                                            </td>
                                            <td>
                                                <h6 class=" fs-6">9.00 PM</h6>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card shadow-lg indiv-card ">
                                <div class="card-header bg-secondary ">
                                    <h3 class="card-title fw-bold">Notifications</h3>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="vertical-scroll">
                                        <li class="item2">
                                            <div class="footerimg d-flex mt-0 mb-0">
                                                <div class="d-flex footerimg-l mb-0">
                                                    <img src="assets/images/faces/female/1.jpg" alt="image" class="avatar brround  me-2" loading="lazy">
                                                    <a href="#" class="time-title p-0 leading-normal mt-2">Boris
                                                        Nash <i class="icon icon-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title data-bs-original-title="verified"></i></a>
                                                </div>
                                                <div class="mt-2 footerimg-r ms-auto">
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title data-bs-original-title="Articles"><span class="text-muted me-2"><i class="fa fa-comment-o"></i>
                                                            16</span></a>
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title data-bs-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i>
                                                            36</span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item2">
                                            <div class="footerimg d-flex mt-0 mb-0">
                                                <div class="d-flex footerimg-l mb-0">
                                                    <img src="assets/images/faces/female/2.jpg" alt="image" class="avatar brround  me-2" loading="lazy">
                                                    <a href="#" class="time-title p-0 leading-normal mt-2">Lorean
                                                        Mccants <i class="icon icon-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title data-bs-original-title="verified"></i></a>
                                                </div>
                                                <div class="mt-2 footerimg-r ms-auto">
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title data-bs-original-title="Articles"><span class="text-muted me-2"><i class="fa fa-comment-o"></i>
                                                            43</span></a>
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title data-bs-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i>
                                                            23</span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item2">
                                            <div class="footerimg d-flex mt-0 mb-0">
                                                <div class="d-flex footerimg-l mb-0">
                                                    <img src="assets/images/faces/male/3.jpg" alt="image" class="avatar brround  me-2" loading="lazy">
                                                    <a href="#" class="time-title p-0 leading-normal mt-2">Dewitt
                                                        Hennessey <i class="icon icon-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title data-bs-original-title="verified"></i></a>
                                                </div>
                                                <div class="mt-2 footerimg-r ms-auto">
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title data-bs-original-title="Articles"><span class="text-muted me-2"><i class="fa fa-comment-o"></i>
                                                            34</span></a>
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title data-bs-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i>
                                                            12</span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item2">
                                            <div class="footerimg d-flex mt-0 mb-0">
                                                <div class="d-flex footerimg-l mb-0">
                                                    <img src="assets/images/faces/male/1.jpg" alt="image" class="avatar brround  me-2" loading="lazy">
                                                    <a href="#" class="time-title p-0 leading-normal mt-2">Archie
                                                        Overturf <i class="icon icon-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title data-bs-original-title="verified"></i></a>
                                                </div>
                                                <div class="mt-2 footerimg-r ms-auto">
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title data-bs-original-title="Articles"><span class="text-muted me-2"><i class="fa fa-comment-o"></i>
                                                            12</span></a>
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title data-bs-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i>
                                                            32</span></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="vertical-scroll ">
                                        <li class="item2">
                                            <div class="footerimg d-flex mt-0 mb-0">
                                                <div class="d-flex footerimg-l mb-0">
                                                    <img src="assets/images/faces/female/1.jpg" alt="image" class="avatar brround  me-2" loading="lazy">
                                                    <a href="#" class="time-title p-0 leading-normal mt-2">Boris
                                                        Nash <i class="icon icon-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title data-bs-original-title="verified"></i></a>
                                                </div>
                                                <div class="mt-2 footerimg-r ms-auto">
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title data-bs-original-title="Articles"><span class="text-muted me-2"><i class="fa fa-comment-o"></i>
                                                            16</span></a>
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title data-bs-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i>
                                                            36</span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item2">
                                            <div class="footerimg d-flex mt-0 mb-0">
                                                <div class="d-flex footerimg-l mb-0">
                                                    <img src="assets/images/faces/female/2.jpg" alt="image" class="avatar brround  me-2" loading="lazy">
                                                    <a href="#" class="time-title p-0 leading-normal mt-2">Lorean
                                                        Mccants <i class="icon icon-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title data-bs-original-title="verified"></i></a>
                                                </div>
                                                <div class="mt-2 footerimg-r ms-auto">
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title data-bs-original-title="Articles"><span class="text-muted me-2"><i class="fa fa-comment-o"></i>
                                                            43</span></a>
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title data-bs-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i>
                                                            23</span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item2">
                                            <div class="footerimg d-flex mt-0 mb-0">
                                                <div class="d-flex footerimg-l mb-0">
                                                    <img src="assets/images/faces/male/3.jpg" alt="image" class="avatar brround  me-2" loading="lazy">
                                                    <a href="#" class="time-title p-0 leading-normal mt-2">Dewitt
                                                        Hennessey <i class="icon icon-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title data-bs-original-title="verified"></i></a>
                                                </div>
                                                <div class="mt-2 footerimg-r ms-auto">
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title data-bs-original-title="Articles"><span class="text-muted me-2"><i class="fa fa-comment-o"></i>
                                                            34</span></a>
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title data-bs-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i>
                                                            12</span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item2">
                                            <div class="footerimg d-flex mt-0 mb-0">
                                                <div class="d-flex footerimg-l mb-0">
                                                    <img src="assets/images/faces/male/1.jpg" alt="image" class="avatar brround  me-2" loading="lazy">
                                                    <a href="#" class="time-title p-0 leading-normal mt-2">Archie
                                                        Overturf <i class="icon icon-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title data-bs-original-title="verified"></i></a>
                                                </div>
                                                <div class="mt-2 footerimg-r ms-auto">
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title data-bs-original-title="Articles"><span class="text-muted me-2"><i class="fa fa-comment-o"></i>
                                                            12</span></a>
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title data-bs-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i>
                                                            32</span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item2">
                                            <div class="footerimg d-flex mt-0 mb-0">
                                                <div class="d-flex footerimg-l mb-0">
                                                    <img src="assets/images/faces/male/1.jpg" alt="image" class="avatar brround  me-2" loading="lazy">
                                                    <a href="#" class="time-title p-0 leading-normal mt-2">Archie
                                                        Overturf <i class="icon icon-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title data-bs-original-title="verified"></i></a>
                                                </div>
                                                <div class="mt-2 footerimg-r ms-auto">
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title data-bs-original-title="Articles"><span class="text-muted me-2"><i class="fa fa-comment-o"></i>
                                                            12</span></a>
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title data-bs-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i>
                                                            32</span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item2">
                                            <div class="footerimg d-flex mt-0 mb-0">
                                                <div class="d-flex footerimg-l mb-0">
                                                    <img src="assets/images/faces/male/1.jpg" alt="image" class="avatar brround  me-2" loading="lazy">
                                                    <a href="#" class="time-title p-0 leading-normal mt-2">Archie
                                                        Overturf <i class="icon icon-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title data-bs-original-title="verified"></i></a>
                                                </div>
                                                <div class="mt-2 footerimg-r ms-auto">
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title data-bs-original-title="Articles"><span class="text-muted me-2"><i class="fa fa-comment-o"></i>
                                                            12</span></a>
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title data-bs-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i>
                                                            32</span></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 item-all-cat  ">
                        <div class="item-all-card text-dark text-center card mb-5 bg-dash shadow">
                            <a href="hostel-studentlist.php"></a>
                            <div class="iteam-all-icon">
                                <img src="assets/images/media/5.png" class="imag-service" alt="Sales">
                                <h4 class="text-body font-weight-bold mb-2 mt-2">Student List
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 item-all-cat  ">
                        <div class="item-all-card text-dark text-center card mb-5 bg-dash shadow">
                            <a href="hostel-attendlist.php"></a>
                            <div class="iteam-all-icon">
                                <img src="assets/images/media/9.png" class="imag-service" alt="Sales">
                                <h4 class="text-body font-weight-bold mb-2 mt-2">Attendance</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 item-all-cat  ">
                        <div class="item-all-card text-dark text-center card mb-5 bg-dash shadow">
                            <a href="hostel-leavelist.php"></a>
                            <div class="iteam-all-icon">
                                <img src="assets/images/media/9.png" class="imag-service" alt="Sales">
                                <h4 class="text-body font-weight-bold mb-2 mt-2">Hosteller Leave</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 item-all-cat  ">
                        <div class="item-all-card text-dark text-center card mb-5 bg-dash shadow">
                            <a href="hostel-msplist.php"></a>
                            <div class="iteam-all-icon">
                                <img src="assets/images/media/5.png" class="imag-service" alt="Sales">
                                <h4 class="text-body font-weight-bold mb-2 mt-2">Student MSP
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 item-all-cat  ">
                        <div class="item-all-card text-dark text-center card mb-5 bg-dash shadow">
                            <a href="hostel-verification.php"></a>
                            <div class="iteam-all-icon">
                                <img src="assets/images/media/11.png" class="imag-service" alt="Sales">
                                <h4 class="text-body font-weight-bold mb-2 mt-2">Verifications</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 item-all-cat  ">
                        <div class="item-all-card text-dark text-center card mb-5 bg-dash shadow">
                            <a href="hostel-payments.php"></a>
                            <div class="iteam-all-icon">
                                <img src="assets/images/media/9.png" class="imag-service" alt="Sales">
                                <h4 class="text-body font-weight-bold mb-2 mt-2">My Payments</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include('footer.php') ?>