<x-layout.admin title="Kelurahan">
    <h1>Kelurahan</h1>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1>Tambah Data Kelurahan</h1>
                <form action="{{ route('kelurahan.store') }}" method="post">
                    @csrf
                    <label for="nama">Nama</label>
                    <input class=form-control type="text" name="nama" id="nama" required><br><br>

                    <label for="kecamatan">Kecamatan</label>
                    <input class=form-control type="text" name="kecamatan" id="kecamatan" required><br><br>

                    <button type="submit">Simpan</button>
                </form>
                <br>
                <a href="{{ route('kelurahan.index') }}">Kembali</a>
            </div>
        </div>
    </div>
</x-layout.admin>
