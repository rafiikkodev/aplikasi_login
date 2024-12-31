<?php
include "koneksi.php";

header('Content-Type: application/json');

$email = $_POST["email"];

$query = mysqli_query($con, "SELECT * FROM login WHERE email='$email'");
$result = mysqli_num_rows($query) > 0;

echo json_encode(array("exists" => $result));
?>