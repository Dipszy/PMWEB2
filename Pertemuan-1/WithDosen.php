<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<style class="darkreader darkreader--sync" media="screen"></style> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style class="darkreader darkreader--sync" media="screen"></style>

</head>

<body>

<h2>Form Nilai Mahasiswa</h2>

<fieldset style="border:1px solid black">
    <legend>Form Input Nilai Mahasiswa</legend>

<?php
    $data_matkul = [
    "Web1" => "Pemograman Web 1", 
    "Web2" => "Pemograman Web 2",
    "BASDAT" => "Basis Data",
    "UI/UX" => "UI/UX",
    "JARKOM" => "Jaringan Komputer",
    "PKK" => "Pemograman Keamanan Komputer",
    ];
?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="form-group row"> 
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" placeholder="yourname" type="text" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select" aria-describedby="matkulHelpBlock" required="required">
        <?php

            foreach ($data_matkul as $key => $value) {
                echo "<option value='$key'>$value</option>";
            }

        ?>
      </select> 
      <span id="matkulHelpBlock" class="form-text text-muted">Select Mata Kuliah</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas / Praktikum</label> 
    <div class="col-8">
      <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai " type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

</fieldset>


<?php 

$_nama = $_GET['nama'];
$data_matkul = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];
?>

<h2>Hasil Perhitungan Nilai Mahasiswa</h2>
Nama Mahasiswa : <?= $_nama; ?> <br>
Mata Kuliah : <?= $data_matkul; ?> <br>
Nilai UTS : <?=$nilai_uts; ?> <br>
Nilai UAS : <?= $nilai_uas; ?> <br>
Nilai Tugas : <?= $nilai_tugas; ?> <br>




</body>
</html>