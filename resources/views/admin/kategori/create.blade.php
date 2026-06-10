<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kategori</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            padding:20px;
        }

        .container{
            max-width:600px;
            margin:auto;
        }

        input,
        textarea{
            width:100%;
            padding:10px;
            margin-top:5px;
        }

        .btn{
            padding:10px 15px;
            text-decoration:none;
            border:none;
            border-radius:5px;
            cursor:pointer;
            color:white;
        }

        .btn-simpan{
            background:green;
        }

        .btn-kembali{
            background:gray;
        }

        .error{
            color:red;
            margin-bottom:15px;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>Tambah Kategori</h1>

    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/kategori" method="POST">
        @csrf

        <label>Nama Kategori</label>
        <br>
        <input
            type="text"
            name="nama_kategori"
            value="{{ old('nama_kategori') }}"
            required
        >

        <br><br>

        <label>Deskripsi</label>
        <br>
        <textarea
            name="deskripsi"
            rows="4"
        >{{ old('deskripsi') }}</textarea>

        <br><br>

        <button type="submit" class="btn btn-simpan">
            Simpan
        </button>

        <a href="/admin/dashboard" class="btn btn-kembali">
            Kembali ke Dashboard
        </a>

    </form>

</div>

</body>
</html>