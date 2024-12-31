<?php
include 'koneksi.php';

$query = "SELECT * FROM catalog_products";
$data = array();
$result = mysqli_query($con, $query);
while ($row = mysqli_fetch_assoc($result)) {
  $data[] = $row;
}

echo json_encode(array('result' => $data));
