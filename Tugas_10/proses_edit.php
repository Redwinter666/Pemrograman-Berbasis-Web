<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahun = $_POST['tahun'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    // Update data berdasarkan ID
    $sql = "UPDATE buku SET 
            Judul='$judul', 
            Penulis='$penulis', 
            Tahun_terbit='$tahun', 
            Harga='$harga', 
            Stok='$stok' 
            WHERE ID=$id";
            
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('Location: index.php?status=sukses_update');
    } else {
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
?>