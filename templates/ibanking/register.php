<div class="wrapper">
    <!-- header -->
    <div class="header">
        <div class="row no-gutters">
            <div class="col-auto">
                <a href="/" class="btn  btn-link text-dark"><i class="material-icons">chevron_left</i></a>
            </div>
            <div class="col text-center"></div>
            <div class="col-auto">
            </div>
        </div>
    </div>
    <!-- header ends -->

    <div class="row no-gutters login-row">
        <div class="col align-self-center px-3 text-center">
            <br>
            <img src="<?= $assets ?>/dashboard/img/logo-login.png" alt="Ford Merchants" class="logo-small">
            <form class="form-signin mt-3 ">
                <div class="form-group">
                    <input type="text" id="username" class="form-control form-control-lg text-center" placeholder="Username" required="" autofocus="">
                </div>
                <div class="form-group">
                    <input type="number" id="phone" class="form-control form-control-lg text-center" placeholder="Phone Number" required="">
                </div>
                <div class="form-group">
                    <input type="email" id="inputEmail" class="form-control form-control-lg text-center" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" id="inputPassword" class="form-control form-control-lg text-center" placeholder="Password" required="">
                </div>
                <div class="form-group">
                    <input type="password" id="confirmPassword" class="form-control form-control-lg text-center" placeholder="Confirm Password" required="">
                </div>

                <div class="row">
                    <div class="col-12 text-center"><a href="/ibanking/auth/login" class="mt-4 d-block">Already register? Login</a></div>
                </div>
                
                <p class="mt-4 d-block text-secondary">
                    By clicking register your are agree to the
                    <a href="javascript:void(0)">Terms and Condition.</a>
                </p>


                
            </form>
        </div>
    </div>

    <!-- login buttons -->
    <div class="row mx-0 bottom-button-container">
        <div class="col">
            <a href="otp.html" class="btn btn-default btn-lg btn-rounded shadow btn-block">Next</a>
        </div>
    </div>
    <!-- login buttons -->
</div>