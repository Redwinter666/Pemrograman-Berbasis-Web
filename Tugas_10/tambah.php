<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
</head>
<body>
    <h2>Tambah Buku Baru</h2>
    <form action="proses_tambah.php" method="POST">
        <p>Judul: <input type="text" name="judul" required></p>
        <p>Penulis: <input type="text" name="penulis" required></p>
        <p>Tahun Terbit: <input type="number" name="tahun" required></p>
        <p>Harga: <input type="number" name="harga" required></p>
        <p>Stok: <input type="number" name="stok" required></p>
        <button type="submit" name="tambah">Simpan Buku</button>
    </form>
</body>
</html>