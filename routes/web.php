<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ExperienceController;

Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/profile', [BerandaController::class, 'profile'])->name('profile');
Route::get('/experience/{id}', [ExperienceController::class, 'show'])->name('experience.show');