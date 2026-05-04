<?php
include 'koneksi.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM kehadiran WHERE id=$id");
    header('Location: index.php');
}
?>