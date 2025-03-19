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
                                    <label for="kode">Kode</label>
                                    <input type="text" name="kode" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="kaprodi">Kaprodi</label>
                                    <input type="text" name="kaprodi" class="form-control" required>
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
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Kaprodi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    require_once('Controllers/Prodi.php');
                    $row = $prodi->index();
                    $nomor = 1;
                    foreach ($row as $item): ?>
                        <tr>
                            <td><?= $nomor++ ?></td>
                            <td><?= htmlspecialchars($item['kode']) ?></td>
                            <td><?= htmlspecialchars($item['nama']) ?></td>
                            <td><?= htmlspecialchars($item['kaprodi']) ?></td>
                            <td>
                                <form method="POST" style="display:inline;">
                                    <input type="hidden" name="id" value="<?= htmlspecialchars($item['id']) ?>">
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
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Kaprodi</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>

            <?php
            // Menangani pengiriman form
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['type'])) {
                    if ($_POST['type'] == 'delete') {
                        $prodi->delete($_POST['id']);
                        echo '<script>alert("Hapus berhasil")</script>';
                        echo '<meta http-equiv="refresh" content="0; url=?url=prodi">';
                    } elseif ($_POST['type'] == 'tambah') {
                        $data = [
                            'kode' => $_POST['kode'],
                            'nama' => $_POST['nama'],
                            'kaprodi' => $_POST['kaprodi']
                        ];
                        $prodi->create($data);
                        echo '<script>alert("Tambah berhasil")</script>';
                        echo '<meta http-equiv="refresh" content="0; url=?url=prodi">';
                    }
                }
            }
            ?>
        </div>
    </div>
</div>