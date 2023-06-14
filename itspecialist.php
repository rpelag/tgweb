<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Presento Bootstrap Template - Index</title>
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

  <!-- Template Main CSS File -->
  <link href="assets/css/careertg.css" rel="stylesheet">

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

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="index.html">Home</a></li>
          <li><a class="nav-link scrollto" href="index.html#about">About</a></li>
          <li class="dropdown active"><a href="index.html#servicess"><span>Service</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="services-tg.html#staffleasing">Staff Leasing</a></li>
              <li><a href="services-tg.html#officesupport">Office Support Services</a></li>
              <li><a href="services-tg.html#technicalservices">Technical Services</a></li>
              <li><a href="services-tg.html#contractingservices">Contracting Services</a></li>
              <li><a href="services-tg.html#specialservice">Special Project</a></li>
              <li><a href="services-tg.html#itservice">I.T. Consulting Services</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto " href="index.html#portfolio">Events</a></li>
          <li class="dropdown active"><a href="index.html#careers"><span>Career</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="multiskilledtechnician.html">Multi-skilled Technician</a></li>
              <li><a href="shiftengineer.html">Shift Engineers/Supervisor</a></li>
              <li><a href="inhousereliever.html">In-house Reliever</a></li>
              <li><a href="quickresponseteam.html">Quick Response Team</a></li>
              <li><a href="itspecialist.html">I.T. Specialist</a></li>
              <li><a href="projectmanager.html">Project Manager</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="index.html#faq">FAQ</a></li>
          <!-- <li><a href="blog.html">Blog</a></li> -->
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a class="nav-link scrollto" href="index.html#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <!-- <a href="#about" class="get-started-btn scrollto">Get Started</a> -->
    </div>
  </header><!-- End Header -->

  <main id="services">




    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <br> <br> <br>
        <div class="row">
          <div class="col-lg-10 offset-md-1 entries">
            <article class="entry">
              <div class="entry-img">
              </div>
              <h2 class="entry-title">
                <a href="blog-single.html">I.T. Specialist</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i>Description</li>
                </ul>
              </div>

              <div class="entry-content">
                <section id="tabs" class="tabs">
                  <div class="container" data-aos="fade-up">
                      <div class="tab-pane" id="tab-2">
                        <div class="row">
                          <p class="fst-italic">
                            <b>QUALIFICATIONS</b>
                          </p>
                          <div class="col-lg-12 ">
                            <ul>
                              <h3><li><i class="ri-checkbox-blank-circle-fill"></i>Graduate of Technical Vocational Course with NC2 or Vocational certificates</li></h3>
                              <h3><li><i class="ri-checkbox-blank-circle-fill"></i>Must have undergone training on the proper operation and maintenance of electro-mechanical equipment</li></h3>
                              <h3><li><i class="ri-checkbox-blank-circle-fill"></i>Provide expertise in Electrical, Auxiliary, HVAC, Mechanical and Sanitary  system</li></h3>
                              <h3><li><i class="ri-checkbox-blank-circle-fill"></i>Performed facilities, machine, and equipment checklist </li></h3>
                              <h3><li><i class="ri-checkbox-blank-circle-fill"></i>Customer-Oriented</li></h3>
                              <h3><li><i class="ri-checkbox-blank-circle-fill"></i>Must be of good moral character, honest and has no criminal record</li></h3>
                              <h3><li><i class="ri-checkbox-blank-circle-fill"></i>Must possess good communication skills</li></h3>
                              <h3><li><i class="ri-checkbox-blank-circle-fill"></i>Must be physically fit and have passed medical examinations</li></h3>
                              <h3><li><i class="ri-checkbox-blank-circle-fill"></i>Must be presentable and no evident tattoos</li></h3>
                            </ul>
                          </div>

                          <p class="fst-italic">
                            <b>DUTIES AND RESPONSIBILITIES</b>
                          </p>
                          <div class="col-lg-12">
                            <ul>
                              <h3><li><i class="ri-checkbox-blank-circle-fill"></i>To carry out planned and responsive repairs and installations as required in tenants.</li></h3>
                              <h3><li><i class="ri-checkbox-blank-circle-fill"></i>To provide technical expertise within the relevant trade area.</li></h3>
                              <h3><li><i class="ri-checkbox-blank-circle-fill"></i>To provide multi-skilled expertise within additional trades offering a high-quality repairs and replacement service</li></h3>
                              <h3><li><i class="ri-checkbox-blank-circle-fill"></i>To be willing to up-skill and develop, to enable completion of all types of multi-skilled work.</li></h3>
                              <h3><li><i class="ri-checkbox-blank-circle-fill"></i>To work alongside other trades people, providing support and training as necessary where apprentices are used.</li></h3>
                              <h3><li><i class="ri-checkbox-blank-circle-fill"></i>To use hand and electric/hydraulic machine tools and be prepared to undergo training for this.</li></h3>
                              <h3><li><i class="ri-checkbox-blank-circle-fill"></i>To use and be responsible for a company mobile phone as required by the Group, ensuring it is used responsibly in accordance with the Group’s instructions</li></h3>
                              <h3><li><i class="ri-checkbox-blank-circle-fill"></i>To complete all necessary associated work documentation </li></h3>
                            </ul>
                          </div>

                        </div>
                      </div>
                  </div>
                </section>
                <div class="d-flex justify-content-between read-more">
                  <a href="index.html#careers">BACK</a>
                  <a href="mailto:crosswindproject2021@gmail.com?subject=Application for Multi-skilled Technician">APPLY</a>

                </div>
              </div>

            </article><!-- End blog entry -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

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
              <li><i class="bx bx-chevron-right"></i><a class="nav-link scrollto" href="index.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i><a class="nav-link scrollto" href="index.html#about">About</a></li>
              <li><i class="bx bx-chevron-right"></i><a class="nav-link scrollto" href="index.html#servicess">Services</a></li>
              <li><i class="bx bx-chevron-right"></i><a class="nav-link scrollto" href="index.html#careers">Career</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="services-tg.html#staffleasing">Staff Leasing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services-tg.html#officesupport">Office Support Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services-tg.html#technicalservices">Technical Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services-tg.html#contractingservices">Contracting Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services-tg.html#specialservice">Special Project</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services-tg.html#itservice">I.T. Consulting Services</a></li>
            </ul>
          </div>

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

</body>

</html>
