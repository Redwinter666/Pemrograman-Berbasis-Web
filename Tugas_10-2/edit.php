<?php
session_start();
if(!isset($_SESSION['username'])) { header("Location: login.php"); exit; }
include 'koneksi.php';

if (!isset($_GET['id'])) { header("Location: index.php"); exit; }
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM kehadiran WHERE id=$id");
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head><title>Edit Kehadiran</title></head>
<body>
    <h2>Edit Data Kehadiran</h2>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <p>Nama: <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required></p>
        <p>Jabatan: <input type="text" name="jabatan" value="<?php echo $data['jabatan']; ?>" required></p>
        <p>Status: 
            <select name="status">
                <option value="Hadir" <?php if($data['status']=='Hadir') echo 'selected'; ?>>Hadir</option>
                <option value="Izin" <?php if($data['status']=='Izin') echo 'selected'; ?>>Izin</option>
                <option value="Sakit" <?php if($data['status']=='Sakit') echo 'selected'; ?>>Sakit</option>
                <option value="Alpa" <?php if($data['status']=='Alpa') echo 'selected'; ?>>Alpa</option>
            </select>
        </p>
        <button type="submit" name="edit">Update Data</button>
    </form>
    <p><a href="index.php">Kembali</a></p>
</body>
</html>