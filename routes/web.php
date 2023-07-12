<?php

use Illuminate\Support\Facades\Route;

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
    return "halaman home";
});

Route::get('/login', function () {
    return view("login");
});

Route::get('/register', function () {
    return view("register");
});

Route::get('Barang', [ProductController::class, 'index'])->name('Barang.index');
Route::get('Barang/create', [ProductController::class, 'create'])->name('Barang.create');
Route::post('Barang', [ProductController::class, 'store'])->name('Barang.store');
Route::get('Barang/{id}/edit', [ProductController::class, 'edit'])->name('Barang.edit');
Route::put('Barang/{id}', [ProductController::class, 'update'])->name('Barang.update');
Route::delete('Barang/{id}', [ProductController::class, 'destroy'])->name('Barang.destroy');


Route::get('/about', function () {
    return "halaman about";
});

Route::get('/search', function () {
    return "halaman search";
});

Route::get('/cart', function () {
    return "halaman cart";
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
