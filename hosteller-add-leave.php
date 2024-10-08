<?php include('header-hosteller.php') ?>

<section>
    <div class="bannerimg cover-image bg-background3 sptb-2 bg-white" data-bs-image-src="assets/images/banners/banner2.jpg">
        <div class="header-text mb-0">
            <div class="container">
                <div class="text-center text-white ">
                    <h1 class="">Add Leave Form</h1>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="hosteller-dashboard.php">Home</a></li>
                        <li class="breadcrumb-item  text-white">Add Leave Form</li>
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
            <div class="card ">
                    <div class="card-header bg-primary ">
                        <h3 class="card-title text-white fs-5 py-1">Leave Form</h3>
                    </div>
                </div>
                <div class="card mb-0 shadow-lg ">
                    <div class="container">
                        <div class="row">
                            <div class="single-page ">
                                <div class="col-lg-12 col-xl-12 col-md-6 d-block mx-auto kmky ">
                                    <div class="wrapper2 bg-white">
                                        <form action="" method="POST" id="Register" class="card-body" tabindex="500">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="form-label">Hostel name</label>
                                                        <input type="text" class="form-control py-5 "
                                                            placeholder="Hostel name">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Room number</label>
                                                        <input type="number" class="form-control py-5 "
                                                            placeholder="Room number">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="form-label">Hostel id</label>
                                                        <input type="number" class="form-control py-5 "
                                                            placeholder="Hostel id">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Leave type</label>
                                                        <input type="text" class="form-control py-5 "
                                                            placeholder="Leave type">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="form-label">From date</label>
                                                        <input type="date" class="form-control py-5 " name="bdaymonth">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">To date</label>
                                                        <input type="date" class="form-control py-5 " name="bdaymonth">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label text-dark">Remarks</label>
                                                <input type="text" class="form-control py-5 " placeholder="Remarks">
                                            </div>
                                            <div class="submit text-end mt-5">
                                                <a href="#" class=" btn btn-secondary px-5" data-bs-toggle="modal"
                                                    data-bs-target="#thankyou"><span class="">Save</span></a>
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
        <div class="modal-content ">
            <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
                <div class=" mb-0 p-5">
                    <div class="text-center m-5">
                        <img src="assets/images/brand/hovee_attendance_1.svg" loading="lazy" alt="hovee" width="140"
                            class="">
                    </div>
                    <h1 class=" text-center  text-primary fw-bold fs-1">Thank You</h1>
                    <div class="text-center m-2">
                        <img src="assets/images/brand/success.svg" loading="lazy" alt="success" width="60">
                    </div>
                    <p class="text-dark text-center fs-5">"Thank you for submitting your details; we appreciate your
                        cooperation and look forward to assisting you further."</p>
                    <div class="submit text-center mt-2">
                        <a href="hosteller-leavelist.php" class=" btn btn-secondary px-5 fs-6"><span
                                class="">Okay</span></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php include('footer.php') ?>