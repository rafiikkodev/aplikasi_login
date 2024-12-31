<?php
$con = mysqli_connect("localhost", "root", "", "db_login");
if (mysqli_connect_errno()) {
    echo "Failerd to connection database" . mysqli_connect_errno();
}
?>