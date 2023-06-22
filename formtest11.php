<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$companyname = $fullname = $mobilenum = $companyadd = $companypos = $email = $position = $count = $location = $position1 = $count1 = $location1 = $position2 = $count2 = $location2 =  $remarks = "";
$companyname_err = $fullname_err = $mobilenum_err = $companyadd_err = $companypos_err = $email_err = $position_err = $count_err = $location_err = $position1_err = $count1_err = $location1_err  = $position2_err = $count2_err = $location2_err = $remarks_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate company name
    if (empty(trim($_POST["companyname"]))) {
        $companyname_err = "Please enter a Company name.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM clients WHERE companyname = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_companyname);

            // Set parameters
            $param_companyname = trim($_POST["companyname"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
                $companyname = trim($_POST["companyname"]);
                // }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate full name
    if (empty(trim($_POST["fullname"]))) {
        $fullname_err = "Please enter your Full name.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM clients WHERE fullname = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_fullname);

            // Set parameters
            $param_fullname = trim($_POST["fullname"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
                $fullname = trim($_POST["fullname"]);
                // }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate mobile number
    if (empty(trim($_POST["mobilenum"]))) {
        $mobilenum_err = "Please enter a Contact number.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM clients WHERE mobilenum = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_mobilenum);

            // Set parameters
            $param_mobilenum = trim($_POST["mobilenum"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
                $mobilenum = trim($_POST["mobilenum"]);
                // }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate company add
    if (empty(trim($_POST["companyadd"]))) {
        $companyadd_err = "Please enter a Company Address.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM clients WHERE companyadd = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_companyadd);

            // Set parameters
            $param_companyadd = trim($_POST["companyadd"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
                $companyadd = trim($_POST["companyadd"]);
                // }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate company position
    if (empty(trim($_POST["companypos"]))) {
        $companypos_err = "Please enter a Company Position.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM clients WHERE companypos = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_companypos);

            // Set parameters
            $param_companypos = trim($_POST["companypos"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
                $companypos = trim($_POST["companypos"]);
                // }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate email
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter an email.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM clients WHERE email = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);

            // Set parameters
            $param_email = trim($_POST["email"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 2) {
                    $email_err = "This email already exists.";
                } else {
                    $email = trim($_POST["email"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate position
    if (empty(trim($_POST["position"]))) {
        $position_err = "Please select a Position";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM clients WHERE position = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_position);

            // Set parameters
            $param_position = trim($_POST["position"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
                $position = trim($_POST["position"]);
                // }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate count
    if (empty(trim($_POST["count"]))) {
        $count_err = "Please add Count";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM clients WHERE count = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_count);

            // Set parameters
            $param_count = trim($_POST["count"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
                $count = trim($_POST["count"]);
                // }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate location
    if (empty(trim($_POST["location"]))) {
        $location_err = "Please select Location";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM clients WHERE location = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_location);

            // Set parameters
            $param_location = trim($_POST["location"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
                $location = trim($_POST["location"]);
                // }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate position1
    if (empty(trim($_POST["position1"]))) {
        $position1_err = "Please select a Position";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM clients WHERE position1 = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_position1);

            // Set parameters
            $param_position1 = trim($_POST["position1"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
                $position1 = trim($_POST["position1"]);
                // }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate count1
    if (empty(trim($_POST["count1"]))) {
        $count1_err = "Please add Count";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM clients WHERE count1 = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_count1);

            // Set parameters
            $param_count1 = trim($_POST["count1"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
                $count1 = trim($_POST["count1"]);
                // }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate location1
    if (empty(trim($_POST["location1"]))) {
        $location1_err = "Please select Location";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM clients WHERE location1 = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_location1);

            // Set parameters
            $param_location1 = trim($_POST["location1"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
                $location1 = trim($_POST["location1"]);
                // }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate position2
    if (empty(trim($_POST["position2"]))) {
        $position2_err = "Please select a Position";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM clients WHERE position2 = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_position2);

            // Set parameters
            $param_position2 = trim($_POST["position2"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
                $position2 = trim($_POST["position2"]);
                // }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate count2
    if (empty(trim($_POST["count2"]))) {
        $count2_err = "Please add Count";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM clients WHERE count2 = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_count2);

            // Set parameters
            $param_count2 = trim($_POST["count2"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
                $count2 = trim($_POST["count2"]);
                // }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate location2
    if (empty(trim($_POST["location2"]))) {
        $location2_err = "Please select Location";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM clients WHERE location2 = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_location2);

            // Set parameters
            $param_location2 = trim($_POST["location2"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
                $location2 = trim($_POST["location2"]);
                // }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate remarks
    if (empty(trim($_POST["remarks"]))) {
        $remarks_err = "Please add Remarks, Leave as N/A if none.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM clients WHERE remarks = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_remarks);

            // Set parameters
            $param_remarks = trim($_POST["remarks"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
                $remarks = trim($_POST["remarks"]);
                // }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }


    // Check input errors before inserting in database

    if (empty($companyname_err) && empty($fullname_err) && empty($mobilenum_err) && empty($companyadd_err) && empty($email_err) && empty($position_err) && empty($count_err) && empty($location_err) && empty($position1_err) && empty($count1_err) && empty($location1_err) && empty($position2_err) && empty($count2_err) && empty($location2_err) && empty($remarks_err)) {

        // Prepare an insert statement
        $sql = "INSERT INTO clients (companyname, fullname, mobilenum, companyadd, companypos, email, position, count, location,  position1, count1, location1, position2, count2, location2, remarks) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssssssssssssss", $param_companyname, $param_fullname, $param_mobilenum, $param_companyadd, $param_companypos, $param_email, $param_position, $param_count, $param_location,  $param_position1, $param_count1, $param_location1,  $param_position2, $param_count2, $param_location2, $param_remarks);

            // Set parameters
            $param_companyname = $companyname;
            $param_fullname = $fullname;
            $param_mobilenum = $mobilenum;
            $param_companyadd = $companyadd;
            $param_companypos = $companypos;
            $param_email = $email;
            $param_position = $position;
            $param_count = $count;
            $param_location = $location;
            $param_position1 = $position1;
            $param_count1 = $count1;
            $param_location1 = $location1;
            $param_position2 = $position2;
            $param_count2 = $count2;
            $param_location2 = $location2;
            $param_remarks = $remarks;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
              // Show success alert and redirect to login page
              echo "<script>alert('Form sent!'); location.href='login.php';</script>";
              exit();
          } else {
              echo "Oops! Something went wrong. Please try again later.";
          }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    // Close connection
    mysqli_close($link);
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
  <link href="assets/css/form.css" rel="stylesheet">

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
        <div class="container1" data-aos="zoom-out" data-aos-delay="100">
          <h1>Request for quote Form</h1>
          <div class="section-title2" data-aos="zoom-out">
            <div class="orange-line"></div>
          </div>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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
                <div class="col-md-12">
                  <h4>Requirement</h4>
                  <div id="dynamicRowsContainer">
                    <div class="row" id="initialRow">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="position">Position</label>
                          <select class="form-select <?php echo (!empty($position_err)) ? 'is-invalid' : ''; ?>" name="position" aria-label="Default select example" id="field">
                            <option value="">Pick a position</option>
                            <option value="Manager">Manager</option>
                            <option value="Officer">Officer</option>
                            <option value="IT Support">IT support</option>
                            <option value="Engineer">Engineer</option>
                          </select>
                          <span class="invalid-feedback"><?php echo $position_err; ?></span>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="Count">Count</label>
                          <input type="number" name="count" class="form-control <?php echo (!empty($count_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $count; ?>" id="managerCount" placeholder="Enter count" min="0">
                          <span class="invalid-feedback"><?php echo $count_err; ?></span>
                        </div>
                      </div>
                      <div class="col-md-4">
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

                    <div class="row" id="initialRow">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="position">Position</label>
                          <select class="form-select <?php echo (!empty($position1_err)) ? 'is-invalid' : ''; ?>" name="position1" aria-label="Default select example" id="field">
                            <option value="">Pick a position</option>
                            <option value="Manager">Manager</option>
                            <option value="Officer">Officer</option>
                            <option value="IT Support">IT support</option>
                            <option value="Engineer">Engineer</option>
                          </select>
                          <span class="invalid-feedback"><?php echo $position1_err; ?></span>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="Count">Count</label>
                          <input type="number" name="count1" class="form-control <?php echo (!empty($count1_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $count1; ?>" id="managerCount" placeholder="Enter count" min="0">
                          <span class="invalid-feedback"><?php echo $count1_err; ?></span>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
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

                    <div class="row" id="initialRow">
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
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="Count">Count</label>
                          <input type="number" name="count2" class="form-control <?php echo (!empty($count2_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $count2; ?>" id="managerCount" placeholder="Enter count" min="0">
                          <span class="invalid-feedback"><?php echo $count2_err; ?></span>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
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

                  </div>
                </div>

                <div class="col-md-12">
                  <h4>Remarks</h4>
                  <div class="form-group">
              <textarea name="remarks" class="form-control form-control-body <?php echo (!empty($remarks_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $remarks; ?>" id="exampleFormControlTextarea1" placeholder="Message"></textarea>
              <span class="invalid-feedback"><?php echo $remarks_err; ?></span>
            </div>


              </div>

              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
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
