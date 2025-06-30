<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\DashboardController; // ✅ karena file ada di Controllers, bukan Admin

// ======================
// Halaman Awal
// ======================
Route::get('/', function () {
    return view('welcome');
});

// ======================
// ADMIN: Dashboard & Konsultasi View
// ======================
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/konsultasi', [KonsultasiController::class, 'index'])->name('admin.konsultasi.index');
});

// ======================
// ADMIN: Kelola Users
// ======================
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('/users', UserController::class);
});

// ======================
// USER: Dashboard & Konsultasi
// ======================
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('konsultasi', KonsultasiController::class)->names('user.konsultasi');
});

// ======================
// PROFIL (semua role)
// ======================
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ======================
// AUTH (Laravel Breeze)
// ======================
require __DIR__ . '/auth.php';
