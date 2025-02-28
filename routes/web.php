<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


// publics routes 
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout']);


// auth routes 
Route::middleware(['auth'])->group(function (){
    Route::get('profile', [AuthController::class, 'showProfilPage'])->name('user.profile');
});

