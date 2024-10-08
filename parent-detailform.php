<?php include('header-parent.php') ?>

<section>
    <div class="bannerimg cover-image bg-background3 sptb-2 bg-white"
        data-bs-image-src="assets/images/banners/banner2.jpg">
        <div class="header-text mb-0">
            <div class="container">
                <div class="text-center text-white ">
                    <h1 class="">Detail Form</h1>
                    <p class="fs-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.</p>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="parent-dashboard.php">Home</a></li>
                        <li class="breadcrumb-item  text-white">Parent Chat Box</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sptb bg-light">
    <div class="container ">
        <div class="row">
            <div class="card mb-0 ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <!-- Add lists -->
                            <div class="mb-3 mt-5">
                                <div class="card">
                                    <ul class="nav nav-tabs justify-content-center bg-primary  pers-info"
                                        role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active pers-link fs-6 px-5 py-2  text-white"
                                                id="tab-11-tab" data-bs-toggle="tab" href="#tab-11" role="tab"
                                                aria-controls="tab-11" aria-selected="true">Personal Information</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link pers-link fs-6 px-5 py-2  text-white" id="tab-12-tab"
                                                data-bs-toggle="tab" href="#tab-12" role="tab" aria-controls="tab-12"
                                                aria-selected="false"> Tution Address
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /Add lists -->

                            <div class="tab-content">
                                <div class="tab-pane active" id="tab-11">
                                    <div class="row ">
                                        <div class="col-md-12 ">
                                            <div class="card ">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label class="form-label text-dark">First name</label>
                                                                <input type="text" class="form-control  py-5 ps "
                                                                    placeholder="Enter here">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label text-dark">Last name</label>
                                                                <input type="text" class="form-control  py-5 ps "
                                                                    placeholder="Enter here">
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label class="form-label text-dark">Email</label>
                                                                <input type="email" class="form-control  py-5 ps "
                                                                    placeholder="Enter email">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label text-dark">Date of birth</label>
                                                                <input type="date" class="form-control  py-5 ">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="form-label text-dark">Phone number</label>
                                                        <input type="phonenumber" class="form-control  py-5 ps "
                                                            placeholder=" Phone number">

                                                    </div>
                                                    <div class="form-group">
                                                        <div class="card-footer">
                                                            <a href="#" class="btn btn-secondary"
                                                                id="nextTabBtn">Next</a>
                                                        </div>
                                                        <script>
                                                        document.getElementById('nextTabBtn').addEventListener('click',
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
                                                                <label class="form-label text-dark">Address 1</label>
                                                                <input type="text" class="form-control  py-5 ps "
                                                                    placeholder="Enter permanent address">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label text-dark">Address 2</label>
                                                                <input type="text" class="form-control  py-5 ps "
                                                                    placeholder="Enter additional address">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label class="form-label text-dark">City name</label>
                                                                <input type="text" class="form-control  py-5 ps "
                                                                    placeholder="Enter city name">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label text-dark">State</label>
                                                                <input type="text" class="form-control  py-5 ps "
                                                                    placeholder="Enter state">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label class="form-label text-dark">country</label>
                                                                <input type="text" class="form-control  py-5 ps "
                                                                    placeholder="Enter country">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label text-dark">Zipcode</label>
                                                                <input type="text" class="form-control  py-5 ps "
                                                                    placeholder="Enter zipcode">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="card-footer ">
                                                    <a href="#" class="btn btn-secondary pre"
                                                        id="previousbtn6">Previous</a>
                                                    <a href="#" class=" btn btn-secondary " data-bs-toggle="modal"
                                                        data-bs-target="#thankyou"><span class="">Submit</span></a>
                                                </div>
                                                <script>
                                                document.getElementById('previousbtn6').addEventListener('click',
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
                        <a href="parent-dashboard.php" class=" btn btn-secondary px-5 fs-6"><span
                                class="">Okay</span></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>