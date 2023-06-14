<?php

// Initialize the session
session_start();

// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}


include_once('config.php');
$query="select * from applicants";
$result=mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html>
	<head>
		<title> Fetch Data From Database </title>
	</head>
	<body>
	<table align="center" border="1px" style="width:600px; line-height:40px;">
	<tr>
		<th colspan="4"><h2>Student Record</h2></th>
		</tr>
			  <th> ID </th>
			  <th> Name </th>
			  <th> Email </th>
			  <th> Country </th>

		</tr>

		<?php while($rows=mysql_fetch_assoc($result))
		{
		?>
		<tr> <td><?php echo $rows['ID']; ?></td>
		<td><?php echo $rows['Name']; ?></td>
		<td><?php echo $rows['Email']; ?></td>
		<td><?php echo $rows['Country']; ?></td>
		</tr>
	<?php
               }
          ?>

	</table>
	</body>
	</html>
