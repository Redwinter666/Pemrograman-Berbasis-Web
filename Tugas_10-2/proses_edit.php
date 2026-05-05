<?php
session_start();
include 'koneksi.php';

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $status = $_POST['status'];

    $sql = "UPDATE kehadiran SET nama='$nama', jabatan='$jabatan', status='$status' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        header('Location: index.php');
    } else {
        echo "Gagal update data: " . mysqli_error($conn);
    }
}
?>