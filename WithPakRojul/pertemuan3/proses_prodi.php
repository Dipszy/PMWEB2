<?php 
require_once ('dbkoneksi.php');

$_proses = $_POST['proses'];

if($_proses == "Simpan") {
    $_kode = $_POST['kode'];
    $_nama = $_POST['nama'];
    $_kaprodi = $_POST['kaprodi'];
    $sql = "INSERT INTO prodi (kode, nama, kaprodi) VALUES (?, ?, ?)";
    $ar_data = [$_kode, $_nama, $_kaprodi];
} 
else if($_proses == "Update") {
    $_kode = $_POST['kode'];
    $_nama = $_POST['nama'];
    $_kaprodi = $_POST['kaprodi'];
    $id_edit = $_POST['id_edit'];
    $sql = "UPDATE prodi SET nama=?, kaprodi=?, kode=? WHERE id=?";
    $ar_data = [$_nama, $_kaprodi, $_kode, $id_edit];
} 
else if($_proses == "Hapus") {
    $id_delete = $_POST['id_delete'];
    $sql = "DELETE FROM prodi WHERE id=?";
    $ar_data = [$id_delete];
}

// 6) buat statement query 
$stmt = $dbh->prepare($sql);
// 7) eksekusi query
$stmt->execute($ar_data);

// redirect
header("location: list_prodi.php");
?>
