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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	</head>
	<body>

    <style>
  #toolbar {
    margin: 0;
  }
  </style>

  <div id="toolbar" class="select">
    <select class="form-control">
      <option value="">Export Basic</option>
      <option value="all">Export All</option>
      <option value="selected">Export Selected</option>
    </select>
  </div>

  <table id="table"
    data-show-export="true"
    data-pagination="true"
    data-side-pagination="server"
    data-click-to-select="true"
    data-toolbar="#toolbar"
    data-show-toggle="true"
    data-show-columns="true"
    data-url="json.php">
  </table>

    <script>
    var $table = $('#table')

    $(function() {
      $('#toolbar').find('select').change(function () {
        $table.bootstrapTable('destroy').bootstrapTable({
          exportDataType: $(this).val(),
          exportTypes: ['json', 'xml', 'csv', 'txt', 'sql', 'excel', 'pdf'],
          columns: [
            {
              field: 'firstname',
              title: 'First Name'
            }, {
              field: 'lastname',
              title: 'Last Name'
            }, {
              field: 'contactnum',
              title: 'Contact Number'
            },  {
              field: 'email',
              title: 'Email'
            }, {
              field: 'field',
              title: 'Field of Interest'
            }
          ]
        })
      }).trigger('change')
    })
  </script>

	</body>
	</html>
