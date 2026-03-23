<?php
// Inisialisasi variabel dengan nilai default kosong
$nama = '';
$nilai = '';
$predikat = '';
$status = '';
$tampil_hasil = false;

// Proses jika form dikirim (method POST)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = trim($_POST['nama']);
    $nilai = trim($_POST['nilai']);
    
    // Validasi apakah nama dan nilai tidak kosong
    if (!empty($nama) && is_numeric($nilai)) {
        $nilai = (float)$nilai;
        $tampil_hasil = true;
        
        // Menentukan predikat dan status menggunakan if-elseif-else
        if ($nilai >= 85 && $nilai <= 100) {
            $predikat = 'A';
            $status = 'Lulus';
        } elseif ($nilai >= 75 && $nilai <= 84) {
            $predikat = 'B';
            $status = 'Lulus';
        } elseif ($nilai >= 65 && $nilai <= 74) {
            $predikat = 'C';
            $status = 'Lulus';
        } elseif ($nilai >= 50 && $nilai <= 64) {
            $predikat = 'D';
            $status = 'Lulus';
        } elseif ($nilai >= 0 && $nilai <= 49) {
            $predikat = 'E';
            $status = 'Tidak Lulus';
        } else {
            $predikat = 'Tidak valid';
            $status = '-';
            $tampil_hasil = false; // Tidak menampilkan status jika nilai tidak valid
        }
    } else {
        // Jika nama kosong atau nilai bukan angka
        $predikat = 'Input tidak valid';
        $status = '-';
        $tampil_hasil = false;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Nilai Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .hasil {
            margin-top: 20px;
            padding: 15px;
            background-color: #e9ecef;
            border-radius: 5px;
            border-left: 5px solid #4CAF50;
        }
        .hasil p {
            margin: 5px 0;
        }
        .error {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
        hr {
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>📚 Penentuan Predikat Nilai</h2>
        
        <form method="post" action="">
            <div class="form-group">
                <label>Nama Mahasiswa:</label>
                <input type="text" name="nama" value="<?php echo htmlspecialchars($nama); ?>" required>
            </div>
            <div class="form-group">
                <label>Nilai Ujian (0-100):</label>
                <input type="number" name="nilai" step="any" value="<?php echo htmlspecialchars($nilai); ?>" required>
            </div>
            <input type="submit" value="Proses">
        </form>
        
        <?php if ($tampil_hasil && !empty($nama) && $nilai !== ''): ?>
            <div class="hasil">
                <h3>📋 Hasil Evaluasi</h3>
                <p><strong>Nama :</strong> <?php echo htmlspecialchars($nama); ?></p>
                <p><strong>Nilai :</strong> <?php echo htmlspecialchars($nilai); ?></p>
                <p><strong>Predikat :</strong> <?php echo htmlspecialchars($predikat); ?></p>
                <p><strong>Status :</strong> <?php echo htmlspecialchars($status); ?></p>
            </div>
        <?php elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && !$tampil_hasil && $predikat == 'Tidak valid'): ?>
            <div class="hasil" style="border-left-color: #dc3545;">
                <p class="error"><strong>⚠️ Error:</strong> Nilai <?php echo htmlspecialchars($nilai); ?> tidak valid! Masukkan nilai antara 0 - 100.</p>
            </div>
        <?php elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && !$tampil_hasil): ?>
            <div class="hasil" style="border-left-color: #dc3545;">
                <p class="error"><strong>⚠️ Error:</strong> <?php echo htmlspecialchars($predikat); ?></p>
            </div>
        <?php endif; ?>
        
        <hr>
        <small style="color: #666; display: block; text-align: center;">
            * Rentang Nilai: A (85-100), B (75-84), C (65-74), D (50-64), E (0-49)
        </small>
    </div>
</body>
</html>