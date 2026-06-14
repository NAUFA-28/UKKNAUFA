<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Data Kategori</title>

<script src="https://cdn.tailwindcss.com"></script>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>
<body class="bg-slate-100">

<div class="flex">

    <!-- Sidebar -->
    <div class="w-64 min-h-screen bg-blue-700 text-white p-6">

        <h2 class="text-2xl font-bold mb-8">
            🧰 Menu Petugas
        </h2>

        <a href="/petugas/dashboard"
   class="block p-3 rounded-lg hover:bg-blue-600 mb-2">
    <i class="fa fa-home"></i> Dashboard
</a>

        <a href="/kategori"
        class="block p-3 rounded-lg bg-blue-800 mb-2">
            <i class="fa fa-folder"></i> Data Kategori
        </a>

        <a href="/alat"
        class="block p-3 rounded-lg hover:bg-blue-600 mb-2">
            <i class="fa fa-toolbox"></i> Data Alat
        </a>

        <a href="/logout"
        class="block p-3 rounded-lg bg-red-500 mt-8">
            <i class="fa fa-sign-out-alt"></i> Logout
        </a>

    </div>

    <!-- Content -->
    <div class="flex-1 p-8">

        <div class="bg-gradient-to-r from-blue-600 to-cyan-500 text-white p-8 rounded-3xl shadow-lg">
<h1 class="text-4xl font-bold">
    📋 KATEGORI PETUGAS
</h1>

<p class="mt-2">
    Kelola kategori alat sebagai petugas
</p>

            <p class="mt-2">
                Kelola kategori alat dengan mudah
            </p>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mt-6">

            <div class="bg-white rounded-3xl p-6 shadow-lg">
                <h5 class="text-gray-500">
                    Total Kategori
                </h5>

                <h1 class="text-5xl font-bold text-blue-600 mt-3">
                    {{ $kategoris->count() }}
                </h1>
            </div>

        </div>

        <div class="mt-6 flex gap-3">

            @if(Auth::user()->role == 'admin' || Auth::user()->role == 'petugas')

<a href="/kategori/create"
class="bg-green-600 text-white px-5 py-3 rounded-xl shadow">
    ➕ Tambah Kategori
</a>

@endif
        <a href="/petugas/dashboard"
   class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-xl shadow">
    🏠 Dashboard
</a>
        </div>

        <div class="bg-white mt-6 rounded-3xl shadow-lg overflow-hidden">

            <table class="w-full">

                <thead class="bg-blue-600 text-white">

                    <tr>
                        <th class="p-4">No</th>
                        <th class="p-4">Nama Kategori</th>
                        <th class="p-4">Deskripsi</th>
                        <th class="p-4">Aksi</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse($kategoris as $kategori)

                    <tr class="border-b hover:bg-slate-50">

                        <td class="p-4 text-center">
                            {{ $loop->iteration }}
                        </td>

                        <td class="p-4">
                            {{ $kategori->nama_kategori }}
                        </td>

                        <td class="p-4">
                            {{ $kategori->deskripsi }}
                        </td>

                        <td class="p-4 text-center">

@if(Auth::user()->role == 'admin' || Auth::user()->role == 'petugas')

    <a href="/kategori/{{ $kategori->id }}/edit"
       class="bg-yellow-500 text-white px-3 py-2 rounded-lg">
        ✏ Edit
    </a>

@endif

@if(Auth::user()->role == 'admin')

    <form action="/kategori/{{ $kategori->id }}"
          method="POST"
          class="inline">

        @csrf
        @method('DELETE')

        <button
            class="bg-red-600 text-white px-3 py-2 rounded-lg">
            🗑 Hapus
        </button>

    </form>

@endif

@if(Auth::user()->role == 'peminjam')

    <span class="text-blue-600 font-semibold">
        👀 Lihat Saja
    </span>

@endif

</td>


                    </tr>

                    @empty

                    <tr>
                        <td colspan="4"
                        class="text-center p-8 text-gray-500">
                            Belum ada data kategori
                        </td>
                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

</body>
</html>