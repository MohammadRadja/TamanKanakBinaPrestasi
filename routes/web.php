<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ForgotPasswordController;

Route::get('/', function () {
    return view('siswa.home');
})->name('home');


// Login & Register Siswa 
Route::view('/login', 'siswa.login')->name('login');
Route::view('/register', 'siswa.register');
Route::post('/register', [PenggunaController::class, 'registerSiswa'])->name('post.register');
Route::post('/logout', [SiswaController::class, 'logout'])->name('logout');

// Register Admin 
Route::post('/admin/register', [PenggunaController::class, 'registerAdmin'])->name('admin.register.post');
Route::view('/admin/register', 'admin.register')->name('register');
Route::post('/login', [PenggunaController::class, 'login'])->name('post.login');

// Forgot Pass 
Route::view('/siswa/forgot-password', 'siswa/forgot-password')->name('password.request');
Route::post('/siswa/forgot-password', [ForgotPasswordController::class, 'resetPassword'])->name('password.reset');

Route::view('/profil', 'siswa.profil');
Route::view('/program', 'siswa.program');
Route::view('/biodata', 'main.biodata');
Route::view('/jadwal', 'main.jadwal');
Route::view('/kontak', 'siswa.kontak');

// Siswa Routes
Route::prefix('siswa')->name('siswa.')->group(function () {
    Route::get('/dashboard', [SiswaController::class, 'dashboard'])->name('dashboard');
    Route::get('/biodata', [SiswaController::class, 'biodata'])->name('biodata');
    Route::post('/biodata/save', [SiswaController::class, 'biodatasave'])->name('biodata.save');
    Route::get('/profil', [SiswaController::class, 'profil'])->name('profil');
    Route::post('/profil/update', [SiswaController::class, 'updateProfil'])->name('profil.update');
    Route::get('/jadwal-masuk-sekolah', [SiswaController::class, 'showJadwal'])->name('jadwal');
});

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/data-siswa', [AdminController::class, 'dataSiswa'])->name('data_siswa');
    Route::get('/data-siswa/{id}', [AdminController::class, 'viewBiodata'])->name('view_biodata');
    Route::get('/tambah_siswa', [AdminController::class, 'tambahSiswaView'])->name('tambah_siswa_view');
    Route::post('/tambah_siswa', [AdminController::class, 'tambahSiswa'])->name('tambah_siswa');
    Route::get('/edit_siswa/{id}', [AdminController::class, 'editSiswa'])->name('edit_siswa');
    Route::put('/update_siswa/{id}', [AdminController::class, 'updateSiswa'])->name('update_siswa');
    Route::delete('/delete_siswa/{id}', [AdminController::class, 'deleteSiswa'])->name('delete_siswa');
    Route::get('/absensi', [AdminController::class, 'absensi'])->name('absensi');
});

// Forum Chat Routes
Route::prefix('forum')->name('forum.')->group(function () {
    Route::get('/chat', [PesanController::class, 'index'])->name('chat');
    Route::post('/pesan/kirim', [PesanController::class, 'kirimPesan'])->name('pesan.kirim');
    Route::delete('/pesan/{id}', [PesanController::class, 'hapusPesan'])->name('pesan.hapus');
    Route::get('/pesan/{id}/edit', [PesanController::class, 'editPesan'])->name('pesan.edit');
    Route::put('/pesan/{id}/update', [PesanController::class, 'updatePesan'])->name('pesan.update');
    Route::get('/pesan/reply/{id}/edit', [PesanController::class, 'editReply'])->name('pesan.reply.edit');
    Route::put('/pesan/reply/{id}/update', [PesanController::class, 'updateReply'])->name('pesan.reply.update');
});
