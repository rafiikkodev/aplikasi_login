# GANTI DI DATABASE

---

## Mobile Web Service Praktik (Create Login)

```php
<?php
include "koneksi.php";

$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
$role = $_POST["role"];

if (!$email || !$username || !$password || !$role) {
    echo json_encode(array('message' => 'required field is empty'));
} else {
    $query = mysqli_query($con, "INSERT INTO login VALUES ('', '$email', '$username', md5('$password'), '$role')");
    if ($query) {
        echo json_encode(array('message' => 'login data successfully added'));
    } else {
        echo json_encode(array('message' => 'login data failed to add'));
    }
}
?>

## Mobile Web Service Teori (Create Login)

<?php
include "koneksi.php";

$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
$gender = $_POST["gender"];

if (!$email || !$username || !$password || !$gender) {
    echo json_encode(array('message' => 'required field is empty'));
} else {
    $query = mysqli_query($con, "INSERT INTO login VALUES ('', '$email', '$username', md5('$password'), '$gender')");
    if ($query) {
        echo json_encode(array('message' => 'login data successfully added'));
    } else {
        echo json_encode(array('message' => 'login data failed to add'));
    }
}
?>
