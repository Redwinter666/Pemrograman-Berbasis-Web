<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cari user di database
    $sql = "SELECT * FROM users WHERE username='$username'";
    $query = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($query);

    // Kalau usernamenya ketemu dan passwordnya cocok
    if ($user && password_verify($password, $user['password'])) {
        // Bikin sesi (session)
        $_SESSION['username'] = $user['username'];
        $_SESSION['nama_lengkap'] = $user['nama_lengkap'];
        
        header("Location: index.php");
    } else {
        echo "<script>alert('Username atau password salah, Nuna!'); window.location='login.php';</script>";
    }
}
?>