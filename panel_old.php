<?php

// Initialize the session
session_start();

if($_SESSION['email'] != 'forgot@teamglobal.site') {
    //could redirect page here
    die('This page is not available to non-administrators.');
}
}

include_once('config.php');
$query="select * from applicants";
$result=mysqli_query($link,$query);
?>

<!DOCTYPE html>
<html>

<!-- Required js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.21.4/dist/bootstrap-table.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tableexport.jquery.plugin@1.10.21/tableExport.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tableexport.jquery.plugin@1.10.21/libs/jsPDF/jspdf.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tableexport.jquery.plugin@1.10.21/libs/jsPDF-AutoTable/jspdf.plugin.autotable.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.21.4/dist/extensions/export/bootstrap-table-export.min.js"></script>

	<head>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.21.4/dist/bootstrap-table.min.css">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
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
    data-search="true"
    data-toggle="table"
    data-show-columns="true"
    >
  </table>

    <script>
    var $table = $('#table')

    $(function() {
      $('#toolbar').find('select').change(function () {
        $table.bootstrapTable('destroy').bootstrapTable({
          exportDataType: $(this).val(),
          exportTypes: ['csv', 'excel', 'pdf'],
          url: 'json1.php',
          columns: [
            {
              field: 'state',
              checkbox: true,
              visible: $(this).val() === 'selected'
            },
            {
              field: 'firstname',
              title: 'First Name',
              sortable: true
            }, {
              field: 'lastname',
              title: 'Last Name',
              sortable: true
            }, {
              field: 'contactnum',
              title: 'Contact Number',
              sortable: true
            },  {
              field: 'email',
              title: 'Email',
              sortable: true
            }, {
              field: 'field',
              title: 'Field of Interest',
              sortable: true
            }
          ],
          sortName: 'firstname', // Default sorting column
          sortOrder: 'asc' // Default sorting order
        })
      }).trigger('change')
    })
  </script>

	</body>
	</html>
