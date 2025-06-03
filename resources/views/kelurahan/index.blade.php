<x-layout.admin title="Dokter">
    <h1>Dokter</h1>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('dokter.create') }}" class="btn btn-primary mb-3">Tambah</a>

                <table border="1" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Spesialis</th>
                            <th>Telepon</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dokters as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->spesialis }}</td>
                                <td>{{ $item->telepon }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>
                                    <a href="{{ route('dokter.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('dokter.destroy', $item->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Yakin hapus?')" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-layout.admin>
