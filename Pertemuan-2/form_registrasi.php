<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h2 class="mb-4 text-center">Form Registrasi</h2>

<div class="container px-5 my-5">
    <form method="POST" action="proses_registrasi.php">
        <div class="mb-3">
            <label class="form-label" for="nim">NIM</label>
            <input class="form-control" id="nim" name="nim" type="text" placeholder="NIM" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="nim:required">NIM is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="namaLengkap">Nama Lengkap</label>
            <input class="form-control" id="namaLengkap" name="namaLengkap" type="text" placeholder="Nama Lengkap" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="namaLengkap:required">Nama Lengkap is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label d-block">Jenis Kelamin</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="lakiLaki" type="radio" name="jenisKelamin" data-sb-validations="required" />
                <label class="form-check-label" for="lakiLaki">Laki - Laki</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="perempuan" type="radio" name="jenisKelamin" data-sb-validations="required" />
                <label class="form-check-label" for="perempuan">Perempuan</label>
            </div>
            <div class="invalid-feedback" data-sb-feedback="jenisKelamin:required">One option is required.</div>
        </div>

        <?php

            $ar_prodi = ["TI" => "Teknik Informatika", "SI" => "Sistem Informasi", "BD" => "Bisnis Digital"];
        ?>
        <div class="mb-3">
            <label class="form-label" for="programStudi">Program Studi</label>
            <select class="form-select" id="programStudi" name="programStudi" aria-label="Program Studi">
                <option value="">Pilih Program Studi</option>
                <?php 
                    foreach ($ar_prodi as $k => $v) {
                        echo "<option value='$k'>$v</option>";
                    }
                ?>

            </select>
        </div>

        <?php 

        $ar_skill = ["HTML" => 10, "CSS" => 20, "JavaScript" => 20, "RWD Bootstrap" => 20, "PHP" => 30, "Python" => 30, "Java" => "50"];

        ?>

        <div class="mb-3">
            <label class="form-label d-block">Skill Web &amp; Programming</label>
            <?php 
            
            foreach($ar_skill as $k => $v) 
            echo "<input type='checkbox' name='skill[]' value='$k' /> $k ";

            ?>

        </div>

        <?php 
        
        $ar_domisili = ["Jakarta", "Bogor", "Depok", "Tanggerang", "Bekasi", "Lainnya"];

        ?>

        <div class='mb-3'>
            <label class="form-label d-block" for="domisili">Domisili</label>
            <select class="form-select" id="domisili" name="domisili" aria-label="domisili">
                <option value="">Pilih Domisili</option>
                <?php 
                    foreach ($ar_domisili as $v) { 
                        echo "<option value='$v'>$v</option>";
                    }
                    
                ?>

            </select>
        </div>
    
        <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" id="email" type="email" name="email" placeholder="Email" data-sb-validations="required,email" />
            <div class="invalid-feedback" data-sb-feedback="email:required">Email is required.</div>
            <div class="invalid-feedback" data-sb-feedback="email:email">Email Email is not valid.</div>
        </div>

        <div class="d-grid">
            <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
        </div>
    </form>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>
</html>