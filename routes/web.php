<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ComplaintController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Sementara tanpa auth biar bisa lanjut kerja
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('complaints', ComplaintController::class);