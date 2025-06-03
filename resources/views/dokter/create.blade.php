<x-layout.admin title="Dokter">
    <h1>Dokter</h1>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1>Tambah Data Dokter</h1>
                <form action="{{ route('dokter.store') }}" method="post">
                    @csrf
                    <label for="nama">Nama</label>
                    <input class=form-control type="text" name="nama" id="nama" required><br><br>

                    <label for="spesialis">Spesialis</label>
                    <input class=form-control type="text" name="spesialis" id="spesialis" required><br><br>

                    <label for="telepon">Telepon</label>
                    <input class=form-control type="number" name="telepon" id="telepon" required><br><br>

                    <label for="email">Email</label>
                    <input class=form-control type="text" name="email" id="email" required><br><br>

                    <label for="alamat">Alamat</label>
                    <input class=form-control type="text" name="alamat" id="alamat" required><br><br>

                    <button type="submit">Simpan</button>
                </form>
                <br>
                <a href="{{ route('dokter.index') }}">Kembali</a>
            </div>
        </div>
    </div>
</x-layout.admin>
