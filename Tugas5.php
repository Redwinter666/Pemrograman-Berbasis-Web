<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Praktikum Bab VI - Halaman 82</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .kotak { border: 1px solid #ccc; padding: 20px; width: 300px; background-color: #f9f9f9; }
        .baris { display: flex; justify-content: space-between; margin-bottom: 5px; }
        .total { font-weight: bold; border-top: 1px solid #000; margin-top: 10px; padding-top: 10px; }
    </style>
</head>
<body>

    <h2>Struk Pembelian Toko</h2>

    <?php
    // 1. Pajak sebesar 10% (Dijadikan Konstanta)
    // Sesuai materi Bab VI Bagian F (Konstanta) halaman 77
    define("PAJAK", 0.10); 

    // 2. Informasi harga barang disimpan dalam Array
    // Sesuai materi Bab VI Bagian G (Tipe Data Array) halaman 80
    $daftar_harga = [
        "Buku Tulis" => 5000,
        "Pena Gel"   => 3000,
        "Pensil 2B"  => 2000,
        "Penghapus"  => 1000
    ];

    // Memilih barang yang akan dibeli (contoh: Buku Tulis)
    $nama_barang = "Buku Tulis";
    $harga_satuan = $daftar_harga[$nama_barang];

    // 3. Jumlah yang dibeli (Dibuat Variabel)
    // Sesuai materi Bab VI Bagian E (Variabel) halaman 76
    $jumlah_beli = 10; 

    // 4. Perhitungan Total Harga menggunakan Operator Aritmatika
    // Sesuai materi Bab VI Bagian H (Operator Aritmatika) halaman 82
    $subtotal = $harga_satuan * $jumlah_beli;      // Perkalian (*)
    $nilai_pajak = $subtotal * PAJAK;              // Perkalian (*)
    $total_bayar = $subtotal + $nilai_pajak;       // Penjumlahan (+)
    ?>

    <!-- Menampilkan Hasil ke Layar -->
    <div class="kotak">
        <div class="baris">
            <span>Barang:</span>
            <span><?php echo $nama_barang; ?></span>
        </div>
        <div class="baris">
            <span>Harga Satuan:</span>
            <span>Rp <?php echo number_format($harga_satuan, 0, ',', '.'); ?></span>
        </div>
        <div class="baris">
            <span>Jumlah Beli:</span>
            <span><?php echo $jumlah_beli; ?></span>
        </div>
        <div class="baris">
            <span>Subtotal:</span>
            <span>Rp <?php echo number_format($subtotal, 0, ',', '.'); ?></span>
        </div>
        <div class="baris">
            <span>Pajak (10%):</span>
            <span>Rp <?php echo number_format($nilai_pajak, 0, ',', '.'); ?></span>
        </div>
        <div class="baris total">
            <span>Total Bayar:</span>
            <span>Rp <?php echo number_format($total_bayar, 0, ',', '.'); ?></span>
        </div>
    </div>

</body>
</html>