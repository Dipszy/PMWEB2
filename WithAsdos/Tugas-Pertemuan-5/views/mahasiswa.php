<div class="container">
    <div class="card">
        <div class="card-body">
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                Add Data 
            </button>

            <!-- Modal -->
            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Tambah Data</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="nim">NIM</label>
                                    <input type="text" name="nim" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="tmp_lahir">Tempat lahir</label>
                                    <input type="text" name="tmp_lahir" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="tgl_lahir">Tanggal lahir</label>
                                    <input type="text" name="tgl_lahir" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="thn_masuk">Tahun Masuk</label>
                                    <input type="text" name="thn_masuk" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="sks_lulus">SKS Lulus</label>
                                    <input type="text" name="sks_lulus" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="ipk">IPK</label>
                                    <input type="text" name="ipk" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="prodi_id">prodi_id</label>
                                    <select name="prodi_id" class="form-control" required>
                                        <option value="">--silahkan pilih prodi</option>
                                        <?php 
                                            require_once('Controllers/Prodi.php');
                                            $row = $prodi->index();
                                            foreach ($row as $item): ?>
                                        ?>
                                            <option value ="<?= $item['id'] ?>"><?= $item['nama'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <input type="hidden" name="type" value="tambah">
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Tabel Data -->
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Tempat Lahir</th>
                        <th>Email</th>
                        <th>Tahun Masuk</th>
                        <th>SKS Lulus</th>
                        <th>IPK</th>
                        <th>Prodi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    require_once('Controllers/Mahasiswa.php');
                    $row = $mahasiswa->index();
                    $nomor = 1;
                    foreach ($row as $item): ?>
                        <tr>
                            <td><?= $nomor++ ?></td>
                            <td><?= $item['nim'] ?></td>
                            <td><?= $item['nama'] ?></td>
                            <td><?= $item['tmp_lahir'] ?></td>
                            <td><?= $item['tgl_lahir'] ?></td>
                            <td><?= $item['email'] ?></td>
                            <td><?= $item['thn_masuk'] ?></td>
                            <td><?= $item['sks_lulus'] ?></td>
                            <td><?= $item['ipk'] ?></td>
                            <td><?= $item['prodi_id'] ?></td>

                            <td>
                                <form method="POST" style="display:inline;">
                                    <input type="hidden" name="nim" value="<?= $item['nim'] ?>">
                                    <input type="hidden" name="type" value="delete">
                                    <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Tempat Lahir</th>
                        <th>Email</th>
                        <th>Tahun Masuk</th>
                        <th>SKS Lulus</th>
                        <th>IPK</th>
                        <th>Prodi</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>

            <?php
            // Menangani pengiriman form
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['type'])) {
                    if ($_POST['type'] == 'delete') {
                        $mahasiswa->delete($_POST['nim']);
                        echo '<script>alert("Hapus berhasil")</script>';
                        echo '<meta http-equiv="refresh" content="0; url=?url=mahasiswa">';
                    } elseif ($_POST['type'] == 'tambah') {
                        $data = [
                            'nim' => $_POST['nim'],
                            'nama' => $_POST['nama'],
                            'tmp_lahir' => $_POST['tmp_lahir'],
                            'tgl_lahir' => $_POST['tgl_lahir'],
                            'email' => $_POST['email'],
                            'thn_masuk' => $_POST['thn_masuk'],
                            'sks_lulus' => $_POST['sks_lulus'],
                            'ipk' => $_POST['ipk'],
                            'prodi_id' => $_POST['prodi_id']
                        ];
                        $mahasiswa->create($data);
                        echo '<script>alert("Tambah berhasil")</script>';
                        echo '<meta http-equiv="refresh" content="0; url=?url=mahasiswa">';
                    }
                }
            }
            ?>
        </div>
    </div>
</div>