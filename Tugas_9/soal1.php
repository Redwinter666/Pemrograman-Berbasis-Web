<head>
    <title>Menu Soal</title>
</head>

<?php include "menu.php"; ?>

<h3>Switch Case - Jenis Kendaraan</h3>

<form method="post">
    Jumlah roda: <input type="number" name="roda">
    <button type="submit">Cek</button>
</form>

<?php
if(isset($_POST['roda'])){
    $roda = $_POST['roda'];

    switch($roda){
        case 1: 
            echo "Unicycle";
            break;
        case 2:
            echo "Motor";
            break;
        case 3:
            echo "Bajaj";
            break;
        case 4:
            echo "Mobil";
            break;
        case 6:
            echo "Bus";
            echo "Truk";
            break; 
        default:
            echo "Tidak diketahui";
    }
}
?>