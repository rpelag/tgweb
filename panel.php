<?php

// Initialize the session
session_start();

// Check if the user is logged in, otherwise redirect to login page
if (isset($_SESSION["UserID"]) && $_SESSION["UserID"] === 1){
    header("location: login.php");
    exit;
}

include_once('config.php');
$query="select * from applicants";
$result=mysqli_query($link,$query);
?>

<!DOCTYPE html>
<html>
	<head>
		<title> Fetch Data From Database </title>
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	</head>
	<body>
	<table align="center" border="1px" style="width:900px; line-height:40px;">
    <div class="container">
      <h2>Bordered Table</h2>
      <table class="table table-responsive">
        <thead>
          <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Contact Number</th>
            <th>Email</th>
            <th>Field of Interest</th>
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
          </tr>
        </tbody>
        <?php
                     }
                ?>
      </table>
    </div>
	</body>
	</html>
