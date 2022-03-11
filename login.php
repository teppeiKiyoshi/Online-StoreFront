<?php
session_start();
if (isset($_SESSION['email'])) {
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="css/login-style.css" />
  <title>The Artbox | Sign In</title>
  <script src="js/verifyLogin.js"></script>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <!-- ===== LOGIN FORM HERE ===== -->
        <form method="POST" id="form_id" class="sign-in-form" name="myform" onsubmit="verifyLogin(this.email_login.value, this.password_login.value); return false">
          <h2 class="title">Sign in</h2>
          <p id="errorMessage" style="color: red"></p>
          <div class="input-field">
            <i class="bx bxs-user"></i>
            <input type="email" name="email" id="email_login" placeholder="Email" required />
          </div>
          <div class="input-field">
            <i class="bx bxs-lock"></i>
            <input type="password" name="password" id="password_login" placeholder="Password" required />
          </div>
          <a href="#" class="forgot-pw" style="text-decoration: none; color: black; font-size: 14px;">
            <p id=" forgot" class="forgot-pass" onclick="forgotShow();">Forgot Password?</p>
          </a>
          <input type="submit" value="Login" class="btn solid" id="login_button" />
          <p class="social-text">Or sign in with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="bx bxl-facebook"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="bx bxl-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="bx bxl-instagram"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="bx bxl-google"></i>
            </a>
          </div>
        </form>
        <!-- ===== REGISTER FORM HERE ===== -->
        <form method="POST" name="myform" class="sign-up-form" id="signUp-form" onsubmit="confirmRegister(this.firstName.value,this.lastName.value, this.contact_register.value, this.email_register.value, this.password_register.value); return false">
          <h2 class="title">Sign up</h2>
          <p id="errorMessageRegister" style="color: red"></p>
          <div class="input-field">
            <i class="bx bxs-user"></i>
            <input type="text" name="fname" id="firstName" placeholder="First Name" required>
          </div>
          <div class="input-field">
            <i class="bx bxs-user"></i>
            <input type="text" name="lname" id="lastName" placeholder="Last Name" required>
          </div>
          <div class="input-field">
            <i class="bx bxs-phone"></i>
            <input type="text" name="contact" id="contact_register" placeholder="Contact Number" required>
          </div>
          <div class="input-field">
            <i class="bx bxs-envelope"></i>
            <input type="email" name="email" id="email_register" placeholder="Email" required>
          </div>
          <div class="input-field">
            <i class="bx bxs-lock"></i>
            <input type="password" name="pword" id="password_register" placeholder="Password" required>
          </div>
          <input type="submit" class="btn" value="Sign up" value="Register" id="register_button" />
          <p class="social-text">Or Sign up with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="bx bxl-facebook"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="bx bxl-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="bx bxl-instagram"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="bx bxl-google"></i>
            </a>
          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here? Join us!</h3>
          <p>
            We, the Artbox family is very excited to meet you and to be part
            of our growing family. We are here to help you find the best
            materials there is!
          </p>
          <button class="btn transparent" id="sign-up-btn">Sign up</button>
        </div>
        <img src="img/login/sign-in.png" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>Already one of us?</h3>
          <p>
            It is nice to see you back! We are glad to have you as a part of
            the Artbox family. Enjoy new awesome deals and enjoy your stay!
          </p>
          <button class="btn transparent" id="sign-in-btn">Sign in</button>
        </div>
        <img src="img/login/sign-up.png" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="js/main.js"></script>
  <script src="js/login-script.js"></script>
</body>

</html>