<?php 
// 1) Definisikan variabel Koneksi Database
$host = "localhost";
$db = "dbnilai";
$user = "root";
$pass = "";
$charset = "utf8mb4";

// 2) Buat DSN (Data Source Name) dan Opsi Koneksi Database
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    PDO::ATTR_EMULATE_PREPARES => false,
];
// 3) Buat Koneksi Database
$dbh = new PDO($dsn, $user, $pass, $opt);
?>