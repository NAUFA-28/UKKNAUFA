<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Alat</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            padding:20px;
        }

        h1{
            margin-bottom:20px;
        }

        .btn{
            padding:10px 15px;
            text-decoration:none;
            border-radius:5px;
            color:white;
            display:inline-block;
            margin-right:10px;
        }

        .btn-tambah{
            background:green;
        }

        .btn-dashboard{
            background:gray;
        }

        .btn-edit{
            background:orange;
        }

        .btn-hapus{
            background:red;
            border:none;
            cursor:pointer;
        }

        table{
            width:100%;
            border-collapse:collapse;
            margin-top:20px;
        }

        table, th, td{
            border:1px solid #ddd;
        }

        th{
            background:#007bff;
            color:white;
        }

        th, td{
            padding:12px;
            text-align:left;
        }
    </style>
</head>
<body>

    <h1>Data Alat</h1>

    <a href="/alat/create" class="btn btn-tambah">
        + Tambah Alat
    </a>

    <a href="/admin/dashboard" class="btn btn-dashboard">
        kembali
    </a>

    <table>
        <tr>
            <th>No</th>
            <th>Kategori</th>
            <th>Nama Alat</th>
            <th>Kode</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>

        @forelse($alats as $alat)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $alat->kategori->nama_kategori ?? '-' }}</td>
            <td>{{ $alat->nama_alat }}</td>
            <td>{{ $alat->kode_alat }}</td>
            <td>{{ $alat->stok }}</td>

            <td>
                <a href="/alat/{{ $alat->id }}/edit"
                   class="btn btn-edit">
                    Edit
                </a>

                <form action="/alat/{{ $alat->id }}"
                      method="POST"
                      style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button type="submit"
                            class="btn btn-hapus">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6">
                Belum ada data alat
            </td>
        </tr>
        @endforelse

    </table>

</body>
</html>