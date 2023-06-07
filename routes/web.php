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

// Rute dibawah untuk akses data obat dari database dan ditampilkan ke web
Route::get('/ruangan', [App\Http\Controllers\RuanganController::class, 'index']);
// Rute dibawah untuk mengakses halaman tambah data obat
Route::get('/tambah-ruangan', [App\Http\Controllers\RuanganController::class, 'create']);
// Rute dibawah untuk mengirim data obat dari web ke database
Route::post('/tambah-ruangan', [App\Http\Controllers\RuanganController::class, 'simpan']);
// Rute dibawah untuk akses data obat dari database dan ditampilkan ke halaman edit data obat
Route::get('/edit-ruangan/{id}', [App\Http\Controllers\RuanganController::class, 'edit']);
// Rute dibawah untuk memperbarui data obat
Route::put('/update-ruangan/{id}', [App\Http\Controllers\RuanganController::class, 'update']);
// Rute dibawah untuk menghapus data yang diakses
Route::get('/hapus-ruangan/{id}', [App\Http\Controllers\RuanganController::class, 'destroy']);
//Rute dibawah untuk melihat detail data Obat
Route::get('/detail-ruangan/{id}', [App\Http\Controllers\RuanganController::class, 'detail']);
