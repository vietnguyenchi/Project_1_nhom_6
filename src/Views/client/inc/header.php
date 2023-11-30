<!-- Start Nav -->
<nav id="nav-bar" class="navbar navbar-expand-lg bg-body-tertiary px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="/">FPOLY Hotel</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active me-2" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="rooms">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="facilities">Facilities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="contact">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="about">About</a>
                </li>
            </ul>
            <?php 
                if(empty($_SESSION['name'])) {
                    echo '
                        <div class="d-flex" role="search">
                            <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-2" data-bs-toggle="modal"
                                data-bs-target="#loginModal">
                                Login
                            </button>
                            <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal"
                                data-bs-target="#registerModal">
                                Register
                            </button>
                        </div>
                    ';
                }else {
                    echo '
                    <div class="dropdown">
                        <button class="btn border-dark dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="../../..'.$_SESSION['avatar'].'" width="28" class="rounded-circle border border-secondary border-2 me-1">
                            '.$_SESSION['name'].'
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a href="/profile" class="dropdown-item" type="button">Profile</a></li>
                            <li><a href="#" class="dropdown-item" type="button">Bookings</a></li>
                            <li><a href="/logout" class="dropdown-item" type="button">Logout</a></li>
                        </ul>
                    </div>
                    ';
                }
            ?>
        </div>
    </div>
</nav>
<!-- End Nav -->

<!-- Start Modal login/register -->
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 d-flex align-items-center">
                        <i class="bi bi-person-circle fs-3 me-2"></i>
                        User Login
                    </h1>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Email / Phone number</label>
                        <input name="phone_email" type="text" class="form-control shadow-none" />
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Password</label>
                        <input name="password" type="password" class="form-control shadow-none" />
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <button type="submit" name="login" class="btn btn-dark shadow-none">
                            LOGIN
                        </button>
                        <a href="javascrip: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <form method="POST">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 d-flex align-items-center">
                        <i class="bi bi-person-lines-fill fs-3 me-2"></i>
                        User Registration
                    </h1>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
                        Note: Your details must match with your ID (ID card, passport,
                        drinving license, etc.) that will be required during check-in.
                    </span> -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 ps-0 mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control shadow-none" required/>
                            </div>
                            <div class="col-md-12 ps-0 mb-3">
                                <label class="form-label">Email / Phone number</label>
                                <input type="text" name="email_phoneNumber" class="form-control shadow-none" required/>
                            </div>
                            <!-- <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="text" name="phone" class="form-control shadow-none" />
                            </div> -->
                            <!-- <div class="col-md-6 ps-0 mb-3">
                                  <label class="form-label">Picture</label>
                                  <input type="file" name="avatar" class="form-control shadow-none" />
                              </div> -->
                            <!-- <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Date of birth</label>
                                <input type="date" name="dob" class="form-control shadow-none" />
                            </div> -->
                            <!-- <div class="col-md-12 ps-0 mb-3">
                                <label class="form-label">Address</label>
                                <textarea name="address" class="form-control shadow-none" rows="1"></textarea>
                            </div> -->
                            <!-- <div class="col-md-6 ps-0 mb-3">
                                  <label class="form-label">Pincode</label>
                                  <input type="text" name="pincode" class="form-control shadow-none" />
                              </div> -->
                            <div class="col-md-12 ps-0 mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control shadow-none" required/>
                            </div>
                            <div class="col-md-12 ps-0 mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" name="confirm_password" class="form-control shadow-none" required/>
                            </div>
                        </div>
                    </div>
                    <div class="text-center my-1">
                        <button type="submit" name="register" class="btn btn-dark shadow-none">
                            REGISTER
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal login/register -->