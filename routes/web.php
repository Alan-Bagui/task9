<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', [AdminController::class, 'home'])->name('home');
Route::get('/fotos', [AdminController::class, 'photos'])->name('photos');
Route::get('/contacto', [AdminController::class, 'contact'])->name('contact');