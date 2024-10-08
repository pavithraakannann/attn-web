<?php include('header-hosteller.php') ?>

<section>
    <div class="bannerimg cover-image bg-background3 sptb-2 bg-white"
        data-bs-image-src="assets/images/banners/banner2.jpg">
        <div class="header-text mb-0">
            <div class="container">
                <div class="text-center text-white ">
                    <h1 class="">Edit Profile</h1>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="hosteller-editprofile.php">Home</a></li>
                        <li class="breadcrumb-item  text-white">Edit Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sptb">
    <div class="container">
        <div class="row">
            <?php include('hosteller-dashmenu.php') ?>
            <div class="col-xl-9 col-lg-12 col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3 ">
                            <div class="card">
                                <ul class="nav nav-tabs justify-content-center bg-primary py-1" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active pers-link fs-6 px-5 py-2  text-white" id="tab-11-tab" data-bs-toggle="tab" href="#tab-11"
                                            role="tab" aria-controls="tab-11" aria-selected="true">Personal info</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link pers-link fs-6 px-5 py-2  text-white" id="tab-12-tab" data-bs-toggle="tab" href="#tab-12"
                                            role="tab" aria-controls="tab-12" aria-selected="false">Address
                                            Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-11">
                                <div class="row ">
                                    <div class="col-md-12 ">
                                        <div class="card ">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="form-label text-dark">Frist
                                                                Name</label>
                                                            <input type="text" class="form-control py-5 ps "
                                                                placeholder="Enter your name" value="Pavithra">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label text-dark">Last
                                                                Name</label>
                                                            <input type="text" class="form-control py-5 ps "
                                                                placeholder="Enter your name" value="Kannan">
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="form-label text-dark">Email</label>
                                                            <input type="email" class="form-control py-5 ps "
                                                                placeholder="Enter your email"
                                                                value="pavithrakannan@gmail.com">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label text-dark">DOB</label>
                                                            <input type="date" class="form-control py-5 ">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="form-label text-dark">Phone Number</label>
                                                            <div class="input-group">
                                                                <input type="phonenumber" class="form-control py-5"
                                                                    placeholder="your phone number" value="9196085877">
                                                                <a href="#" class=" btn btn-secondary pt-3 "
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#otppopup"><span class=""><i
                                                                            class="fa fa-pencil"></i></span></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label text-dark">DOB</label>
                                                            <select class="form-control py-5  select2 form-select bg-light">
                                                                <option value="0">Male</option>
                                                                <option value="1">Female</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="card-footer">
                                                        <a href="#" class="btn btn-secondary" id="nextTabBtn">Next</a>
                                                    </div>
                                                    <script>
                                                    document.getElementById('nextTabBtn').addEventListener(
                                                        'click',
                                                        function(
                                                            event) {
                                                            event
                                                                .preventDefault(); // Prevent the default action of following the link
                                                            var nextTabLink = document.querySelector(
                                                                'a[href="#tab-12"]');
                                                            if (nextTabLink !== null) {
                                                                nextTabLink
                                                                    .click(); // Simulate a click on the next tab link
                                                            }
                                                        });
                                                    </script>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane " id="tab-12">
                                <div class="row ">
                                    <div class="col-md-12 ">
                                        <div class="card ">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="form-label text-dark">Address
                                                                1</label>
                                                            <input type="text" class="form-control py-5 ps "
                                                                placeholder="Enter Permanent address"
                                                                value="11/4, 5th street, Padipudhu nagar">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label text-dark">Address
                                                                2</label>
                                                            <input type="text" class="form-control py-5 ps "
                                                                placeholder="Enter Additional address">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="form-label text-dark">City
                                                                Name</label>
                                                            <input type="text" class="form-control py-5 ps "
                                                                placeholder="Enter your city Name" value="chennai">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label text-dark">State</label>
                                                            <input type="text" class="form-control py-5 ps "
                                                                placeholder="Enter your state" value="Tamilnadu">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="form-label text-dark">country</label>
                                                            <input type="text" class="form-control py-5 ps "
                                                                placeholder="Enter your Country" value="India">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label text-dark">Zipcode</label>
                                                            <input type="text" class="form-control py-5 ps "
                                                                placeholder="Enter your zipcode" value="600037">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer ">
                                                <a href="#" class="btn btn-secondary pre" id="previousbtn5">Previous</a>
                                                <a href="#" class=" btn btn-secondary " data-bs-toggle="modal"
                                                    data-bs-target="#thankyou"><span class="">Submit</span></a>
                                            </div>
                                            <script>
                                            document.getElementById('previousbtn5').addEventListener(
                                                'click',
                                                function(event) {
                                                    event
                                                        .preventDefault(); // Prevent the default action of following the link
                                                    var nextTabLink = document.querySelector(
                                                        'a[href="#tab-11"]');
                                                    if (nextTabLink !== null) {
                                                        nextTabLink
                                                            .click(); // Simulate a click on the next tab link
                                                    }
                                                });
                                            </script>
                                        </div>
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
                        <img src="assets/images/photos/main-1 (2).png" loading="lazy" alt="hovee" width="40" class="">
                    </div>
                    <h1 class=" text-center  text-primary fw-bold fs-1">Thank You</h1>
                    <p class="text-dark text-center fs-5">"your Updates have been saved"</p>
                    <div class="submit text-center mt-2">
                        <a href="hosteller-editprofile.php" class=" btn btn-secondary px-5 fs-6"><span
                                class="">Okay</span></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="modal fade " id="otppopup" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content  ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleCommentLongTitle"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="single-page w-100 p-0 bg-dash">
                    <div class="wrapper wrapper2">
                        <form id="forgotpsd" class="card-body">
                            <h3 class="pb-2">Enter the OTP</h3>
                            <p class="text-gray">An otp has been sent to ********k876@gmail.com</p>

                            <div class="otp-input-fields">
                                <input type="number" class="otp__digit otp__field__1">
                                <input type="number" class="otp__digit otp__field__2">
                                <input type="number" class="otp__digit otp__field__3">
                                <input type="number" class="otp__digit otp__field__4">
                                <input type="number" class="otp__digit otp__field__5">
                                <input type="number" class="otp__digit otp__field__6">
                            </div>
                            <div class="submit">
                                <a href="#" class=" btn btn-primary " data-bs-toggle="modal"
                                    data-bs-target="#getphonenumber"><span class="">Verify</span></a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade " id="getphonenumber" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content  ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleCommentLongTitle"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="single-page ">
                    <div class="col-lg-10 col-xl-10 col-md-6 d-block mx-auto kmky ">
                        <div class="wrapper2 bg-white">
                            <form action="" method="POST" id="Register" class="card-body" tabindex="500">
                                <div class="form-group ">
                                    <label class="form-label text-dark">Enter new number</label>
                                    <input type="phonenumber" class="form-control py-5 ps " placeholder="Enter Phone number">
                                </div>
                                <div class="submit text-center mt-5">
                                    <a href="#" class=" btn btn-primary " data-bs-toggle="modal"
                                        data-bs-target="#thankyou"><span class="">save</span></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('footer.php') ?>