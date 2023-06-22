

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=2.0" name="viewport">

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
  <link href="assets/css/form.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Presento - v3.20.0
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <a href="index.html" class="logo me-auto"><img src="assets/img/TGFSi_LOGO.jpg" alt=""  ></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="jobseeker.html#home">Home</a></li>
          <li><a class="nav-link scrollto" href="jobseeker.html#about">About</a></li>

          <li class="dropdown active"><a class="nav-link scrollto" href="jobseeker.html#careers">Career<i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="login.php">Office Support</a></li>
              <li><a href="login.php">Engineering Support</a></li>
              <li><a href="login.php">I.T. Support</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto " href="jobseeker.html#events">Events</a></li>
          <li><a class="nav-link scrollto" href="jobseeker.html#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="client.html" class="get-started-btn scrollto">Be a Client</a>
    </div>
  </header>
  <!-- End Header -->

    <!-- ======= Clients Section ======= -->

    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="container2" data-aos="zoom-out" data-aos-delay="200">
          <h2>Request for quote Form</h2>
          <div class="section-title2" data-aos="zoom-out">
            <div class="orange-line"></div>
          </div>
         
              <div class="row">

                  <h4>Client Info</h4>
                  <div class="col-md-6">
                  <div class="form-group">
                  <label for="companyName">Company Name:</label>
                    <input type="text" name="companyname" class="form-control <?php echo (!empty($companyname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $companyname; ?>" id="companyName" placeholder="Enter company name">
                    <span class="invalid-feedback"><?php echo $companyname_err; ?></span>
                  </div>
                 </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="address">Company Address:</label>
                    <input type="text" name="companyadd" class="form-control <?php echo (!empty($companyadd_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $companyadd; ?>" id="address" placeholder="Enter address">
                    <span class="invalid-feedback"><?php echo $companyadd_err; ?></span>
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input type="text" name="fullname" class="form-control <?php echo (!empty($fullname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $fullname; ?>" id="name" placeholder="Enter full name">
                    <span class="invalid-feedback"><?php echo $fullname_err; ?></span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="position">Company Position:</label>
                    <input type="text" name="companypos" class="form-control <?php echo (!empty($companypos_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $companypos; ?>" id="position" placeholder="Enter company position">
                    <span class="invalid-feedback"><?php echo $companypos_err; ?></span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="mobile">Mobile Number:</label>
                    <input type="tel" name="mobilenum" class="form-control <?php echo (!empty($mobilenum_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $mobilenum; ?>" id="mobile" placeholder="Enter mobile number">
                    <span class="invalid-feedback"><?php echo $mobilenum_err; ?></span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input type="email" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>" id="email" placeholder="Enter email address">
                    <span class="invalid-feedback"><?php echo $email_err; ?></span>
                  </div>
                </div>

                <div class="row">
                <h4>Requirement</h4>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="position"></label>
                                <label for="position">Position</label>
                                <select class="form-select <?php echo (!empty($position_err)) ? 'is-invalid' : ''; ?>" name="position" aria-label="Default select example" id="field">
                                  <option value="">Pick a position</option>
                                  <option value="Manager">Manager</option>
                                  <option value="Officer">Officer</option>
                                  <option value="IT Support">IT support</option>
                                  <option value="Engineer">Engineer</option>
                                </select>
                                <span class="invalid-feedback"><?php echo $position_err; ?></span>

                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="Count">Count</label>
                                <input type="number" name="count" class="form-control <?php echo (!empty($count_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $count; ?>" id="managerCount" placeholder="Enter count" min="0">
                                <span class="invalid-feedback"><?php echo $count_err; ?></span>
                            </div>

                            </div>
                            <div class="col-md-5">
                              <div class="form-group">
                                <label for="position">Location</label>
                                <select class="form-select <?php echo (!empty($location_err)) ? 'is-invalid' : ''; ?>" name="location" aria-label="Default select example" id="field">
                                  <option value="">Pick a Location</option>
                                  <option value="Manila">Manila</option>
                                  <option value="Cebu">Cebu</option>
                                  <option value="Bohol">Bohol</option>
                                </select>
                                <span class="invalid-feedback"><?php echo $location_err; ?></span>
                              </div>
                            </div>
                            </div>

                            <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="position"></label>
                                <label for="position">Position</label>
                                <select class="form-select <?php echo (!empty($position1_err)) ? 'is-invalid' : ''; ?>" name="position1" aria-label="Default select example" id="field">
                                  <option value="">Pick a position</option>
                                  <option value="Manager">Manager</option>
                                  <option value="Officer">Officer</option>
                                  <option value="IT Support">IT support</option>
                                  <option value="Engineer">Engineer</option>
                                </select>
                                  <span class="invalid-feedback"><?php echo $position1_err; ?></span>

                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="Count">Count</label>
                                <input type="number" name="count1" class="form-control <?php echo (!empty($count1_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $count1; ?>" id="managerCount" placeholder="Enter count" min="0">
                                <span class="invalid-feedback"><?php echo $count1_err; ?></span>
                            </div>

                            </div>
                            <div class="col-md-5">
                              <div class="form-group">
                                <label for="position"></label>
                                <label for="position">Location</label>
                                <select class="form-select <?php echo (!empty($location1_err)) ? 'is-invalid' : ''; ?>" name="location1" aria-label="Default select example" id="field">
                                  <option value="">Pick a Location</option>
                                  <option value="Manila">Manila</option>
                                  <option value="Cebu">Cebu</option>
                                  <option value="Bohol">Bohol</option>
                                </select>
                                <span class="invalid-feedback"><?php echo $location1_err; ?></span>
                              </div>
                            </div>
                            </div>

                            <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="position">Position</label>
                                <select class="form-select <?php echo (!empty($position2_err)) ? 'is-invalid' : ''; ?>" name="position2" aria-label="Default select example" id="field">
                                  <option value="">Pick a position</option>
                                  <option value="Manager">Manager</option>
                                  <option value="Officer">Officer</option>
                                  <option value="IT Support">IT support</option>
                                  <option value="Engineer">Engineer</option>
                                </select>
                                <span class="invalid-feedback"><?php echo $position2_err; ?></span>

                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="Count">Count</label>
                                <input type="number" name="count2" class="form-control <?php echo (!empty($count2_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $count2; ?>" id="managerCount" placeholder="Enter count" min="0">
                                <span class="invalid-feedback"><?php echo $count2_err; ?></span>
                            </div>

                            </div>
                            <div class="col-md-5">
                              <div class="form-group">
                                <label for="position"></label>
                                <label for="position">Location</label>
                                <select class="form-select <?php echo (!empty($location2_err)) ? 'is-invalid' : ''; ?>" name="location2" aria-label="Default select example" id="field">
                                  <option value="">Pick a Location</option>
                                  <option value="Manila">Manila</option>
                                  <option value="Cebu">Cebu</option>
                                  <option value="Bohol">Bohol</option>
                                </select>
                                <span class="invalid-feedback"><?php echo $location2_err; ?></span>
                              </div>
                            </div>
                            </div>
                <div class="col-md-22">
                  <h4>Remarks</h4>
                  <div class="form-group">
                    <textarea name="remarks" class="form-control form-control-body <?php echo (!empty($remarks_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $remarks; ?>" id="exampleFormControlTextarea2" placeholder="Message"></textarea>
                    <span class="invalid-feedback"><?php echo $remarks_err; ?></span>
            </div>


              </div>

              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
         
        </div>
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
              <strong>Phone:</strong> 02.827.0706/+63 927.8043222<br>
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


          <div class="social-links  col-lg-2 col-md-6 footer-links ">
            <h4>Social Media</h4>
            <a href="https://www.facebook.com/teamglobalfacilitysolutions" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
            <a href="https://www.linkedin.com/company/team-global-facility-solutions-inc-/" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
          </div>

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

</body>

<script
src="https://kit.fontawesome.com/66aa7c98b3.js"
crossorigin="anonymous"
></script>

</html>
