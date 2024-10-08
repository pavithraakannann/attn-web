<?php include('header-parent.php') ?>



<section>
    <div class="bannerimg cover-image bg-background3 sptb-2 bg-white"
        data-bs-image-src="assets/images/banners/banner2.jpg">
        <div class="header-text mb-0">
            <div class="container">
                <div class="text-start text-white ">
                    <h1 class="">Child attendance List</h1>
                    <p class="fs-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.</p>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="parent-dashboard.php">Home</a></li>
                        <li class="breadcrumb-item  text-white">Student attendance List</li>
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
                        <h3 class="card-title text-white fs-5 py-1">Attendance List</h3>
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
                        <div class="card shadow-lg indiv-card">
                            <div class="card-header bg-secondary ">
                                <h3 class="card-title">My Classes</h3>
                            </div>
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class=" col-md-12">
                                        <div class="card card-aside shadow-lg bg-dash-1">
                                            <div class="card-body ">
                                                <div class="card-item d-flex">
                                                    <div class="bg-transparent text-success text-start">
                                                        <div class="card-aside-img">
                                                            <a href="#"></a>
                                                            <img src="assets/images/media/5.png" alt="img">
                                                        </div>
                                                    </div>
                                                    <div class="ms-2">
                                                        <h6 class="font-weight-bold mt-2">Mathematics <a href="#"
                                                                class="btn-info px-3 rounded py- mx-5">Active</a>
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
                                                            <a href="#"></a>
                                                            <img src="assets/images/media/5.png" alt="img">
                                                        </div>
                                                    </div>
                                                    <div class="ms-2">
                                                        <h6 class="font-weight-bold mt-2">Mathematics <a href="#"
                                                                class="btn-info px-3 rounded py- mx-5">Active</a>
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
                    <div class="col-md-8">
                        <div class="card shadow-lg indiv-card">
                            <div class="card-header bg-secondary">
                                <h3 class="card-title">Attendance Chart</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group mb-5 mt-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label">Start Date</label>
                                            <input type="month" class="form-control " name="bdaymonth">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">End Date</label>
                                            <input type="month" class="form-control " name="bdaymonth">
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <figure class="pie-chart">
                                            <div class="inner">
                                                <div>

                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="index-chart ">
                                            <div class="option">
                                                <div class="colour-box c1"></div>
                                                <div>Present(35%)</div>
                                            </div>
                                            <div class="option">
                                                <div class="colour-box c2"></div>
                                                <div>Leave(15%)</div>
                                            </div>
                                            <div class="option">
                                                <div class="colour-box c3"></div>
                                                <div>Absent(20%)</div>
                                            </div>

                                            <div class="option">
                                                <div class="colour-box c4"></div>
                                                <div>Holiday(14%)</div>
                                            </div>
                                            <div class="option">
                                                <div class="colour-box c1"></div>
                                                <div>Miss Punch(35%)</div>
                                            </div>
                                            <div class="option">
                                                <div class="colour-box c2"></div>
                                                <div>Leave Approved Pending(15%)</div>
                                            </div>
                                            <div class="option">
                                                <div class="colour-box c3"></div>
                                                <div>Modified(15%)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-4">
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
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php') ?>