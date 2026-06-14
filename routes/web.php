<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\Kategori;
use App\Models\Alat;
use App\Models\Peminjaman;

use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\AlatController;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/login', function (Request $request) {

    if (Auth::attempt([
        'email' => $request->email,
        'password' => $request->password
    ])) {

        $user = Auth::user();

        if ($user->role == 'admin') {
            return redirect('/admin/dashboard');
        }

        if ($user->role == 'petugas') {
            return redirect('/petugas/dashboard');
        }

        if ($user->role == 'peminjam') {
            return redirect('/peminjam/dashboard');
        }
    }

    return back();
});
Route::get('/dashboard', function () {

    $totalKategori = Kategori::count();
    $totalAlat = Alat::count();

    return view('dashboard', compact(
        'totalKategori',
        'totalAlat'
    ));

});


Route::get('/admin/dashboard', function () {

    if(Auth::user()->role != 'admin'){
        abort(403);
    }

    $totalKategori = Kategori::count();
    $totalAlat = Alat::count();
    $totalPeminjaman = Peminjaman::count();

    return view('admin.dashboard.index', compact(
        'totalKategori',
        'totalAlat',
        'totalPeminjaman'
    ));
});

Route::get('/petugas/dashboard', function () {
    return view('petugas.dashboard.index');
});

Route::get('/petugas/dashboard', function () {

    if(Auth::user()->role != 'petugas'){
        abort(403);
    }

    return view('petugas.dashboard.index');
});
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
});
Route::get('/peminjam/dashboard', function () {
    return view('peminjam.dashboard.index');
});
Route::resource('kategori', KategoriController::class);
Route::resource('alat', AlatController::class);

