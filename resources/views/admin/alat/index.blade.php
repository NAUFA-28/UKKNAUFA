<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Alat</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen">

<div class="container mx-auto p-8">

    <!-- Judul -->
    <h1 class="text-4xl font-bold text-gray-800 mb-6">
        🔧 Data Alat
    </h1>

    <!-- Statistik -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">

        <div class="bg-blue-600 text-white p-5 rounded-2xl shadow">
            <h5>Total Alat</h5>
            <h1 class="text-4xl font-bold">
                {{ $alats->count() }}
            </h1>
        </div>

        <div class="bg-green-600 text-white p-5 rounded-2xl shadow">
            <h5>Total Stok</h5>
            <h1 class="text-4xl font-bold">
                {{ $alats->sum('stok') }}
            </h1>
        </div>

        <div class="bg-orange-500 text-white p-5 rounded-2xl shadow">
            <h5>Total Kategori</h5>
            <h1 class="text-4xl font-bold">
                {{ $alats->pluck('kategori_id')->unique()->count() }}
            </h1>
        </div>

    </div>

<!-- Tombol -->
<div class="flex gap-3 mb-6">

    @if(Auth::user()->role == 'admin' || Auth::user()->role == 'petugas')

    <a href="/alat/create"
       class="bg-green-600 hover:bg-green-700 text-white px-5 py-3 rounded-xl shadow">
        ➕ Tambah Alat
    </a>

    @endif

<a href="javascript:history.back()"
   class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl shadow-lg transition duration-300">
    ⬅ Kembali
</a>

</div>

    <!-- Tabel -->
    <div class="bg-white rounded-3xl shadow-lg overflow-hidden">

        <table class="w-full">

            <thead class="bg-gradient-to-r from-red-700 to-orange-500 text-white">
                <tr>
                    <th class="p-4 text-left">No</th>
                    <th class="p-4 text-left">Kategori</th>
                    <th class="p-4 text-left">Nama Alat</th>
                    <th class="p-4 text-left">Kode</th>
                    <th class="p-4 text-left">Stok</th>
                    <th class="p-4 text-left">Aksi</th>
                </tr>
            </thead>

            <tbody>

                @forelse($alats as $alat)

                <tr class="border-b hover:bg-gray-50">

                    <td class="p-4">{{ $loop->iteration }}</td>

                    <td class="p-4">
                        {{ $alat->kategori->nama_kategori ?? '-' }}
                    </td>

                    <td class="p-4 font-medium">
                        {{ $alat->nama_alat }}
                    </td>

                    <td class="p-4">
                        {{ $alat->kode_alat }}
                    </td>

                    <td class="p-4">

                        @if($alat->stok > 0)
                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">
                                {{ $alat->stok }}
                            </span>
                        @else
                            <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">
                                Habis
                            </span>
                        @endif

                    </td>

<td class="p-4">

@if(Auth::user()->role == 'admin' || Auth::user()->role == 'petugas')

    <a href="/alat/{{ $alat->id }}/edit"
       class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg">
        ✏ Edit
    </a>

@endif

@if(Auth::user()->role == 'admin')

    <form action="/alat/{{ $alat->id }}" method="POST" class="inline">
        @csrf
        @method('DELETE')

        <button type="submit"
                class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg">
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
                    <td colspan="6" class="text-center p-6 text-gray-500">
                        Belum ada data alat
                    </td>
                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

</body>
</html>