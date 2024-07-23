<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PesananController;
use App\Models\Register;

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
    return view('index');
});
Route::get('/admin', function () {
    return view('auth.login');
});

Route::get('/1', function () {
    return view('admin.index');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware('auth');

// Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');

// Register
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'store'])->name('auth.store');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
// Dashboard Admin
// Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
// Route::get('/produk', [AdminController::class, 'storeProduk'])->name('produk');
// Route::get('/pesanan', [AdminController::class, 'storePesanan'])->name('pesanan');

// Produk
Route::get('/produk', [ProdukController::class, 'index'])->name('produk')->middleware('auth');
Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create')->middleware('auth');
Route::post('/produk/store', [ProdukController::class, 'store'])->name('produk.store')->middleware('auth');
Route::get('/produk/edit/{id}', [ProdukController::class, 'edit'])->name('produk.edit')->middleware('auth');
Route::get('/produk/view/{id}', [ProdukController::class, 'view'])->name('produk.view')->middleware('auth');
Route::post('/produk/update/{id}', [ProdukController::class, 'update'])->name('produk.update')->middleware('auth');
Route::post('/produk/destroy/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy')->middleware('auth');

// Pemesanan
Route::get('/pesanan', [PesananController::class, 'index'])->name('pesanan')->middleware('auth');
Route::get('/pesanan/create', [PesananController::class, 'create'])->name('pesanan.create')->middleware('auth');
Route::post('/pesanan/store', [PesananController::class, 'store'])->name('pesanan.store')->middleware('auth');
Route::get('/pesanan/edit/{id}', [PesananController::class, 'edit'])->name('pesanan.edit')->middleware('auth');
Route::get('/pesanan/view/{id}', [PesananController::class, 'view'])->name('pesanan.view')->middleware('auth');
Route::post('/pesanan/update/{id}', [PesananController::class, 'update'])->name('pesanan.update')->middleware('auth');
Route::post('/pesanan/destroy/{id}', [PesananController::class, 'destroy'])->name('pesanan.destroy')->middleware('auth');

// Pemesanan By WA
Route::post('/Pesan sekarang', [PesananController::class, 'storeWA'])->name('pesanWA.store');
