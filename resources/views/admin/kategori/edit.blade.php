<!DOCTYPE html>
<html>
<head>
    <title>Edit Kategori</title>
</head>
<body>

<h1>Edit Kategori</h1>

<form action="/kategori/{{ $kategori->id }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nama Kategori</label>
    <br>
    <input
        type="text"
        name="nama_kategori"
        value="{{ $kategori->nama_kategori }}"
    >

    <br><br>

    <label>Deskripsi</label>
    <br>
    <textarea name="deskripsi">{{ $kategori->deskripsi }}</textarea>

    <br><br>

    <button type="submit">
        Update
    </button>

</form>

</body>
</html>