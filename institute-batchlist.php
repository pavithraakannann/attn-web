<?php include('header-institute.php') ?>

<section>
    <div class="bannerimg cover-image bg-background3 sptb-2 bg-white"
        data-bs-image-src="assets/images/banners/banner2.jpg">
        <div class="header-text mb-0">
            <div class="container">
            <div class="text-center text-white ">
                    <h1 class=""> Batches</h1>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="institute-dashboard.php">Home</a></li>
                        <li class="breadcrumb-item  text-white">Batch list</li>
                    </ol>
                </div>
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
                    <div class="card-header bg-primary py-1">
                        <h3 class="card-title text-white fs-5 ">My Batches</h3>
                        <div class="ms-auto">
                            <h3 class="card-title fw-bold">
                                <ul class="nav item2-gl-menu ms-auto ">
                                    <li class="">
                                        <div class="dropdown my-1 mx-2">
                                            <button class="text-dark dropdown-toggle btn btn-white py-1" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                Select courses
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item fs-6" href="#">Batch 1</a></li>
                                                <li><a class="dropdown-item fs-6" href="#">Batch 2</a></li>
                                                <li><a class="dropdown-item fs-6" href="#">Batch 3</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="mx-2 my-2">
                                        <a href="institute-add-batch.php" class="text-white fw-bold  fs-6  ">+ Add
                                        </a>
                                    </li>
                                </ul>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="items-blog-tab text-center">
                    <div class="items-blog-tab-heading row">
                        <div class="col-12">
                            <ul class="nav items-blog-tab-menu">
                                <li class=""><a href="#tab-1" class="active show" data-bs-toggle="tab">Total</a>
                                </li>
                                <li><a href="#tab-2" data-bs-toggle="tab" class="">Active</a></li>
                                <li><a href="#tab-3" data-bs-toggle="tab" class="">Inactive</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content mt-5">
                        <div class="tab-pane active" id="tab-1">
                            <div class="row ">
                                <div class="col-xl-4 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="item-card7-imgs ">
                                            <a href="#"></a>
                                            <img src="assets/images/products/products/ed1.jpg" alt="img"
                                                class="cover-image">

                                        </div>
                                        <div class="item-card2-icons">
                                            <a href="#" class=" item-card2-icons-l bg-primary" data-bs-toggle="modal"
                                                data-bs-target="#edit"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="item-card2-icons-l bg-secondary">
                                                <i class="fa fa-trash-o"></i></a>
                                        </div>
                                        <div class="card-body p-2">
                                            <table class="table">
                                                <tbody class="col-lg-12">
                                                    <tr>
                                                        <th class="text-start">Batch Name</th>
                                                        <th><strong class="text-gray float-end ">Happy
                                                                Day</strong></th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Short Name</th>
                                                        <th><strong class="text-gray float-end ">Way</strong>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start text-lighter">Timing</th>
                                                        <th><strong class="text-gray float-end">11AM-12PM</strong>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Counts</th>
                                                        <th><strong class="text-gray float-end ">24</strong>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Days</th>
                                                        <th><strong class="text-gray float-end ">M, T, W,
                                                                TH, F</strong></th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Mode</th>
                                                        <th><strong class="text-gray float-end ">online</strong>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="card-body p-2">
                                            <a href="#" class="btn btn-secondary btn-block">Chat</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="item-card7-imgs ">
                                            <a href="#"></a>
                                            <img src="assets/images/products/products/ed3.jpg" alt="img"
                                                class="cover-image">
                                        </div>
                                        <div class="item-card2-icons">
                                            <a href="#" class=" item-card2-icons-l bg-primary" data-bs-toggle="modal"
                                                data-bs-target="#edit"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="item-card2-icons-l bg-secondary">
                                                <i class="fa fa-trash-o"></i></a>
                                        </div>
                                        <div class="card-body p-2">
                                            <table class="table">
                                                <tbody class="col-lg-12">
                                                    <tr>
                                                        <th class="text-start">Batch Name</th>
                                                        <th><strong class="text-gray float-end ">Happy
                                                                Day</strong></th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Short Name</th>
                                                        <th><strong class="text-gray float-end ">Way</strong>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start text-lighter">Timing</th>
                                                        <th><strong class="text-gray float-end">11AM-12PM</strong>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Counts</th>
                                                        <th><strong class="text-gray float-end ">24</strong>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Days</th>
                                                        <th><strong class="text-gray float-end ">M, T, W,
                                                                TH, F</strong></th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Mode</th>
                                                        <th><strong class="text-gray float-end ">online</strong>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="card-body p-2">
                                            <a href="#" class="btn btn-secondary btn-block">Chat</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="item-card7-imgs ">
                                            <a href="#"></a>
                                            <img src="assets/images/products/products/ed2.jpg" alt="img"
                                                class="cover-image">
                                        </div>
                                        <div class="item-card2-icons">
                                            <a href="#" class=" item-card2-icons-l bg-primary" data-bs-toggle="modal"
                                                data-bs-target="#edit"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="item-card2-icons-l bg-secondary">
                                                <i class="fa fa-trash-o"></i></a>
                                        </div>
                                        <div class="card-body p-2">
                                            <table class="table">
                                                <tbody class="col-lg-12">
                                                    <tr>
                                                        <th class="text-start">Batch Name</th>
                                                        <th><strong class="text-gray float-end ">Happy
                                                                Day</strong></th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Short Name</th>
                                                        <th><strong class="text-gray float-end ">Way</strong>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start text-lighter">Timing</th>
                                                        <th><strong class="text-gray float-end">11AM-12PM</strong>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Counts</th>
                                                        <th><strong class="text-gray float-end ">24</strong>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Days</th>
                                                        <th><strong class="text-gray float-end ">M, T, W,
                                                                TH, F</strong></th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Mode</th>
                                                        <th><strong class="text-gray float-end ">online</strong>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="card-body p-2">
                                            <a href="#" class="btn btn-secondary btn-block">Chat</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="item-card7-imgs ">
                                            <a href="#"></a>
                                            <img src="assets/images/products/products/ed1.jpg" alt="img"
                                                class="cover-image">
                                        </div>
                                        <div class="item-card2-icons">
                                            <a href="#" class=" item-card2-icons-l bg-primary" data-bs-toggle="modal"
                                                data-bs-target="#edit"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="item-card2-icons-l bg-secondary">
                                                <i class="fa fa-trash-o"></i></a>
                                        </div>
                                        <div class="card-body p-2">
                                            <table class="table">
                                                <tbody class="col-lg-12">
                                                    <tr>
                                                        <th class="text-start">Batch Name</th>
                                                        <th><strong class="text-gray float-end ">Happy
                                                                Day</strong></th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Short Name</th>
                                                        <th><strong class="text-gray float-end ">Way</strong>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start text-lighter">Timing</th>
                                                        <th><strong class="text-gray float-end">11AM-12PM</strong>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Counts</th>
                                                        <th><strong class="text-gray float-end ">24</strong>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Days</th>
                                                        <th><strong class="text-gray float-end ">M, T, W,
                                                                TH, F</strong></th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Mode</th>
                                                        <th><strong class="text-gray float-end ">online</strong>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="card-body p-2">
                                            <a href="#" class="btn btn-secondary btn-block">Chat</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="item-card7-imgs ">
                                            <a href="#"></a>
                                            <img src="assets/images/products/products/ed3.jpg" alt="img"
                                                class="cover-image">
                                        </div>
                                        <div class="item-card2-icons">
                                            <a href="#" class=" item-card2-icons-l bg-primary" data-bs-toggle="modal"
                                                data-bs-target="#edit"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="item-card2-icons-l bg-secondary">
                                                <i class="fa fa-trash-o"></i></a>
                                        </div>
                                        <div class="card-body p-2">
                                            <table class="table">
                                                <tbody class="col-lg-12">
                                                    <tr>
                                                        <th class="text-start">Batch Name</th>
                                                        <th><strong class="text-gray float-end ">Happy
                                                                Day</strong></th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Short Name</th>
                                                        <th><strong class="text-gray float-end ">Way</strong>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start text-lighter">Timing</th>
                                                        <th><strong class="text-gray float-end">11AM-12PM</strong>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Counts</th>
                                                        <th><strong class="text-gray float-end ">24</strong>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Days</th>
                                                        <th><strong class="text-gray float-end ">M, T, W,
                                                                TH, F</strong></th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Mode</th>
                                                        <th><strong class="text-gray float-end ">online</strong>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="card-body p-2">
                                            <a href="#" class="btn btn-secondary btn-block">Chat</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="item-card7-imgs ">
                                            <a href="#"></a>
                                            <img src="assets/images/products/products/ed2.jpg" alt="img"
                                                class="cover-image">
                                        </div>
                                        <div class="item-card2-icons">
                                            <a href="#" class=" item-card2-icons-l bg-primary" data-bs-toggle="modal"
                                                data-bs-target="#edit"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="item-card2-icons-l bg-secondary">
                                                <i class="fa fa-trash-o"></i></a>
                                        </div>
                                        <div class="card-body p-2">
                                            <table class="table">
                                                <tbody class="col-lg-12">
                                                    <tr>
                                                        <th class="text-start">Batch Name</th>
                                                        <th><strong class="text-gray float-end ">Happy
                                                                Day</strong></th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Short Name</th>
                                                        <th><strong class="text-gray float-end ">Way</strong>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start text-lighter">Timing</th>
                                                        <th><strong class="text-gray float-end">11AM-12PM</strong>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Counts</th>
                                                        <th><strong class="text-gray float-end ">24</strong>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Days</th>
                                                        <th><strong class="text-gray float-end ">M, T, W,
                                                                TH, F</strong></th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Mode</th>
                                                        <th><strong class="text-gray float-end ">online</strong>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="card-body p-2">
                                            <a href="#" class="btn btn-secondary btn-block">Chat</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-2">
                            <div class="row ">
                                <div class="col-xl-4 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="item-card7-imgs ">
                                            <a href="#"></a>
                                            <img src="assets/images/products/products/ed1.jpg" alt="img"
                                                class="cover-image">
                                        </div>
                                        <div class="item-card2-icons">
                                            <a href="#" class=" item-card2-icons-l bg-primary" data-bs-toggle="modal"
                                                data-bs-target="#edit"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="item-card2-icons-l bg-secondary">
                                                <i class="fa fa-trash-o"></i></a>
                                        </div>
                                        <div class="card-body p-2">
                                            <table class="table">
                                                <tbody class="col-lg-12">
                                                    <tr>
                                                        <th class="text-start">Batch Name</th>
                                                        <th><strong class="text-gray float-end ">Happy
                                                                Day</strong></th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Short Name</th>
                                                        <th><strong class="text-gray float-end ">Way</strong>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start text-lighter">Timing</th>
                                                        <th><strong class="text-gray float-end">11AM-12PM</strong>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Counts</th>
                                                        <th><strong class="text-gray float-end ">24</strong>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Days</th>
                                                        <th><strong class="text-gray float-end ">M, T, W,
                                                                TH, F</strong></th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Mode</th>
                                                        <th><strong class="text-gray float-end ">online</strong>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="card-body p-2">
                                            <a href="#" class="btn btn-secondary btn-block">Chat</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="item-card7-imgs ">
                                            <a href="#"></a>
                                            <img src="assets/images/products/products/ed3.jpg" alt="img"
                                                class="cover-image">
                                        </div>
                                        <div class="item-card2-icons">
                                            <a href="#" class=" item-card2-icons-l bg-primary" data-bs-toggle="modal"
                                                data-bs-target="#edit"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="item-card2-icons-l bg-secondary">
                                                <i class="fa fa-trash-o"></i></a>
                                        </div>
                                        <div class="card-body p-2">
                                            <table class="table">
                                                <tbody class="col-lg-12">
                                                    <tr>
                                                        <th class="text-start">Batch Name</th>
                                                        <th><strong class="text-gray float-end ">Happy
                                                                Day</strong></th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Short Name</th>
                                                        <th><strong class="text-gray float-end ">Way</strong>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start text-lighter">Timing</th>
                                                        <th><strong class="text-gray float-end">11AM-12PM</strong>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Counts</th>
                                                        <th><strong class="text-gray float-end ">24</strong>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Days</th>
                                                        <th><strong class="text-gray float-end ">M, T, W,
                                                                TH, F</strong></th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Mode</th>
                                                        <th><strong class="text-gray float-end ">online</strong>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="card-body p-2">
                                            <a href="#" class="btn btn-secondary btn-block">Chat</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="item-card7-imgs ">
                                            <a href="#"></a>
                                            <img src="assets/images/products/products/ed2.jpg" alt="img"
                                                class="cover-image">
                                        </div>
                                        <div class="item-card2-icons">
                                            <a href="#" class=" item-card2-icons-l bg-primary" data-bs-toggle="modal"
                                                data-bs-target="#edit"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="item-card2-icons-l bg-secondary">
                                                <i class="fa fa-trash-o"></i></a>
                                        </div>
                                        <div class="card-body p-2">
                                            <table class="table">
                                                <tbody class="col-lg-12">
                                                    <tr>
                                                        <th class="text-start">Batch Name</th>
                                                        <th><strong class="text-gray float-end ">Happy
                                                                Day</strong></th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Short Name</th>
                                                        <th><strong class="text-gray float-end ">Way</strong>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start text-lighter">Timing</th>
                                                        <th><strong class="text-gray float-end">11AM-12PM</strong>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Counts</th>
                                                        <th><strong class="text-gray float-end ">24</strong>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Days</th>
                                                        <th><strong class="text-gray float-end ">M, T, W,
                                                                TH, F</strong></th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Mode</th>
                                                        <th><strong class="text-gray float-end ">online</strong>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="card-body p-2">
                                            <a href="#" class="btn btn-secondary btn-block">Chat</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="item-card7-imgs ">
                                            <a href="#"></a>
                                            <img src="assets/images/products/products/ed1.jpg" alt="img"
                                                class="cover-image">
                                        </div>
                                        <div class="item-card2-icons">
                                            <a href="#" class=" item-card2-icons-l bg-primary" data-bs-toggle="modal"
                                                data-bs-target="#edit"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="item-card2-icons-l bg-secondary">
                                                <i class="fa fa-trash-o"></i></a>
                                        </div>
                                        <div class="card-body p-2">
                                            <table class="table">
                                                <tbody class="col-lg-12">
                                                    <tr>
                                                        <th class="text-start">Batch Name</th>
                                                        <th><strong class="text-gray float-end ">Happy
                                                                Day</strong></th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Short Name</th>
                                                        <th><strong class="text-gray float-end ">Way</strong>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start text-lighter">Timing</th>
                                                        <th><strong class="text-gray float-end">11AM-12PM</strong>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Counts</th>
                                                        <th><strong class="text-gray float-end ">24</strong>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Days</th>
                                                        <th><strong class="text-gray float-end ">M, T, W,
                                                                TH, F</strong></th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Mode</th>
                                                        <th><strong class="text-gray float-end ">online</strong>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="card-body p-2">
                                            <a href="#" class="btn btn-secondary btn-block">Chat</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-3">
                            <div class="row ">
                                <div class="col-xl-4 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="item-card7-imgs ">
                                            <a href="#"></a>
                                            <img src="assets/images/products/products/ed1.jpg" alt="img"
                                                class="cover-image">
                                        </div>
                                        <div class="item-card2-icons">
                                            <a href="#" class=" item-card2-icons-l bg-primary" data-bs-toggle="modal"
                                                data-bs-target="#edit"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="item-card2-icons-l bg-secondary">
                                                <i class="fa fa-trash-o"></i></a>
                                        </div>
                                        <div class="card-body p-2">
                                            <table class="table">
                                                <tbody class="col-lg-12">
                                                    <tr>
                                                        <th class="text-start">Batch Name</th>
                                                        <th><strong class="text-gray float-end ">Happy
                                                                Day</strong></th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Short Name</th>
                                                        <th><strong class="text-gray float-end ">Way</strong>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start text-lighter">Timing</th>
                                                        <th><strong class="text-gray float-end">11AM-12PM</strong>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Counts</th>
                                                        <th><strong class="text-gray float-end ">24</strong>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Days</th>
                                                        <th><strong class="text-gray float-end ">M, T, W,
                                                                TH, F</strong></th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Mode</th>
                                                        <th><strong class="text-gray float-end ">online</strong>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="card-body p-2">
                                            <a href="#" class="btn btn-secondary btn-block">Chat</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="item-card7-imgs ">
                                            <a href="#"></a>
                                            <img src="assets/images/products/products/ed3.jpg" alt="img"
                                                class="cover-image">
                                        </div>
                                        <div class="item-card2-icons">
                                            <a href="#" class=" item-card2-icons-l bg-primary" data-bs-toggle="modal"
                                                data-bs-target="#edit"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="item-card2-icons-l bg-secondary">
                                                <i class="fa fa-trash-o"></i></a>
                                        </div>
                                        <div class="card-body p-2">
                                            <table class="table">
                                                <tbody class="col-lg-12">
                                                    <tr>
                                                        <th class="text-start">Batch Name</th>
                                                        <th><strong class="text-gray float-end ">Happy
                                                                Day</strong></th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Short Name</th>
                                                        <th><strong class="text-gray float-end ">Way</strong>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start text-lighter">Timing</th>
                                                        <th><strong class="text-gray float-end">11AM-12PM</strong>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Counts</th>
                                                        <th><strong class="text-gray float-end ">24</strong>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Days</th>
                                                        <th><strong class="text-gray float-end ">M, T, W,
                                                                TH, F</strong></th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-start">Mode</th>
                                                        <th><strong class="text-gray float-end ">online</strong>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="card-body p-2">
                                            <a href="#" class="btn btn-secondary btn-block">Chat</a>
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

<div class="modal fade " id="edit" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content  ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleCommentLongTitle"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="card ">
                    <div class="card-header ">
                        <h3 class="card-title">Edit Batch</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label">Branch name</label>
                            <input type="text" class="form-control " placeholder="Branch name"
                                value="Mogappair east">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Batch name</label>
                            <input type="text" class="form-control " placeholder="Batch name" value="Happy">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Batch teacher</label>
                                    <input type="text" class="form-control " placeholder="Batch teacher"
                                        value="Kavitha">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Batch timings</label>
                                    <input type="time" class="form-control " placeholder="Batch timings">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Batch maximum slots</label>
                            <input type="text" class="form-control " placeholder="Batch maximum slots" value="Two">
                        </div>
                        <div class="form-group">
                            <label class="form-label text-dark">Batch days</label>
                            <div class="d-md-flex ad-post-details">
                                <label class="custom-control custom-radio mb-2 me-4">
                                    <input type="radio" class="custom-control-input" name="radios" value="option1"
                                        checked="">
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
                    </div>
                    <div class="card-footer text-center">
                        <a href="institute-batchlist.php" class="btn btn-primary">Submit now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('footer.php') ?>