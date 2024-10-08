<?php include('header-parent.php') ?>



<section>
    <div class="bannerimg cover-image bg-background3 sptb-2 bg-white"
        data-bs-image-src="assets/images/banners/banner2.jpg">
        <div class="header-text mb-0">
            <div class="container">
                <div class="text-center text-white ">
                    <h1 class="">Course List</h1>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="parent-dashboard.php">Home</a></li>
                        <li class="breadcrumb-item  text-white">Course List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="sptb">
    <div class="container">
        <div class="row">
            <!--Left Side Content-->
            <div class="col-xl-3 col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control br-tl-3  br-bl-3" placeholder="Search">
                            <button type="button" class="btn btn-secondary br-tr-3  br-br-3">
                                Search
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Course Categories</h3>
                    </div>
                    <div class="card-body">
                        <div class="" id="container">
                            <div class="filter-product-checkboxs">
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox1"
                                        value="option1">
                                    <span class="custom-control-label">
                                        <span class="text-dark"> Maths<span
                                                class="label label-secondary float-end">14</span></span>
                                    </span>
                                </label>
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox2"
                                        value="option2">
                                    <span class="custom-control-label">
                                        <span class="text-dark">English<span
                                                class="label label-secondary float-end">22</span></span>
                                    </span>
                                </label>
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox3"
                                        value="option3">
                                    <span class="custom-control-label">
                                        <span class="text-dark">Science<span
                                                class="label label-secondary float-end">78</span></span>
                                    </span>
                                </label>
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox4"
                                        value="option3">
                                    <span class="custom-control-label">
                                        <span class="text-dark">Java<span
                                                class="label label-secondary float-end">35</span></span>
                                    </span>
                                </label>
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox5"
                                        value="option3">
                                    <span class="custom-control-label">
                                        <span class="text-dark">Php<span
                                                class="label label-secondary float-end">23</span></span>
                                    </span>
                                </label>
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox6"
                                        value="option3">
                                    <span class="custom-control-label">
                                        <span class="text-dark">Social Science<span
                                                class="label label-secondary float-end">14</span></span>
                                    </span>
                                </label>
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox7"
                                        value="option3">
                                    <span class="custom-control-label">
                                        <span class="text-dark">Chemistry<span
                                                class="label label-secondary float-end">45</span></span>
                                    </span>
                                </label>
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox7"
                                        value="option3">
                                    <span class="custom-control-label">
                                        <span class="text-dark">Physics<span
                                                class="label label-secondary float-end">34</span></span>
                                    </span>
                                </label>
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox7"
                                        value="option3">
                                    <span class="custom-control-label">
                                        <span class="text-dark">Business Maths<span
                                                class="label label-secondary float-end">12</span></span>
                                    </span>
                                </label>
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox7"
                                        value="option3">
                                    <span class="custom-control-label">
                                        <span class="text-dark">Testing<span
                                                class="label label-secondary float-end">18</span></span>
                                    </span>
                                </label>
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox7"
                                        value="option3">
                                    <span class="custom-control-label">
                                        <span class="text-dark">Web developing<span
                                                class="label label-secondary float-end">02</span></span>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="card-header border-top">
                        <h3 class="card-title">Price Range</h3>
                    </div>
                    <div class="card-body">
                        <h6>
                            <input type="text" id="price">
                        </h6>
                        <div id="mySlider"></div>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-secondary btn-block">Apply Filter</a>
                    </div>
                </div>
                <div class="card mb-0">
                    <div class="card-header">
                        <h3 class="card-title">Shares</h3>
                    </div>
                    <div class="card-body product-filter-desc">
                        <div class="product-filter-icons text-center">
                            <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="google-bg"><i class="fa fa-google"></i></a>
                            <a href="#" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>
                            <a href="#" class="pinterest-bg"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Left Side Content-->

            <div class="col-xl-9 col-lg-8 col-md-12">
                <!--Add lists-->
                <div class=" mb-lg-0">
                    <div class="">
                        <div class="item2-gl ">
                            <div class=" mb-0">
                                <div class="">
                                    <div class="p-5 bg-white item2-gl-nav d-flex border br-5">
                                        <h6 class="mb-0 mt-2">Showing 1 to 10 of 30 entries</h6>
                                        <ul class="nav item2-gl-menu ms-auto mt-2">
                                            <li class=""><a href="#tab-11" class="" data-bs-toggle="tab"
                                                    title="List style"><i class="fa fa-list"></i></a></li>
                                            <li><a href="#tab-12" data-bs-toggle="tab" class="active show"
                                                    title="Grid"><i class="fa fa-th"></i></a></li>
                                        </ul>
                                        <div class="d-flex">
                                            <label class="me-2 mt-1 mb-sm-1 pt-2">Sort By:</label>
                                            <select name="item" class="form-control select-sm w-75 select2">
                                                <option value="1">Latest</option>
                                                <option value="2">Oldest</option>
                                                <option value="3">Price:Low-to-High</option>
                                                <option value="5">Price:Hight-to-Low</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane" id="tab-11">
                                    <div class="card overflow-hidden">
                                        <div class="d-md-flex">
                                            <div class="item-card9-img">
                                                <div class="item-card9-imgs">
                                                    <a href="parent-Course-detailpage.php"></a>
                                                    <img src="assets/images/products/f1.jpg" alt="img"
                                                        class="cover-image">
                                                </div>
                                            </div>
                                            <div class="card border-0 mb-0">
                                                <div class="card-body ">
                                                    <table class="table">
                                                        <tbody class="col-lg-12">
                                                            <tr>
                                                                <th>Batch Name</th>
                                                                <th><strong class="text-dark float-end ">Happy
                                                                        Day</strong></th>
                                                            </tr>
                                                            <tr>
                                                                <th>Short Name</th>
                                                                <th><strong class="text-dark float-end ">Way</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th class="text-lighter">Timing</th>
                                                                <th><strong
                                                                        class="text-dark float-end">11AM-12PM</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>Counts</th>
                                                                <th><strong class="text-dark float-end ">24</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>Days</th>
                                                                <th><strong class="text-dark float-end ">M, T, W,
                                                                        TH, F</strong></th>
                                                            </tr>
                                                            <tr>
                                                                <th>Mode</th>
                                                                <th><strong class="text-dark float-end ">online</strong>
                                                                </th>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card overflow-hidden">
                                        <div class="d-md-flex">
                                            <div class="item-card9-img">
                                                <div class="item-card9-imgs">
                                                    <a href="parent-Course-detailpage.php"></a>
                                                    <div id="carousel-controls1" class="carousel slide property-slide"
                                                        data-bs-ride="carousel" data-interval="false">
                                                        <div class="carousel-inner br-0">
                                                            <div class="carousel-item active">
                                                                <img src="assets/images/products/f2.jpg" alt="img"
                                                                    class="cover-image d-block w-100"
                                                                    data-holder-rendered="true">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img src="assets/images/products/f1.jpg" alt="img"
                                                                    class="cover-image d-block w-100"
                                                                    data-holder-rendered="true">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img src="assets/images/products/f3.jpg" alt="img"
                                                                    class="cover-image d-block w-100"
                                                                    data-holder-rendered="true">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img src="assets/images/products/f4.jpg" alt="img"
                                                                    class="cover-image d-block w-100"
                                                                    data-holder-rendered="true">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img src="assets/images/products/h1.jpg" alt="img"
                                                                    class="cover-image d-block w-100"
                                                                    data-holder-rendered="true">
                                                            </div>
                                                        </div>
                                                        <a class="carousel-control-prev" href="#carousel-controls1"
                                                            role="button" data-bs-slide="prev">
                                                            <span class="carousel-control-prev-icon"
                                                                aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#carousel-controls1"
                                                            role="button" data-bs-slide="next">
                                                            <span class="carousel-control-next-icon"
                                                                aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card border-0 mb-0">
                                                <div class="card-body ">
                                                    <table class="table">
                                                        <tbody class="col-lg-12">
                                                            <tr>
                                                                <th>Batch Name</th>
                                                                <th><strong class="text-dark float-end ">Happy
                                                                        Day</strong></th>
                                                            </tr>
                                                            <tr>
                                                                <th>Short Name</th>
                                                                <th><strong class="text-dark float-end ">Way</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th class="text-lighter">Timing</th>
                                                                <th><strong
                                                                        class="text-dark float-end">11AM-12PM</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>Counts</th>
                                                                <th><strong class="text-dark float-end ">24</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>Days</th>
                                                                <th><strong class="text-dark float-end ">M, T, W,
                                                                        TH, F</strong></th>
                                                            </tr>
                                                            <tr>
                                                                <th>Mode</th>
                                                                <th><strong class="text-dark float-end ">online</strong>
                                                                </th>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sold-out1">
                                        <div class="ribbon sold-ribbon ribbon-top-left text-danger"><span
                                                class="bg-danger">Sold Out</span></div>
                                        <div class="card overflow-hidden">
                                            <div class="d-md-flex">
                                                <div class="item-card9-img">
                                                    <div class="item-card9-imgs">
                                                        <a href="parent-Course-detailpage.php"></a>
                                                        <img src="assets/images/products/f1.jpg" alt="img"
                                                            class="cover-image">
                                                    </div>
                                                </div>
                                                <div class="card border-0 mb-0">
                                                    <div class="card-body ">
                                                        <table class="table">
                                                            <tbody class="col-lg-12">
                                                                <tr>
                                                                    <th>Batch Name</th>
                                                                    <th><strong class="text-dark float-end ">Happy
                                                                            Day</strong></th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Short Name</th>
                                                                    <th><strong
                                                                            class="text-dark float-end ">Way</strong>
                                                                    </th>
                                                                </tr>
                                                                <tr>
                                                                    <th class="text-lighter">Timing</th>
                                                                    <th><strong
                                                                            class="text-dark float-end">11AM-12PM</strong>
                                                                    </th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Counts</th>
                                                                    <th><strong class="text-dark float-end ">24</strong>
                                                                    </th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Days</th>
                                                                    <th><strong class="text-dark float-end ">M, T, W,
                                                                            TH, F</strong></th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Mode</th>
                                                                    <th><strong
                                                                            class="text-dark float-end ">online</strong>
                                                                    </th>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card overflow-hidden">
                                        <div class="d-md-flex">
                                            <div class="item-card9-img">
                                                <div class="item-card9-imgs">
                                                    <a href="parent-Course-detailpage.php"></a>
                                                    <img src="assets/images/products/h3.jpg" alt="img"
                                                        class="cover-image">
                                                </div>
                                            </div>
                                            <div class="card border-0 mb-0">
                                                <div class="card-body ">
                                                    <table class="table">
                                                        <tbody class="col-lg-12">
                                                            <tr>
                                                                <th>Batch Name</th>
                                                                <th><strong class="text-dark float-end ">Happy
                                                                        Day</strong></th>
                                                            </tr>
                                                            <tr>
                                                                <th>Short Name</th>
                                                                <th><strong class="text-dark float-end ">Way</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th class="text-lighter">Timing</th>
                                                                <th><strong
                                                                        class="text-dark float-end">11AM-12PM</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>Counts</th>
                                                                <th><strong class="text-dark float-end ">24</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>Days</th>
                                                                <th><strong class="text-dark float-end ">M, T, W,
                                                                        TH, F</strong></th>
                                                            </tr>
                                                            <tr>
                                                                <th>Mode</th>
                                                                <th><strong class="text-dark float-end ">online</strong>
                                                                </th>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card overflow-hidden">
                                        <div class="d-md-flex">
                                            <div class="item-card9-img">
                                                <div class="item-card9-imgs">
                                                    <a href="parent-Course-detailpage.php"></a>
                                                    <img src="assets/images/products/h4.jpg" alt="img"
                                                        class="cover-image">
                                                </div>
                                            </div>
                                            <div class="card border-0 mb-0">
                                                <div class="card-body ">
                                                    <table class="table">
                                                        <tbody class="col-lg-12">
                                                            <tr>
                                                                <th>Batch Name</th>
                                                                <th><strong class="text-dark float-end ">Happy
                                                                        Day</strong></th>
                                                            </tr>
                                                            <tr>
                                                                <th>Short Name</th>
                                                                <th><strong class="text-dark float-end ">Way</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th class="text-lighter">Timing</th>
                                                                <th><strong
                                                                        class="text-dark float-end">11AM-12PM</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>Counts</th>
                                                                <th><strong class="text-dark float-end ">24</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>Days</th>
                                                                <th><strong class="text-dark float-end ">M, T, W,
                                                                        TH, F</strong></th>
                                                            </tr>
                                                            <tr>
                                                                <th>Mode</th>
                                                                <th><strong class="text-dark float-end ">online</strong>
                                                                </th>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card overflow-hidden">
                                        <div class="d-md-flex">
                                            <div class="item-card9-img">
                                                <div class="item-card9-imgs">
                                                    <a href="parent-Course-detailpage.php"></a>
                                                    <img src="assets/images/products/h1.jpg" alt="img"
                                                        class="cover-image">
                                                </div>
                                            </div>
                                            <div class="card border-0 mb-0">
                                                <div class="card-body ">
                                                    <table class="table">
                                                        <tbody class="col-lg-12">
                                                            <tr>
                                                                <th>Batch Name</th>
                                                                <th><strong class="text-dark float-end ">Happy
                                                                        Day</strong></th>
                                                            </tr>
                                                            <tr>
                                                                <th>Short Name</th>
                                                                <th><strong class="text-dark float-end ">Way</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th class="text-lighter">Timing</th>
                                                                <th><strong
                                                                        class="text-dark float-end">11AM-12PM</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>Counts</th>
                                                                <th><strong class="text-dark float-end ">24</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>Days</th>
                                                                <th><strong class="text-dark float-end ">M, T, W,
                                                                        TH, F</strong></th>
                                                            </tr>
                                                            <tr>
                                                                <th>Mode</th>
                                                                <th><strong class="text-dark float-end ">online</strong>
                                                                </th>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane active" id="tab-12">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-xl-4">
                                            <div class="card overflow-hidden">
                                                <div class="item-card9-img">
                                                    <div class="item-card9-imgs">
                                                        <a href="parent-Course-detailpage.php"></a>
                                                        <img src="assets/images/products/f1.jpg" alt="img"
                                                            class="cover-image">
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <table class="table">
                                                        <tbody class="col-lg-12">
                                                            <tr>
                                                                <th>Batch Name</th>
                                                                <th><strong class="text-dark float-end ">Happy
                                                                        Day</strong></th>
                                                            </tr>
                                                            <tr>
                                                                <th>Short Name</th>
                                                                <th><strong class="text-dark float-end ">Way</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th class="text-lighter">Timing</th>
                                                                <th><strong
                                                                        class="text-dark float-end">11AM-12PM</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>Counts</th>
                                                                <th><strong class="text-dark float-end ">24</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>Days</th>
                                                                <th><strong class="text-dark float-end ">M, T, W,
                                                                        TH, F</strong></th>
                                                            </tr>
                                                            <tr>
                                                                <th>Mode</th>
                                                                <th><strong class="text-dark float-end ">online</strong>
                                                                </th>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-xl-4">
                                            <div class="card overflow-hidden">
                                                <div class="item-card9-img">
                                                    <div class="item-card9-imgs">
                                                        <a href="parent-Course-detailpage.php"></a>
                                                        <img src="assets/images/products/h2.jpg" alt="img"
                                                            class="cover-image">
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <table class="table">
                                                        <tbody class="col-lg-12">
                                                            <tr>
                                                                <th>Batch Name</th>
                                                                <th><strong class="text-dark float-end ">Happy
                                                                        Day</strong></th>
                                                            </tr>
                                                            <tr>
                                                                <th>Short Name</th>
                                                                <th><strong class="text-dark float-end ">Way</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th class="text-lighter">Timing</th>
                                                                <th><strong
                                                                        class="text-dark float-end">11AM-12PM</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>Counts</th>
                                                                <th><strong class="text-dark float-end ">24</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>Days</th>
                                                                <th><strong class="text-dark float-end ">M, T, W,
                                                                        TH, F</strong></th>
                                                            </tr>
                                                            <tr>
                                                                <th>Mode</th>
                                                                <th><strong class="text-dark float-end ">online</strong>
                                                                </th>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-xl-4">
                                            <div class="card overflow-hidden">
                                                <div class="item-card9-img">
                                                    <div class="item-card9-imgs">
                                                        <a href="parent-Course-detailpage.php"></a>
                                                        <img src="assets/images/products/f3.jpg" alt="img"
                                                            class="cover-image">
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <table class="table">
                                                        <tbody class="col-lg-12">
                                                            <tr>
                                                                <th>Batch Name</th>
                                                                <th><strong class="text-dark float-end ">Happy
                                                                        Day</strong></th>
                                                            </tr>
                                                            <tr>
                                                                <th>Short Name</th>
                                                                <th><strong class="text-dark float-end ">Way</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th class="text-lighter">Timing</th>
                                                                <th><strong
                                                                        class="text-dark float-end">11AM-12PM</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>Counts</th>
                                                                <th><strong class="text-dark float-end ">24</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>Days</th>
                                                                <th><strong class="text-dark float-end ">M, T, W,
                                                                        TH, F</strong></th>
                                                            </tr>
                                                            <tr>
                                                                <th>Mode</th>
                                                                <th><strong class="text-dark float-end ">online</strong>
                                                                </th>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-xl-4">
                                            <div class="card overflow-hidden">
                                                <div class="item-card9-img">
                                                    <div class="item-card9-imgs">
                                                        <a href="parent-Course-detailpage.php"></a>
                                                        <img src="assets/images/products/f4.jpg" alt="img"
                                                            class="cover-image">
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <table class="table">
                                                        <tbody class="col-lg-12">
                                                            <tr>
                                                                <th>Batch Name</th>
                                                                <th><strong class="text-dark float-end ">Happy
                                                                        Day</strong></th>
                                                            </tr>
                                                            <tr>
                                                                <th>Short Name</th>
                                                                <th><strong class="text-dark float-end ">Way</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th class="text-lighter">Timing</th>
                                                                <th><strong
                                                                        class="text-dark float-end">11AM-12PM</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>Counts</th>
                                                                <th><strong class="text-dark float-end ">24</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>Days</th>
                                                                <th><strong class="text-dark float-end ">M, T, W,
                                                                        TH, F</strong></th>
                                                            </tr>
                                                            <tr>
                                                                <th>Mode</th>
                                                                <th><strong class="text-dark float-end ">online</strong>
                                                                </th>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-xl-4">
                                            <div class="card overflow-hidden">
                                                <div class="item-card9-img">
                                                    <div class="item-card9-imgs">
                                                        <a href="parent-Course-detailpage.php"></a>
                                                        <img src="assets/images/products/h1.jpg" alt="img"
                                                            class="cover-image">
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <table class="table">
                                                        <tbody class="col-lg-12">
                                                            <tr>
                                                                <th>Batch Name</th>
                                                                <th><strong class="text-dark float-end ">Happy
                                                                        Day</strong></th>
                                                            </tr>
                                                            <tr>
                                                                <th>Short Name</th>
                                                                <th><strong class="text-dark float-end ">Way</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th class="text-lighter">Timing</th>
                                                                <th><strong
                                                                        class="text-dark float-end">11AM-12PM</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>Counts</th>
                                                                <th><strong class="text-dark float-end ">24</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>Days</th>
                                                                <th><strong class="text-dark float-end ">M, T, W,
                                                                        TH, F</strong></th>
                                                            </tr>
                                                            <tr>
                                                                <th>Mode</th>
                                                                <th><strong class="text-dark float-end ">online</strong>
                                                                </th>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-xl-4">
                                            <div class="card overflow-hidden">
                                                <div class="item-card9-img">
                                                    <div class="item-card9-imgs">
                                                        <a href="parent-Course-detailpage.php"></a>
                                                        <img src="assets/images/products/h2.jpg" alt="img"
                                                            class="cover-image">
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <table class="table">
                                                        <tbody class="col-lg-12">
                                                            <tr>
                                                                <th>Batch Name</th>
                                                                <th><strong class="text-dark float-end ">Happy
                                                                        Day</strong></th>
                                                            </tr>
                                                            <tr>
                                                                <th>Short Name</th>
                                                                <th><strong class="text-dark float-end ">Way</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th class="text-lighter">Timing</th>
                                                                <th><strong
                                                                        class="text-dark float-end">11AM-12PM</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>Counts</th>
                                                                <th><strong class="text-dark float-end ">24</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>Days</th>
                                                                <th><strong class="text-dark float-end ">M, T, W,
                                                                        TH, F</strong></th>
                                                            </tr>
                                                            <tr>
                                                                <th>Mode</th>
                                                                <th><strong class="text-dark float-end ">online</strong>
                                                                </th>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-xl-4">
                                            <div class="card overflow-hidden">
                                                <div class="item-card9-img">
                                                    <div class="item-card9-imgs">
                                                        <a href="parent-Course-detailpage.php"></a>
                                                        <img src="assets/images/products/h3.jpg" alt="img"
                                                            class="cover-image">
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <table class="table">
                                                        <tbody class="col-lg-12">
                                                            <tr>
                                                                <th>Batch Name</th>
                                                                <th><strong class="text-dark float-end ">Happy
                                                                        Day</strong></th>
                                                            </tr>
                                                            <tr>
                                                                <th>Short Name</th>
                                                                <th><strong class="text-dark float-end ">Way</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th class="text-lighter">Timing</th>
                                                                <th><strong
                                                                        class="text-dark float-end">11AM-12PM</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>Counts</th>
                                                                <th><strong class="text-dark float-end ">24</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>Days</th>
                                                                <th><strong class="text-dark float-end ">M, T, W,
                                                                        TH, F</strong></th>
                                                            </tr>
                                                            <tr>
                                                                <th>Mode</th>
                                                                <th><strong class="text-dark float-end ">online</strong>
                                                                </th>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-xl-4">
                                            <div class="card overflow-hidden">
                                                <div class="item-card9-img">
                                                    <div class="item-card9-imgs">
                                                        <a href="parent-Course-detailpage.php"></a>
                                                        <img src="assets/images/products/f3.jpg" alt="img"
                                                            class="cover-image">
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <table class="table">
                                                        <tbody class="col-lg-12">
                                                            <tr>
                                                                <th>Batch Name</th>
                                                                <th><strong class="text-dark float-end ">Happy
                                                                        Day</strong></th>
                                                            </tr>
                                                            <tr>
                                                                <th>Short Name</th>
                                                                <th><strong class="text-dark float-end ">Way</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th class="text-lighter">Timing</th>
                                                                <th><strong
                                                                        class="text-dark float-end">11AM-12PM</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>Counts</th>
                                                                <th><strong class="text-dark float-end ">24</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>Days</th>
                                                                <th><strong class="text-dark float-end ">M, T, W,
                                                                        TH, F</strong></th>
                                                            </tr>
                                                            <tr>
                                                                <th>Mode</th>
                                                                <th><strong class="text-dark float-end ">online</strong>
                                                                </th>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-xl-4">
                                            <div class="card overflow-hidden">
                                                <div class="item-card9-img">
                                                    <div class="item-card9-imgs">
                                                        <a href="parent-Course-detailpage.php"></a>
                                                        <img src="assets/images/products/f1.jpg" alt="img"
                                                            class="cover-image">
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <table class="table">
                                                        <tbody class="col-lg-12">
                                                            <tr>
                                                                <th>Batch Name</th>
                                                                <th><strong class="text-dark float-end ">Happy
                                                                        Day</strong></th>
                                                            </tr>
                                                            <tr>
                                                                <th>Short Name</th>
                                                                <th><strong class="text-dark float-end ">Way</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th class="text-lighter">Timing</th>
                                                                <th><strong
                                                                        class="text-dark float-end">11AM-12PM</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>Counts</th>
                                                                <th><strong class="text-dark float-end ">24</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>Days</th>
                                                                <th><strong class="text-dark float-end ">M, T, W,
                                                                        TH, F</strong></th>
                                                            </tr>
                                                            <tr>
                                                                <th>Mode</th>
                                                                <th><strong class="text-dark float-end ">online</strong>
                                                                </th>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="center-block text-center">
                            <ul class="pagination mb-0">
                                <li class="page-item page-prev disabled">
                                    <a class="page-link" href="#" tabindex="-1">Prev</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item page-next">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/Add lists-->
            </div>
        </div>
    </div>
</section>

<section class="sptb border-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-xl-6 col-md-12">
                <div class="sub-newsletter">
                    <h2 class="mb-2 fw-bold"><i class="fa fa-paper-plane-o me-2"></i> Subscribe To Our Newsletter</h2>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                </div>
            </div>
            <div class="col-lg-5 col-xl-6 col-md-12">
                <div class="input-group sub-input mt-1">
                    <input type="text" class="form-control input-lg bg-white" placeholder="Enter your Email">
                    <button type="button" class="btn btn-secondary btn-lg br-tr-3  br-br-3">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php') ?>