<?php

define("PAJAK", 0.15);

$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$npm = isset($_POST['npm']) ? $_POST['npm'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$layanan = isset($_POST['layanan']) ? $_POST['layanan'] : '';
$barang = isset($_POST['barang']) ? $_POST['barang'] : [];

$harga = [
    "Pulpen" => 3000,
    "Buku" => 5000,
    "Pensil" => 2000,
    "Spidol" => 9000,
    "Penghapus" => 1500
];

$jumlah = [
    "Pulpen" => isset($_POST['jumlah_pulpen']) ? $_POST['jumlah_pulpen'] : 0,
    "Buku" => isset($_POST['jumlah_buku']) ? $_POST['jumlah_buku'] : 0,
    "Pensil" => isset($_POST['jumlah_pensil']) ? $_POST['jumlah_pensil'] : 0,
    "Spidol" => isset($_POST['jumlah_spidol']) ? $_POST['jumlah_spidol'] : 0,
    "Penghapus" => isset($_POST['jumlah_penghapus']) ? $_POST['jumlah_penghapus'] : 0
];

$subtotal = 0;

if (!empty($barang)) {
    foreach ($barang as $b) {
        if (isset($harga[$b])) {
            $subtotal += $harga[$b] * $jumlah[$b];
        }
    }
}

$pajak = $subtotal * PAJAK;

if ($layanan == "Reguler") {
    $biaya = 0;
} elseif ($layanan == "Prioritas") {
    $biaya = 5000;
} else {
    $biaya = 0;
}

$total = $subtotal + $pajak + $biaya;

echo "<h2>Hasil Pesanan</h2>";

if (empty($barang)) {
    echo "Tidak ada barang dipilih";
} else {
    echo "<table border='1'>
    <tr><td>Nama</td><td>$nama</td></tr>
    <tr><td>NPM</td><td>$npm</td></tr>
    <tr><td>Email</td><td>$email</td></tr>
    <tr><td>Layanan</td><td>$layanan</td></tr>
    <tr><td>Barang</td><td>";

    foreach ($barang as $b) {
        echo $b . " (" . $jumlah[$b] . ")<br>";
    }

    echo "</td></tr>
    <tr><td>Subtotal</td><td>$subtotal</td></tr>
    <tr><td>Pajak</td><td>$pajak</td></tr>
    <tr><td>Biaya Layanan</td><td>$biaya</td></tr>
    <tr><td>Total</td><td>$total</td></tr>
    </table>";
}

?>