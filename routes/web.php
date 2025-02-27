<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


// publics routes 
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');

