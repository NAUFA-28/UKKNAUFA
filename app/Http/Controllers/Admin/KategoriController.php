<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::all();

        if (auth()->user()->role == 'petugas') {
            return view('petugas.kategori.index', compact('kategoris'));
        }

        return view('admin.kategori.index', compact('kategoris'));
    }

    public function create()
    {
        if (auth()->user()->role == 'petugas') {
            return view('petugas.kategori.create');
        }

        return view('admin.kategori.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required',
            'deskripsi' => 'nullable'
        ]);

        Kategori::create([
            'nama_kategori' => $request->nama_kategori,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('/kategori')
            ->with('success', 'Kategori berhasil ditambahkan');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $kategori = Kategori::findOrFail($id);

        if (auth()->user()->role == 'petugas') {
            return view('petugas.kategori.edit', compact('kategori'));
        }

        return view('admin.kategori.edit', compact('kategori'));
    }

    public function update(Request $request, string $id)
    {
        $kategori = Kategori::findOrFail($id);

        $kategori->update([
            'nama_kategori' => $request->nama_kategori,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('/kategori')
            ->with('success', 'Kategori berhasil diupdate');
    }

    public function destroy(string $id)
    {
        $kategori = Kategori::findOrFail($id);

        $kategori->delete();

        return redirect('/kategori')
            ->with('success', 'Kategori berhasil dihapus');
    }
}