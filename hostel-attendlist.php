<?php include('header-hostel.php') ?>

<section>
    <div class="bannerimg cover-image bg-background3 sptb-2 bg-white"
        data-bs-image-src="assets/images/banners/banner2.jpg">
        <div class="header-text mb-0">
            <div class="container">
                <div class="text-center text-white ">
                    <h1 class="">Attendance List</h1>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="hostel-dashboard.php">Home</a></li>
                        <li class="breadcrumb-item  text-white">Attendance List</li>
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
                    <div class="card-header bg-primary py-1">
                        <h3 class="card-title text-white fs-5 ">Attendance Month-Agust</h3>
                        <div class="ms-auto">
                            <h3 class="card-title fw-bold">
                                <ul class="nav item2-gl-menu ms-auto ">
                                    <li>
                                        <input type="date" class="form-control bg-light">
                                    </li>
                                </ul>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="card card-aside">
                                    <div class="card-body ">
                                        <div class="card-item d-flex">
                                            <div class="mx-auto text-center">
                                                <h6 class="font-weight-bold mt-2">Total Students</h6>
                                                <h2 class="counter">7253</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card card-aside">
                                    <div class="card-body ">
                                        <div class="card-item d-flex">
                                            <div class="mx-auto text-center">
                                                <h6 class="font-weight-bold mt-2">Present Students</h6>
                                                <h2 class="counter">7253</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card card-aside">
                                    <div class="card-body ">
                                        <div class="card-item d-flex">
                                            <div class="mx-auto text-center">
                                                <h6 class="font-weight-bold mt-2">Absent Students</h6>
                                                <h2 class="counter">7253</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="card card-aside">
                                    <div class="card-body ">
                                        <div class="card-item d-flex">
                                            <div class="mx-auto text-center">
                                                <h6 class="font-weight-bold mt-2">No of Leaves</h6>
                                                <h2 class="counter">7253</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="card card-aside">
                                    <div class="card-body ">
                                        <div class="card-item d-flex">
                                            <div class="mx-auto text-center">
                                                <h6 class="font-weight-bold mt-2">Partial attendance</h6>
                                                <h2 class="counter">7253</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="manged-ad table-responsive userprof-tab mt-5">
                            <table class="table table-bordered table-hover mb-0 text-nowrap">
                                <thead>
                                    <tr class="text-center bg-light ">
                                        <th class="text-dark fw-bold fs-6">Name List</th>
                                        <th class="text-dark fw-bold fs-6">Time In</th>
                                        <th class="text-dark fw-bold fs-6">Time Out</th>
                                        <th class="text-dark fw-bold fs-6">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">Pavithra Kannan</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-primary">
                                                            <h4 class="font-weight-semibold">11:30AM</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-primary">
                                                            <h4 class="font-weight-semibold">1:30PM</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="font-weight-semibold text-center ">
                                            <span class="switch-1">
                                                <input id="switch-rounded-2" type="checkbox" />
                                                <label for="switch-rounded-2"></label>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">Pavithra Kannan</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-primary">
                                                            <h4 class="font-weight-semibold">11:30AM</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-primary">
                                                            <h4 class="font-weight-semibold">1:30PM</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="font-weight-semibold text-center ">
                                            <span class="switch-1">
                                                <input id="switch-rounded-4" type="checkbox" />
                                                <label for="switch-rounded-4"></label>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">Pavithra Kannan</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-primary">
                                                            <h4 class="font-weight-semibold">11:30AM</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-primary">
                                                            <h4 class="font-weight-semibold">1:30PM</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="font-weight-semibold text-center ">
                                            <span class="switch-1">
                                                <input id="switch-rounded-6" type="checkbox" />
                                                <label for="switch-rounded-6"></label>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">Pavithra Kannan</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-primary">
                                                            <h4 class="font-weight-semibold">11:30AM</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-primary">
                                                            <h4 class="font-weight-semibold">1:30PM</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="font-weight-semibold text-center ">
                                            <span class="switch-1">
                                                <input id="switch-rounded-8" type="checkbox" />
                                                <label for="switch-rounded-8"></label>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">Pavithra Kannan</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-primary">
                                                            <h4 class="font-weight-semibold">11:30AM</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-primary">
                                                            <h4 class="font-weight-semibold">1:30PM</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="font-weight-semibold text-center ">
                                            <span class="switch-1">
                                                <input id="switch-rounded-10" type="checkbox" />
                                                <label for="switch-rounded-10"></label>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">Pavithra Kannan</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-primary">
                                                            <h4 class="font-weight-semibold">11:30AM</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-primary">
                                                            <h4 class="font-weight-semibold">1:30PM</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="font-weight-semibold text-center ">
                                            <span class="switch-1">
                                                <input id="switch-rounded-12" type="checkbox" />
                                                <label for="switch-rounded-12"></label>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">Pavithra Kannan</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-primary">
                                                            <h4 class="font-weight-semibold">11:30AM</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-primary">
                                                            <h4 class="font-weight-semibold">1:30PM</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="font-weight-semibold text-center ">
                                            <span class="switch-1">
                                                <input id="switch-rounded-14" type="checkbox" />
                                                <label for="switch-rounded-14"></label>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">Pavithra Kannan</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-primary">
                                                            <h4 class="font-weight-semibold">11:30AM</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-primary">
                                                            <h4 class="font-weight-semibold">1:30PM</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="font-weight-semibold text-center ">
                                            <span class="switch-1">
                                                <input id="switch-rounded-16" type="checkbox" />
                                                <label for="switch-rounded-16"></label>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">Pavithra Kannan</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-primary">
                                                            <h4 class="font-weight-semibold">11:30AM</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-primary">
                                                            <h4 class="font-weight-semibold">1:30PM</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="font-weight-semibold text-center ">
                                            <span class="switch-1">
                                                <input id="switch-rounded-18" type="checkbox" />
                                                <label for="switch-rounded-18"></label>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">Pavithra Kannan</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-primary">
                                                            <h4 class="font-weight-semibold">11:30AM</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-primary">
                                                            <h4 class="font-weight-semibold">1:30PM</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="font-weight-semibold text-center ">
                                            <span class="switch-1">
                                                <input id="switch-rounded-20" type="checkbox" />
                                                <label for="switch-rounded-20"></label>
                                            </span>
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