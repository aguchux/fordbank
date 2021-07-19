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
                    <input type="email" id="inputEmail" class="form-control form-control-lg text-center" placeholder="Account Number" required="" autofocus="">
                </div>

                <div class="form-group">
                    <input type="password" id="inputPassword" class="form-control form-control-lg text-center" placeholder="Password" required="">
                </div>

                <div class="row">
                    <div class="col-6 text-left"><a href="/ibanking/auth/register" class="mt-4 d-block">Create Account</a></div>
                    <div class="col-6 text-right"><a href="/ibanking/auth/reset" class="mt-4 d-block">Reset Password?</a> </div>
                </div>

            </form>
        </div>
    </div>

    <!-- login buttons -->
    <div class="row mx-0 bottom-button-container">
        <div class="col">
            <a href="/ibanking/auth/login" class="btn btn-default btn-lg btn-rounded shadow btn-block">Login</a>
        </div>
    </div>
    <!-- login buttons -->
</div>