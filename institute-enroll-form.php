<?php include('header-institute.php') ?>

<section>
    <div class="bannerimg cover-image bg-background3 sptb-2 bg-white" data-bs-image-src="assets/images/banners/banner2.jpg">
        <div class="header-text mb-0">
            <div class="container">
                <div class="text-center text-white ">
                    <h1 class="">Enrollment Form</h1>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="institute-dashboard.php">Home</a></li>
                        <li class="breadcrumb-item  text-white">Enrollment Form</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sptb bg-light">
    <div class="container ">
        <div class="row">
            <div class="single-page ">
                <div class="col-lg-7 col-xl-7 col-md-6 d-block mx-auto kmky ">
                    <div class="wrapper2 bg-white shadow-lg">
                        <form action="" method="POST" id="Register" class="card-body" tabindex="500">
                            <div class="form-group">
                                <label class="form-label">Student Name</label>
                                <input type="text" class="form-control " placeholder="Student name">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label text-dark">Start Date</label>
                                        <input type="date" class="form-control ">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label text-dark">End Date</label>
                                        <input type="date" class="form-control ">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Branch Name</label>
                                <input type="text" class="form-control " placeholder="Branch name">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label">Category</label>
                                        <input type="text" class="form-control " placeholder="category">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Board</label>
                                        <input type="text" class="form-control " placeholder="Board">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label">Class</label>
                                        <input type="text" class="form-control " placeholder="Class">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Subject</label>
                                        <input type="text" class="form-control " placeholder="Subject name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label">Teacher Name</label>
                                        <input type="text" class="form-control " placeholder="Student name">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Batch Name</label>
                                        <input type="text" class="form-control " placeholder="Branch short name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Batch Timings</label>
                                <input type="text" class="form-control " placeholder="Batch timings">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Fees</label>
                                <input id="input-price" class="form-control just-number price-format-input"
                                    placeholder="Enter amount">
                            </div>
                            <div class="submit text-center mt-5">
                                <a href="#" class=" btn btn-secondary px-5" type="submit" data-bs-toggle="modal"
                                    data-bs-target="#preview"><span class="">Submit</span></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade " id="preview" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content  ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleCommentLongTitle"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="card mb-0">
                    <div class="text-center mt-5">
                        <h3 class="fw-bold">Preview Details</h3>
                    </div>
                    <div class="card-body mt-0">
                        <div class="manged-ad table-responsive userprof-tab">
                            <table class="table table-bordered table-hover mb-0 text-nowrap">
                                <tbody>
                                    <tr class="text-center">
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">Name</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">John</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">Email</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">John@gmail.com</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">Phone</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">+ 912345678901</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">Gender</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">Male</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">Occupation Status</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">Student</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">Class</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">12th</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">Languages Known</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">English/Tamil</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">School/Institute Name:</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">PVR HIgh School</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">Board</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="media-body">
                                                    <div class="card-item-desc ms-4 p-0 mt-2">
                                                        <a href="#" class="text-dark">
                                                            <h4 class="font-weight-semibold">CBSE</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                            <div class="card-item d-flex m-5">
                                <img src="assets/images/products/7.png" alt="img" class="w-8 h-8 br-3">
                                <div class="ms-4">
                                    <h6 class="font-weight-bold mt-2">Location</h6>
                                    <a href="javascript:void(0);"> 12, Gopal St, Sarvamangala Colony, Aruna Colony,
                                        Vadapalani, Chennai, Tamil Nadu 600026.
                                    </a>
                                </div>
                            </div>
                            <div class="text-center mt-5">
                                <a href="#" class=" btn btn-primary px-5" data-bs-toggle="modal"
                                    data-bs-target="#thankyou"><span class="">Submit</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade " id="thankyou" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content  ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleCommentLongTitle"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class=" mb-0 p-5">
                    <div class="text-center m-5">
                        <img src="assets/images/brand/hovee_attendance_1.svg" loading="lazy" alt="whovee" width="140"
                            class="">
                    </div>
                    <h1 class=" text-center  text-primary fw-bold fs-1">Thank You</h1>
                    <div class="text-center m-2">
                        <img src="assets/images/brand/success.svg" loading="lazy" alt="success" width="60">
                    </div>
                    <p class="text-dark text-center fs-5">"Thank you for submitting your details; we appreciate your
                        cooperation and look forward to assisting you further."</p>
                    <div class="submit text-center mt-2">
                        <a href="institute-enquirylist.php" class=" btn btn-primary px-5 fs-6"><span class="">Okay</span></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>