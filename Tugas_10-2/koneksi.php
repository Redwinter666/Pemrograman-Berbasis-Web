<?php
$host = "localhost";
$user = "Red"; // Pastikan user database-nya emang ini ya
$pass = "red"; // Pastikan passwordnya bener
$db   = "pbw1"; 

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>