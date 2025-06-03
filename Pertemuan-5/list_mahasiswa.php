<?php 
require_once 'dbkoneksi.php';

// Query Data Mahasiswa
$sql = "SELECT * FROM mahasiswa";

// Eksekusi Query
$rs = $dbh->query($sql)->fetchAll();

// Tampilkan Hasil Query
foreach ($rs as $row){
    echo '<br>'.$row->nim. ' - ' . $row->nama;
}
?>
