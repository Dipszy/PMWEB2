<x-layout.admin title="Edit Dokter">
    <h1>Edit Dokter</h1>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('dokter.update', $dokter->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <label for="nama">Nama</label>
                    <input class="form-control" type="text" name="nama" id="nama" value="{{ $dokter->nama }}" required> <br>

                    <label for="spesialis">Spesialis</label>
                    <input class="form-control" type="text" name="spesialis" id="spesialis" value="{{ $dokter->spesialis }}"> <br>

                    <label for="telepon">Telepon</label>
                    <input class="form-control" type="text" name="telepon" id="telepon" value="{{ $dokter->telepon }}"> <br>

                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email" value="{{ $dokter->email }}"> <br>

                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat">{{ $dokter->alamat }}</textarea> <br>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</x-layout.admin>
