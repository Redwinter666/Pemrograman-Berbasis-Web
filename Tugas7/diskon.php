<!DOCTYPE html>
<html>
<head>
    <title>Diskon UKT</title>
</head>
<body>

<h2>Form Pembayaran UKT</h2>

<form method="post">
    NPM: <input type="text" name="npm"><br><br>
    Nama: <input type="text" name="nama"><br><br>
    Prodi: <input type="text" name="prodi"><br><br>
    Semester: <input type="number" name="semester"><br><br>
    Biaya UKT: <input type="number" name="ukt"><br><br>
    <input type="submit" name="submit" value="Proses">
</form>

<?php
if (isset($_POST['submit'])) {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $semester = $_POST['semester'];
    $ukt = $_POST['ukt'];

    $diskon = 0;

    if ($ukt >= 5000000) {
        $diskon = 0.10;

        if ($semester > 8) {
            $diskon = 0.15;
        }
    }

    $potongan = $ukt * $diskon;
    $bayar = $ukt - $potongan;

    echo "<h3>Hasil</h3>";
    echo "NPM : $npm <br>";
    echo "NAMA : $nama <br>";
    echo "PRODI : $prodi <br>";
    echo "SEMESTER : $semester <br>";
    echo "BIAYA UKT : Rp. " . number_format($ukt,0,',','.') . "<br>";
    echo "DISKON : " . ($diskon * 100) . "% <br>";
    echo "YANG HARUS DIBAYAR : Rp. " . number_format($bayar,0,',','.') . "<br>";
}
?>

</body>
</html>