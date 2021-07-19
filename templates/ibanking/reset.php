<div class="wrapper">
    <!-- header -->
    <div class="header">
        <div class="row no-gutters">
            <div class="col-auto">
                <a href="/ibanking/auth/login" class="btn  btn-link text-dark"><i class="material-icons">chevron_left</i></a>
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
                    <input type="email" id="inputEmail" class="form-control form-control-lg text-center" placeholder="Account Number OR Email Address" required="" autofocus="">
                </div>
                <p class="text-secondary mt-4 d-block">If you already have password,<br>please <a href="/ibanking/auth/login" class="">Sign in</a> here</p>
            </form>
        </div>
    </div>

    <!-- login buttons -->
    <div class="row mx-0 bottom-button-container">
        <div class="col">
            <button type="submit" class="btn btn-default btn-lg btn-rounded shadow btn-block">Reset Password</button>
        </div>
    </div>
    <!-- login buttons -->
</div>