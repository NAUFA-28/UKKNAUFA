<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Tambah Alat</title>

<script src="https://cdn.tailwindcss.com"></script>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>
<body class="bg-slate-100">

<div class="flex">

    <!-- Sidebar -->
    <div class="w-64 min-h-screen bg-green-700 text-white p-6">

        <h2 class="text-2xl font-bold mb-8">
            🔧 Sistem Alat
        </h2>

        <a href="/admin/dashboard"
           class="block p-3 rounded-lg hover:bg-green-600 mb-2">
            <i class="fa fa-home"></i> Dashboard
        </a>

        <a href="/kategori"
           class="block p-3 rounded-lg hover:bg-green-600 mb-2">
            <i class="fa fa-folder"></i> Data Kategori
        </a>

        <a href="/alat"
           class="block p-3 rounded-lg bg-green-600 mb-2">
            <i class="fa fa-toolbox"></i> Data Alat
        </a>

        <a href="/logout"
           class="block p-3 rounded-lg bg-red-500 mt-10">
            <i class="fa fa-sign-out-alt"></i> Logout
        </a>

    </div>

    <!-- Content -->
    <div class="flex-1 p-8">

        <!-- Header -->
        <div class="bg-gradient-to-r from-green-600 to-emerald-500 text-white p-8 rounded-3xl shadow-lg mb-6">

            <h1 class="text-4xl font-bold">
                Tambah Alat
            </h1>

            <p class="mt-2">
                Tambahkan data alat baru ke sistem
            </p>

        </div>

        <!-- Error -->
        @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 p-4 rounded-xl mb-5">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Form -->
        <div class="bg-white rounded-3xl shadow-lg p-8">

            <form action="{{ route('alat.store') }}" method="POST">

                @csrf

                <!-- Kategori -->
                <div class="mb-5">

                    <label class="block mb-2 font-semibold text-gray-700">
                        Kategori
                    </label>

                    <select
                        name="kategori_id"
                        required
                        class="w-full border border-gray-300 rounded-xl p-4 focus:outline-none focus:ring-2 focus:ring-green-500">

                        <option value="">
                            -- Pilih Kategori --
                        </option>

                        @foreach($kategoris as $kategori)
                            <option value="{{ $kategori->id }}">
                                {{ $kategori->nama_kategori }}
                            </option>
                        @endforeach

                    </select>

                </div>

                <!-- Nama Alat -->
                <div class="mb-5">

                    <label class="block mb-2 font-semibold text-gray-700">
                        Nama Alat
                    </label>

                    <input
                        type="text"
                        name="nama_alat"
                        value="{{ old('nama_alat') }}"
                        required
                        class="w-full border border-gray-300 rounded-xl p-4 focus:outline-none focus:ring-2 focus:ring-green-500"
                        placeholder="Masukkan nama alat">

                </div>

                <!-- Kode -->
                <div class="mb-5">

                    <label class="block mb-2 font-semibold text-gray-700">
                        Kode Alat
                    </label>

                    <input
                        type="text"
                        name="kode_alat"
                        value="{{ old('kode_alat') }}"
                        required
                        class="w-full border border-gray-300 rounded-xl p-4 focus:outline-none focus:ring-2 focus:ring-green-500"
                        placeholder="Contoh : ALT001">

                </div>

                <!-- Stok -->
                <div class="mb-5">

                    <label class="block mb-2 font-semibold text-gray-700">
                        Stok
                    </label>

                    <input
                        type="number"
                        name="stok"
                        value="{{ old('stok') }}"
                        required
                        class="w-full border border-gray-300 rounded-xl p-4 focus:outline-none focus:ring-2 focus:ring-green-500"
                        placeholder="Masukkan jumlah stok">

                </div>

                <!-- Deskripsi -->
                <div class="mb-6">

                    <label class="block mb-2 font-semibold text-gray-700">
                        Deskripsi
                    </label>

                    <textarea
                        name="deskripsi"
                        rows="5"
                        class="w-full border border-gray-300 rounded-xl p-4 focus:outline-none focus:ring-2 focus:ring-green-500"
                        placeholder="Masukkan deskripsi alat">{{ old('deskripsi') }}</textarea>

                </div>

                <!-- Button -->
                <div class="flex gap-3">

                    <button
                        type="submit"
                        class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-xl shadow">

                        <i class="fa fa-save"></i>
                        Simpan
                    </button>

                    <a href="{{ route('alat.index') }}"
                       class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-3 rounded-xl shadow">

                        <i class="fa fa-arrow-left"></i>
                        Kembali
                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

</body>
</html>