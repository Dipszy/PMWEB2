<?php 
    include_once 'top.php';
?>
<div id="page-content-wrapper">
                <!-- Top navigation-->
                <?php 
                    include_once 'menu.php';
                ?>
                <!-- Page content-->
                <div class="container-fluid">
                    <h2 class="mt-4">Selamat Datang</h2>
                </div>
</div>
<h2>Form Prodi</h2>
<form method="POST" action="proses_prodi.php">
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="kode" name="kode" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Prodi</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="kaprodi" class="col-4 col-form-label">Kepala Prodi</label> 
    <div class="col-8">
      <input id="kaprodi" name="kaprodi" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input name="proses" type="submit" value="Simpan" class="btn btn-primary">
    </div>
  </div>
</form>