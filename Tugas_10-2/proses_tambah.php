<?php
session_start();
if(!isset($_SESSION['username'])) { header("Location: login.php"); exit; }
include 'koneksi.php';

if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $status = $_POST['status'];
    $tanggal = date('Y-m-d');
    $jam_masuk = date('H:i:s');

    $sql = "INSERT INTO kehadiran (nama, jabatan, tanggal, jam_masuk, status) VALUES ('$nama', '$jabatan', '$tanggal', '$jam_masuk', '$status')";
    if (mysqli_query($conn, $sql)) {
        header('Location: index.php');
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($conn);
    }
}
?>