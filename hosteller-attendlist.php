<?php include('header-hosteller.php') ?>

<section>
    <div class="bannerimg cover-image bg-background3 sptb-2 bg-white" data-bs-image-src="assets/images/banners/banner2.jpg">
        <div class="header-text mb-0">
            <div class="container">
                <div class="text-center text-white ">
                    <h1 class="">Attendance List</h1>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="hosteller-dashboard.php">Home</a></li>
                        <li class="breadcrumb-item  text-white">Attendance</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sptb  bg-white">
    <div class="container ">
        <div class="row ">
            <?php include('hosteller-dashmenu.php') ?>
            <div class="col-xl-9 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="fw-bold text-white py-1">Attendance</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card shadow-lg indiv-card">
                            <div class="card-header bg-secondary py-1">
                                <h3 class="card-title">Attendance Monitoring</h3>
                                <div class="ms-auto">
                                    <div class="dropdown ">
                                        <button class="btn btn-primary px-5 py-0 dropdown-toggle" type="button"
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <div class="card indiv-card">
                            <div class="card-header bg-secondary ">
                                <h3 class="card-title">Attendance Chart</h3>
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
                                                <div>Present (35%)</div>
                                            </div>
                                            <div class="option">
                                                <div class="colour-box c2"></div>
                                                <div>Leave (15%)</div>
                                            </div>


                                            <div class="option">
                                                <div class="colour-box c3"></div>
                                                <div>Absent(14%)</div>
                                            </div>
                                            <div class="option">
                                                <div class="colour-box c4"></div>
                                                <div>Holiday(14%)</div>
                                            </div>
                                            <div class="option">
                                                <div class="colour-box c5"></div>
                                                <div class="miss-punch">Miss Punch(14%)</div>
                                            </div>
                                            <div class="option">
                                                <div class="colour-box c6"></div>
                                                <div>Modified</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="manged-ad table-responsive userprof-tab shadow-lg mb-5 indiv-card">
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
                                                            <h4 class="font-weight-semibold">Leave Approved Pending
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
                    <div class="col-md-6">
                        <div class="card shadow-lg indiv-card">
                            <div class="card-header bg-secondary">
                                <h3 class="card-title">Notifications</h3>
                            </div>
                            <div class="card-body p-0">
                                <ul class="vertical-scroll ">
                                    <li class="item2">
                                        <div class="footerimg d-flex mt-0 mb-0">
                                            <div class="d-flex footerimg-l mb-0">
                                                <img src="assets/images/faces/female/1.jpg" alt="image"
                                                    class="avatar brround  me-2" loading="lazy">
                                                <a href="#" class="time-title p-0 leading-normal mt-2">Boris
                                                    Nash <i class="icon icon-check text-success fs-12 ms-1"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title
                                                        data-bs-original-title="verified"></i></a>
                                            </div>
                                            <div class="mt-2 footerimg-r ms-auto">
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title
                                                    data-bs-original-title="Articles"><span class="text-muted me-2"><i
                                                            class="fa fa-comment-o"></i>
                                                        16</span></a>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title
                                                    data-bs-original-title="Likes"><span class="text-muted"><i
                                                            class="fa fa-thumbs-o-up"></i>
                                                        36</span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item2">
                                        <div class="footerimg d-flex mt-0 mb-0">
                                            <div class="d-flex footerimg-l mb-0">
                                                <img src="assets/images/faces/female/2.jpg" alt="image"
                                                    class="avatar brround  me-2" loading="lazy">
                                                <a href="#" class="time-title p-0 leading-normal mt-2">Lorean
                                                    Mccants <i class="icon icon-check text-success fs-12 ms-1"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title
                                                        data-bs-original-title="verified"></i></a>
                                            </div>
                                            <div class="mt-2 footerimg-r ms-auto">
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title
                                                    data-bs-original-title="Articles"><span class="text-muted me-2"><i
                                                            class="fa fa-comment-o"></i>
                                                        43</span></a>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title
                                                    data-bs-original-title="Likes"><span class="text-muted"><i
                                                            class="fa fa-thumbs-o-up"></i>
                                                        23</span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item2">
                                        <div class="footerimg d-flex mt-0 mb-0">
                                            <div class="d-flex footerimg-l mb-0">
                                                <img src="assets/images/faces/female/2.jpg" alt="image"
                                                    class="avatar brround  me-2" loading="lazy">
                                                <a href="#" class="time-title p-0 leading-normal mt-2">Lorean
                                                    Mccants <i class="icon icon-check text-success fs-12 ms-1"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title
                                                        data-bs-original-title="verified"></i></a>
                                            </div>
                                            <div class="mt-2 footerimg-r ms-auto">
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title
                                                    data-bs-original-title="Articles"><span class="text-muted me-2"><i
                                                            class="fa fa-comment-o"></i>
                                                        43</span></a>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title
                                                    data-bs-original-title="Likes"><span class="text-muted"><i
                                                            class="fa fa-thumbs-o-up"></i>
                                                        23</span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item2">
                                        <div class="footerimg d-flex mt-0 mb-0">
                                            <div class="d-flex footerimg-l mb-0">
                                                <img src="assets/images/faces/female/2.jpg" alt="image"
                                                    class="avatar brround  me-2" loading="lazy">
                                                <a href="#" class="time-title p-0 leading-normal mt-2">Lorean
                                                    Mccants <i class="icon icon-check text-success fs-12 ms-1"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title
                                                        data-bs-original-title="verified"></i></a>
                                            </div>
                                            <div class="mt-2 footerimg-r ms-auto">
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title
                                                    data-bs-original-title="Articles"><span class="text-muted me-2"><i
                                                            class="fa fa-comment-o"></i>
                                                        43</span></a>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title
                                                    data-bs-original-title="Likes"><span class="text-muted"><i
                                                            class="fa fa-thumbs-o-up"></i>
                                                        23</span></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="vertical-scroll ">
                                    <li class="item2">
                                        <div class="footerimg d-flex mt-0 mb-0">
                                            <div class="d-flex footerimg-l mb-0">
                                                <img src="assets/images/faces/female/1.jpg" alt="image"
                                                    class="avatar brround  me-2" loading="lazy">
                                                <a href="#" class="time-title p-0 leading-normal mt-2">Boris
                                                    Nash <i class="icon icon-check text-success fs-12 ms-1"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title
                                                        data-bs-original-title="verified"></i></a>
                                            </div>
                                            <div class="mt-2 footerimg-r ms-auto">
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title
                                                    data-bs-original-title="Articles"><span class="text-muted me-2"><i
                                                            class="fa fa-comment-o"></i>
                                                        16</span></a>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title
                                                    data-bs-original-title="Likes"><span class="text-muted"><i
                                                            class="fa fa-thumbs-o-up"></i>
                                                        36</span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item2">
                                        <div class="footerimg d-flex mt-0 mb-0">
                                            <div class="d-flex footerimg-l mb-0">
                                                <img src="assets/images/faces/female/2.jpg" alt="image"
                                                    class="avatar brround  me-2" loading="lazy">
                                                <a href="#" class="time-title p-0 leading-normal mt-2">Lorean
                                                    Mccants <i class="icon icon-check text-success fs-12 ms-1"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title
                                                        data-bs-original-title="verified"></i></a>
                                            </div>
                                            <div class="mt-2 footerimg-r ms-auto">
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title
                                                    data-bs-original-title="Articles"><span class="text-muted me-2"><i
                                                            class="fa fa-comment-o"></i>
                                                        43</span></a>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title
                                                    data-bs-original-title="Likes"><span class="text-muted"><i
                                                            class="fa fa-thumbs-o-up"></i>
                                                        23</span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item2">
                                        <div class="footerimg d-flex mt-0 mb-0">
                                            <div class="d-flex footerimg-l mb-0">
                                                <img src="assets/images/faces/male/3.jpg" alt="image"
                                                    class="avatar brround  me-2" loading="lazy">
                                                <a href="#" class="time-title p-0 leading-normal mt-2">Dewitt
                                                    Hennessey <i class="icon icon-check text-success fs-12 ms-1"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title
                                                        data-bs-original-title="verified"></i></a>
                                            </div>
                                            <div class="mt-2 footerimg-r ms-auto">
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title
                                                    data-bs-original-title="Articles"><span class="text-muted me-2"><i
                                                            class="fa fa-comment-o"></i>
                                                        34</span></a>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title
                                                    data-bs-original-title="Likes"><span class="text-muted"><i
                                                            class="fa fa-thumbs-o-up"></i>
                                                        12</span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item2">
                                        <div class="footerimg d-flex mt-0 mb-0">
                                            <div class="d-flex footerimg-l mb-0">
                                                <img src="assets/images/faces/male/3.jpg" alt="image"
                                                    class="avatar brround  me-2" loading="lazy">
                                                <a href="#" class="time-title p-0 leading-normal mt-2">Dewitt
                                                    Hennessey <i class="icon icon-check text-success fs-12 ms-1"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title
                                                        data-bs-original-title="verified"></i></a>
                                            </div>
                                            <div class="mt-2 footerimg-r ms-auto">
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title
                                                    data-bs-original-title="Articles"><span class="text-muted me-2"><i
                                                            class="fa fa-comment-o"></i>
                                                        34</span></a>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title
                                                    data-bs-original-title="Likes"><span class="text-muted"><i
                                                            class="fa fa-thumbs-o-up"></i>
                                                        12</span></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php') ?>