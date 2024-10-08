<?php include('header-parent.php') ?>

<section>
    <div class="bannerimg cover-image bg-background3 sptb-2 bg-white" data-bs-image-src="assets/images/banners/banner2.jpg">
        <div class="header-text mb-0">
            <div class="container">
                <div class="text-start text-white ">
                    <h1 class="">Parent Fees Form</h1>
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

<section class="sptb  bg-white">
    <div class="container ">
        <div class="row ">
        <?php include('parent-dashboard-menu.php') ?>
            <div class="col-xl-9 col-lg-12 col-md-12">
            <div class="card ">
                    <div class="card-header bg-primary">
                        <h3 class="card-title text-white fs-5 py-1">Student Fees</h3>
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
                                                <label class="form-label">Batch name</label>
                                                <input type="text" class="form-control "
                                                    placeholder="Branch name">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Month / year</label>
                                                <input type="month" class="form-control " name="bdaymonth">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Amount</label>
                                                <input id="input-price"
                                                    class="form-control just-number price-format-input"
                                                    placeholder="Enter amount">
                                            </div>

                                            <div class="submit text-end mt-5">
                                                <a class="btn btn-secondary px-5 " href="#">Pay now</a>
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

<?php include('footer.php') ?>