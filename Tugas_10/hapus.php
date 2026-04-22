<?php
include 'koneksi.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM buku WHERE ID=$id";
    
    if(mysqli_query($conn, $sql)){
        header('Location: index.php');
    } else {
        die("Gagal menghapus...");
    }
}
?>