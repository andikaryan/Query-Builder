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
Route::get('/detailPasien/{id}', [App\Http\Controllers\PasienController::class, 'detail']);

// Rute dibawah untuk akses data obat dari database dan ditampilkan ke web
Route::get('/obat', [App\Http\Controllers\ObatController::class, 'index']);
// Rute dibawah untuk mengakses halaman tambah data obat
Route::get('/tambah-obat', [App\Http\Controllers\ObatController::class, 'create']);
// Rute dibawah untuk mengirim data obat dari web ke database
Route::post('/tambah-obat', [App\Http\Controllers\ObatController::class, 'simpan']);
// Rute dibawah untuk akses data obat dari database dan ditampilkan ke halaman edit data obat
Route::get('/edit-obat/{id}', [App\Http\Controllers\ObatController::class, 'edit']);
// Rute dibawah untuk memperbarui data obat
Route::put('/update-obat/{id}', [App\Http\Controllers\ObatController::class, 'update']);
// Rute dibawah untuk menghapus data yang diakses
Route::get('/hapus-obat/{id}', [App\Http\Controllers\ObatController::class, 'destroy']);
//Rute dibawah untuk melihat detail data Obat
Route::get('/detailObat/{id}', [App\Http\Controllers\ObatController::class, 'detail']);