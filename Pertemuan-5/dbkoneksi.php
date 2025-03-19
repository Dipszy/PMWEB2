<?php 
    // Definisi Variable
    $host = "localhost";
    $db = "dbkampus";
    $user = "root";
    $pass = "";
    $charset = "utf8mb4";


    // Data Source Name
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    // Option
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    // Membuat Koneksi
    $dbh = new PDO($dsn, $user, $pass, $opt);
?>

