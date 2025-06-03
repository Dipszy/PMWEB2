<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kategori</title>
</head>
<body>
    <table>
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
        @foreach ($kategori as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama }}</td>
                <td>
                    <a href="">edit</a>
                    <a href="">delete</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>