<?php include('header.php') ?>

<section>
    <div class="bannerimg cover-image bg-background9 sptb-2" data-bs-image-src="assets/images/banners/banner2.jpg">
        <div class="header-text mb-0">
            <div class="container">
                <div class="text-center text-white ">
                    <h1 class="">Forgot Password</h1>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item  text-white">Forgot Password</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-xl-4 col-md-6 d-block mx-auto">
                <div class="single-page w-100 p-0">
                    <div class="wrapper wrapper2">
                        <form id="forgotpsd" class="card-body">
                            <h3 class="pb-2">Forgot password</h3>
                            <div class="mail">
                                <input type="email" name="mail">
                                <label>Mail or Username</label>
                            </div>
                            <div class="submit">
                                <a href="#" class=" btn btn-info px-5" data-bs-toggle="modal" data-bs-target="#changepassword"><span class="">Send</span></a>
                            </div>
                            <div class="text-center text-dark mb-0">
                                Forget it, <a href="#">send me back</a> to the sign in.
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade " id="changepassword" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-dash ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleCommentLongTitle"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="Register" class="card-body" tabindex="500">
                    <div class="text-start">
                        <h2 class="text-primary ">Change Password</h2>
                    </div>
                    <div class="form-group">
                        <label class="form-label">New Password</label>
                        <input type="password" class="form-control " placeholder="new password">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Comfrim Password</label>
                        <input type="password" class="form-control " placeholder="comfrim password">
                    </div>
                    <div class="submit text-center mt-2">
                        <a href="#" class=" btn btn-info " data-bs-toggle="modal" data-bs-target="#thankyou"><span class="">Submit</span></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade " id="thankyou" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content bg-dash ">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleCommentLongTitle"></h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
				</button>
			</div>
			<div class="modal-body">
				<div class=" mb-0 p-5">
					<div class="text-center m-5">
						<img src="assets/images/brand/hovee_attendance_1.svg" loading="lazy" alt="hovee" width="140" class="">
					</div>
					<h1 class=" text-center  text-primary fw-bold fs-1">Thank You</h1>
					<p class="text-dark text-center fs-5">"Thank you for submitting your password has been changed</p>
					<div class="submit text-center mt-2">
						<a href="index.php" class=" btn btn-primary px-5 fs-6"><span class="">Okay</span></a>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<?php include('footer.php') ?>