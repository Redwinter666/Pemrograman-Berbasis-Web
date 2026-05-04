<?php
include 'koneksi.php';

if (isset($_POST['signup'])) {
    $nama = $_POST['nama_lengkap'];
    $username = $_POST['username'];
    // Passwordnya kita acak biar aman kalau databasenya dilihat orang
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password, nama_lengkap) 
            VALUES ('$username', '$password', '$nama')";
    
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Pendaftaran berhasil! Silakan login.'); window.location='login.php';</script>";
    } else {
        echo "Gagal mendaftar: " . mysqli_error($conn);
    }
}
?>