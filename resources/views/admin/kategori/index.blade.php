<!DOCTYPE html>
<html>
<head>
    <title>Data Kategori</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            padding:20px;
        }

        table{
            width:100%;
            border-collapse: collapse;
            margin-top:20px;
        }

        table, th, td{
            border:1px solid #ccc;
        }

        th, td{
            padding:10px;
            text-align:left;
        }

        th{
            background:#007bff;
            color:white;
        }

        .btn{
            padding:8px 12px;
            text-decoration:none;
            border-radius:5px;
            color:white;
        }

        .btn-tambah{
            background:green;
        }

        .btn-edit{
            background:orange;
        }

        .btn-hapus{
            background:red;
        }
    </style>
</head>
<body>

<h1>Data Kategori</h1>

<a href="/kategori/create" class="btn btn-tambah">
    + Tambah Kategori
</a>

<a href="/admin/dashboard"
   class="btn"
   style="background:gray; margin-left:10px;">
    kemabali
</a>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>

        @forelse($kategoris as $kategori)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $kategori->nama_kategori }}</td>
            <td>{{ $kategori->deskripsi }}</td>
            <td>

                <a href="/kategori/{{ $kategori->id }}/edit"
                   class="btn btn-edit">
                   Edit
                </a>

                <form action="/kategori/{{ $kategori->id }}"
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
            <td colspan="4">
                Belum ada data kategori
            </td>
        </tr>
        @endforelse

    </table>

</body>
</html>