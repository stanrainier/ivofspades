<?php
require_once "../../models/registration.php";
// require_once "../../models/captcha.php";
include "template.php";

error_reporting(0);
ini_set('display_errors', 0);
?>
<!DOCTYPE html>
<html>


<body class="bg-default" >
  <!-- Main content -->
  <div class="main-content" style="background-color: linear-gradient(87deg, #5e72e4 0, #825ee4 100%) !important">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
              <img src="../assets/img/brand/logo.png">
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary border-0">
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <h1>Create user account</h1>
              </div>
              <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
                <div class="form-group">
                  <label>Username</label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
                  </div>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
                  </div>
                </div>
                <div class="form-group">
                  <label>Confirm Password</label>
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                </div>
                     <!-- <hr> -->
                <!-- CAPTCHA -->
              <!--   <p>Finish the CAPTCHA</p>
                <div class="form-group mb-3">
                  <div>
                    <img src="capacha.jpg" style="width:150px;">
                  </div>
                </div>
                <div>
                  <input type="text" name="number" id="number" placeholder="Enter CAPTCHA here" class="form-control" required autocomplete="off">
                </div>
                <hr> -->
                <div class="text-center">
                  <input type="submit" name="Login" id="Login" class="btn btn-primary mt-4"></input>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row mt-3">
         <div class="col-9">
                  <a href="index.php" class="text-light"><text>Already have an account?</text></a>
                </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>