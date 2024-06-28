<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AuthController;

#index
Route::get('/', [MahasiswaController::class, 'index'])->middleware('auth');
Route::post('/', [MahasiswaController::class, 'store'])->middleware('auth');
Route::delete('/', [MahasiswaController::class, 'destroy'])->middleware('auth');

#auth
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

#mahasiswa
Route::get('/edit/{id}', [MahasiswaController::class, 'edit'])->middleware('auth')->name('mahasiswa.edit');
Route::put('/update/{id}', [MahasiswaController::class, 'update'])->middleware('auth')->name('mahasiswa.update');
Route::get('/{mahasiswa}', [MahasiswaController::class, 'show'])->middleware('auth');
