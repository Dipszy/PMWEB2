<?php 
require_once 'dbkoneksi.php';

// Query Data Prodi
$sql = "SELECT * FROM prodi";

// Eksekusi Query
$rs = $dbh->query($sql)->fetchAll();

// Tampilkan Hasil Query
foreach ($rs as $row){
    echo '<br>'.$row->nim. ' - ' . $row->nama;
}
?>

<table class="table table-bordered">
    <thead><tr><th width="15">No</th><th>Kode</th><th>Nama Prodi</th>
    <th>Kepala Prodi</th><th>Aksi</th></tr></thead>

<tbody>
    $nomor = 1;
    foreach($rs as $row){ ?>
    <tr>
        <td><?= $nomor++ ?></td>
        <td><?= $row->kode; ?></td>
        <td><?= $row->nama; ?></td>
        <td><?= $row->kaprodi; ?></td>
        <td>
            <a href="form_prodi.php?id_edit=<?php echo $row->id_edit; ?>">Edit</a>
            <a href="proses_prodi.php?id_delete=<?php echo $row->id_hapus; ?>">Hapus</a>
        </td> 
    }
</tbody>
</table>