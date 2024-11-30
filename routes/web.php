<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [dashboardController::class, 'tampil'])->name('dashboard.tampil');

Route::middleware('auth')->group(function(){
    Route::get('/dashboard/tambah', [dashboardController::class, 'tambah'])->name('dashboard.tambah');

    Route::post('/dashboard/submit', [dashboardController::class, 'submit'])->name('dashboard.submit');
    
    Route::get('/dashboard/edit/{id}', [dashboardController::class, 'edit'])->name('dashboard.edit');
    
    Route::post('/dashboard/update/{id}', [dashboardController::class, 'update'])->name('dashboard.update');
    Route::post('/dashboard/delete/{id}', [dashboardController::class, 'delete'])->name('dashboard.delete');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/dashboard', [dashboardController::class, 'tampil'])->name('dashboard.tampil');

Route::middleware('guest')->group(function(){
    Route::get('/registrasi', [AuthController::class, 'tampilRegistrasi'])->name('registrasi.tampil');

    Route::post('/registrasi/submit', [AuthController::class, 'submitRegistrasi'])->name('registrasi.submit');
    
    
    Route::get('/login', [AuthController::class, 'tampillogin'])->name('login');
    
    Route::post('/login/submit', [AuthController::class, 'submitlogin'])->name('login.submit');
});







