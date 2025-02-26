<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'] ?? '';
    $namaLengkap = $_POST['namaLengkap'] ?? '';
    $jenisKelamin = $_POST['jenisKelamin'] ?? '';
    $programStudi = $_POST['programStudi'] ?? '';
    $skill = $_POST['skill'] ?? [];
    $domisili = $_POST['domisili'] ?? '';
    $email = $_POST['email'] ?? '';
    
    // Daftar program studi
    $ar_prodi = ["TI" => "Teknik Informatika", "SI" => "Sistem Informasi", "BD" => "Bisnis Digital"];
    $namaProdi = $ar_prodi[$programStudi] ?? 'Tidak Diketahui';
    
    // Daftar skill
    $ar_skill = ["HTML" => 10, "CSS" => 20, "JavaScript" => 20, "RWD Bootstrap" => 20, "PHP" => 30, "Python" => 30, "Java" => 50];
    $skillList = [];
    $totalScore = 0;
    
    foreach ($skill as $s) {
        if (isset($ar_skill[$s])) {
            $skillList[] = $s;
            $totalScore += $ar_skill[$s];
        }
    }
    
    // Kategori berdasarkan total score
    if ($totalScore >= 100) {
        $kategori = "Sangat Mahir";
    } elseif ($totalScore >= 60) {
        $kategori = "Mahir";
    } elseif ($totalScore >= 40) {
        $kategori = "Cukup";
    } else {
        $kategori = "Kurang";
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hasil Registrasi</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="container mt-5">
        <h2 class="mb-4 text-center">Hasil Registrasi</h2>
        <table class="table table-striped table-bordered">
            <tr><th>NIM</th><td><?= htmlspecialchars($nim) ?></td></tr>
            <tr><th>Nama Lengkap</th><td><?= htmlspecialchars($namaLengkap) ?></td></tr>
            <tr><th>Jenis Kelamin</th><td><?= htmlspecialchars($jenisKelamin) ?></td></tr>
            <tr><th>Program Studi</th><td><?= htmlspecialchars($namaProdi) ?></td></tr>
            <tr><th>Skill</th><td><?= htmlspecialchars(implode(", ", $skillList)) ?></td></tr>
            <tr><th>Total Score Skill</th><td><?= htmlspecialchars($totalScore) ?></td></tr>
            <tr><th>Kategori</th><td><?= htmlspecialchars($kategori) ?></td></tr>
            <tr><th>Domisili</th><td><?= htmlspecialchars($domisili) ?></td></tr>
            <tr><th>Email</th><td><?= htmlspecialchars($email) ?></td></tr>
        </table>
        <div class="text-center mt-4">
            <a href="form_registrasi.php" class="btn btn-primary">Kembali ke Form</a>
        </div>
    </body>
    </html>
    <?php
} else {
    echo "<div class='container mt-5'><div class='alert alert-danger'>Metode pengiriman tidak valid!</div></div>";
}
?>
