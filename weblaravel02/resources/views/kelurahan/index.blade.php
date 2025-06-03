<x-layout.admin title="Kelurahan">
    <h1>Kelurahan</h1>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('kelurahan.create') }}">Tambah</a>

                <table border="1" class="table table-striped table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kecamatan</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($kelurahan as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->kecamatan }}</td>
                            <td>
                                <a href="{{ route('kelurahan.edit', $item->id) }}">Edit</a>
                                <form action="{{ route('kelurahan.destroy', $item->id) }}" method="post"
                                    style="display:inline;">
                                    @csrf
                                    @method('delete')
                                    <button type="submit">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-layout.admin>