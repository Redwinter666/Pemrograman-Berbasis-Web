<?php
$host = "localhost";
$user = "Red";
$pass = "red";
$db   = "pbw"; 

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>