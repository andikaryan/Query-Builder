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

// Rute dibawah untuk mengakses halaman tambah data pasien
Route::get('/', [App\Http\Controllers\PasienController::class, 'index']);

// Rute dibawah untuk akses data pasien dari database dan ditampilkan ke web
Route::get('/pasien', [App\Http\Controllers\PasienController::class, 'index']);
// Rute dibawah untuk mengakses halaman tambah data pasien
Route::get('/tambah-pasien', [App\Http\Controllers\PasienController::class, 'create']);
// Rute dibawah untuk mengirim data pasien dari web ke database
Route::post('/tambah-pasien', [App\Http\Controllers\PasienController::class, 'simpan']);
// Rute dibawah untuk akses data pasien dari database dan ditampilkan ke halaman edit data pasien
Route::get('/edit-pasien/{id}', [App\Http\Controllers\PasienController::class, 'edit']);
// Rute dibawah untuk memperbarui data pasien
Route::put('/update-pasien/{id}', [App\Http\Controllers\PasienController::class, 'update']);
// Rute dibawah untuk menghapus data yang diakses
Route::get('/hapus-pasien/{id}', [App\Http\Controllers\PasienController::class, 'destroy']);
//Rute dibawah untuk melihat detail data Pasien
Route::get('/detail-pasien/{id}', [App\Http\Controllers\PasienController::class, 'detail']);

// Rute dibawah untuk akses data ruangan dari database dan ditampilkan ke web
Route::get('/ruangan', [App\Http\Controllers\RuanganController::class, 'index']);
// Rute dibawah untuk mengakses halaman tambah data ruangan
Route::get('/tambah-ruangan', [App\Http\Controllers\RuanganController::class, 'create']);
// Rute dibawah untuk mengirim data ruangan dari web ke database
Route::post('/tambah-ruangan', [App\Http\Controllers\RuanganController::class, 'simpan']);
// Rute dibawah untuk akses data ruangan dari database dan ditampilkan ke halaman edit data ruangan
Route::get('/edit-ruangan/{id}', [App\Http\Controllers\RuanganController::class, 'edit']);
// Rute dibawah untuk memperbarui data ruangan
Route::put('/update-ruangan/{id}', [App\Http\Controllers\RuanganController::class, 'update']);
// Rute dibawah untuk menghapus data yang diakses
Route::get('/hapus-ruangan/{id}', [App\Http\Controllers\RuanganController::class, 'destroy']);
//Rute dibawah untuk melihat detail data ruangan
Route::get('/detail-ruangan/{id}', [App\Http\Controllers\RuanganController::class, 'detail']);

// Rute dibawah untuk akses data dokter dari database dan ditampilkan ke web
Route::get('/dokter', [App\Http\Controllers\DokterController::class, 'index']);
// Rute dibawah untuk mengakses halaman tambah data dokter
Route::get('/tambah-dokter', [App\Http\Controllers\DokterController::class, 'create']);
// Rute dibawah untuk mengirim data dokter dari web ke database
Route::post('/tambah-dokter', [App\Http\Controllers\DokterController::class, 'simpan']);
// Rute dibawah untuk akses data dokter dari database dan ditampilkan ke halaman edit data dokter
Route::get('/edit-dokter/{id}', [App\Http\Controllers\DokterController::class, 'edit']);
// Rute dibawah untuk memperbarui data dokter
Route::put('/update-dokter/{id}', [App\Http\Controllers\DokterController::class, 'update']);
// Rute dibawah untuk menghapus data yang diakses
Route::get('/hapus-dokter/{id}', [App\Http\Controllers\DokterController::class, 'destroy']);
//Rute dibawah untuk melihat detail data dokter
Route::get('/detail-dokter/{id}', [App\Http\Controllers\DokterController::class, 'detail']);
