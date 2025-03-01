<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;




// publics routes 
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout']);


// auth routes 
Route::middleware(['auth'])->group(function (){
    Route::get('profile', [AuthController::class, 'showProfilPage'])->name('user.profile');
    Route::post('dashboard/{id}', [AuthController::class, 'showDashboard'])->name('user.dashboard');
    // new user
    Route::post('newUser', [UserController::class, 'newUser']);
    // CRUD transactions
    Route::ressource('transactions', [TransactionController::class]);
});

