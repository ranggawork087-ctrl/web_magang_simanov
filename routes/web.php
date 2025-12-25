<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;

Route::get('/', [HomeController::class, 'index'])->name('view.home');
Route::get('/form', [HomeController::class, 'showForm'])->name('view.form');
Route::post('/form/submit', [HomeController::class, 'submitForm'])->name('view.submitForm');

Route::get('/login', [AuthController::class, 'showLogin'])->name('view.login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Halaman admin
Route::middleware(['role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard.admin');
    Route::get('/admin/pendaftaran/{id}', [AdminController::class, 'show'])->name('admin.pendaftaran.show');
    Route::get('/admin/kelolapendaftaran', [AdminController::class, 'kelolapendaftaran'])->name('admin.kelolapendaftaran');
    Route::get('/admin/datawawancara', [AdminController::class, 'datawawancara'])->name('admin.datawawancara');
    Route::post('/admin/pendaftaran/{id}/terima', [AdminController::class, 'terima'])->name('admin.pendaftaran.terima');
    Route::post('/admin/pendaftaran/{id}/tolak', [AdminController::class, 'tolak'])->name('admin.pendaftaran.tolak');
    Route::post('/admin/update-status/{id}', [AdminController::class, 'updateStatus'])->name('admin.updateStatus');
});

//route wawancara
Route::get('/admin/wawancara', [AdminController::class, 'datawawancara'])->name('admin.datawawancara');
Route::post('/admin/wawancara/simpan', [AdminController::class, 'simpanWawancara'])->name('admin.wawancara.simpan');
Route::post('/admin/wawancara/selesai/{id}', [AdminController::class, 'selesai'])->name('admin.wawancara.selesai');;
Route::delete('/admin/wawancara/hapus/{id}', [AdminController::class, 'hapusWawancara'])->name('admin.wawancara.hapus');

// Halaman client
Route::middleware(['role:user'])->group(function () {
    Route::get('/user/dashboard', [ClientController::class, 'dashboard'])->name('dashboard.user');
});

Route::get('/magang/file/{id}/{type}', 
    [AdminController::class, 'showFile']
)->name('magang.file');