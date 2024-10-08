<?php include('header-institute.php') ?>

<section>
    <div class="bannerimg cover-image bg-background3 sptb-2 bg-white"
        data-bs-image-src="assets/images/banners/banner2.jpg">
        <div class="header-text mb-0">
            <div class="container">
                <div class="text-center text-white ">
                    <h1 class="">Payments</h1>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="institute-dashboard.php">Home</a></li>
                        <li class="breadcrumb-item  text-white">Payments</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="sptb">
    <div class="container">
        <div class="row">
            <?php include('institute-dashboard-menu.php') ?>
            <div class="col-xl-9 col-lg-12 col-md-12">
                <div class="card ">
                    <div class="card-header bg-primary">
                        <h3 class="card-title text-white fs-5 py-1">Payments</h3>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-pay">
                            <ul class="tabs-menu nav">
                                <li class=""><a href="#tab1" class="active" data-bs-toggle="tab"><i
                                            class="fa fa-credit-card"></i> Credit Card</a></li>
                                <li><a href="#tab2" data-bs-toggle="tab" class=""><i class="fa fa-paypal"></i>
                                        Paypal</a></li>
                                <li><a href="#tab3" data-bs-toggle="tab" class=""><i class="fa fa-university"></i> Bank
                                        Transfer</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active show" id="tab1">
                                    <div class="form-group">
                                        <label class="form-label">CardHolder Name</label>
                                        <input type="text" class="form-control" id="name1" placeholder="First Name">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Card number</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search for...">
                                            <button class="btn btn-primary" type="button"><i class="fa fa-cc-visa"></i>
                                                &nbsp; <i class="fa fa-cc-amex"></i> &nbsp;
                                                <i class="fa fa-cc-mastercard"></i></button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label class="form-label">Expiration</label>
                                                <div class="input-group">
                                                    <input type="number" class="form-control border-end-0"
                                                        placeholder="MM" name="expire-month">
                                                    <input type="number" class="form-control" placeholder="YY"
                                                        name="expire-year">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">CVV <i class="fa fa-question-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Please Enter last 3 digits"></i></label>
                                                <input type="number" class="form-control" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-secondary" data-bs-toggle="modal"
                                        data-bs-target="#thankyou">Submit</a>
                                </div>
                                <div class="tab-pane" id="tab2">
                                    <h6 class="font-weight-semibold">Paypal is easiest way to pay online</h6>
                                    <p><a href="#" class="btn btn-primary"><i class="fa fa-paypal"></i> Log in my
                                            Paypal</a></p>
                                    <p class="mb-0"><strong>Note:</strong> Nemo enim ipsam voluptatem quia voluptas sit
                                        aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui
                                        ratione voluptatem sequi nesciunt. </p>
                                </div>
                                <div class="tab-pane" id="tab3">
                                    <h6 class="font-weight-semibold">Bank account details</h6>
                                    <dl class="card-text">
                                        <dt>BANK: </dt>
                                        <dd> THE UNION BANK 0456</dd>
                                    </dl>
                                    <dl class="card-text">
                                        <dt>Account number: </dt>
                                        <dd> 67542897653214</dd>
                                    </dl>
                                    <dl class="card-text">
                                        <dt>IBAN: </dt>
                                        <dd>543218769</dd>
                                    </dl>
                                    <p class="mb-0"><strong>Note:</strong> Nemo enim ipsam voluptatem quia voluptas sit
                                        aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui
                                        ratione voluptatem sequi nesciunt. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-0">
                    <div class="card-header">
                        <h3 class="card-title">Payments list</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Invoice ID</th>
                                        <th>Category</th>
                                        <th>Purchase Date</th>
                                        <th>Price</th>
                                        <th>Due Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#INV-348</td>
                                        <td>Apartments</td>
                                        <td>07-12-2019</td>
                                        <td class="font-weight-semibold fs-16">$89</td>
                                        <td>17-12-2019</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm text-white mb-1" data-bs-toggle="tooltip"
                                                data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                            <a class="btn bg-secondary btn-sm text-white mb-1" data-bs-toggle="tooltip"
                                                data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#INV-186</td>
                                        <td>Rela Reallist</td>
                                        <td>02-12-2019</td>
                                        <td class="font-weight-semibold fs-16">$14,276</td>
                                        <td>14-12-2019</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm text-white mb-1" data-bs-toggle="tooltip"
                                                data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                            <a class="btn bg-secondary btn-sm text-white mb-1" data-bs-toggle="tooltip"
                                                data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#INV-831</td>
                                        <td>Homes</td>
                                        <td>30-11-2019</td>
                                        <td class="font-weight-semibold fs-16">$25,000</td>
                                        <td>04-12-2019</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm text-white mb-1" data-bs-toggle="tooltip"
                                                data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                            <a class="btn bg-secondary btn-sm text-white mb-1" data-bs-toggle="tooltip"
                                                data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#INV-672</td>
                                        <td>Duplex House</td>
                                        <td>25-18-2019</td>
                                        <td class="font-weight-semibold fs-16">$50.00</td>
                                        <td>07-12-2019</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm text-white mb-1" data-bs-toggle="tooltip"
                                                data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                            <a class="btn bg-secondary btn-sm text-white mb-1" data-bs-toggle="tooltip"
                                                data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#INV-428</td>
                                        <td>Electornics</td>
                                        <td>24-11-2019</td>
                                        <td class="font-weight-semibold fs-16">$99.99</td>
                                        <td>11-12-2019</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm text-white mb-1" data-bs-toggle="tooltip"
                                                data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                            <a class="btn bg-secondary btn-sm text-white mb-1" data-bs-toggle="tooltip"
                                                data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#INV-543</td>
                                        <td> Homes</td>
                                        <td>22-11-2019</td>
                                        <td class="font-weight-semibold fs-16">$145</td>
                                        <td>12-12-2019</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm text-white mb-1" data-bs-toggle="tooltip"
                                                data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                            <a class="btn bg-secondary btn-sm text-white mb-1" data-bs-toggle="tooltip"
                                                data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#INV-986</td>
                                        <td>Pet & Flats</td>
                                        <td>18-11-2019</td>
                                        <td class="font-weight-semibold fs-16">$378</td>
                                        <td>07-12-2019</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm text-white mb-1" data-bs-toggle="tooltip"
                                                data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                            <a class="btn bg-secondary btn-sm text-white mb-1" data-bs-toggle="tooltip"
                                                data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#INV-867</td>
                                        <td>Cloting</td>
                                        <td>17-11-2019</td>
                                        <td class="font-weight-semibold fs-16">$509.00</td>
                                        <td>06-12-2019</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm text-white mb-1" data-bs-toggle="tooltip"
                                                data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                            <a class="btn bg-secondary btn-sm text-white mb-1" data-bs-toggle="tooltip"
                                                data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#INV-893</td>
                                        <td>Apartments</td>
                                        <td>16-11-2019</td>
                                        <td class="font-weight-semibold fs-16">$347</td>
                                        <td>30-11-2019</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm text-white mb-1" data-bs-toggle="tooltip"
                                                data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                            <a class="btn bg-secondary btn-sm text-white mb-1" data-bs-toggle="tooltip"
                                                data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#INV-267</td>
                                        <td>Offices & Fitness</td>
                                        <td>12-11-2019</td>
                                        <td class="font-weight-semibold fs-16">$895</td>
                                        <td>27-11-2019</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm text-white mb-1" data-bs-toggle="tooltip"
                                                data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                            <a class="btn bg-secondary btn-sm text-white mb-1" data-bs-toggle="tooltip"
                                                data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#INV-931</td>
                                        <td>Luxury Homes</td>
                                        <td>11-11-2019</td>
                                        <td class="font-weight-semibold fs-16">$765</td>
                                        <td>25-12-2019</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm text-white mb-1" data-bs-toggle="tooltip"
                                                data-bs-original-title="View"><i class="fa fa-eye"></i></a>
                                            <a class="btn bg-secondary btn-sm text-white mb-1" data-bs-toggle="tooltip"
                                                data-bs-original-title="Delete"><i class="fa fa-trash-o"></i></a><br>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <ul class="pagination">
                            <li class="page-item page-prev disabled">
                                <a class="page-link" href="#" tabindex="-1">Prev</a>
                            </li>
                            <li class="page-item "><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item page-next">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
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
                        <a href="institute-payments.php" class=" btn btn-secondary px-5 fs-6"><span class="">Okay</span></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>