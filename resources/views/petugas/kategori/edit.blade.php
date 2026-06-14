<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Tambah Kategori</title>

<script src="https://cdn.tailwindcss.com"></script>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>
<body class="bg-slate-100">

<div class="flex">

    <!-- Sidebar -->
    <div class="w-64 min-h-screen bg-blue-800 text-white p-6">

        <h2 class="text-2xl font-bold mb-8">
            🔧 Sistem Alat
        </h2>

        <a href="/admin/dashboard"
           class="block p-3 rounded-lg hover:bg-blue-700 mb-2">
            <i class="fa fa-home"></i> Dashboard
        </a>

        <a href="/kategori"
           class="block p-3 rounded-lg bg-blue-700 mb-2">
            <i class="fa fa-folder"></i> Data Kategori
        </a>

        <a href="/alat"
           class="block p-3 rounded-lg hover:bg-blue-700 mb-2">
            <i class="fa fa-toolbox"></i> Data Alat
        </a>

        <a href="/logout"
           class="block p-3 rounded-lg bg-red-500 mt-10">
            <i class="fa fa-sign-out-alt"></i> Logout
        </a>

    </div>

    <!-- Content -->
    <div class="flex-1 p-8">

        <div class="bg-gradient-to-r from-blue-700 to-cyan-500 text-white p-8 rounded-3xl shadow-lg mb-6">
            <h1 class="text-4xl font-bold">
                Tambah Kategori
            </h1>

            <p class="mt-2">
                Buat kategori baru untuk alat
            </p>
        </div>

        <div class="bg-white rounded-3xl shadow-lg p-8">

            <form action="/kategori" method="POST">

                @csrf

                <div class="mb-6">

                    <label class="block mb-2 font-semibold">
                        Nama Kategori
                    </label>

                    <input
                        type="text"
                        name="nama_kategori"
                        class="w-full border border-gray-300 rounded-xl p-4 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan nama kategori">

                </div>

                <div class="mb-6">

                    <label class="block mb-2 font-semibold">
                        Deskripsi
                    </label>

                    <textarea
                        name="deskripsi"
                        rows="5"
                        class="w-full border border-gray-300 rounded-xl p-4 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan deskripsi kategori"></textarea>

                </div>

                <div class="flex gap-3">

                    <button
                        type="submit"
                        class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-xl">

                        <i class="fa fa-save"></i>
                        Simpan
                    </button>

                    <a href="/kategori"
                       class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-3 rounded-xl">

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