<?php 
session_start();
if(!isset($_SESSION['username'])) { header("Location: login.php"); exit; }
include 'koneksi.php'; 
?>
<!DOCTYPE html>
<html>
<head><title>Sistem Kehadiran</title></head>
<body>
    <h2>Daftar Kehadiran Pegawai</h2>
    <p>Halo, <b><?php echo $_SESSION['nama_lengkap']; ?></b>! | <a href="logout.php">Logout</a></p>
    
    <a href="tambah.php">[+] Tambah Kehadiran Baru</a><br><br>
    
    <table border="1" cellpadding="8" cellspacing="0">
        <tr bgcolor="#eee">
            <th>ID</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Tanggal</th>
            <th>Jam Masuk</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <?php
        $sql = "SELECT * FROM kehadiran";
        $query = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['nama']."</td>";
            echo "<td>".$row['jabatan']."</td>";
            echo "<td>".$row['tanggal']."</td>";
            echo "<td>".$row['jam_masuk']."</td>";
            echo "<td>".$row['status']."</td>";
            echo "<td>
                <a href='edit.php?id=".$row['id']."'>Edit</a> | 
                <a href='hapus.php?id=".$row['id']."' onclick='return confirm(\"Yakin hapus?\")'>Hapus</a>
            </td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>