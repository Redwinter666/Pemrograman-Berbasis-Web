<?php
include 'koneksi.php';

if(isset($_POST['tambah'])){
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahun = $_POST['tahun'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $sql = "INSERT INTO buku (Judul, Penulis, Tahun_terbit, Harga, Stok) 
            VALUES ('$judul', '$penulis', '$tahun', '$harga', '$stok')";
    
    if(mysqli_query($conn, $sql)){
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }
}
?>