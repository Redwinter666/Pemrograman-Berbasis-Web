<?php
session_start();
session_destroy(); // Ini buat ngehapus jejak loginnya
header("Location: login.php");
?>