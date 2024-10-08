<?php include('header-hostel.php') ?>

<section>
    <div class="bannerimg cover-image bg-background3 sptb-2 bg-white" data-bs-image-src="assets/images/banners/banner2.jpg">
        <div class="header-text mb-0">
            <div class="container">
                <div class="text-center text-white ">
                    <h1 class="">Hosteller List</h1>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="hostel-dashboard.php">Home</a></li>
                        <li class="breadcrumb-item  text-white">Hosteller List</li>
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
                                    <li class="mx-2 my-2">
                                        <a href="hostel-addform.php"
                                            class=" text-white fw-bold  px-2 fs-6 py-2 ">+ Add
                                            New</a>
                                    </li>
                                </ul>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="team-section text-center">
                                    <div class="team-img">
                                        <img src="assets/images/faces/male/3.jpg"
                                            class="img-thumbnail rounded-circle alt=" alt="">
                                    </div>
                                    <h4 class="font-weight-bold dark-grey-text mt-4">Tracey Poole</h4>
                                    <h6 class=" blue-text ">Class : XII</h6>
                                    <h6 class="mb-3 blue-text ">Subject : Mathematics</h6>
                                    <a href="hostel-detailpage.php" class="btn btn-secondary btn-pill">Profile
                                        Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="team-section text-center">
                                    <div class="team-img">
                                        <img src="assets/images/faces/male/2.jpg"
                                            class="img-thumbnail rounded-circle alt=" alt="">
                                    </div>
                                    <h4 class="font-weight-bold dark-grey-text mt-4">Tracey Poole</h4>
                                    <h6 class=" blue-text ">Class : XII</h6>
                                    <h6 class="mb-3 blue-text ">Subject : Mathematics</h6>
                                    <a href="hostel-detailpage.php" class="btn btn-secondary btn-pill">Profile
                                        Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="team-section text-center">
                                    <div class="team-img">
                                        <img src="assets/images/faces/male/1.jpg"
                                            class="img-thumbnail rounded-circle alt=" alt="">
                                    </div>
                                    <h4 class="font-weight-bold dark-grey-text mt-4">Tracey Poole</h4>
                                    <h6 class=" blue-text ">Class : XII</h6>
                                    <h6 class="mb-3 blue-text ">Subject : Mathematics</h6>
                                    <a href="hostel-detailpage.php" class="btn btn-secondary btn-pill">Profile
                                        Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="team-section text-center">
                                    <div class="team-img">
                                        <img src="assets/images/faces/male/3.jpg"
                                            class="img-thumbnail rounded-circle alt=" alt="">
                                    </div>
                                    <h4 class="font-weight-bold dark-grey-text mt-4">Tracey Poole</h4>
                                    <h6 class=" blue-text ">Class : XII</h6>
                                    <h6 class="mb-3 blue-text ">Subject : Mathematics</h6>
                                    <a href="hostel-detailpage.php" class="btn btn-secondary btn-pill">Profile
                                        Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div id="myCarousel" class="carousel slide shadow-lg" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <!-- First Table -->
                            <div class="carousel-item active">
                                <div class="table-responsive shadow-lg">
                                    <table class="table table-bordered table-hover mb-0 text-nowrap">
                                        <thead>
                                            <tr class="text-start">
                                                <th class="px-3">Student Name</th>
                                                <th class="px-3">Date</th>
                                                <th class="px-3">Desgination</th>
                                                <th class="px-3">Check-in Time</th>
                                                <th class="px-3"> ChecKout Time</th>
                                                <th class="px-3">Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex footerimg-l mb-0">
                                                        <img src="assets/images/faces/female/1.jpg" alt="image"
                                                            class="avatar brround  me-2">
                                                        <a href="javascript:void(0);"
                                                            class="time-title p-0 leading-normal mt-2">Boris
                                                            Nash</a>
                                                    </div>
                                                </td>
                                                <td>24/06/2024</td>
                                                <td class="font-weight-semibold fs-16">Work</td>
                                                <td>9.00 AM</td>
                                                <td>9.00 PM</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-secondary px-5 py-1 rounded-pill">View
                                                        Deatils</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex footerimg-l mb-0">
                                                        <img src="assets/images/faces/female/1.jpg" alt="image"
                                                            class="avatar brround  me-2">
                                                        <a href="javascript:void(0);"
                                                            class="time-title p-0 leading-normal mt-2">Boris
                                                            Nash</a>
                                                    </div>
                                                </td>
                                                <td>24/06/2024</td>
                                                <td class="font-weight-semibold fs-16">Work</td>
                                                <td>9.00 AM</td>
                                                <td>9.00 PM</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-secondary px-5 py-1 rounded-pill">View
                                                        Deatils</a>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex footerimg-l mb-0">
                                                        <img src="assets/images/faces/female/1.jpg" alt="image"
                                                            class="avatar brround  me-2">
                                                        <a href="javascript:void(0);"
                                                            class="time-title p-0 leading-normal mt-2">Boris
                                                            Nash</a>
                                                    </div>
                                                </td>
                                                <td>24/06/2024</td>
                                                <td class="font-weight-semibold fs-16">Work</td>
                                                <td>9.00 AM</td>
                                                <td>9.00 PM</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-secondary px-5 py-1 rounded-pill">View
                                                        Deatils</a>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex footerimg-l mb-0">
                                                        <img src="assets/images/faces/female/1.jpg" alt="image"
                                                            class="avatar brround  me-2">
                                                        <a href="javascript:void(0);"
                                                            class="time-title p-0 leading-normal mt-2">Boris
                                                            Nash</a>
                                                    </div>
                                                </td>
                                                <td>24/06/2024</td>
                                                <td class="font-weight-semibold fs-16">Home</td>
                                                <td>9.00 AM</td>
                                                <td>9.00 PM</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-secondary px-5 py-1 rounded-pill">View
                                                        Deatils</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex footerimg-l mb-0">
                                                        <img src="assets/images/faces/female/1.jpg" alt="image"
                                                            class="avatar brround  me-2">
                                                        <a href="javascript:void(0);"
                                                            class="time-title p-0 leading-normal mt-2">Boris
                                                            Nash</a>
                                                    </div>
                                                </td>
                                                <td>24/06/2024</td>
                                                <td class="font-weight-semibold fs-16">Event</td>
                                                <td>9.00 AM</td>
                                                <td>9.00 PM</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-secondary px-5 py-1 rounded-pill">View
                                                        Deatils</a>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Second Table -->
                            <div class="carousel-item">
                                <div class="table-responsive shadow-lg">
                                    <table class="table table-bordered table-hover mb-0 text-nowrap">
                                        <thead>
                                            <tr class="text-start">
                                                <th class="px-3">Student Name</th>
                                                <th class="px-3">Date</th>
                                                <th class="px-3">Desgination</th>
                                                <th class="px-3">Check-in Time</th>
                                                <th class="px-3"> ChecKout Time</th>
                                                <th class="px-3">Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex footerimg-l mb-0">
                                                        <img src="assets/images/faces/female/1.jpg" alt="image"
                                                            class="avatar brround  me-2">
                                                        <a href="javascript:void(0);"
                                                            class="time-title p-0 leading-normal mt-2">Boris
                                                            Nash</a>
                                                    </div>
                                                </td>
                                                <td>24/06/2024</td>
                                                <td class="font-weight-semibold fs-16">Work</td>
                                                <td>9.00 AM</td>
                                                <td>9.00 PM</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-secondary px-5 py-1 rounded-pill">View
                                                        Deatils</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex footerimg-l mb-0">
                                                        <img src="assets/images/faces/female/1.jpg" alt="image"
                                                            class="avatar brround  me-2">
                                                        <a href="javascript:void(0);"
                                                            class="time-title p-0 leading-normal mt-2">Boris
                                                            Nash</a>
                                                    </div>
                                                </td>
                                                <td>24/06/2024</td>
                                                <td class="font-weight-semibold fs-16">Work</td>
                                                <td>9.00 AM</td>
                                                <td>9.00 PM</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-secondary px-5 py-1 rounded-pill">View
                                                        Deatils</a>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex footerimg-l mb-0">
                                                        <img src="assets/images/faces/female/1.jpg" alt="image"
                                                            class="avatar brround  me-2">
                                                        <a href="javascript:void(0);"
                                                            class="time-title p-0 leading-normal mt-2">Boris
                                                            Nash</a>
                                                    </div>
                                                </td>
                                                <td>24/06/2024</td>
                                                <td class="font-weight-semibold fs-16">Work</td>
                                                <td>9.00 AM</td>
                                                <td>9.00 PM</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-secondary px-5 py-1 rounded-pill">View
                                                        Deatils</a>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex footerimg-l mb-0">
                                                        <img src="assets/images/faces/female/1.jpg" alt="image"
                                                            class="avatar brround  me-2">
                                                        <a href="javascript:void(0);"
                                                            class="time-title p-0 leading-normal mt-2">Boris
                                                            Nash</a>
                                                    </div>
                                                </td>
                                                <td>24/06/2024</td>
                                                <td class="font-weight-semibold fs-16">Home</td>
                                                <td>9.00 AM</td>
                                                <td>9.00 PM</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-secondary px-5 py-1 rounded-pill">View
                                                        Deatils</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex footerimg-l mb-0">
                                                        <img src="assets/images/faces/female/1.jpg" alt="image"
                                                            class="avatar brround  me-2">
                                                        <a href="javascript:void(0);"
                                                            class="time-title p-0 leading-normal mt-2">Boris
                                                            Nash</a>
                                                    </div>
                                                </td>
                                                <td>24/06/2024</td>
                                                <td class="font-weight-semibold fs-16">Event</td>
                                                <td>9.00 AM</td>
                                                <td>9.00 PM</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-secondary px-5 py-1 rounded-pill">View
                                                        Deatils</a>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Third Table -->
                            <div class="carousel-item">
                                <div class="table-responsive shadow-lg">
                                    <table class="table table-bordered table-hover mb-0 text-nowrap">
                                        <thead>
                                            <tr class="text-start">
                                                <th class="px-3">Student Name</th>
                                                <th class="px-3">Date</th>
                                                <th class="px-3">Desgination</th>
                                                <th class="px-3">Check-in Time</th>
                                                <th class="px-3"> ChecKout Time</th>
                                                <th class="px-3">Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex footerimg-l mb-0">
                                                        <img src="assets/images/faces/female/1.jpg" alt="image"
                                                            class="avatar brround  me-2">
                                                        <a href="javascript:void(0);"
                                                            class="time-title p-0 leading-normal mt-2">Boris
                                                            Nash</a>
                                                    </div>
                                                </td>
                                                <td>24/06/2024</td>
                                                <td class="font-weight-semibold fs-16">Work</td>
                                                <td>9.00 AM</td>
                                                <td>9.00 PM</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-secondary px-5 py-1 rounded-pill">View
                                                        Deatils</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex footerimg-l mb-0">
                                                        <img src="assets/images/faces/female/1.jpg" alt="image"
                                                            class="avatar brround  me-2">
                                                        <a href="javascript:void(0);"
                                                            class="time-title p-0 leading-normal mt-2">Boris
                                                            Nash</a>
                                                    </div>
                                                </td>
                                                <td>24/06/2024</td>
                                                <td class="font-weight-semibold fs-16">Work</td>
                                                <td>9.00 AM</td>
                                                <td>9.00 PM</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-secondary px-5 py-1 rounded-pill">View
                                                        Deatils</a>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex footerimg-l mb-0">
                                                        <img src="assets/images/faces/female/1.jpg" alt="image"
                                                            class="avatar brround  me-2">
                                                        <a href="javascript:void(0);"
                                                            class="time-title p-0 leading-normal mt-2">Boris
                                                            Nash</a>
                                                    </div>
                                                </td>
                                                <td>24/06/2024</td>
                                                <td class="font-weight-semibold fs-16">Work</td>
                                                <td>9.00 AM</td>
                                                <td>9.00 PM</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-secondary px-5 py-1 rounded-pill">View
                                                        Deatils</a>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex footerimg-l mb-0">
                                                        <img src="assets/images/faces/female/1.jpg" alt="image"
                                                            class="avatar brround  me-2">
                                                        <a href="javascript:void(0);"
                                                            class="time-title p-0 leading-normal mt-2">Boris
                                                            Nash</a>
                                                    </div>
                                                </td>
                                                <td>24/06/2024</td>
                                                <td class="font-weight-semibold fs-16">Home</td>
                                                <td>9.00 AM</td>
                                                <td>9.00 PM</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-secondary px-5 py-1 rounded-pill">View
                                                        Deatils</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex footerimg-l mb-0">
                                                        <img src="assets/images/faces/female/1.jpg" alt="image"
                                                            class="avatar brround  me-2">
                                                        <a href="javascript:void(0);"
                                                            class="time-title p-0 leading-normal mt-2">Boris
                                                            Nash</a>
                                                    </div>
                                                </td>
                                                <td>24/06/2024</td>
                                                <td class="font-weight-semibold fs-16">Event</td>
                                                <td>9.00 AM</td>
                                                <td>9.00 PM</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-secondary px-5 py-1 rounded-pill">View
                                                        Deatils</a>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Carousel Controls -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

<?php include('footer.php') ?>