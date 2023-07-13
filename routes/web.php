<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomeController;
use app\Http\Controllers\PemesananController;
use app\Http\Controllers\PembayaranController;
use app\Http\Controllers\MetodePembayaranController;
use app\Http\Controllers\TunaiController;
use app\Http\Controllers\TransferController;
use app\Http\Controllers\DompetElektronikController;
use app\Http\Controllers\BarangController;
use app\Http\Controllers\HistoriPemesananController;
use app\Http\Controllers\KategoriBarangController;
use app\Http\Controllers\StokBarangController;
use app\Http\Controllers\RoleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view("welcome");
});
Route::get('/home', function () {
    return view("home");
});

Route::get('/login', function () {
    return view("login");
});

Route::get('/register', function () {
    return view("register");
});

Route::get('Pemesanan', [ProductController::class, 'index'])->name('Pemesanan.index');
Route::get('Pemesanan/create', [ProductController::class, 'create'])->name('Pemesanan.create');
Route::post('Pemesanan', [ProductController::class, 'store'])->name('Pemesanan.store');
Route::get('Pemesanan/{id}/edit', [ProductController::class, 'edit'])->name('Pemesanan.edit');
Route::put('Pemesanan/{id}', [ProductController::class, 'update'])->name('Pemesanan.update');
Route::delete('Pemesanan/{id}', [ProductController::class, 'destroy'])->name('Pemesanan.destroy');

Route::get('Pembayaran', [ProductController::class, 'index'])->name('Pembayaran.index');
Route::get('Pembayaran/create', [ProductController::class, 'create'])->name('Pembayaran.create');
Route::post('Pembayaran', [ProductController::class, 'store'])->name('Pembayaran.store');
Route::get('Pembayaran/{id}/edit', [ProductController::class, 'edit'])->name('Pembayaran.edit');
Route::put('Pembayaran/{id}', [ProductController::class, 'update'])->name('Pembayaran.update');
Route::delete('Pembayaran/{id}', [ProductController::class, 'destroy'])->name('Pembayaran.destroy');


Route::get('MetodePembayaran', [ProductController::class, 'index'])->name('MetodePembayaran.index');
Route::get('MetodePembayaran/create', [ProductController::class, 'create'])->name('MetodePembayaran.create');
Route::post('MetodePembayaran', [ProductController::class, 'store'])->name('MetodePembayaran.store');
Route::get('MetodePembayaran/{id}/edit', [ProductController::class, 'edit'])->name('MetodePembayaran.edit');
Route::put('MetodePembayaran/{id}', [ProductController::class, 'update'])->name('MetodePembayaran.update');
Route::delete('MetodePembayaran/{id}', [ProductController::class, 'destroy'])->name('MetodePembayaran.destroy');


Route::get('Tunai', [ProductController::class, 'index'])->name('Tunai.index');
Route::get('Tunai/create', [ProductController::class, 'create'])->name('Tunai.create');
Route::post('Tunai', [ProductController::class, 'store'])->name('Tunai.store');
Route::get('Tunai/{id}/edit', [ProductController::class, 'edit'])->name('Tunai.edit');
Route::put('Tunai/{id}', [ProductController::class, 'update'])->name('Tunai.update');
Route::delete('Tunai/{id}', [ProductController::class, 'destroy'])->name('Tunai.destroy');

Route::get('Transfer', [ProductController::class, 'index'])->name('Transfer.index');
Route::get('Transfer/create', [ProductController::class, 'create'])->name('Transfer.create');
Route::post('Transfer', [ProductController::class, 'store'])->name('Transfer.store');
Route::get('Transfer/{id}/edit', [ProductController::class, 'edit'])->name('Transfer.edit');
Route::put('Transfer/{id}', [ProductController::class, 'update'])->name('Transfer.update');
Route::delete('Transfer/{id}', [ProductController::class, 'destroy'])->name('Transfer.destroy');

Route::get('DompetElektronik', [ProductController::class, 'index'])->name('DompetElektronik.index');
Route::get('DompetElektronik/create', [ProductController::class, 'create'])->name('DompetElektronik.create');
Route::post('DompetElektronik', [ProductController::class, 'store'])->name('DompetElektronik.store');
Route::get('DompetElektronik/{id}/edit', [ProductController::class, 'edit'])->name('DompetElektronik.edit');
Route::put('DompetElektronik/{id}', [ProductController::class, 'update'])->name('DompetElektronik.update');
Route::delete('DompetElektronik/{id}', [ProductController::class, 'destroy'])->name('DompetElektronik.destroy');

Route::get('Barang', [ProductController::class, 'index'])->name('Barang.index');
Route::get('Barang/create', [ProductController::class, 'create'])->name('Barang.create');
Route::post('Barang', [ProductController::class, 'store'])->name('Barang.store');
Route::get('Barang/{id}/edit', [ProductController::class, 'edit'])->name('Barang.edit');
Route::put('Barang/{id}', [ProductController::class, 'update'])->name('Barang.update');
Route::delete('Barang/{id}', [ProductController::class, 'destroy'])->name('Barang.destroy');

Route::get('HistoriPemesanan', [ProductController::class, 'index'])->name('HistoriPemesanan.index');
Route::get('HistoriPemesanan/create', [ProductController::class, 'create'])->name('HistoriPemesanan.create');
Route::post('HistoriPemesanan', [ProductController::class, 'store'])->name('HistoriPemesanan.store');
Route::get('HistoriPemesanan/{id}/edit', [ProductController::class, 'edit'])->name('HistoriPemesanan.edit');
Route::put('HistoriPemesanan/{id}', [ProductController::class, 'update'])->name('HistoriPemesanan.update');
Route::delete('HistoriPemesanan/{id}', [ProductController::class, 'destroy'])->name('HistoriPemesanan.destroy');

Route::get('KategoriBarang', [ProductController::class, 'index'])->name('KategoriBarang.index');
Route::get('KategoriBarang/create', [ProductController::class, 'create'])->name('KategoriBarang.create');
Route::post('KategoriBarang', [ProductController::class, 'store'])->name('KategoriBarang.store');
Route::get('KategoriBarang/{id}/edit', [ProductController::class, 'edit'])->name('TunaKategoriBarangi.edit');
Route::put('KategoriBarang/{id}', [ProductController::class, 'update'])->name('KategoriBarang.update');
Route::delete('KategoriBarang/{id}', [ProductController::class, 'destroy'])->name('KategoriBarang.destroy');

Route::get('StokBarang', [ProductController::class, 'index'])->name('StokBarang.index');
Route::get('StokBarang/create', [ProductController::class, 'create'])->name('StokBarang.create');
Route::post('StokBarang', [ProductController::class, 'store'])->name('StokBarang.store');
Route::get('StokBarang/{id}/edit', [ProductController::class, 'edit'])->name('StokBarang.edit');
Route::put('StokBarang/{id}', [ProductController::class, 'update'])->name('StokBarang.update');
Route::delete('StokBarang/{id}', [ProductController::class, 'destroy'])->name('StokBarang.destroy');

Route::get('Role', [ProductController::class, 'index'])->name('Role.index');
Route::get('Role/create', [ProductController::class, 'create'])->name('Role.create');
Route::post('Role', [ProductController::class, 'store'])->name('Role.store');
Route::get('Role/{id}/edit', [ProductController::class, 'edit'])->name('Role.edit');
Route::put('Role/{id}', [ProductController::class, 'update'])->name('Role.update');
Route::delete('Role/{id}', [ProductController::class, 'destroy'])->name('Role.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
