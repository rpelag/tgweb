<?php

include_once('config.php');
$query="select firstname,lastname,contact,email,field from applicants";
$result=mysqli_query($link,$query) or die("Error in Selecting " . mysqli_error($connection));

//create an array
$emparray = array();
while($row =mysqli_fetch_assoc($result))
{
    $emparray[] = $row;
}

echo json_encode($emparray);

//close the db connection
mysqli_close($connection);

?>
