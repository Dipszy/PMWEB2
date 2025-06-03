<?php 
    include 'class_mahasiswa.php';

    $daftar_mahasiswa = [
        new Mahasiswa('0110224000', 'Budi', 2024, 'TI', 3.75),
        new Mahasiswa('0110224001', 'Agus', 2024, 'SI', 2.95),
        new Mahasiswa('0110224002', 'Jokowi', 2024, 'BD', 4.00),
        new Mahasiswa('0110224003', 'Prabowo', 2024, 'TI', 1.20),
    ];

    if (isset($_POST['nim'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];
        $thn_angkatan = $_POST['thn_angkatan'];
        $ipk = $_POST['ipk'];

        array_push($daftar_mahasiswa, new Mahasiswa($nim, $nama, $thn_angkatan, $prodi, $ipk));
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Daftar Mahasiswa</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Angkatan</th>
                    <th>IPK</th>
                    <th>Predikat</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no = 1;
                foreach ($daftar_mahasiswa as $mhs) {
                    
                ?>

                <tr>
                <td><?= $no++; ?></td>
                <td><?= $mhs->nim; ?></td>
                <td><?= $mhs->nama; ?></td>
                <td><?= $mhs->prodi; ?></td>
                <td><?= $mhs->thn_angkatan; ?></td>
                <td><?= $mhs->ipk; ?></td>
                <td><?= $mhs->predikat_ipk(); ?></td>
                </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>