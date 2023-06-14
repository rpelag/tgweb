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
	</head>
	<body>
	<table align="center" border="1px" style="width:900px; line-height:40px;">
	<tr>
		<th colspan="4"><h2>Applicants</h2></th>
		</tr>
			  <th> First Name </th>
			  <th> Last Name </th>
			  <th> Contact Number </th>
			  <th> Email </th>
        <th> Field of Interest </th>

		</tr>

		<?php while($rows=mysqli_fetch_assoc($result))
		{
		?>
		<tr> <td><?php echo $rows['firstname']; ?></td>
		<td><?php echo $rows['lastname']; ?></td>
		<td><?php echo $rows['contactnum']; ?></td>
		<td><?php echo $rows['email']; ?></td>
    <td><?php echo $rows['field']; ?></td>
		</tr>
	<?php
               }
          ?>

	</table>
	</body>
	</html>
