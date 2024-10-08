<?php include('header-institute.php') ?>

<section>
    <div class="bannerimg cover-image bg-background3 sptb-2 bg-white" data-bs-image-src="assets/images/banners/banner2.jpg">
        <div class="header-text mb-0">
            <div class="container">
                <div class="text-center text-white ">
                    <h1 class="">Add Course</h1>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="institute-dashboard.php">Home</a></li>
                        <li class="breadcrumb-item  text-white">Add Course Form</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sptb  bg-white">
    <div class="container ">
        <div class="row ">
            <?php include('institute-dashboard-menu.php') ?>
            <div class="col-xl-9 col-lg-12 col-md-12">
                <div class="card ">
                    <div class="card-header bg-primary ">
                        <h3 class="card-title text-white fs-5 py-1">Course form</h3>
                    </div>
                </div>
                <div class="card mb-0 ">
                    <div class="container">
                        <div class="row">
                            <div class="single-page ">
                                <div class="col-lg-12 col-xl-12 col-md-6 d-block mx-auto kmky ">
                                    <div class="wrapper2 bg-white">
                                        <form action="" method="POST" id="Register" class="card-body" tabindex="500">
                                            <div class="form-group">
                                                <label class="form-label text-dark">Btach name</label>
                                                <select class="form-control  select2 form-select bg-light">
                                                    <option value="0">Happy learning</option>
                                                    <option value="1">Hello world</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label text-dark">Categories</label>
                                                <select class="form-control  select2 form-select bg-light">
                                                    <option value="0">Acadamics</option>
                                                    <option value="1">Others</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label text-dark">Board</label>
                                                <select class="form-control  select2 form-select bg-light">
                                                    <option value="0">CBSE</option>
                                                    <option value="1">Others</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="form-label text-dark">Class</label>
                                                        <select class="form-control  select2 form-select bg-light">
                                                            <option value="0">6th</option>
                                                            <option value="1">10th</option>
                                                            <option value="0">11th</option>
                                                            <option value="1">12th</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label text-dark"> Subject</label>
                                                        <select class="form-control  select2 form-select bg-light">
                                                            <option value="0">Mathematics</option>
                                                            <option value="1">English</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Course code</label>
                                                <input type="text" class="form-control " placeholder="Course code">
                                            </div>
                                            <div class="submit text-end mt-5">
                                                <a href="#" class=" btn btn-secondary px-5" data-bs-toggle="modal" data-bs-target="#thankyou"><span class="">save</span></a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade " id="thankyou" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content  ">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
                <div class=" mb-0 p-5">
                    <div class="text-center m-5">
                        <img src="assets/images/brand/hovee_attendance_1.svg" loading="lazy" alt="whovee" width="140" class="">
                    </div>
                    <h1 class=" text-center  text-primary fw-bold fs-1">Thank You</h1>
                    <div class="text-center m-2">
                        <img src="assets/images/brand/success.svg" loading="lazy" alt="success" width="60">
                    </div>
                    <p class="text-dark text-center fs-5">"Thank you for submitting your details; we appreciate your
                        cooperation and look forward to assisting you further."</p>
                    <div class="submit text-center mt-2">
                        <a href="institute-courselist.php" class=" btn btn-secondary px-5 fs-6"><span class="">Okay</span></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>