<?php 
require_once 'class_nilaimahasiswa.php';

$mhs1 = new NilaiMahasiswa();
    $mhs1->nama = "Iqbal";
    $mhs1->matakuliah = "Pemrograman Web";
    $mhs1->nilai_uts = 89;
    $mhs1->nilai_uas = 88;  
    $mhs1->nilai_tugas = 99;

    $mhs2 = new NilaiMahasiswa();
    $mhs2->nama = "Iqbal juga";
    $mhs2->matakuliah = "Dasar-Dasar Pemrograman";
    $mhs2->nilai_uts = 89;
    $mhs2->nilai_uas = 81;  
    $mhs2->nilai_tugas = 93;

    $mhs3 = new NilaiMahasiswa();
    $mhs3->nama = "Sama ini iqbal juga";
    $mhs3->matakuliah = "Tugas Akhir";
    $mhs3->nilai_uts = 80;
    $mhs3->nilai_uas = 90;  
    $mhs3->nilai_tugas = 84;

$ar_mahasiswa = [$mhs1, $mhs2, $mhs3];

?>
<h3 style="text-align:center;">Daftar Nilai Mahasiswa</h3>
    <table border="1" cellpadding="2" cellspacing="2" width="100%">
        <thead>
            <tr><th>No</th><th>Nama Lengkap</th>
                <th>Mata Kuliah</th>
                <th>Nilai UTS</th>
                <th>Nilai UAS</th>
                <th>Nilai Tugas</th>
                <th>Nilai Akhir</th>
                <th>Kelulusan</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $nomor = 1;
            foreach($ar_mahasiswa as $obj){ // ini ubah dari data_mhs ke ar_mahasiswa
        ?>
            <tr>
                <td><?= $nomor ?></td>
                <td><?=$obj->nama?></td>
                <td><?=$obj->matakuliah?>
                </td><td><?=$obj->nilai_uts?></td>
                <td><?=$obj->nilai_uas?></td>
                <td><?=$obj->nilai_tugas?></td>
                <td><?=$obj->getNilaiAkhir()?></td>
                <td><?=$obj->kelulusan()?></td>
            </tr>
    <?php
            $nomor++; 
        }
    ?>
        </tbody>
    </table>