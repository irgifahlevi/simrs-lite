<?php

use App\Http\Controllers\Admin\BerandaAdminController;
use App\Http\Controllers\Dokter\BerandaDokterController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route untuk admin
Route::prefix('admin')->middleware(['auth', 'auth.admin'])->group(function () {

    Route::get('beranda', [BerandaAdminController::class, 'index'])->name('admin.beranda');
});


// Route untuk dokter
Route::prefix('dokter')->middleware(['auth', 'auth.dokter'])->group(function () {

    Route::get('beranda', [BerandaDokterController::class, 'index'])->name('dokter.beranda');
});


Route::get('logout', function () {
    Auth::user()->logout();
});
