<?php

use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ProdukHukumController;
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
    return view('welcome');
});
Route::resource('galeri', GaleriController::class);
Route::resource('informasi', InformasiController::class);
Route::resource('produk-hukum', ProdukHukumController::class);
Route::resource('layanan', LayananController::class);
Route::resource('aspirasi', AspirasiController::class);

//AUTH//
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

// Route for registration
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// Route for login
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

// Route for logout (optional)
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Route buat detail wisata
Route::get('/detail-wisata', function () {
    return view('detail-wisata');
});
