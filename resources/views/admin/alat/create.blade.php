<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Alat</title>
</head>
<body>

    <h1>Tambah Alat</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('alat.store') }}" method="POST">
        @csrf

        <div>
            <label>Kategori</label>
            <br>
            <select name="kategori_id" required>
                <option value="">-- Pilih Kategori --</option>

                @foreach($kategoris as $kategori)
                    <option value="{{ $kategori->id }}">
                        {{ $kategori->nama_kategori }}
                    </option>
                @endforeach
            </select>
        </div>

        <br>

        <div>
            <label>Nama Alat</label>
            <br>
            <input type="text"
                   name="nama_alat"
                   value="{{ old('nama_alat') }}"
                   required>
        </div>

        <br>

        <div>
            <label>Kode Alat</label>
            <br>
            <input type="text"
                   name="kode_alat"
                   value="{{ old('kode_alat') }}"
                   required>
        </div>

        <br>

        <div>
            <label>Stok</label>
            <br>
            <input type="number"
                   name="stok"
                   value="{{ old('stok') }}"
                   required>
        </div>

        <br>

        <div>
            <label>Deskripsi</label>
            <br>
            <textarea name="deskripsi">{{ old('deskripsi') }}</textarea>
        </div>

        <br>

        <button type="submit">
            Simpan
        </button>

        <a href="{{ route('alat.index') }}">
            Kembali
        </a>

    </form>

</body>
</html>