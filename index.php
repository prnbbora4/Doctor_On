<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles.css" />
    <title>Doctor On</title>
  </head>
  <body>
    <!-- Container -->
    <div class="container" id="container">
      <!-- Row -->
      <div class="row">
        <!-- Sign Up -->
        <div class="col align-center flex-col sign-up">
          <div class="form-wrapper align-center">
            <form class="form sign-up" method="post" action="registration.php">
              <div class="input-group">
                <i class="bx bxs-user"></i>
                <input type="text" placeholder="Name" name="fname"/>
              </div>
              <div class="input-group">
                <i class="bx bx-mail-send"></i>
                <input type="email" placeholder="Email" name="email"/>
              </div>
              <div class="input-group">
                <i class="bx bxs-lock-alt"></i>
                <input type="password" placeholder="Password" name="password"/>
              </div>
              <div class="input-group">
                <i class="bx bxs-lock-alt"></i>
                <input type="password" placeholder="Confirm password" name="password2"/>
              </div>
              <button name="registration_btn">Sign Up</button>
                <span>Already have an account?</span>
                <b id="sign-in">Sign in here</b>
              </p>
            </form>
          </div>

          <div class="form-wrapper">
            <div class="social-list align-center sign-up">
              <div class="align-center facebook-bg">
                <i class="bx bxl-facebook"></i>
              </div>
              <div class="align-center google-bg">
                <i class="bx bxl-google"></i>
              </div>
              <div class="align-center twitter-bg">
                <i class="bx bxl-twitter"></i>
              </div>
              <div class="align-center insta-bg">
                <i class="bx bxl-instagram-alt"></i>
              </div>
            </div>
          </div>
        </div>
        <!-- End Sign Up -->
        <!-- Sign In -->
        <div class="col align-center flex-col sign-in">
          <div class="form-wrapper align-center">
            <form class="form sign-in" action="login.php" method="post">
              <div class="input-group">
                <i class="bx bx-mail-send"></i>
                <input type="text" placeholder="Email" name="email"/>
              </div>
              <div class="input-group">
                <i class="bx bxs-lock-alt"></i>
                <input type="password" placeholder="Password" name="password"/>
              </div>
              <button name="login_btn" >Sign IN </button>
              <p>
                <b>Forgot password?</b>
              </p>
              <p>
                <span> Don't have an account? </span>
                <b id="sign-up">Sign up here</b>
              </p>
            </form>
          </div>

          <div class="form-wrapper">
            <div class="social-list align-center sign-in">
              <div class="align-center facebook-bg">
                <i class="bx bxl-facebook"></i>
              </div>
              <div class="align-center google-bg">
                <i class="bx bxl-google"></i>
              </div>
              <div class="align-center twitter-bg">
                <i class="bx bxl-twitter"></i>
              </div>
              <div class="align-center insta-bg">
                <i class="bx bxl-instagram-alt"></i>
              </div>
            </div>
          </div>
        </div>
        <!-- End Sign In -->
      </div>
      <!-- End Row -->
      <!-- Content Section -->
      <div class="row content-row">
        <!-- Sign In Content -->
        <div class="col align-items flex-col">
          <div class="text sign-in">
            <h2>Doctor On</h2>
            <p>
              Doctor On is Online Doctor Provider App through which patients can cunsult with doctors directly.
            </p>
          </div>
          <div class="img sign-in">
            <img src="images/bg1.svg" alt="Doctor On" />
          </div>
        </div>

        <!-- Sign Up Content -->
        <div class="col align-items flex-col">
          <div class="img sign-up">
            <img src="images/bg2.svg" alt="" />
          </div>
          <div class="text sign-up">
            <h2>Join with us</h2>
            <p>
              Cunsult with your favorite Doctor here.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- End Container -->

    <!-- Script -->
    <script src="index.js"></script>
  </body>
</html>
