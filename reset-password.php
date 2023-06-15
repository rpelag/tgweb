<?php
include('config.php');

if (isset($_GET["key"]) && isset($_GET["email"]) && isset($_GET["action"]) && ($_GET["action"] == "reset") && !isset($_POST["action"])) {
  $key = $_GET["key"];
  $email = $_GET["email"];
  $curDate = date("Y-m-d H:i:s");
  $query = mysqli_query($link, "SELECT * FROM `password_reset_temp` WHERE `key`='" . $key . "' and `email`='" . $email . "';");
  $row = mysqli_num_rows($query);
  if ($row == "") {
    $error .= '<h2>Invalid Link</h2>
    <p>The link is invalid/expired. Either you did not copy the correct link
    from the email, or you have already used the key in which case it is
    deactivated.</p>
    <p><a href="http://172.29.105.55/~teamglobal/forgot-password.php">Click here</a> to reset password.</p>';
  } else {
    $row = mysqli_fetch_assoc($query);
    $expDate = $row['expDate'];
    if ($expDate >= $curDate) {
      ?>
      <br />
     
    <?php
    } else {
      $error .= "<h2>Link Expired</h2>
      <p>The link is expired. You are trying to use the expired link which
      as valid only 24 hours (1 days after request).<br /><br /></p>";
    }
  }
  if ($error != "") {
    echo "<div class='error'>" . $error . "</div><br />";
  }
} // isset email key validate end

if (isset($_POST["email"]) && isset($_POST["action"]) && ($_POST["action"] == "update")) {
  $error = "";
  $pass1 = mysqli_real_escape_string($link, $_POST["pass1"]);
  $pass2 = mysqli_real_escape_string($link, $_POST["pass2"]);
  $email = $_POST["email"];
  $curDate = date("Y-m-d H:i:s");
  if ($pass1 != $pass2) {
    echo '<script>alert("Your passwords do not match.");</script>';
    echo '<script>window.location.href = window.location.href;</script>';
    exit;
  }
  if ($error != "") {
    echo "<div class='error'>" . $error . "</div><br />";
  } else {
    $pass1 = password_hash($pass1, PASSWORD_DEFAULT);
    mysqli_query($link, "UPDATE `applicants` SET `password`='" . $pass1 . "' WHERE `email`='" . $email . "';");
    mysqli_query($link, "DELETE FROM `password_reset_temp` WHERE `email`='" . $email . "';");

    echo '<script>alert("Your password has been updated successfully.");</script>';
    echo '<script>window.location.href = "http://172.29.105.55/~teamglobal/login.php";</script>';
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Team Global Facility Solutions Inc.</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/login.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Presento - v3.10.0
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <!-- <h1 class="logo me-auto"><a href="index.html">Presento<span>.</span></a></h1>-->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo me-auto"><img src="assets/img/TGFSi_LOGO.jpg" alt=""  ></a>


    </div>
  </header>
  <!-- End Header -->

  <!-- ======= home Section ======= -->
  <section id="home" class="d-flex align-items-center">
  <div class="container1" data-aos="zoom-out" data-aos-delay="100">
    <h1>Reset Password</h1>
    <div class="section-title2" data-aos="zoom-out">
      <div class="orange-line"></div>
    </div>

    <form method="post" action="" name="update">
    <div class="formgroup">
        <input type="hidden" name="action" value="update">
        <label><strong>Enter New Password:</strong></label>
        <input type="password" name="pass1" maxlength="15" required>
        <label><strong>Re-Enter New Password:</strong></label>
        <input type="password" name="pass2" maxlength="15" required>
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="submit" value="Reset Password">
    </div>
</form>
   
  </div>
</section>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact">
            <h3>TeamGlobal<span>.</span></h3>
            <p>
              Suite 406, 4th floor VGP Center <br>
              6772 Ayala Ave. <br>
              Makati City <br><br>
              <strong>Phone:</strong> 02.817.0706/+63 917.8043211<br>
              <strong>Email:</strong> info@teamglobal.com.ph<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i><a class="nav-link scrollto" href="jobseeker.html#home">Home</a></li>
              <li><i class="bx bx-chevron-right"></i><a class="nav-link scrollto" href="jobseeker.html#about">About</a></li>
              <li><i class="bx bx-chevron-right"></i><a class="nav-link scrollto" href="jobseeker.html#careers">Career</a></li>
              <li><i class="bx bx-chevron-right"></i><a class="nav-link scrollto" href="jobseeker.html#events">Events</a></li>
              <li><i class="bx bx-chevron-right"></i><a class="nav-link scrollto" href="jobseeker.html#contact">Contact</a></li>
            </ul>
          </div>

        <!--   <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="services-tg.html#staffleasing">Staff Leasing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services-tg.html#engineeringservices">Engineering Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services-tg.html#itconsulting">I.T. Consulting</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services-tg.html#executivesearch">Executive Search</a></li>
            </ul>
          </div> -->

          <div class="social-links  col-lg-2 col-md-6 footer-links ">
            <h4>Social Media</h4>
            <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
            <a href="https://www.facebook.com/teamglobalfacilitysolutions" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
            <!-- <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->
            <a href="https://www.linkedin.com/company/team-global-facility-solutions-inc-/" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
          </div>

          <!-- <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Description</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div> -->

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Presento</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/presento-bootstrap-corporate-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
