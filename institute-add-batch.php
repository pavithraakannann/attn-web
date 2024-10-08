<?php include('header-institute.php') ?>

<section>
    <div class="bannerimg cover-image bg-background3 sptb-2 bg-white" data-bs-image-src="assets/images/banners/banner2.jpg">
        <div class="header-text mb-0">
            <div class="container">
                <div class="text-center text-white ">
                    <h1 class="">Add Batch</h1>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="institute-dashboard.php">Home</a></li>
                        <li class="breadcrumb-item  text-white">Add Batch Form</li>
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
                        <h3 class="card-title text-white fs-5 py-1">Batch form</h3>
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
                                                <label class="form-label">Branch name</label>
                                                <input type="text" class="form-control " placeholder="Branch name">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Batch name</label>
                                                <input type="text" class="form-control " placeholder="Batch name">
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="form-label">Batch teacher</label>
                                                        <input type="text" class="form-control " placeholder="Batch teacher">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Batch timings</label>
                                                        <input type="text" class="form-control " placeholder="Batch timings">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Batch maximum slots</label>
                                                <input type="text" class="form-control " placeholder="Batch maximum slots">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label text-dark">Batch days</label>
                                                <div class="d-md-flex ad-post-details">
                                                    <label class="custom-control custom-radio mb-2 me-4">
                                                        <input type="radio" class="custom-control-input" name="radios" value="option1" checked="">
                                                        <span class="custom-control-label">Monday</span>
                                                    </label>
                                                    <label class="custom-control custom-radio  mb-2 me-4">
                                                        <input type="radio" class="custom-control-input" name="radios" value="option2">
                                                        <span class="custom-control-label">Tuesday</span>
                                                    </label>
                                                    <label class="custom-control custom-radio  mb-2 me-4">
                                                        <input type="radio" class="custom-control-input" name="radios" value="option3">
                                                        <span class="custom-control-label">Wednesday</span>
                                                    </label>
                                                    <label class="custom-control custom-radio  mb-2 me-4">
                                                        <input type="radio" class="custom-control-input" name="radios" value="option4">
                                                        <span class="custom-control-label">Thursday </span>
                                                    </label>
                                                    <label class="custom-control custom-radio  mb-2">
                                                        <input type="radio" class="custom-control-input" name="radios" value="option5">
                                                        <span class="custom-control-label">Friday</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label text-dark">Batch mode</label>
                                                <select class="form-control  select2 form-select bg-light">
                                                    <option value="0">Online</option>
                                                    <option value="1">Offline</option>
                                                </select>
                                            </div>
                                            <div class="submit text-end mt-5">
                                                <a href="#" class=" btn btn-secondary px-5" data-bs-toggle="modal" data-bs-target="#thankyou"><span class="">Save</span></a>
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
                        <a href="institute-batchlist.php" class=" btn btn-secondary px-5 fs-6"><span class="">Okay</span></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>