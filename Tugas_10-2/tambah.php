<!DOCTYPE html>
<html>
<head><title>Tambah Kehadiran</title></head>
<body>
    <h2>Input Kehadiran</h2>
    <form action="proses_tambah.php" method="POST">
        <p>Nama: <input type="text" name="nama" required></p>
        <p>Jabatan: <input type="text" name="jabatan" required></p>
        <p>Status: 
            <select name="status">
                <option value="Hadir">Hadir</option>
                <option value="Izin">Izin</option>
                <option value="Sakit">Sakit</option>
                <option value="Alpa">Alpa</option>
            </select>
        </p>
        <button type="submit" name="tambah">Simpan Data</button>
    </form>
</body>
</html>