<?php include('header.php') ?>

<section>
	<div class="bannerimg cover-image bg-background3 sptb-2 bg-white" data-bs-image-src="assets/images/banners/banner2.jpg">
		<div class="header-text mb-0">
			<div class="container">
				<div class="text-center text-white ">
					<h1 class="">OTP</h1>
					<ol class="breadcrumb text-center">
						<li class="breadcrumb-item"><a href="index.php">Home</a></li>
						<li class="breadcrumb-item  text-white">OTP</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="sptb bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-xl-4 col-md-6 d-block mx-auto">
                <div class="single-page w-100 p-0">
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
                            </div>
                            <div class="submit">
                                <a href="#" class=" btn btn-secondary btn-block" data-bs-toggle="modal"
                                    data-bs-target="#thankyou"><span class="">Verify</span></a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sptb bg-white border-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-xl-6 col-md-12">
                <div class="sub-newsletter">
                    <h3 class="mb-2"><i class="fa fa-paper-plane-o me-2"></i> Subscribe to our newsletter</h3>
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
                        <a href="select-role.php" class=" btn btn-secondary px-5 fs-6"><span class="">Okay</span></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- <div class="modal fade " id="register" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content  ">
            <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
                <h5 class="text-primary pt-4 pb-5 fs-3 fw-bold text-center">Select Your Role</h5>
                <div class="row mt-5">
                    <div class="col-lg-4 col-md-6">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="cat-item text-center">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#teacher"></a>
                                    <div class="cat-img">
                                        <img src="assets/images/categories/apr-white.png" alt="img">
                                    </div>
                                    <div class="cat-desc">
                                        <h3 class="font-weight-semibold mb-0 fs-6">Teacher</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="cat-item text-center">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#student"></a>
                                    <div class="cat-img" >
                                        <img src="assets/images/categories/6.png" alt="img">
                                    </div>
                                    <div class="cat-desc">
                                        <h3 class="font-weight-semibold mb-0 fs-6">Student</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="cat-item text-center">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#hostel"></a>
                                    <div class="cat-img">
                                        <img src="assets/images/categories/apr.png" alt="img">
                                    </div>
                                    <div class="cat-desc">
                                        <h3 class="font-weight-semibold mb-0 fs-6">Hostel</h3>
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

<div class="modal fade " id="teacher" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">
            <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
                <h5 class="text-primary pt-4 pb-5 fs-3 fw-bold text-center">Select your role</h5>
                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="cat-item text-center">
                                    <a href="tutor-details-form.php"></a>
                                    <div class="cat-img">
                                        <img src="assets/images/categories/5.png" alt="img">
                                    </div>
                                    <div class="cat-desc">
                                        <h3 class="font-weight-semibold mb-0 fs-6"> Individual tutor</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="cat-item text-center">
                                    <a href="institute-details-form.php"></a>
                                    <div class="cat-img">
                                        <img src="assets/images/categories/apartment.png" alt="img">
                                    </div>
                                    <div class="cat-desc">
                                        <h3 class="font-weight-semibold mb-0 fs-6"> Institute</h3>
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

<div class="modal fade " id="student" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">
            <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
                <h5 class="text-primary pt-4 pb-5 fs-3 fw-bold text-center">Age Group Eligibility</h5>
                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="cat-item text-center">
                                    <a href="parent-detailform.php"></a>
                                    <div class="cat-img">
                                        <img src="assets/images/categories/duplex.png" alt="img">
                                    </div>
                                    <div class="cat-desc">
                                        <h3 class="font-weight-semibold mb-0 fs-6">Parent </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="cat-item text-center">
                                    <a href="student-detail-form.php"></a>
                                    <div class="cat-img">
                                        <img src="assets/images/categories/10.jpg" alt="img">
                                    </div>
                                    <div class="cat-desc">
                                        <h3 class="font-weight-semibold mb-0 fs-6">Student</h3>
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

<div class="modal fade " id="hostel" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">
            <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
                <h5 class="text-primary pt-4 pb-5 fs-3 fw-bold text-center">Select Your role</h5>
                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="cat-item text-center">
                                    <a href="hostel-detailform.php"></a>
                                    <div class="cat-img">
                                        <img src="assets/images/categories/5.png" alt="img">
                                    </div>
                                    <div class="cat-desc">
                                        <h3 class="font-weight-semibold mb-0 fs-6">Hostel proprietor </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="cat-item text-center">
                                    <a href="hosteller-detailform.php"></a>
                                    <div class="cat-img">
                                        <img src="assets/images/categories/apartment.png" alt="img">
                                    </div>
                                    <div class="cat-desc">
                                        <h3 class="font-weight-semibold mb-0 fs-6">Hosteller</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div> -->

<script>
    var otp_inputs = document.querySelectorAll(".otp__digit")
var mykey = "0123456789".split("")
otp_inputs.forEach((_)=>{
  _.addEventListener("keyup", handle_next_input)
})
function handle_next_input(event){
  let current = event.target
  let index = parseInt(current.classList[1].split("__")[2])
  current.value = event.key
  
  if(event.keyCode == 8 && index > 1){
    current.previousElementSibling.focus()
  }
  if(index < 5 && mykey.indexOf(""+event.key+"") != -1){
    var next = current.nextElementSibling;
    next.focus()
  }
  var _finalKey = ""
  for(let {value} of otp_inputs){
      _finalKey += value
  }
  if(_finalKey.length == 5){
    document.querySelector("#_otp").classList.replace("_notok", "_ok")
    document.querySelector("#_otp").innerText = _finalKey
  }else{
    document.querySelector("#_otp").classList.replace("_ok", "_notok")
    document.querySelector("#_otp").innerText = _finalKey
  }
}
</script>
<?php include('footer.php') ?>