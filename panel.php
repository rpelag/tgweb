<?php

// Initialize the session
session_start();

if(!isset($_SESSION["email"]) || $_SESSION['email'] != 'forgot@teamglobal.site') {
    //could redirect page here
    die('This page is not available to non-administrators.');
}

$now = time();
if (isset($_SESSION['discard_after']) && $now > $_SESSION['discard_after']) {
    // this session has worn out its welcome; kill it and start a brand new one
    session_unset();
    session_destroy();
    session_start();
}

// either new or old, it should live at most for another hour
$_SESSION['discard_after'] = $now + 60;

include_once('config.php');
$query="select * from applicants where email != 'forgot@teamglobal.site'";
$result=mysqli_query($link,$query);


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

  <!-- Template Main CSS File -->
  <link href="assets/css/administrator.css" rel="stylesheet">

  <!-- Add the following CSS and JS files -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>


<!-- Template Main CSS File -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.1/css/buttons.dataTables.min.css" />
<Script src="https://code.jquery.com/jquery-1.12.3.js" type="text/javascript"></Script>
<Script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js" type="text/javascript"></Script>
<Script src="https://cdn.datatables.net/buttons/1.2.1/js/dataTables.buttons.min.js" type="text/javascript"></Script>
<Script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js" type="text/javascript"></Script>
<Script src="https://cdn.datatables.net/buttons/1.2.1/js/buttons.html5.min.js" type="text/javascript"></Script>

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
      <a href="#" class="logo me-auto"><img src="assets/img/TGFSi_LOGO.jpg" alt=""  ></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li>HR Panel</li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="logout.php" class="get-started-btn scrollto">Logout</a>
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= home Section ======= -->


  <section id="home" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <table id="example" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
              <th> First Name </th>
              <th> Last Name </th>
              <th> Contact Number </th>
              <th> Email </th>
              <th> Field of Interest </th>
              <th> Date Registered </th>
        </tr>
    </thead>
    <tbody>
    <?php while($rows=mysqli_fetch_assoc($result))
		{
		?>
		<tr>
    <td><?php echo $rows['firstname']; ?></td>
		<td><?php echo $rows['lastname']; ?></td>
		<td><?php echo $rows['contactnum']; ?></td>
		<td><?php echo $rows['email']; ?></td>
    <td><?php echo $rows['field']; ?></td>
    <td><?php echo $rows['created_at']; ?></td>
		</tr>
	<?php
               }
          ?>
          </tbody>


</table>


    </div>
  </section>


  <main id="main">

    <!-- ======= Clients Section ======= -->



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
              <li><i class="bx bx-chevron-right"></i><a class="nav-link scrollto" href="#home">Home</a></li>
              <li><i class="bx bx-chevron-right"></i><a class="nav-link scrollto" href="#about">About</a></li>
              <li><i class="bx bx-chevron-right"></i><a class="nav-link scrollto" href="#contact">Contact</a></li>
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




</body>


</html>

<script>
$(document).ready(function() {
  $('table').DataTable({
    dom: 'Blfrtip',
    buttons: [{
      text: 'Export To Excel',
      extend: 'excelHtml5',
      exportOptions: {
        modifier: {
          selected: true
        },
        columns: [0, 1, 2, 3, 4, 5],
        format: {
          header: function (data, columnIdx) {
            return data;
          },
          body: function (data, column, row) {
            // Strip $ from salary column to make it numeric
            // debugger;
            return column ===  6 ? "" : data;
          }
        }
      },
      footer: false,
      customize: function (xlsx) {
        var sheet = xlsx.xl.worksheets['sheet1.xml'];
        //$('c[r=A1] t', sheet).text( 'Custom text' );
        //$('row c[r^="C"]', sheet).attr('s', '2');
      }
    }]
  });
});
</script>
