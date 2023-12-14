<?php
$host = "localhost"; // Nama hostnya
$username = "root"; // Username
$password = ""; // Password (kosongkan jika tidak menggunakan password)
$database = "pertemuan-11_upload-foto"; // Nama databasenya

// Koneksi ke MySQL dengan PDO
$pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
?>
