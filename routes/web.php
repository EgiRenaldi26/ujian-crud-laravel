<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\DaftarpkkR;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;

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
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/struktur', function () {
    return view('struktur');
});



// Show Data
Route::get('/master', [BarangController::class, 'index'])->name('barang.index');
Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
Route::get('/daftarpkk', [DaftarpkkR::class, 'index'])->name('daftarpkk.index');

// Create
Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');
Route::post('/barang/store', [BarangController::class, 'store'])->name('barang.store');

Route::get('/transaksi/create', [TransaksiController::class, 'create'])->name('transaksi.create');
Route::post('/transaksi/store', [TransaksiController::class, 'store'])->name('transaksi.store');

Route::get('/daftarpkk/create', [DaftarpkkR::class, 'create'])->name('daftarpkk.create');
Route::post('/daftarpkk/store', [DaftarpkkR::class, 'store'])->name('daftarpkk.store');


// Edit
Route::get('/barang/{id}/edit', [BarangController::class, 'edit'])->name('barang.edit');
Route::put('/barang/{id}', [BarangController::class, 'update'])->name('barang.update');

Route::get('/transaksi/{id}/edit', [TransaksiController::class, 'edit'])->name('transaksi.edit');
Route::put('/transaksi/{id}', [TransaksiController::class, 'update'])->name('transaksi.update');

Route::get('/daftarpkk/{id}/edit', [DaftarpkkR::class, 'edit'])->name('daftarpkk.edit');
Route::put('/daftarpkk/{id}', [DaftarpkkR::class, 'update'])->name('daftarpkk.update');

// Delete
Route::delete('/barang/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');
Route::delete('/transaksi/{id}', [TransaksiController::class, 'destroy'])->name('transaksi.destroy');
Route::delete('/daftarpkk/{id}', [DaftarpkkR::class, 'destroy'])->name('daftarpkk.destroy');