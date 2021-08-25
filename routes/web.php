<?php

use App\Http\Controllers\DashboardTokoController;
use App\Http\Controllers\Landing;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
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

// Route::get('/', function () {
//     return view('landing');
// });

Route::get('/', [Landing::class, 'landing']);
Route::get('user', [DashboardTokoController::class, 'dashboardToko'])->name('dashboard');
Route::get('produk', [DashboardTokoController::class, 'produkToko'])->name('produk');
Route::get('tambah-produk', [DashboardTokoController::class, 'tambahProduk'])->name('tambah-produk');
Route::get('profile-toko', [DashboardTokoController::class, 'profileToko'])->name('profile-toko');
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::get('signup', [SignupController::class, 'signup'])->name('signup');
