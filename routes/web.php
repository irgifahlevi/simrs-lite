<?php

use App\Http\Controllers\Admin\BerandaAdminController;
use App\Http\Controllers\Admin\PasienController;
use App\Http\Controllers\Admin\PendaftaranPasienController;
use App\Http\Controllers\Admin\PoliKlinikController;
use App\Http\Controllers\Dokter\BerandaDokterController;
use App\Http\Controllers\Dokter\StatusPoliController;
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

    // Beranda admin
    Route::get('beranda', [BerandaAdminController::class, 'index'])->name('admin.beranda');


    // Route tambah data poliklinik
    Route::get('tambah-data-poliklinik', [PoliKlinikController::class, 'tambahDataPoliklinik'])->name('tambah.poliklinik');
    Route::post('simpan-data-poliklinik', [PoliKlinikController::class, 'simpanDataPoliklinik'])->name('simpan.poliklinik');
    Route::get('edit/{id}/poliklinik', [PoliKlinikController::class, 'editDataPoliklinik'])->name('edit.poliklinik');
    Route::post('update/{id}/poliklinik', [PoliKlinikController::class, 'updateDataPoliklinik'])->name('update.poliklinik');
    Route::delete('hapus/{id}/poliklinik', [PoliKlinikController::class, 'hapusDataPoliklinik'])->name('hapus.poliklinik');


    // Route tambah data pasien
    Route::get('tambah-data-pasien', [PasienController::class, 'tambahDataPasien'])->name('tambah.pasien');
    Route::post('simpan-data-pasien', [PasienController::class, 'simpanDataPasien'])->name('simpan.pasien');
    Route::get('edit/{id}/pasien', [PasienController::class, 'editDataPasien'])->name('edit.pasien');
    Route::post('update/{id}/pasien', [PasienController::class, 'updateDataPasien'])->name('update.pasien');
    Route::delete('hapus/{id}/pasien', [PasienController::class, 'hapusDataPasien'])->name('hapus.pasien');


    // Route pendaftaran pasien
    Route::get('pendaftaran-pasien', [PendaftaranPasienController::class, 'tambahPendaftaran'])->name('tambah.pendaftaran');
    Route::post('simpan-pendaftaran', [PendaftaranPasienController::class, 'simpanPendaftaran'])->name('simpan.pendaftaran');
    Route::delete('hapus/{id}/pendaftaran', [PendaftaranPasienController::class, 'hapusPendaftaran'])->name('hapus.pendaftaran');


    // Lihat status pendaftaran diperiksa
    Route::get('lihat/{id}/status', [PendaftaranPasienController::class, 'lihatStatus'])->name('lihat.status');
});


// Route untuk dokter
Route::prefix('dokter')->middleware(['auth', 'auth.dokter'])->group(function () {


    Route::get('beranda', [BerandaDokterController::class, 'index'])->name('dokter.beranda');
    // Data dokter
    Route::get('tambah-data', [BerandaDokterController::class, 'tambahData'])->name('dokter.tambah');
    Route::post('simpan-data', [BerandaDokterController::class, 'simpanData'])->name('dokter.simpan');
    Route::get('profile-dokter', [BerandaDokterController::class, 'tampilProfile'])->name('dokter.profile');


    // Poli pasien
    Route::get('poli/{id}/pasien', [StatusPoliController::class, 'buatPoli'])->name('poli.pasien');
    Route::post('simpan/{id}/poli', [StatusPoliController::class, 'simpanPoli'])->name('simpan.poli');
});


Route::get('logout', function () {
    Auth::logout();
    return redirect('login');
})->name('logout');



// Inject tinker ke dalam database
// User::create([
//     'name' => 'Admin',
//     'email' => 'admin@gmail.com',
//     'password' => bcrypt('Test1234_'),
//     'role' => 'admin'
// ]);

// Inject tinker ke dalam database
// User::create([
//     'name' => 'Jamal',
//     'email' => 'jamal@gmail.com',
//     'password' => bcrypt('Test1234_'),
//     'role' => 'dokter'
// ]);