<?php 
    include_once 'top.php';
    require_once "dbkoneksi.php";

    $sql = "SELECT * FROM prodi";
    $rs = $dbh->query($sql);
?>
<div id="page-content-wrapper">
    <?php include_once 'menu.php'; ?>
    
    <div class="container-fluid">
        <h1 class="mt-4">Selamat Datang</h1>

        <a href="form_prodi.php">Tambah Prodi</a>

        <table border="1" width="100%">
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Prodi</th>
                <th>Kepala Prodi</th>
                <th>Aksi</th>
            </tr>
            <?php 
            $nomor = 1;
            foreach ($rs as $row) { ?>
                <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $row->kode; ?></td>
                    <td><?php echo $row->nama; ?></td>
                    <td><?php echo $row->kaprodi; ?></td>
                    <td>
                        <a href="editprodi.php?id=<?php echo $row->kode; ?>">Edit</a> |
                        <a href="proses_prodi.php?id_delete=<?php echo $row->id_hapus; ?>" onclick="return confirm('Yakin mau hapus?')">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>

<?php 
    include_once 'bottom.php';
?>
