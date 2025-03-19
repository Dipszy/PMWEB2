<div class="container">
    <div class="card">
        <div class="card-body">
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                ADD NEW
            </button>

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
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

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
                    require_once("Controllers/Prodi.php");
                    $row = $prodi->index();
                    $nomor = 1;
                    foreach ($row as $item):
                    ?>
                    <tr>
                        <td><?= $nomor++ ?></td>
                        <td><?= htmlspecialchars($item['kode']) ?></td>
                        <td><?= htmlspecialchars($item['nama']) ?></td>
                        <td><?= htmlspecialchars($item['kaprodi']) ?></td>
                        <td>
                            <form method="POST">
                                <input type="hidden" name="id" value="<?= htmlspecialchars($item['id']) ?>">
                                <input type="hidden" name="type" value="delete">
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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
        </div>
    </div>
</div>
