<?php 
require_once 'dbkoneksi.php';
$nama = $_POST['nama'];
$kode = $_POST['kode'];
$kaprodi = $_POST['kaprodi'];
$prodi = $_POST['proses'];

$ar_data = [$_kode, $_nama, $_kaprodi];

// Query Sql
if($_proses == 'Simpan'){
    $sql = "INSER INTO prodi(kode, nama, kaprodi) VALUES(?, ?, ?)";
} elseif ($_proses == 'Update'){
    $sql = "UPDATE prodi SET nama=?, kaprodi=?, kode=? WHERE id=?";
    $id_update = $_POST['id_edit'];
    $ar_data[] = $id_edit;
} elseif ($_proses == 'Hapus'){
    $sql = "DELETE FROM prodi WHERE id=?";
    unset($ar_data); // Hapus Array
    $ud_delete = $_POST['id_delete'];
    $ar_data[] = $id_delete;
}

$stmt = $dbh->prepare($sql);

$stmt->execute($ar_data);

header('Location: list_prodi.php');
?>