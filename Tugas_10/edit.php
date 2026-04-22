<?php
include 'koneksi.php';

// Kalau tidak ada ID di URL, balikkan ke index
if (!isset($_GET['id'])) {
    header('Location: index.php');
}

$id = $_GET['id'];

// Ambil data buku berdasarkan ID
$sql = "SELECT * FROM buku WHERE ID=$id";
$query = mysqli_query($conn, $sql);
$buku = mysqli_fetch_assoc($query);

// Jika data yang mau diedit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("Data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
</head>
<body>
    <h2>Edit Data Buku</h2>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $buku['ID'] ?>" />

        <p>
            <label>Judul: </label>
            <input type="text" name="judul" value="<?php echo $buku['Judul'] ?>" required />
        </p>
        <p>
            <label>Penulis: </label>
            <input type="text" name="penulis" value="<?php echo $buku['Penulis'] ?>" required />
        </p>
        <p>
            <label>Tahun Terbit: </label>
            <input type="number" name="tahun" value="<?php echo $buku['Tahun_terbit'] ?>" required />
        </p>
        <p>
            <label>Harga: </label>
            <input type="number" name="harga" value="<?php echo $buku['Harga'] ?>" required />
        </p>
        <p>
            <label>Stok: </label>
            <input type="number" name="stok" value="<?php echo $buku['Stok'] ?>" required />
        </p>
        <button type="submit" name="simpan">Update Data</button>
    </form>
</body>
</html>