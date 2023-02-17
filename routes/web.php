<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\Pinjaman_bukuController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//route login
Route::get('/login', function () {
    return view('login');
});

/*Route::get('/home', function () {
    return view('home');
});*/


//route pegawai
Route::get('/pegawai/index', [PegawaiController::class, 'index']);
Route::get('/pegawai/create', [PegawaiController::class, 'create'])->name('pegawai.create');
Route::get('/pegawai/{pegawai}/edit', [PegawaiController::class, 'edit'])->name('pegawai.edit');
Route::patch('/pegawai/{pegawai}/edit', [PegawaiController::class, 'update'])->name('pegawai.edit');
Route::delete('/pegawai/{pegawai}/delete', [PegawaiController::class, 'destroy'])->name('pegawai.delete');
Route::post('/pegawai/store', [PegawaiController::class, 'store'])->name('pegawai.store');

//route buku
Route::get('/buku/index', [BukuController::class, 'index']);
Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');
Route::post('/buku/store', [BukuController::class, 'store'])->name('buku.store');
Route::get('/buku/{buku}/edit', [BukuController::class, 'edit'])->name('buku.edit');
Route::patch('/buku/{buku}/edit', [BukuController::class, 'update'])->name('buku.edit');
Route::delete('/buku/{buku}/delete', [BukuController::class, 'destroy'])->name('buku.delete');

//route pinjam buku
Route::get('/pinjaman_buku/index', [Pinjaman_bukuController::class, 'index']);
Route::get('/pinjaman_buku/create', [Pinjaman_bukuController::class, 'create'])->name('pinjaman_buku.create');
Route::post('/pinjaman_buku/store', [Pinjaman_bukuController::class, 'store'])->name('pinjaman_buku.store');
Route::get('/pinjaman_buku/{pinjaman_buku}/edit', [Pinjaman_bukuController::class, 'edit'])->name('pinjaman_buku.edit');
Route::patch('/pinjaman_buku/{pinjaman_buku}/edit', [Pinjaman_bukuController::class, 'update'])->name('pinjaman_buku.edit');
Route::delete('/pinjaman_buku/{pinjaman_buku}/delete', [Pinjaman_bukuController::class, 'destroy'])->name('pinjaman_buku.delete');
