<?php

include_once('config.php');
$sql = "select firstname,lastname,contactnum,email,field from applicants";
$result = mysqli_query($link, $sql);


$data = array();
while ($row = mysqli_fetch_assoc($result)){
    $row_array['firstname'] = $row['firstname'];
    $row_array['lastname'] = $row['lastname'];
    $row_array['contactnum'] = $row['contactnum'];
    $row_array['email'] = $row['email'];
    $row_array['field'] = $row['field'];
    array_push($data,$row_array);
}

function myFilter($a) {
    $row['firstname'] = $a['firstname'];
    $row['lastname'] = $a['lastname'];
    $row['contactnum'] = $a['contactnum'];
    $row['email'] = $a['email'];
    $row['field'] = $a['field'];
   return $row;
};

$filterData = array(
    'total' => count($data),
    'totalNotFiltered' => count($data),
    'rows' => array_map("myFilter", $data)
);

$convert = json_encode($filterData);
echo $convert;

?>
