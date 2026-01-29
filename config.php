<?php
$server = "192.168.169.9";
$user = "user1";
$pass = "12345678";
$database = "login";
$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>



