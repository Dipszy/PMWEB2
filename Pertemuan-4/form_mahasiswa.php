<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container px-5 my-5">
    <form action="daftar_mahasiswa.php" method="POST">
        <div class="mb-3">
            <input class="form-control" name="nim" type="text" placeholder="NIM" data-sb-validations="required" />
            <label for="nim">NIM</label>
            <div class="invalid-feedback" data-sb-feedback="nim:required">NIM is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="nama" type="text" placeholder="Nama" data-sb-validations="required" />
            <label for="nama">Nama</label>
            <div class="invalid-feedback" data-sb-feedback="nama:required">Nama is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="prodi" type="text" placeholder="Prodi" data-sb-validations="required" />
            <label for="prodi">Prodi</label>
            <div class="invalid-feedback" data-sb-feedback="prodi:required">Prodi is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="thn_angkatan" type="text" placeholder="Tahun Angkatan" data-sb-validations="required" />
            <label for="tahunAngkatan">Tahun Angkatan</label>
            <div class="invalid-feedback" data-sb-feedback="tahunAngkatan:required">Tahun Angkatan is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="ipk" type="text" placeholder="IPK" data-sb-validations="required" />
            <label for="ipk">IPK</label>
            <div class="invalid-feedback" data-sb-feedback="ipk:required">IPK is required.</div>
        </div>
        <div class="d-none" id="submitSuccessMessage">
            <div class="text-center mb-3">
                <div class="fw-bolder">Form submission successful!</div>
                <p>To activate this form, sign up at</p>
                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
            </div>
        </div>
        <div class="d-none" id="submitErrorMessage">
            <div class="text-center text-danger mb-3">Error sending message!</div>
        </div>
        <div class="d-grid">
            <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
        </div>
    </form>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>