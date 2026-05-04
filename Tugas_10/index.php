<?php 
session_start();

// Cek apakah user udah login belum
if(!isset($_SESSION['username'])) { 
    header("Location: login.php"); 
    exit; 
}

include 'koneksi.php'; 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h2>Data Koleksi Buku</h2>
    
    <p>Halo, <b><?php echo $_SESSION['nama_lengkap']; ?></b>! | <a href="logout.php">Logout</a></p>

    <a href="tambah.php">[+] Tambah Buku Baru</a><br><br>
    
    <table border="1" cellpadding="8" cellspacing="0">
        <tr bgcolor="#eee">
            <th>ID</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php
        $sql = "SELECT * FROM buku";
        $query = mysqli_query($conn, $sql);
        while($buku = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$buku['ID']."</td>";
            echo "<td>".$buku['Judul']."</td>";
            echo "<td>".$buku['Penulis']."</td>";
            echo "<td>".$buku['Tahun_terbit']."</td>";
            echo "<td>Rp ".number_format($buku['Harga'], 0, ',', '.')."</td>";
            echo "<td>".$buku['Stok']."</td>";
            echo "<td>
                <a href='edit.php?id=".$buku['ID']."'>Edit</a> | 
                <a href='hapus.php?id=".$buku['ID']."' onclick='return confirm(\"Yakin mau hapus?\")'>Hapus</a>
            </td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>